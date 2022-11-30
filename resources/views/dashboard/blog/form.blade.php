@extends('dashboard.layouts.app')

@section('styles')
    @parent

    <link rel="stylesheet" href="{{ asset('lib/dropzone/dropzone.min.css') }}">
@endsection

@section('content')
    <div id="blog-view">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <a class="btn btn-light" href="{{route('blog.index')}}"><i class="fas fa-arrow-left"></i></a>
                {{ isset($blog) ? 'Editar' : 'Crear'}} Artículo
            </h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{ isset($blog) ? route('blog.update', $blog->id) : route('blog.store') }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf

                            @if(isset($blog))
                                {{ method_field('PUT') }}
                            @endif

                            <div class="cover-container" id="coverContainer"
                                 style="background-image: {{ isset($blog) ? 'url(' . $blog->getFirstMediaUrl('blog-cover') . ')' : '' }}">
                                <input id="cover" name="cover" type="file" class="d-none">
                                <button type="button" id="selectCover" class="btn btn-primary">Seleccionar imagen
                                </button>
                                <h6 class="text-muted mt-3">Esta imagen aparecerá como la portada principal del
                                    artículo</h6>
                            </div>

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="{{ isset($blog) ? $blog->name : '' }}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Introducción</label>
                                <input type="text" class="form-control" id="intro" name="intro" maxlength="140"
                                       value="{{ isset($blog) ? $blog->intro : '' }}" required>
                                <small class="text-muted">
                                    <span id="introCounter">{{ isset($blog) ? strlen($blog->intro) : '0' }}</span> / 140
                                </small>
                            </div>

                            <div class="form-group">
                                <label for="content">Contenido</label>
                                <textarea class="form-control" name="content" id="summernote" rows="10" required>
                                    {{ isset($blog) ? $blog->content : '' }}
                                </textarea>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">
                                    {{ isset($blog) ? 'Actualizar' : 'Publicar' }}
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    @parent

    <script src="{{ asset('lib/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/blog.js') }}"></script>
@endsection