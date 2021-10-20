<!--==========================-->
<!--=         Banner         =-->
<!--==========================-->
<section id="page-banner">
	<div class="banner-top"
		data-bg-image="<?=base_url('media/background/about.jpg')?>">
		<div class="container">
			<div class="page-banner-title">
				<h1 class="title">Photo Gallery</h1>
			</div>
			<!-- /.page-banner-title -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.banner-top -->
	<div class="breadcrumb-wrapper">
		<div class="container">
			<div class="breadcrumb-inner">
				<div class="home-link">
					<a href="<?=base_url();?>"><i
							class="ei ei-icon_house_alt"></i></a>
				</div>

				<ul class="site-breadcrumb">
					<li><a href="<?=base_url();?>">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
			<!-- /.breadcrumb-wrapper -->
		</div>
		<!-- /.container -->
	</div>
</section>
<!-- /#page-banner -->

<!--=============================-->
<!--=         Food Menu         =-->
<!--=============================-->
<section class="gallery">
	<div class="container p-0">

		<div id="res-gallery">

			<?php
                          $files = glob("media/gallery/*.*");

                          for ($i=0; $i<count($files); $i++) {
                              $image = $files[$i]; ?>


			<div>
				<img src="<?php echo $image ?>" alt="Gallery"
					data-action="zoom">
			</div>

			<?php
                          } ?>

		</div>

	</div>
	<!-- /.container -->
</section>
<!-- /.gallery -->