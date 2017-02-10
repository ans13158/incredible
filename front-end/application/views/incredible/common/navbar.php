
<body>
    <div id="preloader">
        <div class="tb-cell">
            <div id="page-loading">
                <div></div>
                <p>Loading</p>
            </div>
        </div>
    </div>
    <div id="wrap">
        <header id="header" class="header">
            <div class="container">
                <div class="logo float-left">
                    <a href="" title=""> <?=img( ["src"=>'images/LOGO.png', "height"=>"50", "width"=>'350',"style"=>"margin-left:-60px"]) ?><h5 style="position: absolute;color:black;top:40px;z-index: +99999;margin-left: 30px;font-weight: bold">Tours & Travels</h5> </a>
                </div>
                <div class="bars" id="bars"></div>
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li class="current-menu-parent"><?= anchor('incredible_ukd','Home') ?></li>
                                        
                                    <li><?= anchor('incredible_ukd/about','About Us') ?></li>

                                    <li><?= anchor('incredible_ukd/location','Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor('incredible_ukd','About India') ?></li>
                                            <li><?= anchor('incredible_ukd','About Uttarakhand') ?></li>
                                           
                                        </ul>
                                    </li>
                                    <li><?= anchor('incredible_ukd','Our Services')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor('incredible_ukd','Best Hotels & Resorts')?></li>
                                            <li><?= anchor('incredible_ukd','Logistic Modes')?>
                                                <ul class="sub-menu">
                                                    <li><?= anchor('incredible_ukd','Flights')?></li>
                                                    <li><?= anchor('incredible_ukd','Cars')?></li>
                                                    <li><?= anchor('incredible_ukd','Bikes')?></li>
                                                    <li><?= anchor('incredible_ukd','Buses')?></li>
                                                    <li><?= anchor('incredible_ukd','Travelers')?></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </li>            
                                    <li><?= anchor('incredible_ukd','Destinations')?></li>
                                    
                                    <li ><?= anchor('incredible_ukd','Tour Packages')?>
                                        <ul class="sub-menu"  >
                                            <li style=""><?= anchor('incredible_ukd','Pilgrims Tour Packages')?></li>
                                            <li style=""><?= anchor('incredible_ukd','Wildlife Tour Packages')?></li>
                                            <li style=""><?= anchor('incredible_ukd','Excursion Tour Packages')?></li>
                                            <li ><?= anchor('incredible_ukd','Honeymoon Packages')?></li>
                                            <li style=""><?= anchor('','Trekking Packages')?></li>
                                            <li style=""><?= anchor('incredible_ukd','Motorbike Packages')?></li>
                                            
                                        </ul>
                                    </li>
                                    <li><?= anchor('incredible_ukd','Home Stay')?></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>