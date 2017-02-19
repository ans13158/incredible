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
                                    <li><a href="incredible_ukd"><i class="fa fa-home"></i></a></li>
                                    <li><a  title="">Travel Destination</a></li>
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
                                <?php foreach($destinations as $destination) :  ?>
                                    <div class="col-xs-6 col-sm-3 col-md-6 col-lg-3">
                                        <div class="hotel-item">
                                            
                                                <figure class="hotel-img">
                                                    <?= img( ["src"=>"images/deal/img-1.jpg", 'alt'=>""] ) ?>
                                                    
                                                </figure>
                                                <div class="hotel-text">
                                                   <div class="hotel-name">
                                                        <a href="hotel-detail.php?destinationId=<?= $destination['destinationId']?>" title="">
                                                            <?= $destination['name'] ?>
                                                       
                                                        </a>
                                                    </div>

                                                   <div class="hotel-places" style="margin-top: -20px;">
                                                        <a href="hotel-detail.php?destinationId=<?= $destination['destinationId']?>" title="" class="display-destination">
                                                               <?php 
                                                                $content = "";
                                                                for($i=0;$i<200;$i++) { 
                                                                    $content = $content . $destination['details'][$i];
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