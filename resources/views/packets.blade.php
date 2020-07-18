<div class="photo-gallery" style="background-color: #E6E6E6;">
    <div class="container" style="background-color: #E6E6E6;">
        <div class="intro">
            <p>&nbsp;</p><p>&nbsp;</p>
            <h4 class="text-center"><strong>Paketini seç və öyrənməyə başla</strong></h4>
            <p class="text-center">Videoline'da yer alan 150+ video və 400+ dəqiqə dərslərə baxmaq üçün özünə uyğun olan paketi seç<br></p>
        </div>
    </div>
</div>

<div class="text-center d-xl-flex justify-content-xl-center" style="margin-bottom: 39px;background-color: #e6e6e6;">
    <div class="container">
        <div class="row">
            @foreach ($packets as $packet)
              <div class="col-md-3 text-center" style="background-color: transparent;padding-bottom: 10px;background-position: bottom;width: 272px;">
                  <div class="text-center bg-white border rounded border-danger shadow-lg" data-bs-hover-animate="pulse" style="background-color: #fff;margin-top: 10px;padding: 10px;"><img class="img-fluid" src="assets/img/{{$packet->img}}" style="background-color: #fff;" width="250p">
                      <h1 class="text-center" style="color: #FF6A00;font-size: 25px;background-color: #fff;margin-bottom: 0;margin-top: 30px;"><strong>{{ $packet->name }}</strong><br></h1>
                      <h1 class="text-center" style="color: #000;font-size: 20px;background-color: #fff;margin-top: 10px;"><strong>{{$packet->price}} AZN</strong></h1>
                      <h1 class="text-center" style="color: #FF6A00;font-size: 20px;margin-top: 10px;">
                        @if ( $packet->lessoncount != -1)
                          {{$packet->lessoncount}}
                        @endif
                        {{$packet->lessoncountbytext}}
                        @if ( $packet->durationdayscount == -1)
                          - {{$packet->durationbytext}}
                        @endif
                      </h1>
                      <a href="{{Route('register') }}/{{$packet->link}}">
                      <button class="btn btn-primary text-center" type="button" style="background-color: #FF6A00;font-size: 20px;width: 130px;margin-top: 10px;margin-bottom: 10px;"><strong>ÜZV OL</strong></button>
                      </a>
                    </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
<div class="horizontalorangeline"></div>
