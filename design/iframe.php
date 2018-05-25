<?php
	/* ======================================================================
		Dependencies
	====================================================================== */
	// This file contains global variables used throughout StagedHomes.com
    // require_once($_SERVER["DOCUMENT_ROOT"] . "/assets/connections/global-variables.config.php");
	require_once("../assets/app_modules/authentication/Session.class.php");
	require_once("../assets/connections/paths.config.php");
	require_once("../assets/connections/database.config.php");
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="description" content="The World Standard in Staging Education">
	<meta name="author" content="Barb Schwarz, StagedHomes.com, Duane Leem">

	<title>Membership Subscription | StagedHomes.com</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Required <head> contents -->
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/partials/main.head.php"); ?>

	<!-- Corresponding Styles to Homepage -->
	<link href="../assets/the-project/css/pages.css" rel="stylesheet">
</head>

<body id="subscription" class="boxed pattern-1">
	<!-- Google Analytics -->
	<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/assets/partials/google-analytics.php"); ?>

	<!-- scrollToTop -->
	<!-- ================ -->
	<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>

	<!-- page wrapper start -->
	<!-- ================ -->
	<div class="page-wrapper">

		<!-- Main Header -->
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/partials/main.header.php"); ?>
        
        <!-- banner start -->
        <!-- ================ -->
        <div class="banner dark-translucent-bg" style="background-image:url('https://d2itdnqewolu1g.cloudfront.net/images/the-project/stagedhomes/ocean.jpg'); background-position: 50% 27%; min-height: 0;">
            <!-- breadcrumb start -->
            <!-- ================ -->
            <div class="breadcrumb-container">
            <div class="container">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home pr-2"></i> <a class="link-dark" href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a class="link-dark" href="index.html">University</a></li>
                <li class="breadcrumb-item active">Membership Subscription</li>
                </ol>
            </div>
            </div>
            <!-- breadcrumb end -->
            <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-lg-offset-2 col-lg-8 text-center pv-20">
                    <h2 class="title logo-font object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100"><span class="text-default">Membership</span> Renewal</h2>
                    <div class="separator object-non-visible mt-10" data-animation-effect="fadeIn" data-effect-delay="100"></div>
                    <p class="text-center lead object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">ASP<sup>®</sup> Renewals - Includes your IAHSP<sup>®</sup> Membership for Free</p>
                </div>
            </div>
            </div>
        </div>
        <!-- banner end -->

        <div class="container space-top-40 space-bottom-40">
            <div class="row">
                <div class="col-md-offset-1 col-md-10">
                    <!-- IFrame: Angular App -->
                    <iframe src="./dist/index.html"></iframe>
                </div>
            </div>
        </div>

		<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
		<!-- ================ -->
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/partials/main.footer.php"); ?>
		<!-- footer end -->

	</div>
	<!-- page-wrapper end -->

	<!-- JavaScript files placed at the end of the document so the pages load faster -->
	<!-- ================================================== -->
	<!-- Jquery and Bootstap core js files -->
	<?php include($_SERVER["DOCUMENT_ROOT"] . "/assets/partials/main.end-scripts.php"); ?>
	<script>
		document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')
	</script>
</body>

</html>