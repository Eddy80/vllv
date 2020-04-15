@extends('layout')

@section('content')

  <div class="login-clean">
            <form method="post">
                <h2 class="sr-only">Kabinetə giriş</h2>
                <div class="illustration"><i class="icon ion-ios-navigate" style="color: #FF6A00;"></i></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Parol"></div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit" style="background-color: #FF6A00;">
                    Daxil olun
                  </button>
                </div>
                <a class="forgot" href="#">email və ya parolu unutmusuz?</a>
            </form>
  </div>

@endsection
