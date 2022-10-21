<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets2/images/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

    <!-- Page Title -->
    <title>B-F-S</title>

    <!-- Mobile Specific-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
        <script src="{{ asset('assets2/js/html5shiv.min.js') }}"></script>
        <script src="{{ asset('assets2/js/respond.min.js') }}"></script>
 <![endif] -->

    <!-- Bootstrap Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/bootstrap.min.css') }}">

    <!-- Fontawesome Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/fontawesome/css/font-awesome.min.css') }}" />

    <!-- Flaticon Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/flaticon.min.css') }}">

    <!-- Animate Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/animate.min.css') }}">

    <!-- Owl Carousel Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/owl.carousel.min.css') }}">

    <!-- Bootstrap Select Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/bootstrap-select.min.css') }}">

    <!-- Magnific Popup Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/magnific-popup.min.css') }}">

    <!-- Loader Css-->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/loader.min.css')}}"> --}}

    <!-- Main Style Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/style.css') }}">

    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('assets2/css/skin/skin-1.css') }}">

    <!-- Custom Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/custom.css') }}">

    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets2/css/switcher.css') }}">

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets2/plugins/revolution/revolution/css/settings.css') }}">

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets2/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Tracking  -->
    <link rel="stylesheet" href="{{ asset('assets2/style.css') }}">
    <!-- <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css"> -->

</head>

