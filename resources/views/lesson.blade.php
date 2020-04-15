@extends('layout')

@section('content')
  <div  class="photo-gallery"></div>
  <div style="background-color: #fff;">
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="background-color: #fff;">
                  <div class="intro">
                      <h4 class="text-left" style="color: rgb(132,138,145);">Ana səhifə &nbsp;&gt; &nbsp;Təlimlər</h4>
                      <h3 class="text-left">Gizli hipnoz təlimi</h3>
                      <p class="text-left" style="color: #FF6A00;"><strong>Gizli hipnoz anlayışı</strong></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div style="background-color: #fff;padding-bottom: 50px;">
      <div class="container">
          <div class="row">
              <div class="col-md-8" style="background-color: #000;padding: 20px 20px 20px 20px;padding-top: 18px;"><video controls="" style="background-color: red;" width="100%" height="100%"></video></div>
              <div class="col-md-4" style="background-color: #000;padding: 20px 20px 20px 20px;">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="mb-0">Təlimin videoları</h5>
                      </div>
                      <div class="card-body" style="height: 336px;">
                          <ul>
                              <li>Item 1</li>
                              <li>Item 2</li>
                              <li>Item 3</li>
                              <li>Item 4</li>
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
