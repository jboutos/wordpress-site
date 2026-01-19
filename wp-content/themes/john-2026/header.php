<!doctype html>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title><?php echo wp_get_document_title(); ?></title>
		<?php wp_head(); ?>
		<link href="https://db.onlinewebfonts.com/c/447315c0c330fd423c8e1cc18024669d?family=AvertaStd-Bold" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	</head>

	<body <?php body_class(); ?>>
		<header>
			<nav class='header-menu'>
				<inner-column>
					<header-top>
						<div class='left'>
							<a class="logo-company" href='<?php echo home_url(); ?>'>
								<h2 class='attention-voice logo'>RECORD GALLERY</h3>
							</a>
							<div class="search-container">
							   <input type="search" placeholder="Search records..." aria-label="Search" />
							   <button type="submit" class="search-btn" aria-label="Search">
							    <?php include('images/search.php'); ?>
							   </button>
							</div>
						</div>
						<div class='right'>
							<div class=mini-container>
								<a class='pin' href='#'>
									<?php include('images/pin.php'); ?>
									<span>Nowheresville 77<br>Somewhere, 10555</span>
								</a>
								<a class='mail' href='#'>
									<?php include('images/mail.php'); ?>
									<span>info@recordgallery.com</span>
								</a>
							</div>
						</div>
					</header-top>
				</inner-column>
			</nav>
			
		</header>
		<nav class='header-menu-bottom'>
				<inner-column>
					<div class='container'>
						<nav class='options'>
							<a class='user hamburger' href='#'>
								<?php include('images/hamburger.php'); ?>
							</a>
							<!--
							<a class='shopping' href="<?php echo get_permalink(get_page_by_title('Album Collection')); ?>">
							    Collection
							</a>
							<a class='shopping' href="<?php echo get_permalink(get_page_by_title('Second Hand')); ?>">
							    Second-hand
							</a>
							<a class='shopping' href="#">
							    On Sale
							</a>
							-->
							<?php include('templates/site-menu.php'); ?>
						</nav>

						<nav class='user-menu'>
							<a class='user' href='#'>
								<?php include('images/cart.php'); ?>
								<span>Shopping Cart</span>
							</a>
							<a class='user' href='#'>
								<?php include('images/user.php'); ?>
								<span>Sign-in</span>
							</a>
						</nav>
					</div>
				</inner-column>
			</nav>

		<main class=''>