<body>

    <div class="page-wraper">

        <!-- HEADER START -->
        <header class="site-header header-style-6">
            <!-- header-top most  -->
            <div class="top-bar top-bar-liner bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="mt-topbar-right clearfix">
                            <ul class="list-unstyled pull-right tb-info-liner">
                                <li><i class="text-primary"></i>Your Trusted 24 Hours Service Provider!</li>
                            </ul>
                            <ul class="list-inline pull-right tb-social-liner">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="mailto:Bestfreightsys@gmail.com" class="fa fa-envelope"></a></li>
                                <li><a href="https://wa.me/03008631512" class="fa fa-whatsapp"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <!-- header-midle  -->
            <div class="main-bar header-middle bg-white">
                <div class="container">

                    <div class="logo-header">
                        {{-- <p class="font-size-12">Best Freight System</P> --}}
                        <a href="#" class="">

                            <img src="{{ asset('assets2/images/logo5.png') }}" />

                        </a>

                    </div>
                    <!-- phone number -- email address  -->
                    <div class="header-info">
                        <ul>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  text-primary"><i class="iconmoon-smartphone"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Phone Number</strong>
                                        <span>+92 300 8631512</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  text-primary"><i class="iconmoon-envelope"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Email Address</strong>
                                        <span>Bestfreightsys@gmail.com</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-primary">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button"
                            class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ExTRA Nav -->
                        <div class="extra-nav">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" style="border: none;" data-toggle="modal"
                                data-target=".bd-example-modal-lg">Track
                                Your Parcel</button>
                            <a href="{{ url('login') }}" class="btn bg-white" style="border: none;">
                                Login to Dashboard</a>


                        </div>


                        <!-- MAIN Vav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="nav-link scrollto">
                                    <a href="#">Home</a>
                                </li>

                                <li class="nav-link scrollto">
                                    <a href="#services">Services</i></a>
                                </li>

                                <li class="nav-link scrollto">
                                    <a href="#about">About Us</i></a>
                                </li>

                                <li class="nav-link scrollto">
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- Content Mid part-->
        <div class="page-content" id="home">

            <!-- Slider -->
            <div class="main-slider style-two default-banner">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <!-- START REVOLUTION SLIDER 5.4.1 -->
                        <div id="rev_slider_1077_1_wrapper" class="rev_slider_wrapper fullscreen-container"
                            data-alias="scroll-effect136" data-source="gallery"
                            style="background-color:#111111;padding:0px;">
                            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                            <div id="rev_slider_1077_1" class="rev_slider fullscreenbanner" style="display:none;"
                                data-version="5.4.1">
                                <ul>
                                    <!-- SLIDE 1 -->
                                    <li data-index="rs-100" data-transition="slotfade-vertical"
                                        data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                        data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                                        data-masterspeed="1000"
                                        data-thumb="{{ asset('assets2/images/main-slider/slider1/slide1.jpg') }}"
                                        data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                                        data-fsslotamount="7" data-saveperformance="off" data-title="Big &amp; Bold"
                                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                                        data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('assets2/images/main-slider/slider1/slider1.jpg') }}"
                                            alt="" data-bgposition="center center" data-bgfit="cover"
                                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                            data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-100-layer-1"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['400','400','400','550']" data-whitespace="nowrap"
                                            data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                        </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-100-layer-2"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['400','400','400','550']" data-whitespace="nowrap"
                                            data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-100-layer-3"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['50','50','30','17']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['110','110','180','180']"
                                            data-fontsize="['90','70','50','30']"
                                            data-lineheight="['100','90','60','60']"
                                            data-fontweight="['900','900','900','900']"
                                            data-width="['none','none','none','400']" data-height="none"
                                            data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                            data-basealign="slide" data-responsive_offset="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]"
                                            style="z-index: 6; 
                                            text-transform:uppercase;
                                            color:#fff;
                                            font-family: 'Roboto', sans-serif;
                                            ">
                                            <span class="text-primary"> Fast Air</span> Delivery
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption BigBold-SubTitle  " id="slide-100-layer-4"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['55','55','33','20']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['40','1','74','78']" data-fontsize="['15','15','15','13']"
                                            data-lineheight="['24','24','24','20']"
                                            data-width="['410','410','410','280']"
                                            data-height="['60','100','100','100']" data-whitespace="normal"
                                            data-type="text" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 7; 
                                            color:#fff;
                                            ">
                                            Best Fright System (B-F-S) provides logistics and transportation
                                            services via sea,
                                            land and
                                            air. We will protect you from risk.
                                        </div>

                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption BigBold-Button rev-btn " id="slide-100-layer-5"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['480','480','30','20']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['20','20','20','20']" data-width="none" data-height="none"
                                            data-whitespace="nowrap" data-type="button"
                                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                            data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[15,15,15,15]" data-paddingright="[50,50,50,50]"
                                            data-paddingbottom="[15,15,15,15]" data-paddingleft="[50,50,0,0]"
                                            style="z-index: 8; "> </div>


                                    </li>
                                    <!-- SLIDE 2 -->
                                    <li data-index="rs-200" data-transition="slotfade-vertical"
                                        data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                        data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                                        data-masterspeed="1000" data-thumb="images/main-slider/slider1/slide2.jpg"
                                        data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                                        data-fsslotamount="7" data-saveperformance="off" data-title="Big &amp; Bold"
                                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                                        data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('assets2/images/main-slider/slider1/slider2.jpg') }}"
                                            alt="" data-bgposition="center center" data-bgfit="cover"
                                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                            data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-200-layer-1"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['400','400','400','550']" data-whitespace="nowrap"
                                            data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                        </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-200-layer-2"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['400','400','400','550']" data-whitespace="nowrap"
                                            data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-200-layer-3"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['50','50','30','17']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['110','110','180','180']"
                                            data-fontsize="['90','70','50','30']"
                                            data-lineheight="['100','90','60','60']"
                                            data-fontweight="['900','900','900','900']"
                                            data-width="['none','none','none','400']" data-height="none"
                                            data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                            data-basealign="slide" data-responsive_offset="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]"
                                            style="z-index: 6; 
                                            text-transform:uppercase;
                                            color:#fff;
                                            font-family: 'Roboto', sans-serif;
                                            ">
                                            <span class="text-primary"> World Class</span> Logistics
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption BigBold-SubTitle  " id="slide-200-layer-4"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['55','55','33','20']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['40','1','74','78']" data-fontsize="['15','15','15','13']"
                                            data-lineheight="['24','24','24','20']"
                                            data-width="['410','410','410','280']"
                                            data-height="['60','100','100','100']" data-whitespace="normal"
                                            data-type="text" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 7; 
                                            color:#fff;
                                            ">
                                            Best Fright System (B-F-S) provides logistics and transportation
                                            services via sea,
                                            land and
                                            air. We will protect you from risk.
                                        </div>

                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption BigBold-Button rev-btn " id="slide-200-layer-5"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['480','480','30','20']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['20','20','20','20']" data-width="none" data-height="none"
                                            data-whitespace="nowrap" data-type="button"
                                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                            data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[15,15,15,15]" data-paddingright="[50,50,50,50]"
                                            data-paddingbottom="[15,15,15,15]" data-paddingleft="[50,50,0,0]"
                                            style="z-index: 8; "> </div>


                                    </li>
                                    <!-- SLIDE 3 -->
                                    <li data-index="rs-300" data-transition="slotfade-vertical"
                                        data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"
                                        data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut"
                                        data-masterspeed="1000" data-thumb="images/main-slider/slider1/slide3.jpg"
                                        data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                                        data-fsslotamount="7" data-saveperformance="off" data-title="Big &amp; Bold"
                                        data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                                        data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                                        data-description="">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('assets2/images/main-slider/slider1/slider3.jpeg') }}"
                                            alt="" data-bgposition="center center" data-bgfit="cover"
                                            data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                            data-no-retina>
                                        <!-- LAYERS -->

                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-300-layer-1"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']" data-y="['top','top','top','top']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['400','400','400','550']" data-whitespace="nowrap"
                                            data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":100,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":0,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.4) 100%);cursor:default;">
                                        </div>

                                        <!-- LAYER NR. 2 -->
                                        <div class="tp-caption tp-shape tp-shapewrapper  " id="slide-300-layer-2"
                                            data-x="['center','center','center','center']"
                                            data-hoffset="['0','0','0','0']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['0','0','0','0']" data-width="full"
                                            data-height="['400','400','400','550']" data-whitespace="nowrap"
                                            data-type="shape" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":0,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 5;background-color:rgba(0, 0, 0, 0.50);border-color:rgba(0, 0, 0, 0);
                                            border-width:0px;background:linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,1) 100%);cursor:default;">
                                        </div>

                                        <!-- LAYER NR. 3 -->
                                        <div class="tp-caption BigBold-Title   tp-resizeme" id="slide-300-layer-3"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['50','50','30','17']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['110','110','180','180']"
                                            data-fontsize="['90','70','50','30']"
                                            data-lineheight="['100','90','60','60']"
                                            data-fontweight="['900','900','900','900']"
                                            data-width="['none','none','none','400']" data-height="none"
                                            data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text"
                                            data-basealign="slide" data-responsive_offset="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},
                                            {"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]"
                                            data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]"
                                            style="z-index: 6; 
                                            text-transform:uppercase;
                                            color:#fff;
                                            font-family: 'Roboto', sans-serif;
                                            ">
                                            <span class="text-primary"> Fast Delivery</span> Services
                                        </div>

                                        <!-- LAYER NR. 4 -->
                                        <div class="tp-caption BigBold-SubTitle  " id="slide-300-layer-4"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['55','55','33','20']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['40','1','74','78']" data-fontsize="['15','15','15','13']"
                                            data-lineheight="['24','24','24','20']"
                                            data-width="['410','410','410','280']"
                                            data-height="['60','100','100','100']" data-whitespace="normal"
                                            data-type="text" data-basealign="slide" data-responsive_offset="off"
                                            data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"}]'
                                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                            data-paddingleft="[0,0,0,0]"
                                            style="z-index: 7; 
                                            color:#fff;
                                            ">
                                            Best Fright System (B-F-S) provides logistics and transportation
                                            services via sea,
                                            land and
                                            air.
                                            We will protect you from risk.
                                        </div>

                                        <!-- LAYER NR. 5 -->
                                        <div class="tp-caption BigBold-Button rev-btn " id="slide-300-layer-5"
                                            data-x="['left','left','left','left']"
                                            data-hoffset="['480','480','30','20']"
                                            data-y="['bottom','bottom','bottom','bottom']"
                                            data-voffset="['20','20','20','20']" data-width="none" data-height="none"
                                            data-whitespace="nowrap" data-type="button"
                                            data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":""}]'
                                            data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:50px;opacity:0;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                            data-textAlign="['left','left','left','left']"
                                            data-paddingtop="[15,15,15,15]" data-paddingright="[50,50,50,50]"
                                            data-paddingbottom="[15,15,15,15]" data-paddingleft="[50,50,0,0]"
                                            style="z-index: 8; "></div>


                                    </li>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                            </div>
                        </div>
                        <!-- END REVOLUTION SLIDER -->
                    </div>
                </div>
            </div>


            <!-- Modal Tracking -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header d-flex flex-row" style="background-color: rgb(135, 150, 179);">
                            <h4 class="modal-title" id="exampleModalLabel">
                                Parcel Details<button type="button" class="close" data-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button></h4>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <!-- Tracking  -->
                                <div id="ordertracking" class="">
                                    <article class="card ">
                                        {{-- <p class="border" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);">My Orders
                                            / Tracking </p> --}}
                                        <div class="card-body">
                                            <!-- Enter ID -->

                                            <nav class="navbar navbar-light bg-light justify-content-between">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <a class="navbar-brand">Enter Your Tracking ID:</a>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <form class="form-inline" id="tracking-form">
                                                            <input id="tracking-id" name="tracking-id"
                                                                class="form-control block mr-sm-12" type="text"
                                                                placeholder="Tracking ID" aria-label="Search">
                                                            <button onclick="myFunction()"
                                                                class="btn btn-outline-success my-2 my-sm-0"
                                                                type="submit" name="submit">Search</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </nav>


                                            <!-- order details  -->

                                            <div class="card-body row text-center ">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Parcel ID</th>
                                                            <th>Reg Date</th>
                                                            <th>Destination</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>

                                            </div>


                                        </div>
                                    </article>
                                </div>
                                <!-- Tracking end  -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Our Services -->
            <div id="services" class="section-full bg-change-section overlay-wraper p-t80 p-b50">
                <div class="overlay-main bg-secondry opacity-09"></div>
                <div class="bg-changer">
                    <div class=" section-bg active"
                        style=" background-image: url('{{ asset('assets2/images/background/bg1.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg2.webp') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg1.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg4.jpg') }}');"></div>
                </div>
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center text-white">
                        <h2 data-title="Services">Our Services </h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator bg-primary"></div>
                        </div>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                            <div>
                                <div class="col-md-4 col-sm-6 m-b30">
                                    <div
                                        class="mt-icon-box-wraper center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow">
                                        <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-transport-4"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Cargo Transportation</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 m-b30">
                                    <div
                                        class="mt-icon-box-wraper  center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary  hover-shadow">
                                        <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-truck"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Ground Shipping</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6  m-b30">
                                    <div
                                        class="mt-icon-box-wraper center p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow ">
                                        <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-airplane"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Air Freight</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6 m-b30">
                                    <div
                                        class="mt-icon-box-wraper center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow ">
                                        <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-ship-1"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Ocean Freight</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6   m-b30">
                                    <div
                                        class="mt-icon-box-wraper center  p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow">
                                        <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-forklift-1"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Packaging & Storage</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6  m-b30">
                                    <div
                                        class="mt-icon-box-wraper center p-a30 bgcall-block  bdr-1 bdr-solid bdr-primary hover-shadow">
                                        <div class="mt-icon-box-sm radius bdr-2 bdr-solid bdr-white m-b20">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-transport-6"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Road Freight</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shipment Solution-->
            <div class="section-full p-t80 p-b50 bg-no-repeat bg-center bg-white"
                style=" background-image: url('{{ asset('assets2/images/background/bg-map.png') }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="mt-box m-b30">
                                <div class="mt-thum-bx mt-img-effect  mt-img-overlay2">
                                    <img src="{{ asset('assets2/images/shipment.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="mt-box m-b25">
                                <h2 class="display-block m-b15 m-t0">We give you complete control of your shipments.
                                </h2>
                                <p class="m-b15">Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, no when an unknown printer took a galley of
                                    type and scrambled.</p>
                                <ul class="list-check-circle primary m-b20 text-uppercase">
                                    <li>Simply dummy text of the Lorem Ipsum is printing and type setting. </li>
                                    <li>And typesetting industry Lorem Ipsum has been. Ipsum has been the.</li>
                                    <li>Dummy text of the printing and typesetting industry. Text of the printing.
                                    </li>
                                </ul>

                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div
                                        class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light  bg-white p-a20">
                                        <div class="counter font-42 font-weight-800 m-b15 text-primary">450</div>
                                        <h4 class="m-tb0">Delivered Packages</h4>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div
                                        class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                        <div class="counter font-42 font-weight-800 m-b15 text-primary">15</div>
                                        <h4 class="m-tb0">Countries Covered</h4>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div
                                        class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                        <div class="counter font-42 font-weight-800 m-b15  text-primary">670</div>
                                        <h4 class="m-tb0">Satisfied Clients</h4>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <div
                                        class="m-b30 text-black mt-icon-box-wraper center bdr-1 bdr-solid bdr-gray-light bg-white p-a20">
                                        <div class="counter font-42 font-weight-800 m-b15 text-primary">1200</div>
                                        <h4 class="m-tb0">Tons of Goods</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- OUR PLANS  -->
            <!-- <div class="section-full text-center mt-our-team bg-gray p-t80 p-b50">
                <div class="container">

                    <div class="section-head text-center">
                        <h2 data-title="Our Plan">Our Plans</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator bg-primary"></div>
                        </div>
                    </div>
        
                    <div class="section-content">
                        <div class="pricingtable-row">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-4 m-b30">
                                    <div class="pricingtable-wrapper pricing-table-style-5 pricing-table-shadow">
                                        <div class="pricingtable-inner bg-gray">
                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$29</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h3>Basic</h3>
                                            </div>
                                            <ul class="pricingtable-features text-black bg-gray">
                                                <li>Per Mile</li>
                                                <li>6000 kg load</li>
                                                <li>850 kg / pallet </li>
                                                <li>Warehousing </li>
                                                <li>Free Packaging </li>
                                                <li>24/7 support </li>
                                            </ul>
                                            <div class="pricingtable-footer">
                                                <a href="javascript:void(0);" class="site-button text-uppercase">Order
                                                    Now</a>
                                            </div>
                                            <div class="overlay-main bg-white opacity-07"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4 m-b30">
                                    <div class="pricingtable-wrapper  pricing-table-style-5 pricing-table-shadow">
                                        <div class="pricingtable-inner bg-gray">
                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$49</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h3>Pro</h3>
                                            </div>
                                            <ul class="pricingtable-features text-black bg-gray">
                                                <li>Per Mile</li>
                                                <li>6000 kg load</li>
                                                <li>850 kg / pallet </li>
                                                <li>Warehousing </li>
                                                <li>Free Packaging </li>
                                                <li>24/7 support </li>
                                            </ul>
                                            <div class="pricingtable-footer">
                                                <a href="javascript:void(0);" class="site-button text-uppercase">Order
                                                    Now</a>
                                            </div>
                                            <div class="overlay-main bg-white opacity-07"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4 col-lg-4 m-b30">
                                    <div class="pricingtable-wrapper  pricing-table-style-5 pricing-table-shadow">
                                        <div class="pricingtable-inner bg-gray">
                                            <div class="pricingtable-price">
                                                <span class="pricingtable-bx">$99</span>
                                                <span class="pricingtable-type">Month</span>
                                            </div>
                                            <div class="pricingtable-title">
                                                <h3>Premium</h3>
                                            </div>
                                            <ul class="pricingtable-features text-black bg-gray">
                                                <li>Per Mile</li>
                                                <li>6000 kg load</li>
                                                <li>850 kg / pallet </li>
                                                <li>Warehousing </li>
                                                <li>Free Packaging </li>
                                                <li>24/7 support </li>
                                            </ul>
                                            <div class="pricingtable-footer">
                                                <a href="javascript:void(0);" class="site-button text-uppercase">Order
                                                    Now</a>
                                            </div>
                                            <div class="overlay-main bg-white opacity-07"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div> -->

            <!-- How it Work --#About US -->
            <div id="about" class="section-full  p-t80 p-b50 bg-gray">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2 data-title="Welcome">Transport Company </h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator bg-primary"></div>
                        </div>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">

                            <!-- block 1 -->
                            <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                                <div class="mt-box m-b30">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 left bg-white  hover-border-outer hover-border">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-transport-6"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15"><a href="#">Road Freight</a></h4>
                                            <p>Go beyond logistics, make the world go round and business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-box m-b30">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 left bg-white  hover-border-outer hover-border">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-airplane"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15"><a href="#">Air Freight</a></h4>
                                            <p>Go beyond logistics, make the world go round and business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- block 2 -->
                            <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc">
                                <div class="mt-box m-b30">
                                    <div class="mt-media mid-img-verticle">
                                        <a href="#"><img src="{{ asset('assets2/images/truck.png') }}"
                                                alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <!-- block 3 -->
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="mt-box m-b30">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 left bg-white   hover-border-outer hover-border">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-ship-1"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15"><a href="#">Sea Freight</a></h4>
                                            <p>Go beyond logistics, make the world go round and business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-box m-b30">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 left bg-white   hover-border-outer hover-border">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-primary"><i
                                                    class="flaticon-forklift-1"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15"><a href="#">Warehouse</a></h4>
                                            <p>Go beyond logistics, make the world go round and business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Latest Project -- -->
            <div id="gellery" class="section-full  p-tb80 bg-full-height bg-secondry bg-repeat-x city-slide-image"
                style=" background-image: url('{{ asset('assets2/images/background/bg-trans-1.png') }}');">
                <div class="container-fluid">
                    <div class="fillter-left-content">
                        <div class="filter-left-part shake_image">
                            <img src="{{ asset('assets2/images/truck-2.png') }}" alt="">
                            <span class="tyre-position"><img src="{{ asset('assets2/images/rotate-tyer.png') }}"
                                    alt="" class="spin-tyres"></span>
                            <img class="blink-image" src="{{ asset('assets2/images/light-blink.png') }}"
                                alt="">
                        </div>

                        <div class="container">
                            <div class="section-head text-center">
                                <div class="mt-box  text-white m-b30">
                                    <h2 class="m-tb0">Since <span class="text-primary">10 years</span> we are
                                        providing
                                        you some special services.
                                    </h2>
                                    <p class="m-b15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sit
                                        amet,
                                        consectetur adipiscing elit, sed doeius mod tempor sed do eiusmod</p>

                                </div>
                            </div>

                            <div class=" filter-carousal-1-outer">
                                <div class="filter-carousal-1">
                                    <!-- IMAGE CAROUSEL START -->
                                    <div class="section-content">
                                        <div
                                            class="owl-carousel owl-carousel-filter  owl-btn-vertical-center fillter-nav-left">
                                            <!-- Block 1 -->
                                            <div class="item overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic1.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Less than
                                                                    truckload
                                                                </h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 2 -->
                                            <div class="item overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic2.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Trucking &
                                                                    Warehousing</h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 3 -->
                                            <div class="item overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic3.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Sea Delivery
                                                                </h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 4 -->
                                            <div class="item  overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic4.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Logistic
                                                                    Services
                                                                </h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 5 -->
                                            <div class="item  overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic5.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Ground Shipping
                                                                </h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 6 -->
                                            <div class="item overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic6.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">International
                                                                    Air
                                                                    Freight</h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 7 -->
                                            <div class="item overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic7.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Rail Shipping
                                                                </h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Block 8 -->
                                            <div class="item overflow-hide">
                                                <div class="mt-box">
                                                    <div class="mt-img-effect overlay-2">
                                                        <img src="{{ asset('assets2/images/gallery/portrait/pic8.jpg') }}"
                                                            alt="">
                                                        <div class="overlay-2-bg bg-black"></div>
                                                        <div class="overlay-2-content">
                                                            <div class="p-a30 p-b20">
                                                                <h4 class="m-t0 m-b15 text-primary">Frost Shipping
                                                                </h4>
                                                                <p class="m-b20 text-white">Imagination… What we can
                                                                    easily see is only a small percentage of what is
                                                                    possible</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Team -->
            {{-- <div id="team" class="section-full text-center mt-our-team bg-gray p-t80 p-b50">
                <div class="container">

                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <h2 data-title="Team">Best team</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator bg-primary"></div>
                        </div>
                    </div>
                    <!-- TITLE END-->

                    <div class="section-content">
                        <div class="row">

                            <!-- Block 1 -->
                            <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc  m-b30">
                                <div class="mt-team-seven ">
                                    <div class="mt-team-media mt-img-effect off-color bg-white">
                                        <a href="javascript:void(0);"><img
                                                src="{{ asset('assets2/images/our-team5/p1.png') }}" class=""
                                                alt=""></a>
                                    </div>
                                    <div class="mt-team-info text-center p-a30 bg-white">
                                        <h4 class="mt-team-title m-t0 m-b15"><a href="javascript:void(0);">Susan
                                                Black</a></h4>
                                        <p>SEO Founder</p>
                                        <div class="social-share-btn-content team-one-show-hide">
                                            <ul class="social-icons social-square">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 2 -->
                            <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-b30">
                                <div class="mt-team-seven ">
                                    <div class="mt-team-media mt-img-effect off-color bg-white">
                                        <a href="javascript:void(0);"><img
                                                src="{{ asset('assets2/images/our-team5/p2.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="mt-team-info text-center p-a30 bg-white">
                                        <h4 class="mt-team-title m-t0 m-b15"><a href="javascript:void(0);">Joe
                                                Johnson
                                            </a></h4>
                                        <p>Co-Founder</p>
                                        <div class="social-share-btn-content team-one-show-hide">
                                            <ul class="social-icons social-square">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Block 3 -->
                            <div class="col-md-4 col-sm-12 col-xs-12 col-xs-100pc m-b30">
                                <div class="mt-team-seven ">
                                    <div class="mt-team-media mt-img-effect off-color bg-white">
                                        <a href="javascript:void(0);"><img
                                                src="{{ asset('assets2/images/our-team5/p3.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="mt-team-info text-center p-a30 bg-white">
                                        <h4 class="mt-team-title m-t0 m-b15"><a href="javascript:void(0);">May
                                                Horton</a></h4>
                                        <p>Marketer</p>
                                        <div class="social-share-btn-content team-one-show-hide">
                                            <ul class="social-icons social-square">
                                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                                <li><a href="javascript:void(0);" class="fa fa-whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div> --}}
            {{-- images/background/bg1.jpg --}}
            <!-- Why Choose -->
            <div class="section-full bg-change-section overlay-wraper p-t80 p-b50">
                <div class="overlay-main bg-secondry opacity-09"></div>
                <div class="bg-changer">
                    <div class=" section-bg active"
                        style=" background-image: url('{{ asset('assets2/images/background/bg1.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg2.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg3.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg4.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg5.jpg') }}');"></div>
                    <div class="section-bg"
                        style=" background-image: url('{{ asset('assets2/images/background/bg6.jpg') }}');"></div>
                </div>
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center text-white">
                        <h2 data-title="Choose us">Why Choose Us </h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator bg-primary"></div>
                        </div>
                    </div>
                    <!-- TITLE END-->
                    <div class="section-content">
                        <div class="row">
                            <div class="equal-wraper">
                                <div class="col-md-4 col-sm-6">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 bgcall-block hover-shadow hover-border-outer hover-border m-b30">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-white"><i
                                                    class="flaticon-people-1"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Customer Satisfication Tools
                                            </h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div
                                        class="mt-icon-box-wraper   p-a30 bgcall-block hover-shadow hover-border-outer hover-border m-b30">
                                        <div class="icon-md radius m-b15 text-primary">
                                            <span class="icon-cell  text-white"><i class="flaticon-pencil"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Management & Reporting</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie
                                                id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 bgcall-block hover-shadow hover-border-outer hover-border m-b30">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-white"><i class="flaticon-wallet"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Freight Payment Options</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 bgcall-block hover-shadow hover-border-outer hover-border m-b30">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-white"><i
                                                    class="flaticon-solution"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Compliance Solutions</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div
                                        class="mt-icon-box-wraper   p-a30 bgcall-block hover-shadow hover-border-outer hover-border m-b30">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-white"><i
                                                    class="flaticon-time-passing"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">Timely Delivery</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div
                                        class="mt-icon-box-wraper  p-a30 bgcall-block hover-shadow hover-border-outer hover-border m-b30">
                                        <div class="icon-md radius m-b15">
                                            <span class="icon-cell  text-white"><i
                                                    class="flaticon-customer-service"></i></span>
                                        </div>
                                        <div class="icon-content">
                                            <h4 class="mt-tilte  m-b15 text-primary">24 / 7 Service</h4>
                                            <p class="text-white">Vitae adipiscing turpis. Aenean ligula nibh,
                                                molestie id viverra.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            {{-- <div class="section-full p-t80 p-b80 bg-center bg-full-height bg-no-repeat bg-gray"
            style=" background-image: url('{{asset('assets2/images/background/bg-map.png')}}');">
                <div class="container">
                    <!-- TITLE START -->
                    <div class="section-head text-center">
                        <h2 data-title="Testimonials">Our Client Say</h2>
                        <div class="mt-separator-outer">
                            <div class="mt-separator bg-primary"></div>
                        </div>
                    </div>
                    <!-- TITLE END -->

                    <div class="section-content">
                        <div class="owl-carousel home-carousel-1">
                            <div class="item">
                                <div class="testimonial-2  clearfix bg-white">

                                    <div class="testimonial-detail">
                                        <div class="testimonial-pic shadow"><img
                                                src="{{ asset('assets2/images/testimonials/pic1.jpg') }}"
                                                width="100" height="100" alt=""></div>
                                    </div>

                                    <div class="testimonial-text">
                                        <strong class="testimonial-name text-uppercase">Saad Jamil </strong>
                                        <span class="testimonial-position">Web Developer</span>
                                        <span class="fa fa-quote-left"></span>
                                        <p> Excellent Customer support!. Delivery on time, No hidden Charges, Good
                                            convesrsation. Highly recomended.</p>
                                    </div>

                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-2 clearfix bg-white">

                                    <div class="testimonial-detail ">
                                        <div class="testimonial-pic shadow"><img
                                                src="{{ asset('assets2/images/testimonials/ahad.jpg') }}"
                                                width="100" height="100" alt=""></div>

                                    </div>

                                    <div class="testimonial-text">
                                        <strong class="testimonial-name text-uppercase">Ahad Raza</strong>
                                        <span class="testimonial-position">Actor</span>
                                        <span class="fa fa-quote-left"></span>
                                        <p>Highly Promoted</p>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-2  clearfix  bg-white">

                                    <div class="testimonial-detail">
                                        <div class="testimonial-pic shadow"><img
                                                src="{{ asset('assets2/images/testimonials/bisma.jpeg') }}"
                                                width="100" height="100" alt=""></div>
                                    </div>

                                    <div class="testimonial-text">
                                        <strong class="testimonial-name text-uppercase">Bisma Asif </strong>
                                        <span class="testimonial-position">Student</span>
                                        <span class="fa fa-quote-left"></span>
                                        <p> Fast Deliovery as accepted</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}

            <!-- Contact Us  -->
            <div id="contact" class="section-full bg-white bg-right-center bg-no-repeat"
                style=" background-image: url('{{ asset('assets2/images/background/bg-trans-2.png') }}');">
                <div class="container">
                    <div class="row conntact-home">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="contact-home1-left bg-secondry">
                                <div class="contact-tag-line bg-white text-primary">Contact us</div>
                                <div class="section-content p-lr30 p-tb30">
                                    <div class="call-back-form" style="z-index:1; position:relative">
                                        <h2 class="text-white m-t0">Contact Us</h2>
                                        {{-- <form class="cons-contact-form2 form-transparent" method="POST" action="{{ route('contact-us') }}"> --}}
                                        <form class="" method="POST" action="{{ route('contact-us') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" value="{{ old('name') }}"
                                                    required class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control"
                                                    value="{{ old('email') }}" required placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    value="{{ old('phone') }}" required placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" rows="3" placeholder="Message">{{ old('message') }}</textarea>
                                            </div>
                                            <button type="submit" class="site-button ">
                                                <span class="font-weight-700 inline-block  p-lr15">Submit</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content  contact-home1-right">

                            <div class="mt-box">
                                <div class="mt-media">
                                    <img src="{{ asset('assets2/images/con-1.png') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Part-->
        <footer class="site-footer footer-dark">
            <!-- Footer Top Part -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-6 col-sm-6">
                            <div class="widget widget_about text-white">
                                <h4 class="widget-title">About Company</h4>
                                <div class="logo-footer clearfix p-b15">
                                    <a href="index.html"><img src="{{ asset('assets2/images/logo-real.png') }}"
                                            width="171" height="49" alt="" /></a>
                                </div>
                                {{-- <p>Lorem ipsum this is dummy text dolor sit amet check this text, consecte tura
                                    dipiscing elit, sed do eiusmod tempor doler is incididunt. </p> --}}
                                <ul>
                                    <li> <i class="fa fa-phone text-primary"></i> <b
                                            class="p-lr5 text-uppercase">Tel
                                            :</b> (+92) 300 8631512 </li>
                                    <li><i class="fa fa-envelope text-primary"></i> <b
                                            class="p-lr5 text-uppercase">Email : </b>Bestfreightsys@gmail.com</li>
                                    <li><i class="fa fa-location-arrow text-primary"></i> <b
                                            class="p-lr5 text-uppercase">Location :</b>Al Amin market Fateh Garh Road
                                        Sialkot</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Useful Links -->
                        <div class="col-md-6 col-sm-6">
                            <div class="widget widget_services text-white">
                                <h4 class="widget-title">Useful links</h4>
                                <ul>

                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#about">About</a></li>
                                    {{-- <li><a href="#team">Our Team</a></li>
                                    <li><a href="#contact">Contact</a></li> --}}
                                </ul>
                                <button type="button" class="btn btn-warning" style="border: none;"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">Track
                                    Your Parcel</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer Copyright Part -->
            <div class="footer-bottom overlay-wraper bg-white">
                <div class="overlay-main"></div>
                <div class="container p-t30">

                    <div class="mt-footer-bot-center">
                        <span class="copyrights-text">© 2022 BFS - All Rights Reserved - Developed by
                            'Softech Business Services' </span>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Scroll Top Button -->
        <button class="scroltop"><span class="fa fa-space-shuttle relative" id="btn-vibrate"></span></button>
    </div>
    <!-- Loading Div ===== -->
    {{-- <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="loading_progress-container">
                <div class="loading_progress">
                    <div class="loading_progress-bar">
                        <div class="loading_progress-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Loading Div ====== -->



    <!-- JAVASCRIPT  FILES ========================================= -->

    <!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets2/js/jquery-1.12.4.min.js') }}"></script>
    <!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <!-- FORM JS -->
    <script src="{{ asset('assets2/js/bootstrap-select.min.js') }}"></script>
    <!-- FORM JS -->
    <script src="{{ asset('assets2/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- MAGNIFIC-POPUP JS -->
    <script src="{{ asset('assets2/js/magnific-popup.min.js') }}"></script>
    <!-- WAYPOINTS JS -->
    <script src="{{ asset('assets2/js/waypoints.min.js') }}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{ asset('assets2/js/counterup.min.js') }}"></script>
    <!-- COUNTERUP JS -->
    <script src="{{ asset('assets2/js/waypoints-sticky.min.js') }}"></script>
    <!-- MASONRY  -->
    <script src="{{ asset('assets2/js/isotope.pkgd.min.js') }}"></script>
    <!-- OWL  SLIDER  -->
    <script src="{{ asset('assets2/js/owl.carousel.min.js') }}"></script>
    <!-- OWL  SLIDER  -->
    <script src="{{ asset('assets2/js/jquery.owl-filter.js') }}"></script>
    <!-- PARALLAX BG IMAGE   -->
    <script src="{{ asset('assets2/js/stellar.min.js') }}"></script>
    <!-- ON SCROLL CONTENT ANIMTE   -->
    <script src="{{ asset('assets2/js/scrolla.min.js') }}"></script>
    <!-- CUSTOM FUCTIONS  -->
    <script src="{{ asset('assets2/js/custom.js') }}"></script>
    <!-- SHORTCODE FUCTIONS  -->
    <script src="{{ asset('assets2/js/shortcode.js') }}"></script>
    <!-- SWITCHER FUCTIONS  -->
    <script src="{{ asset('assets2/js/switcher.js') }}"></script>
    <!-- BACKGROUND SCROLL -->
    <script src="{{ asset('assets2/js/jquery.bgscroll.js') }}"></script>

    <!-- SLIDER REVOLUTION -->
    <script src="{{ asset('assets2/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>
    <!-- REVOLUTION SLIDER SCRIPT -->
    <script src="{{ asset('assets2/js/rev-script-3.js') }}"></script>



    <!-- function for javascript -->
    <script>
        // function to search tracking id 
        function myFunction() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('tracking-id');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName('li');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";

                }
            }
        }
    </script>
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error(
                    '{{ Session::get('
                                                                                                                            error ') }}'
                );
            @elseif (Session::has('success'))
                toastr.success(
                    '{{ Session::get('
                                                                                                                            success ') }}'
                );
            @endif
        });
    </script>

    <script type="text/javascript">
        $('body').on('submit', '#tracking-form', function(e) {
            e.preventDefault();
            alert(1);

            var search = $('#tracking-id').val();
            alert(search);

            $.ajax({

                url: "{{ url('/search-tracking-id') }}",
                type: "GET",
                data: {
                    'search': search
                },
                success: function(data) {
                    console.log(data);
                    // var html = '';
                    // $('tbody').html(data);
                    // html += '<tr>';

                    // html += '<td>';
                    // html += data;
                    // html += '</td>';

                    // html += '<td>';
                    // html += data;
                    // html += '</td>';

                    // html += '<td>';
                    // html += data;
                    // html += '</td>';

                    // html += '<td>';
                    // html += data;
                    // html += '</td>';

                    // html += '</tr>';

                    // $('.vendor-payment-table1>tbody').html(html);
                }
            });
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>

</body>

</html>
