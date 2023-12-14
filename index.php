<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADTS</title>
      
    <link rel="stylesheet" type="text/css" href="dist/css/styleHeader.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="icon" href="dist/images/mainicon.png" type="image/x-icon" />
     <link rel="stylesheet" type="text/css" href="dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="dist/css/mystyle.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
</head>

<body class="is-boxed has-animations">    
<div class="cn-top-banner">
    <span>We are offering internships. Join our team and gain valuable experience. <a class="" href="./careers.php">Click here to register</a>.</span>
    <i class="fas fa-times fa-xmark" onclick="hideBanner(this);"></i>
</div>

<?php
include 'components/header.php';
?>
    <div class="body-wrap">
        <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <!-- <h1 class="m-0">
							<a href="#">
								<img class="header-logo-image" src="dist/images/2.png" alt="Logo">
                            </a>
                        </h1> -->
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">Solutions that Exceed Expectations</h1>
	                        <p class="hero-paragraph">Utilise our IT services to maximise the potential of your business. Maximize your online presence with our custom-designed websites that make a lasting impact</p>
	                        <div class="hero-cta"><a class="button button-primary" href="contact.php">Pre order now</a><a class="button" href="contact.php">Get in touch</a></div>
						</div>
						<div class="hero-figure anime-element">
							<svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
								<rect width="528" height="396" style="fill:transparent;" />
							</svg>
							<div class="hero-figure-box hero-figure-box-01" data-rotation="45deg"></div>
							<div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg"></div>
							<div class="hero-figure-box hero-figure-box-03" data-rotation="0deg"></div>
							<div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg"></div>
							<div class="hero-figure-box hero-figure-box-05"></div>
							<div class="hero-figure-box hero-figure-box-06"></div>
							<div class="hero-figure-box hero-figure-box-07"></div>
							<div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg"></div>
							<div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg"></div>
							<div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg"></div>
						</div>
                    </div>
                </div>
            </section>

            <section class="features section">
                <div class="container">
                    <div class="box">
                        <h1 class="features-title">Services</h1>
                    </div>

					<div class="features-inner section-inner has-bottom-divider">
                        <div class="features-wrap">
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon web-special">
										<img src="dist/images/web-development.png" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title mt-24">Website Development</h4>
                                    <p class="text-sm mb-0">We understand the importance of affordability, and we strive to offer our services at competitive rates. We believe that high-quality website development services should be accessible to businesses of all sizes, and we work to make our pricing as transparent and affordable as possible. Whether you are an organization, a school or a small businesses outlet, we help you scaling your business to the next level.</p>
                                </div>
                            </div>
							<div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/cloud.png" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title mt-24">Affordable Web Hosting</h4>
                                    <p class="text-sm mb-0">Looking for affordable and reliable web hosting? We offer a variety of packages to fit any budget. All plans include SSL certificates for security. Our 24/7 support and user-friendly control panel make website management easy. Launch your website today and take your online presence to the next level!</p>
                                </div>
                            </div>
                            <div class="feature text-center is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
										<img src="dist/images/graphic.png" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title mt-24">Graphic Design</h4>
                                    <p class="text-sm mb-0">Need top-quality graphics designing services? Our team specializes in logo designing, posters, calendars, banners, and more. We use the latest design tools to create stunning designs that capture your vision. Affordable pricing and quick turnaround times. Choose us to take your brand to the next level!</p>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </section>

            <section class="pricing section">
                <div class="container-sm">
                    <div class="pricing-inner section-inner">
                        <div class="pricing-header text-center">
                            <h2 class="section-title mt-0">Designing success stories for years</h2>
                            <p class="section-paragraph mb-0">Join our family of satisfied customers and take your business to new heights with our expert technical solutions
                        </p><br>
                        <div class="see-portfolio">
                            <a class="button button-primary button-shadow button-block" href="./portfolio.php" style="width:200px;">see Portfolio </a>
                        </div>
                        </div>
						<div class="pricing-tables-wrap">
                            <div class="pricing-table">
                                <div class="pricing-table-inner is-revealing">
                                    <div class="pricing-table-main">
                                        <div class="pricing-table-header pb-24">
                                            <div class="pricing-table-price"><span class="pricing-table-price-currency h2"></span><span class="pricing-table-price-amount h4">Customer-First Approach</span><span class="text-xs"></span></div>
                                        </div>
										<div class="pricing-table-features-title text-xs pt-24 pb-24">What you will get</div>
                                        <ul class="pricing-table-features list-reset text-xs">
                                            <li>
                                                <span>Affordable and reliable web services for all your needs</span>
                                            </li>
                    
                                            <li>
                                                <span>Dedicated Support Team</span>
                                            </li>
                                            <li>
                                                <span>Innovative Web Design</span>
                                            </li>
                                            <li>
                                                <span>Crafted-To-Your-Needs</span>
                                            </li>
											
                                        </ul>
                                    </div>
                                    <div class="pricing-table-cta mb-8">
                                        <a class="button button-primary button-shadow button-block" href="#">Pre order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="cta section">
				<div class="container">
					<div class="cta-inner section-inner">
						<h3 class="section-title mt-0"> Still not sure how can we help you?</h3>
						<div class="cta-cta">
							<a class="button button-primary button-wide-mobile" href="contact.php">Get in touch</a>
						</div>
					</div>
				</div>
			</section>
        </main>

        <?php
        include 'components/footer.php';
        ?>
    </div>

    <script src="dist/js/main.min.js"></script>
    <script src="dist/js/script.js"></script>
</body>
</html>
