@extends('layout')

@section('content')
  <div class="article-list" style="background-color: #E6E6E6;">
      <div class="container" style="background-color: #E6E6E6;">
          <div class="d-inline intro">

              <h4 class="text-center d-inline-block" style="padding-top: 37px;color: #FF7E00;">Psixologiya təlimləri</h4>
              <h4 class="text-center d-inline-block" style="padding-top: 37px;color: #7a7774;">&nbsp;|&nbsp;</h4>
              <h4 class="text-center d-inline-block" style="padding-top: 37px;color: #7a7774;">CIBS</h4>
              <p>&nbsp;</p>
          </div>
          <div class="row articles" style="padding-bottom: 0px;">

            @foreach($lessons as $lesson)
              @php
              $totalHour =   floor($lesson->totaldurationinseconds/3600);
              $totalMinute = floor(abs($lesson->totaldurationinseconds-$totalHour*3600)/60);
              $totalSecond = floor(abs($lesson->totaldurationinseconds-$totalHour*3600)%60);

              if ( strlen($totalHour)==1)  $totalHour= "0".$totalHour;
              if ( strlen($totalMinute)==1)  $totalMinute= "0".$totalMinute;
              if ( strlen($totalSecond)==1)  $totalSecond= "0".$totalSecond;

              $totalFormat = $totalHour.":".$totalMinute.":".$totalSecond;
              @endphp

              @foreach($experts as $expert)
                @if($expert->id == $lesson->authorid)
                  @php $currentexpert = $expert->firstname.' '.$expert->lastname; @endphp
                @endif
              @endforeach
              <div class="col-sm-6 col-md-4 m-auto item" data-bs-hover-animate="pulse"><a href="#"></a>
                  <div style="padding: 12px;background-color: #fff;padding-bottom: 35px;">
                      <img class="img-fluid" src="assets/vl_videos/cat{{ $lesson->id }}/preview.jpg" style="margin-top: 0;">
                      <h6 class="text-left exp" ><strong>Expert:</strong> {{ $currentexpert }}</h6>
                      <h3 class="text-left lessonname" >{{ $lesson->name }}</h3>
                      <a class="btn btn-primary text-left d-inline-block float-left d-xl-flex justify-content-xl-start" role="button" data-bs-hover-animate="pulse" href="/lesson/{{ $lesson->id }}" style="background-color: #FF7E00;color: #fff;padding: 6px;padding-bottom: 2px;font-size: 12px;padding-top: 2px;">
                        <strong>BAXMAQ</strong>
                      </a>
                      <strong class="text-dark d-inline-block float-right d-xl-flex justify-content-xl-start"
                      style="padding: 0px 0px 0px 20px;font-size: 14px;">{{ $totalFormat }}</strong>
                  </div>
                  <p class="description"></p><a class="action" href="#"></a><em style="margin-left: 80px;"></em>
              </div>
            @endforeach
          </div>
      </div>
  </div>

@endsection
