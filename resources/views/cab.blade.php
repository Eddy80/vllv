@extends('layout')
@section('content')

@if (  (Auth::user()->payamount==0) || (Auth::user()->payexpiredate< date('Y-m-d') ) )
  @include('packets')
@endif

  <div style="background-color: #fff;padding: 30px 0px 70px 0px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="background-color: #fff;">
                  <div class="intro">
                      {{-- <h4 class="text-left" style="color: rgb(132,138,145);">Ana səhifə</h4> --}}
                      <h4 class="text-left" style="font-family: Tahoma, Helvetica, Arial, sans-serif;font-weight: bold;color: #3c3c3c;line-height: 30px;">Xoş gəldin {{Auth::user()->firstname}} {{Auth::user()->lastname}}!</h4>
                      <p class="text-left" style="color: #FF6A00;">Videoline'ın hər gün genişlənən dərs videoları ilə ehtiyacın olan hər mövzu burada!<br></p>
                  </div>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col-md-8 mylessons" >

                  <ul>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary ">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                      <li class=" lessonlistitem ">
                        <a href="/lesson25">
                        MPF - Psixoloqun verbal və inverbal ünsiyyəti
                        </a>
                        <div class="link">
                          <button type="button" class="btn btn-secondary">75% Tamamlandı</button>
                        </div>
                      </li>
                  </ul>
              </div>
              <div class="col-md-4" style="background-color: #fff;padding: 20px 20px 20px 20px;">
                  <div class="card">
                      <div class="card-header">
                          <h5 class="mb-0"><strong>Üzvlük məlumatları</strong></h5>
                      </div>
                      <div class="card-header" style="background-color: #FF6A00;">
                          <h5 class="mb-0">Videoline özəl üzvlüyü</h5>
                      </div>
                      <div class="card-body" style=" display:inline-block">
                        <label style="color: black;float:left;font-weight:bold;">
                          Qalan günlər: &nbsp; &nbsp;&nbsp;
                        </label>
                        <input  type="text" value="15" style="width: 50px; background-color: black; color: #fff;font-size: 16px;float:right;-webkit-border-radius: 4px;
                        -moz-border-radius: 4px; border-radius: 4px;" readonly/>
                      </div>

                      <div class="card-header text-center">
                          <h5 class="mb-0"></h5>
                          <button class="btn btn-success" type="button" style="background-color: #FF6A00;padding: 6px 12px;">
                            <strong>Üzvlüyü uzat</strong>
                          </button>
                      </div>

                      <div class="card-body" style=" display:inline-block">
                        <label style="color: black;float:left;font-weight:bold;">
                          Fərdi endirim kodu: &nbsp; &nbsp;&nbsp;
                        </label>
                        <input  type="text" value="5545567610" style="width: 97px; background-color: black; color: #fff;font-size: 16px;float:right;-webkit-border-radius: 4px;
                        -moz-border-radius: 4px; border-radius: 4px;" readonly />
                        <label style="color: orange;float:right;font-size:10px">
                        (köçürtmək üçün endirim kodunu klikləyin)
                        </label>
                        <label style="color: blue;float:right;font-size:12px; text-align:justify;">
                          Fərdi Endirim Kodunuzu tanışlarınıza verməklə onların hər aldığı ödəniş paketinin 50% miqdarında maddi vəsait sizə pul şəklində ödəniləcəkdir.
                        </label>


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
<div class="horizontalorangeline"></div>


@endsection
