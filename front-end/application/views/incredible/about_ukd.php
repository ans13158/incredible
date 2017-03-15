<?php 
    include "common/header.php";
    include "common/navbar.php";
?>  
    <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li ><?= anchor( base_url('incredible_ukd'),'Home') ?></li>
                                        
                                    <li ><?= anchor( base_url('incredible_ukd/about'),'About Us') ?></li>

                                     <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
                                            <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
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
                                            <li ><?= anchor( base_url('incredible_ukd'),'Honeymoon Packages')?></li>
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
        <div class="main main-dt">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?= base_url('incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li><a href="<?= base_url('incredible_ukd/ukdDestinations') ?>" title="">About Uttarakhand</a></li>
                            
                            
                        </ul>
                        <div class="support float-right"><small>Got a question?Contact Us:  </small> <b>+91-8191937317</b> OR <b>contact@incredibleuttarakhand.co.in</b></div>
                    </section>
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                   <h1>
                                    	<div class="start-address"><address class="address">Uttarakhand</address></div>
                                    </h1>	
                                </div>

                               
                            </div>
                        </div>
                    </section>
                    <section class="detail-slider" style="height:500px">
                        <div class="slide-room-lg" >
                            <div id="slide-room-lg">
                                <?= img( ["src"=>"images/places/ukd1.jpg" , "alt"=>"","style"=>"height:500px" ]) ?> 
                                <?= img( ["src"=>"images/places/ukd2.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                <?= img( ["src"=>"images/places/ukd3.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                <?= img( ["src"=>"images/places/ukd4.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                <?= img( ["src"=>"images/places/ukd5.jpg" , "alt"=>"","style"=>"height:500px" ]) ?>
                                
                               
                            </div>
                        </div>
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-4">
                                    <div id="slide-room-sm">
                                        <?= img([ "src"=>"images/places/ukd1.jpg", "alt"=>"","style"=>"height:70px" ]) ?>
                                        <?= img([ "src"=>"images/places/ukd2.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        <?= img([ "src"=>"images/places/ukd3.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        <?= img([ "src"=>"images/places/ukd4.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        <?= img([ "src"=>"images/places/ukd5.jpg", "alt"=>"","style"=>"height:70px"]) ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <section class="hotel-content detail-cn" id="hotel-content">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="hight-light">
                                    <h2>Must Visit Places</h2>
                                    <div class="row">
                                            <br>
                                            <ul >
                                            <li style="font-size: 21px;">Nainital</li>
                                                <ul>
                                                    <li style="font-size: 18px;">Naini lake</li>
                                                    <li style="font-size: 18px;">Eco Cave Gardens</li>
                                                    <li style="font-size: 18px;">Naina Peak</li>
                                                    <li style="font-size: 18px;">Thandi Sadak</li>
                                                    
                                                </ul>
                                                <br>
                                            <li style="font-size: 21px;">Mussoorie</li>
                                                <ul>
                                                    <li style="font-size: 18px;">   Kempty  
                                                        Falls
                                                    </li>
                                                    <li style="font-size: 18px;">   Benog Hill
                                                   </li> 
                                                    <li style="font-size: 18px;">    Gun Hill
                                                    </li>
                                                     <li style="font-size: 18px;">   Christ Church
                                                     </li>
                                                     

                                                </ul>
                                                <br>

                                            <li style="font-size: 21px;">Munsiyari</li>
                                                <ul>
                                                  <li style="font-size: 18px;">Birthi Falls</li>  
                                                  <li style="font-size: 18px;">
                                                       Kalamuni Top
                                                  </li>
                                                 <li style="font-size: 18px;">
                                                 Thamri Kund
                                                 </li>
                                                 <li style="font-size: 18px;">
                                                 Maheshwari Kund
                                                 </li>
                                                 

                                                </ul>
                                                <br>

                                            <li style="font-size: 21px;">Kausani</li>
                                                <ul>
                                                    <li style="font-size: 18px;">   Rudradhari Falls and Caves
                                                   </li> 
                                                    <li style="font-size: 18px;">    Lakshmi Ashram
                                                    </li>
                                                    <li style="font-size: 18px;">    Anasakti Ashram
                                                   </li> 
                                                    <li style="font-size: 18px;">  Sumitranandan Pant Gallery
                                                    </li>
                                                   
                                                </ul>
                                                <br>

                                            <li style="font-size: 21px;">Almora</li>
                                                
                                                    <ul>
                                                        <li style="font-size: 18px;">               Bright      End Corner
                                                        </li>
                                                        <li style="font-size: 18px;">Binsar Wildlife Sanctuary
                                                        </li>
                                                        <li style="font-size: 18px;">  Kasar     Devi   Temple
                                                       </li> 
                                                       <li style="font-size: 18px;">
                                                        Katarmal Sun Temple
                                                       </li> 
                                                       
                                                    </ul>
                                                    <br>
                                            <li style="font-size: 21px;">Lansdowne</li>
                                                <ul>
                                                    <li style="font-size: 18px;">
                                                        Darwan Singh Sangrahalaya
                                                    </li>
                                                    <li style="font-size: 18px;">
                                                        St. Mary’s Church
                                                    </li>
                                                    <li style="font-size: 18px;">
                                                        Tiffin Top and Snow View Point
                                                    </li>
                                                    <li style="font-size: 18px;">
                                                        Bhim Pakora
                                                    </li>
                                                   
                                                </ul>
                                            </ul>
                                      
                                    </div>
                                </div>
                            </div>                    
                        
                           <div class="col-lg-9 hl-customer-like">
                                <h2 style="margin-top: 10px;">About the place</h2>
                                    
                                <p style="line-height: 1.8;font-size:16px;font-family:bariol, 'Helvetica Neue',Helvetica,Arial,sans-serif">
                                    <br>
                                    	Uttarakhand became the 27th state of the Republic of India on 9th November 2000. The State came out of Uttar Pradesh. Demand for Uttarakhand was first made in 1930 at the Karachi session of INC. It occupies 17.3% of India's total land area with 51,125 sq kms. Uttarakhand is a place with great diversity of the region where snow-clad mountains, green hills, fertile valleys, flowing rivers and thriving lakes add to the natural beauty. Uttarakhand is also known as the Abode of the gods, there are several highly venerated pilgrimage places. The tourists must visit Kedarnath, Badrinath, Hemkund Sahib, Gangotri, Yamunotri, Jageshwar, Bageshwar, Rishikesh and Haridwar for their religious importance on Uttarakhand Travel. Each hilltop or bent is known to have a temple, big or small, which are considered very sacred by the locals. Its a region with several natural lakes, which are the center of attraction of the town and good for sporting activities. The popular hill stations of Uttarakhand are Almora, Bhimtal, Munsiyari, Mussorie, Nainital, Pithoragarh, Ranikhet, Chopta, Valley of Flowers, Joshimath and Lansdowne. For unlimited serenity and tranquility in pleasant pollution free environs, hill station on Uttarakhand Travel are ideal for vacations. Uttarakhand is also ideal for several adventure sports activities because of its geographical attributes. The tourist here takes the maximum pleasure out of adventure sports like trekking, ice-skiing, white water rafting, sailing, boating, kayaking, canoeing, yachting, water-skiing and parasailing. To climb the big mountain stretch or to pass the dense jungles of the hills is in itself very exciting. The huge water-filled rivers and deep lakes are perfect for water sports.
                                    	</p>

                                        
                                            <div class="row">
                                              
                                                <div class="col-lg-12">
                                                        <div class="hotel-detail-map">
                                                            <h3>Area Map</h3>
                                                        <div id="hotel-detail-map" data-latlng="30.0668, 79.0193"></div>
                                                        <p class="about-area-location"><i class="fa fa-map-marker"></i>Uttarakhand</p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        

                                        
                                
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