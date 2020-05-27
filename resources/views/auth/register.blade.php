@extends('layout')

@section('content')

  <div class="register-photo">
            <div class="form-container">
                <div class="image-holder"></div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h2 class="text-centercd"><strong>Yeni istifadəçi</strong></h2>
                    {{-- {{ __('Register') }} --}}

                    <div class="form-group">
                      <input  checked type="radio" value="0" id="usertype" class="@error('usertype') is-invalid @enderror" name="usertype"  required onclick="javscript:document.getElementById('company').disabled = true;document.getElementById('company').value='';"> &nbsp;Fərdi&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input  type="radio" value="1" id="usertype" class="@error('usertype') is-invalid @enderror" name="usertype"  required  onclick="javscript:document.getElementById('company').disabled = false;"> &nbsp;Korporativ
                      @error('usertype')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="form-group">
                      <select id="packetid" class="form-control @error('packetid') is-invalid @enderror" name="packetid" value="{{ old('packetid') }}" >
                        <optgroup label="Paket növü">
                        @foreach ($packets as $packet)
                          @if ($packet->price == $packetid)
                           <option value="{{ $packet->price }}" selected>{{ $packet->name }}</option>
                          @else
                           <option value="{{ $packet->price }}" >{{ $packet->name }}</option>
                          @endif
                        @endforeach
                        </optgroup>
                      </select>
                      @error('packetid')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

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
                      <input placeholder="Parol" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Confirm Password') }}
                      <input class="form-control" type="password" name="password-repeat" placeholder="Parol (təkrar)"> --}}
                      <input placeholder="Parol (təkrar)" id="password_confirm" type="password" class="form-control" name="password_confirm" required >
                    </div>
                    <div class="form-group">
                      <input placeholder="Adınız" id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                      @error('firstname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Name') }} --}}
                      {{-- <input class="form-control" type="text" name="lastname" placeholder="Soydınız"> --}}
                      <input id="lastname" placeholder="Soyadınız" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                      @error('lastname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      {{-- {{ __('Name') }} --}}
                      {{-- <input class="form-control" type="text" name="lastname" placeholder="Soydınız"> --}}
                      <input id="phone" placeholder="Telefonunuz" type="text" class="form-control @error('[phone]') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  autocomplete="phone">

                      @error('phone')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input disabled placeholder="Şirkətin adı" id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}" required autocomplete="company" autofocus>

                      @error('company')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" onclick="if  (!document.getElementById('submitbutton').disabled==false)  document.getElementById('submitbutton').disabled=false; else document.getElementById('submitbutton').disabled=true;">
                          Qaydalar ilə razıyam
                          </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <button id="submitbutton" disabled class="btn btn-primary btn-block" type="submit" style="background-color: #FF6A00;">
                        Qeydiyyat{{--  {{ __('Register') }} --}}
                      </button>
                  </div>
                    <a class="already" href="{{Route('login') }}">Artıq qeydiyyatınız var? Kabinetə daxil olun</a></form>
            </div>
        </div>

@endsection
