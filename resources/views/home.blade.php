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
      <div class="horizontalorangeline"></div>


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
      <div class="horizontalorangeline"></div>

      <div class="article-list" style="background-color: #E6E6E6;">
          <div class="container" style="background-color: #E6E6E6;">
              <div class="d-inline intro">
                <a href="javascript:new_popular(0);"><h4  id="yeni" class="text-center d-inline-block" style="padding-top: 37px;color: #FF7E00;">Yeni</h4></a>
                <h4 class="text-center d-inline-block" style="padding-top: 37px;color: #7a7774;">&nbsp;|&nbsp;</h4>
                <a href="javascript:new_popular(1);"><h4 id="pop" class="text-center d-inline-block" style="padding-top: 37px;color: #7a7774;">Populyar</h4></a>
              </div>
              <div class="row articles itemlesson"  id="new">
                @foreach ($lessonsnew as $lessonnew)

                  @php
                  $totalHour =   floor($lessonnew->totaldurationinseconds/3600);
                  $totalMinute = floor(abs($lessonnew->totaldurationinseconds-$totalHour*3600)/60);
                  $totalSecond = floor(abs($lessonnew->totaldurationinseconds-$totalHour*3600)%60);

                  if ( strlen($totalHour)==1)  $totalHour= "0".$totalHour;
                  if ( strlen($totalMinute)==1)  $totalMinute= "0".$totalMinute;
                  if ( strlen($totalSecond)==1)  $totalSecond= "0".$totalSecond;

                  $totalFormat = $totalHour.":".$totalMinute.":".$totalSecond;
                  @endphp

                  @foreach($experts as $expert)
                    @if($expert->id == $lessonnew->authorid)
                      @php $currentexpert = $expert->firstname.' '.$expert->lastname; @endphp
                    @endif
                  @endforeach
                  <div class="col-sm-6 col-md-4 m-auto item" data-bs-hover-animate="pulse">
                      <div class="itemlessoninside">
                          <img class="img-fluid" src="assets/vl_videos/cat{{ $lessonnew->id }}/preview.jpg" style="margin-top: 0;">
                          <h6 class="text-left exp"><strong>Expert:</strong> {{ $currentexpert }}</h6>
                          <h3 class="text-left lessonname">{{ $lessonnew->name }}</h3>
                          <a class="btn btn-primary text-left d-inline-block float-left d-xl-flex justify-content-xl-start" role="button" data-bs-hover-animate="pulse" href="/lesson/{{ $lessonnew->id }}" style=" box-shadow: 2px 2px gray;"><strong>BAXMAQ</strong></a>
                          <strong class="text-dark d-inline-block float-right d-xl-flex justify-content-xl-start duration">{{ $totalFormat }}</strong>
                      </div>
                      <p class="description"></p>
                      <em style="margin-left: 80px;"></em>
                    </div>
                @endforeach
              </div>
              <div class="row articles itemlesson" id="popular">
                @foreach ($lessonspopular as $lessonpopular)

                  @php
                  $totalHour =   floor($lessonpopular->totaldurationinseconds/3600);
                  $totalMinute = floor(abs($lessonpopular->totaldurationinseconds-$totalHour*3600)/60);
                  $totalSecond = floor(abs($lessonpopular->totaldurationinseconds-$totalHour*3600)%60);

                  if ( strlen($totalHour)==1)  $totalHour= "0".$totalHour;
                  if ( strlen($totalMinute)==1)  $totalMinute= "0".$totalMinute;
                  if ( strlen($totalSecond)==1)  $totalSecond= "0".$totalSecond;

                  $totalFormat = $totalHour.":".$totalMinute.":".$totalSecond;
                  @endphp

                  @foreach($experts as $expert)
                    @if($expert->id == $lessonpopular->authorid)
                      @php $currentexpert = $expert->firstname.' '.$expert->lastname; @endphp
                    @endif
                  @endforeach
                  <div class="col-sm-6 col-md-4 m-auto item" data-bs-hover-animate="pulse">
                      <div class="itemlessoninside">
                          <img class="img-fluid" src="assets/vl_videos/cat{{ $lessonpopular->id }}/preview.jpg" style="margin-top: 0;">
                          <h6 class="text-left exp"><strong>Expert:</strong> {{ $currentexpert }}</h6>
                          <h3 class="text-left lessonname">{{ $lessonpopular->name }}</h3>
                          <a class="btn btn-primary text-left d-inline-block float-left d-xl-flex justify-content-xl-start" role="button" data-bs-hover-animate="pulse" href="/lesson/{{ $lessonpopular->id }}">BAXMAQ</a>
                          <strong class="text-dark d-inline-block float-right d-xl-flex justify-content-xl-start duration">{{ $totalFormat }}</strong>
                      </div>
                      <p class="description"></p>
                      <em style="margin-left: 80px;"></em>
                    </div>
                @endforeach
              </div>
          </div>
      </div>
      <div class="highlight-blue" style="background-color: #E6E6E6;height: 64px;padding: 1px;">
          <div class="container">
              <div class="buttons " style="margin-top: -30px;"><a class="btn btn-primary" role="button mybtn" data-bs-hover-animate="pulse" href="{{ Route('lessons') }}" style="background-color: #FF7E00;color: #fff;margin-top: 0px;  font-size: 20px; box-shadow: 2px 2px gray;">DAHA ÇOX</a></div>
          </div>
      </div>
      <div class="horizontalorangeline"></div>
      @include('partners')
      @include('comments')
      @include('paymethods')
      @include('packets')


      <div class="highlight-blue" style="background-color: #fff;">
            <div class="container">
                <div class="intro">
                    <h4 class="text-center" style="color: #000;"><strong>Bütün video dərslərə limitsiz baxmaq icazəsi</strong><br></h2>
                    <p class="text-center">Videoline - da yer alan 150+ video və 400+ dəqiqə dərslərə limitsiz icazə əldə etmək üçün indi<br></p>
                </div>
                <div class="buttons"><a class="btn btn-primary" role="button" data-bs-hover-animate="pulse" href="#" style="background-color: #FF6A00;color: #fff;font-size: 20px;box-shadow: 2px 2px gray;">ÜZV OL</a></div>
            </div>
        </div>
        <div class="horizontalorangeline"></div>
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
