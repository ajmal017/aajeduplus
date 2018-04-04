<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Register | AajEduPlus</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url(); ?>assets/template/images/favicon.ico" type="image/x-icon">
    <!-- Bootstrap Core Css -->
    <link href="<?= base_url(); ?>assets/template/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/template/css/login-soft.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
        window._site_url = '<?php echo site_url(); ?>';
</script>
<body class="login" ng-app="MyApp" ng-controller="MyController" style="background-color:#76889e;">
    <div class="logo">
        <h2 style="color: #eee;">Aaj<span style="color:#c51048;">Edu</span>Plus</h2>
    </div>
    <div class="content">
        <div class="login-form" id="registration_step1">
            <div class="body">                
                <h3 class="form-title">Register a new membership</h3>
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="r_username" placeholder="Username" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" ng-model="r_email" placeholder="Email Address" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" ng-model="r_mobile" placeholder="Mobile" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" ng-model="r_password" placeholder="Password" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm" ng-model="r_password1" placeholder="Confirm Password" />
                </div>

                <button class="btn btn-block btn-lg bg-pink waves-effect" type="button" ng-click="register('<?= $sponserUsername; ?>','<?= $placement; ?>')">SIGN UP</button>

                <div class="m-t-25 m-b--5 align-center">
                    <a href="<?= site_url(); ?>login">You already have a membership?</a>
                </div>
            </div>
        </div>

        <div class="card" id="registration_step2" style="display:none;">
            <div class="body">
                    <div class="form-group">
                        <input type="text" class="form-control" ng-model="otp" placeholder="Enter OTP" />
                    </div>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="button" ng-click="check_otp()">Submit</button>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="button" ng-click="resend_otp()">Resend OTP</button>
            </div>
        </div>
    </div>
    <!-- Large Size -->
    <div class="modal fade" id="error_log" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header bg-orange">
                    <h4 class="modal-title modal_msg" id="largeModalLabel">Errors</h4>
                </div>
                <div class="modal-body">
                    <span id="errors"></span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery Core Js -->
    <script src="<?= base_url(); ?>assets/template/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/angular.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/libs/functions.js"></script>
    <script src="<?= base_url(); ?>assets/js/ng/login_register.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url(); ?>assets/template/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.backstretch.min.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {     
       $.backstretch(["<?= imagePath('assets/template/images/wallpapers/1.jpg','',1100,0); ?>","<?= imagePath('assets/template/images/wallpapers/2.jpg','',1100,0); ?>"], {
          fade: 1000,
          duration: 8000
    }
);
});
</script>
</body>
</html>