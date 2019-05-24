@extends('layout.master')
@section('content')
<!-- HOME SLIDER -->
<div class="slider-wrap">
	<div class="fullwidthbanner-container" >
		<div class="fullwidthbanner2">
			<ul>
				<!-- SLIDE  -->
				@foreach($slide as $key => $item)
				<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
					<img src="{{ url('img/product/'.$item->image.'') }}" alt="slide" >
					<div class="tp-caption large_black sfr"
					data-x="900"
					data-y="150"
					data-speed="1100"
					data-start="1100"
					data-easing="easeInOutBack"	

					style=""><img src="{{ url('img/slider/slider-3/slider-text-2.png') }}" alt="">
				</div>
				<div class="tp-caption large_black sfr" 
				data-x="1050"
				data-y="400"
				data-speed="1100"
				data-start="1400"
				data-easing="easeInOutBack"

				style=""><img src="{{ url('img/slider/slider-3/slider-text-3.png') }}" alt="">
			</div>
			<div class="tp-caption lfb carousel-caption-inner"
			data-x="1375"
			data-y="500"
			data-speed="1300"
			data-start="1700"
			data-easing="easeInOutBack"

			style="">
			<a href="#" target="_blank"><img src="{{ url('img/slider/slider-1/shopping.jpg') }}" alt=""></a>
		</div>
	</li>	
	@endforeach
</ul>
</div>
</div>
</div>
<!-- HOME SLIDER END -->
<!-- promotion-area start -->
<div class="promotion-area">
	<div class="container">
		<div class="row">
			<!-- single-promo start -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-promo">
					<a href="{{ url('shop') }}"><img src="{{ url('img/promotion/1.jpg') }}" alt="" /></a>
				</div>
			</div>
			<!-- single-promo end -->
			<!-- single-promo start -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-promo">
					<a href="{{ url('shop') }}"><img src="{{ url('img/promotion/2.jpg') }}" alt="" /></a>
				</div>
			</div>
			<!-- single-promo end -->
			<!-- single-promo start -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-promo">
					<a href="{{ url('shop') }}"><img src="{{ url('img/promotion/3.jpg') }}" alt="" /></a>
				</div>
			</div>
			<!-- single-promo end -->
		</div>
	</div>
</div>
<!-- promotion-area end -->
<!-- features-area start -->
<div class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-heading">
					<h3>Featured products</h3>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="features-curosel">
				@foreach($product as $key => $item)
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						@if($item->promotion != 0)
							<span class="sale-text">Sale</span>
						@endif
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/'.$item->image.'') }}" alt="" />
							</a>
							<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
							<div class="action-buttons">
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
								<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
								<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
							</div>
						</div>
						<div class="product-content">
							<div class="pro-rating">
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star-o"></i></a>
							</div>
							<h5><a href="#">{{$item->name}}</a></h5>
							@if($item->promotion != 0)
							<span class="old-price">{{ number_format($item->unit_price) }} VND</span>
							<span class="pro-price">{{ number_format($item->promotion) }} VND</span>
							@else
							<span class="pro-price">{{ number_format($item->unit_price) }} VND</span>
							@endif

						</div>
					</div>
				</div>
				<!-- single-features end -->
				@endforeach
			</div>
		</div>	
	</div>
