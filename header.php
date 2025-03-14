<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>HUSTER STORE</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		#navigation {
			background: #dfe3ee;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #dfe3ee, #bac6e1);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #dfe3ee, #bac6e1);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		/* Gradient nền mix màu cho #header */
		#header {
			background: #00008B;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #00008B, #4682B4, #87CEFA, #FFFFFF);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #00008B, #4682B4, #87CEFA, #FFFFFF);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		/* Gradient nền cho #top-header */
		#top-header {
			background: #dfe3ee;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #dfe3ee, #add8e6);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #dfe3ee, #add8e6);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		#footer {
			background: #7474BF;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #348AC7, #7474BF);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #1E1F29;
		}

		#bottom-footer {
			background: #7474BF;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #348AC7, #7474BF);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #348AC7, #7474BF);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.footer-links li a {
			color: #1E1F29;
		}

		.mainn-raised {
			margin: -7px 0px 0px;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
		}

		.glyphicon {
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}

		.glyphicon-chevron-left:before {
			content: "\f053"
		}

		.glyphicon-chevron-right:before {
			content: "\f054"
		}

		.search-form {
			display: flex;
			align-items: center;
		}

		.search-form .input-select {
			margin-right: 10px;
		}

		.search-form .input {
			flex: 1;
            margin-right: 0;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
		}

		.search-form .search-btn {
			margin: 0;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
		}
	</style>
</head>

<body>
	<?php if ($current_page != 'checkout.php') : ?>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 0123456789</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> husterbangiay@sis.hust.edu.vn</a></li>
						<li><a href="https://hust.edu.vn/"><i class="fa fa-map-marker"></i>1 Dai Co Viet, Ha Noi</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-dollar"></i></a></li>
						<li><?php
							include "db.php";
							if (isset($_SESSION["uid"])) {
								$sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
								$query = mysqli_query($con, $sql);
								$row = mysqli_fetch_array($query);
								echo '
							<div class="dropdownn">
								<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-o"></i> HI ' . $row["first_name"] . '</a>
								<div class="dropdownn-content">
									<a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true"></i>My Profile</a>
									<a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
								</div>
							</div>';
							} else {
								echo '
							<div class="dropdownn">
								<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-o"></i> My Account</a>
								<div class="dropdownn-content">
									<a href="admin/login.php"><i class="fa fa-user" aria-hidden="true"></i>Admin</a>
									<a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>
									<a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
								</div>
							</div>';
							}
							?>
						</li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
										HUSTER STORE
									</font>
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form class="search-form" action="search_results.php" method="GET">
									
									<input class="input" id="search" type="text" name="query" placeholder="Tìm kiếm sản phẩm">
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>

						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="https://github.com/Repelzy/Huster-Store">
										<i class="fa fa-github"></i>
										<span>Github</span>
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Giỏ hàng</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list" id="cart_product"></div>
										<div class="cart-btns">
											<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i> edit cart</a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toggle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toggle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
			<nav id='navigation'>
				<div class="container" id="get_category_home">
					<div id='responsive-nav'>
						<ul class='main-nav nav navbar-nav'>
							<li class='active'><a href='index.php'>Home</a></li>
							<li><a href='store.php'>CONVERSE</a></li>
							<li><a href='store.php'>VANS</a></li>
							<li><a href='store.php'>PALLADIUM</a></li>
							<li><a href='store.php'>NEW BALANCE</a></li>
							<li><a href='store.php'>K-SWISS</a></li>
							<li><a href='store.php'>SNEAKER BUZZ</a></li>
							<li><a href='store.php'>ACCESSORIES</a></li>
							<li><a href='store.php'>SUPRA</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- /HEADER -->
	<?php endif; ?>

	<div class="modal fade" id="Modal_login" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<?php include "login_form.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="Modal_register" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<?php include "register_form.php"; ?>
				</div>
			</div>
		</div>
	</div>
