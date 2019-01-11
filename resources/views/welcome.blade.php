<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Kecamatan Trawas</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.min.css') }}">

        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/carousel.css') }}"/>

        <link rel="stylesheet" href="{{ asset('css/isotope/style.css') }}">

        <!--Main Stylesheet-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body data-spy="scroll" data-target="#header">
        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand custom_navbar-brand" href="#"><img src="img/logoHeader.png" alt=""></a>
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar main_menu" style="width: 108%; margin-left: -25px;">
                                    <li class="active"><a href="#header">{{ $setting->menu ? $setting->menu['menu1'] : 'menu1' }}</a></li>
                                    <li><a href="#welcome">{{ $setting->menu ? $setting->menu['menu2'] : 'menu2' }}</a></li>
                                    <li><a href="#counter">{{ $setting->menu ? $setting->menu['menu3'] : 'menu3' }}</a></li>
                                    <li><a href="#testimonial">{{ $setting->menu ? $setting->menu['menu4'] : 'menu4' }}</a></li>
                                    <li><a href="#portfolio">{{ $setting->menu ? $setting->menu['menu5'] : 'menu5' }}</a></li>
                                    <li><a href="#event">{{ $setting->menu ? $setting->menu['menu6'] : 'menu6' }}</a></li>
                                    <li><a href="#produk">{{ $setting->menu ? $setting->menu['menu7'] : 'menu7' }}</a></li>
                                    <li><a href="#galeri">{{ $setting->menu ? $setting->menu['menu8'] : 'menu8' }}</a></li>
                                    <li><a href="#berita">{{ $setting->menu ? $setting->menu['menu9'] : 'menu9' }}</a></li>
                                    <li><a href="#artikel">{{ $setting->menu ? $setting->menu['menu11'] : 'menu11' }}</a></li>
                                    <li><a href="#contact">{{ $setting->menu ? $setting->menu['menu10'] : 'menu10' }}</a></li>
                                    
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->



        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($beranda as $data)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $data->id }}" class="{{ $data->id == $beranda->first()->id ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($beranda as $data)
                    <div class="item {{ $data->id == $beranda->first()->id ? 'active' : '' }}">
                        <div class="slider_overlay">
                            <img src="{{ asset('storage/img/beranda/' . $data->foto) }}" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <h3>{{ $setting->menu ? $setting->menu1['text1'] : 'text1' }}</h3>
                                    <h2>{{ $setting->menu1 ? $setting->menu1['text2'] : 'text2' }}</h2>
                                   </div>
                            </div>
                        </div>
                    </div>
                    <!--End of item With Active-->
                    @endforeach
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->
        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>{{ $setting->menu ? $setting->menu['menu2'] : 'menu2' }}</h2>
                            <p>{{ $setting->menu2 ? $setting->menu2['deskripsi'] : 'deskripsi' }}</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    @foreach($profil as $data)
                    <div class="col-md-3">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="welcome_icon">
                                    <i class="fa fa-leaf"></i>
                                    </div>
                                    <h4>{{ $data->judul }}</h4>
                                    <p>{{ $data->deskripsi }}</p>
                                </div>
                            </div>
                       
                        </div>
                    </div>
                    <!--End of col-md-3-->
                    @endforeach
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->
       

        <section id="counter">
            <div class="counter_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="counter_header">
                                <h2>{{ $setting->menu ? $setting->menu['menu3'] : 'menu3' }}</h2>
                                <p>{{ $setting->menu3 ? $setting->menu3['deskripsi'] : 'deskripsi' }}</p>
                            </div>
                        </div>
                        <!--End of col-md-12-->
                    </div>
                    <!--End of row-->
                    <div class="row">
                        @foreach($informasi as $data)
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="img/tree.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">{{ $data->angka }}</span>
                                        <p>{{ $data->teks }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
        </section>
        <!--end of counter-->

         

        
        <section id="testimonial">
            <div class="testimonial_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>{{ $setting->menu ? $setting->menu['menu4'] : 'menu4' }}</h2>
                                <p>{{ $setting->menu4 ? $setting->menu4['deskripsi'] : 'deskripsi' }}</p>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                      
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
                                                    @foreach($staf as $data)
                                                    <div class="col-md-6">
                                                        <div class="profile-circle smal">
                                                            <img src="{{ asset('storage/img/staff/' . $data->foto) }}" alt="" style="width: 95px; height: 95px;">
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p>{{ $data->motto }}</p>
                                                        </div>
                                                        <div class="testimonial_author">
                                                            <h5>{{ $data->nama }}</h5>
                                                            <p>{{ $data->jabatan }}</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!--End of item with active-->
                                           
                                            <!--ENd of item-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->



         <!--Start of portfolio-->
         <section id="portfolio" class="text-center">
            <div class="col-md-12">
                <div class="portfolio_title">
                    <h2>{{ $setting->menu ? $setting->menu['menu5'] : 'menu5' }}</h2>
                    <p>{{ $setting->menu5 ? $setting->menu5['deskripsi'] : 'deskripsi' }}</p>
                </div>
            </div>
            <!--End of col-md-2-->
            <div class="colum">
                <div class="container">
                    
                </div>
                <!--End of container-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes">
                                    @foreach($desa as $data)
                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>{{ $data->nama }}</p>
                                    </div>
                                    <img src="{{ asset('storage/img/desa/' . $data->foto) }}" alt="">
                                </div>
                                
                                @endforeach
                            </div>
                            <!--End of notes-->
                        </div>
                        <!--End of col-lg-12-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of colum-->
        </section>
        <!--end of portfolio-->
        <!--start of event-->
        <section id="event">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="event_header text-center">
                            <h2>{{ $setting->menu ? $setting->menu['menu6'] : 'menu6' }}</h2>
                            <p>{{ $setting->menu6 ? $setting->menu6['deskripsi'] : 'deskripsi' }}</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-10" style="margin-left: 8%;">
                        <div class="row">
                            @foreach($wisata as $data)
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_img">
                                        <img src="{{ asset('storage/img/wisata/' . $data->foto) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="event_item">
                                    <div class="event_text text-center">
                                        <a href=""><h4>{{ $data->nama }}</h4></a>
                                        <p>{{ $data->deskripsi }}</p>
                                        <a href="{{ action('WisataController@show', ['id' => $data->id]) }}" class="event_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="produk">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-10 col-sm-12 col-xs-12">
                        <div class="produk_header text-center">
                            <h2>{{ $setting->menu ? $setting->menu['menu7'] : 'menu7' }}</h2>
                            <p>{{ $setting->menu6 ? $setting->menu6['deskripsi'] : 'deskripsi' }}</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row" >
                    <div class="col-md-10" style="margin-left:10%;">
                        <div class="row">
                                @foreach($produk as $data)
                            <div class="col-md-5 zero_mp" style="margin-left:3%;">
                                <div class="event_item">
                                    <div class="event_img">
                                        <img src="{{ asset('storage/img/produk/' . $data->foto) }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 zero_mp">
                                <div class="produk_item">
                                    <div class="produk_text text-center">
                                        <a href=""><h4>{{ $data->nama }}</h4></a>
                                        <p>{{ $data->deskripsi }}</p>
                                        <a href="{{ action('ProdukController@show', ['id' => $data->id]) }}" class="produk_btn">read more</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--End of row-->
                        </div>
                    <!--End of col-md-8-->
                  
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of event-->
        
        <section id="galeri" class="text-center">
            <div class="col-md-12">
                <div class="galeri_title">
                    <h2>{{ $setting->menu ? $setting->menu['menu8'] : 'menu8' }}</h2>
                    <p>{{ $setting->menu8 ? $setting->menu8['deskripsi'] : 'deskripsi' }}</p>
                </div>
            </div>
            <!--End of col-md-2-->
            <div class="colum">
                <div class="container">
                    
                </div>
                <!--End of container-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes" style="margin-left: 4%;">
                                    @foreach($galeri as $data)
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>{{ $data->deskripsi }}</p>
                                    </div>
                                    <img src="{{ asset('storage/img/galeri/' . $data->foto) }}" alt="">
                                </div>
                                @endforeach
                                
                            </div>
                            <!--End of notes-->
                        </div>
                        <!--End of col-lg-12-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of colum-->
        </section>
        <!--end of portfolio-->

        <!--Start of testimonial-->
        

        <!--Start of blog-->
        <section id="berita">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_berita text-center">
                            <h2>{{ $setting->menu ? $setting->menu['menu9'] : 'menu9' }}</h2>
                            <p>{{ $setting->menu9 ? $setting->menu9['deskripsi'] : 'deskripsi' }}</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    @foreach($berita as $data)
                    <div class="col-md-6">
                        <div class="berita_news" style="height:700px; width: 500px; border:solid 1px;">
                            <div class="single_berita_item">
                                <div class="berita_img">
                                    <img src="{{ asset('storage/img/berita/' . $data->foto) }}" alt="">
                                </div>
                                <div class="berita_content">
                                    <a href=""><h3>{{ $data->judul }}</h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">{{ $data->created_at }}</span>
                                                <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="berita_news_content">{{ $data->deskripsi }}</p>
                                    <a href="{{ action('BeritaController@show', ['id' => $data->id]) }}" class="berita_link">read more</a>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    <!--End of col-md-4-->
                    @endforeach
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!-- end of blog-->
        <section id="artikel" style="height: 900px; width: 600px; padding: 100px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_artikel text-center">
                            <h2>{{ $setting->menu ? $setting->menu['menu11'] : 'menu11' }}</h2>
                            <p>{{ $setting->menu11 ? $setting->menu11['deskripsi'] : 'artikel' }}</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    @foreach($artikel as $data)
                    <div class="col-md-4" style="margin-left: 50px; height:620px; width: 400px; border:solid 1px;">
                        <div class="artikel_news">
                            <div class="single_artikel_item">
                                <div class="artikel_img">
                                    <img src="{{ asset('storage/img/artikel/' . $data->foto) }}" alt="">
                                </div>
                                <div class="artikel_content">
                                    <a href=""><h3>{{ $data->judul }}</h3></a>
                                    <div class="expert">
                                        <div class="left-side text-left">
                                            <p class="left_side">
                                                <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                <span class="time">{{ $data->created_at }}</span>
                                                <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="artikel_news_content">{{ $data->deskripsi }}</p>
                                    <a href="{{ action('ArtikelController@show', ['id' => $data->id]) }}" class="artikel_link">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>

        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>{{ $setting->menu ? $setting->menu['menu10'] : 'menu10' }}</h3>
                            <p>{{ $setting->menu10 ? $setting->menu10['deskripsi'] : 'deskripsi' }}</p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="office">
                            <div class="title">
                                <h5>{{ $setting->menu10 ? $setting->menu10['judul'] : 'judul' }}</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>{{ $setting->menu10 ? $setting->menu10['lokasi'] : 'lokasi' }}</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>{{ $setting->menu10 ? $setting->menu10['telp'] : 'telp' }}</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>{{ $setting->menu10 ? $setting->menu10['email'] : 'email' }}</span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->
        
       
       

        <!--Scroll to top-->
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
        <!--End of Scroll to top-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>-->
        <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>

        <!--Counter UP Waypoint-->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <!--Counter UP-->
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="{{ asset('js/gmaps.min.js') }}"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: -7.664722,
                    lng: 112.601309,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false,
                });


                map.addMarker({
                    lat: -7.664722,
                    lng: 112.601309,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Foysal'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="{{ asset('js/isotope/min/scripts-min.js') }}"></script>
        <script src="{{ asset('js/isotope/cells-by-row.js') }}"></script>
        <script src="{{ asset('js/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/isotope/packery-mode.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/isotope/scripts.js') }}"></script>


        <!--Back To Top-->
        <script src="{{ asset('js/backtotop.js') }}"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="{{ asset('js/jquery.localScroll.min.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
        <!--WOW With Animation-->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Custom JavaScript-->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>