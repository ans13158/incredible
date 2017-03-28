<?php

require 'common/header.php';
require 'common/navbar.php';
?>

<body>

     <div class="bars" id="bars"></div>
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                 <ul class="menu-list text-uppercase">
                                    <li  ><?= anchor( base_url('index.php/incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('index.php/incredible_ukd/about'),'About Us') ?></li>

                                    <li><?= anchor(base_url("index.php/incredible_ukd/role"),'Our Role')?> </li> 

                                    <li ><?= anchor( base_url('index.php/incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li ><?= anchor( base_url('index.php/incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('index.php/incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                        
                                        

                                    <li ><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li ><?= anchor( base_url('index.php/incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
                                            <li><?= anchor( base_url('index.php/incredible_ukd/about_india'),'Destinations India') ?></li>
                                           
                                        </ul>
                                    </li>
                                    
                                    <li><?= anchor( base_url('index.php/incredible_ukd'),'Tour Packages')?>
                                        <ul class="sub-menu"  >
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/pilgrimage'),'Pilgrims Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/wildlife'),'Wildlife Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/excursion'),'Excursion Tour Packages')?></li>
                                            <li ><?= anchor( base_url('index.php/incredible_ukd/honeymoon'),'Honeymoon Packages')?></li>
                                            <li style=""><?= anchor('index.php/incredible_ukd/trekking','Trekking Packages')?></li>
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/motorbike'),'Motorbike Packages')?></li>
                                            <li style=""><?= anchor('index.php/incredible_ukd/home_stay','Home Stay')?></li>
                                            
                                        </ul>
                                    </li>
                                   <li   class="current-menu-parent"><?= anchor('index.php/incredible_ukd/contact','Contact Us')?></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

         <section class="banner">
            <div class="bg-parallax bg-3"></div>
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="" style="height: 100px;">
                   
                    </a>
                </div>
        </section>

        <div class="main">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?= base_url('index.php/incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li>Contact us</li>
                        </ul>
                    </section>

                      
        <section class="contact-page">
                        <div class="contact-maps">
                            <div id="contact-maps" data-map-zoom="16" data-map-latlng=" 29.594189, 79.653893" data-map-content="Book Awesome"></div>
                        </div>
                        <div class="contact-cn">
                            <?php
                            if(isset($success) )  {
                                echo '<div class="alert-box alert-success" style="font-size:16px">'.
                                   $success.  
                            '</div>';

                            if(isset($failure) )  {
                                echo '<div class="alert-box alert-danger" style="font-size:16px>'.
                                   $failure . 
                            '</div>';
                            }
                        }
                            ?>
                            <h2>We are always in touch</h2>
                            <ul>
                                <li><?= img( ["src"=>"images/icon-maker-contact.png", "alt"=>""]) ?> <strong>Main Office :</strong> Karbala Chauraha,Nainital Road, Almora,Pin: 263601, Uttarakhand
                               		<br>
                               	<strong>Satellite Office : </strong>Teen Pani Chauraha,Bareilly Road, Haldwani,Pin: 263139, Uttarakhand		 	
                                </li>
                                <li><?= img(["src"=>"images/icon-phone.png", "alt"=>""]) ?>+91-8191937317, +91-7088184111</li>
                                <li><?= img(["src"=>"images/icon-email.png", "alt"=>""]) ?> <a href="#"> contact@incredibleuttarakhand.co.in</a></li>
                            </ul>
                         <div class="form-contact">
                                <form method="POST" action="submitContact">
                                    <div class="form-field">
                                        <label for="name">Name <sup>*</sup></label>
                                        <input type="text" name="name" id="name" class="field-input">
                                    </div>
                                    <div class="form-field">
                                        <label for="email">Email <sup>*</sup></label>
                                        <input type="text" name="email" id="email" class="field-input">
                                    </div>
                                    <div class="form-field form-field-area">
                                        <label for="message">Message <sup>*</sup></label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="field-input"></textarea>
                                    </div>
                                    <div class="form-field text-center">
                                        <button type="submit" id="submit-contact" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-lager">Submit</button>
                                    </div>
                                    <div id="contact-content">
                                            <br><br><br>
                                       

                                    </div>
                                </form>
                            </div>    
        </section>                            

                <div class="main-cn bg-white clearfix text-center">
                            <br><br><br>
                    <a href="<?= base_url('index.php/incredible_ukd/enquiry') ?>" title="" class="awe-btn awe-btn-2 arrow-white arrow-right awe-btn-lager "> <h4>Know More About Packages</h4> 
                        </a>
                                            <h3 >OR</h3>   
                    <a href="<?= base_url('index.php/incredible_ukd/enquiryTrip') ?>" title="" class="awe-btn awe-btn-2 arrow-white arrow-right awe-btn-lager "> <h4>Know More About Our Trips</h4> 
                        </a>
                </div>   
</div>
            </div>
        </div>

<?php
require 'common/footer.php';
?>