<?php
include "header.php";
?>
<!-- /BREADCRUMB -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
		});
	});
</script>
<script>
	(function (global) {
		if (typeof (global) === "undefined") {
			throw new Error("window is undefined");
		}
		var _hash = "!";
		var noBackPlease = function () {
			global.location.href += "#";
			global.setTimeout(function () {
				global.location.href += "!";
			}, 50);
		};
		global.onhashchange = function () {
			if (global.location.hash !== _hash) {
				global.location.hash = _hash;
			}
		};
		global.onload = function () {        
			noBackPlease();
			document.body.onkeydown = function (e) {
				var elm = e.target.nodeName.toLowerCase();
				if (e.which === 8 && (elm !== 'input' && elm !== 'textarea')) {
					e.preventDefault();
				}
				e.stopPropagation();
			};		
		};
	})(window);
</script>

<!-- SECTION -->
<div class="section main main-raised">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- Product main img -->
			<?php
			include 'db.php';
			$product_id = $_GET['p'];

			$sql = "SELECT p.*, c.cat_title AS category, b.brand_title AS brand 
					FROM products p
					LEFT JOIN categories c ON p.product_cat = c.cat_id
					LEFT JOIN brands b ON p.product_brand = b.brand_id
					WHERE p.product_id = $product_id";

			if (!$con) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo '
						<div class="col-md-5 col-md-push-2">
							<div id="product-main-img">
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-2 col-md-pull-5">
							<div id="product-imgs">
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . 'g" alt="">
								</div>
								<div class="product-preview">
									<img src="product_images/' . $row['product_image'] . '" alt="">
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="product-details">
								<h2 class="product-name">' . $row['product_title'] . '</h2>
								<div>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<a class="review-link" href="#review-form">10 Review(s) | Add your review</a>
								</div>
								<div>
									<h3 class="product-price">$' . $row['product_price'] . '<del class="product-old-price">$99.00</del></h3>
									<span class="product-available">In Stock</span>
								</div>
								<p>' . $row['product_desc'] . '</p>
								<div class="product-options">
									<label>
										Size
										<select class="input-select">
											<option value="0">30</option>
											<option value="1">31</option>
											<option value="2">32</option>
											<option value="3">33</option>
											<option value="4">34</option>
											<option value="5">35</option>
											<option value="6">36</option>
											<option value="7">37</option>
											<option value="8">38</option>
											<option value="9">39</option>
											<option value="10">40</option>
											<option value="11">41</option>
											<option value="12">42</option>
											<option value="13">43</option>
											<option value="14">44</option>
											<option value="15">45</option>
										</select>
									</label>
									<label>
										Color
										<select class="input-select">
											<option value="0">Black</option>
											<option value="1">White</option>
											<option value="2">Navy Blue</option>
											<option value="3">Red</option>
											<option value="4">Green</option>
											<option value="5">Grey</option>
											<option value="6">Yellow</option>
											<option value="7">Orange</option>
											<option value="8">Pink</option>
											<option value="9">Purple</option>
											<option value="10">Blue</option>
											<option value="11">Brown</option>
											<option value="12">Beige</option>
											<option value="13">Olive</option>
											<option value="14">Black & White</option>
										</select>
									</label>
								</div>
								<div class="add-to-cart">
									<div class="qty-label">
										Qty
										<div class="input-number">
											<span class="qty-up">+</span>
											<span class="qty-down">-</span>
										</div>
									</div>
									<div class="btn-group" style="margin-left: 25px; margin-top: 15px">
										<button class="add-to-cart-btn" pid="' . $row['product_id'] . '" id="product"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
								<ul class="product-btns">
									<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
									<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
								</ul>
								<ul class="product-links">
									<li>Category:</li>
									<li><a href="#">' . $row['category'] . '</a></li>
									<li>Brand:</li>
									<li><a href="#">' . $row['brand'] . '</a></li>
								</ul>
								<ul class="product-links">
									<li>Share:</li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope"></i></a></li>
								</ul>
							</div>
						</div>';
					$_SESSION['product_id'] = $row['product_id'];

					// Save the $row data for later use
					$product_desc = $row['product_desc'];
				}
			}
			?>	
			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
						<li><a data-toggle="tab" href="#tab2">Details</a></li>
						<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
					</ul>
					<!-- /product tab nav -->
					<!-- product tab content -->
					<div class="tab-content">
						<!-- tab1  -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-12">
									<p><?php echo isset($product_desc) ? $product_desc : 'No description available.'; ?></p>
								</div>
							</div>
						</div>
						<!-- /tab1  -->
						<!-- tab2  -->
						<div id="tab2" class="tab-pane fade in">
							<div class="row">
								<div class="col-md-12">
									<p><?php echo isset($product_desc) ? $product_desc : 'No details available.'; ?></p>
								</div>
							</div>
						</div>
						<!-- /tab2  -->
						<!-- tab3  -->
						<div id="tab3" class="tab-pane fade in">
							<div class="row">
								<!-- Rating -->
								<div class="col-md-3">
									<div id="rating">
										<div class="rating-avg">
											<span>4.5</span>
											<div class="rating-stars">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-o"></i>
											</div>
										</div>
										<ul class="rating">
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 80%;"></div>
												</div>
												<span class="sum">3</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div style="width: 60%;"></div>
												</div>
												<span class="sum">2</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
											<li>
												<div class="rating-stars">
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="rating-progress">
													<div></div>
												</div>
												<span class="sum">0</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- /Rating -->
								<!-- Reviews -->
								<div class="col-md-6">
									<div id="reviews">
										<ul class="reviews">
											<li>
												<div class="review-heading">
													<h5 class="name">John</h5>
													<p class="date">27 DEC 2018, 8:00 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>This product is really good and meets all my expectations. Highly recommend it!</p>
												</div>
											</li>
											<li>
												<div class="review-heading">
													<h5 class="name">Jane</h5>
													<p class="date">15 JAN 2019, 5:30 PM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Great product, but the delivery was a bit slow. Overall, a good experience.</p>
												</div>
											</li>
											<li>
												<div class="review-heading">
													<h5 class="name">Doe</h5>
													<p class="date">10 FEB 2019, 10:15 AM</p>
													<div class="review-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-o empty"></i>
													</div>
												</div>
												<div class="review-body">
													<p>Excellent quality! Will buy again for sure. Highly satisfied with the product.</p>
												</div>
											</li>
										</ul>
										<ul class="reviews-pagination">
											<li class="active">1</li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- /Reviews -->
								<!-- Review Form -->
								<div class="col-md-3 mainn">
									<div id="review-form">
										<form class="review-form">
											<input class="input" type="text" placeholder="Your Name">
											<input class="input" type="email" placeholder="Your Email">
											<textarea class="input" placeholder="Your Review"></textarea>
											<div class="input-rating">
												<span>Your Rating: </span>
												<div class="stars">
													<input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
													<input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
													<input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
													<input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
													<input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
												</div>
											</div>
											<button class="primary-btn">Submit</button>
										</form>
									</div>
								</div>
								<!-- /Review Form -->
							</div>
						</div>
						<!-- /tab3  -->
					</div>
					<!-- /product tab content  -->
				</div>
			</div>
			<!-- /product tab -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- Section -->
