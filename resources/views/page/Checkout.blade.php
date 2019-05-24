@extends('layout.master')
@section('content')
<div class="cart-title-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="car-header-title">
						<h2>Checkout</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area start -->
	<div class="breadcrumb-area product-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb">
						<ul>
							<li><a href="index-7.html">home <i class="fa fa-angle-right"></i></a></li>
                            <li>Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
    </div>
    
	<!-- breadcrumb-area end -->
	<!-- coupon-area start -->
	<div class="coupon-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="coupon-accordion">
						<!-- ACCORDION START -->
						<h3>Returning customer? Click here to login</h3>
						<div class="coupon-content">
							<div class="coupon-info">
								<p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
								<form action="#">
									<p class="form-row-first">
										<label>Username or email <span class="required">*</span></label>
										<input type="text" />
									</p>
									<p class="form-row-last">
										<label>Password  <span class="required">*</span></label>
										<input type="text" />
									</p>
									<p class="form-row">					
										<input type="submit" value="Login" />
										<label>
											<input type="checkbox" />
											 Remember me 
										</label>
									</p>
									<p class="lost-password">
										<a href="#">Lost your password?</a>
									</p>
								</form>
							</div>
						</div>
						<!-- ACCORDION END -->	
						<!-- ACCORDION START -->
						<h3>Have a coupon? Click here to enter your code</h3>
						<div class="coupon-checkout-content">
							<div class="coupon-info">
								<form action="#">
									<p class="checkout-coupon">
										<input type="text" placeholder="Coupon code" />
										<input type="submit" value="Apply Coupon" />
									</p>
								</form>
							</div>
						</div>
						<!-- ACCORDION END -->						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- coupon-area end -->
	<!-- checkout-area start -->
	<div class="checkout-area">
		<div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
			<div class="row">
				<form action="{{ route('postCheckout') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
					<div class="col-lg-6 col-md-6">
						<div class="checkbox-form">						
							<h3>Billing Details</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Name <span class="required">*</span></label>										
										<input type="text" placeholder="" name="name" require />
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Gender</label>
										<input type="text" placeholder="" name="gender" require />
									</div>
								</div>
								<div class="col-md-12">
									<div class="checkout-form-list">
										<label>Address <span class="required">*</span></label>
										<input type="text" require name="address" placeholder="Street address" />
									</div>
                                </div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Email Address <span class="required">*</span></label>										
										<input type="email" require name="email" placeholder="" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="checkout-form-list">
										<label>Phone  <span class="required">*</span></label>										
										<input type="text" name="phone_number" require placeholder="Postcode / Zip" />
									</div>
								</div>							
							</div>
							<div class="different-address">
							
								<div class="order-notes">
									<div class="checkout-form-list">
										<label>Order Notes</label>
										<textarea id="checkout-mess" name="note" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
									</div>									
								</div>
							</div>													
						</div>
					</div>	
					<div class="col-lg-6 col-md-6">
						<div class="your-order">
							<h3>Your order</h3>
							<div class="your-order-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-name">Product</th>
											<th class="product-total">Total</th>
										</tr>							
									</thead>
									<tbody>
                                        @if(Session::has('cart'))
                                        @foreach($products as $product)
										<tr class="cart_item">
											<td class="product-name">
												{{ $product['item']['name'] }} <strong class="product-quantity"> × {{ $product['qty'] }}</strong>
                                            </td>
                                            @if($product['item']['promotion'] == 0)
											<td class="product-total">
												<span class="amount">{{ number_format($product['unit_price']) }} VND</span>
                                            </td>
                                            @else
                                            <td class="product-total">
												<span class="amount">{{ number_format($product['promotion']) }} VND</span>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        @endif
									</tbody>
									<tfoot>
										<tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            @if(Session::has('cart'))
                                            <td><span class="amount">{{ number_format($totalPrice) }} VND</span></td>
                                            @else
                                            <td><span class="amount">0 VND</span></td>
                                            @endif
										</tr>
										<tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul>
													<li>
														<label>Free Shipping</label>
													</li>
													<li></li>
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<th>Order Total</th>
                                            @if(Session::has('cart'))
                                            <td><strong><span class="amount">{{ number_format($totalPrice) }} VND</span></strong>
                                            @else
                                            <td><strong><span class="amount">0 VND</span></strong>
                                            @endif
											</td>
										</tr>								
									</tfoot>
								</table>
							</div>
							<!-- <div class="payment-method">
								<div class="payment-accordion">
									<h3>Direct Bank Transfer</h3>
									<div class="payment-content">
										<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
									<h3>Cheque Payment</h3>
									<div class="payment-content">
										<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
									</div>
									<h3>PayPal <img src="img/cart/payment.png" alt="" /></h3>
									<div class="payment-content">
										<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
									</div>								
								</div> -->
								<div class="order-button-payment">
									<input type="submit" value="Place order" />
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- checkout-area end -->
@endsection
<!-- JS -->
		
		<!-- jquery js -->
		<script src="js/vendor/jquery-1.11.2.min.js"></script>
		
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- owl.carousel.min js -->
		<script src="js/owl.carousel.min.js"></script>
		
		<!-- slicknav js -->
		<script src="js/jquery.slicknav.js"></script>
		
		<!-- countdown js -->
		<script src="js/jquery.countdown.min.js"></script>
		
		<!-- price-slider js -->
		<script src="js/price-slider.js"></script>
		
		<!-- jquery.collapse js -->
		<script src="js/jquery.collapse.js"></script>
		
		<!-- price-slider js -->
		<script src="js/price-slider.js"></script>	

		<!-- jquery.scrollUp js -->
		<script src="js/jquery.scrollUp.min.js"></script>			
		
		<!-- Lib js -->		
		<script src="lib/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
		<script src="lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="lib/rs-plugin/rs.home.js"></script>
		
		<!-- wow js -->
        <script src="js/wow.js"></script>		
		<script>
			new WOW().init();
		</script>

		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>		
		
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		
		<!-- main js -->
		<script src="js/main.js"></script>
		