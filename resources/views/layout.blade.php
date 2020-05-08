<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>videoline_menu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" type="text/css" media="screen"/>

</head>

<body style="background-color: #e6e6e6;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-image: linear-gradient(140.00deg, black 60%, white 40%);">
        <div class="container">
          <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon" style="background-color: #efdcdc;"></span>
          </button>
          <img src="assets/img/logo.png">
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: -20px;margin-left: 40px;">
                <div class="dropdown">
                  <a class="dropdown-toggle mainmenu" data-toggle="dropdown" aria-expanded="false"  href="#" style="color: #ffffff;font-size: 18px;font-family: Tahoma, Helvetica, Arial, sans-serif; margin-left: 20px;">TƏLİMLƏR</a>
                    <div class="dropdown-menu" role="menu" style="background-color: #FF7E00;color:#FF7E00;font-size: 18px;font-family: Tahoma, Helvetica, Arial, sans-serif;">
                      <a class="dropdown-item" role="presentation" href="lessons"><strong>PSİXOLOGİYA</strong></a>
                      <a class="dropdown-item" role="presentation" href="couch"><strong>KOUÇ</strong></a>
                      <a class="dropdown-item" role="presentation" href="#"><strong>NLP >>></strong></a>
                    </div>
                </div>
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation">
                      <a>&nbsp;&nbsp;&nbsp;</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-bs-hover-animate="pulse" href="/experts" style="color: #ffffff;font-size: 18px;font-family: Tahoma, Helvetica, Arial, sans-serif;">EKSPERTLƏR</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-bs-hover-animate="pulse" href="/library" style="color: #ffffff;font-size: 18px;font-family: Tahoma, Helvetica, Arial, sans-serif;">KİTABXANA</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" data-bs-hover-animate="pulse" href="/exams" style="color: #ffffff;font-size: 18px;font-family: Tahoma, Helvetica, Arial, sans-serif;">SINAQLAR</a>
                    </li>
                </ul>
                <span class="navbar-text actions" style="padding-top:20px;">
                  @if (!Auth::check())
                  <a class="btn btn-light action-button" role="button" href="{{ route('login') }}" style="color:#000000; background-color: #ff7e00;font-weight: bold;font-size: 18px;padding:5px 20px;">GİRİŞ</a>
                  <a class="btn btn-light action-button" role="button" href="/packets" style="background-color: #ff7e00;font-weight: bold;font-size: 18px;padding:5px 20px;">ÜZV OL</a>
                  @else
                    <div class="dropdown">
                      <a class="dropdown-toggle mainmenu" data-toggle="dropdown" aria-expanded="false" data-bs-hover-animate="pulse" href="#" style="color: #ffffff;font-size: 18px;margin-left: 20px;"><img src="assets/img/user.png" style="background-color: #fff;" /></a>
                        <div class="dropdown-menu" role="menu" style="background-color: #FF7E00;color:#FF7E00;">
                          <a class="dropdown-item" role="presentation" href="lessons"><strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong></a>
                          <a class="dropdown-item" role="presentation" href="/cab"><strong>Profilim</strong></a>
                          <a class="dropdown-item" role="presentation" href="/mypayaccount"><strong>Hesabım</strong></a>
                          <a class="dropdown-item" role="presentation" href="/changepassword"><strong>Parolu dəyiş</strong></a>
                          <a class="dropdown-item" role="presentation" href="cab"><strong>Videolarım</strong></a>
                          <a class="dropdown-item" role="presentation" href="certificates"><strong>Sertifikatlarım</strong></a>
                        </div>
                        &nbsp;
                       <a class="btn btn-light action-button" role="button" href="/logout" style="background-color: #ff7e00;font-weight: bold;font-size: 18px;padding:5px 25px">ÇIXIŞ</a>

                    </div>

                    @endif
                </span>
            </div>
        </div>
    </nav>


    @yield('content' )


        <div class="footer-clean" style="background-color: #000;">
            <footer style="color: #fff;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Xidmətlər</h3>
                            <ul>
                                <li><a href="#">Ana səhifə</a></li>
                                <li><a href="#">Haqqımızda</a></li>
                                <li><a href="#">Təlimlər</a></li>
                                <li><a href="#">Ekspertlər</a></li>
                                <li><a href="#">Rəylər</a></li>
                                <li><a href="#">Partnyorlar</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <h3>Əlaqə</h3>
                            <ul>
                                <li><a href="#">+994 12 505 47 46</a></li>
                                <li><a href="#">+994 55 374 80 63</a></li>
                                <li><a href="#">Cəfər Cabbarlı 44, Caspian Plaza</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-3 item">
                            <ul></ul>
                        </div>
                        <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                            <p
                                class="copyright">CIBS © 2020</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-init.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
        <script src="assets/js/Simple-Slider.js"></script>
        <script src="assets/js/my.js"></script>


</body>

</html>
