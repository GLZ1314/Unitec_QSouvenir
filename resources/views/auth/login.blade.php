@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Log in</h2>
    <div class="row">
        <div class="col-md-4">
            <section>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h4>Use a local account to log in.</h4>
                        <hr />
                        <div class="form-group">
                            <label for="email" >E-mail Address</label>
{{--                            <div class="col-md-6">--}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
{{--                            </div>--}}
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

{{--                            <div class="col-md-6">--}}
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
{{--                            </div>--}}
                        </div>

                        <div class="form-group">
{{--                            <div class="col-md-6 offset-md-4">--}}
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
{{--                            </div>--}}
                        </div>

                        <div class="form-group">
{{--                            <div class="col-md-8 offset-md-4">--}}
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <br>
                                <br>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                @endif
{{--                            </div>--}}
                        </div>
                    </form>

            </section>
        </div>
    </div>
</div>
@endsection
