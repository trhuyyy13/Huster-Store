<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Đây là 1 project cuối kì môn Thực hành Cơ sở dữ liệu. Nhóm gồm 4 thành viên:</p>
								<p>Trần Quang Huy - 20226109</p>
								<p>Ngô Mạnh Hùng - 20226083</p>
								<p>Trần Phạm Minh Đức - 20226077</p>
								<p>Mai Thanh Hương - 20225852</p>
								<ul class="footer-links">
								<li><a href="https://www.google.com/maps/place/%C4%90%E1%BA%A1i+H%E1%BB%8Dc+B%C3%A1ch+Khoa+H%C3%A0+N%E1%BB%99i/@21.0073014,105.8400687,17z/data=!3m1!4b1!4m6!3m5!1s0x3135ac71294bf0ab:0xc7e2d20e5e04a9da!8m2!3d21.0072964!4d105.8426436!16s%2Fm%2F027jq68?entry=ttu" target="_blank"><i class="fa fa-map-marker"></i>Đại học Bách khoa Hà Nội</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+84987654321</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>huster@sis.hust.edu.vn</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 text-center" style="margin-top:80px;">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script>,  Huster Store.<i class="fa fa-heart-o" aria-hidden="true"></i> All <a href="#" target="_blank">Rights Reserved</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Brands</h3>
								<ul class="footer-links">
									<li><a href="#">CONVERSE</a></li>
									<li><a href="#">VANS</a></li>
									<li><a href="#">PALLADIUM</a></li>
									<li><a href="#">SUPRA</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
                

			<!-- bottom footer -->
			
			<!-- /bottom footer -->
		</footer>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/actions.js"></script>
		<script src="js/sweetalert.min.js"></script>
		<script src="js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="js/script.js"></script>
		<script>var c = 0;
        function menu(){
          if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
            c++; 
              }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
            c++;
              }
        }
           
		
</script>
    <script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
	
