<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} || Affordable Housing in Lagos</title>

    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"
        integrity="sha256-BDmtN+79VRrkfamzD16UnAoJP8zMitAz093tvZATdiE=" crossorigin="anonymous"></script>


    <meta charset="UTF-8">
    <meta name="description"
        content="Get good and affordable housing at Lily Court... 2 - 3 Bedroom Flat Available, Akinde road off Lagos / Abeokuta expressway, Lagos.">
    <meta name="keywords"
        content="Real Estate in Lagos, Property Development in Lagos, Property Development in Nigeria, Property Financing in lagos, Real Estate Agent in Lagos, Real Estate Companies in Lagos, Real Estate in Nigeria, Real Estate, Apartments in lagos, Apartment n Lagos, 2 Bedroom apartment in Lagos, 3 Bedroom apartment in Lagos, 2 Bedroom apartment, 2 Bedroom apartment,Affordable Housing, Affordable housing in Lagos">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/lily_icon.ico" type="image/x-icon" />
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
                <!-- Content -->
                {{-- <h2>This can be the Title</h2> --}}
                <p><a href="/valentine"><img src="images/lily_val.png" alt="Theres an image here" /></a></p>
                {{-- <p>And here is some text to include</p> --}}
                <p><a href="#" class="closeButton">Close Ad</a></p>
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
