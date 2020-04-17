@extends('layout')
@section('content')
{{--
@if (  (Auth::user()->payamount==0) && (Auth::user()->payexpiredate< date('Y-m-d') ) )
  @include('packets.php');
@endif --}}

  <div style="background-color: #fff;padding-top: 30px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="background-color: #fff;">
                  <div class="intro">
                      <h4 class="text-left" style="color: rgb(132,138,145);">Ana səhifə</h4>
                      <h3 class="text-left">Xoş gəldin {{Auth::user()->firstname}} {{Auth::user()->lastname}}!</h3>
                      <p class="text-left" style="color: #FF6A00;">Videoline'ın hər gün genişlənən dərs videoları ilə ehtiyacın olan hər mövzu burada!<br></p>
                  </div>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col-md-8" style="background-color: #fff;padding: 20px 20px 20px 20px;padding-top: 18px;">
                  <ul style="background-color: #ccc9c9;">
                      <li>Item 1</li>
                      <li>Item 1</li>
                      <li>Item 2</li>
                      <li>Item 3</li>
                      <li>Item 4</li>
                  </ul>
              </div>
              <div class="col-md-4" style="background-color: #fff;padding: 20px 20px 20px 20px;">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="mb-0"><strong>Üzvlük məlumatları</strong></h5>
                      </div>
                      <div class="card-header" style="background-color: #4f86c3;">
                          <h5 class="mb-0">Videoline özəl üzvlüyü</h5>
                      </div>
                      <div class="card-body" style="height: 336px;"><label style="color: rgb(6,122,238);">Qalan günlər: &nbsp; &nbsp;&nbsp;</label><input class="bg-primary" type="text" value="15" style="color: #fff;font-size: 16px;"><button class="btn btn-primary text-center d-xl-flex" type="button"
                              style="padding: 6px 12px;"><strong>Üzvlüyü uzat</strong></button></div>
                      <div class="card-header text-center">
                          <h5 class="mb-0"></h5><button class="btn btn-success" type="button" style="padding: 6px 12px;"><strong>Üzvlüyü uzat</strong></button></div>
                  </div>
              </div>
          </div>
      </div>
  </div>



@endsection
