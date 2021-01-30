@extends('layouts.master')
@section('slider')
    @includeIf('layouts.slider')
@endsection
@section('main_content')


    <div id="app">
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

        <style>
            /* Center the loader */
            #loader,
            #loaderMessage,
            #loaderAppointment {
                position: absolute;
                left: 50%;
                z-index: 1;
                width: 150px;
                height: 150px;
                margin: -30px 0 0 -75px;
                border: 16px solid #f3f3f3;
                border-radius: 50%;
                border-top: 16px solid #3498db;
                width: 120px;
                height: 120px;
                -webkit-animation: spin 2s linear infinite;
                animation: spin 2s linear infinite;
            }

            @-webkit-keyframes spin {
                0% {
                    -webkit-transform: rotate(0deg);
                }

                100% {
                    -webkit-transform: rotate(360deg);
                }
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            /* Add animation to "page content" */
            .animate-bottom {
                position: relative;
                -webkit-animation-name: animatebottom;
                -webkit-animation-duration: 1s;
                animation-name: animatebottom;
                animation-duration: 1s
            }

            @-webkit-keyframes animatebottom {
                from {
                    bottom: -100px;
                    opacity: 0
                }

                to {
                    bottom: 0px;
                    opacity: 1
                }
            }

            @keyframes animatebottom {
                from {
                    bottom: -100px;
                    opacity: 0
                }

                to {
                    bottom: 0;
                    opacity: 1
                }
            }

            #myDiv,
            #myDivMessage,
            #myDivAppointment {
                display: none;
                text-align: center;
            }

        </style>


        <section id="appointment">
            <div class="appbox-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 appbox-left bounceInLeft animated wow" data-wow-delay=".6s">
                            <h2 class="color-theme-color text-right">You are on the<br />
                                <span class="color-dark-grey text-right">Right Place</span>
                            </h2>
                            <p class="text-right">Book your appointment now and get visit to your dream house </p>
                        </div>
                        <div class="col-md-8 bounceInRight animated wow" data-wow-delay=".6s">
                            <div class="appointment-box">
                                <div class="row" id="appointmentBlock" style="padding-top:30px;">
                                    <div id="loaderAppointment" style="display: none;"></div>
                                    <div style="display:none;" id="myDivAppointment" class="animate-bottom">
                                        <p id="App"></p>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 ">
                                        <input type="text" id="appName" name="visitor_name" placeholder="Enter name"
                                            required class="form-control">
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <input type="email" id="appEmail" name="visitor_email"
                                            placeholder="Enter email address" required class="form-control">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <input type="text" id="appTelephone" name="visitor_contactnumber"
                                            placeholder="Enter phone number" required class="form-control">
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="input-group input-append date width-100" id="datePicker">
                                            <span class="input-group-addon add-on hidden"><span
                                                    class="glyphicon glyphicon-calendar"></span></span>
                                            <input type="text" id="appDate" class="form-control" name="date"
                                                placeholder="Select Date" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                        <button type="submit" id="appointmentFormSubmit" class="btn btn-blue-orange"> Make
                                            an appointment <i class="fa fa-send"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appointment Section Close -->
        <!-- Home About section start -->
        <section id='about'>
            <div class="about_property">
                <div class="container">
                    <h6 class="section-title text-center color-theme-color bounceInDown animated wow" data-wow-delay=".3s">
                        About property</h6>
                    <hr class="section-title-hr">
                    <hr class="section-red-line">
                    <p class="description bounceInLeft animated wow" data-wow-delay=".6s">
                        On a vision to be the for runner in providing and developing comfortable housing units to people of
                        different classes, {{ config('app.name') }} has developed safe, health enhancement environment and
                        high quality housing at an affordable price, strategicaly located off the Lagos/Abeokuta express
                        way. Accessible from both Alakuko and Ajegunle bus-stop.<br /> {{ config('app.name') }} comprises of
                        2 and 3 bedroom apartments all ensuite and it is approximately 3 minutes drive from the
                        Lagos/Abeokuta express way.
                    </p>
                    <ul class="row">
                        <li class="col-md-2 col-sm-4 col-xs-6 bounceInLeft animated wow" data-wow-delay=".3s">
                            <figure>
                                <img src="images/svg/events-calendar.svg" alt="Property Years">
                                <figcaption>
                                    Property Age
                                </figcaption>
                            </figure>
                            <h3>Ongoing</h3>
                            <h2>2018</h2>
                        </li>
                        <li class="col-md-2 col-sm-4 col-xs-6 bounceInLeft animated wow" data-wow-delay=".4s">
                            <figure>
                                <img src="images/svg/crane.svg" alt="Strong Construction">
                                <figcaption>
                                    Number of
                                </figcaption>
                            </figure>
                            <h3>Blocks</h3>
                            <h2>15</h2>
                        </li>
                        <li class="col-md-2 col-sm-4 col-xs-6 bounceInLeft animated wow" data-wow-delay=".5s">
                            <figure>
                                <img src="images/svg/ruler-and-set-square.svg" alt="Distance">
                                <figcaption>
                                    IN Sqm
                                </figcaption>
                            </figure>
                            <h3>area</h3>
                            <h2>13,453.802</h2>
                        </li>
                        <li class="col-md-2 col-sm-4 col-xs-6 bounceInLeft animated wow" data-wow-delay=".6s">
                            <figure>
                                <img src="images/svg/parked-car.svg" alt="Parking">
                                <figcaption>
                                    Parking
                                </figcaption>
                            </figure>
                            <h3>Garage</h3>
                            <h2>2</h2>
                        </li>
                        <li class="col-md-2 col-sm-4 col-xs-6 bounceInLeft animated wow" data-wow-delay=".7s">
                            <figure>
                                <img src="images/svg/bath.svg" alt="Number of store">
                                <figcaption>
                                    Number of
                                </figcaption>
                            </figure>
                            <h3>Store</h3>
                            <h2>1</h2>
                        </li>
                        <li class="col-md-2 col-sm-4 col-xs-6 bounceInLeft animated wow" data-wow-delay=".8s">
                            <figure>
                                <img src="images/svg/full-bed.svg" alt="Bedrooms">
                                <figcaption>
                                    Number of
                                </figcaption>
                            </figure>
                            <h3>Bedrooms</h3>
                            <h2>2 & 3</h2>
                        </li>
                    </ul>
                    <div class="buttons bounceInUp animated wow" data-wow-delay=".6s">
                        <a class="btn btn-orange-blue" href="#map" data-target="contact-part">view on map</a>
                        <a class="btn btn-blue-orange" href="#appointment" data-target="contact-part">Schedule visit</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Home About section close -->
        <!-- HOME : FEATURES of Properties start -->
        <section id='features'>
            <div class="services-3">
                <div class="container">
                    <h6 class="section-title text-center color-theme-color  bounceInDown animated wow" data-wow-delay=".6s">
                        Features of {{ config('app.name') }}</h6>
                    <hr class="section-title-hr">
                    <hr class="section-red-line">
                    <br />
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInLeft animated wow" data-wow-delay=".5s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-video-camera"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Under CCTV Servelance</h4>
                                    <hr class="service-title-hr">
                                    <p>CCTV Camera with a Central Monitoring Unit</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInLeft animated wow" data-wow-delay=".7s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Security Personel</h4>
                                    <hr class="service-title-hr">
                                    <p>Strong Security with 24-Hours Manned gated and security personnel</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInLeft animated wow" data-wow-delay=".9s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-car"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Ample Parking Space</h4>
                                    <hr class="service-title-hr">
                                    <p>Condusive number of parking garage; 2 slot per flat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInRight animated wow" data-wow-delay=".9s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-cutlery"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Fitted Kitchen</h4>
                                    <hr class="service-title-hr">
                                    <p>Modern day kitchen design, with carbinet, wall sockets and beautiful structure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInRight animated wow" data-wow-delay=".7s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Shopping Mall</h4>
                                    <hr class="service-title-hr">
                                    <p>Built in complex shoppping malls, with materials for the home like kitchen
                                        accessories, food items and so on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInRight animated wow" data-wow-delay=".5s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-tree"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Well Lit Lawns</h4>
                                    <hr class="service-title-hr">
                                    <p>Lawns are well taken care of, use of anti-pest and anti-weed controllers are used to
                                        maintain qaulity and beauty.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInRight animated wow" data-wow-delay=".5s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Gymnasium</h4>
                                    <hr class="service-title-hr">
                                    <p>Gymnasium to keep the heart and body at check, and to help with exercises and any
                                        other sporting activity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInLeft animated wow" data-wow-delay=".9s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-shield"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Perimeter Fence</h4>
                                    <hr class="service-title-hr">
                                    <p>Well fenced with electric wires erected around the perimeters of the buildings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 single-box bounceInLeft animated wow" data-wow-delay=".9s">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 text-right service-icon">
                                    <i class="fa fa-child"></i>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <h4>Children Playground</h4>
                                    <hr class="service-title-hr">
                                    <p>Installation of parks for children to play, with many fucn activities to keep the
                                        children happy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container close -->
            </div>
        </section>
        <!-- Service section close -->
        <!-- HOME : FEATURES of Properties Close -->
        <!-- HOME Property Details Start-->
        <section id="applicationform" class="no-padding">
            <div class="property-detail-home">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-6 col-md-6 join-card text-center bounceInLeft animated wow"
                        id="applicationFormDiv" data-wow-delay=".6s">
                        <h3>Application Form</h3><br />
                        <div id="loader" style="display: none;"></div>
                        <div style="display:none;" id="myDiv" class="animate-bottom">
                            <p id="Msg"></p>
                        </div>
                        <!-- <i class="fa fa-map-marker"></i>
                    <h3>{{ config('app.name') }} - Single Property</h3> -->
                        <div class="col-xs-6">
                            <!--<input list="title" id="titleName" name="title" placeholder="Title" required class="form-control" onclick='applicationRedirect()'>-->
                            <input list="title" id="titleName" name="title" placeholder="Title" required
                                class="form-control">
                            <datalist id="title">
                                <option value="Mr.">
                                <option value="Mrs.">
                                <option value="Miss">
                            </datalist>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="surname" name="visitor_name" placeholder="Surname" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="otherName" name="visitor_name" placeholder="Other Names" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input list="status" id="statusName" name="status" placeholder="Marital Status" required
                                class="form-control">
                            <datalist id="status">
                                <option value="Single">
                                <option value="Married">
                            </datalist>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="sex" name="sex" placeholder="Sex" required class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="nationality" name="nationality" placeholder="Nationality" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="telephone" name="telephone" placeholder="Phone Number" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="email" id="email" name="email" placeholder="Email Address" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="postalAddress" name="postalAddress" placeholder="Postal Address" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="residentialAddress" name="residentialAddress"
                                placeholder="Residential Address" required class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="occupation" name="occupation" placeholder="Occupation" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input list="property" id="propertyName" name="property" placeholder="Property Type" required
                                class="form-control">
                            <datalist id="property">
                                <option style="color:red; font-size:12px" value="--" disabled="disabled"></option>
                                <option value="2 Bedroom Flat"></option>
                                <option value="3 Bedroom Flat"></option>
                            </datalist>
                        </div>
                        <div class="col-xs-6">
                            <input list="payment" id="paymentName" name="payment" placeholder="Payment Option" required
                                class="form-control">
                            <datalist id="payment">
                                <option value="Mortage Facility"></option>
                                <option value="Outright Payment"></option>
                                <option value="12 months Installment Payment"></option>
                                <option value="18 months Installment Payment"></option>
                                <option value="24 months Installment Payment"></option>
                            </datalist>
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="nokName" name="nokName" placeholder="Next Of Kin Name" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="nokAddress" name="nokAddress" placeholder="Next Of Kin Address" required
                                class="form-control">
                        </div>
                        <div class="col-xs-6">
                            <input type="text" id="nokTelephone" name="nokTelephone" placeholder="Next Of Kin Phone Number"
                                required class="form-control">
                        </div>
                        <button style="background-color: #d81b75" class="btn btn-blue-orange"
                            id="applicationFormSubmit">Submit</button>
                        <!--  <div class="col-xs-12 col-sm-12 col-md-12">
                                            <textarea name="visitor_message" placeholder="Message" required class="form-control"></textarea>
                                        </div> -->
                        <!--                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuere. Fusce sodales lacus ut pellentesque sollicitudin. </p> -->
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6 bg-orange bounceInRight animated wow" data-wow-delay=".6s">
                        <div class="prop-detail-box">
                            <h3>Property Details</h3><br />
                            <p>{{ config('app.name') }} comprises of both 2 and 3 bedroom apartments all ensuit. It is
                                approximately 3 minutes drive from the Lagos/ Abeokuta express way. Accessiblee from both
                                Alakuko and Ajegunle busstop.</p>
                        </div>
                        <div class="prop-amenities">
                            <div class="row no-gutters">
                                <div class="col-xs-12 col-sm-6">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Pre-sit with guest convenience</li>
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Main livingroom</li>
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Kitchen</li>
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Store</li>
                                    </ul>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Parking for two cars</li>
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Bedroom (Ensuite)</li>
                                        <li><i class="fa-li fa fa-long-arrow-right"></i>Balcony</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HOME Property Details Close -->
        <!-- Gallery Classic Close -->
        <section id="gallery" class="gallery-classic-section padding-bottom-20">
            <div class="gallery-classic">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h6 class="section-title text-center bounceInDown animated wow" data-wow-delay=".6s">
                                {{ config('app.name') }} Gallery</h6>
                            <hr class="section-title-hr">
                            <hr class="section-red-line">
                            <ul class="nav nav-tabs text-center bounceInUp animated wow" data-wow-delay=".9s"
                                role="tablist">
                                <li role="presentation" class="active"><a href="#gallerybedrooms"
                                        aria-controls="gallerybedrooms" role="tab" data-toggle="tab">Buildings</a></li>
                                <li role="presentation"><a href="#gallerylivingrooms" aria-controls="gallerylivingrooms"
                                        role="tab" data-toggle="tab">Living Room</a></li>
                                <!--<li role="presentation"><a href="#gallerykitchen" aria-controls="gallerykitchen" role="tab" data-toggle="tab">Kitchen</a></li>-->
                                <li role="presentation"><a href="#gallerybathroom" aria-controls="gallerybathroom"
                                        role="tab" data-toggle="tab">Bathroom</a></li>
                                <li role="presentation"><a href="#galleryswimming" aria-controls="galleryswimming"
                                        role="tab" data-toggle="tab">Doors / Corridor</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Container Close -->
                <div class="gallery gallery-inner-page homepage2-gallery gallery-4-coloumns" id="courses">
                    <div class="container-fluid no-padding">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="gallerybedrooms">
                                        <div class="row no-gutters gallery-images">
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/1.jpg"
                                                    class="lightbox-bedrooms bounceInLeft animated wow"
                                                    data-wow-delay=".2s"><img src="images/gallery/1.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/2.jpg"
                                                    class="lightbox-bedrooms bounceInLeft animated wow"
                                                    data-wow-delay=".4s"><img src="images/gallery/2.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/3.jpg"
                                                    class="lightbox-bedrooms bounceInLeft animated wow"
                                                    data-wow-delay=".6s"><img src="images/gallery/3.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/4.jpg"
                                                    class="lightbox-bedrooms bounceInLeft animated wow"
                                                    data-wow-delay=".8s"><img src="images/gallery/4.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/5.jpg"
                                                    class="lightbox-bedrooms bounceInRight animated wow"
                                                    data-wow-delay=".8s"><img src="images/gallery/5.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/6.jpg"
                                                    class="lightbox-bedrooms bounceInRight animated wow"
                                                    data-wow-delay=".6s"><img src="images/gallery/6.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/7.jpg"
                                                    class="lightbox-bedrooms bounceInRight animated wow"
                                                    data-wow-delay=".4s"><img src="images/gallery/7.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/8.jpg"
                                                    class="lightbox-bedrooms bounceInRight animated wow"
                                                    data-wow-delay=".2s"><img src="images/gallery/8.jpg" alt="Image"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="gallerylivingrooms">
                                        <div class="row no-gutters gallery-images">
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/9.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/9.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/10.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/10.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/11.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/11.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/12.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/12.jpg" alt="Image"></a>
                                            </div>
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/13.jpg" class="lightbox-bedrooms"><img src="images/gallery/13.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/14.jpg" class="lightbox-bedrooms"><img src="images/gallery/14.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/15.jpg" class="lightbox-bedrooms"><img src="images/gallery/15.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/16.jpg" class="lightbox-bedrooms"><img src="images/gallery/16.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <!--<div role="tabpanel" class="tab-pane" id="gallerykitchen">-->
                                    <!--    <div class="row no-gutters gallery-images">-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/17.jpg" class="lightbox-bedrooms"><img src="images/gallery/17.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/18.jpg" class="lightbox-bedrooms"><img src="images/gallery/18.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/19.jpg" class="lightbox-bedrooms"><img src="images/gallery/19.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/20.jpg" class="lightbox-bedrooms"><img src="images/gallery/20.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/21.jpg" class="lightbox-bedrooms"><img src="images/gallery/21.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/22.jpg" class="lightbox-bedrooms"><img src="images/gallery/22.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/23.jpg" class="lightbox-bedrooms"><img src="images/gallery/23.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-xs-6 col-sm-3">-->
                                    <!--            <a href="images/gallery/24.jpg" class="lightbox-bedrooms"><img src="images/gallery/24.jpg" alt="Image"></a>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div role="tabpanel" class="tab-pane" id="gallerybathroom">
                                        <div class="row no-gutters gallery-images">
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/25.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/25.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/26.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/26.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/27.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/27.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/28.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/28.jpg" alt="Image"></a>
                                            </div>
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/29.jpg" class="lightbox-bedrooms"><img src="images/gallery/29.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/30.jpg" class="lightbox-bedrooms"><img src="images/gallery/30.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/31.jpg" class="lightbox-bedrooms"><img src="images/gallery/31.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/32.jpg" class="lightbox-bedrooms"><img src="images/gallery/32.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="galleryswimming">
                                        <div class="row no-gutters gallery-images">
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/33.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/33.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/34.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/34.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/35.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/35.jpg" alt="Image"></a>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <a href="images/gallery/36.jpg" class="lightbox-bedrooms"><img
                                                        src="images/gallery/36.jpg" alt="Image"></a>
                                            </div>
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/37.jpg" class="lightbox-bedrooms"><img src="images/gallery/37.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/38.jpg" class="lightbox-bedrooms"><img src="images/gallery/38.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/39.jpg" class="lightbox-bedrooms"><img src="images/gallery/39.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                            <!--<div class="col-xs-6 col-sm-3">-->
                                            <!--    <a href="images/gallery/40.jpg" class="lightbox-bedrooms"><img src="images/gallery/40.jpg" alt="Image"></a>-->
                                            <!--</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Classic Close -->
        <!-- HOME : Nearby Place start-->
        <section class="padding-top-20">
            <div class="nearby-places">
                <h6 class="section-title text-center bounceInDown animated wow" data-wow-delay=".6s">Nearby Places</h6>
                <hr class="section-title-hr">
                <hr class="section-red-line">
                <br />
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2"></div>
                        <div class="col-lg-8 text-center bounceInUp animated wow" data-wow-delay=".8s">
                            <p>Lily Court is a totally new city created by the master planners in the quiet sub-urban area
                                of Akinde road off Lagos / Abeokuta expressway, Ajegunle, under Ifako-Ijaiye Local
                                Government Area, Lagos. The estate development is built at places close to Mall (Shoprite
                                Mall), School (7mins drive to Convenant University) and Airport (20mins drive to Muritala
                                Mohammed Airpot).</p>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 near-place bounceInLeft animated wow" data-wow-delay=".6s">
                                    <div class="nearby-icons pull-left">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="nearby-info">
                                        <strong>School</strong>
                                        <em>Convernant University</em>
                                        <h4>1.2km</h4>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6 near-place bounceInLeft animated wow" data-wow-delay=".8s">
                                    <div class="nearby-icons pull-left">
                                        <i class="fa fa-plane"></i>
                                    </div>
                                    <div class="nearby-info">
                                        <strong>Airport</strong>
                                        <em>Muritala Mohammed International Airport</em>
                                        <h4>2.2km</h4>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6 near-place bounceInRight animated wow" data-wow-delay=".8s">
                                    <div class="nearby-icons pull-left">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <div class="nearby-info">
                                        <strong>Mall</strong>
                                        <em>Palms</em>
                                        <h4>0.8km</h4>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-6 near-place bounceInRight animated wow" data-wow-delay=".6s">
                                    <div class="nearby-icons pull-left">
                                        <i class="fa fa-shopping-cart"></i>
                                    </div>
                                    <div class="nearby-info">
                                        <strong>Supermarket</strong>
                                        <em>Justrite Supermarket</em>
                                        <h4>4.0km</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- HOME : Nearby Place close -->
        <!============================>
            <section id="map" class="padding-top-20">
                <div class="nearby-places">
                    <h6 class="section-title text-center bounceInDown animated wow" data-wow-delay=".6s">Route Map</h6>
                    <hr class="section-title-hr">
                    <hr class="section-red-line">
                    <br />
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center bounceInUp animated wow" data-wow-delay=".8s"
                                style="border: 1px solid #000; text-align: left;">
                                <div class="mapouter">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.6259239505857!2d3.2653714142670607!3d6.693168823025746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9731451443af%3A0x67d3356920a56c44!2sThe%20Pinnacle%20School!5e0!3m2!1sen!2sng!4v1611963121847!5m2!1sen!2sng" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                                    <div class="gmap_canvas">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.6259239505857!2d3.2653714142670607!3d6.693168823025746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9731451443af%3A0x67d3356920a56c44!2sThe%20Pinnacle%20School!5e0!3m2!1sen!2sng!4v1611963121847!5m2!1sen!2sng" width="350" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                                    <style>
                                        
                                        

                                    </style>
                                </div>
                            </div>
                        </div>
                        <br />
                        <br />
                    </div>
                </div>
            </section>
            <!-- HOME : Message Box start -->
            <section id='paymentplan'>
                <div class="cottage-msgbox">
                    <div class="container">
                        <div class="col-sm-2 bounceInLeft animated wow" data-wow-delay=".6s">
                            <h1>Payment </h1>
                            <h1>Structure </h1>
                        </div>
                        <div class="col-sm-3 bounceInDown animated wow" data-wow-delay=".9s">
                            <p><a class="btn" @click="display('outright')">Outright Payment</a></p>
                        </div>
                        <div class="col-sm-3 bounceInDown animated wow" data-wow-delay=".9s">
                            <p><a class="btn">Installments</a></p>
                            <p><a class="btn" @click="display('12months')">12 months installment</a></p>
                            <p><a class="btn" @click="display('18months')">18 months installment</a></p>
                            <p><a class="btn" @click="display('24months')">24 months installment</a></p>
                        </div>
                        <div class="col-sm-2 bounceInDown animated wow" data-wow-delay=".9s">
                            <p><a class="btn" @click="display('mortgage')">Mortage Facility</a></p>
                        </div>
                        <div class="col-sm-2 text-right bounceInRight animated wow" data-wow-delay=".6s">
                            <a href="#applicationform" class="btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- HOME : Message Box Close -->
            <!===================================================>
                <!-- HOME: About Agent Start -->
                <section id="contact" class="contact-section">
                    <!--Map Container-->
                    <div class="map-container background-map">
                    </div>
                    <div class="container">
                        <div class="row no-padding footer-agent-contact">
                            <div class="col-sm-6 bounceInLeft animated wow" data-wow-delay=".7s">
                                <div class="footer-agent">
                                    <h6><strong>Contact</strong> {{ config('app.name') }}</h6>
                                    <div class="row padding-bottom-20"><br />
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="info-box">
                                                <i class="fa fa-map-marker"></i>
                                                <strong>Head Office</strong>
                                                <p>{{ config('app.address2') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="info-box">
                                                <i class="fa fa-map-marker"></i>
                                                <strong>Site Office</strong>
                                                <p>{{ config('app.address') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="info-box">
                                                <i class="fa fa-phone"></i>
                                                <strong>Mobile</strong>
                                                <p>{{ config('app.telephone') }}</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="info-box">
                                                <i class="fa fa-envelope"></i>
                                                <strong>Email</strong>
                                                <p> &nbsp; {{ config('app.email') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 bg-orange bounceInRight animated wow" data-wow-delay=".7s">
                                <div class="footer-reachout" id="messageBlock">
                                    <h6>Send Message</h6>
                                    <br />
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <input type="text" id="visitorName" name="visitor_name" placeholder="Enter name"
                                                required class="form-control">
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="email" id="visitorEmail" name="visitor_email"
                                                placeholder="Enter email" required class="form-control">
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="text" id="visitorTelephone" name="telephone"
                                                placeholder="Enter telephone" required class="form-control">
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <textarea id="visitorMessage" name="visitor_message" placeholder="Message"
                                                required class="form-control"></textarea>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                            <!-- <br/> -->
                                            <div id="loaderMessage" style="display: none;"></div>
                                            <div style="display:none;" id="myDivMessage" class="animate-bottom">
                                                <p id="Mes"></p>
                                            </div>
                                            <button type="submit" id="messageFormSubmit" class="btn btn-blue-white"> Submit
                                                <i class="fa fa-send"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container close -->
                </section>

                <script>
                    new Vue({
                        el: '#app',
                        data: {
                            imageUrl: ''
                        },
                        methods: {
                            outright() {
                                alert('outright')
                            },
                            display(value) {

                                if (value == 'outright') {
                                    this.imageUrl = '/images/pricing/outright.png'
                                    this.displayAlert();
                                }

                                if (value == '12months') {
                                    this.imageUrl = '/images/pricing/12months.png'
                                    this.displayAlert();
                                }

                                if (value == '18months') {
                                    this.imageUrl = '/images/pricing/18months.png'
                                    this.displayAlert();
                                }

                                if (value == '24months') {
                                    this.imageUrl = '/images/pricing/24months.png'
                                    this.displayAlert();
                                }

                                if (value == 'mortgage') {
                                    this.imageUrl = '/images/pricing/mortgage.png'
                                    this.displayAlert();
                                }




                            },
                            displayAlert() {
                                let x = this;

                                Swal.fire({
                                    imageUrl: x.imageUrl,
                                    imageWidth: 400,
                                    imageHeight: 200,
                                    confirmButtonColor: '#181d30',
                                    animation: false
                                })

                            }
                        },
                        created() {
                            //   alert('Yiduuuuuuuuuuuu')
                        }
                    })

                </script>
                <script src="https://code.jquery.com/jquery-3.3.1.js"
                    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
                <!--<script src="js/jquery-2.2.3.min.js"></script>-->
                <script type="text/javascript">
                    $(document).ready(function() {


                        $('#applicationFormSubmit').click(function(event) {
                            event.preventDefault();
                            var title = $('#titleName').val();
                            var surname = $('#surname').val();
                            var otherName = $('#otherName').val();
                            var status = $('#statusName').val();
                            var sex = $('#sex').val();
                            var nationality = $('#nationality').val();
                            var telephone = $('#telephone').val();
                            var email = $('#email').val();
                            var postalAddress = $('#postalAddress').val();
                            var residentialAddress = $('#residentialAddress').val();
                            var occupation = $('#occupation').val();
                            var property = $('#propertyName').val();
                            var payment = $('#paymentName').val();
                            var nokName = $('#nokName').val();
                            var nokAddress = $('#nokAddress').val();
                            var nokTelephone = $('#nokTelephone').val();

                            // Check if form is filled
                            var realId = ['titleName', 'surname', 'otherName', 'statusName', 'sex',
                                'nationality', 'telephone', 'email', 'postalAddress',
                                'residentialAddress', 'occupation', 'propertyName', 'paymentName',
                                'nokName', 'nokAddress', 'nokTelephone'
                            ];


                            var param = [title, surname, otherName, status, sex, nationality, telephone,
                                email, postalAddress, residentialAddress, occupation, property, payment,
                                nokName, nokAddress, nokTelephone
                            ];

                            startLoader("applicationform", "loader");

                            param.forEach(validateForm);


                            $.ajax({
                                url: '/applicationForm',
                                method: 'GET',
                                data: {
                                    submit: 1,
                                    title: title,
                                    surname: surname,
                                    otherName: otherName,
                                    status: status,
                                    sex: sex,
                                    nationality: nationality,
                                    telephone: telephone,
                                    email: email,
                                    postalAddress: postalAddress,
                                    residentialAddress: residentialAddress,
                                    occupation: occupation,
                                    property: property,
                                    payment: payment,
                                    nokName: nokName,
                                    nokAddress: nokAddress,
                                    nokTelephone: nokTelephone
                                },
                                success: function(data) {
                                    stopLoader("applicationform", "loader", "myDiv");
                                    requestSuccess("Msg", data);
                                    setTimeout(function() {
                                        realId.forEach(clearFields);
                                    }, 3000);
                                    console.log(data);
                                },
                                error: function(error) {
                                    stopLoader("applicationform", "loader", "myDiv");
                                    requestError("Msg", error);
                                    setTimeout(function() {
                                        realId.forEach(clearFields);
                                    }, 3000);
                                    console.log(error.responseText.replace(/"/g, ''));
                                }
                            });

                        });



                        $('#messageFormSubmit').click(function(event) {
                            event.preventDefault();

                            var visitorName = $('#visitorName').val();
                            var visitorEmail = $('#visitorEmail').val();
                            var visitorTelephone = $('#visitorTelephone').val();
                            var visitorMessage = $('#visitorMessage').val();



                            // Check if form is filled
                            var realId = ['visitorName', 'visitorEmail', 'visitorTelephone',
                                'visitorMessage'
                            ];


                            var param = [visitorName, visitorEmail, visitorTelephone, visitorMessage];

                            startLoader("messageBlock", "loaderMessage");

                            param.forEach(messageValidateForm);


                            $.ajax({
                                url: '/messageForm',
                                method: 'GET',
                                data: {
                                    //submit: 1,
                                    visitorName: visitorName,
                                    visitorEmail: visitorEmail,
                                    visitorTelephone: visitorTelephone,
                                    visitorMessage: visitorMessage
                                },
                                success: function(data) {
                                    stopLoader("messageBlock", "loaderMessage", "myDivMessage");
                                    requestSuccess("Mes", data);
                                    setTimeout(function() {
                                        realId.forEach(clearFields);
                                    }, 3000);
                                    console.log(data);
                                },
                                error: function(error) {
                                    stopLoader("messageBlock", "loaderMessage", "myDivMessage");
                                    requestError("Mes", error);
                                    setTimeout(function() {
                                        realId.forEach(clearFields);
                                    }, 3000);
                                    console.log(error.responseText.replace(/"/g, ''));
                                }
                            });


                        });




                        $('#appointmentFormSubmit').click(function(event) {
                            event.preventDefault();

                            var appName = $('#appName').val();
                            var appEmail = $('#appEmail').val();
                            var appTelephone = $('#appTelephone').val();
                            var appDate = $('#appDate').val();


                            // Check if form is filled
                            var realId = ['appName', 'appEmail', 'appTelephone', 'appDate'];


                            var param = [appName, appEmail, appTelephone, appDate];


                            startLoader("appointmentBlock", "loaderAppointment");


                            param.forEach(appointmentValidateForm);


                            $.ajax({
                                url: '/appointmentForm',
                                method: 'GET',
                                data: {
                                    submit: 1,
                                    appName: appName,
                                    appEmail: appEmail,
                                    appTelephone: appTelephone,
                                    appDate: appDate
                                },
                                success: function(data) {
                                    stopLoader("appointmentBlock", "loaderAppointment",
                                        "myDivAppointment");
                                    requestSuccess("App", data);
                                    setTimeout(function() {
                                        realId.forEach(clearFields);
                                    }, 3000);
                                    console.log(data);
                                },
                                error: function(error) {
                                    stopLoader("appointmentBlock", "loaderAppointment",
                                        "myDivAppointment");
                                    requestError("App", error);
                                    setTimeout(function() {
                                        realId.forEach(clearFields);
                                    }, 3000);
                                    console.log(error.responseText.replace(/"/g, ''));
                                }
                            });


                        });






                        // Application jquery functions
                        function validateForm(param1) {
                            if (param1 == "") {
                                $("#Msg").html(
                                    "<div class='alert alert-danger'>Please fill all neccessary requirements</div>"
                                    );

                                // Terminates Loader
                                stopLoader("applicationform", "loader", "myDiv");

                                throw "It is empty";
                            }
                            return

                        }



                        // Message jquery functions
                        function messageValidateForm(param1) {
                            if (param1 == "") {
                                $("#Mes").html(
                                    "<div class='alert alert-danger'>Please fill all neccessary requirements</div>"
                                    );

                                // Terminates Loader
                                stopLoader("messageBlock", "loaderMessage", "myDivMessage");

                                throw "It is empty";
                            }
                            return

                        }


                        // Appointmnet jquery functions
                        function appointmentValidateForm(param1) {
                            if (param1 == "") {
                                $("#App").html(
                                    "<div class='alert alert-danger'>Please fill all neccessary requirements</div>"
                                    );

                                // Terminates Loader
                                stopLoader("appointmentBlock", "loaderAppointment", "myDivAppointment");

                                throw "It is empty";
                            }
                            return

                        }


                        function requestSuccess(param1, x) {

                            $("#" + param1).html("<div class='alert alert-success'>" + x + "</div>");

                        }


                        function requestError(param1, x) {

                            $("#" + param1).html(
                                "<div class='alert alert-danger'>Error in connection. Please try again</div>");

                        }

                    });

                </script>
                <script type="text/javascript">
                    // Clear Field function
                    function clearFields(param1) {
                        document.getElementById(param1).value = "";
                    }

                    // Loader Javascript functions

                    var myVar;

                    // Starts Loader using FormDiv ID, and gets loader ID e.g startLoader("appointmentBlock", "loaderAppointment");
                    function startLoader(param1, param2) {
                        document.getElementById(param1).style.background = "black";
                        document.getElementById(param1).style.opacity = 0.3;
                        document.getElementById(param2).style.display = "block";
                    }


                    // Stops Loader using FormDiv ID, and gets loader ID e.g stopLoader("appointmentBlock", "loaderAppointment", "myDivAppointment");
                    function stopLoader(param1, param2, param3) {
                        document.getElementById(param2).style.display = "none";
                        document.getElementById(param1).style.background = "transparent";
                        document.getElementById(param1).style.opacity = 1;
                        document.getElementById(param3).style.display = "block";
                    }

                </script>

                <script>
                    function applicationRedirect() {

                        window.location.reload();

                    }

                </script>

    </div>
@endsection
