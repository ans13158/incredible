<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>
</body>
<style>
    .contact-details  {
        /*float: right;*/
        background-color: rgba(255,255,255,.85);
        font-size:18px;
        color:black;
        padding: 0px;
        width:40%;
        margin-bottom: -10%;
        
        margin-top: 0px;
        opacity: 0.8;
        filter: alpha(opacity=95);
    }

   blockquote.quote:before {
        content: '“';
        margin-left: 13%;
        color : white;
        font-size: 106px;
        margin-top: -2%;
    }

    @media (max-width: 480px)  {
        blockquote.quote:before {
        content: '“';
        margin-left: 7%;
        color : white;
        font-size: 106px;
        margin-top: -4%;
    }

    }


    @media (max-width: 480px)  {
        .contact-details  {
        /*float: right;*/
        background-color: rgba(255,255,255,.85);
        font-size:18px;
        color:black;
        padding: 0px;
        width:100%;
        margin-bottom: -10.3%;
        
        margin-top: 0px;
        /*opacity: 0.95;
        filter: alpha(opacity=95)*/
    }
}


</style>

<body>

    <div class="bars" id="bars"></div>
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
            <div class="container">
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="">
                    
                    </a>
                </div>

                   
        </section>  

        <div class="main">
            <div class="container">
                <div class="main-cn about-page bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><?= anchor('incredible_ukd','<i class="fa fa-home"></i>') ?></li>
                            <li>Deals &amp; Discounts </li>
                        </ul>
                    </section>
                </div>
            </div>

        <div class="container"  style="height: auto">
                <div class="sales-cn">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/nainital2.jpg') ?>" alt="" style="height: 300px;width: 100%"></a>
                                    <figcaption>Save <span>30</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Nainital Trip for 2</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Nainital</a>, <a href="#" title="">Uttarakhand</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"><span class="price old-price">From <del> &#8377;3000</del></span> <span class="price special-price"> &#8377;2000<small>/night</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC5555UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/mussoorie.jpg') ?>" alt="" style="height: 300px;width: 100%"></a>
                                    <figcaption>Save <span>20</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Mussoorie MotorBike Trip</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Mussoorie</a>, <a href="#" title="">Uttarakhand</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"><span class="price old-price">From <del> &#8377;3200</del></span> <span class="price special-price"> &#8377;1750<small>/night</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC1005UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/hemkund.jpg') ?>" alt="" style="height: 300px;width: 100%" ></a>
                                    <figcaption>Save <span>25</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Hemkund Pilgrimage Trip </a></div>
                                         <div class="home-sales-places"><a href="#" title="">Pilgrims Tour Package</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"><span class="price old-price">From <del> &#8377;2390</del></span> <span class="price special-price"> &#8377;1500<small>/night</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC1255UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/tour/home_stay.jpg') ?>" alt="" style="height: 300px;width: 100%"></a>
                                    <figcaption>Save <span>30</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Home Stay Tour Discounts</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Home Stay Tour Package</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"><span class="price old-price">From <del> &#8377;2390</del></span> <span class="price special-price"> &#8377;2000<small>/night</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC1211UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/nainital2.jpg') ?>" alt="" style="height: 300px;width: 100%"></a>
                                    <figcaption>Save <span>40</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Kausani Trip at Best Prices</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Kausani</a>, <a href="#" title="">Uttarakhand</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"><span class="price old-price">From <del> &#8377;2390</del></span> <span class="price special-price"> &#8377;1599<small>/night</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC9149UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/nainital3.jpg') ?>" alt="" style="height: 300px;width: 100%"></a>
                                    <figcaption>Save <span>30</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Nainital Honeymoon Package</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Honeymoon Tour Package</a>
                                    </div>
                                    </div>
                                    
                                    

                                    <div class="price-box"><span class="price old-price">From <del> &#8377;3000</del></span> <span class="price special-price"> &#8377;1999<small>/night</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC13158UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>                      
        
        </div>
       </section>
     </body>
     </div>
<?php include "common/footer.php"; ?>            

