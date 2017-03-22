<?php
    include "common/header.php";
    include 'common/navbar.php'; 
?>
<link rel="stylesheet" href="../css/library/pickaDate/themes/default.css">
<link rel="stylesheet" href="../css/library/pickaDate/themes/default.css">

</body>
<style>
    .contact-details  {
        float: right;
        background-color: rgba(255,255,255,.85);
        font-size:18px;
        color:black;
        padding: 25px;
        margin-right: -90px;
        margin-top: -70px;
        /*opacity: 0.95;
        filter: alpha(opacity=95)*/
    }
    .error  {
        color:red;
        font-size: 16px;
    }
</style>

<body>

    <nav class="navigation nav-c col-xs-12" id="navigation" data-menu-type="1200">
                    <div class="nav-inner"><a href="#" class="bars-close" id="bars-close">Close</a>
                        <div class="tb">
                            <div class="tb-cell">
                                <ul class="menu-list text-uppercase">
                                    <li ><?= anchor( base_url('incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('incredible_ukd/about'),'About Us') ?></li>

                                    <li><?= anchor(base_url("incredible_ukd/role"),'Our Role')?> </li>  

                                    <li><?= anchor( base_url('incredible_ukd/location'),'Location') ?>
                                        <ul class="sub-menu">
                                            <li><?= anchor( base_url('incredible_ukd/india'),'About India') ?></li>
                                            <li><?= anchor( base_url('incredible_ukd/about_ukd'),'About Uttarakhand') ?></li>
                                            </ul>
                                        </li>
                                       
                                    <li  class="current-menu-parent"><?= anchor( '','Destinations')?>
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

         <section class="sub-banner">
            <div class="bg-parallax bg-1"></div>
            
        </section>
        <div class="main">
            <div class="container">
                <div class="main-cn bg-white clearfix">
                    <div class="step">
                        <ul class="payment-step text-center clearfix">
                            <li class="step-select"><span>1</span>
                                <p>Choose Your Package</p>
                            </li>
                            <li class="step-select"><span>2</span>
                                <p>Your Booking &amp; Payment Details</p>
                            </li>
                            <li class="step-part complete"><span>3</span>
                                <p>Booking Completed!</p>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="">
                        <div class="row ">
                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="margin-left: 05%" >
                                    <br>
                                <h2>Booking Completed</h2>  
                                    <br><br>

                                <h3 style="display: inline-block;">Booking Id : <strong> <?= $tourId ?></strong></h3>    
                                        
                                        <br>
                                <h4 style="color: green;">Please keep this Booking Id safe. It will be used for further communications. </h4>  

                            </div>

                                <div class="col-xs-8 col-lg-8 col-sm-8 col-md-8">    
                                        <br><br>
                                    <table class="table  table-hover table-bordered text-center" style="width: 70%;margin-left: 40%">
                                        <tr>
                                            
                                            <th>
                                                Tour Id
                                                 </th>
                                            
                                            
                                            <td> <strong> <?= $tourId ?> </strong> </td>
                                            
                                        </tr>

                                        <tr>

                                            <th>
                                                Full Name
                                            </th>
                                            
                                            <td>
                                                <?= $fullName ?>
                                            </td>
                                        </tr>    

                                        <tr>

                                            <th>
                                                Email Id
                                            </th>
                                            
                                            <td>
                                                <?= $email ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Contact Number
                                            </th>
                                            <td>
                                                <?= $contact ?>
                                            </td>
                                        </tr>

                                        <tr>
                                           <th>
                                               State
                                           </th>  

                                           <td>
                                               <?= $state ?>
                                           </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Destination
                                            </th>

                                            <td>
                                                <?= $destination ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Hotel Type
                                            </th>

                                            <td>
                                                <?= $hotel ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Date Of Visit
                                            </th>

                                            <td>
                                                <?= $dateOfVisit ?>
                                            </td>
                                        </tr>

                                    </table>
                                </div>    
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
        </div>            

<?php
include "common/footer.php";
?>