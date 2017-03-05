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
        <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li ><?= anchor( base_url('incredible_ukd'),'Home') ?></li>
                                        
                                    <li ><?= anchor( base_url('incredible_ukd/about'),'About Us') ?></li>

                                    <li ><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
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
                                    <li class="current-menu-parent"><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
                                            <li class="current-menu-parent"><?= anchor( base_url('incredible_ukd/about_india'),'Destinations India') ?></li>
                                           
                                        </ul>
                                    </li>
                                    
                                    <li ><?= anchor( base_url('incredible_ukd'),'Tour Packages')?>
                                        <ul class="sub-menu"  >
                                            <li style=""><?= anchor( base_url('incredible_ukd'),'Pilgrims Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd'),'Wildlife Tour Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd'),'Excursion Tour Packages')?></li>
                                            <li ><?= anchor( base_url('incredible_ukd'),'Honeymoon Packages')?></li>
                                            <li style=""><?= anchor('','Trekking Packages')?></li>
                                            <li style=""><?= anchor( base_url('incredible_ukd'),'Motorbike Packages')?></li>
                                            <li style=""><?= anchor('incredible_ukd','Home Stay')?></li>
                                            
                                        </ul>
                                    </li>
                                    <li><?= anchor('incredible_ukd','Contact Us')?></li>
                                    
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
        <div class="main">
            <div class="container">
                <div class="main-cn  bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <section class="breakcrumb-sc">
                                <ul class="breadcrumb arrow">
                                    <li><a href="<?= base_url('incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                                    
                                    <li><a href="#" title="">States of India</a></li>
                                    
                                </ul>
                            </section>

                            <section class="hotel-list">
                                <div class="sort-view clearfix">
                                   <label style="font-size: 20px;">States of India</label>
                                </div>
                            </section>    

                            <section class="hotel-list">
                                
                                <div class="hotel-grid-cn clearfix">
                                <?php foreach($states as $state) :  ?>
                                    <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
                                        <div class="hotel-item">
                                            
                                                <figure class="hotel-img">
                                                <a href="state_details/<?= $state['stateId']?>" title="">
                                                    <?= img( ["src"=>"images/deal/img-1.jpg", 'alt'=>""] ) ?>
                                                </a>    
                                                    
                                                </figure>
                                                <div class="hotel-text">
                                                   <div class="hotel-name">
                                                        <a href="state_details/<?= $state['stateId']?>" title="">
                                                            <?= $state['name'] ?>
                                                       
                                                        </a>
                                                    </div>

                                                   <div class="hotel-places" style="margin-top: -30px;font-family: roboto;font-size: 15px">
                                                        <a href="state_details/<?= $state['stateId']?>" title="" class="display-destination">
                                                               <?php 
                                                                $content = "";
                                                                for($i=0;$i<150;$i++) { 
                                                                    $content = $content . $state['details'][$i];
                                                                }
                                                             ?>
                                                                  <?= $content ?>
                                                                 <p> &nbsp&nbsp&nbsp&nbsp
                                                                &nbsp&nbsp&nbsp
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