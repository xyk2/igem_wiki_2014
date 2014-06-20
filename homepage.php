<!DOCTYPE html>
<html>

<head>
	<title>TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

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
				<div id="slides" class='col-lg-12 full'>
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
	<script>NUM_PARTICLES = 1000;</script>
	<script src='./static/field_homepage.js'></script>
	<script>sketchItem.start();</script>
</body>

</html>
