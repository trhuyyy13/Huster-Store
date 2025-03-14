<script>
  function setCountdownTimer() {
    const countdownDate = localStorage.getItem('countdownDate');
    let endDate;

    if (countdownDate) {
      endDate = new Date(countdownDate);
    } else {
      endDate = new Date();
      endDate.setDate(endDate.getDate() + 12);
      localStorage.setItem('countdownDate', endDate);
    }

    const interval = setInterval(() => {
      const now = new Date().getTime();
      const distance = endDate - now;

      if (distance < 0) {
        clearInterval(interval);
        localStorage.removeItem('countdownDate');
        document.querySelector('.hot-deal-countdown').innerHTML = "EXPIRED";
        return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.querySelector('.hot-deal-countdown').innerHTML = `
        <li><div><h3>${days}</h3><span>Days</span></div></li>
        <li><div><h3>${hours}</h3><span>Hours</span></div></li>
        <li><div><h3>${minutes}</h3><span>Mins</span></div></li>
        <li><div><h3>${seconds}</h3><span>Secs</span></div></li>
      `;
    }, 1000);
  }

  document.addEventListener('DOMContentLoaded', setCountdownTimer);
</script>
<style>
        #hot-deal {
            background-image: url('img/shoes1.jpg');
            background-size: cover;
            background-position: center;
            padding: 90px 0;
            color: #fff;
            text-align: center;
        }

        .hot-deal .hot-deal-countdown {
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .hot-deal .hot-deal-countdown li {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hot-deal .hot-deal-countdown h3 {
            font-size: 36px;
            margin: 0;
        }

        .hot-deal .hot-deal-countdown span {
            font-size: 14px;
        }

        .hot-deal .text-uppercase {
            text-transform: uppercase;
        }

        .primary-btn.cta-btn {
            background: #D10024;
            color: #fff;
            padding: 10px 30px;
            text-transform: uppercase;
            font-weight: 700;
            border-radius: 2px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
   <div class="main main-raised">
        <div class="container mainn-raised" style="width:100%;">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/web4.jpg" alt="Los Angeles" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="img/danh-muc-converse-0723.jpg" style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="img/danh-muc-kswiss-0723.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/danh-muc-palladium-0723.jpg" alt="New York" style="width:100%;">
        
      </div>
      <div class="item">
        <img src="img/danh-muc-supra-0723.jpg" alt="New York" style="width:100%;">
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only" >Previous</span>
    </a>
    <a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
     


		<!-- SECTION -->
		<div class="section mainn mainn-raised">
		
		
			<!-- container -->
			<div class="container">
			
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=78"><div class="shop">
							<div class="shop-img">
								<img src="./img/product_11.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Vans<br>Collection</h3>
								<a href="product.php?p=78" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=72"><div class="shop">
							<div class="shop-img">
								<img src="./img/product_10.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Converse<br>Collection</h3>
								<a href="product.php?p=72" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div></a>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<a href="product.php?p=79"><div class="shop">
							<div class="shop-img">
								<img src="./img/product_9.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Sneaker Buzz<br>Collection</h3>
								<a href="product.php?p=79" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
                            </div></a>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		  
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">High-Top Sneakers</a></li>
									<li><a data-toggle="tab" href="#tab1">Sneakers</a></li>
									<li><a data-toggle="tab" href="#tab1">Low-Top Sneakers</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1" >
									
									<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										<!-- product -->
										
	
										<!-- /product -->
										
										
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		 <!-- HOT DEAL SECTION -->
		 <div id="hot-deal" class="section mainn mainn-raised" style="background-image: url('img/shoes1.jpg');">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="hot-deal">
                            <ul class="hot-deal-countdown">
                                <li>
                                    <div>
                                        <h3 id="days">12</h3>
                                        <span>Days</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3 id="hours">00</h3>
                                        <span>Hours</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3 id="minutes">00</h3>
                                        <span>Mins</span>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <h3 id="seconds">00</h3>
                                        <span>Secs</span>
                                    </div>
                                </li>
                            </ul>
                            <h2 class="text-uppercase">hot deal this week</h2>
                            <p>New Collection Up to 50% OFF</p>
                            <a class="primary-btn cta-btn" href="store.php">Shop now</a>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /HOT DEAL SECTION -->
		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Top selling</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Formals</a></li>
									<li><a data-toggle="tab" href="#tab2">Shirts</a></li>
									<li><a data-toggle="tab" href="#tab2">T-Shirts</a></li>
									<li><a data-toggle="tab" href="#tab2">Pants</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12 mainn mainn-raised">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<?php
                    include 'db.php';
								
                    
					$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 59 AND 65";
                $run_query = mysqli_query($con,$product_query);
                if(mysqli_num_rows($run_query) > 0){

                    while($row = mysqli_fetch_array($run_query)){
                        $pro_id    = $row['product_id'];
                        $pro_cat   = $row['product_cat'];
                        $pro_brand = $row['product_brand'];
                        $pro_title = $row['product_title'];
                        $pro_price = $row['product_price'];
                        $pro_image = $row['product_image'];

                        $cat_name = $row["cat_title"];

                        echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
										<div class='product-label'>
											<span class='sale'>-30%</span>
											<span class='new'>NEW</span>
										</div>
									</div></a>
									<div class='product-body'>
										<p class='product-category'>$cat_name</p>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price<del class='product-old-price'>$990.00</del></h4>
										<div class='product-rating'>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
											<i class='fa fa-star'></i>
										</div>
										<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>add to wishlist</span></button>
											<button class='add-to-compare'><i class='fa fa-exchange'></i><span class='tooltipp'>add to compare</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>quick view</span></button>
										</div>
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
									</div>
								</div>
                               
							
                        
			";
		}
        ;
      
}
?>
										
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>
						

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div id="get_product_home">
								<!-- product widget -->
								
								<!-- product widget -->
							</div>

							<div id="get_product_home2">
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_1.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Vans</p>
										<h3 class="product-name"><a href="#">Vans UA Old Skool 36 DX Anaheim Factory</a></h3>
										<h4 class="product-price">$650.00 <del class="product-old-price">$980.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_2.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Vans</p>
										<h3 class="product-name"><a href="#">Vans Old Skool 36 DX Anaheim Factory</a></h3>
										<h4 class="product-price">$800.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_3.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Vans</p>
										<h3 class="product-name"><a href="#">Vans Sk8-Hi</a></h3>
										<h4 class="product-price">$600.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_4.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Palladium</p>
										<h3 class="product-name"><a href="#">Palladium Pampalicious Starlight Blue</a></h3>
										<h4 class="product-price">$600.00 <del class="product-old-price">$990.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_5.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Palladium</p>
										<h3 class="product-name"><a href="#">Palladium Jazzelle Pallakix Hi CVS</a></h3>
										<h4 class="product-price">$900.00 <del class="product-old-price">$1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_6.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Palladium</p>
										<h3 class="product-name"><a href="#">Palladium Pallaphoenix Flame C</a></h3>
										<h4 class="product-price">$800.00 <del class="product-old-price">$900.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_7.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">New Balance</p>
										<h3 class="product-name"><a href="#">New Balance 530 Beige Angora</a></h3>
										<h4 class="product-price">$1000.00 <del class="product-old-price">$1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_8.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">New Balance</p>
										<h3 class="product-name"><a href="#">New Balance 550 Triple White</a></h3>
										<h4 class="product-price">$1400.00 <del class="product-old-price">$1800.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_9.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">New Balance</p>
										<h3 class="product-name"><a href="#">New Balance 550 Dusty Blue</a></h3>
										<h4 class="product-price">$1200.00 <del class="product-old-price">$1500.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs">
					    
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_10.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">K-Swiss</p>
										<h3 class="product-name"><a href="#">K-Swiss Si-Defier 7.0</a></h3>
										<h4 class="product-price">$400.00 <del class="product-old-price">$1200.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_11.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">K-Swiss</p>
										<h3 class="product-name"><a href="#">K-Swiss Donovan WVN</a></h3>
										<h4 class="product-price">$600.00 <del class="product-old-price">$1000.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_12.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">K-Swiss</p>
										<h3 class="product-name"><a href="#">K-Swiss ST529 Heritage</a></h3>
										<h4 class="product-price">$400.00 <del class="product-old-price">$1000.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_13.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Sneaker Buzz</p>
										<h3 class="product-name"><a href="#">Dép Sneaker Buzz Classic Slide II</a></h3>
										<h4 class="product-price">$250.00 <del class="product-old-price">$300.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->
								

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_14.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Sneaker Buzz</p>
										<h3 class="product-name"><a href="#">Dép Sneaker Buzz Cloud Slide</a></h3>
										<h4 class="product-price">$250.00 <del class="product-old-price">$400.00</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product_15.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Sneaker Buzz</p>
										<h3 class="product-name"><a href="#">Dép Buzz Y-Strap Daisy</a></h3>
										<h4 class="product-price">$350.00 <del class="product-old-price">$500.00</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
</div>
		