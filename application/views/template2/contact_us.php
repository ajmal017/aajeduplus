<?php $this->view('template2/includes/header'); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image: url(<?= imagePath('assets/template2/images/background/4.jpg','',1200,0); ?>);">
        <div class="auto-container">
            <h1>Contact</h1>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
            
                <!--Form Column-->
                <div class="column form-column col-md-7 col-sm-12 col-xs-12">
                    <div class="default-title"><h3>Send Us Message</h3><div class="separator"></div></div>
                    <div class="contact-form default-form">
                        <div class="row clearfix">

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="group-inner">
                                    <input type="text" ng-model="contact_name" placeholder="Name *">
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                <div class="group-inner">
                                    <input type="text" ng-model="contact_email" placeholder="Email *">
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <input type="text" ng-model="contact_mobile" placeholder="Mobile">
                                </div>
                            </div>

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="group-inner">
                                    <textarea ng-model="contact_enquiry" placeholder="Enter yout query *"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <button type="button" class="theme-btn btn-style-one" ng-click="save_contact();">SUBMIT </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="column info-column col-md-5 col-sm-12 col-xs-12">
                
                    <div class="inner-box">
                        <!--Default Title-->
                        <div class="default-title"><h3>Contact Us</h3><div class="separator"></div></div>
                        <!--Contact Info-->
                        <div class="contact-info">
                            <ul>
                                <li style="line-height: 25px;"><span class="icon flaticon-placeholder"></span>107,AAJ EduPlus Consulatancy Pvt. Ltd.,Vardhman Shopping Center,above Tungareshwar Sweets,Opp. Vasai Railway Stn, Vasai (W) </li>
                                <li><span class="icon flaticon-close-envelope"></span>info@aajeduplus.com</li>
                                <li><span class="icon flaticon-telephone"></span>+91 9970236208</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
<?php $this->view('template2/includes/footer'); ?>