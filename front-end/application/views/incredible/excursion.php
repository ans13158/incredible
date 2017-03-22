
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
                                    <li  ><?= anchor( base_url('incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('incredible_ukd/about'),'About Us') ?></li>

                                    <li><?= anchor(base_url("incredible_ukd/role"),'Our Role')?> </li> 

                                    <li ><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li ><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                          
                                    <li ><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li ><?= anchor( base_url('incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_india'),'Destinations India') ?></li>
                                           
                                        </ul>
                                    </li>
                                    
                                    <li  class="current-menu-parent"><?= anchor( base_url('incredible_ukd'),'Tour Packages')?>
                                        <ul class="sub-menu"  >
                                            <li style=""><?= anchor( base_url('incredible_ukd/pilgrimage'),'Pilgrims Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd/wildlife'),'Wildlife Tour Packages')?></li>
                                            <li   class="current-menu-parent"  style=""><?= anchor( base_url('incredible_ukd/excursion'),'Excursion Tour Packages')?></li>
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

         <section class="banner">
            <div class="bg-parallax bg-1"></div>
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
                            <li><a href="<?= base_url('incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li>Excursion Tour Package</li>
                        </ul>
                        
                    </section>
                    <section class="blog-content">
                       <div class="row">
                        <div class="col-lg-3 col-md-3">
                                    <div class="widget widget_categories">
                                        <h2 class="title-sidebar">Important Notes</h2>
                                        <ul>
                                            <li><a>The place of initiation of travel may vary as pernearest and approachable location of party/ies.</a></li>
                                            
                                            <li><a>The availability of vehicle will depend on the type of vehicle required by party.</a></li>

                                            <li><a>The estimation of tour cost will be done only after getting the requirements of party.</a></li>
                                            

                                        </ul>
                                    </div>    

                                    <div class="widget widget_categories">
                                        <h3 class="title-sidebar">Tours Tariff Includes :</h3>
                                        <ul>
                                            <li><a>Transportation from Delhi to Delhi as per tour itinerary.</a></li>
                                            
                                            <li><a>Driver DA, Fuel, Toll taxes & Parking.</a></li>

                                            <li><a>Accommodation for seven nights on chosen category as per tour itinerary.</a></li>
                                            
                                        </ul>
                                    </div>

                                    <div class="widget widget_categories">
                                        <h3 class="title-sidebar">Tours Cost Does Not Include :</h3>
                                        <ul>
                                            <li><a>Expenses of personal nature such as laundry telephone calls,drinks, tipping etc.</a></li>
                                            
                                            <li><a>Entrance fees at the monuments/ temples.</a></li>

                                            <li><a>Any thing not mentioned in itinerary.</a></li>

                                            <li><a>Any Airfare.</a></li>
                                            
                                            <li><a>Any kind of insurance.</a></li>

                                            <li><a>Any increase of gov taxes and fuel rates.</a></li>
                                        </ul>
                                        <p>The above list is Indicative only and in case of non-availability similar/alternate hotels shall be provided.</p>
                                    </div>
                                    

                                    <div class="widget widget_recent_entries">
                                        <h2 class="title-sidebar">Check List for the Trek (For Kedarnath Dham Trek, one can also hire Palanquin or pony) :</h2>
                                        <ul>
                                            <li><a>1. Cotton Shirts/T-Shirts</a></li>
                                                
                                            <li><a>2. Pants</a></li>
                                            
                                            <li><a>3. Full & Half Sleeve Sweater</a></li>

                                            <li><a>4. Light Rain Coat / Umbrella</a></li>

                                            <li><a>5. Cotton Socks</a></li>

                                            <li><a>6. Wind Cheater</a></li>

                                            <li><a>7. Sneakers</a></li>

                                            <li><a>8. Hand Towel</a></li>

                                            <li><a>9. Sun-tan Lotion</a></li>

                                            <li><a>10. Toilet Kit</a></li>

                                            <li><a>11. Personal Medication</a></li>

                                            <li><a>12. Boroline/ Chap Stick</a></li>

                                            <li><a>13. Water Bottle</a></li>

                                            <li><a>14. Slippers</a></li>


                                        </ul>
                                    </div>
                                    <div class="widget widget_tag_cloud">
                                        <h2 class="title-sidebar">Tour Cancellation :</h2>
                                        <div class="tagcloud"><h5>All notice of cancellation must be sent to our almora office in writing. Verbal cancellations will not be entertained. There is also no refund for services not utilized. There will be a cancellation fee also.</h5></div>
                                    </div>
                                   
                                    
                                </div>
                           

                            <div class="col-lg-9 col-md-9">
                                <div class="post post-single">
                            
                                    <div class="col-md-6 col-xs-12 col-sm-12">
                                        <span style="display: inline-block;"><h1 class="title-post-head">Excursion Packages</h1></span>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-12">    
                                        <span style="display: inline-block;margin-top: 10px;margin-left:50%"><a href="<?= base_url('incredible_ukd/enquiry') ?>" class="awe-btn awe-btn-2 arrow-right arrow-white awe-btn-medium">Enquire Now</a></span>
                                        <br><br>
                                    </div>    

                                    <div class="post-media">
                                        <div class="image-wrap"><?= img( ["src"=> base_url('images/tour/pangot.jpg'),  "alt"=>"","style"=>"height:300px;width:100%"] ) ?></div>
                                    </div>
                                    <div class="post-content">
                                        <blockquote>
                                            <p>Here ends my forever memorable excursion. I have crossed the Range of Light, surely the brightest and best of all the Lord has built. And, rejoicing in its glory, I gladly, gratefully, hopefully pray I may see it again.
                                            <small>John Muir</small>
                                            </p>
                                        </blockquote>
                                        <br>
                                            
                                    <h3 style="color:#111">Excursion to Pangot - A Bird Watcher's Paradise</h3>
                                    <p>Pangot is a small vivid vilage near Nainital which gives an experience of living in a remote Himalayan village. Along with being a paradise for Bird Watchers, Pangot also hosts various camping and trekking activites making it a must visit place with family and friends.</p>
                                    <h4 style="color:black">Activites in Pangot</h4>
                                    <p> <strong>Bird Watching:</strong>
                                    Pangot offers the opportunity for bird lovers to appreciate over 500 different species of birds. The Himalayan Griffon, blue-winged Minla, Khalij Peasant and Lammergeyer are just a few of the extremely picturesque variety of birds visiting this place.
                                    </p>
                                    <p> <strong>Trekking:</strong>
                                    Pangot offers adventurers with few trekking/hikin trails thst lead through lush green forests over the mountain tops and then down the valley. The most famous of these trails are the ones that lead to Naina Devi Peak and other that leads to Jim Corbett Park.
                                    </p>
                                    <p><strong>Camping:</strong>
                                    Camping is another worth a shot activity in Pangot. Sleep in tents under starry nights along with other campers, amidst bonfire and relax in the nature's lap.
                                    </p>

                                   <a href="<?= base_url('incredible_ukd/enquiry') ?>" class="awe-btn awe-btn-1 awe-btn-small" style="">Enquire Now</a>
                         

                        </div>
                    </section>
                </div>
            </div>
        </div>

 <script>
 	function showMore()  {
 		var hideThis = document.getElementById('hideThis');
 		hideThis.style.display = "none";
 		var show = document.getElementById('showMore');
 		show.style.display = "block";
 		var showImage = document.getElementsByClassName('showMoreImage');
 		showImage.style.display = "block";

 	}
 </script>       
<?php
	include_once "common/footer.php"; 
?>        