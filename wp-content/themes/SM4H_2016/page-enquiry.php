<?php /* Template Name : Enquiry Page */ ?>

<?php get_header(); ?>
    
    <div id="site-banner">
        <div class="banner-highlight">
            <h2>Enquire About Our Motorhomes</h2>
            <h3>Subtitle Line</h3>
        </div>
    </div>
    <!-- End #site-banner -->

    <div id="site-content">
        <section class="container">

            <div class="content-main col-md-9">
 
                <form action="<?php bloginfo('template_directory');?>/submit_form.php" method="POST" accept-charset="utf-8" class="" id="enquiry_form" onsubmit="return validate_form();">

                    <div class="form-section" id="personal-details">

                        <div class="form-section-title">
                            Personal Details
                            <span class="complete-section">Section Complete <span class="glyphicon glyphicon-ok"></span></span>
                            <span class="incomplete-section">Section Incomplete <span class="glyphicon glyphicon-ok"></span></span>
                        </div>

                        <div class="form-section-subtitle">
                            Basic Information
                        </div> <!-- Close subtitle -->

                        <div class="form-section-inputs basic">
                            <!-- First Name -->
                            <div class="input-group col-sm-6" id="name-field">
                                <input type="text" name="name" class="form-control" id="enquiry-name" placeholder="First Name" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                            <!-- Second Name -->
                            <div class="input-group col-sm-6" id="surname-field">
                                <input type="text" name="surname" class="form-control" id="enquiry-surname" placeholder="Surname" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                            <!-- email -->
                            <div class="input-group col-sm-6" id="email-field">
                                <input type="text" name="email" class="form-control" id="enquiry-email" placeholder="Email Address" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                            <!-- telephone -->
                            <div class="input-group col-sm-6" id="telephone-field">
                                <input type="text" name="telephone" class="form-control" id="enquiry-telephone" placeholder="Contact Telephone" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>

                        </div> <!-- Close inputs -->

                        <div class="form-section-subtitle">
                            Home Address
                        </div> <!-- Close subtitle -->

                        <div class="form-section-inputs">
                            <!-- Address -->
                            <div class="input-group col-sm-6" id="address-field">
                                <input type="text" name="address" class="form-control" id="enquiry-address" placeholder="First line of Home Address" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                            <!-- Postcode -->
                            <div class="input-group clear col-sm-6" id="postcode-field">
                                <input type="text" name="postcode" class="form-control" id="enquiry-postcode" placeholder="Postcode" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                            <!-- country -->
                            <div class="input-group col-sm-6" id="country-field">
                                <input type="text" name="country" class="form-control" id="enquiry-country" placeholder="Country" onblur="check_section1()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                        </div> <!-- Close inputs -->
                        
                    </div> <!-- Close form-section -->

                    <div class="form-section" id="hire-details">

                        <div class="form-section-title">
                            Hire Details
                            <span class="complete-section">Section Complete <span class="glyphicon glyphicon-ok"></span></span>
                            <span class="incomplete-section">Section Incomplete <span class="glyphicon glyphicon-ok"></span></span>
                        </div>

                        <div class="form-section-inputs">
                            <!-- start -->
                            <div class="input-group col-sm-6" id="start-field">
                                <input type="text" name="start" class="form-control" id="enquiry-start" placeholder="Start Date (dd-mm-yy)" onblur="check_section2()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                            <!-- end -->
                            <div class="input-group col-sm-6" id="end-field">
                                <input type="text" name="end" class="form-control" id="enquiry-end" placeholder="End Date (dd-mm-yy)" onblur="check_section2()">
                                <span class="verified">
                                    <span class="glyphicon glyphicon-ok"></span>
                                </span>
                                <span class="error">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </span>
                            </div>
                        </div> <!-- Close inputs -->

                        <div class="form-section-inputs">
                            <!-- adults -->
                            <div class="input-group col-sm-6" id="adults-field">
                                <label for="adults">Number of Adults in Party</label>
                                <select name="adults" id="enquiry-adults" form="enquiry_form">
                                    <option value="1" selected="">1 Adult</option>
                                    <option value="2">2 Adults</option>
                                    <option value="3">3 Adults</option>
                                    <option value="4">4 Adults</option>
                                    <option value="5">5 Adults</option>
                                    <option value="6">6 Adults</option>
                                </select>
                            </div>

                            <!-- children -->
                            <div class="input-group col-sm-6" id="children-field">
                                <label for="children">Number of Children in Party</label>
                                <select name="children" id="enquiry-children" form="enquiry_form">
                                <option value="0" selected="">N/A</option>
                                    <option value="1">1 Child</option>
                                    <option value="2">2 Children</option>
                                    <option value="3">3 Children</option>
                                    <option value="4">4 Children</option>
                                    <option value="5">5 Children</option>
                                    <option value="6">6 Children</option>
                                </select>
                            </div>
                            <!-- purpose -->
                            <div class="input-group col-sm-6" id="purpose-field">
                                <label for="purpose" id="purpose-label">Travel Purpose</label>
                                <select name="purpose" id="enquiry-purpose" form="enquiry_form">
                                <option value="0" selected="">Please Select...</option>
                                    <option value="Touring">Touring Holiday</option>
                                    <option value="Sporting">Sporting Event</option>
                                    <option value="Festival">Festival</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- area -->
                            <div class="input-group col-sm-6" id="area-field">
                                <label for="area" id="area-label">Area of Travel</label>
                                <select name="area" id="enquiry-area" form="enquiry_form">
                                <option value="0" selected="">Please Select...</option>
                                    <option value="Scotland">Scotland</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="IrelandNI">Ireland (NI)</option>
                                    <option value="IrelandROI">Ireland (ROI)</option>
                                </select>
                            </div>
                        </div>  

                    </div> <!-- Close form-section -->

                    <div class="form-section" id="extra-details">

                        <div class="form-section-title">
                            Extra Requirements
                            <span class="complete-section">Section Complete <span class="glyphicon glyphicon-ok"></span></span>
                            <span class="incomplete-section">Section Incomplete <span class="glyphicon glyphicon-ok"></span></span>
                        </div>

                        <div class="form-section-inputs">
                            <div class="FormLabelRadio col-sm-6">Transport Collection?</div>
                            <div class="FormFieldRadio col-sm-6 row">
                                <div class="radio_yes col-xs-6">Yes</div>
                                <div class="radio_no selected col-xs-6">No</div>
                            </div>

                            <!-- airport -->
                            <div class="input-group col-sm-6 clear" id="airport-field">
                                <label for="airport">Airport Collection</label>
                                <select name="enquiry-airport" id="enquiry-airport" form="enquiry_form" onchange="blankRail()">
                                    <option value="None" selected="">None</option>
                                    <option value="GlasgowINT">Glasgow International</option>
                                    <option value="GlasgowPRE">Glasgow Prestwick</option>
                                    <option value="Edinburgh">Edinburgh</option>
                                </select>
                            </div>

                            <!-- railway -->
                            <div class="input-group col-sm-6" id="railway-field">
                                <label for="railway">Rail Station Collection</label>
                                <select name="enquiry-railway" id="enquiry-railway" form="enquiry_form" onchange="blankAir()">
                                <option value="None" selected="">None</option>
                                    <option value="Glasgow">Glasgow Central</option>
                                    <option value="Queen Stree">Glasgow Queen Street</option>
                                    <option value="Local">Local: Whitecraigs / Patterton</option>
                                </select>
                            </div>

                            <!-- child-seats -->
                            <div class="input-group col-sm-6 clear" id="child-seats-field">
                                <label for="child-seats">Number of Child Seats Required</label>
                                <select name="child-seats" id="enquiry-child-seats" form="enquiry_form">
                                    <option value="0" selected="">None</option>
                                    <option value="1">1 Child Seat</option>
                                    <option value="2">2 Child Seats</option>
                                    <option value="3">3 Child Seats</option>
                                    <option value="4">4 Child Seats</option>
                                </select>
                            </div>

                            <!-- booster-seats -->
                            <div class="input-group col-sm-6" id="booster-seats-field">
                                <label for="booster-seats">Number of Booster Seats Required</label>
                                <select name="booster-seats" id="enquiry-booster-seats" form="enquiry_form">
                                    <option value="0" selected="">None</option>
                                    <option value="1">1 Booster Seat</option>
                                    <option value="2">2 Booster Seats</option>
                                    <option value="3">3 Booster Seats</option>
                                    <option value="4">4 Booster Seats</option>
                                </select>
                            </div>

                            

                            <!-- bikes -->
                            <div class="input-group col-sm-6" id="bikes-field">
                                <label for="bikes">Number of Adult Bikes</label>
                                <select name="bikes" id="enquiry-bikes" form="enquiry_form">
                                <option value="0" selected="">None</option>
                                    <option value="1">1 Bike</option>
                                    <option value="2">2 Bikes</option>
                                    <option value="3">3 Bikes</option>
                                    <option value="4">4 Bikes</option>
                                </select>
                            </div>

                            <!-- generator -->
                            <div class="input-group col-sm-6" id="generator-field">
                                <label for="generator" id="generator-label">Do you require a Generator?</label>
                                <select name="generator" id="enquiry-generator" form="enquiry_form">
                                <option value="No" selected="">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div> 
                        </div> <!-- Close inputs -->

                    </div> <!-- Close form-section -->

                    <div class="form-section" id="other-details">

                        <div class="form-section-title">
                            Other
                        </div>

                        <div class="form-section-inputs">

                            <!-- contact-preference -->
                            <div class="input-group col-sm-6" id="contact-preference-field">
                                <label for="contact-preference" id="contact-preference-label"> Please contact me by...</label>
                                <select name="contact-preference" id="enquiry-contact-preference" form="enquiry_form">
                                <option value="Phone" selected="">Phone</option>
                                    <option value="Email">Email</option>
                                </select>
                            </div> 

                        </div> <!-- Close inputs -->

                    </div> <!-- Close form-section -->

                    <div class="submit-section" id="SubmitDiv">
                        <input type="submit" id="SubmitBtn">
                        <span class="submit-errors">Oops, looks like some errors on this page</span>
                    </div>


                </form>

            </div>
            <div class="content-aside col-md-3">
                <div class="aside-module">
                    <h3>Vehicle Damage Excess Insurance</h3>
                    <p>Insure your Vehicle Damage Excess with Questor Insurance Services Ltd</p>
                    <a href="/questor-excess-insurance/">Find out more</a>
                </div>
                <div class="aside-module">
                    <h3>Terms &amp; Conditions</h3>
                    <p>Click below to see our full list of terms and conditions</p>
                    <a href="/terms-and-conditions/">Find out more</a>
                </div>
            </div>
            
        </section>

    </div>
    <!-- End #site-content -->

    

<?php get_footer(); ?>