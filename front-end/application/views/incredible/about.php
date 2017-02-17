<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>  
                <!--=========Header =========-->
                                <!--=== Rest of HADERS is in navbar.php ===-->
                       <ul class="menu-list text-uppercase">
                                    <li ><?= anchor('incredible_ukd','Home') ?></li>
                                        
                                    <li class="current-menu-parent"><?= anchor('incredible_ukd/about','About Us') ?></li>

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
                <!--=========Header =========-->

          <!-- ==============Main Body ================-->      
        
        <div class="main">
            <div class="container">
                <div class="main-cn about-page bg-white clearfix">
                    <section class="breakcrumb-sc">
                        <ul class="breadcrumb arrow">
                            <li><?= anchor('incredible_ukd','<i class="fa fa-home"></i>') ?></li>
                            <li>About us</li>
                        </ul>
                    </section>
                    <section class="about-cn clearfix">
                        <div class="about-searved"><span>Served over</span> <ins>584,000</ins> <span>people in 45 countries</span></div>
                        <div class="about-text">
                            <h1>We love travel</h1>
                            <div class="about-description">
                                <p>Mauris convallis hendrerit posuere. In hac habitasse platea dictumst. Curabitur dapibus bibendum eros sit amet porta. Aliquam erat volutpat. Mauris a porta ligula. Nulla convallis at urna ut rutrum.</p>
                                <p>Mauris convallis hendrerit posuere. In hac habitasse platea dictumst. Curabitur dapibus bibendum eros sit amet porta. Aliquam erat volutpat. Mauris a porta ligula. Nulla convallis at urna ut rutrum. Aliquam bibendum ultrices dui, eget pulvinar dolor bibendum sed. Aenean ullamcorper, nunc in lacinia tincidunt, erat eros lobortis urna, ac scelerisque velit augue aliquam ipsum. Nulla ut hendrerit lorem. Aenean sed ipsum mauris. Proin in venenatis augue, vel congue ipsum. Etiam convallis tincidunt sagittis.ac scelerisque velit augue aliquam ipsum. Nulla ut hendrerit lorem. Aenean sed ipsum mauris. Proin in venenatis augu.</p>
                            </div>
                        </div>
                    </section>
                    <section class="team">
                        <div class="team-head">
                            <h2>Our team</h2>
                            <p>Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.</p>
                        </div>
                        <div class="team-group row">
                            <div class="team-item col-xs-6 col-md-3">
                                <figure> <?=img ( ["src"=>"images/team/img-1.jpg", "alt"=>""] ) ?></figure>
                                <h3>ROBERT SMITH</h3><span>Creative Director</span></div>
                            <div class="team-item col-xs-6 col-md-3">
                                <figure><?=img ( ["src"=>"images/team/img-2.jpg", "alt"=>""] ) ?></figure>
                                <h3>JHON WHITE</h3><span>Designer</span></div>
                            <div class="team-item col-xs-6 col-md-3">
                                <figure><?=img ( ["src"=>"images/team/img-3.jpg", "alt"=>""] ) ?></figure>
                                <h3>JACK SMITH</h3><span>Developper</span></div>
                            <div class="team-item col-xs-6 col-md-3">
                                <figure><?=img ( ["src"=>"images/team/img-4.jpg", "alt"=>""] ) ?></figure>
                                <h3>JHON WHITE</h3><span>Designer</span></div>
                        </div>
                    </section>
                    <section class="twitter">
                        <div class="bg-parallax bg-4"></div>
                        <div class="twitter-cn text-center"><span class="icon"><i class="fa fa-twitter"></i></span>
                            <div class="twitter-slide">
                                <div class="twitter-item">
                                    <p>Etiam sodales ligula lacus. Vestibulum pellentesque purus at mauris tristique, id mollis nibh suscipit. Nunc malesuada
                                        <br>consequat velit mollis laoreet. Ut feugiat est sit amet mauris tristique
                                        <br>1month ago</p>
                                    <ul>
                                        <li><span>REply</span></li>
                                        <li><span>REtweets</span></li>
                                        <li><span>favorite</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="follow-about">
                        <div class="follow-group"><a href="#" title=""><i class="fa fa-facebook"></i></a> <a href="#" title=""><i class="fa fa-twitter"></i></a> <a href="#" title=""><i class="fa fa-pinterest"></i></a> <a href="#" title=""><i class="fa fa-linkedin"></i></a> <a href="#" title=""><i class="fa fa-instagram"></i></a></div>
                    </section>
                </div>
            </div>
        </div>
          <!-- ==============Main Body ================-->      

      <!--================ FOOTER ================-->   
<?php include "common/footer.php"; ?>

      <!--================ FOOTER ================-->   
