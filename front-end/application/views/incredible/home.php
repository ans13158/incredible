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

                                    <li><?= anchor(base_url("incredible_ukd/role"),'Our Role')?> </li> 

                                    <li><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
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
            <div class="container">
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="">
                    
                    </a>
                </div>

                    
                    <blockquote class="quote text-center" style="color:white;font-size: 36px;font-weight: 400;font-family: 'Courgette', cursive;"><i>We Create your Holidays the Way you Want Them.</i></blockquote>
                    
                                   
                        <br><br>
                    <div class=""></div>
                    <div class="contact-details col-md-offset-8 col-lg-offset-8 col-md-9 col-lg-9">
                                 <h3 class="text-center">Contact Us:</h3>                     
                        <table class="table-condensed table  col-md-12 col-lg-12 text-center">
                            <tr>
                                <td class="text-center" style="color:black"><h4 style="color: #111"><i class="fa fa-phone" style="margin-right:10px"></i>Call Us : +91-8191937317</h4></td>
                            </tr>
                                    
                            <tr>

                                <td class="text-center" style="color:black"><h4 style="color: #111"><i class="fa fa-envelope" style="margin-right:10px"></i>E-mail : contact@incredibleuttarakhand.co.in</h4></td>
                            </tr>    
                        </table>

                    </div>
                    </div>

    <!--<div class="banner-cn">
        <br><br>
            <h2 class="text-center" style="color: white">Tour Packages</h2>
                    <ul class="tabs-cat text-center row" style="margin-top: -0.1%">
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-flight" title=""><span>Pilrimage Tour Package</span> <img src="" alt="Pilrimage Tour Package" style="color:white;text-decoration: none"> </a></li>
                        <li class="cate-item active col-xs-2"><a data-toggle="tab" href="#form-hotel" title=""><span>Wild Life Tour Package</span></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-car" title=""><span>Excursion Tour Package</span></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-package" title=""><span>Honeymoon Tour Package</span></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-cruise" title=""><span>Trekking Tour Package</span></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-tour" title=""><span>Home Stay Tour Package</span></a></li>
                    </ul>
                    
                </div>
            </div>-->
        </section>                        
                

        <section class="sales">
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left" id="tourPackage">
                        <h2>Our Tour Packages</span></h2></div>
                    </div>
            </div>
            <div class="container">
                <div class="sales-cn">
                    <div class="row">
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/pilgrimage') ?>" title=""><img src="<?=  base_url('images/package/pilgrim3.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/pilgrimage') ?>" title="">Pilgrim Tour Packages</a></div>

                                        <div class="home-sales-places">Experience Devbhoomi, the Land of Gods </div>
                                    </div>
                                    
                                    <div class="price-box">Visit the divine pilgrim spots of Uttarakhand</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/wildlife') ?>" title=""><img src="<?=  base_url('images/package/wildlife3.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/wildlife') ?>" title="">Wild Life Tour Packages</a></div>
                                        <div class="home-sales-places">Enjoy the Floura & Founa of our beautiful state </div>
                                    </div>
                                    
                                    <div class="price-box">Visit some of the world famous reserved parks,zoos and santuraies</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/excursion') ?>" title=""><img src="<?=  base_url('images/package/excursion.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/excursion') ?>" title="">Excursion Tour Packages</a></div>
                                        <div class="home-sales-places">Relax and get rid of all your tensions</div>
                                    </div>
                                    
                                    <div class="price-box">Relieve yourself of all worries in  breathtaking beauty of Uttarakhand.   </div>
                                </div>
                            </div>
                        </div>
                               
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/honeymoon') ?>" title=""><img src="<?=  base_url('images/package/honeymoon.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/honeymoon') ?>" title="">Honeymoon Tour Packages</a></div>
                                        <div class="home-sales-places">Celebrate your golden time in exotic locations</div>
                                    </div>
                                    
                                    <div class="price-box">Celebrate your marriage & gift your spouse with the best trip of their live</div>
                                </div>
                            </div>
                        </div>
                                </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/trekking') ?>" title=""><img src="<?=  base_url('images/package/trekking.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/trekking') ?>" title="">Trekking Packages</a></div>
                                        <div class="home-sales-places">Trek your way up to some of the best sceneries </div>
                                    </div>
                                   
                                    <div class="price-box">Experience the divine fabbergasting beauty of this land.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/motorbike') ?>" title=""><img src="<?=  base_url('images/package/motorbike1.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/motorbike') ?>" title="">Motorbike Tour Packages</a></div>
                                        <div class="home-sales-places">Planning a road trip?</div>
                                    </div>
                                    
                                    <div class="price-box">Come to Uttarakhand and explore the most scenic road.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?= base_url('incredible_ukd/home_stay') ?>" title=""><img src="<?=  base_url('images/package/home3.jpg') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?= base_url('incredible_ukd/home_stay') ?>" title="">Home Stay</a></div>
                                        <div class="home-sales-places">Trek your way up to some of the best sceneries</div>
                                    </div>
                                   
                                    <div class="price-box">Come to Uttarakhand and explore the most scenic road.</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </section>

        <section class="sales" style="margin-top: 1.5%">
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>
                            <a style="color:#111;text-decoration: none" href="<?=base_url('incredible_ukd/ukdDestinations') ?>">Uttarakhand's Travel Destinations</a>
                        </span></h2></div>
                        <a href="<?=base_url('incredible_ukd/ukdDestinations') ?>" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager float-right"> <h4>View All</h4> </a></div>
                    </div>
            </div>
            <div class="container">
                <div class="sales-cn">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?=base_url('incredible_ukd/ukd_destination_detail/1') ?>" title=""><img src="<?=  base_url('images/destinations/nainital2.jpg') ?>" alt="" style="height:250px;border-radius: 0%"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?=base_url('incredible_ukd/ukd_destination_detail/1') ?>" title="">Nainital</a></div>
                                        <div class="home-sales-places">Nainital is a popular hill station in the Indian state of Uttarakhand and headquarters of Nainital district in the foothills of the outer Himalayas.Famous all over for the beautiful Naini Lake.</div>
                                    </div>
                                        
                                    <div class="price-box">
                                    P. Barron, a sugar trader from Shahjahanpur, in his memoir wrote: "It is by far the best site I have witnessed in the course of a 1,500 miles (2,400 km) trek in the Himalayas.It is the msot popular tourist spot of Uttarakhand."
                                     </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?=base_url('incredible_ukd/ukd_destination_detail/2') ?>" title=""><img src="<?=  base_url('images/destinations/mussoorie2.jpg') ?>" alt="" style="height:250px;border-radius: 0%"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?=base_url('incredible_ukd/ukd_destination_detail/2') ?>" title="">Mussoorie</a></div>
                                        <div class="home-sales-places">Mussoorie is a hill station in Uttarakhand. Snow ranges to the north-east, and glittering views of the Doon Valley in the south, the town was once said to present a 'fairyland' atmosphere to tourists.</div>
                                    </div>
                                        
                                    <div class="price-box">
                                     It has a nature walk known as "Camel's Back Road". This road takes its name from a rocky outcrop in the shape of a camel's hump. Along the road, a cemetery is located about mid-way on the loop. There is also called "Gun Hill" . 
                                     </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?=base_url('incredible_ukd/ukd_destination_detail/3') ?>" title=""><img src="<?=  base_url('images/destinations/kausani2.JPG') ?>" alt="" style="height:250px"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="incredible_ukd/ukd_destination_detail/3" title="">Kausani</a></div>
                                        <div class="home-sales-places">Kausani is a hill station and Village situated in Bageshwar district in the state of Uttarakhand, India. It is famous for its scenic splendour and its spectacular 300 km-wide panoramic view of Himalayan peaks like Trisul, Nanda Devi.</div>
                                    </div>
                                    
                                    <div class="price-box">Mahatma Gandhi called this place the 'Switzerland of India',due to similarity in landscapes.Gandhiji's disciple, Sarla Behn (Kaitherine Heileman) established the Lakshmi ashram in 1946 Anashakti Ashram here. Lakshmi ashram is located in a solitary area. </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?=base_url('incredible_ukd/ukd_destination_detail/4') ?>" title=""><img src="<?=  base_url('images/destinations/munsiari2.jpg') ?>" alt="" style="height:250px;border-radius: 0%"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?=base_url('incredible_ukd/ukd_destination_detail/4') ?>" title="">Munsiyari</a></div>
                                        <div class="home-sales-places">Situated in the Pithoragarh District in the hill-state of Uttarakhand, is a starting point of various treks into the interior of the range.Its name refers to a 'place with snow'. Situated on the banks of Goriganga river.</div>
                                    </div>
                                   
                                    <div class="price-box">The town is surrounded by snow-capped peaks, with a key attraction being the trekking route to Khalia Top. Visiting Munsiyari is totally a different experiance , In springs lower reaches forest are abalze with rhododendrons forests.</div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?=base_url('incredible_ukd/ukd_destination_detail/5') ?>" title=""><img src="<?=  base_url('images/destinations/almora2.jpg') ?>" alt="" style="height:250px;;border-radius: 0%"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?=base_url('incredible_ukd/ukd_destination_detail/5') ?>" title="">Almora</a></div>

                                        <div class="home-sales-places">Located on a ridge at the southern edge of the Kumaon Hills of the Himalaya range,Almora was founded in 1568, .The people bringing kilmora were called Kilmori and later "Almori" and thus the name "Almora" </div>
                                    </div>
                                     
                                    <div class="price-box">Almora is well connected by motorable roads with major destinations of Uttarakhand state and northern India. Taxis and Private Buses, mostly run by K.M.O.U, connect Almora to other major destinations of Kumaon region.</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="<?=base_url('incredible_ukd/ukd_destination_detail/6') ?>" title=""><img src="<?=  base_url('images/destinations/valley1.jpg') ?>" alt="" style="height:250px;border-radius: 0%"></a>
                                    
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places">
                                        <div class="home-sales-name"><a href="<?=base_url('incredible_ukd/ukd_destination_detail/6') ?>" title="">Valley of Flowers</a></div>
                                        <div class="home-sales-places">Valley of Flowers National Park is an Indian national park, located in West Himalaya, in the state of Uttarakhand and is known for its meadows of endemic alpine flowers and the variety of flora. </div>
                                    </div>
                                    
                                    <div class="price-box">Birds found in the park include Himalayan monal pheasant and other high altitude birds. The gentle landscape of the Valley of Flowers National Park complements the rugged mountain wilderness of Nanda Devi National Park to the east.</div>
                                </div>
                            </div>
                        </div>
                                
                        

                    </div>
                </div>
            </div>    
        </section>


        <section class="destinations">
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>
                         <a style="color:#111;text-decoration: none" href="<?=base_url('incredible_ukd/about_india') ?>">
                            About Indian States
                        </a>
                        </h2></div><a href="<?=base_url('incredible_ukd/about_india') ?>" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager  float-right"> <h4>View All</h4> </a></div>
            </div>
            <div class="destinations-cn">
                <div class="bg-parallax bg-2"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="intro-filter">
                                <div class="intro">
                                    <p><small>Discover</small>
                                        <br><span>The 29</span> States of India</p>
                                    
                                </div>
                                <ul class="filter">
                                    <li class="active"><a data-toggle="tab" href="#"><i class="fa fa-map-marker"></i> Recommendations for you</a></li>
                                    <li><a  href="<?=base_url('incredible_ukd/state_details/10') ?>"><i class="fa fa-map-marker"></i> Himachal Pradesh</a></li>
                                    <li><a href="<?=base_url('incredible_ukd/state_details/6') ?>"><i class="fa fa-map-marker"></i> Chandigarh</a></li>
                                    <li><a  href="<?=base_url('incredible_ukd/state_details/2') ?>"><i class="fa fa-map-marker"></i> Meghalaya</a></li>
                                    <li><a  href="<?=base_url('incredible_ukd/state_details/5') ?>"><i class="fa fa-map-marker"></i> Assam </a></li>
                                    <li><a  href="<?=base_url('incredible_ukd/state_details/11') ?>"><i class="fa fa-map-marker"></i> Punjab</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content destinations-grid">
                                <div id="destinations-1" class="clearfix tab-pane fade active in">

                                <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/1') ?>" title="">Goa</a></div><span class="properties-nb">World famous for it's beautiful beaches </span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/1') ?>" title=""><img src="<?= base_url('images/destinations/goa.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/2') ?>" title="">Andaman & Nicobar Islands</a></div><span class="properties-nb">Known for underwater diving sites</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/2') ?>" title=""><img src="<?= base_url('images/destinations/andaman.jpg') ?>" alt="" style="height: 190px" ></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/3') ?>" title="">Daman & Diu</a></div><span class="properties-nb">Popular for monuments displaying Portugal history.</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/3') ?>" title=""><img src="<?= base_url('images/destinations/daman.jpeg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/4') ?>" title="">Jammu & Kashmir</a></div><span class="properties-nb">Also known as heaven on Earth.</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/4') ?>" title=""><img src="<?= base_url('images/destinations/j&k.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/5') ?>" title="">Kerala</a></div><span class="properties-nb">Known for it's rich cultural heritage</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/5') ?>" title=""><img src="<?= base_url('images/destinations/kerala.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/6') ?>" title="">Rajasthan</a></div><span class="properties-nb">Famous for its cultural diversity.</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/6') ?>" title=""><img src="<?= base_url('images/destinations/rajasthan.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="magazine">
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2><a href="<?= base_url('incredible_ukd/deals') ?>" style="color:#111;text-decoration: none" > Hot Deals </a></h2></div><a href="<?= base_url('incredible_ukd/deals') ?>" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager float-right"> <h4>View All</h4> </a></div>
            </div>
            <div class="container"  style="height: auto">
                <div class="sales-cn">
                    <div class="row">
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/nainital2.jpg') ?>" alt="" style="height: 250px;width: 100%"></a>
                                    <figcaption>Save <span>30</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Nainital Trip for 2</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Nainital</a>, <a href="#" title="">Uttarakhand</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"> <span class="price special-price"> <small>Save Upto </small>30% <small>On This Trip</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC5555UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/mussoorie.jpg') ?>" alt="" style="height: 250px;width: 100%"></a>
                                    <figcaption>Save <span>20</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Mussoorie MotorBike Trip</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Mussoorie</a>, <a href="#" title="">Uttarakhand</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"> <span class="price special-price"> <small>Save Upto </small>20% <small>On This Trip</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC1005UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/hemkund.jpg') ?>" alt="" style="height: 250px;width: 100%" ></a>
                                    <figcaption>Save <span>25</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Hemkund Pilgrimage Trip </a></div>
                                         <div class="home-sales-places"><a href="#" title="">Pilgrims Tour Package</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"> <span class="price special-price"> <small>Save Upto </small>25% <small>On This Trip</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC1255UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/tour/home_stay.jpg') ?>" alt="" style="height: 250px;width: 100%"></a>
                                    <figcaption>Save <span>35</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Home Stay Tour Discounts</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Home Stay Tour Package</a></div>
                                    </div>
                                    
                                    

                                    <div class="price-box"> <span class="price special-price"> <small>Save Upto </small>35% <small>On This Trip</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC1211UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/kausani2.jpg') ?>" alt="" style="height: 250px;width: 100%"></a>
                                    <figcaption>Save <span>40</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Kausani Trip at Best Prices</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Kausani</a>, <a href="#" title="">Uttarakhand</a></div>
                                    </div>
                                    
                                    
                                    <div class="price-box"> <span class="price special-price"> <small>Save Upto </small>40% <small>On This Trip</small></span></div>
                                    
                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC9149UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-md-4">
                            <div class="sales-item">
                                <figure class="home-sales-img">
                                    <a href="#" title=""><img src="<?= base_url('images/places/nainital3.jpg') ?>" alt="" style="height: 250px;width: 100%"></a>
                                    <figcaption>Save <span>20</span>%</figcaption>
                                </figure>
                                <div class="home-sales-text">
                                    <div class="home-sales-name-places" style="">
                                        <div class="home-sales-name"><a href="#" title="">Nainital Honeymoon Package</a></div>
                                         <div class="home-sales-places"><a href="#" title="">Honeymoon Tour Package</a>
                                    </div>
                                    </div>
                                    
                                    

                                    <div class="price-box"> <span class="price special-price"> <small>Save Upto </small>20% <small>On This Trip</small></span></div>

                                    <div class="price-box">Use Reference Code: <spam> <h3 style="display: inline;">INC13158UKD</h3> </span></div>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </section>
        <section class="confidence-subscribe">
            <div class="bg-parallax bg-1"></div>
            <div class="container">
                <div class="row cs-sb-cn">
                    <div class="col-md-6 ">
                        <div class="confidence">
                            <h3>Book with confidence</h3>
                            <ul>
                                <li><span class="label-nb">01</span>
                                    <h5>Tour charges</h5>
                                    <p>The estimation of tour cost will be done only after getting the requirements of party.</p>
                                </li>
                                <li><span class="label-nb">02</span>
                                    <h5>Cancellation Procedure</h5>
                                    <p>All notice of cancellation must be sent to our almora office in writing. Verbal cancellations will not be entertained.</p>
                                </li>
                                <li><span class="label-nb">03</span>
                                    <h5>Instant confirmation</h5>
                                    <p>Instant booking confirmation whether booking online or via the telephone</p>
                                </li>
                                <li><span class="label-nb">04</span>
                                    <h5>Flexible booking</h5>
                                    <p>You can book up to a whole year in advance until the moment of your stay</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="subscribe">
                            <h3 style="" class="text-center">Testimonials</h3>
                                
                            
                            <!--=========carousel ========-->
                                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <!--==== Indicators ====-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel1-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel1-example-generic" data-slide-to="1"></li>
                                        <li data-target="#carousel1-example-generic" data-slide-to="2" ></li>
                                        <li data-target="#carousel1-example-generic" data-slide-to="3" ></li>
                                        <li data-target="#carousel1-example-generic" data-slide-to="4" ></li>
                                    </ol>
                                <!--==== Indicators ====-->

                                <!--==== Wrapper for slides ====-->
                                        <div class="carousel-inner" style="width: 100%">
                                            <div class="item active">
                                                <a href="#" ><?= img( ["src" => 'images/places/almora.jpg',"style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Great Help</h1>
                                                        <p style="color:black"> What ends well is well done. Thanks again for all the help.Looking forward for further engagements. <br>
                                                        - Mr. Sachin Mishra </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => 'images/places/kausani2.jpg',"style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">

                                                    <div class="carousel-caption">  
                                                    <br>
                                                        <h1>Ever Lasting Trip</h1>
                                                        <p style="color:black"> It was a great pleasure for us to thank a many times to Make My Trip for their friendly behave and so many help and guidance.<br>
                                                        - Mr. Mahesh Chandra </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" =>'images/places/munsiyari.jpg',"style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Great Efforts</h1>
                                                        <p style="color:black"> Many Thanks for your effort with me. Be sure for my coming trips it will be with you as i was very pleased with your professionalization.<br>
                                                        - Mr. Rahul D. Chauhan </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => 'images/places/mussoorie.jpg',"style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Amazing Vacations</h1>
                                                        <p style="color:black"> We are back from one of the most amazing vacations we've been on lately! It was indeed a great experience.<br>
                                                        - MOUSUMI GHOSH</p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => 'images/places/lansdown.jpg',"style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Satisfying Services</h1>
                                                        <p style="color:black"> I liked the website options and fully satisfied with the overall service.<br>
                                                        - JATIN JAIN </p>
                                                    </div>
                                                </div>           
                                            </div>

                                        </div>
                                <!--==== Wrapper for slides ====-->

                                <!--===Controls ===-->
                                    <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>

                                     <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                <!--===Controls ===-->
                                </div>
                            

                              
                              

                            <!--======== carousel =========-->
                            <div class="row"  col-xs-12 col-sm-12 col-lg-12 col-md-12>
                            <div class="follow-us" style="margin-left: 10%;">
                                <h4 style="margin-left: -15%" class="text-center">Follow us</h4>
                                <div class="follow-group text-center" style="margin-left: 0%"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a>   <a href="#" title=""><i class="fa fa-instagram"></i></a> <a href="#" title=""><i class="fa fa-google-plus"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
        </section>

<?php
    include "common/footer.php";
?>