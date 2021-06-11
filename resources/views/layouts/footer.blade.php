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
                        <div class="box last col-xs-12 col-sm-3 contact-btn bounceInRight animated wow" data-wow-delay=".6s">
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
                            <li><a href="{{config('app.facebook')}}" target='_blank'><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="{{config('app.twitter')}}" target='_blank'><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="{{config('app.instagram')}}" target='_blank'><i class="fa fa-instagram"></i></a></li>
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
                                <li><i class="fa fa-li fa-phone"></i>{{config('app.telephone')}}, {{config('app.telephone2')}} </li>
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