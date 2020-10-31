@extends('layouts.auth')

@section('content')
    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('images/azoguelogo2.png') }}" alt="" />
                        </a>
                        <h2 class="text-center">Crea tu cuenta</h2>
                        <form
                            class="text-left clearfix"
                            method="POST"
                            action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="name" class="sr-only">Nombre</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre de Usuario">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="sr-only">Correo Electronico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electronico">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="sr-only">Contraseña</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="sr-only">Confirmar contraseña</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">

                            </div>

                            {{-- <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input id="medida_1" type="" class="form-control" name="medida_1" required autocomplete="medida_1" placeholder="medida_1">
                                </div>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div> --}}

                            <div class="text-center">
                            <button
                                type="submit"
                                class="btn btn-main text-center"
                            >
                                {{ _('Registrarte') }}
                            </button>
                        </div>
                    </form>
                        <p class="mt-20">
                            Si ya tienes una cuenta <a href="login.html">
                                Entra</a
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
