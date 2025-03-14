<?php

	include 'inc/twig.php';
	ob_start();
?>

		<div class="">
			<div class="column column-1">

				<div class="shadow-box">

					<h1>Sample comparisons</h1>

					<h3>Wild-type vs. golden (gol) mutant.</h3>

					<figure class="left">
						<a href="compare.php?s[]=260&amp;s[]=261&amp;layout=vertical"><img src="images/comparison-wt-gol.png" width="215" height="129" alt="wild-type vs golden"></a>
					</figure>
					<p>Top: Adult wild-type (Connor)</p><p>Bottom: Adult <i>golden</i> (gol) mutant.</p>

				</div>


				<div class="shadow-box">

					<h3 style="clear:both">Wild-type vs. Huli hutu (hht) mutant</h3>

					<figure class="left">
						<a href="compare.php?s[]=264,1,382,172&amp;s[]=265,1,474,386&amp;layout=vertical"><img src="images/comparison-wt-hht.png" width="215" height="175" alt="wild-type vs huli hutu comparison"></a>
					</figure>
					<p>Mutant image (bottom) is of a 7dpf <i>huli hutu</i> (hht), ENU-generated mutation currently being fine mapped (in-house).  Normal image (top) is of a comparable 7dpf wild-type.</p>
					<ul style="list-style-position:inside">
						<li>hht causes striking architectural and cytologic changes in several organs
						<li>The eyes of a variable fraction of mutants are reduced in size
						<li>Cell types of different retinal layers are mixed together to varying degrees
						<li>The eye phenotype is detectable at 2dpf and can be mild to severe at 7dpf
						<li>Severe cytologic atypia is seen in the intestine, pancreas, liver, swim bladder, and pneumatic duct
						<li>This atypia includes a great variability in nuclear size and shape, frequent multinucleation, and architectural disorganization
					</ul>
					<p style="font-size:smaller">from Mohideen, et al "Histology-based screen for zebrafish mutants with abnormal cell differentiation" in Dev Dyn 228:414-423 2003.</p>

				</div>


				<div class="shadow-box">

					<h3 style="clear:both">H&amp;E stain vs. MicroCT</h3>
					<figure class="left">
						<a href="compare.php?s[]=65&amp;s[]=87&amp;layout=vertical"><img src="images/comparison-he-ct-sagittal-2.png" width="215" height="145" alt="histology vs microCT comparison"></a>
					</figure>

				</div>

				<div class="shadow-box">

					<h3 style="clear:both">3-Way Comparison of 60 dpf in MicroCT</h3>
					<figure class="left">
						<a href="compare.php?s[]=262&amp;s[]=267&amp;s[]=268&amp;layout=vertical"><img src="images/comparison-ct-3way.png" width="215" height="176" alt="microct 3-way comparison"></a>
					</figure>
					<p>Top: A screen-capture of part of a 3D model generated from these 1500 2D slices in a Volume Graphics software package known as VGStudio Max.</p>
					<p>Middle: One of 1500 digital, coronal 2D slices generated by applying the Feldkamp cone-beam reconstruction algorithm to these 600 x-rays.</p>
					<p>Bottom: One of 600 x-rays taken through 180&deg; of the head of an unstained, 60 dpf juvenile zebrafish (one x-ray every 0.3&deg;).</p>

				</div>

				<div class="shadow-box">

					<h3 style="clear:both">Normal vs. Tumor</h3>
					<figure class="left">
						<a href="compare.php?s[]=266&amp;s[]=244"><img src="images/comparison-tumor-3.png" width="215" height="148" alt="normal vs tumor comparison"></a>
					</figure>
					<p>Left: a healthy specimen</p>
					<p>Right: a specimen bearing a tumor on the right side of the section.  Age unknown but older than the other fish.</p>

				</div>
			</div>
		</div>

<?php
	// render view
	echo $twig->render('base.twig.html', array('page' => array('content' => ob_get_clean())));
