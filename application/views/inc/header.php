<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>eRestaurant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<!-- header  -->
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/headerstyle.css"> <!-- Resource style -->
<script src="<?php echo base_url(); ?>resource/js/modernizr.js"></script> <!-- Modernizr -->
<script src="<?php echo base_url(); ?>resource/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url(); ?>resource/js/main.js"></script> <!-- Resource jQuery -->
<!-- //header -->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/easy-responsive-tabs.css"><!-- easy responsive tabs css -->

	<!-- <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all"> --><!-- date-picker css-->

<!-- gallery -->
	<link href="<?php echo base_url(); ?>resource/css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->

<!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/style3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resource/css/normalize.css" />
<!-- banner text effect css files -->

	
<!-- default css files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/copy.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url(); ?>resource/css/font-awesome.min.css" />
<!-- default css files -->
	
	<!-- tab -->
	<link href="<?php echo base_url(); ?>resource/tab_style.css" rel="stylesheet">
	<!-- tab -->
<!--web font-->
	

<!--//web font-->
	
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

</head>

<!-- Body -->
<body>
	<!-- Header -->
	<header>
		<nav class="cd-stretchy-nav">
			<a class="cd-nav-trigger" href="#0">
				<span aria-hidden="true"></span>
			</a>

			<ul>
				<li><a href="<?php echo base_url(); ?>" class="active"><span>Home</span></a></li>
				<li><a href="#menu"><span>MENU</span></a></li>
				<li><a href="#gallery"><span>GALLERY</span></a></li>
				<li><a href="#services"><span>SERVICES </span></a></li>
				<li><a href="#contact"><span>CONTACT</span></a></li>
			</ul>
			<span aria-hidden="true" class="stretchy-nav-bg"></span>
		</nav>	
	</header>
	<!-- //Header -->
	<!-- banner -->
		<div class="banner jarallax">
			<div class="agileinfo-dot">
				<div class="header-center">
					<div class="logo grid__item">
						<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>resource/images/logo.png"></a>
					</div>
				</div>
				<div class="agileits-banner-info">
					<h3>welcome to <span style="color: red">E Restaurant</span></h3>
		
						<h2 class="rw-sentence">
						<span>Food tastes better, eat with your </span>
						<div class="rw-words rw-words-1">
							<span>Family</span>
							<span>Friends</span>
							<span>happiness</span>
							<span>Love</span>
							<span>Gratefulness</span>
							<span>happiness</span>
						</div>
						</h2>					
						<a href="#" data-toggle="modal" data-target="#myModal2">Book Your Table</a>
				</div>
			</div>
		</div>

		<!-- //banner -->