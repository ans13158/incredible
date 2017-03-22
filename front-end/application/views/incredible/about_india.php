<?php 
    include "common/header.php";
    include "common/navbar.php";
?>  
    <div class="bars" id="bars"></div>
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                 <ul class="menu-list text-uppercase">
                                    <li  ><?= anchor( base_url('incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('incredible_ukd/about'),'About Us') ?></li>

                                    <li><?= anchor(base_url("incredible_ukd/role"),'Our Role')?> </li> 

                                    <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
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

         <section class="banner">
            <div class="bg-parallax bg-3"></div>
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="" style="height: 100px;">
                    
                    </a>
                </div>
        </section>
        <div class="main main-dt">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?= base_url('incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li><a href="<?= base_url('incredible_ukd/ukdDestinations') ?>" title="">About India</a></li>
                            
                            
                        </ul>
                        <div class="support float-right"><small>Got a question?Contact Us:  </small> <b>+91-8191937317</b> OR <b>contact@incredibleuttarakhand.co.in</b></div>
                    </section>
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                   <h1>
                                    	<div class="start-address"><address class="address">India</address></div>
                                    </h1>	
                                </div>

                               
                            </div>
                        </div>
                    </section>

                    <section class="detail-slider">
                        <div class="slide-room-lg">
                            <div id="slide-room-lg">
                                <?= img( ["src"=>"images/places/india.jpg" , "alt"=>"","style"=>"height:500px;width:100%" ]) ?> 
                                <?= img( ["src"=>"images/places/india1.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                <?= img( ["src"=>"images/places/india2.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                <?= img( ["src"=>"images/places/india3.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                <?= img( ["src"=>"images/places/india4.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                            </div>
                        </div>
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div id="slide-room-sm">
                                        <?= img([ "src"=>"images/places/india.jpg", "alt"=>"","style"=>"height:70px" ]) ?>
                                        <?= img([ "src"=>"images/places/india1.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        <?= img([ "src"=>"images/places/india2.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        <?= img([ "src"=>"images/places/india3.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        <?= img([ "src"=>"images/places/india4.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <!--<section class="detail-slider" style="height:500px">
                        <div class="slide-room-lg" >
                            <div id="slide-room-lg">
                                
                                
                               
                            </div>
                        </div>
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div id="slide-room-sm">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>-->
                    <section class="hotel-content detail-cn" id="hotel-content">
                      
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="hight-light">
                                    
                                    <h2>Must Visit Places</h2>
                                    <div class="row">
                                            <br>
                                            <ul >
                                            <li style="font-size: 21px;">Beaches of Goa</li>
                                                
                                                <br>
                                            <li style="font-size: 21px;">Beautiful Andaman & Nicobar Islands</li>
                                                
                                                <br>

                                            <li style="font-size: 21px;">Taj Mahal in Agra,Uttar Pradesh</li>
                                                
                                                <br>

                                            <li style="font-size: 21px;">Paradise on Earth, <b>Jammu and Kashmir</b></li>
                                                
                                                <br>

                                            <li style="font-size: 21px;">Scenic Daman & Diu Islands</li>
                                                

                                                    <br>
                                            <li style="font-size: 21px;"><b>Dalhousie</b> - Mini Switzerland in India</li>
                                            
                                                <br>
                                            <li style="font-size: 21px;">Backwaters of <b>Kerela</b></li>
                                                
                                                <br>
                                            
                                            <li style="font-size: 21px;">Mesmerising Rann of Kachh</li>

                                            </ul>
                                        
                                    </div>
                                </div>
                            </div>                    
                        
                           <div class="col-lg-9 hl-customer-like">
                                <h2 style="margin-top: 10px;">About the Country</h2>
                                    
                                
                                    <br>
                                    <p  style="line-height: 1.8;font-size:18px;font-family:bariol, 'Helvetica Neue',Helvetica,Arial,sans-serif">India is a great mélange of diverse culture, tradition, landscape, religion, festivals, orgasmic cuisines and more. The country is a union of states that are marked with prime attractions alluring a lot of International travelers from all around the world.</p>

                                    <p  style="line-height: 1.8;font-size:18px;font-family:bariol, 'Helvetica Neue',Helvetica,Arial,sans-serif">It is no exaggeration to say that one lifetime is not enough to savor the sights, sounds and experiences that this incredible country has to offer. Right from magical <b>Jammu and Kashmir</b> in the north to pristine <b>Kerala</b> in South and notable <b>Arunachal Pradesh</b> in the east to legendary <b>Gujarat</b> in west, Indian has a whole lot. The mighty Himalayan peaks and the expansive deserts offer some of the most amazing experiences on earth.</p>

                                        <div class="row">
                                              
                                                <div class="col-lg-12">
                                                        <div class="hotel-india-map">
                                                            <h3>Area Map</h3>
                                                        <div id="hotel-detail-map" data-latlng="28.7041, 77.1025"></div>
                                                        <p class="about-area-location"><i class="fa fa-map-marker"></i>India</p>
                                                    </div>
                                                   <br><br> 
                                                </div>
                                            </div>
                                        

                                    <p  style="line-height: 1.8;font-size:18px;font-family:bariol, 'Helvetica Neue',Helvetica,Arial,sans-serif">Come and visit one of the <b>seven wonders of the World- Taj Mahal in Agra</b>, unravel the mystery behind several imposing <b>havelis of Rajasthan</b>, offer sincere prayer at <b>iconic Gompas of Gangtok</b>, cruise through the <b>backwaters of Kerala</b> on a houseboat and get enthralled with <b>world's largest salt desert, Great Rann of Kutch</b>. The country also boasts of <b>Goa</b> and <b>Andaman and Nicobar Islands</b> that are like storehouses of a number of gorgeous beaches. Moreover, India is a land of several religions and thus it is home to innumerable temple and religious site belonging to all faiths. All the pious sites are not only highly revered places of worship but are architectural marvels too.</p>


                                         <br><br>
                                  <a href="<?= base_url('incredible_ukd/about_india')?>">
                                      <h3 style="color: #111;text-decoration: underline #111;">Click Here to Know More About the Travel Destinations in India</h3>
                                  </a>          

                                        
                                
                            </div>
                       
                    </section> 
                    <section class="check-rates detail-cn" id="check-rates">
                      
                    </section>
                
                    
                    <section class="review-detail detail-cn" id="review-detail">
                        <div class="row">
                                <br><br><br>
                                    
                                <!--</div>
                            </div>
                        </div>-->
                    </section>
                </div>
            </div>
        </div>
<?php include "common/footer.php" ;?>