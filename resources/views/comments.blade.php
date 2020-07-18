      <div class="simple-slider">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  @foreach($comments as $comment)
                  <div data-aos="slide-left" data-aos-duration="5" class="swiper-slide" style="height: auto;padding:50px 118px;background-color: #000;background-size: contain;background-repeat: no-repeat;background-position: center;">
                    <div style="color: #fff;float:left;">{{ $comment->comment }}</div>
                    <div style="color: #ff6a00;top:50px;float:right;">{{ $comment->author }}</div>
                  </div>
                  @endforeach

              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
          </div>
      </div>
  <div class="horizontalorangeline"></div>
