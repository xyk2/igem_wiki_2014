<!DOCTYPE html>
<html>

<head>
	<title>Safety - TAS Taipei iGEM Wiki</title>
	<?php include("./head.php"); ?>

</head>


<body data-spy="scroll" data-target="#category_navbar">
	<div class="container" style='z-index:10;position:relative;'>
		<?php include("./navigation.php"); ?>

			<div id='bodycontainer' class='row'>
				<div class="col-lg-3" style='padding-right:0;'>
					<div id="category_navbar">
						<ul class="nav nav-list" data-spy="affix" data-offset-top="150" style='-webkit-transform: translateZ(0);width:260px;' >
						    <li><a href="#research">Background</a></li>
						    <ul>
						    	<li><a href="#senior_interviews">Cell Replication Process</a></li>
						    	<li><a href="#yolo_survey">Telomeres</a></li>
						    	<li><a href="#guest_lectures">Telomerase</a></li>
						    </ul>							    
						    <li><a href="#outreach">Telomere Extension</a></li>
						    <ul>
						    	<li><a href="#public_awareness">Aim and Motivation</a></li>
						    	<li><a href="#syn_bio_education">Purpose</a></li>
						    	<li><a href="#tutorialid">Experimental Design</a></li>
						    </ul>							    
						    <li><a href="#entertainment">Results</a></li>
						    <ul>
						    	<li><a href="#tutorialid">c-Myc Cloning</a></li>
						    	<li><a href="#tutorialid">hTERT promoter cloning</a></li>
						    	<li><a href="#tutorialid">Discussion</a></li>
						    	<li><a href="#tutorialid">Modeling Specifics</a></li>
						    	<li><a href="#tutorialid">Future Work</a></li>
						    </ul>	
						    <li><a href="#entertainment">Circuit Regulation</a></li>
						    <ul>
						    	<li><a href="#tutorialid">Aim and Motivation</a></li>
						    	<li><a href="#tutorialid">Three Component Oscillator</a></li>
						    	<li><a href="#tutorialid">Repressor efficacy testing</a></li>
						    </ul>	
						</ul>
					</div>


				</div>

				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-12">
							<h1>Project</h1>
							<p>Telomeres are repeating sequences of TTAGGG nucleotides at the ends of somatic cell chromosomes. These sequences protect cellular genomes from harmful effects associated with chromosome shortening during cell replication. Due to the finite length of telomeres, telomere shortening is known to be a primary contributor to cellular senescence and cell death. To allow human somatic cells to replicate indefinitely, we have engineered a biological circuit with three primary components to regulate telomere length. (1) Expression of the reverse transcriptase enzyme telomerase to extend telomeres (2) Regulation of the amount of telomerase expressed using an oscillatory mechanism (3) Operation of a safety device to prevent possible cancerogenesis. Through the cooperation of these three mechanisms, and the tools of synthetic biology, lifespan extension is possible.</p>
						</div>
					</div>

					<div class="row" id='research'>
						<div class="col-lg-12">
							<h2>Background</h2>
							<h4>The Cell Replication Process</h4>
							<p>During the cell replication process, DNA condenses into chromosomes, which are tightly packed structures of nucleic acid and protein that allow for more efficient DNA replication. Primase enzymes attach RNA primers onto these condensed chromosomes, which signal the DNA polymerase to attach complementary base pairs to the template sense strand, thereby replicating DNA. However, the DNA polymerase enzyme can only replicate from the 5' to 3' end of the complementary strand. This means that for the DNA strand that stretches from 3' to 5', primase only has to attach an RNA primer once, before the DNA polymerase can continuously copy DNA. However, on the other template strand named the "lagging strand", which stretches from 5' to 3', it is necessary for primase to periodically attach primers to the template strand to allow DNA polymerase to replicate DNA. This forms Okazaki fragments, which are short, newly synthesized DNA strands on the lagging strands, which eventually are ligated together by the enzyme ligase.</p>
							<p>The lagging strand presents a problem for replication at the end of the chromosome, since there is no RNA primer to allow DNA polymerase to synthesize DNA. Thus, during replication, DNA on the newly synthesized lagging strand is lost, causing the chromosome to progressively shorten.</p>
							<h4>Telomeres and Telomerase</h4>
							<p>The ends of organisms’ chromosomes contain repeating sequences of nucleotides called ‘telomeres’. Each telomere repeat is usually five to ten base pairs long, depending on the organism, and in total telomeres usually range from six to fifteen kilo base pairs. The purpose of telomeres is to serve as buffers against inevitable chromosome shortening during cell replication, so that no important genetic information is lost, and to prevent random telomere fusions.</p>
							<p>However, after the cell replication process causes the telomeres to be shortened to four to six kilo base pairs, the cell triggers apoptosis. The reason for this cellular suicide is to prevent cellular malfunction, should further chromosome shortening affect the genetic information essential to cellular operation. Leonard Hayflick, at the Wistar institute of Philadelphia, named the “Hayflick limit” as this set number of times a cell is able to divide before telomeres are reduced to so short a size as to trigger self-induced apoptosis.</p>
							<p>One dominant theory of aging is that the length of telomeres dictates the rate at which cells age and die. More specifically, if aging is perceived as the time at which cells start to die and thus cause organ malfunction, then telomere length would regulate aging as longer telomeres allow a longer time before cell self-induced apoptosis.</p>
						</div>
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
