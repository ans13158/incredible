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
        margin-right: -105px;
        margin-top: -70px;
        /*opacity: 0.95;
        filter: alpha(opacity=95)*/
    }
</style>

<body>

    <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
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
                                            <li><?= anchor( '','Best Hotels & Resorts')?></li>
                                            <li><?= anchor( '','Logistic Modes')?>
                                                <ul class="sub-menu">
                                                    <li><?= anchor( '','Flights')?></li>
                                                    <li><?= anchor( '','Cars')?></li>
                                                    <li><?= anchor( '','Bikes')?></li>
                                                    <li><?= anchor( '','Buses')?></li>
                                                    <li><?= anchor( '','Travelers')?></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>            
                                    <li class="current-menu-parent""><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
                                            <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/about_india'),'Destinations India') ?></li>
                                           
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
        <div class="main main-dt">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?= base_url('incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li><a href="<?= base_url('incredible_ukd/about_india') ?>">States of India</a></li>
                            <li><a href="#" title=""><?= $detail[0]['name'] ?></a></li>

                            
                        </ul>
                        <div class="support float-right"><small>Got a question?</small> 123-123-1234</div>
                    </section>
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1><?= $detail[0]["name"] ?></h1>
                                    
                                </div>

                                <div class="col-sm-5 text-right">
                                    <p class="price-book">Starting From <span>$345</span>/night <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book My Trip</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="detail-slider">
                        <div class="slide-room-lg">
                            <div id="slide-room-lg">
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?> 
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                                <?= img( ["src"=>"images/hotel/img-4.jpg" , "alt"=>""]) ?>
                            </div>
                        </div>
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div id="slide-room-sm">
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                        <?= img([ "src"=>"images/hotel/thumnail/img-1.jpg", "alt"=>""]) ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <section class="hotel-content detail-cn" id="hotel-content">
                        
                           <div class="col-lg-11 hl-customer-like">
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
                                    <p class="about-area-location"><i class="fa fa-map-marker"></i><?= $detail[0]['name']?>, India</p>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                    <section class="review-detail detail-cn" id="review-detail">
                        <div class="row">
                                <br><br><br>
                                    <div class="col-xs-12 text-right" style="float:right;">
                                        <p class="price-book">Packages Starting From <span> $345</span>/night <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager" style="margin-left: 100px;">Book My Trip</a></p>
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