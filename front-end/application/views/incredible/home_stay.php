<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>
</body>


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
                                    
                                    <li  class="current-menu-parent"><?= anchor( base_url('index.php/incredible_ukd'),'Tour Packages')?>
                                        <ul class="sub-menu"  >
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/pilgrimage'),'Pilgrims Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/wildlife'),'Wildlife Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/excursion'),'Excursion Tour Packages')?></li>
                                            <li ><?= anchor( base_url('index.php/incredible_ukd/honeymoon'),'Honeymoon Packages')?></li>
                                            <li style=""><?= anchor('index.php/incredible_ukd/trekking','Trekking Packages')?></li>
                                            <li style=""><?= anchor( base_url('index.php/incredible_ukd/motorbike'),'Motorbike Packages')?></li>
                                            <li  class="current-menu-parent" style=""><?= anchor('index.php/incredible_ukd/home_stay','Home Stay')?></li>
                                            
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
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="" style="height: 100px;">
                    <h3 style="color:white;text-decoration: none">Tour Planners</h3>
                    </a>
                </div>
        </section>

        <div class="main">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                            <li>Home Stay Tour Package</li>
                        </ul>

                        <div class="support float-right"><small>Got a question?Contact Us:  </small> <b>+91-8191937317</b> OR <b>contact@incredibleuttarakhand.co.in</b></div>
                        
                    </section>
                    <section class="blog-content">
                       <div class="row">
	                        <div class="col-md-3">
	                                <div class="widget widget_categories">
	                                    <h2 class="title-sidebar">Bookings :</h2>
	                                    <ul>
	                                        <li><a>Confirmation is subject to receipt of full advance amount.</a></li>
	                                        
                                            <li><a>All the Rates mentioned are valid for Indian Nationals Only. Tariff for Foreign Nationals/ NRI’s are on request.</a></li>

	                                        <li><a>You are requested to carry photocopy of the Identity card along with the original, issued by any Govt Authority.</a></li>
	                                    </ul>
	                                </div>    

	                                <div class="widget widget_categories">
	                                    <h3 class="title-sidebar">Cancellation & Refund :</h3>
	                                    <ul>
	                                        <li><a>15 days before Check in Date 50% of the package amount will be refunded.</a></li>
	                                        
	                                        <li><a>1 month before Check in Date 75% of full amount will be refunded.</a></li>

	                                        <li><a>No Show or Less than 15 days before Check in Date : No refund of booking amount.</a></li>
	                                        
	                                    </ul>
	                                </div>

	                                
	                                
	                            </div>
	                       

                            <div class="col-md-9 ">
                                <div class="post post-single">
                                    
                                    <div class="col-md-8 col-xs-12 col-sm-12">
                                        <span style="display: inline-block;"><h1 class="title-post-head">Home Stay Tour  Packages</h1></span>
                                    </div>
                                    <div class="col-md-4 col-xs-12 col-sm-12">     
                                        <span style="display: inline-block;float: right;margin-top: 10px"><a href="<?= base_url('index.php/incredible_ukd/enquiry') ?>" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-medium">Enquire Now</a></span>
                                        
                                    </div>   
                                        <br><br> <br><br> 
                                    <div class="post-media">

                                        <div class="image-wrap"><?= img( ["src"=> base_url('images/tour/home_stay.jpg'),  "alt"=>"", "style"=>"height:300px;width:100%"] ) ?></div>
                                    </div>
                                    <div class="post-content">
                                        <blockquote>
                                            <p>A vacation is what you take when you can no longer take what you've been taking. 

                                            <small>Earl Wilson</small></p>
                                        </blockquote>
                                        <br>
                                        	<h2 style="color:#111"><strong>Tea Garden Heritage Homestay, Bhowali ( Nainital) :</strong></h2>
                                                <br>		
                                                <div class="image-wrap"><?= img( ["src"=> base_url('images/tour/tea-garden.jpg'),  "alt"=>"", "style"=>"height:400px;width:100%"] ) ?></div>
                                        	<h3>
                                                About Tea Garden Heritage Homestay in Bhowali(Nainital) :</h3>

                                        <p>Tea Garden Heritage is a Home Stay property situated in Shyam Khet Hamlet near Bhowali of Nainital district. This property stands their since 1922 with perfect essence of British era along with famous tea garden in front previously owned by very famous nawab of Rampur after independence. The Tea Garden is now under the supervision of kumaun mandal vikas nigam.</p>

                                        <p>The very famous sainik school , gorakhal and golu devta temple is in walking distance from home stay.</p>

                                        <p>It provides breathtaking view of valley with a feel at home approach. The house consists of four separate and spacious family suites with maximum privacy.</p>
                                        
                                        <p>You can enjoy the early morning view with cool breeze over a sip of tea or coffee. The early morning walk in tea gardens makes your day and memories refreshing.</p>

                                        <h3 style="color:black">Location of Tea Garden Haritage Homestay :</h3>
                                        	<p>Tea Garden Heritage is located at shyamkhet which is 2- 3 kms and 13-14 kms approx from bhowali and nainital respectively.</p>
                                        
                                         
                                        <h3 style="color:black">Accessibility :</h3>
                                        <p>The home stay is well connected with road and easily accessible from bus station, hospital, police station etc. and the main feature is availability of ample parking space.</p>		
                                        
                                        
                                        <h3 style="color:black">Rooms Information :</h3>
                                            <p>The property consists of 2 floors, with 2 family sets in ground and first floor each i.e total 4 room sets. Each suite has a bedroom, attached toilet, living room, kitchen area and balcony. If you enjoy cooking, you can be provided with basic utensils and gas stove at your own expenses. Each first floor has facility of British era chimney structure for winters.</p>

                                            <p>Each set is spacious enough for a family of 2 and provides the comfort of your own house. The suites are neat and clean and provide complete privacy to the guest with view of the tea garden and mountains. There is housekeeping available on site for cleaning and maintenance of the property.</p>

                                            <p>First Floor: it has one bed room and one living room, kitchen area, attached toilet and private balcony with forest and garden view. Ground Floor: it has one bed room and one living room, kitchen area, attached toilet and private balcony with forest and garden view.</p>

                                            <div class="image-wrap"><?= img( ["src"=> base_url('images/tour/tea-factory.jpg'),  "alt"=>"","style"=>"height:400px;width:100%"] ) ?></div>


                                        <h3 style="color:black">Dining :</h3>
                                        <p>There is a fully operational kitchen - Self cooking only, Breakfast and Dinner is served on paid basis.</p>
										
									</div> 

                                    <div class="widget widget_recent_entries">
                                            
                                                
                                                <h3 class="title-sidebar">Facilities & Services</h3>
                                                    
                                            <ul>            
                                                <li><a>24x7 RO water, Cable TV in each suite</a></li>

                                                <li><a>Toiletries and linen, Small Refrigerator (in kitchen)</a></li>
                                                
                                                <li><a>Heating Equipment(only during winters)</a></li>
                                                
                                                <li><a>Powerback up, Pickup and drop, Taxi for local sightseeing</a></li>


                                            </ul>
                                                <br>
                                            <h3 style="color:black">Tea Garden Heritage Homestay Tariff Rate Card :</h3>
                                            <ul>
                                                <li><a>Rs. 2000/- (inclusive all taxes) per day for each set.</a></li>
                                                <li><a>One set include a room with living room, toilet, bathroom and kitchen.</a></li>
                                             </ul>   
                                    </div>

                                    <div class="image-wrap"><?= img( ["src"=> base_url('images/tour/home.jpg'),  "alt"=>"","style"=>"height:350px;width:100%"] ) ?>
                                        
                                    </div>

                                    <h3 style="color: black">How to reach Tea Garden Heritage home stay :</h3>
                                    <p>2-3 kms from bhowali towards ramgarh road. The road will bifurcate and smaller one lead to the tea garden estate marked by a small temple at road side as well as sign board at road corner.</p>

                                    <hr>
                                    <h3 style="color: black">Address :</h3>
                                    <address>
                                        <p>Tea Garden Heritage Homestay,</p>
                                        <p>Shyam Khet, Bhowali</p>
                                        <p>District- Nainital</p>
                                        <p>Uttarakhand, India</p>
                                    </address>
										<br><br>   
                                        <a href="<?= base_url('index.php/incredible_ukd/enquiry') ?>" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-medium" style="margin-left: 30%">Enquire Now</a>
                                    </div>
                                    
                                    
                                    
                                    </div>
                                </div>
                         	
                            </div>
                         

                        </div>
                    </section>
                </div>
            </div>
        </div>	

<?php
	include_once "common/footer.php";
?>        