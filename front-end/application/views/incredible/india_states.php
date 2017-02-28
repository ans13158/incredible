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