
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
                                    <li class="current-menu-parent"><?= anchor( base_url('index.php/incredible_ukd'),'Home') ?></li>
                                        
                                    <li><?= anchor( base_url('index.php/incredible_ukd/about'),'About Us') ?></li>

                                    <li><?= anchor(base_url("index.php/incredible_ukd/role"),'Our Role')?> </li> 

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
                            <li class="step-part"><span>2</span>
                                <p>Your Booking &amp; Payment Details</p>
                            </li>
                            <li><span>3</span>
                                <p>Booking Completed!</p>
                            </li>
                        </ul>
                    </div>

                    
                    <div class="payment-form">
                        <div class="row ">
                            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6" style="margin-left:05%">
                                <h2>Confirm Submitted Information
                                </h2>
                                	<p>(View the information you have entered. To edit something, click on the <strong> EDIT INFORMATION</strong> button below)</p>	

                                		<br>


                                <form action="confirmBooking" method="POST" class="form-vertical">
                                    <div class="form-field">
                                        
                                        <label for="fullName" class="control-label">Full Name</label>
                                        <input type="text" name="fullName" id="fullName" placeholder="Enter Full Name" class="field-input" required="required" readonly="true" value= "<?= $fullName ?>"  >
                                            
                                    </div>
                                    <div class="error">
                                        <?= form_error('fullName')?>
                                    </div>

                                    <div class="form-field">
                                        <label for = "email" class= "control-label">Email</label>
                                        <input type="email" placeholder="Enter Email" name="email" id="email" class="field-input" required="required"  readonly="true" value="<?= $email ?>" >
                                    </div>
                                    
                                    <div class="error">
                                        <?= form_error('email')?>
                                    </div>

                                    <div class="form-field">
                                        <label for="contact" class="control-label">Contact Number</label>
                                        <input type="text" name="contact" id="contact" placeholder="Contact Number" class="field-input" required="required" maxlength="10" value="<?= $contact ?>" readonly="true">
                                    </div>

                                    <div class="error">
                                        <?= form_error('contact')?>
                                    </div>
                                    
                                    <div class="form-field">
                                        <label for="package" class="control-label">Select Tour Package</label>

                                        <select name="state" placeholder="Select Tour Package" class="field-input" data-value="Select Tour Package" class="field-input" onchange="selectPackage(this)" required="required" value="<?= $state ?>" readonly="true">
                                        <option>Select Tour Package</option>
                                        <option selected="selected"> <?= $state ?></option>
                                        <option value="pilgrim">Pilgrims Tour Package</option>
                                        <option value="wildlife">Wild Life Tour Package</option>
                                        <option value="excursion">Excursion Tour Package</option>
                                        <option value="honeymoon">HoneyMoon Tour Package</option>
                                        <option value="trekking">Trekking Tour Package</option>
                                        <option value="motorbike">MotorBike Tour Package</option>
                                        <option value="homestay">Home Stay Tour Package</option>
                                        </select>
                                    </div>

                                    <div class="error">
                                        <?= form_error('state')?>
                                    </div>

                                    <div class="form-field">
                                        <label class="control-label" for="destination">Select Destination According to Package</label>
                                        <select name="destination" id="destination" class="field-input" onchange="setItinerary(this)" required="required" readonly="true">
                                            <option>Select Destination</option>
                                            <option selected="selected"> <?= $destination ?></option>
                                        </select>
                                    </div>

                                    <div class="error">
                                        <?= form_error('destination')?>
                                    </div>

                                    <div class="form-field">
                                        <label class="control-label" for="hotel">Select Type of Hotel</label>
                                        <select name="hotel" id="hotel" class="field-input" required="required" value="<?= $hotel ?>" readonly="true">
                                            <option>Select Hotel Type</option>
                                            <option selected="selected"> <?= $hotel ?></option>
                                             <option value="Low Budget - Less than Rs. 3,000">Low Budget - Less than Rs. 3,000</option>
                                            <option value="Medium - Rs. 3,000 - Rs. 5,000">Medium - Rs. 3,000 - Rs. 5,000</option>
                                            <option value="Luxury & Palaces - Rs. 3,000 to Rs. 10,000">Luxury &amp; Palaces - Rs. 3,000 to Rs. 10,000 </option>
                                            <option value="High End Hotels - Rs. 10,000 and Above">High End Hotels - Rs. 10,000 and Above</option>
                                        </select>
                                    </div>

                                    <div class="error">
                                        <?= form_error('hotel')?>
                                    </div>

                                    <div class="form-field">
                                        <label for="dateOfVisit" class="control-label">Date of Visit</label>
                                        
                                        <input
                                        class="field-input calendar-input"
                                        name="dateOfVisit"
                                        type="text"
                                         required="required" value="<?= $dateOfVisit ?>" readonly="true">
                                    </div>

                                    <div class="form-field">
                                        <label for="daysStay">Number of Days</label>
                                        <input type="text" name="daysStay" id="daysStay" class="field-input" required="required" value="<?= $daysStay ?>" readonly="true"> 
                                    </div>

                                    <div class="error">
                                        <?= form_error('daysStay')?>
                                    </div>

                                    <div class="form-field">
                                        <label for="people">Number of People</label>
                                        <input type="text" name="people" id="people" class="field-input" required="required" value="<?= $people ?>" readonly="true"> 
                                    </div>

                                    <div class="error">
                                        <?= form_error('people')?>
                                    </div>

                                    <div class="form-field">
                                        <label for="itinerary" class="control-label">Rough Itinerary &amp; Details (Provide maximum details to workout in a best way for your travel) :</label>
                                        <textarea rows='5' class="field-input" name="itinerary" id="itinerary" required="required"  readonly="true">
                                            <?= $itinerary ?>
                                        </textarea> 
                                    </div>

                                    <div class="error">
                                        <?= form_error('itinerary')?>
                                    </div>

                                    <div class="form-field">
                                        <label for="reference" class="control-label">Reference (if any)</label>
                                        <input type="text" name="reference" id="reference" class="field-input" value="<?= $reference ?>" readonly="true">
                                            
                                    </div>
                                    


                                    <div class="radio-checkbox">
                                        <input type="checkbox" class="checkbox" id="accept" onchange="notMe();" name="accept" readonly="true" >
                                        <label for="accept">I am not staying at the hotel. I am making this booking for someone else.</label>
                                    </div>

                                    <div id="extra">
                                        <div class="form-field">
                                            <label for="travellerName" class="control-label">Name of Traveller (Any One)</label>
                                            <input type="text" name="travellerName" id="travellerName" class="field-input" value="<?= $travellerName ?>" readonly="true"> 
                                        </div>

                                        <div class="error">
                                            <?= form_error('travellerName')?>
                                        </div>

                                        <div class="form-field">
                                            <label for="travellerEmail" class="control-label">Email of Above Mentioned Traveller</label>
                                            <input type="email" name="travellerEmail" class="field-input" id="travellerEmail" value="<?= $travellerEmail ?>" readonly="true">
                                        </div>

                                        <div class="error">
                                            <?= form_error('travellerEmail')?>
                                    </div>

                                        <div class="form-field">
                                            <label for="travellerPhone" class="control-label">
                                                Phone Number of Traveller
                                            </label>
                                            <input type="text" name="travellerPhone" id="travellerPhone" class="field-input" maxlength="10" value="<?= $travellerPhone ?>" readonly="true">
                                        </div>

                                        <div class="error">
                                            <?= form_error('travellerEmail')?>
                                        </div>

                                    </div> 

                            </div>        
                                    <div class="col-sm-5 col-md-5 col-lg-5 col-xs-5 cart-number" >   
                                                <br><br><br><br><br><br>
                                            <h2 style="display: inline-block;">Cost of Your Selected Tour  : </h2>
                                         <span style="color:green"> &nbsp;&nbsp; <h4 style="display: inline-block;">&#8377;</h4> 
                                        <h3 style="display: inline-block;">5000</h3></span>

                                        <h3>Billing details:</h3>

                                        <table class="table table-compressed table-bordered table-hover">
                                            <tr>
                                                <th>Bus Charges</th>

                                                <td>&#8377;1000</td>
                                            </tr>   

                                            <tr>
                                                <th>Flight Charges</th>
                                                <td>&#8377;2000</td>
                                            </tr>

                                            <tr>
                                                <th>Hotel Charges/ night</th>
                                                <td>&#8377;1000</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>  
   
                                        <br><br>
                                <div class="col-md-6 xs-6 sm-6 lg-6" style="margin-left: 30%">        
                                    <div class="g-recaptcha" data-sitekey="6LfXoxgUAAAAADJeG8DlRHk9278SsMWtmYY-xFqX"></div>
                                        <br><br>
                               
                                </div>                          
                                
                                                 
                                    <div class="col-md-12" style="margin-left: 0%">
                                        <p>By clicking on the button below to complete this booking I acknowledge that I have read and accept the <span>rules &amp; restrictions, terms &amp; conditions</span> and <span>privacy policy</span>.</p>

                                            <br><br>
                                    </div>
                                    
                                    <div class = "col-md-6 col-lg-6 col-xs-6 col-sm-6" style="margin-left: 30%">        
                                        <input type = "submit" class="awe-btn awe-btn-1 awe-btn-lager" name="editInfo" value="Edit Information"> &nbsp;&nbsp;
                                            <h3 style="display: inline-block;">or</h3> &nbsp;&nbsp;
                                        <input type="submit" name="proceed" class="awe-btn awe-btn-1 awe-btn-lager" value="Proceed">
                                    </div>
                                </div>        

                                </form>
                            </div>        
                    </div>
                </div>
            </div>
        </div>
        </div>

     <script src="../js/ckeditor/ckeditor.js"></script>   

        <script>
                CKEDITOR.replace( 'itinerary' );
        </script>
        <script>
            function selectPackage(package)  {
                var tourPackage = package.value;


                var destination = document.getElementById("destination");

                if(tourPackage == 'pilgrim')  {

                    destination.innerHTML = "<option>Select Destination from this package</option>"
                    +"<option value='Do Dham Yatra'>Do Dham Yatra</option>"
                    +"<br>"
                    +"<option value='Hemkund Sahib Yatra'>Hemkund Sahib Yatra</option>"
                    +"<br>"
                    +"<option value='Nanda Devi Temple, Nainital'>Nanda Devi Temple, Nainital</option>"
                    +"<br>"
                    +"<option value='Golu Devta Temple, Ghorakhal, Nainital'> Golu Devta Temple, Ghorakhal, Nainital</option>"
                    +"<br>"
                    +"<option value='Kainchi Dham, Nainital'>Kainchi Dham, Nainital</option>"
                    +"<br>"
                    +"<option value='Advaita / Mayawati Ashram, Champawat'>Advaita / Mayawati Ashram, Champawat</option>"
                    +"<br>"
                    +"<option value='Nanakmatta Sahib'> Nanakmatta Sahib</option>"
                    +"<br>"
                    +"<option value='Purnagairi Shaktipeeth Temple, Tanakpur, Champawat'>Purnagairi Shaktipeeth Temple, Tanakpur, Champawat</option>"
                    +"<br>"
                    +"<option value='Golu Devta Temple, Chitai, Almora'>Golu Devta Temple, Chitai, Almora</option>"
                    +"<br>"
                    +"<option value='Jageshwar Dham, Almora'>Jageshwar Dham, Almora</option>"
                    +"<br>"
                    +"<option value='HaidaKhan Baba Temple'>HaidaKhan Baba Temple</option>"
                    +"<br>"
                    +"<option value='Baijnath Temple, Baijnath'>Baijnath Temple, Baijnath</option>"
                    +"<br>"
                    +"<option value='Bagnath temple, Bageshwar'>Bagnath temple, Bageshwar</option>"

                    
                }

                if(tourPackage == "honeymoon")  {
                    destination.innerHTML = "<option value='Kumaun Honeymoon Tour'>Kumaun Honeymoon Tour</option>"
                    +"<br>"
                    +"<option value='Nainital Honeymoon Tour'>Nainital Honeymoon Tour</option>"
                    
                }

                if(tourPackage == "trekking")  {
                     destination.innerHTML = "<option value='Devaria Tal and Chopta Trek'>Devaria Tal and Chopta Trek</option>"
                    +"<br>"
                    +"<option value='Valley Of Flowers Trek'>Valley Of Flowers Trek</option>"
                    +"<br>"
                    +"<option value='Roopkund Trek'>Roopkund Trek</option>"
                    +"<br>"
                    +"<option value='Bedni Bugyal Trek'> Bedni Bugyal Trek</option>"
                    +"<br>"
                    +"<option value='Milam Glacier Trek'>Milam Glacier Trek</option>"
                    +"<br>"
                    +"<option value='Pindari Glacier Trek'>Pindari Glacier Trek</option>"
                }
               /*else  {
                    destination.innerHTML = "<option value='full tour'>Full State Tour</option>"
               } */
               }

            

            function setItinerary(destination)  {
                selected = destination.value;
                itinerary = document.getElementById('itinerary')
                alert(itinerary.innerHTML)
                if(selected == "Do Dham Yatra" || selected == "Hemkund Sahib Yatra" || selected == "Nainital Honeymoon Tour" || selected == "Kumaun Honeymoon Tour")
                   {
                    
                    itinerary.innerHTML = "As Given in package itinerary";
                    alert('here')
                   }


            }

            function notMe() {
                var selectBox = document.getElementById('accept');
                var extraInfo = document.getElementById('extra');
                if(selectBox.checked)  
                    {
                        extraInfo.style.display = 'block';
                    }

                else  {
                    extraInfo.style.display = 'none';
                }    
                
            }
        </script>
    <script src="../js/library/jquery-1.11.0.min.js"></script>
    <script src="../js/library/pickaDate/picker.js"></script>
    <script src="../js/library/pickaDate/picker.date.js"></script>
    <script src="../js/library/pickaDate/legacy.js"></script>

    <script type="text/javascript">

        var $input = $( '.datepicker' ).pickadate({
            formatSubmit: 'yyyy/mm/dd',
            // min: [2015, 7, 14],
            container: '#container',
            // editable: true,
            closeOnSelect: false,
            closeOnClear: false,
        })

        var picker = $input.pickadate('picker')
        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });

    </script>


   <?php include "common/footer.php"; ?>