<div class="section main main-raised">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h3 class="title">Related Products</h3>
				</div>
			</div>
			<?php
			include 'db.php';
			$product_id = $_GET['p'];

			$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN $product_id AND $product_id+3";
			$run_query = mysqli_query($con, $product_query);
			if (mysqli_num_rows($run_query) > 0) {
				while ($row = mysqli_fetch_array($run_query)) {
					$pro_id = $row['product_id'];
					$pro_cat = $row['product_cat'];
					$pro_brand = $row['product_brand'];
					$pro_title = $row['product_title'];
					$pro_price = $row['product_price'];
					$pro_image = $row['product_image'];
					$cat_name = $row['cat_title'];

					echo "
					<div class='col-md-3 col-xs-6'>
						<a href='product.php?p=$pro_id'>
							<div class='product'>
								<div class='product-img'>
									<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
									<div class='product-label'>
										<span class='sale'>-30%</span>
										<span class='new'>NEW</span>
									</div>
								</div>
						</a>
								<div class='product-body'>
									<p class='product-category'>$cat_name</p>
									<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
									<h4 class='product-price header-cart-item-info'>$pro_price <del class='product-old-price'>$99.00</del></h4>
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
						</div>
					";
				}
			}
			?>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /Section -->

<!-- NEWSLETTER -->

<!-- /NEWSLETTER -->

<!-- FOOTER -->
<?php
include "newslettter.php";
include "footer.php";
?>
