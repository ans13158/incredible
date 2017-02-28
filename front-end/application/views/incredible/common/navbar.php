
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
                    <a href="<?= base_url('incredible_ukd') ?>" title=""> <?=img( ["src"=>'images/LOGO.png', "height"=>"50", "width"=>'350',"style"=>"margin-left:-60px"]) ?><h5 style="position: absolute;color:black;top:40px;z-index: +99999;margin-left: 40px;font-weight: bold">Tour Planner</h5> </a>
                </div>
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
                                    <li><?= anchor( '','Destinations')?></li>
                                    
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