@extends('dashboard.layouts.app')

@section('styles')
    @parent
    <link rel="stylesheet" href="{{ asset('lib/dropzone/dropzone.min.css') }}">
    <style>
        .ui-helper-hidden-accessible {
            display: none !important;
        }

        .current-gallery .thumb {
            width: 200px;
            height: auto;
        }

        .current-gallery .thumb {

        }

    </style>
@endsection

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <a class="btn btn-light" href="{{route('events.index')}}"><i class="fas fa-arrow-left"></i></a>
            {{ isset($event) ? 'Editar' : 'Crear'}} Evento
        </h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <form id="form"
                          action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}"
                          method="POST" enctype="multipart/form-data">
                        @csrf

                        @if(isset($event))
                            {{ method_field('PUT') }}
                        @endif


                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="{{ isset($event) ? $event->name : '' }}"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="name">Introducción</label>
                            <input type="text" class="form-control" id="intro" name="intro" maxlength="140"
                                   value="{{ isset($event) ? $event->intro : '' }}" required>
                            <small class="text-muted">
                                <span id="introCounter">{{ isset($event) ? strlen($event->intro) : '0' }}</span> / 140
                            </small>
                        </div>

                        <div class="col-12 col-md-4 p-0">
                            <div class="form-group">
                                <label for="name">Fecha</label>
                                <input type="date" class="form-control" id="date" name="date"
                                       value="{{ isset($event) ? $event->date->format('Y-m-d') : '' }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content">Contenido</label>
                            <textarea class="form-control" name="content" id="summernote" rows="10" required>
                                {{ isset($event) ? $event->content : '' }}
                            </textarea>
                        </div>

                        <div id="gallery">
                            @if(isset($event))
                                <h6>Galería actual</h6>
                                <div class="current-gallery d-flex flex-row flex-shrink-0">
                                    @foreach($event->media as $media)
                                        <div class="thumb d-flex align-items-center justify-content-center mx-2">
                                            <img class="img-fluid" src="{{ $media->getFullUrl() }}" alt="">
                                        </div>
                                    @endforeach
                                </div>

                                <h6 class="mt-4">Actualizar galería</h6>
                            @endif
                            <div id="myAwesomeDropzone" class="dropzone dropzone-previews"></div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary" id="submitBtn">
                                {{ isset($event) ? 'Actualizar' : 'Publicar' }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    @parent
    <script src="{{ asset('lib/dropzone/dropzone.min.js') }}"></script>
    <script
            src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
            integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("input#intro").on('keyup', function () {
                $("#introCounter").text($(this).val().length);
            });

            const $cover = $("#cover");

            $("#selectCover").click(function () {
                $cover.click();
            });

            $cover.on('change', () => previewFile());
        });

        Dropzone.options.myAwesomeDropzone = { // The camelized version of the ID of the form element
            url: "/post",
            // The configuration we've talked about above
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,
            addRemoveLinks: true,

            // The setting up of the dropzone
            init: function () {
                var dropzone = this;

                // First change the button to actually tell Dropzone to process the queue.
                document.querySelector("#submitBtn").addEventListener("click", function (e) {
                    // Make sure that the form isn't actually being sent.
                    e.preventDefault();
                    e.stopPropagation();
                    const form = document.querySelector('#form');
                    const fd = new FormData(form);
                    dropzone.files.forEach(function (file, index) {
                        fd.append('file[' + index + ']', file);
                    });
                    //dropzone.processQueue();
                    $.ajax({
                        url: form.action,
                        method: form.method,
                        data: fd,
                        processData: false,
                        contentType: false,
                        success: function (res) {
                            window.location = res;
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    })
                });
            }

        }

        $(".dropzone").sortable({
            items: '.dz-preview',
            cursor: 'move',
            opacity: 0.5,
            containment: '.dropzone',
            distance: 20,
            tolerance: 'pointer'
        });
    </script>
@endsection