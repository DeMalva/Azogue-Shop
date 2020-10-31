@extends('layouts.auth')



@section('content')
    <section class="signin-page account">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="block text-center">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('images/azoguelogo2.png') }}" alt="" />
                        </a>
                        <h2 class="text-center">Introduce tus datos</h2>
                        <form
                            class="text-left clearfix"
                            method="POST"
                            action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="sr-only">Correo electronico</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo electronico">

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

                            <div class="form-group ">
                                <div class="form-check">
                                    <label for="remember" class="sr-only">Recuerdame</label>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recuerdame') }}
                                    </label>
                                </div>
                            </div>

                            <div class="text-center">
                                <button
                                    type="submit"
                                    class="btn btn-main text-center"
                                >
                                    {{ _('Entrar') }}
                                </button>
                                <p class="mt-20">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿Has olvidado tu contraseña?') }}
                                </a>
                                @endif
                                </p>
                            </div>
                        </form>
                        <p class="mt-20">
                            Si aun no lo has hecho, puedes<a href="signin.html">
                                crear una nueva cuenta</a
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
