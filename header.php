<!doctype html>
<html class="no-js" lang="pl">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

		<?php wp_head(); ?>
    </head>
    <body>
	
		<!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		
	
		<!-- Header Area -->
		<header class="header" >
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row-remade">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="<?php echo get_home_url();?>"><img src="<?php echo get_theme_file_uri('/img/logo-uls.png') ?>" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="<?php echo get_home_url();?>">Strona główna</a></li>
											<li><a href="<?php echo site_url('/oferta'); ?>">Oferta</a></li>
											<li><a href="<?php echo site_url('/przygotowanie-oc'); ?>">Przygotowanie OC</a></li>
											<li><a href="<?php echo site_url('/do-pobrania'); ?>">Do pobrania</a></li>
											<li><a href="<?php echo site_url('/kontakt'); ?>">Kontakt</a></li>											
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

<?php if (!is_front_page()) {
    // Pobierz tytuł bieżącej strony
    $pageTitle = get_the_title();
	$breadcrumbs = custom_breadcrumbs();

    echo '<div class="breadcrumbs overlay">
            <div class="container">
                <div class="bread-inner">
                    <div class="row">
                        <div class="col-12">
                            <h2>' . $pageTitle . '</h2>
                            <ul class="bread-list">
                                <li><a href="index.html">' . $breadcrumbs . '</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          </div>';
	}
?>