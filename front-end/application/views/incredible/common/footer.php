 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-foter">
                             <a href="" title=""> <?=img( ["src"=>'images/LOGO.png', "height"=>"50", "width"=>'350',"style"=>"margin-left:-60px"]) ?><h5 style="position: absolute;color:white;top:85px;z-index: +99999;margin-left: 40px;font-weight: bold">Tours & Travels</h5> </a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><?= anchor('incredible_ukd','Home') ?></li>
                                <li><?= anchor('incredible_ukd/about','About Us') ?></li>
                                <li><?= anchor('incredible_ukd','Location') ?></li>
                                <li><?= anchor('incredible_ukd','Our Services') ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><?= anchor('incredible_ukd','Destinations') ?></li>
                                <li><?= anchor('incredible_ukd','Tour Packages') ?></li>
                                <li><?= anchor('incredible_ukd','Home Stay') ?></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4" style="background-color: #111;height: auto;">
                                <h4 style="color:white;margin-top: 30px;margin-bottom: -60px">Payment Methods</h4>
                        <div class="currency-lang-bottom dropdown-cn float-left" style="background-color: #111;display:inline-block;width: auto">
                                
                            
                                <ul style="background-color: #111">
                                    <li class="current"><?= img ( [ 'src' => base_url("images/visa-card.gif"),'height'=>'40','width'=>'60'] ) ?></li>
                                    <br>
                                    <li><?= img ( [ 'src' => base_url("images/master-card.gif"),'height'=>'40','width'=>'60'] ) ?> </li>
                                </ul>
                            </div>
                            
                            <div class="currency-lang-bottom dropdown-cn float-left" style="background-color: #111;display:inline-block;width: auto">
                                <ul style="background-color: #111">             
                                     <li class="current"><?= img ( [ 'src' => base_url("images/visa-card.gif"),'height'=>'40','width'=>'60'] ) ?></li>
                                        <br>
                                     <li class="current"><?= img ( [ 'src' => base_url("images/master-card.gif"),'height'=>'40','width'=>'60'] ) ?></li>
                                </ul>
                            </div>        
                                    <!--<li><a href="#" title="">Deutsch</a></li>
                                    <li><a href="#" title="">Francais</a></li>
                                    <li><a href="#" title="">Italiano</a></li>-->
                                </ul>
                           
                        </div>
                        <!--<div class="currency-lang-bottom dropdown-cn float-left">
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
                        </div>-->
                        <p class="copyright">© 2009 – 2014 Incredible Uttarakhand™ All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="<?= base_url('js/library/jquery-1.11.0.min.js') ?>"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?= base_url('js/library/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/owl.carousel.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/parallax.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/jquery.nicescroll.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/jquery.ui.touch-punch.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/jquery.mb.YTPlayer.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/library/SmoothScroll.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/script.js') ?>"></script>



    <!--<script type="text/javascript" src="js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/library/parallax.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="js/library/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/script.js"></script>-->
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
        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
</body>
<!-- Mirrored from envato.megadrupal.com/html/bookawesome/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2017 13:24:32 GMT -->

</html>