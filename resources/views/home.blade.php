@extends('layout')

@section('content')

  <div class="simple-slider">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div data-aos="slide-left" data-aos-duration="50" class="swiper-slide" style="background-image: url(&quot;assets/img/gizli.jpg&quot;);background-size: contain;background-repeat: no-repeat;background-position: center;background-color: #000;"></div>
                  <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                  <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </div>
      </div>
      <div class="features-boxed" style="background-color: #ffffff;">
          <div class="container">
              <div class="intro"></div>
              <div class="row justify-content-center features">
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div class="box"><i class="fa fa-clock-o icon" style="color: #000;"></i>
                          <h3 class="name">24 saat<br></h3>
                          <p class="description">İzləmək və öyrənmək imkanı. İstədiyiniz zaman, istədiyiniz yerdən bizi izləyə bilərsiniz<br></p>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div class="box"><i class="fa fa-group icon" style="color: #000;"></i>
                          <h3 class="name">Təcrübəli mütəxəssislər<br></h3>
                          <p class="description">Sahələri üzrə ən təcrübəli mütəxəssisləri seçərək bizimlə öyrənəcək, sertifikat və slaydlar əldə edəcəksiniz<br></p>
                      </div>
                  </div>
                  <div class="col-sm-6 col-md-5 col-lg-4 item">
                      <div class="box"><i class="fa fa-list-alt icon" style="color: #000;"></i>
                          <h3 class="name">Daim yenilənmə</h3>
                          <p class="description">Hər ay 50-ə dək müxtəlif və yeni video əldə edəcəksiniz, &nbsp;daim yenilənən dərslərimizi izləyin<br></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="article-list" style="background-color: #E6E6E6;">
          <div class="container" style="background-color: #E6E6E6;">
              <div class="d-inline intro">
                  <a href="javascript:new_popular(0);"><h2 id="yeni" class="text-center d-inline-block" style="padding-top: 27px;color: #FF7E00;font-size: 26px;">Yeni</h2></a>
                  <h2 class="text-center d-inline-block" style="padding-top: 27px;color: #7a7774;font-size: 26px;">&nbsp;|&nbsp;</h2>
                  <a href="javascript:new_popular(1);"><h2 id="pop" class="text-center d-inline-block" style="padding-top: 27px;color: #7a7774;font-size: 26px;">Populyar</h2></a>
              </div>
              <div class="row articles" style="padding-bottom: 0px;" id="new">
                @foreach ($lessonsnew as $lessonnew)
                  <div class="col-sm-6 col-md-4 m-auto item" data-bs-hover-animate="pulse"><a href="#"></a>
                      <div style="padding: 12px;background-color: #fff;padding-bottom: 35px;"><img class="img-fluid" src="assets/img/building.jpg" style="margin-top: 0;">
                          <h6 class="text-left">Expert: Təbriz Hacınski</h6>
                          <h3 class="text-left name" style="font-size: 20px;margin-top: 11px;margin-bottom: 10px;height: 70px;">{{ $lessonnew->name }}</h3><a class="btn btn-primary text-left d-inline-block float-left d-xl-flex justify-content-xl-start" role="button" data-bs-hover-animate="pulse" href="#" style="background-color: #FF7E00;color: #fff;padding: 6px;padding-bottom: 2px;font-size: 12px;padding-top: 2px;"><strong>BAXMAQ</strong></a>
                          <strong
                              class="text-dark d-inline-block float-right d-xl-flex justify-content-xl-start" style="padding: 0px 0px 0px 20px;font-size: 14px;">13:05:22</strong>
                      </div>
                      <p class="description"></p><a class="action" href="#"></a>
                      <em style="margin-left: 80px;"></em>
                    </div>
                @endforeach
              </div>
              <div class="row articles" style="padding-bottom: 0px; display:none;" id="popular">
                @foreach ($lessonspopular as $lessonpopular)
                  <div class="col-sm-6 col-md-4 m-auto item" data-bs-hover-animate="pulse"><a href="#"></a>
                      <div style="padding: 12px;background-color: #fff;padding-bottom: 35px;"><img class="img-fluid" src="assets/img/building.jpg" style="margin-top: 0;">
                          <h6 class="text-left">Expert: Təbriz Hacınski</h6>
                          <h3 class="text-left name" style="font-size: 20px;margin-top: 11px;margin-bottom: 10px;height: 70px;">{{ $lessonpopular->name }}</h3><a class="btn btn-primary text-left d-inline-block float-left d-xl-flex justify-content-xl-start" role="button" data-bs-hover-animate="pulse" href="#" style="background-color: #FF7E00;color: #fff;padding: 6px;padding-bottom: 2px;font-size: 12px;padding-top: 2px;"><strong>BAXMAQ</strong></a>
                          <strong
                              class="text-dark d-inline-block float-right d-xl-flex justify-content-xl-start" style="padding: 0px 0px 0px 20px;font-size: 14px;">13:05:22</strong>
                      </div>
                      <p class="description"></p><a class="action" href="#"></a>
                      <em style="margin-left: 80px;"></em>
                    </div>
                @endforeach
              </div>
          </div>
      </div>
      <div class="highlight-blue" style="background-color: #E6E6E6;height: 64px;padding: 1px;">
          <div class="container">
              <div class="intro"></div>
              <div class="buttons" style="margin-top: -20px;"><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="{{ Route('lessons') }}" style="background-color: #FF7E00;color: #fff;margin-top: 0px;">DAHA ÇOX</a></div>
          </div>
      </div>
      @include('partners')
      @include('comments')
      @include('partners')
      @include('packets')


      <div class="highlight-blue" style="background-color: #fff;">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" style="color: #000;font-size: 23px;"><strong>Bütün video dərslərə limitsiz baxmaq icazəsi</strong><br></h2>
                    <p class="text-center">Videoline - da yer alan 150+ video və 400+ dəqiqə dərslərə limitsiz icazə əldə etmək üçün indi<br></p>
                </div>
                <div class="buttons"><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="#" style="background-color: #FF6A00;color: #fff;font-size: 20px;">ÜZV OL</a></div>
            </div>
        </div>

{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
