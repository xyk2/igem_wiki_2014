<!DOCTYPE html>
<html>

<head>
	<title>Research - TAS Taipei iGEM Wiki</title>
	<link rel="shortcut icon" href="static\LogoNoBackShrunk.png">

	<link rel="stylesheet" href="http://rawgithub.com/xyk2/tas_igem2014/master/todc-bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://rawgithub.com/xyk2/tas_igem2014/master/todc-bootstrap/css/todc-bootstrap.min.css">

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



			<div id='bodycontainer' class='row'>
				<div class="col-lg-12">
					<div class="row">
						<div class='col-lg-12'>
							<h1>Human Practice</h1>
						</div>
					</div>
					<div class="row">
						<div class='col-lg-8'>
							<p>Human practice is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea corporis nemo, iure beatae rerum dolores ducimus necessitatibus, adipisci alias ratione, molestias libero inventore error, ipsa neque et fugit. Ratione libero dolor nulla praesentium autem provident enim quis, dolores quo itaque commodi facilis deserunt quibusdam iusto excepturi accusantium ipsam animi. Perferendis.</p>
						</div>
					</div>
					<div class="row">
						<div class='col-lg-2' style=''>
							<div class='igem_button'>
								<img src="buttons/Senior Citizen Interviews.png">
								<h2>Senior Interviews</h2>
							</div>
						</div>
						<div class='col-lg-2'>
							<div><img src="buttons/Senior Citizen Interviews.png" alt=""></div>
						</div>
						<div class='col-lg-2'>
							<div><img src="buttons/Senior Citizen Interviews.png" alt=""></div>
						</div>
						<div class='col-lg-2'>
							<div><img src="buttons/Senior Citizen Interviews.png" alt=""></div>
						</div>
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
