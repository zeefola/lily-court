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
    <style type="text/css">
    body {
        position: relative;
    }

    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card .flip-card-inner,
    .flip-card:hover .flip-card-inner {
        animation: flipY 25s infinite;
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    .flip-card-back {
        background-color: #d81b75;
        transform: rotateY(180deg);
        padding: 5rem;
    }
    .flip-card-back p {
        color: white;
        font-size: 2rem !important;
    }
    @media (max-width: 567px) {
        .flip-card-inner {
            height: 83%;
        }
        .flip-card-front video {
            height: 300px;
            width: 300px;
        }
        .flip-card-back {
            background-color: #d81b75;
            transform: rotateY(180deg);
            padding: 3rem;
        }
        .flip-card-back {
            height: 300px !important;
            width: 300px !important;
        }
    }
    /* Flip Animation */
    @keyframes flipX{
        from {
            -webkit-transform: rotateX(180deg);
        }
        
        to {
            -webkit-transform: rotateX(-180deg);
        }
        
    }
    @keyframes flipY{
        from {
            -webkit-transform: rotateY(180deg);
        }
        
        to {
            -webkit-transform: rotateY(-180deg);
        }
        
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

    <!-- Pop Up-->
    <div class="popUpBannerBox">
        <!-- Full Width/Height Background -->
        <div class="popUpBannerInner">
            <!-- Center Inner Container -->
            <div class="popUpBannerContent">
                <div class="flip-card" data-autoflip="true" data-autoflipstart="500ms" data-autoflipdelay="3s">
                    <div class="flip-card-inner">
                        <a href="/tour">
                        <div class="flip-card-front">
                            <video width="350" height="350" autoplay loop>
                                <source src="images/project_130.mp4" type="video/mp4">
                            </video>
                        </div>
                        </a>
                        <a href="/tour">
                        <div class="flip-card-back" style="width: 350px; height: 350px;">
                            <p>Are you earning a N150,000 monthly or combined monthly income of N200,000 
                                with your spouse then you can own a 3 bedroom apartment at Lily court with 
                                our Rent-to-Own scheme. Kindly get in touch with us.</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @includeIf('layouts.header')

    @yield('slider')

    @yield('main_content')
    <div class="clearfix"></div>


    @includeIf('layouts.footer')

    <script type="text/javascript">
    function showPopUpBanner() {
        $('.popUpBannerBox').fadeIn("2000");
    }
    setTimeout(showPopUpBanner, 3000);

    $('.popUpBannerBox').click(function(e) {
        if (!$(e.target).is('.popUpBannerContent, .popUpBannerContent *')) {
            $('.popUpBannerBox').fadeOut("2000");
            return false;
        }
    });

    $('.closeButton').click(function() {
        $('.popUpBannerBox').fadeOut("2000");
        return false;
    });
    </script>
</body>

</html>