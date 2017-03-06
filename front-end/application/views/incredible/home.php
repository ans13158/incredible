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
            <div class="bg-parallax bg-1"></div>
            <div class="container">
               
                    <br>
                    <div class="contact-details ">
                            
                        <table style="width:100%">
                            <tr>
                                <td style="color:black"><h4><i class="fa fa-phone" style="margin-right:10px"></i>Call Us : +91-8191937317</h4></td>
                            </tr>
                                    
                            <tr>

                                <td style="color:black"><h4><i class="fa fa-envelope" style="margin-right:10px"></i>E-mail : contact@incredibleuttarakhand.co.in</h4></td>
                            </tr>    
                        </table>

                    </div>

                        <br><br><br>
                <div class="banner-cn">
                    <ul class="tabs-cat text-center row">
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-flight" title=""><span>Flights</span> <img src="<?= base_url('images/icon-flight.png') ?>" alt=""></a></li>
                        <li class="cate-item active col-xs-2"><a data-toggle="tab" href="#form-hotel" title=""><span>Hotels</span><img src="<?= base_url('images/icon-hotel.png') ?>" alt=""></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-car" title=""><span>Car</span><img src="<?= base_url('images/icon-car.png') ?>" alt=""></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-package" title=""><span>package deals</span><img src="<?= base_url('images/icon-tour.png') ?>" alt=""></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-cruise" title=""><span>cruise</span><img src="<?= base_url('images/icon-cruise.png') ?>" alt=""></a></li>
                        <li class="cate-item col-xs-2"><a data-toggle="tab" href="#form-tour" title=""><span>TOUR</span><img src="<?= base_url('images/icon-vacation.png') ?>" alt=""></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="form-cn form-hotel tab-pane active in" id="form-hotel">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-destination">
                                    <label for="destination"><span>Destination:</span> State, City</label>
                                    <input type="text" id="destination" class="field-input">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Check in">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Check out">
                                </div>
                                <div class="form-field field-select">
                                    <div class="select"><span>Guest</span>
                                        <select>
                                            <option>Guest</option>
                                            <option>1 Guest</option>
                                            <option>2 Guests</option>
                                            <option>3 Guests</option>
                                            <option>4 Guests</option>
                                            <option>5 Guests</option>
                                            <option>6 Guests</option>
                                            <option>7 Guests</option>
                                            <option>8 Guests</option>
                                            <option>9 Guests</option>
                                            <option>10 Guests</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-cn form-car tab-pane" id="form-car">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-picking">
                                    <label for="picking"><span>Picking up:</span> City, airport...</label>
                                    <input type="text" id="picking" class="field-input">
                                </div>
                                <div class="form-field field-droping">
                                    <input type="text" class="field-input" placeholder="Droping off">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Pink up date">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Drop off date">
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-cn form-cruise tab-pane" id="form-cruise">
                            <h2>Where would you like to go?</h2>
                            <ul class="form-radio">
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-2" id="radio-5" class="radio">
                                        <label for="radio-5">Popular Cruises</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-2" id="radio-6" class="radio">
                                        <label for="radio-6">Luxury Cruises</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-2" id="radio-7" class="radio">
                                        <label for="radio-7">River Cruises</label>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-search clearfix">
                                <div class="form-field field-destination">
                                    <label for="destination2"><span>Destination:</span> Asia...</label>
                                    <input type="text" id="destination2" class="field-input">
                                </div>
                                <div class="form-field field-select field-lenght">
                                    <div class="select"><span>Length of Cruise</span>
                                        <select>
                                            <option>Length of Cruise</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-month">
                                    <div class="select"><span>Month</span>
                                        <select>
                                            <option>Month</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-port">
                                    <div class="select"><span>Cruise Departure Port</span>
                                        <select>
                                            <option>Cruise Departure Port</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-line">
                                    <div class="select"><span>Cruise Line</span>
                                        <select>
                                            <option>Cruise Line</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-cn form-flight tab-pane" id="form-flight">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-from">
                                    <label for="flight-from"><span>Flight from:</span> Airport</label>
                                    <input type="text" name="flightfrom" id="flight-from" class="field-input">
                                </div>
                                <div class="form-field field-to">
                                    <label for="flight-to"><span>To :</span> Country, Airport</label>
                                    <input type="text" id="flight-to" class="field-input">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Departing">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Returning">
                                </div>
                                <div class="form-field field-select field-adult">
                                    <div class="select"><span>Adults</span>
                                        <select>
                                            <option>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-children">
                                    <div class="select"><span>Children</span>
                                        <select>
                                            <option>Children</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-cn form-package tab-pane" id="form-package">
                            <h2>Where would you like to go?</h2>
                            <ul class="form-radio">
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-1" class="radio">
                                        <label for="radio-1">Flight + Hotel</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-2" class="radio">
                                        <label for="radio-2">Flight + Hotel +Car</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-3" class="radio">
                                        <label for="radio-3">Hotel +Car</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="radio-checkbox">
                                        <input type="radio" name="radio-1" id="radio-4" class="radio">
                                        <label for="radio-4">Flight +Car</label>
                                    </div>
                                </li>
                            </ul>
                            <div class="form-search clearfix">
                                <div class="form-field field-from">
                                    <label for="filghtfrom"><span>Flight From:</span> Airport...</label>
                                    <input type="text" id="filghtfrom" class="field-input">
                                </div>
                                <div class="form-field field-to">
                                    <label for="flightto"><span>To:</span> Country, Airport</label>
                                    <input type="text" id="flightto" class="field-input">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Departing">
                                </div>
                                <div class="form-field field-date">
                                    <input type="text" class="field-input calendar-input" placeholder="Returning">
                                </div>
                                <div class="form-field field-select field-adults">
                                    <div class="select"><span>Adults</span>
                                        <select>
                                            <option>Adults</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-children">
                                    <div class="select"><span>Children</span>
                                        <select>
                                            <option>Children</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-cn form-tour tab-pane" id="form-tour">
                            <h2>Where would you like to go?</h2>
                            <div class="form-search clearfix">
                                <div class="form-field field-select field-region">
                                    <div class="select"><span>Region: <small>India,Uttarakhand</small></span>
                                        <select>
                                            <option>Uttarakhand</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-country">
                                    <div class="select"><span>State</span>
                                        <select>
                                            <option>State</option>
                                            <option>Rajasthan</option>
                                            <option>Chattisgarh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-field field-select field-style">
                                    <div class="select"><span>Tour Style</span>
                                        <select>
                                            <option>Style One</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-submit">
                                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sales">
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
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

        <section class="sales">
            <div class="title-wrap">
                <div class="container">
                    <div class="travel-title float-left">
                        <h2>Uttarakhand's Travel Destinations</span></h2></div><a href="<?=base_url('incredible_ukd/ukdDestinations') ?>" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a></div>
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

                                        <div class="home-sales-places">Located on a ridge at the southern edge of the Kumaon Hills of the Himalaya range,Almora was founded in 1568, .The people bringing kilmora were called Kilmori and later "Almori" and the place came to be known as "Almora" </div>
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
                        <h2>About Indian States</h2></div><a href="<?=base_url('incredible_ukd/about_india') ?>" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a></div>
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
                                    <li><a  href="<?=base_url('incredible_ukd/state_details/10') ?>"><i class="fa fa-map-marker"></i> Andhra Pradesh</a></li>
                                    <li><a href="<?=base_url('incredible_ukd/state_details/6') ?>"><i class="fa fa-map-marker"></i> Andaman & Nicobar Islands</a></li>
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
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/9') ?>" title="">Goa</a></div><span class="properties-nb">World famous for it's beautiful beaches </span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/9') ?>" title=""><img src="<?= base_url('images/destinations/goa.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/7') ?>" title="">Jammu & Kashmir</a></div><span class="properties-nb">Known as the Switzerland of India</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/7') ?>" title=""><img src="<?= base_url('images/destinations/j&k.jpg') ?>" alt="" style="height: 190px" ></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/8') ?>" title="">Kerala</a></div><span class="properties-nb">Known as God's Own ountry.</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/8') ?>" title=""><img src="<?= base_url('images/destinations/kerala.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/12') ?>" title="">Himachal Pradesh</a></div><span class="properties-nb">Famous for Shimla, Kulu & Manali.</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/12') ?>" title=""><img src="<?= base_url('images/destinations/himachal.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/12') ?>" title="">Rajasthan</a></div><span class="properties-nb">Known for it's rich cultural heritage</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/12') ?>" title=""><img src="<?= base_url('images/destinations/rajasthan.jpg') ?>" alt="" style="height: 190px"></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-6 col-lg-4">
                                        <div class="destinations-item">
                                            <div class="destinations-text">
                                                <div class="destinations-name"><a href="<?=base_url('incredible_ukd/state_details/13') ?>" title="">Karnataka</a></div><span class="properties-nb">Home to white waterfalls, beautiful hills.</span></div>
                                            <figure class="destinations-img">
                                                <a href="<?=base_url('incredible_ukd/state_details/13') ?>" title=""><img src="<?= base_url('images/destinations/karnataka.jpg') ?>" alt="" style="height: 190px"></a>
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
                        <h2>Travel Magazine</h2></div><a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view all</a></div>
            </div>
            <div class="container">
                <div class="magazine-cn">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="magazine-ds">
                                <div id="owl-magazine-ds">
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="#" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.</p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a> <a href="#" title=""><i class="fa fa-google-plus"></i></a></div><a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a></div>
                                    </div>
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="#" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.</p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a> <a href="#" title=""><i class="fa fa-google-plus"></i></a></div><a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a></div>
                                    </div>
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="#" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.</p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a> <a href="#" title=""><i class="fa fa-google-plus"></i></a></div><a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a></div>
                                    </div>
                                    <div class="magazine-item">
                                        <div class="magazine-header">
                                            <h2>Five festivals to look forward to this year</h2>
                                            <ul>
                                                <li>by <a href="#" title="">Admin</a></li>
                                                <li>03.5.2014</li>
                                            </ul>
                                            <hr class="hr">
                                        </div>
                                        <div class="magazine-body">
                                            <p>Suspendisse ullamcorper lacus et commodo laoreet. Sed sodales aliquet felis, quis volutpat massa imperdiet in. Praesent rutrum malesuada risus, ullamcorper pretium tortor. Mauris lacinia nisl id massa consectetur, eu tempus mauris lacinia. Fusce commodo porttitor sapien quis condimentum.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae. Suspendisse eu libero odio.</p>
                                            <p>Curabitur sollicitudin magna sed sem blandit sodales. Integer in eros sit amet tellus vulputate laoreet ut in purus. Nullam quis lacus nisl.
                                                <br>Sed venenatis commodo leo, ac pulvinar ipsum mattis vitae.</p>
                                        </div>
                                        <div class="magazine-footer clearfix">
                                            <div class="post-share magazine-share float-left"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a> <a href="#" title=""><i class="fa fa-google-plus"></i></a></div><a href="#" title="" class="awe-btn awe-btn-5 arrow-right awe-btn-lager text-uppercase float-right">view more</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="magazine-thum" id="magazine-thum">
                                <div class="thumnail-item active clearfix">
                                    <figure class="float-left"><img src="<?= base_url('images/magazine/img-1.jpg') ?>" alt=""></figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4><span>03.5.2014</span></div>
                                </div>
                                <div class="thumnail-item clearfix">
                                    <figure class="float-left"><img src="<?= base_url('images/magazine/img-2.jpg') ?>" alt=""></figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4><span>03.5.2014</span></div>
                                </div>
                                <div class="thumnail-item clearfix">
                                    <figure class="float-left"><img src="<?= base_url('images/magazine/img-3.jpg') ?>" alt=""></figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4><span>03.5.2014</span></div>
                                </div>
                                <div class="thumnail-item clearfix">
                                    <figure class="float-left"><img src="<?= base_url('images/magazine/img-4.jpg') ?>" alt=""></figure>
                                    <div class="thumnail-text">
                                        <h4>Thailand by Train with Eastern and Oriental Express</h4><span>03.5.2014</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="confidence-subscribe">
            <div class="bg-parallax bg-3"></div>
            <div class="container">
                <div class="row cs-sb-cn">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <div class="subscribe">
                            <h3 style="margin-left: 200px">Testimonials</h3>
                                
                            
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
                                                <a href="#" ><?= img( ["src" => "images/destinations/img-1.jpg","style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Awesome Trip</h1>
                                                        <p style="color:black"> Vivamus enim eros, vehicula at risus non, rutrum ullamcorper lacus. Suspendisse iaculis leo ipsum, semper gravida dui egestas sed. Sed nec metus vel libero suscipit viverra nec sit amet nunc. Suspendisse eget mi nisi. </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => "images/destinations/img-2.jpg","style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Great Experience</h1>
                                                        <p style="color:black"> Vivamus enim eros, vehicula at risus non, rutrum ullamcorper lacus. Suspendisse iaculis leo ipsum, semper gravida dui egestas sed. Sed nec metus vel libero suscipit viverra nec sit amet nunc. Suspendisse eget mi nisi. </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => "images/destinations/img-3.jpg","style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Good Service</h1>
                                                        <p style="color:black"> Vivamus enim eros, vehicula at risus non, rutrum ullamcorper lacus. Suspendisse iaculis leo ipsum, semper gravida dui egestas sed. Sed nec metus vel libero suscipit viverra nec sit amet nunc. Suspendisse eget mi nisi. </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => "images/destinations/img-3.jpg","style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Good Service</h1>
                                                        <p style="color:black"> Vivamus enim eros, vehicula at risus non, rutrum ullamcorper lacus. Suspendisse iaculis leo ipsum, semper gravida dui egestas sed. Sed nec metus vel libero suscipit viverra nec sit amet nunc. Suspendisse eget mi nisi. </p>
                                                    </div>
                                                </div>           
                                            </div>

                                            <div class="item">
                                                <a href="#"><?= img( ["src" => "images/destinations/img-3.jpg","style"=>"width:100%;height:300px;opacity:0.5"] )  ?>                     </a>
                                                <div class="container">
                                                    <div class="carousel-caption">
                                                        <h1>Good Service</h1>
                                                        <p style="color:black"> Vivamus enim eros, vehicula at risus non, rutrum ullamcorper lacus. Suspendisse iaculis leo ipsum, semper gravida dui egestas sed. Sed nec metus vel libero suscipit viverra nec sit amet nunc. Suspendisse eget mi nisi. </p>
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
                            <div class="follow-us" style="margin-left: 90px;">
                                <h4 style="margin-left: 120px;">Follow us</h4>
                                <div class="follow-group"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a>  <a href="#" title=""><i class="fa fa-linkedin"></i></a> <a href="#" title=""><i class="fa fa-instagram"></i></a> <a href="#" title=""><i class="fa fa-google-plus"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    include "common/footer.php";
?>