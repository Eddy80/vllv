@extends('layout')

@section('content')

  <div class="register-photo">
            <div class="form-container">
                <div class="image-holder"></div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="text-centercd"><strong>Yeni istifadəçi </strong></h2>
                    {{-- {{ __('Register') }} --}}
                    <div class="form-group">
                      {{-- {{ __('E-Mail Address') }}
                      <input class="form-control" type="email" name="email" placeholder="Email"> --}}
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Password') }}
                      <input class="form-control" type="password" name="password" placeholder="Parol"> --}}
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Confirm Password') }}
                      <input class="form-control" type="password" name="password-repeat" placeholder="Parol (təkrar)"> --}}
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Name') }} --}}
                      {{-- <input class="form-control" type="text" name="firstname" placeholder="Adınız"> --}}
                      <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                      @error('firstname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Name') }} --}}
                      {{-- <input class="form-control" type="text" name="lastname" placeholder="Soydınız"> --}}
                      <input id="lastname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="lastname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                      @error('firstname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Qaydalar ilə razıyam</label></div>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary btn-block" type="submit" style="background-color: #FF6A00;">
                        Qeydiyyat{{--  {{ __('Register') }} --}}
                      </button>
                  </div>
                    <a class="already" href="login">Artıq qeydiyyatınız var? Kabinetə daxil olun</a></form>
            </div>
        </div>

@endsection
