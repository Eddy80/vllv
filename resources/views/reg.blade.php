@extends('layout')

@section('content')

  <div class="register-photo">
            <div class="form-container">
                <div class="image-holder"></div>
                <form method="post">
                    <h2 class="text-center"><strong>Yeni istifadəçi</strong></h2>
                    <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                    <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Parol"></div>
                    <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Parol (təkrar)"></div>
                    <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="Adınız"></div>
                    <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Soyadınız"></div>
                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Qaydalar ilə razıyam</label></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: #FF6A00;">Qeydiyyat</button></div>
                    <a class="already" href="login">Artıq qeydiyyatınız var? Kabinetə daxil olun</a></form>
            </div>
        </div>

@endsection
