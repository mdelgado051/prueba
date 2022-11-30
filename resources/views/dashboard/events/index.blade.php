@extends('dashboard.layouts.app')

@section('content')

    @if(session('alert'))
        <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show" role="alert">
            {{ session('alert')['message'] }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Eventos</h1>
        <a href="{{ route('events.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
    </div>

    <div class="card shadow my-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Todos los eventos</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
            @if (!isset($events) || !$events->count())
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img class="d-block img-fluid px-3 px-sm-4 mt-3 mt-5 mb-3 mx-auto" style="width: 20rem;"
                         src="{{ asset('dashboard/img/undraw_posting_photo.svg') }}" alt="">
                    <h6>No hay eventos disponibles</h6>
                    <a href="{{ route('events.create') }}" class="btn btn-primary my-2">Comienza creando uno</a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Fecha de creción</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->user->name }}</td>
                                <td>{{ $event->created_at }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('events.post', $event->slug) }}"
                                       class="btn btn-primary btn-xs mx-1"
                                       target="_blank">
                                        Ver artículo
                                    </a>
                                    <a href="{{ route('events.edit', $event->slug) }}" class="btn btn-primary btn-xs mx-1">
                                        Editar
                                    </a>
                                    <form action="{{ route('events.delete', $event->id) }}" method="POST" class="mx-1">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger btn-xs">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

@endsection
