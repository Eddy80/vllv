@extends('layout')

@section('content')
  <div  class="photo-gallery"></div>
  <div style="background-color: #fff;">
      <div class="container">
          <div class="row">
              <div class="col-md-12" style="background-color: #fff;">
                  <div class="intro">
                      <h4 class="text-left" style="margin-top: 20px;"><a href="{{ Route('home') }}" style="color: rgb(132,138,145); font-size: 16px;font-weight: bold; font-family: Tahoma, Helvetica, Arial, sans-serif;text-decoration:none;">Ana səhifə</a> &nbsp;&gt; &nbsp;<a href="{{ Route('lessons') }}" style="font-size: 16px;font-weight: bold; font-family: Tahoma, Helvetica, Arial, sans-serif;color:#FF6A00;text-decoration:none;">Təlimlər</a></h4>
                      <h3 class="text-left" style="font-size: 21px;font-weight: bold;font-family: Tahoma, Helvetica, Arial, sans-serif;">{{ $lesson->name }} &nbsp; : &nbsp;<span style="color:#FF6A00;font-size: 18px;"><strong>{{$videos[0]->name}}</strong></span></h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div style="background-color: #fff;padding-bottom: 50px;">
      <div class="container" >
          <div class="row" >
              <div class="col-md-8" style="height: 350px;background-color: #000;padding: 20px 20px 20px 20px;padding-top: 18px;">
                <video id="videoarea" oncontextmenu="return false;" controls="controls"
                controlsList="nodownload" poster="" src="/assets/vl_videos/cat{{$lesson->id}}/1.mp4"
                style="background-color: #FF7E00;" width="100%" height="111%"></video>
              </div>
              <div class="col-md-4" style="height: 350px;background-color: #000;padding: 20px 20px 20px 20px;">
                  <div class="card" style="height:112%;" >
                      <div class="card-header">
                          <h5 class="mb-0" style="font-weight:bold;">Təlimin videoları</h5>
                      </div>
                      <div class="card-body playlist" id="playlist" style="padding:0px;overflow-y: scroll;">
                          <ul style="padding:0px;" id="playlist">
                              {{-- <li  movieurl="" movieid="" moviename="" >
                                  <i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;1-ci video
                              </li>
                              <li  movieurl="" movieid="" moviename="" >
                                  <i class="fas fa-play-circle"></i>&nbsp;&nbsp;&nbsp;2-ci video
                              </li> --}}

                              @php $ind=1;@endphp
                              @foreach($videos as $video)
                                  @php
                                  $totalDuration = $video->durationinseconds;
                                  $totalHour =   floor($totalDuration/3600);
                                  $totalMinute = floor(abs($totalDuration-$totalHour*3600)/60);
                                  $totalSecond = floor(abs($totalDuration-$totalHour*3600)%60);
                                  @endphp

                                  @if ( strlen($totalHour)==1)
                                      @php $totalHour= "0".$totalHour; @endphp
                                  @endif
                                  @if ( strlen($totalMinute)==1)
                                      @php $totalMinute= "0".$totalMinute; @endphp
                                  @endif
                                  @if ( strlen($totalSecond)==1)
                                      @php $totalSecond= "0".$totalSecond; @endphp
                                  @endif

                                  @php
                                  $totalFormat = $totalHour.":".$totalMinute.":".$totalSecond;
                                  $today = date('Y-m-d');
                                  $movieid=$video->id;
                                  $moviename = htmlentities(htmlspecialchars(trim($video->name)));
                                  @endphp

                                  @if (Auth::check())

                                      @if (($currentuser->status==1) && ($currentuser->payexpiredate>$today) )
                                          @if ( ($currentuser->payamount==39) || ($currentuser->payamount==89) || ($currentuser->payamount==189) )
                                            @php
                                            $movieurl='/assets/vl_payed_videos/cat'.$lesson->id.'/'.$video->filename;
                                            $iclass = 'fas fa-play-circle';
                                            @endphp
                                          @endif
                                      @else
                                          @if (true)
                                            @php
                                            $movieurl='/assets/vl_payed_videos/cat'.$lesson->id.'/'.$video->filename;
                                            $iclass = 'fas fa-play-circle';
                                            @endphp
                                          @else
                                            @php
                                            $movieurl='';
                                            $iclass = 'fas fa-lock';
                                            @endphp
                                          @endif
                                      @endif
                                  @else
                                      @if( !$video->payed)
                                        @php
                                        $movieurl='/assets/vl_videos/cat'.$lesson->id.'/'.$video->filename;
                                        $iclass = 'fas fa-play-circle';
                                        @endphp
                                      @else
                                        @php
                                        $movieurl='';
                                        $movieid='';
                                        $moviename = '';
                                        $iclass = 'fas fa-lock';
                                        @endphp
                                      @endif
                                  @endif

                                  <li  movieurl="{{$movieurl}}" movieid="{{$movieid}}" moviename="{{ $moviename }}">
                                      <i class="{{ $iclass }}"></i>&nbsp;{{ $ind }}.&nbsp;{{$totalFormat}} {{$video->name}}
                                  </li>

                              @php $ind++;@endphp
                              @endforeach


                          </ul>
                      </div>



                      @if (Auth::check())

                          @if ( ($currentuser->status==1) and ($currentuser->payamount>0) and ($currentuser->payexpiredate>$today) )
                              {{-- <button type="button" class="btn btn-secondary" onclick="window.location.href = '/profile';">
                              Sertifikat al
                              </button> --}}
                              <div class="card-header text-center">
                                  <h5 class="mb-0"></h5>
                                  <button class="btn btn-secondary" type="button" style="padding: 6px 12px;">
                                    <strong>SERTİFİKAT AL</strong>
                                  </button>
                              </div>
                          @else
                              {{-- <button type="button" class="btn btn-secondary" onclick="window.location.href = '/payment';">
                                  Sertifikat al
                              </button> --}}
                              <div class="card-header text-center">
                                  <h5 class="mb-0"></h5>
                                  <button class="btn btn-secondary" type="button" style="padding: 6px 12px;">
                                    <strong>SERTİFİKAT AL</strong>
                                  </button>
                              </div>
                         @endif
                      @endif

                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
