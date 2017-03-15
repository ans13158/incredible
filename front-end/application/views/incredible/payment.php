<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>
</body>
<style>
    .contact-details  {
        float: right;
        background-color: rgba(255,255,255,.85);
        font-size:18px;
        color:black;
        padding: 25px;
        margin-right: -90px;
        margin-top: -70px;
        /*opacity: 0.95;
        filter: alpha(opacity=95)*/
    }
</style>

<body>

    <nav class="navigation nav-c col-xs-12" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('incredible_ukd/about'),'About Us') ?></li>

                                    <li><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                    <li><?= anchor('','Our Services')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/best_hotel'),'Best Hotels & Resorts')?></li>
                                            <li><?= anchor( '','Logistic Modes')?>
                                                <ul class="sub-menu">
                                                    <li><?= anchor( base_url('incredible_ukd/flights'),'Flights')?></li>
                                                    <li><?= anchor( base_url('incredible_ukd/cars'),'Cars')?></li>
                                                    <li><?= anchor( base_url('incredible_ukd/bikes') ,'Bikes')?></li>
                                                    <li><?= anchor( base_url('incredible_ukd/bus') ,'Buses')?></li>
                                                    <li><?= anchor( base_url('incredible_ukd/travelers') ,'Travelers')?></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>               
                                    <li><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_india'),'Destinations India') ?></li>
                                           
                                        </ul>
                                    </li>
                                    
                                    <li><?= anchor( base_url('incredible_ukd'),'Tour Packages')?>
                                        <ul class="sub-menu"  >
                                            <li style=""><?= anchor( base_url('incredible_ukd/pilgrimage'),'Pilgrims Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd/wildlife'),'Wildlife Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd/excursion'),'Excursion Tour Packages')?></li>
                                            <li ><?= anchor( base_url('incredible_ukd/honeymoon'),'Honeymoon Packages')?></li>
                                            <li style=""><?= anchor('incredible_ukd/trekking','Trekking Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd/motorbike'),'Motorbike Packages')?></li>
                                            <li style=""><?= anchor('incredible_ukd/home_stay','Home Stay')?></li>
                                            
                                        </ul>
                                    </li>
                                   <li><?= anchor('incredible_ukd/contact','Contact Us')?></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="sub-banner">
            <div class="bg-parallax bg-1"></div>
            
        </section>
        <div class="main">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <div class="step">
                        <ul class="payment-step text-center clearfix">
                            <li class="step-select"><span>1</span>
                                <p>Choose Your Room</p>
                            </li>
                            <li class="step-part"><span>2</span>
                                <p>Your Booking &amp; Payment Details</p>
                            </li>
                            <li><span>3</span>
                                <p>Booking Completed!</p>
                            </li>
                        </ul>
                    </div>
                    <div class="payment-room">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="payment-info">
                                    <h2>Grand Plaza Serviced Apartments</h2><span class="star-room"><i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i></span>
                                    <ul>
                                        <li><span>Location:</span> 42 Princes Square, London W2 4AD</li>
                                        <li><span>Check-in:</span> Thu 30 Oct, 2014</li>
                                        <li><span>Check-out:</span> Sat 01 Nov, 2014</li>
                                        <li><span>Stay:</span> 2 Nights, 1 Room, Max 2 Adult(s)</li>
                                        <li><span>Room:</span> Luxury View Suite</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="payment-price">
                                    <figure><img src="images/hotel/img-9.jpg" alt=""></figure>
                                    <div class="total-trip"><span>1 Room x 2 Nights<br>$501.33<small>/night</small></span>
                                        <p>Trip Total: <ins>$365</ins> <i>Hotel tax 7% not included, Service charge 10% not included</i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-form">
                        <div class="row form">
                            <div class="col-md-6">
                                <h2>Your Information</h2>
                                <div class="form-field">
                                    <input type="text" placeholder="First Name" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Last Name" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Email" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Email (confirm)" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Phone number" class="field-input">
                                </div>
                                <div class="form-field">
                                    <input type="text" placeholder="Country of Passport" class="field-input">
                                </div>
                                <div class="radio-checkbox">
                                    <input type="checkbox" class="checkbox" id="accept">
                                    <label for="accept">I am not staying at the hotel. I am making this booking for someone else.</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h2>Your payment details</h2><span>Select Payment Method <img src="images/icon-payment.png" alt=""></span>
                                <ul>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-1" class="radio">
                                            <label for="radio-1">Visa</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-2" class="radio">
                                            <label for="radio-2">MasterCard</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-3" class="radio">
                                            <label for="radio-3">JCB</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-4" class="radio">
                                            <label for="radio-4">American Express</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-5" class="radio">
                                            <label for="radio-5">PayPal</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-checkbox">
                                            <input type="radio" name="radio-1" id="radio-6" class="radio">
                                            <label for="radio-6">Carte Bleue</label>
                                        </div>
                                    </li>
                                </ul>
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 col-lg-6 cart-number">
                                        <label>Card Number</label>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="form-field">
                                                    <input type="text" class="field-input">
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-field">
                                                    <input type="text" class="field-input">
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-field">
                                                    <input type="text" class="field-input">
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <div class="form-field">
                                                    <input type="text" class="field-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6 card-holder">
                                        <label>Card Holder Name</label>
                                        <div class="form-field">
                                            <input type="text" class="field-input">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6 expiry-date">
                                        <label>Expiry Date</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-field">
                                                    <input type="text" class="field-input calendar-input">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-field">
                                                    <input type="text" class="field-input calendar-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-12 col-lg-6 cvc-code">
                                        <label>CVC-code</label>
                                        <div class="form-field">
                                            <input type="text" class="field-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit text-center">
                            <p>By selecting to complete this booking I acknowledge that I have read and accept the <span>rules &amp; restrictions terms &amp; conditions</span> , and <span>privacy policy</span>.</p>
                            <button class="awe-btn awe-btn-1 awe-btn-lager">Pay &amp; Book now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index-2.html" title=""><img src="images/logo-footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="about.html" title="">About</a></li>
                                <li><a href="blog.html" title="">Blog</a></li>
                                <li><a href="fqa.html" title="">FQA</a></li>
                                <li><a href="careers.html" title="">Carrers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="contact.html" title="">Contact Us</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Term of Service</a></li>
                                <li><a href="#" title="">Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head"><span class="angle-down"><i class="fa fa-angle-down"></i></span></div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">English</a></li>
                                    <li><a href="#" title="">Bahasa Melayu</a></li>
                                    <li><a href="#" title="">Català</a></li>
                                    <li><a href="#" title="">Dansk</a></li>
                                    <li><a href="#" title="">Deutsch</a></li>
                                    <li><a href="#" title="">Francais</a></li>
                                    <li><a href="#" title="">Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head"><span class="angle-down"><i class="fa fa-angle-down"></i></span></div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">US</a></li>
                                    <li><a href="#" title="">ARS</a></li>
                                    <li><a href="#" title="">ADU</a></li>
                                    <li><a href="#" title="">CAD</a></li>
                                    <li><a href="#" title="">CHF</a></li>
                                    <li><a href="#" title="">CNY</a></li>
                                    <li><a href="#" title="">CZK</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="copyright">© 2009 – 2014 Bookyourtrip™ All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/library/parallax.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="js/library/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
</body>
<!-- Mirrored from envato.megadrupal.com/html/bookawesome/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2017 13:29:25 GMT -->

</html>