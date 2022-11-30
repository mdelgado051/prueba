@extends('dashboard.layouts.base')

@section('body-class', 'bg-gradient-primary login-body')

@section('body')

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="d-flex flex-column">
                    <img src="{{ asset('img/logo.png') }}" class="d-block m-auto">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"
                                     style="background-image: url({{ asset('img/home/cover.jpg') }})"
                                ></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                        </div>
                                        <form class="user" method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group">
                                                <input id="email" type="email"
                                                       class="form-control form-control-user @error('email') is-invalid @enderror"
                                                       name="email" value="{{ old('email') }}" required
                                                       placeholder="Correo electrónico o usuario"
                                                       autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <input id="password" type="password"
                                                       class="form-control form-control-user @error('password') is-invalid @enderror"
                                                       placeholder="Contraseña"
                                                       name="password" required autocomplete="current-password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input"
                                                           name="remember"
                                                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label"
                                                           for="customCheck">Recordarme</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Iniciar Sesión
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

@endsection