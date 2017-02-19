<?php 
    include "common/header.php";
    include "common/navbar.php";
?>
        <section class="sub-banner">
            <div class="bg-parallax bg-1"></div>
            
        </section>
        <div class="main main-dt">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?= base_url('index.php/incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li><a href="<?= base_url('index.php/incredible_ukd/about_india') ?>">States of India</a></li>
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