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

                                    <li><?= anchor(base_url("incredible_ukd/role"),'Our Role')?> </li> 

                                    <li><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                        
                                    <li class="current-menu-parent""><?= anchor( '','Destinations')?>
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
                            <li><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                            <li><a href="hotel.html" title="">Hotels</a></li>
                            <li><a href="#" title="">Europe</a></li>
                            <li>Netherlands</li>
                        </ul>
                        <div class="support float-right"><small>Got a question?</small> 123-123-1234</div>
                    </section>
                    <section class="head-detail">
                        <div class="head-dt-cn">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h1>Grand Plaza Serviced Apartments</h1>
                                    <div class="start-address"><span class="star"><i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i> <i class="glyphicon glyphicon-star"></i></span><address class="address">42 Princes Square, London W2 4AD</address></div>
                                </div>
                                <div class="col-sm-5 text-right">
                                    <p class="price-book">From-<span>$345</span>/night <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="detail-slider">
                        <div class="slide-room-lg">
                            <div id="slide-room-lg"><img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""> <img src="images/hotel/img-4.jpg" alt=""></div>
                        </div>
                        <div class="slide-room-sm">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div id="slide-room-sm"><img src="images/hotel/thumnail/img-1.jpg" alt=""> <img src="images/hotel/thumnail/img-2.jpg" alt=""> <img src="images/hotel/thumnail/img-3.jpg" alt=""> <img src="images/hotel/thumnail/img-4.jpg" alt=""> <img src="images/hotel/thumnail/img-5.jpg" alt=""> <img src="images/hotel/thumnail/img-1.jpg" alt=""> <img src="images/hotel/thumnail/img-2.jpg" alt=""> <img src="images/hotel/thumnail/img-3.jpg" alt=""> <img src="images/hotel/thumnail/img-2.jpg" alt=""> <img src="images/hotel/thumnail/img-3.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hotel-content detail-cn" id="hotel-content">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="hight-light">
                                    <h2>Fantastic</h2>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-6 vote-text">
                                            <p><span>95</span>%</p><small>Member Recommend</small> <a href="#" title="">Read 36 Reviews</a></div>
                                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-6 vote-text"><img src="images/icon-tripadvitsor.png" alt=""> <small>4.5 Very Good</small> <a href="#" title="">145 Reviews</a></div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                            <hr class="hr">
                                            <blockquote class="quote-sidebar">
                                                <p>Great location tucked behind the Ritz Hotel on Piccadilly. Good value for money. The suite I booked was good.
                                                    <br><span><b>Daniel Brown</b> - Sweden, 28/3/2013</span></p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 hl-customer-like">
                                <h2>Why customer like this hotel</h2>
                                <div class="customer-like"><span class="cs-like-label">Nearest transport</span>
                                    <ul>
                                        <li>Shepherd's Bush (Central) Tube Station (0.5 Km / 6 min walk)</li>
                                    </ul>
                                </div>
                                <div class="customer-like"><span class="cs-like-label">Distance to airport</span>
                                    <ul>
                                        <li>London Heathrow Airport (17.0 Km)</li>
                                        <li>London City Airport (18.3 Km)</li>
                                    </ul>
                                </div>
                                <div class="customer-like"><span class="cs-like-label">Nearest transportCustomer comments</span>
                                    <ul>
                                        <li>Comfortable and clean, Friendly staff, Value for money</li>
                                    </ul>
                                </div>
                                <div class="customer-like"><span class="cs-like-label">Top attractions in the area</span>
                                    <ul>
                                        <li>Westfield London (0.9 Km / 11 min walk)</li>
                                        <li>Natural History Museum (2.6 Km)</li>
                                        <li>Victoria and Albert Museum (2.9 Km)</li>
                                        <li>Hyde Park (3.0 Km)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="check-rates detail-cn" id="check-rates">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Check Rates &amp; Availability</h2>
                                    <hr class="hr"><a href="#hl-features" title="">Features</a> <a href="#details-policies" title="">Details &amp; Policies</a> <a href="#about-area" title="">About Area</a> <a href="#review-detail" title="">Reviews</a></div>
                            </div>
                            <div class="col-lg-9 check-rates-cn">
                                <div class="check-rates-form">
                                    <h3>Enter dates to see prices and availability</h3>
                                    <div class="form-search clearfix">
                                        <div class="form-field field-date">
                                            <input type="text" class="field-input calendar-input" placeholder="Check in">
                                        </div>
                                        <div class="form-field field-date">
                                            <input type="text" class="field-input calendar-input" placeholder="Check out">
                                        </div>
                                        <div class="form-field field-select">
                                            <div class="select"><span>Guest</span>
                                                <select>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-submit">
                                            <button type="submit" class="awe-btn awe-btn-4 arrow-right awe-btn-medium">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-check-rate">
                                    <h2>Prices 2015 Grand plaza<span>(/person)</span></h2>
                                    <div class="table-responsive">
                                        <table class="table tb-service-check-rate">
                                            <thead>
                                                <tr>
                                                    <th>Room Types</th>
                                                    <th class="text-center">April - May</th>
                                                    <th class="text-center">June - July</th>
                                                    <th class="text-center">Augus - September</th>
                                                    <th class="text-center">October</th>
                                                </tr>
                                            </thead>
                                            <tr>
                                                <td>Luxury Suite</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                            </tr>
                                            <tr>
                                                <td>Bella suite</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                            </tr>
                                            <tr>
                                                <td>Double studio</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                                <td class="text-center">$230</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="hl-availability">
                                    <div class="table-responsive">
                                        <table class="table table-availability">
                                            <tr>
                                                <th>Room Types</th>
                                                <th>Rate <span>(/night)</span></th>
                                                <th>No. Rooms</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td class="avai-td-text">
                                                    <figure><img src="images/hotel/img-5.jpg" alt=""></figure>
                                                    <h3>Luxury Suite</h3>
                                                    <p>Double or twin beds, en-suite bathrooms, a large living</p><a href="popup/popup-room.html" class="a-popup-room">more info</a></td>
                                                <td class="avai-td-price"><span class="price">$345<small>/night</small></span></td>
                                                <td class="avai-td-room">
                                                    <div class="select"><span data-placeholder="select room">1 room</span>
                                                        <select name="room">
                                                            <option value="1">1 room</option>
                                                            <option selected="selected" value="1">2 room</option>
                                                            <option value="1">3 room</option>
                                                            <option value="1">4 room</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="avai-td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                            </tr>
                                            <tr>
                                                <td class="avai-td-text">
                                                    <figure><img src="images/hotel/img-6.jpg" alt=""></figure>
                                                    <h3>Luxury Suite</h3>
                                                    <p>Double or twin beds, en-suite bathrooms, a large living</p><a href="popup/popup-room.html" class="a-popup-room">more info</a></td>
                                                <td class="avai-td-price"><span class="price">$345<small>/night</small></span></td>
                                                <td class="avai-td-room">
                                                    <div class="select"><span data-placeholder="select room">1 room</span>
                                                        <select name="room">
                                                            <option value="1">1 room</option>
                                                            <option selected="selected" value="1">2 room</option>
                                                            <option value="1">3 room</option>
                                                            <option value="1">4 room</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="avai-td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                            </tr>
                                            <tr>
                                                <td class="avai-td-text">
                                                    <figure><img src="images/hotel/img-7.jpg" alt=""></figure>
                                                    <h3>Luxury Suite</h3>
                                                    <p>Double or twin beds, en-suite bathrooms, a large living</p><a href="popup/popup-room.html" class="a-popup-room">more info</a></td>
                                                <td class="avai-td-price"><span class="price">$345<small>/night</small></span></td>
                                                <td class="avai-td-room">
                                                    <div class="select"><span data-placeholder="select room">1 room</span>
                                                        <select name="room">
                                                            <option value="1">1 room</option>
                                                            <option selected="selected" value="1">2 room</option>
                                                            <option value="1">3 room</option>
                                                            <option value="1">4 room</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="avai-td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                            </tr>
                                            <tr>
                                                <td class="avai-td-text">
                                                    <figure><img src="images/hotel/img-8.jpg" alt=""></figure>
                                                    <h3>Luxury Suite</h3>
                                                    <p>Double or twin beds, en-suite bathrooms, a large living</p><a href="popup/popup-room.html" class="a-popup-room">more info</a></td>
                                                <td class="avai-td-price"><span class="price">$345<small>/night</small></span></td>
                                                <td class="avai-td-room">
                                                    <div class="select"><span data-placeholder="select room">1 room</span>
                                                        <select name="room">
                                                            <option value="1">1 room</option>
                                                            <option selected="selected" value="1">2 room</option>
                                                            <option value="1">3 room</option>
                                                            <option value="1">4 room</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="avai-td-book"><a href="#" class="awe-btn awe-btn-1 awe-btn-small">Book</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hl-features detail-cn" id="hl-features">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Features</h2>
                                    <hr class="hr"><a href="#check-rates" title="">Check Rates &amp; Availability</a> <a href="#about-area" title="">About Area</a> <a href="#details-policies" title="">Details &amp; Policies</a> <a href="#review-detail" title="">Reviews</a></div>
                            </div>
                            <div class="col-lg-9 hl-features-cn">
                                <div class="featured-service">
                                    <h3>Facilities</h3>
                                    <ul class="service-list">
                                        <li class="unselected">
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-1.png" alt=""></div>
                                                <figcaption>Free breakfast</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-2.png" alt=""></div>
                                                <figcaption>Spa service</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-3.png" alt=""></div>
                                                <figcaption>Free parking</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-4.png" alt=""></div>
                                                <figcaption>Sauna service</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-5.png" alt=""></div>
                                                <figcaption>Restaurant</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-6.png" alt=""></div>
                                                <figcaption>Casino</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-7.png" alt=""></div>
                                                <figcaption>Swimming pool</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-8.png" alt=""></div>
                                                <figcaption>Airport transfer</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-9.png" alt=""></div>
                                                <figcaption>Free Wi-Fi in all rooms</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-10.png" alt=""></div>
                                                <figcaption>Smoking area</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-11.png" alt=""></div>
                                                <figcaption>Laundry service</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-12.png" alt=""></div>
                                                <figcaption>Business center</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-13.png" alt=""></div>
                                                <figcaption>Hair dryer</figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <div class="icon-service"><img src="images/icon-service-14.png" alt=""></div>
                                                <figcaption>24-hour front desk</figcaption>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                                <div class="featured-service">
                                    <h3>Language Spoken</h3>
                                    <ul class="service-spoken">
                                        <li><img src="images/icon-check.png" alt="">Arabic</li>
                                        <li><img src="images/icon-check.png" alt="">French</li>
                                        <li><img src="images/icon-check.png" alt="">Russian</li>
                                        <li><img src="images/icon-check.png" alt="">English</li>
                                        <li><img src="images/icon-check.png" alt="">Spanish</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="details-policies detail-cn" id="details-policies">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Details &amp; Policies</h2>
                                    <hr class="hr"><a href="#about-area" title="">About Area</a> <a href="#check-rates" title="">Check Rates &amp; Availability</a> <a href="#hl-features" title="">Features</a> <a href="#review-detail" title="">Reviews</a></div>
                            </div>
                            <div class="col-lg-9 details-policies-cn">
                                <div class="policies-item">
                                    <h3>Apartment Description</h3>
                                    <p>Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.
                                        <br>Vivamus pulvinar nulla id massa congue varius. Etiam vitae nunc consectetur, porttitor purus ac, sagittis dui. Ut sit amet consectetur diam. Suspendisse mollis dapibus porta. In erat quam, pulvinar eu efficitur ut, malesuada nec augue. Pellentesque odio orci, interdum eu tortor sollicitudin, tincidunt placerat erat. Quisque pretium mauris at condimentum imperdiet.</p>
                                </div>
                                <div class="policies-item">
                                    <h3>Apartment Description</h3>
                                    <p>Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.
                                        <br>Vivamus pulvinar nulla id massa congue varius. Etiam vitae nunc consectetur, porttitor purus ac, sagittis dui. Ut sit amet consectetur diam. Suspendisse mollis dapibus porta. In erat quam, pulvinar eu efficitur ut, malesuada nec augue. Pellentesque odio orci, interdum eu tortor sollicitudin, tincidunt placerat erat. Quisque pretium mauris at condimentum imperdiet.</p>
                                </div>
                                <div class="policies-item">
                                    <h3>Apartment Description</h3>
                                    <p>Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.
                                        <br>Vivamus pulvinar nulla id massa congue varius. Etiam vitae nunc consectetur, porttitor purus ac, sagittis dui. Ut sit amet consectetur diam. Suspendisse mollis dapibus porta. In erat quam, pulvinar eu efficitur ut, malesuada nec augue. Pellentesque odio orci, interdum eu tortor sollicitudin, tincidunt placerat erat. Quisque pretium mauris at condimentum imperdiet.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="about-area detail-cn" id="about-area">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>about the area</h2>
                                    <hr class="hr"><a href="#check-rates" title="">Check Rates &amp; Availability</a> <a href="#hl-features" title="">Features</a> <a href="#review-detail" title="">Reviews</a> <a href="#details-policies" title="">Details Policies</a></div>
                            </div>
                            <div class="col-lg-9">
                                <div class="hotel-detail-map">
                                    <div id="hotel-detail-map" data-latlng="51.5133647,-0.1907375"></div>
                                    <p class="about-area-location"><i class="fa fa-map-marker"></i>42 Princes Square, London W2 4AD</p>
                                </div>
                                <div class="about-area-text">
                                    <h2>What to do</h2>
                                    <p><b>Shop.</b> At the quirky Thai Home Industries, troll for stainless steel flatware inspired by upcountry farm tools that are part of the MoMA design collection (35 Oriental Avenue; 662-234-1736).</p>
                                    <p><b>Thai Done Right.</b> Eat like a spice-loving local at Gallery Café — we love the crispy prawn cakes, <a href="#">Thai tuna salad</a> tossed with slivers of powerful chilies, and succulent chicken wrapped in pandanus leaves (86-100 Soi Captain Bush; 662-639-5580).</p>
                                    <p><b>Stop and Smell.</b> The fragrant <a href="#">Pak Klong Talaad</a>, is the country’s most important wholesale flower market. The buying and selling frenzy starts around 2 a.m., when boats begin to dock near Memorial Bridge with a cornucopia of fresh flowers including orchids, marigolds, zinnias, jasmine and, of course, roses.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="review-detail detail-cn" id="review-detail">
                        <div class="row">
                            <div class="col-lg-3 detail-sidebar">
                                <div class="scroll-heading">
                                    <h2>Reviews</h2>
                                    <hr class="hr"><a href="#check-rates" title="">Check Rates &amp; Availability</a> <a href="#hl-features" title="">Features</a> <a href="#details-policies" title="">Details &amp; Policies</a> <a href="#about-area" title="">About Area</a></div>
                            </div>
                            <div class="col-lg-9 review-detail-cn">
                                <div class="review-tabs">
                                    <ul class="tabs-head nav-tabs-one">
                                        <li class="active"><a data-toggle="tab" href="#section1">Member reviews</a></li>
                                        <li><a data-toggle="tab" href="#section2">TripAdvisor reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="section1" class="tab-pane fade in active">
                                            <div class="review-tabs-cn">
                                                <div class="row">
                                                    <div class="col-sm-4 col-md-3 col-lg-4 col-lg-push-8 col-md-push-9 col-sm-push-8">
                                                        <div class="review-vote text-center">
                                                            <h3>Fantastic</h3><span class="vote-score">8.5</span> <span class="vote-number">from <strong>145</strong> reviews</span>
                                                            <p><span><strong>95</strong>%</span> Recommend</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8 col-md-9 col-lg-8 col-lg-pull-4 col-md-pull-3 col-sm-pull-4">
                                                        <div class="review-st">
                                                            <div class="row row-rule">
                                                                <div class="col-md-5 lable-st">&nbsp;</div>
                                                                <div class="col-md-7">
                                                                    <div class="rule-point"><span>0</span> <span>2</span> <span>4</span> <span>6</span> <span>8</span> <span>10</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 lable-st">Value for Money</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="7.5"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 lable-st">Location</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="6.0"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-5 lable-st">Staff Performance</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="8.0"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="lable-st col-md-5">Hotel Condition/Cleanliness</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="6.0"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="lable-st col-md-5">Room Comfort/Standard</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="8.0"></div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="lable-st col-md-5">Food/Dining</div>
                                                                <div class="col-md-7">
                                                                    <div class="progress-rv" data-value="4.5"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="section2" class="tab-pane fade"></div>
                                    </div>
                                </div>
                                <div class="review-all">
                                    <h4 class="review-h">All reviews (365)</h4>
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number"><ins>5.6</ins> <span>Isbawandi Zin</span> <small>from London, UK, 3/2/ 2014</small></div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                                <li><span class="icon icon-minus fa fa-minus"></span>Noisy, expensive</li>
                                            </ul>
                                            <p>Our stay was pleasant and joyful. We stayed in an apartment meant for 3 adults. First and foremost, close proximity to tube station was the reason of choosing this hotel. The cleaning services were fantastic. The support services were prompt...</p>
                                        </div>
                                    </div>
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number"><ins>9.0</ins> <span>Isbawandi Zin</span> <small>from London, UK, 3/2/ 2014</small></div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                            </ul>
                                            <p>Our stay was pleasant and welcoming. We stayed in an apartment meant for 3 adults with kitchen facilities. The cleaning services were superp. We liked the laundry and kitchen cleaning services on top of the regular cleaning services. The support services were prompt...much needed extra bowls were delivered in a jiffy. Front desk were very cotdial and helpful though working under at times. Needed travel arrangements and info were delivered with smiles. Delivering luggeges to the room was done witbout request.. Computer and printing service in the lobby was really helpful...tbe charge reasonable</p>
                                        </div>
                                    </div>
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number"><ins>5.6</ins> <span>Isbawandi Zin</span> <small>from London, UK, 3/2/ 2014</small></div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                                <li><span class="icon icon-minus fa fa-minus"></span>Noisy, expensive</li>
                                            </ul>
                                            <p>Our stay was pleasant and joyful. We stayed in an apartment meant for 3 adults. First and foremost, close proximity to tube station was the reason of choosing this hotel. The cleaning services were fantastic. The support services were prompt...</p>
                                        </div>
                                    </div>
                                    <div class="row review-item">
                                        <div class="col-xs-3 review-number"><ins>9.0</ins> <span>Isbawandi Zin</span> <small>from London, UK, 3/2/ 2014</small></div>
                                        <div class="col-xs-9 review-text">
                                            <ul>
                                                <li><span class="icon fa fa-plus"></span>Location, warmth, cleanliness</li>
                                            </ul>
                                            <p>Our stay was pleasant and welcoming. We stayed in an apartment meant for 3 adults with kitchen facilities. The cleaning services were superp. We liked the laundry and kitchen cleaning services on top of the regular cleaning services. The support services were prompt...much needed extra bowls were delivered in a jiffy. Front desk were very cotdial and helpful though working under at times. Needed travel arrangements and info were delivered with smiles. Delivering luggeges to the room was done witbout request.. Computer and printing service in the lobby was really helpful...tbe charge reasonable</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="detail-footer detail-cn">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9 detail-footer-cn">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="review-more"><a href="#" title=""><i class="icon"></i> Show more reviews</a></div>
                                    </div>
                                    <div class="col-xs-7 text-right">
                                        <p class="price-book">From-<span>$345</span>/night <a href="#" title="" class="awe-btn awe-btn-1 awe-btn-lager">Book Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-foter">
                            <a href="index-2.html" title=""><img src="images/logo-footer.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="about.html" title="">About</a></li>
                                <li><a href="blog.html" title="">Blog</a></li>
                                <li><a href="fqa.html" title="">FQA</a></li>
                                <li><a href="careers.html" title="">Carrers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-2">
                        <div class="ul-ft">
                            <ul>
                                <li><a href="contact.html" title="">Contact Us</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Term of Service</a></li>
                                <li><a href="#" title="">Security</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head"><span class="angle-down"><i class="fa fa-angle-down"></i></span></div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">English</a></li>
                                    <li><a href="#" title="">Bahasa Melayu</a></li>
                                    <li><a href="#" title="">Català</a></li>
                                    <li><a href="#" title="">Dansk</a></li>
                                    <li><a href="#" title="">Deutsch</a></li>
                                    <li><a href="#" title="">Francais</a></li>
                                    <li><a href="#" title="">Italiano</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="currency-lang-bottom dropdown-cn float-left">
                            <div class="dropdown-head"><span class="angle-down"><i class="fa fa-angle-down"></i></span></div>
                            <div class="dropdown-body">
                                <ul>
                                    <li class="current"><a href="#" title="">US</a></li>
                                    <li><a href="#" title="">ARS</a></li>
                                    <li><a href="#" title="">ADU</a></li>
                                    <li><a href="#" title="">CAD</a></li>
                                    <li><a href="#" title="">CHF</a></li>
                                    <li><a href="#" title="">CNY</a></li>
                                    <li><a href="#" title="">CZK</a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="copyright">© 2009 – 2014 Bookyourtrip™ All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="js/library/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/library/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/library/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/library/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/library/parallax.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/library/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.mb.YTPlayer.min.js"></script>
    <script type="text/javascript" src="js/library/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="js/library/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-20585382-5', 'megadrupal.com');
        ga('send', 'pageview');
    </script>
</body>
<!-- Mirrored from envato.megadrupal.com/html/bookawesome/hotel-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2017 13:29:49 GMT -->

</html>
</html>