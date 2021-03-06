<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Getting Started</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Features-Blue.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
</head>

<body>
    {{--  <div>  --}}
        <div class="header-blue">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">



                <div class="container-fluid"><div class="col-1"><img src="assets/img/logo.png" style="height:60px" ></div><a class="navbar-brand" href="/">Bumi Ratu Ngambur</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/">Beranda</a></li>
                            <li class="nav-item" role="presentation"><a class="btn  btn-outline-warning    " href="#surat">Buat Surat</a></li>
                            {{--  <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="true" href="#">Buat Surat </a>  --}}
                                {{--  <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Surat Domisili</a><a class="dropdown-item" role="Surat Izin Keramaian" href="#">Surat Izin Keramaian</a><a class="dropdown-item" role="Surat Keterangan Tidak Mampu" href="#">Surat Keterangan Tidak Mampu</a><a class="dropdown-item" role="presentation" href="#">Surat Keterangan Usaha dan PBB</a><a class="dropdown-item" role="presentation" href="#">Surat Pindah Kosong</a></div>  --}}
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            {{--  <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>  --}}
                        </form><a class="btn btn-outline-success" role="button" href="/login">Log In</a></div>
                </div>
            </nav>
            {{--  <div class="container hero">  --}}
                    {{--  <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://wisato.id/wp-content/uploads/2019/03/Daya-Pikat-10-Tempat-Wisata-di-Pesisir-Barat.jpg/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?tx    tsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>  --}}
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="assets/img/1.jpg" class="w-100" style="height: 800px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                         {{--  <p></p><button class="btn btn-outline-primary btn-block btn-lg text-center bg-success border rounded border-success shadow-sm action-button" type="button">Buat Surat Online</button>  --}}
                         <h5>...</h5>
                        <p>...</p>
                    </div>
            </div>
             <div class="carousel-item" data-interval="2000">
                 <img src="assets/img/2.jpg" class="w-100" style="height: 800px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                          {{--  <p></p><button class="btn btn-outline-primary btn-block btn-lg text-center bg-success border rounded border-success shadow-sm action-button" type="button">Buat Surat Online</button>  --}}
                         <h5>...</h5>
                        <p>...</p>
                </div>
            </div>
    <div class="carousel-item">
      <img src="assets/img/desk.jpg" class="w-100" style="height: 800px" alt="...">
      <div class="carousel-caption d-none d-md-block">
     {{--  <p></p><button class="btn btn-outline-primary btn-block btn-lg text-center bg-success border rounded border-success shadow-sm action-button" type="button">Buat Surat Online</button>  --}}
                         <h5>...</h5>
    <p>...</p>
  </div>
    </div>
  {{--  </div> <button class="btn btn-outline-light btn-block btn-lg text-center bg-primary border-primary shadow-sm action-button " style="height:55px" type="button">Buat Surat Online</button>  --}}


    <a href="javascript:void" onclick="$('#logout-form').submit();">
    Logout
</a>

  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                {{--  <div class="row d-flex justify-content-center">  --}}
                    {{--  <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">  --}}
                        {{--  <h1>The revolution is here.</h1>  --}}
                         {{--  <div class="col-md-0 col-lg-0 offset-lg-0 offset-xl-0 d-none d-lg-block phone-holder">  --}}
                             {{--  <br><br>  --}}
                        {{--  <p></p><button class="btn btn-outline-primary btn-block btn-lg text-center bg-success border rounded border-success shadow-sm action-button" type="button">Buat Surat Online</button>  --}}
                    {{--  <br><br>  --}}
                {{--  </div>  --}}

                        {{--  <div class="iphone-mockup"><img class="device" src="assets/img/iphone.svg">  --}}
                            {{--  <div class="screen"></div>  --}}
                        {{--  </div>  --}}
                    {{--  </div>  --}}
                    {{--  </div>
                </div>
            </div>  --}}
    {{--  </div>  --}}

    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Fitur-Fitur Aplikasi</h2>
                {{--  <p class="text-center">Apa apa saja yang bisa dilakukan Aplikasi Web Bumiratungambur.com </p>  --}}
            </div>
            <div class="row features">
                <div class="col-sm-10 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Izin Domisili</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Izin Kegiatan</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Keterangan Tidak Mampu</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-envelope-open icon"></i>
                    <h3 class="name">Surat Keterangan PBB</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-newspaper-o icon"></i>
                    <h3 class="name">Artikel Desa</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Nomor Desa</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Artikel Desa</h2>
                <p class="text-center">Artikel-artikel terkait tentang desa terbaru. </p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
                <div
                    class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                    <h3 class="name">Article Title</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
            <div
                class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                <h3 class="name">Article Title</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a></div>
    </div>
    </div>



<section id="surat"></section>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Buat Surat</h2>
                <p class="text-center">Request Surat Domisili, Surat Izin Kegiatan dll Langsung ke Balai tanpa harus ke tempat. </p>
            </div><br>

    <div class="col text-center">
            <div class="buttons"><a class="btn btn-primary" role="button" href="/suratizindomisili">Surat Izin Domisili</a><a class="btn btn-warning" type="button" href="/suratizinkegiatan">Surat Izin Kegiatan</a></div>
            <br>
            <div class="buttons"><a class="btn btn-success" role="button" href="/suratketerangantidakmampu">Surat Keterangan Kurang Mampu</a><a class="btn btn-danger" type="button"href="/suratketeranganpbb">Surat Keterangan PBB</a></div>
            </div><br><br><br>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>


    </div>



    {{--  <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div class="intro">
                        <h1 class="text-center">Your Wonderful Article Title</h1>
                        <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span class="date">Sept 8th, 2016 </span></p><img class="img-fluid" src="assets/img/desk.jpg"></div>
                    <div class="text">
                        <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in
                            justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum
                            ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <h2>Aliquam In Arcu </h2>
                        <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                            posuere cubilia Curae.</p>
                        <figure><img class="figure-img" src="assets/img/beach.jpg">
                            <figcaption>Caption</figcaption>
                        </figure>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit
                            pulvinar dictum vel in justo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
