<?php include "common/header.php";
      include "common/navbar.php";  
 ?>

<style type="text/css">
    .display-destination   {
        text-decoration : none;
        color:#999;
        
    }

    .display-destination:hover   {
        text-decoration : none;
        color:#999;
    }
</style>
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
                                              
                                    <li class="current-menu-parent"><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li class="current-menu-parent"><?= anchor( base_url('index.php/incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
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
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="" style="height: 100px;">
                    <h3 style="color:white;text-decoration: none">Tour Planners</h3>
                    </a>
                </div>
        </section>
        <div class="main">
            <div class="container">
                <div class="main-cn  bg-white">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <section class="breakcrumb-sc">
                                <ul class="breadcrumb arrow">
                                    <li><a href="<?= base_url('index.php/incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                                    
                                    <li><a href="#" title="">Uttarakhand Destinations</a></li>
                                    
                                </ul>
                            </section>

                            <section class="hotel-list">
                                <div class="sort-view clearfix">
                                   <label style="font-size: 20px;">Travel Destinations in Uttarakhand</label>
                                </div>
                            </section>    

                            <section class="hotel-list">
                                
                                <div class="hotel-grid-cn clearfix">
                                <?php foreach($destinations as $destination) :  ?>
                                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                        <div class="hotel-item">
                                            <?php
                                                $imagePath = "";
                                                $imageName = "";
                                                $imagePath=    $destination['imagePath'];
                                                $imageName = $destination['imageName'];
                                                $image = $imagePath."/".$imageName;

                                            ?>
                                                <figure class="hotel-img">
                                                    <a href="ukd_destination_detail/<?= $destination['destinationId']?>" title="" >
                                                        <?=
                                                          img( ["src"=>$image, 'alt'=>"","style"=>"height:220px;width:300px;"] ) ?>
                                                    </a>    
                                                    
                                                </figure>
                                                <div class="hotel-text">
                                                   <div class="hotel-name">
                                                        <a href="ukd_destination_detail/<?= $destination['destinationId']?>" title="" >
                                                            <?= $destination['name'] ?>
                                                       
                                                        </a>
                                                        <br><br><br>
                                                    </div>

                                                   <div class="hotel-places" style="margin-top: -30px;font-family: roboto;font-size: 15px">
                                                        <a href="ukd_destination_detail/<?= $destination['destinationId']?>" title="" class="display-destination">
                                                               <?php 
                                                                $content = "";
                                                                for($i=0;$i<100;$i++) { 
                                                                    $content = $content . $destination['details'][$i];
                                                                }
                                                             ?>
                                                                  <?= $content ?>
                                                                 <p> 
                                                                 &nbsp;
                                                                 &nbsp;
                                                                 &nbsp;
                                                                 &nbsp;
                                                                &nbsp;&nbsp;
                                                                &nbsp;
                                                                .....Read More</p>
                                                            </a>     

                                                   </div>
                                                    
                                                   
                                                </div>
                                              </a>  
                                        </div>
                                    </div>
                                <?php endforeach ?> 
                                </div>
                                
                            </section>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
<?php include "common/footer.php";?>