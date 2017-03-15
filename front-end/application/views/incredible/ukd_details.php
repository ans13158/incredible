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
                                    <li class="current-menu-parent"><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
                                            <li ><?= anchor( base_url('incredible_ukd/about_india'),'Destinations India') ?></li>
                                           
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
                            <li><a href="<?= base_url('incredible_ukd/ukdDestinations') ?>" title="">Uttarakhand</a></li>
                            <li><a href="#" title=""><?= $detail[0]['name'] ?> </a></li>
                            
                        </ul>
                        <div class="support float-right"><small>Got a question?Contact Us:  </small> <b>+91-8191937317</b> OR <b>contact@incredibleuttarakhand.co.in</b></div>
                    </section>
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1><?= $detail[0]["name"] ?></h1>
                                    <div class="start-address"><address class="address">Uttarakhand</address></div>
                                </div>

                                <div class="col-sm-5 text-right">
                                    <p class="price-book"><a href="<?= base_url('incredible_ukd/bookMyTrip') ?>" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book My Tour</a></p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="detail-slider" style="height:500px">
                        <div class="slide-room-lg" >
                            <div id="slide-room-lg">
                                         <?php
                                foreach($images as $image)  :
                                    $imagePath = $image['imagePath'];
                                    $imageName = $image['imageName'];
                                    $image = $imagePath . "/" . $imageName;
                            
                    ?>
                                <?= img( ["src"=>$image , "alt"=>"","style"=>"height:500px"]) ?> <?php endforeach ?>    
                            </div>
                        </div>
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div id="slide-room-sm">
                                                    <?php
                                            foreach($images as $image)  :
                                                $imagePath = $image['imagePath'];
                                                $imageName = $image['imageName'];
                                                $image = $imagePath . "/" . $imageName;
                                        
                                                ?>
                               
                                        <?= img([ "src"=>$image, "alt"=>"","style"=>"height:70px"]) ?>
                                        <?php endforeach ?>
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
                                            
                                                <ul>
                                                    <li style="font-size: 21px;">   <?= $detail[0]["visit1"] ?> 
                                                    </li>
                                                        <br>
                                                    <li style="font-size: 21px;">   <?= $detail[0]["visit2"] ?> 
                                                    </li>
                                                        <br>
                                                    <li style="font-size: 21px;">   <?= $detail[0]["visit3"] ?> 
                                                    </li>
                                                        <br>
                                                    <li style="font-size: 21px;">   <?= $detail[0]["visit4"] ?> 
                                                    </li>
                                                        <br>
                                                    <li style="font-size: 21px;">   <?= $detail[0]["visit5"] ?> 
                                                    </li>   
                                                </ul>
                                      
                                    </div>
                                </div>
                            </div>                    
                        
                           <div class="col-lg-9 hl-customer-like">
                                
                                <h2 style="margin-top: 10px;">About the place</h2>
                                    
                                <p style="line-height: 1.8;font-size:16px;">
                                    <br>
                                    <?= $detail[0]['details'] ?>
                                </p>    
                                
                            </div>
                       
                    </section> 
                    <section class="check-rates detail-cn" id="check-rates">
                      
                    </section>
                
                    <section class="about-area detail-cn" id="about-area">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                    <div class="hotel-detail-map">
                                        <h3>Area Map</h3>
                                    <div id="hotel-detail-map" data-latlng="29.6373, 79.8543"></div>
                                    <p class="about-area-location"><i class="fa fa-map-marker"></i><?= $detail[0]['name']?>, Uttarakhand</p>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <section class="review-detail detail-cn" id="review-detail">
                        <div class="row">
                                <br><br><br>
                                    <div class="col-xs-12 text-right" style="float: left">
                                        <p class="price-book"><a href="<?= base_url('incredible_ukd/bookMyTrip') ?>" title="" class="awe-btn awe-btn-1 awe-btn-lager" style="margin-left: -500px;">Book My Tour</a></p>
                                        <br><br>
                                    </div>

                                <!--</div>
                            </div>
                        </div>-->
                    </section>
                </div>
            </div>
        </div>
<?php include "common/footer.php" ;?>