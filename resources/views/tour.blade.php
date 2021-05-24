<!DOCTYPE html>
<html lang="en">

<head>
    {!! SEO::generate() !!}

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"
        integrity="sha256-BDmtN+79VRrkfamzD16UnAoJP8zMitAz093tvZATdiE=" crossorigin="anonymous"></script>


    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/datepicker3.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/jquery.lightbox.min.css" />
    <link rel="stylesheet" href="/css/animate.css" />
    <link rel="stylesheet" href="/css/default-style.css" id="layout" />
    <link href="/css/switcher.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
    <style type="text/css">
    body {
        position: relative;
    }
    </style>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "WebSite",
        "name": "Lilycourt",
        "alternateName": "Lilycourt",
        "url": "http://www.lilycourt.ng"
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": "1",
                "item": {
                    "@id": "http://www.lilycourt.ng/#applicationform",
                    "name": "Application Form"
                }
            },
            {
                "@type": "ListItem",
                "position": "2",
                "item": {
                    "@id": "http://www.lilycourt.ng/#gallery",
                    "name": "Gallery"
                }
            },
            {
                "@type": "ListItem",
                "position": "3",
                "item": {
                    "@id": "http://www.lilycourt.ng/#features",
                    "name": "Features"
                }
            },
            {
                "@type": "ListItem",
                "position": "4",
                "item": {
                    "@id": "http://www.lilycourt.ng/#paymentplan",
                    "name": "Payment Plan"
                }
            },
            {
                "@type": "ListItem",
                "position": "5",
                "item": {
                    "@id": "http://lilycourt.agropark.ng/#contact",
                    "name": "Contact Us"
                }
            }
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "RealEstateAgent",
        "name": "Lilycourt",
        "image": "http://lilycourt.ng/images/lily_court_image.jpg",
        "@id": "",
        "url": "http://www.lilycourt.ng/",
        "telephone": "(+234) 9080829417",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Akinde Road, Opposite Pinnacle Grammar School, Ajegunle, Alakuko, Lagos State.",
            "addressLocality": "Lagos State",
            "postalCode": "23401",
            "addressCountry": "NG"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 6.6938217,
            "longitude": 3.2681367999999793
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        },
        "sameAs": "https://twitter.com/jirajgardens"
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Corporation",
        "name": "Lilycourt",
        "alternateName": "Jirajgardens",
        "url": "http://www.lilycourt.ng/",
        "logo": "http://lilycourt.ng/images/lily_logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+2347017370898",
            "contactType": "customer service",
            "areaServed": "NG",
            "availableLanguage": "English"
        },
        "sameAs": "https://twitter.com/jirajgardens"
    }
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="100">
    <header>
        <div class="header-wrapper">
            <!-- Header Top Container -->
            <div class="header-top">
                <!-- Container -->
                <div class="container">
                    <div class="row">
                        <!-- Left -->
                        <div class="col-md-6 col-sm-6 columns">
                            <div class="header-top-left">
                                <ul class="social-top">
                                    <li><a href="{{config('app.facebook')}}" class="ToolTip" title="Facebook"><span
                                                class="fa fa-facebook"></span></a></li>
                                    <li><a href="{{config('app.twitter')}}" class="ToolTip" title="Twitter"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li><a href="{{config('app.instagram')}}" class="ToolTip" title="Instagram"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Left -->
                        <!-- Right -->
                        <div class="col-md-6 col-sm-6 columns">
                            <div class="header-top-right">
                                <!-- Right Menu -->
                                <ul class="top-menu">
                                    <li><a href="#appointment"><i class="fa fa-calendar"></i>Book Appointment</a></li>
                                </ul>
                                <!-- /Right Menu -->
                            </div>
                        </div>
                        <!-- /right -->
                    </div>
                </div>
                <!-- /Container -->
            </div>
            <!-- /Header Top Container -->
            <!-- Header Main Container -->
            <div class="header-main">
                <!-- Container -->
                <div class="container">
                    <!-- Main Navigation & Logo -->
                    <div class="main-navigation">
                        <div class="row">
                            <!-- Main Navigation -->
                            <div class="col-md-12 columns">
                                <nav class="navbar navbar-default apclk-mega nav-left">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <a class="navbar-toggle" data-toggle="collapse"
                                            data-target="#apclk-collapse"></a>
                                        <div class="logo">
                                            <a href="/"><img src="images/lily_logo.png"
                                                    alt="{{config('app.name') }} Logo"></a>
                                        </div>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="apclk-collapse">
                                        <ul class="nav navbar-nav apclk-nav">

                                            <li><a href="/">Home</a></li>
                                            <!-- <li><a href="#about">About</a></li> -->
                                            <li><a href="#features">Features</a></li>

                                            <li><a href="#gallery">Gallery</a></li>
                                            <li><a href="#paymentplan">Payment Plan</a></li>
                                            <li><a href="#applicationform">Application Form</a></li>
                                            <li><a href="#contact">Contact Us</a></li>

                                        </ul>
                                    </div>
                                    <!-- /.navbar-collapse -->
                                </nav>
                            </div>
                            <!-- /Main Navigation -->
                        </div>
                    </div>
                    <!-- /Main Navigation & Logo -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Header Main Container -->
        </div>
    </header>

    <!--slider Section Start Here -->
    <div id="slider">
        <div class="img-slider">
            <ul class="top-banner">
                <li><img src="images/sliders/slider4.png" alt="#" />
                </li>
                <li><img src="images/banner1.jpg" alt="#" />
                </li>
                <li><img src="images/img-banner-2.jpg" alt="#" />
                </li>
                <li><img src="images/banner2.jpg" alt="#" />
                </li>
                <li><img src="images/banner4.jpg" alt="#" />
                </li>
                <li><img src="images/banner3.jpg" alt="#" />
                </li>
                <li><img src="images/sliders/slider3.png" alt="#" />
                </li>
            </ul>
        </div>
        <div class="detail-content">
            <div class="container">
                <div class="detail">
                    <div class="top-row">
                        <strong class="text-uppercase">Lilly Court Interior</strong>
                        <strong class="text-uppercase">Lilly Court Building</strong>
                        <strong class="text-uppercase">Lilly Court Front View</strong>
                        <strong class="text-uppercase">Lilly Court Surrounding View</strong>
                        <strong class="text-uppercase">Lilly Court Side View</strong>
                        <strong class="text-uppercase">Lilly Court Aerial View</strong>
                        <strong class="text-uppercase"> Lilly Court Interior </strong>
                        <div class="direction-arrrow">
                            <a href="javascript:;" class="prv"></a>
                            <a href="javascript:;" class="next"></a>
                        </div>
                    </div>
                    <ul class="bottom-sec" id="bottom-sec">
                        <li class="inner-bottom-sec">
                            <h2>Well Furnished Interior</h2>
                            <p>Kitchen and Wardrobe Cabinets, quality screeding of ceilings, well painted walls with
                                initial
                                screeding, properly illumited rooms with LED bulbs(Light emitting Diode), polished woods
                                for
                                doors, Conduit Electrical and Mechanical installation, well spaced rooms.</p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->
                        </li>
                        <li class="inner-bottom-sec">
                            <h2>Building Architectural Design</h2>
                            <p></p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->
                        </li>
                        <li class="inner-bottom-sec">
                            <h2>Classical front elevation</h2>
                            <p>UPVC frames and clear glass panes for windows, Spaced Front Corridors Well trimmed lawns
                                and
                                beautiful view.</p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->
                        </li>
                        <li class="inner-bottom-sec">
                            <h2>Building Surroundings</h2>
                            <p></p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->
                        </li>
                        <li class="inner-bottom-sec">
                            <h2>CLEAN AND CLEAR SURROUNDING</h2>
                            <p>Frames and clear glass panes for windows, A.C ducts.</p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->
                        </li>
                        <li class="inner-bottom-sec">
                            <h2>Aerial View</h2>
                            <p></p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->
                        </li>


                        <li class="inner-bottom-sec">
                            <h2>Well Furnished Interior</h2>
                            <p>Kitchen and Wardrobe Cabinets, quality screeding of ceilings, well painted walls with
                                initial
                                screeding, properly illumited rooms with LED bulbs(Light emitting Diode), polished woods
                                for
                                doors, Conduit Electrical and Mechanical installation, well spaced rooms.</p>
                            <!--<a href="projects-details.html" class="btn btn-blue-orange">VIEW More</a>-->

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--slider Section End Here -->

    <section>
        <div class="about_cottage">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h1 class="text-left align-left bounceInLeft animated wow animated" data-wow-delay=".6s"
                            style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
                            Why Lilycourt</h1>
                        <hr class="section-title-hr align-left">
                        <hr class="section-red-line align-left">
                        <p class="text-justify bounceInLeft animated wow animated" data-wow-delay=".7s"
                            style="visibility: visible;-webkit-animation-delay: .7s; -moz-animation-delay: .7s; animation-delay: .7s;">
                            Comfortable And High Quality Housing At An Affordable Price
                        </p>
                        <p class="text-justify bounceInLeft animated wow animated" data-wow-delay=".8s"
                            style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                            With a vision to be the forerunner in providing and developing comfortable housing units to
                            people of different
                            classes, Lily Court has developed high-quality housing in a safe, eco-friendly, and healthy
                            environment
                            at an affordable price.
                        </p>
                        <br>
                        <!-- Skill Bars -->
                        <div class="row">
                            <div class="gallery-images bounceInLeft animated wow animated" data-wow-delay="1s"
                                style="visibility: visible;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;">
                                <div class="about-cottage-gallery text-center">
                                    <div class="col-sm-2 col-xs-4 cottage-img">
                                        <a href="images/gallery/1.jpg" class="lightbox-about-cottage"><img
                                                src="images/gallery/1.jpg" alt="Image"
                                                class="img-responsive img-thumbnail"></a>
                                    </div>
                                    <div class="col-sm-2 col-xs-4 cottage-img">
                                        <a href="images/gallery/2.jpg" class="lightbox-about-cottage"><img
                                                src="images/gallery/2.jpg" alt="Image"
                                                class="img-responsive img-thumbnail"></a>
                                    </div>
                                    <div class="col-sm-2 col-xs-4 cottage-img">
                                        <a href="images/gallery/3.jpg" class="lightbox-about-cottage"><img
                                                src="images/gallery/3.jpg" alt="Image"
                                                class="img-responsive img-thumbnail"></a>
                                    </div>
                                    <div class="col-sm-2 col-xs-4 cottage-img">
                                        <a href="images/gallery/4.jpg" class="lightbox-about-cottage"><img
                                                src="images/gallery/4.jpg" alt="Image"
                                                class="img-responsive img-thumbnail"></a>
                                    </div>
                                    <div class="col-sm-2 col-xs-4 cottage-img">
                                        <a href="images/gallery/5.jpg" class="lightbox-about-cottage"><img
                                                src="images/gallery/5.jpg" alt="Image"
                                                class="img-responsive img-thumbnail"></a>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <p class="text-justify bounceInLeft animated wow animated" data-wow-delay=".8s"
                            style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                            Prime Nest Limited partnering with Federal Mortgage Bank offers you a 3 Bedroom apartment on
                            a "Rent to Own" payment ownership scheme.
                            Lily Court is an elegant and affordable estate in a built up environment at Alakuko area of
                            Lagos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="no-padding">
        <div class="tour">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-12">
                        <div class="video-section">
                            <!-- <div class="fluid-image bounceInUp animated wow animated" data-wow-delay=".8s"
                                style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                                <img src="images/feature-1.jpg" alt="" class="img-responsive">
                                <a class="lightbox-image play-anchor"
                                    href="http://www.youtube.com/watch?v=opj24KnzrWo"></a>
                            </div> -->
                            <div class="caption-box">
                                <div class="container">
                                    <div class="text-center bounceInRight animated wow animated"
                                        data-wow-delay=".8s"
                                        style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
                                        
                                        <h3>Are you earning a N150,000 monthly or combined monthly income of N200,000 with your spouse then you can 
                                            own a 3 bedroom apartment at Lily court with our Rent -to - Own  scheme. 
                                            Kindly get in touch with us.</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h3>Leave Us A Message</h3>
                <p>Feel free to contact us for further inquiry</p>
            </div>
            <div class="row">
                <div class="col-12">
                    @includeIf('layouts.error_template')
                    <div class="contact-form">
                        <form id="contactForm" action="/project-130-contact" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone_number" class="form-control"
                                            placeholder="Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="select-box">
                                            <select class="form-control" name="apartment_type">
                                                <option value="">Apartment Type</option>
                                                <option value="2-bedroom">2 bedroom</option>
                                                <option value="3-bedroom">3 bedroom</option>
                                            </select>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12"style="margin-bottom: 1rem;">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn">
                                            Send Message
                                            <span></span>
                                        </button>
                                    </div>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>

    <footer>
        <!--contact-us-container Start Here -->
        <div class="contact-us-container">
            <div class="container">
                <div class="row">
                    <div class="footer-inform">
                        <div class="box call col-xs-12 col-sm-3 bounceInLeft animated wow" data-wow-delay=".6s">
                            <em class="fa fa-map-marker"></em>
                            <strong>{{config('app.address')}}</strong>
                            <!-- <span>Columbia, SC 29201</span> -->
                        </div>
                        <div class="box call col-xs-12 col-sm-3 bounceInLeft animated wow" data-wow-delay=".8s">
                            <em class="fa fa-phone"></em>
                            <strong>{{config('app.telephone')}}</strong>
                            <span><a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a></span>
                        </div>
                        <div class="box last col-xs-12 col-sm-3 bounceInRight animated wow" data-wow-delay=".8s">
                            <ul class="clearfix">
                                <li>
                                    <a href="{{config('app.facebook')}}"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="{{config('app.twitter')}}"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{config('app.instagram')}}"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="box last col-xs-12 col-sm-3 contact-btn bounceInRight animated wow"
                            data-wow-delay=".6s">
                            <a href="#contact" class="contact-us">CONTACT US</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact-us-container End Here -->
        <div class="primary-footer">
            <div class="container">
                <div class="row animate-effect">
                    <div class="col-xs-12 col-sm-4">
                        <h3>about us <i></i></h3>
                        <p>
                            {{config('app.short_description')}}
                        </p>
                        <ul class="footer-social">
                            <li><a href="{{config('app.facebook')}}" target='_blank'><i
                                        class="fa fa-facebook-square"></i></a></li>
                            <li><a href="{{config('app.twitter')}}" target='_blank'><i
                                        class="fa fa-twitter-square"></i></a></li>
                            <li><a href="{{config('app.instagram')}}" target='_blank'><i
                                        class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h3>navigation <i></i></h3>
                        <ul class="list clearfix">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="#about">About us</a>
                            </li>
                            <li>
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="#features">Features</a>
                            </li>
                            <li>
                                <a href="#contact">Contact us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h3>Our office <i></i></h3>
                        <div class="footer-contact-info">
                            <ul class="fa-ul">
                                <li><i class="fa fa-li fa-map-marker"></i>{{config('app.address')}}</li>
                                <li><i class="fa fa-li fa-phone"></i>{{config('app.telephone')}},
                                    {{config('app.telephone2')}} </li>
                                <li><i class="fa fa-li fa-envelope"></i>{{config('app.email')}}</li>
                                <li><i class="fa fa-li fa-mobile"></i>{{config('app.telephone3')}}</li>
                                <li><i class="fa fa-li fa-clock-o"></i>{{config('app.opening_hours')}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 copyright text-center padding-top-50 padding-bottom-20">
                        <span>CopyRight© {{date('Y')}} {{config('app.name')}}, All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- POST LOADED SCRIPTS -->
        <script src="/js/jquery.min.js"></script>
        <script src="//code.jivosite.com/widget.js" jv-id="M1TNLe1vwv" async></script>

        <script src="/js/jquery-ui-1.10.4.min.js"></script>
        <script src="/js/jquery.easing.1.3.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/SmoothScroll.js" type="text/javascript"></script>
        <script src="/js/jquery.stickOnScroll.js" type="text/javascript"></script>
        <script src="/js/jquery.bxslider.js"></script>
        <script defer src="/js/jquery.flexslider.js"></script>
        <script src="/js/bootstrap-datepicker.js"></script>
        <script src="/js/map-script.js"></script>
        <script src="/js/application.js"></script>
        <script src="/js/wow.js"></script>
        <script src="/js/jquery.lightbox.min.js"></script>

    </footer>
</body>

</html>