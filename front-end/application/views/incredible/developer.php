<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>

<body>

    <div class="bars" id="bars"></div>
                <nav class="navigation nav-c" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                 <ul class="menu-list text-uppercase">
                                    <li><?= anchor( base_url('index.php/incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('index.php/incredible_ukd/about'),'About Us') ?></li>
                                    
                                    <li class="current-menu-parent"><?= anchor(base_url("index.php/incredible_ukd/role"),'Our Role')?> </li> 

                                    <li><?= anchor( base_url('index.php/incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('index.php/incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('index.php/incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                                  
                                    <li><?= anchor( '','Destinations')?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('index.php/incredible_ukd/ukdDestinations'),'Destinations Uttarakhand') ?></li>
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
            <div class="container">
                <div class="logo-banner text-center">
                    <a href="#" title=""><img src="<?= base_url('images/logo2.png') ?>" alt="">
                    
                    </a>
                </div>
            </div>
        </section>
        <div class="main">
            <div class="container">
                <div class="main-cn element-page bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><a href="<?= base_url('index.php/incredible_ukd') ?>"><i class="fa fa-home"></i></a></li>
                            <li>Site Developers</li>
                        </ul>
                    </section>
                    <section class="user-profile">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <h2 class="user-profile__title text-center">Website Development Team</h2>

                                    <br>
                                <p style="font-size: 16px;" class="text-center">This awesome website was possible only because of our talented and passionate web developers, who are not just good programmers but also love travel as much as our other team members.We whole-heartedly acknowledge and appreciate their efforts, their hard work and are proud to have worked with them. </p>    
                                <div class="my-profile">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center"><img src="<?= base_url('images/team/developer1.jpg') ?>" style="height: 200px;width:50%;border-radius: 50%" ></p>
                                            <div class="user-profile__header" style="padding: 10px;">
                                                <h3>Anshul Agrawal</h3>
                                                <h5>Web Developer &amp; Designer</h5>

                                            </div>
                                             <section class="follow-about">
                                                <br>
                                            <h4>Contact Me On</h4>
                                                <div class="follow-group"><a href="https://www.facebook.com/anshul.agrawal.5855594" title=""><i class="fa fa-facebook"></i></a>  <a href="https://www.linkedin.com/in/anshul-agrawal-3b3a93aa/" title=""><i class="fa fa-linkedin"></i></a><a href="https://plus.google.com/u/0/109210743808191556223" title=""><i class="fa fa-google-plus"></i></a>
                                                    
                                                 </div>
                                            </section>          
                                                                             
                                        </div>
                                        <div class="col-md-6">
                                            <p class="text-center"><img src="<?= base_url('images/team/developer2.jpg') ?>" style="height: 200px;width:50%;border-radius: 50%" ></p>
                                            <div class="user-profile__header" style="padding: 10px;">
                                                <h3>Yashasvi Goel</h3>
                                                <h5>Web Developer</h5>

                                            </div>
                                             <section class="follow-about">
                                                <br>
                                            <h4>Contact Me On</h4>
                                                <div class="follow-group"><a href="https://www.facebook.com/profile.php?id=100008041275624&fref=hovercard" title=""><i class="fa fa-facebook"></i></a>  <a href="https://www.linkedin.com/in/yashasvi-goel-34155b109/" title=""><i class="fa fa-linkedin"></i></a><a href="https://plus.google.com/u/0/112911434127105065139" title=""><i class="fa fa-google-plus"></i></a>
                                                 
                                                 </div>
                                            </section>          
                                                            
                                        </div>
                                    </div>
                                   
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

       </div>
       </body>
       </html>

        <?php
        include "common/footer.php";
        ?>