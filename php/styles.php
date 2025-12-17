        <!-- CSS
        ================================================== -->
        <!-- Base + Vendors CSS -->
        <!--        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" href="<?php // echo site_url(); ?>media/css/fonts/font-awesome/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/all.min_v1.css">
        
        <!--
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/bootstrap-social.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/fonts/entypo/css/entypo.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/vendor/owl-carousel/owl.carousel.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/vendor/owl-carousel/owl.theme.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/vendor/magnific-popup/magnific-popup.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/vendor/flexslider/flexslider.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/vendor/job-manager/frontend.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/vendor/select2/css/select2.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/theme-default.min.css" media="screen">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/material.deep_purple-indigo.min.css" />
        <link href="<?php echo site_url(); ?>media/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        
        <link href="<?php echo site_url(); ?>media/css/multiselect/jquery.multiselect.css" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url(); ?>media/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url(); ?>media/css/bootstrap-tokenfield.css" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url(); ?>media/css/menu.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>media/css/slider.min.css">

        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/theme.css?ver=8">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/theme-elements.css">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/animate.min.css">

        <link rel="stylesheet" href="<?php echo site_url(); ?>media/crop/cropbox.css">

        <link rel="stylesheet" href="<?php echo site_url(); ?>media/jquery-ui.css">
        
        <link rel="stylesheet" href="<?php echo site_url();?>media/css/style.css?ver=1.2">
        <link rel="stylesheet" href="<?php echo site_url(); ?>media/css/responsive.css?ver=1.2">
        <link rel="stylesheet" href="<?php echo site_url();?>media/myanmarfonts/mm.css">
        -->

<!--        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/theme-default.min.css" rel="stylesheet" type="text/css" />-->

        <!--- Material -->
        <!--  <script defer src="https://code.getmdl.io/1.1.0/material.min.js"></script> -->
        <!-- multiselect check -->
        <script defer src="<?php echo site_url(); ?>media/js/material.min.js"></script><!--multiselect check-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!--        <link rel="stylesheet" href="https://code.getmdl.io/1.1.0/material.deep_purple-indigo.min.css" />-->
<!--        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">-->


        <!-- Head Libs -->
        <script src="<?php echo site_url(); ?>media/vendor/modernizr.js"></script>
<!--        <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">-->
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="<?php echo site_url(); ?>media/images/favicons/favicon.ico">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo site_url(); ?>media/images/favicons/favicon-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo site_url(); ?>media/images/favicons/favicon-152.png">
        <!-- Last Style Overide -->

        <script  src="<?php echo site_url() ?>media/js/jquery-1.11.2.min.js"></script>
        <script src="<?php echo site_url(); ?>media/jquery-ui.js"></script>        
        <script src="<?php echo site_url(); ?>media/js/jquery.cropbox.js"></script>
        <script src="<?php echo site_url(); ?>media/vendor/jquery.validate.js"></script>
        <script  src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>

        <?php if( $this->uri->segment(2) == 'register-detail' ): ?>
             <style>
                 .stepwizard-step p {
                 margin-top: 35px;
                 }
                 .step h3 {
                 margin-top: 65px;
                 }
                 .stepwizard-row {
                 display: table-row;
                 }
                 .stepwizard {
                 display: table;
                 width: 100%;
                 position: relative;
                 }
                 .stepwizard-step button[disabled] {
                 opacity: 1 !important;
                 filter: alpha(opacity=100) !important;
                 }
                 .stepwizard-row:before {
                 top: 70px;
                 bottom: 0;
                 position: absolute;
                 content: " ";
                 width: 100%;
                 height: 2px;
                 background-color: red;
                 z-order: 0;
                 }
                 .stepwizard-step {
                 display: table-cell;
                 text-align: center;
                 position: relative;
                 }
                 .btn-circle {
                 width: 40px;
                 height: 40px;
                 text-align: center;
                 padding: 8px 0;
                 font-size: 16px;
                 line-height: 1.428571429;
                 border-radius: 30px;
                 }.js_dp_wrapper .ui-datepicker-trigger{position:absolute;right:25px;}.padding-top-5 #optRadio21{position: absolute; top: 13px;}.fa-plus{cursor:pointer;}
              </style>
            <?php endif; ?>

        <style type="text/css">
            @media only screen and (max-width:680px) {
                .header_container{
                    position: fixed;
                    margin-bottom: 102px;
                    display: block;
                    width: 100%;
                }

                .flexslider{
                    padding-top: 110px;
                }

                .frontpage .page-content{
                }

                .inside-page .page-content,
                .employer-page .page-content,
                .jobseeker-page .page-content{
                    padding-top: 120px;
                }
            }
        </style>