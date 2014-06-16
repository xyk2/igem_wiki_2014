<!DOCTYPE html>
<html>

<head>
	<title>TAS Taipei iGEM Wiki</title>
	<link rel="shortcut icon" href="static\LogoNoBackShrunk.png">

	<link rel="stylesheet" type="text/css" href="http://2014hs.igem.org/Team:TAS_Taipei/css/bootstrap.min.css?action=raw&ctype=text/css">
	<link rel="stylesheet" type="text/css" href="http://2014hs.igem.org/Team:TAS_Taipei/css/todc-bootstrap.min.css?action=raw&ctype=text/css">

	<link rel="stylesheet/less" type='css/less' href="./style.less">
	<link rel="stylesheet/less" type='css/less' href="./homepage.less">
	<script>localStorage.clear();</script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.0.4/jquery.imagesloaded.min.js'></script>
	<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<script src="http://iasasgolf2014.com/assets/jquery.slides.min.js"></script>
	<script>
		$(function () {
	        $("#slides").slidesjs({
	        width: 940,
	        height: 500,
	            play: {
	                active: false,
	                effect: "slide",
	                interval: 5000,
	                auto: true,
	                swap: false,
	                pauseOnHover: false,
	                restartDelay: 2500
	            },
	            navigation: false
	        })
		});
	</script>
</head>


<body>
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>




		<div id='bodycontainer' class='row' style=''>
				<div id="slides" class='col-lg-12'>
					<div class="heroImageContainer slidesjs-slide" style="background-image: url(photos/DSC01696.jpg);">
						<h3 class="bottomleft red">SOME TEXT<span></span></h3>
					</div>
					<div class="heroImageContainer slidesjs-slide" style="background-image: url(photos/IMG_2112.jpg);">
						<h3 class="bottomright green">MORE TEXT<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, doloremque, praesentium quod accusamus quasi nulla incidunt aliquid aut corporis recusandae numquam hic culpa alias debitis consequatur! Blanditiis, minus tenetur reprehenderit.</span></h3>
					</div>
					<div class="heroImageContainer slidesjs-slide" style="background-image: url(photos/IMG_2130.jpg);">
						<h3 class="bottomright blue">AND MORE TEXT...<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, doloremque, praesentium quod accusamus quasi nulla incidunt aliquid aut corporis recusandae numquam hic culpa alias debitis consequatur! Blanditiis, minus tenetur reprehenderit.</span></h3>
					</div>
				</div>

		</div>	
		
		<?php include("./footer.php"); ?>
	</div>



	<div class="canvas-container"></div>

	<script src='http://rawgit.com/xyk2/tas_igem2014/master/static/libs.min.js'></script>
	<script>NUM_PARTICLES = 1000;</script>
	<script src='./static/field_homepage.js'></script>
	<script>
		sketchItem.start();
	</script>
</body>

</html>
