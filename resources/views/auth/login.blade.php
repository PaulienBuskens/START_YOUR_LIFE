@extends('layouts.app')

@section('content')

    <h1>Login</h1>
        <div class="form">
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="email__form">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="password__form">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span>
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="btn__form">
                    <button type="submit">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
@endsection
