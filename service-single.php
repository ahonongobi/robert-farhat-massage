<!DOCTYPE html>
<html lang="en-US">
	
<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Service Detail | ROBERT FARHAT</title>
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="assets/css/general.css"><!-- Default styles generated from assets/scss/general.scss (do not edit) -->
        <link rel="stylesheet" type="text/css" href="assets/css/color-schemes/default.css"><!-- Default color scheme generated from assets/scss/color-schemes/default.scss (change to other pre-defined or custom color scheme) -->
		<link rel="stylesheet" type="text/css" href="style.css"><!-- Place your own CSS into this file -->
		<!-- STYLESHEETS : end -->

	</head>
	<body>

		<!-- WRAPPER : begin -->
		<div id="wrapper">

			<!-- HEADER : begin -->
			<?php include 'header.php'; ?>
			<!-- HEADER : end -->

			<!-- CORE : begin -->
			<div id="core">
				<div class="core__inner">

					<!-- PAGE HEADER : begin -->
					<div class="page-header">
						<div class="page-header__inner">
							<div class="lsvr-container">
								<div class="page-header__content">

									<h1 class="page-header__title"><?php echo $_GET['title'] ?></h1>

									<!-- BREADCRUMBS : begin -->
									<div class="breadcrumbs">
										<div class="breadcrumbs__inner">
											<ul class="breadcrumbs__list">

												<li class="breadcrumbs__item">
													<a href="/" class="breadcrumbs__link">Acceuil</a>
												</li>

												<li class="breadcrumbs__item">
													<a href="" class="breadcrumbs__link"><?php echo $_GET['title'] ?></a>
												</li>

											</ul>

										</div>
									</div>
									<!-- BREADCRUMBS : end -->

								</div>
							</div>
						</div>
					</div>
					<!-- PAGE HEADER : end -->

					<!-- CORE COLUMNS : begin -->
					<div class="core__columns">
						<div class="core__columns-inner">
							<div class="lsvr-container">

								<!-- COLUMNS GRID : begin -->
								<div class="core__columns-grid lsvr-grid">

									<!-- MAIN COLUMN : begin -->
									<div class="core__columns-col core__columns-col--main core__columns-col--left lsvr-grid__col lsvr-grid__col--span-9 lsvr-grid__col--md-span-12">

										<!-- MAIN : begin -->
										<main id="main">
											<div class="main__inner">

												<!-- PAGE : begin -->
												<div class="page service-post-page service-post-single">
													<div class="page__content">

														<!-- POST : begin -->
														<article class="post service-post">
															<div class="post__inner">

																<!-- POST CONTENT : begin -->
																<div class="post__content">

																	<p><?php echo $_GET['text']; ?></p> <br>
																	<p><?php echo $_GET['text1']; ?></p>

																	<table>
																		<thead>
																			<tr>
																				<th>Coût</th>
																				<th><?php echo $_GET['cost']; ?></th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td>Heures</td>
																				<td><?php echo $_GET['houre']; ?></td>
																			</tr>
																			
																		</tbody>
																	</table>

																</div>
																<!-- POST CONTENT : end -->

																<!-- POST GALLERY : begin -->
																<div class="post__gallery">

																	<h3 class="post__gallery-title">Gallérie</h3>

																	<ul class="post__image-list lsvr-grid lsvr-grid--4-cols lsvr-grid--md-2-cols lsvr-grid--masonry">

																		<!-- GALLERY IMAGE : begin -->
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/massage1.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/massage1.jpg" style="height: 120px;" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<!-- GALLERY IMAGE : end -->

																		<!-- GALLERY IMAGE : begin -->
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/massage2.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/massage2.jpg" style="height: 120px;" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<!-- GALLERY IMAGE : end -->

																		<!-- GALLERY IMAGE : begin -->
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/stone.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/stone.jpg" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/service_04.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/service_04.jpg" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<!-- GALLERY IMAGE : end -->

																		<!-- GALLERY IMAGE : begin -->
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/logo2.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/logo2.jpg" style="height: 120px; width:170px" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/logo1.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/logo1.jpg" style="height: 120px; width:170px" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/logo.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/logo.jpg" style="height: 120px; width:170px" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																		<!-- GALLERY IMAGE : end -->

																		<!-- GALLERY IMAGE : begin -->
																		<li class="post__image-item lsvr-grid__col">
																			<a href="images/gallery_04.jpg" class="post__image-link open-in-lightbox">
																				<img src="images/logo4.jpg" class="post__image" alt="Gallery image">
																			</a>
																		</li>
																																					<!-- GALLERY IMAGE : end -->

																	</ul>
        														</div>
        														<!-- POST GALLERY : end -->

    														</div>
														</article>
														<!-- POST : end -->

													</div>
												</div>
												<!-- PAGE : end -->

											</div>
										</main>
										<!-- MAIN : end -->

									</div>
									<!-- MAIN COLUMN : end -->

									<!-- SIDEBAR COLUMN : begin -->
									<div class="core__columns-col core__columns-col--sidebar core__columns-col--right lsvr-grid__col lsvr-grid__col--span-3 lsvr-grid__col--md-span-12">

										<!-- SIDEBAR : begin -->
										<aside id="sidebar">
											
										</aside>
										<!-- SIDEBAR : end -->

									</div>
									<!-- SIDEBAR COLUMN : end -->

								</div>
								<!-- COLUMNS GRID : end -->

							</div>
						</div>
					</div>
					<!-- CORE COLUMNS : end -->

				</div>
			</div>
			<!-- CORE : end -->

			<!-- FOOTER : begin -->
			<?php include 'footer.php'; ?>
			<!-- FOOTER : end -->

		</div>
		<!-- WRAPPER : end -->

		<!-- SCRIPTS : begin -->
		<script src="assets/js/jquery-3.5.1.min.js" type="text/javascript"></script>
		<script src="assets/js/third-party-scripts.min.js" type="text/javascript"></script>
		<script src="assets/js/scripts.js" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>

</html>