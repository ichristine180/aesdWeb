<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AEESD</title>
        <!-- Bootstrap core CSS -->
 @stack('styles')
       
        <!-- Pretty Photo CSS -->
        <link  href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet"/>
        <!-- Player CSS -->
        <link rel="stylesheet"  href="{{ asset('css/jplayer.css') }}" />
        <link rel="stylesheet" href="css/jp/skin.css" />
        <!-- DL Menu CSS -->
        <link  href="{{ asset('js/dl-menu/component.css') }}" rel="stylesheet">
        <!-- ICONS CSS -->
        <link  href="{{ asset('css/font-awesome.css ') }}" rel="stylesheet">
        <link  href="{{ asset('css/svg.css')}}" rel="stylesheet">
        <!-- Typography CSS -->
        <link  href="{{ asset('css/typography.css ') }}" rel="stylesheet">
        <!-- Shortcodes CSS -->
        <link  href="{{ asset('css/shortcodes.css')}}" rel="stylesheet">
        <!-- Widget CSS -->
        <link href="{{ asset('css/widget.css')}}" rel="stylesheet">
        <!-- Custom Main StyleSheet CSS -->
        <link  href="{{ asset('style.css' )}}" rel="stylesheet">
    
        <!-- Color CSS -->
        <link  href="{{ asset('css/color.css' ) }}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link  href="{{ asset('css/responsive.css')}}" rel="stylesheet">
    </head>
    <body>
     
     

        	<header class="bdha-header">
                <div class="topbar">
                    <div class="center">
                        <!--Info Wrap Start-->
                        <div class="bdha-info-top-wrapper">
                           
                            <!--Info Thumb End-->
                            <!--Info Thumb Start-->
                            <div class="bdha-info-top">
                                <i class="fa fa-envelope-square"></i>
                                <a href="#">info@aesd.org.rw</a>
                            </div>
                            <!--Info Thumb End-->
                            <!--Info Thumb Start-->
                            <div class="bdha-info-top">
                                <i class="fa fa-phone-square"></i>
                                <a href="#">+250 788 350 829</a>
                            </div>
                            <!--Info Thumb End-->
                            <!--Info Thumb Start-->
                            <div class="bdha-info-top">
                                <i class="fa fa-map-marker"></i>
                                <a href="#">Kigali - Rwanda</a>
                            </div>
                            <!--Info Thumb End-->
                        </div>
                       
                    </div>
                </div>
                <!--Logo Wrap Start-->
                <div class="logo-wrapper blue-bg">
                    <div class="aesd-container">
                        <!--Logo Start-->
                        <h1 class="logo">
                            <a href="index.html"><img src="{{ asset('images/logo.png')}}" alt="kodeforest"></a>
                        </h1>
                       <div class="intro">
                       <p>"We believe the church is<br>
                                            central in all community development initiatives"</p>
                       </div>
                    </div>
                </div>
                <!--Logo Wrap End-->
                <!--Navigation wrapper Start-->
                <div class="kode-navigation-wrapper">
                    <div class="center">
                        <div class="kode-navigation-inner">
                            <!--Navigation Start-->
                            <nav class="navigation">
                                <div class="menu-main-menu-container">
                                    <ul>
                                         <li class="active"><a href="/">Home</a>
                                        </li>
                                        <li><a href="/about">About us</a>
                                        </li>
                                           
                                        </li>
                                        
                                        </li>
                                         <!-- <li><a href="/gallery">Our Gallery</a>
                                      
                                    </li> -->
                                     <!-- <li><a href="/success"> Success Stories</a>
                                      
                                    </li>
                                     <li><a href="#">Events</a>
                                      
                                    </li> -->
                                        <li><a href="/contact">Contact us</a>
                                          
                                        </li>
                                        
                                          <!-- <li><a href="/reports">Reports</a>
                                          
                                        </li> -->
                                        
                                    </ul>
                                </div>
                            </nav>
                     <div id="kode-responsive-navigation" class="dl-menuwrapper">
                                <button class="dl-trigger">Open Menu</button>
                                <ul class="dl-menu">
                                    <li class="menu-item kode-parent-menu">
                                    </li>
                                    <li><a href="/">Home</a></li>
                                    <li class="menu-item kode-parent-menu"><a href="/about">About Us</a>
                                      
                                    </li>
                                    <!-- <li class="menu-item kode-parent-menu"><a href="/gallery">Our Gallery</a>
                                        
                                         
                                    </li>
                                    <li class="menu-item kode-parent-menu"><a href="#">Events</a>
                                    </li>
                                     <li class="menu-item kode-parent-menu"><a href="/success">Success Stories</a>
                                    </li>
                                     <li class="menu-item kode-parent-menu"><a href="/reports">Reports</a>
                                    </li> -->
                                    
                                   
                                   
                                    <li class="menu-item kode-parent-menu"><a href="/contact">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <!--DL Menu END-->
                        <!--Navigation End-->
                        </div>
                    </div>
                </div>
                <!--Navigation wrapper End-->
            </header>
            <!--Header Wrap End-->

           @yield('content')

             <!--Footer Wrap Start-->
          <footer class="bdha-footer">
            <div class="container">
                <div class="footer-grid">
                    <!--Buddha Widget Text Start-->
                    <div class="col">
                        <div class="widget widget-text">
                            <!-- Widget Title Start-->
                            <h4 class="widget-title">About Address</h4>
                            <!-- Widget Title End-->
                            <div class="text">
                                <p>Feel free to find us on the following address</p>
                            </div>
                            <!--Info Item Start-->
                            <div class="info-item">
                                <i class="social-box fa fa-envelope"></i>
                                <a href="#">info@aesd.org.rw</a>
                            </div>
                            <!--Info Item End-->
                            <!--Info Item Start-->
                            <div class="info-item">
                                <i class="social-box fa fa-map-marker"></i>
                                <p>P.O Box: 3770 kigali-Rwanda</p>
                            </div>
                            <!--Info Item End-->
                            <!--Info Item Start-->
                            <div class="info-item">
                                <i class="social-box fa fa-phone"></i>
                                <p> +250 788 530 335 / +250 788 350 829</p>
                            </div>
                            <!--Info Item End-->
                        </div>
                    </div>
                    <!--Buddha Widget Text End-->

                  

                    <!--Buddha Widget Twitter Feed Start-->
                    <div class="col">
                        <div class="widget widget-twitterfeed">
                            <!-- Widget Title Start-->
                            <h4 class="widget-title">Our social medias</h4>
                            <!-- Widget Title End-->
                            <!-- Twitter Post Start-->
                            <div class="twitter-post">
                               <a href="#"> <i class="social-box fa fa-twitter"></i> Twiter</a>
                              
                            </div>
                            <!-- Twitter Post End-->
                            <!-- Twitter Post Start-->
                            <div class="twitter-post">
                                <a href="#"> <i class="social-box fa fa-facebook"></i> Facebook</a>
                            </div>
                            <!-- Twitter Post End-->

                             <!-- Twitter Post Start-->
                             <div class="twitter-post">
                                <a href="#"> <i class="social-box fa fa-instagram"></i> Instagram</a>
                            </div>
                            <!-- Twitter Post End-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!--Footer Wrap End-->
        <!--Copy Right Start-->
        <div class="bdha-copy-right">
            <div class="container">
                <p>&copy; <script>document.write(new Date().getFullYear())</script> - <a href="#">AESD</a> - All Rights Reserved</p>
                
            </div>
        </div>
        <!--Copy Right End-->

     
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--Kode Wrapper End-->
        <!--Jquery Library-->
        <script src="{{ asset('js/jquery.js')}}"></script>
        <!--Bootstrap core JavaScript-->
        <script src="{{ asset('js/bootstrap.js')}}"></script>
        <!--Player JavaScript-->
        <!-- <script src="{{ asset('js/jplayer.js')}}"></script>
       <script src="{{ asset('js/jplayer.js')}}"></script>
       <script src="{{ asset('js/jplayer.playlist.js')}}"></script>
        <script src="{{ asset('css/jp/playlist.js')}}"></script> -->
        <!--Slick Slider JavaScript-->
       
        <!--Slick Slider JavaScript-->
        <script src="{{ asset('js/slick.min.js')}}"></script>
        <!--Dl Menu Script-->
        <script src="{{ asset('js/dl-menu/modernizr.custom.js')}}"></script>
        <script src="{{ asset('js/dl-menu/jquery.dlmenu.js')}}"></script>
        <!--Pretty Photo JavaScript-->
        <script src="{{ asset('js/jquery.prettyPhoto.js')}}"></script>
        <!--Filterable Script-->
        <script src="{{ asset('js/jquery-filterable.js')}}"></script>
          <!-- <script src="{{ asset('js/accordion.js')}}"></script> -->
        <!--Custom JavaScript-->
        <script src="{{ asset('js/custom.js')}}"></script>
      
    </body>
</html>
