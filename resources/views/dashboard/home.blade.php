@extends('dashboard.layouts.app')

@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
        <a href="/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-arrow-left fa-sm text-white-50"></i> Volver al Sitio</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Artículos (Blog)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $blogsCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-blog fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Eventos
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $eventsCount }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Row -->

    <div class="row">

        <div class="col-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Mantén tu portal actualizado</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area" style="height: auto;">
                        {{--<h5 class="text-center"></h5>--}}
                        <img class="d-block img-fluid px-3 px-sm-4 mt-3 my-5 mx-auto" style="width: 20rem;"
                             src="{{ asset('dashboard/img/undraw_posting_photo.svg') }}" alt="">
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('blog.create') }}" class="btn btn-primary mx-2">Crear Artículo</a>
                            <a href="{{ route('events.create') }}" class="btn btn-primary mx-2">Crear Evento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
