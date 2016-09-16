<!DOCTYPE html>
<html>
<head>
<title>Bill Gates Shool & American Eagles Academy</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Kids School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Peralta' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				<div class="logo-search">
					<div class="logo">
						<h1><a href="index.html">Bill<span class="color"> </span><span class="color1"></span><span class="color2">Gates</span> <span>School</span> <i>An Integral Education for a future of Success</i></a></h1>
					</div>
					<!--div class="search">
						<form>
							<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">
							<input type="submit" value=" " >
						</form>
					</div-->
					<div class="clearfix"> </div>
				</div>
			<!-- //header -->
			
			@include('home/navbar')
			
			@include('home/banner')
			
			@include('home/history')

			</div>
		</div>
	</div>
<!-- //body -->

@include('home/footer')

<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>