</div>
<!-- features-area end -->
<!-- sale-product-area start -->
<div class="sale-product-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="sale-container">
					<div class="row">
						<div class="col-lg-4 col-md-4 hidden-sm">
							<div class="sale-product-left">
								<h2>Sale up to 30%off</h2>
								<h3>Sale</h3>
								<p>products</p>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12">
							<div class="sale-curosel1">
								<div class="home-3-sale">				
									<div class="sale-curosel">
										<!-- product start -->
										<div class="single-features">										
											<div class="product-img">
												<a href="#">
													<img class="first-img" src="{{ url('img/product/3.jpg') }}" alt="" />
													<img class="second-img" src="{{ url('img/product/4.jpg') }}" alt="" />
												</a>
												<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
												<span class="sale-text">Sale</span>
											</div>							
											<div class="product-content">
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star-o"></i></a>
												</div>
												<h5><a href="#">Etiam molestie</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
												<span class="old-price">£230.00</span>
												<span class="pro-price">£220.00</span>
												<div class="timer">
													<div data-countdown="2016/05/01"></div>
												</div>														
											</div>
										</div>
										<!-- product end -->
										<!-- product start -->
										<div class="single-features">										
											<div class="product-img">
												<a href="#">
													<img class="first-img" src="{{ url('img/product/5.jpg') }}" alt="" />
													<img class="second-img" src="{{ url('img/product/6.jpg') }}" alt="" />
												</a>
												<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
												<span class="sale-text">Sale</span>
											</div>							
											<div class="product-content">
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star-o"></i></a>
												</div>
												<h5><a href="#">Aenean eu tristique</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
												<span class="old-price">£80.00</span>
												<span class="pro-price">£70.00</span>
												<div class="timer">
													<div data-countdown="2016/04/01"></div>
												</div>														
											</div>
										</div>
										<!-- product end -->
										<!-- product start -->
										<div class="single-features">										
											<div class="product-img">
												<a href="#">
													<img class="first-img" src="{{ url('img/product/15.jpg') }}" alt="" />
													<img class="second-img" src="{{ url('img/product/14.jpg') }}" alt="" />
												</a>
												<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
												<span class="sale-text">Sale</span>
											</div>							
											<div class="product-content">
												<div class="pro-rating">
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star"></i></a>
													<a href="#"><i class="fa fa-star-o"></i></a>
												</div>
												<h5><a href="#">Elementum felis</a></h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
												<span class="old-price">£130.00</span>
												<span class="pro-price">£120.00</span>
												<div class="timer">
													<div data-countdown="2016/02/01"></div>
												</div>														
											</div>
										</div>
										<!-- product end -->
									</div>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- sale-product-area end -->

<!-- brand-area start -->
<div class="brand-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h3>Logo brands</h3>
				</div>				
			</div>
			<div class="clear"></div>
			<div class="brand-curosel">
				<!-- brand-img start -->
				<div class="col-md-3">
					<div class="brand-img">
						<a href="#"><img src="{{ url('img/brand/1.jpg') }}" alt="" /></a>
					</div>						
				</div>
				<!-- brand-img end -->
				<!-- brand-img start -->
				<div class="col-md-3">
					<div class="brand-img">
						<a href="#"><img src="{{ url('img/brand/2.jpg') }}" alt="" /></a>
					</div>						
				</div>
				<!-- brand-img end -->
				<!-- brand-img start -->
				<div class="col-md-3">
					<div class="brand-img">
						<a href="#"><img src="{{ url('img/brand/3.jpg') }}" alt="" /></a>
					</div>						
				</div>
				<!-- brand-img end -->
				<!-- brand-img start -->
				<div class="col-md-3">
					<div class="brand-img">
						<a href="#"><img src="{{ url('img/brand/4.jpg') }}" alt="" /></a>
					</div>						
				</div>
				<!-- brand-img end -->
				<!-- brand-img start -->
				<div class="col-md-3">
					<div class="brand-img">
						<a href="#"><img src="{{ url('img/brand/1.jpg') }}" alt="" /></a>
					</div>						
				</div>
				<!-- brand-img end -->
				<!-- brand-img start -->
				<div class="col-md-3">
					<div class="brand-img">
						<a href="#"><img src="{{ url('img/brand/3.jpg') }}" alt="" /></a>
					</div>						
				</div>
				<!-- brand-img end -->
			</div>
		</div>
	</div>
</div>
<!-- brand-area end -->
<!-- corporate-about-area start -->
<div class="corporate-about-area">
	<div class="container">
		<div class="row">
			<!-- single-corporate start -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-corporate">
					<div class="corporate-icon">
						<i class="fa fa-truck"></i>
					</div>
					<div class="corporate-text">
						<h4>FREE SHIPPING & RETURN</h4>
						<p>Free shipping on all orders over $99.</p>
					</div>
				</div>
			</div>
			<!-- single-corporate end -->
			<!-- single-corporate start -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-corporate">
					<div class="corporate-icon">
						<i class="fa fa-usd"></i>
					</div>
					<div class="corporate-text">
						<h4>MONEY BACK GUARANTEE</h4>
						<p>100% money back guarantee.</p>
					</div>
				</div>
			</div>
			<!-- single-corporate end -->				
			<!-- single-corporate start -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="single-corporate">
					<div class="corporate-icon">
						<i class="fa fa-life-bouy"></i>
					</div>
					<div class="corporate-text">
						<h4>ONLINE SUPPORT 24/7</h4>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
			</div>
			<!-- single-corporate end -->
		</div>
	</div>
</div>
<!-- corporate-about-area end -->
@endsection