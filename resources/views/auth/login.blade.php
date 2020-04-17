@extends('layout') {{-- @extends('layouts.app') --}}
@section('content')
  <div class="login-clean">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h2 class="sr-only">Kabinetə giriş</h2>
                <div class="illustration">
                  <img src="assets/img/logo.png">
                  {{-- <i class="icon ion-ios-navigate" style="color: #FF6A00;"></i> --}}
                </div>
                <div class="form-group">
                  {{-- <input class="form-control" type="email" name="email" placeholder="Email"> --}}
                  {{-- {{ __('Password') }} --}}
                  <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                  {{-- <input class="form-control" type="password" name="password" placeholder="Parol"> --}}
                  {{-- {{ __('E-Mail Address') }} --}}
                  <input placeholder="Parol" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>

                <div class="form-group">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  Yadda saxla  {{-- {{ __('Remember Me') }} --}}
                </label>
                </div>

                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit" style="background-color: #FF6A00;">
                    {{--  {{ __('Login') }} --}} Daxil olun
                  </button>


                </div>

                @if (Route::has('password.request'))
                    <a class="forgot" href="{{ route('password.request') }}">
                      email və ya parolu unutmusuz?  {{-- {{ __('Forgot Your Password?') }} --}}
                    </a>
                @endif

            </form>
  </div>



@endsection
