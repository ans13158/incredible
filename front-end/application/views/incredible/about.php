<?php
    include "common/header.php";
    include 'common/navbar.php';
?>  
                
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
                    <section class="about-cn clearfix ">
                        <div class="bg-parallax bg-5"></div>
                        <div class="about-text">
                            <h4 style="font-weight: bold;color:#333;line-height: 1.5;text-align: center;">Incredible Uttarakhand is tour planner agency located at Nainital and Almora districts of Uttarakhand with Main Office at Almora district and Satellite Office at Haldwani, Nainital.</h4>
                            <div class="about-description">
                                
                                <p>Our tour planner agency is assisted by department of tourism, govt. of Uttarakhand . We the planners belong to the land of gods itself so our understanding and knowing of of Uttarakhand region is far better. Our main aim is to explore the unexplored and majestic sites because there are many places in Uttarakhand which are not in tourism map of the state but far cheap and beautiful than other famous hilly regions. Our mission is to provide unexplored places of uttarakhand an identity on tourism map as well as provide cheap, exciting and memorable tour packages to our clients.Uttarakhand offers limitless opportunities for tourism and adventure. There is something for everyone - Pilgrimage, Temples, Wildlife tours, Bird Watching, Rafting, Mountaineering, Skiiing, Trekking, Camping, Yoga and Meditation and much more. Incredible Uttarakhand introduce itself as a fast growing Tour Operator and Travel Agent based at Uttarakhand. Incredible Uttarakhand, covers complete Uttarakhand range from Kumaon Hills to Garhwal Hills to provide you extreme enjoyment. Incredible Uttarakhand, has complete information about areas we cover and you might have to visit. Incredible Uttarakhand, has a list of Tours like Adventure, Holidays, Pilgrimage and Honeymoon. We even manage hotels and every facility in remote areas. We have a huge list of satisfied clients and you could be the next.<br><br></p>
                               <h4 style="font-weight: bold;color:#333">Vision & Mission</h4>
                                <ul>
                                    <li> To provide unexplored places of Uttarakhand, an identity on tourism map as well as provide cheap, exciting and memorable tour packages to our clients.</li>
                                    <li> To place Uttarakhand on the tourism map of the world as one of the leading tourist destinations, and to make Uttarakhand synonymous with tourism.</li>
                                    <li>To develop the manifold tourism related resources of the State in an eco-friendly manner, with the active participation of the private sector and the local host communities.</li>

                                </ul>
                                    <br>
                                <h4 style="font-weight: bold;color:#333">Our Request</h4>
                                <p>We would request you to give us an opportunity to serve you and do let us know in case you have Any Tour and Travel Related requirement. We assure you of the best of our services at all times.</p>
                            </div>
                        </div>
                    </section>
                    <section class="team" id="our_team">
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

                    <section class="team" id="partners">
                        <h3>Our Partners</h3>
                        <p>Morbi sed sollicitudin augue. Ut metus nibh, fringilla vitae mi in, aliquam ullamcorper nisl. Integer id tincidunt libero. Donec pharetra est sed suscipit efficitur. In a gravida quam. Aenean vel dolor augue. In nec lacinia enim, vitae fermentum elit. Aliquam non diam sed lectus commodo hendrerit.</p>
                            <br>
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
                                                <a href="#" ><?= img( ["src" => "images/icon/mmt.png","style"=>"width:60%;height:300px;display:inline-block"] )  ?>                     </a>
                                                <a href="#" ><?= img( ["src" => "images/icon/mmt-ceo.jpg","style"=>"width:39.6%;height:300px;display:inline-block"] )  ?>                     </a>
                                                
                                                  
                                            </div>

                                            <div class="item">
                                                 <a href="#" ><?= img( ["src" => "images/icon/airIndia.jpg","style"=>"width:60%;height:280px;display:inline-block"] )  ?>                     </a>
                                                <a href="#" ><?= img( ["src" => "images/icon/airIndia-ceo.jpg","style"=>"width:39.6%;height:300px;display:inline-block"] )  ?>                     </a>
                                                      
                                            </div>

                                            <div class="item">
                                                <a href="#" ><?= img( ["src" => "images/icon/mmt.png","style"=>"width:60%;height:300px;display:inline-block"] )  ?>                     </a>
                                                <a href="#" ><?= img( ["src" => "images/icon/mmt-ceo.jpg","style"=>"width:39.6%;height:300px;display:inline-block"] )  ?>                     </a>
                                                       
                                            </div>

                                            <div class="item">
                                                <a href="#" ><?= img( ["src" => "images/icon/mmt.png","style"=>"width:60%;height:300px;display:inline-block"] )  ?>                     </a>
                                                <a href="#" ><?= img( ["src" => "images/icon/mmt-ceo.jpg","style"=>"width:39.6%;height:300px;display:inline-block"] )  ?>                     </a>
                                                
                                            </div>

                                            <div class="item">
                                                 <a href="#" ><?= img( ["src" => "images/destinations/img-1.jpg","style"=>"width:49%;height:300px;display:inline-block"] )  ?>                     </a>
                                                <a href="#" ><?= img( ["src" => "images/destinations/img-1.jpg","style"=>"width:50.6%;height:300px;display:inline-block"] )  ?>                     </a>
                                                    
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
