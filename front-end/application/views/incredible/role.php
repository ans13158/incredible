<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>

<body>

    <div class="bars" id="bars"></div>
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                 <ul class="menu-list text-uppercase">
                                    <li><?= anchor( base_url('index.php/incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('index.php/incredible_ukd/about'),'About Us') ?></li>
                                    
                                    <li class="current-menu-parent"><?= anchor(base_url("index.php/incredible_ukd/role"),'Our Role')?> </li> 

                                    <li><?= anchor( base_url('index.php/incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('index.php/incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('index.php/incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                                  
                                    <li><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('index.php/incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
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
                                   <li><?= anchor('index.php/incredible_ukd/contact','Contact Us')?></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section class="banner">
            <div class="bg-parallax bg-3"></div>
            <div class="container">
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="">
                    
                    </a>
                </div>
            </div>
        </section>


        <div class="main">
            <div class="container">
                <div class="main-cn about-page bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><?= anchor('index.php/incredible_ukd','<i class="fa fa-home"></i>') ?></li>
                            <li>Our Role</li>
                        </ul>
                    </section>


        	<section class="about-cn clearfix ">
                            
                        <div class="about-text ">
                            <div class="about-description">
                            <h2>Our Role in Making Your Trip Memorable</h2>

                            <p>We the Tour Planners are habitants of Uttarakhand, so our understanding of this land is far better than that of others in the business.We pledge to put our hearts and souls in making your trip memorable and make it worth your money.</p>
                            <p>We at <strong>IncredibleUttarakhand.com</strong> prioritize our customers before everything else and aim at making your experience with us unforgettable.  </p>

                            <p>We help you in customizing your trip,the way you want it by providing you flexibility in every aspect of tour planning. Be it your accomodation, your mode of travel or the itinerery of your trip, we will give it to you the way you want it to be.</p>
                            
                            <br>

                            <h2 style="color:#111">
                            	Why Choose Us <img src="<?= base_url('images/icon/questionmark.png')?>" alt="" style="height: 50px;">
                            </h2>
                            		<br><br>
                            <div class="col-md-5 col-xs-5 col-sm-5">
                            	<div class="image-wrap"><?= img( ["src"=> base_url('images/icon/trip.jpg'),  "alt"=>"","style"=>"height:200px;width:100%"] )  ?></div>
                            		<h3 style="color:black">Memorable Trip Guaranteed</h3>
                            		<p>We may not guarantee you the best price, but the one thing we can be sure about is that <strong>we will make your trip the best trip of your life. </strong> </p>
                           		</div>
                        	</div>

                        	<div class="col-md-5 col-xs-5 col-sm-5 col-md-offset-2">
                            	<div class="image-wrap"><?= img( ["src"=> base_url('images/icon/customize.png'),  "alt"=>"","style"=>"height:200px;width:100%"] )  ?></div>
                            		<h3 style="color:black">Customize You Trip</h3>
                            		<p>We provide you with an array of options to make it easy for you to <strong>customize your trip according to your needs.</strong>
                            		From the hotel of your choice, to mode of conveyence, you name it and we will provide.
                            		Choose the dates, hotels, conveyence, etc. according to your needs and budget.	
                            		</p>
                           		</div>
                        	</div>
                        			<br><br>
                        	<div class="col-md-5 col-xs-5 col-sm-5">
                            	<div class="image-wrap"><?= img( ["src"=> base_url('images/icon/planning.png'),  "alt"=>"","style"=>"height:200px;width:100%"] )  ?></div>
                            		<h3 style="color:black">Plan Complete Trip at One Place</h3>
                            		<p>Our website gives you the luxury of planning your entire trip on a single platform. From your stay to transportation, from food to shopping, you will get options to plan everything here itself. 
                            		</p>
                           		</div>
                        	
                        			<br><br>
                        	<div class="col-md-5 col-xs-5 col-sm-5 col-md-offset-2">
                            	<div class="image-wrap"><?= img( ["src"=> base_url('images/icon/customer.jpg'),  "alt"=>"","style"=>"height:200px;width:100%"] )  ?></div>
                            		<h3 style="color:black">Customer First Approach</h3>
                            		<p>We follow the Customer First policy in conducting our business. Nothing is more important to us than your satisfaction.We provide you with the best customer service there is.
                            		</p>
                           			<br><br>
                           		</div>

                        	<h3 style="color:#111" class="text-center">Our Services</h3>
                        	<h4 class="">We deal in the following :</h4>
	                                <div class="widget widget_recent_entries">
	                                <ul>
	                                	<li class="col-md-offset-1"><a>
	                                		<img src="<?= base_url('images/icon/international.jpeg') ?>" style="height: 300px;display: inline-block;margin-right: 10% " >
	                                		<h3 style="display: inline-block;color:black">International Tourism</h3>
	                                	</a></li>
	                                	<li class="col-md-offset-4"> 
	                                		<h3 style="display: inline-block;color:black">Tourism In India</h3>
	                                		<img src="<?= base_url('images/icon/india.jpg') ?>" style="height: 300px;display: inline-block;margin-left: 10% " >
	                                	</li>
	                                	<li class="col-md-offset-1">
	                                		<img src="<?= base_url('images/icon/uttarakhand.jpg') ?>" style="height: 300px;display: inline-block;margin-right: 10% " >
	                                		<h3 style="display: inline-block;color:black;"> <br><br><strong>Our Speciality : </strong><br> Tourism In UTTARAKHAND</h3>

	                                	</li>
	                                	<li></li>
	                                </ul>

                        			</div>

                        			<br><br>
                          <div class="image-wrap"><?= img( ["src"=> base_url('images/icon/thanx.jpg'),  "alt"=>"","style"=>"height:200px;width:60%,display: inline-block;"] )  ?>

                        	<h4 style="display: inline-block;">Thank You for considering us. Try our services and we promise you will love us.HAPPY TRAVELLING! </h4>
                        	</div>
                        			<br><br>
                        	</div>

                        </div>
            </section>  
        </div>
     </div>                 
    
    </body>
    </div>
<?php
	include "common/footer.php";

?>



