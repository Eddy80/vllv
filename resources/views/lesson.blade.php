@extends('layout')

@section('content')
  <div  class="photo-gallery"></div>
  <div style="background-color: #fff;">
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="background-color: #fff;">
                  <div class="intro">
                      <h4 class="text-left" style="margin-top: 20px; color: rgb(132,138,145); font-size: 16px;font-weight: bold; font-family: Tahoma, Helvetica, Arial, sans-serif;">Ana səhifə &nbsp;&gt; &nbsp;<span style="color:#FF6A00;">Təlimlər</span></h4>
                      <h3 class="text-left" style="font-size: 21px;font-weight: bold;font-family: Tahoma, Helvetica, Arial, sans-serif;">Gizli hipnoz təlimi</h3>
                      <p class="text-left" style="color: #FF6A00;"><strong>Gizli hipnoz anlayışı</strong></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div style="background-color: #fff;padding-bottom: 50px;">
      <div class="container">
          <div class="row">
              <div class="col-md-8" style="background-color: #000;padding: 20px 20px 20px 20px;padding-top: 18px;">
                <video controls="" style="background-color: red;" width="100%" height="108%"></video>
              </div>
              <div class="col-md-4" style="background-color: #000;padding: 20px 20px 20px 20px;">
                  <div class="card" style="height:108%">
                      <div class="card-header">
                          <h5 class="mb-0" style="font-weight:bold;">Təlimin videoları</h5>
                      </div>
                      <div class="card-body playlist" style="height: 336px;padding:0px;">
                          <ul style="padding:0px;">
                              <li  movieurl="" movieid="" moviename="" >
                                  <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;1-ci video
                              </li>
                              <li  movieurl="" movieid="" moviename="" >
                                  <i class="fas fa-play-circle"></i>&nbsp;&nbsp;&nbsp;2-ci video
                              </li>
                          </ul>
                      </div>
                      <div class="card-header text-center">
                          <h5 class="mb-0"></h5><button class="btn btn-secondary" type="button" style="padding: 6px 12px;"><strong>SERTİFİKAT AL</strong></button></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
