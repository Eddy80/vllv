@extends('layout')

@section('content')
  <div style="background-color: #fff;margin-top: 50px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="background-color: #fff;">
                  <div class="intro">
                      <h4 class="text-left" style="color: rgb(132,138,145);">Ana səhifə</h4>
                      <h3 class="text-left">Xoş gəldin qadishka! (Qadir Aziz)<br></h3>
                      <p class="text-left" style="color: #FF6A00;">Videoline'ın hər gün genişlənən dərs videoları ilə ehtiyacın olan hər mövzu burada!<br></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div style="background-color: #fff;padding-bottom: 50px;">
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

  <div class="article-clean">
      <div class="container">
          <div class="row">
              <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                  <div class="text-center intro">
                      <h1 class="text-center">Təbriz Hacınski</h1>
                      <p class="text-center"><span class="by"></span> </p><img class="img-fluid" src="assets/img/Tebriz.png"></div>
                  <div class="text">
                      <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel
                          in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                      <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum
                          ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
