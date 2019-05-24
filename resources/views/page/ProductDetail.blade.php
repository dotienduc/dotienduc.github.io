<!doctype html>
<html class="no-js" lang="">

<!-- Tieu Long Lanh -->
<head>
		<!-- Basic page needs
			============================================ -->	
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<title>Product Variable  page</title>
			<meta name="description" content="">

		<!-- Mobile specific metas
			============================================ -->		
			<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font
			============================================ -->
			<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>		

		<!-- Favicon
			============================================ -->
			<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

			<!-- CSS  -->

		<!-- Bootstrap CSS
			============================================ -->
			<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

		<!-- owl.carousel CSS
			============================================ -->
			<link rel="stylesheet" href="{{ url('css/owl.carousel.css') }}">	

		<!-- owl.theme CSS
			============================================ -->
			<link rel="stylesheet" href="{{ url('css/owl.theme.css') }}">

		<!-- owl.transitions CSS
			============================================ -->
			<link rel="stylesheet" href="{{ url('css/owl.transitions.css') }}">

		<!-- font-awesome CSS
			============================================ -->
			<link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">

		<!-- animate CSS
			============================================ -->
			<link rel="stylesheet" href="{{ url('css/animate.css') }}">

		<!-- slicknav CSS
			============================================ -->		
			<link rel="stylesheet" href="{{ url('css/slicknav.css') }}">

		<!-- rs-plugin CSS
			============================================ -->			
			<link href="{{ url('lib/rs-plugin/css/settings.css') }}" rel="stylesheet" />			

		<!-- normalize CSS
			============================================ -->		
			<link rel="stylesheet" href="{{ url('css/normalize.css') }}">

		<!-- jquery-ui CSS
			============================================ -->		
			<link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">

		<!-- main CSS
			============================================ -->		
			<link rel="stylesheet" href="{{ url('css/main.css') }}">

		<!-- style CSS
			============================================ -->			
			<link rel="stylesheet" href="{{ url('style.css') }}">

		<!-- responsive CSS
			============================================ -->			
			<link rel="stylesheet" href="{{ url('css/responsive.css') }}">

		<!-- modernizr js
			============================================ -->		
			<script src="{{ url('js/vendor/modernizr-2.8.3.min.js') }}"></script>
			<link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		</head>
		<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        @include('partial.header')

        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area product-breadcrumb">
        	<div class="container">
        		<div class="breadcrumb">
        			<ul>
        				<li><a href="index-7.html">home <i class="fa fa-angle-right"></i></a></li>
        				<li><a href="shop-2.html">shop <i class="fa fa-angle-right"></i></a></li>
        				<li><a href="#"> Accessories <i class="fa fa-angle-right"></i></a></li>
        				<li>Etiam molestie</li>
        			</ul>
        		</div>
        	</div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- product-main-area start -->
        <div class="product-main-area">
        	<div class="container">
        		<div class="row" id="parent_click">
        			<!-- product-page-photo start -->
        			<div class="col-lg-7 col-md-7 col-sm-12">
        				<div class="product-page-photo">
        					<div class="product-page-2-tab">
        						<div>
        							<!-- Nav tabs -->
        							<ul class="nav nav-tabs" role="tablist">
        								<li role="presentation" class="active"><a href="#one" aria-controls="home" role="tab" data-toggle="tab"><img src="{{ url('img/product/'.$product->image.'')}}" alt="" /></a></li>
        							</ul>
        							<!-- Tab panes -->
        							<div class="tab-content">
        								<div role="tabpanel" class="tab-pane active" id="one">
        									<a href="#"><img src="{{ url('img/product/'.$product->image.'')}}" alt="" id="test" /></a>
        								</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- product-page-photo end -->
        			<div class="col-lg-5 col-md-5 col-sm-12" id="parent2">
        				<div class="product-page-content" id="parent1">
        					<div class="pro-page-title">
        						<h1>{{ $product->name }}</h1>
        						<div class="product-nav">
        							<a href="#"><i class="fa fa-angle-left"></i></a>
        							<a href="#"><i class="fa fa-angle-right"></i></a>
        						</div>
        					</div>
        					<div class="product-page-rating">
        						<a href="#"><i class="fa fa-star"></i></a>
        						<a href="#"><i class="fa fa-star"></i></a>
        						<a href="#"><i class="fa fa-star"></i></a>
        						<a href="#"><i class="fa fa-star"></i></a>
        						<a href="#"><i class="fa fa-star"></i></a>
        					</div>
        					<div class="stock-status">
        						<p>In stock</p>
        					</div>
        					<div class="product-page-price">
        						@if($product->promotion == 0)
        						<span class="pro-price">{{ number_format($product->unit_price) }} VND</span>
        						@else
        						<span class="old-price">{{ number_format($product->unit_price) }}</span>
        						<span class="pro-price">{{ number_format($product->promotion) }} VND</span>
        						@endif
        					</div>
        					<div class="pro-shor-desc">
        						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
        					</div>
        					<div class="product-total-cart" id="parent_cart">
        						<form action="#" id="form_cart">
        							<input type="text" value="1" class="quantity" />
        							<button type="button" class="add_cart" id="{{ $product->id }}">Add to cart</button>
        						</form>
        					</div>
        					<div class="product-wishlist">
        						<a href="#"><i class="fa fa-heart-o"></i></a>
        						<a href="#"><i class="fa fa-toggle-off"></i></a>
        					</div>
        					<div class="product-meta">
        						<span class="posted-in">Categories:
        							<a href="#"> Accessories</a>,
        							<a href="#"> Kids</a>,
        							<a href="#"> Shoes</a>.
        						</span>
        						<span class="tag-in">Tags:
        							<a href="#"> electronic</a>,
        							<a href="#"> laptop</a>.
        						</span>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-12 col-sm-12">
        				<div class="product-share-icon">
        					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
        					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
        					<a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
        					<a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
        					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
        				</div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-12 col-sm-12">
        				<div class="product-tab">
        					<div>
        						<!-- Nav tabs -->
        						<ul class="nav nav-tabs" role="tablist">
        							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
        							<li role="presentation"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Additional Information</a></li>
        							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews ({{ $numComment }})</a></li>
        						</ul>

        						<!-- Tab panes -->
        						<div class="tab-content">
        							<div role="tabpanel" class="tab-pane active" id="home">
        								<div class="product-page-tab-content">
        									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
        									<p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
        								</div>
        							</div>
        							<div role="tabpanel" class="tab-pane" id="information">
        								<div class="product-page-tab-content">
        									<table>
        										<tbody>
        											<tr class="">
        												<th>Weight</th>
        												<td class="product_weight">10 kg</td>
        											</tr>
        											<tr class="alt">
        												<th>Dimensions</th>
        												<td class="product_dimensions">10 x 20 x 30 cm</td>
        											</tr>
        											<tr class="">
        												<th>Size</th>
        												<td><p>L, M, S, XL</p></td>
        											</tr>											
        										</tbody>
        									</table>
        								</div>
        							</div>
        							<div role="tabpanel" class="tab-pane" id="profile">
        								<div class="product-page-comments">
        									<h2>1 review for Feugiat justo lacinia</h2>
									<!-- <ul>
										<li>
											<div class="product-comments">
												<img src="{{ url('img/blog/comments/2.jpg')}}" alt="" />
												<div class="product-comments-content">
													<p><strong>admin</strong> -
														<span>February 17, 2015:</span>
														<span class="pro-comments-rating">
															<i class="fa fa-star"></i>								
															<i class="fa fa-star"></i>								
															<i class="fa fa-star"></i>								
															<i class="fa fa-star"></i>								
														</span>
													</p>
													<div class="desc">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
													</div>
												</div>
											</div>
										</li>
									</ul> -->
									<div class="review-form-wrapper">
										<h3>Add a review</h3>
										<form method="POST" id="comment_form">
											<div class="form-group">
												<input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
											</div>
											<div class="form-group">
												<textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
											</div>
											<div class="form-group">
												<input type="hidden" name="comment_id" id="comment_id" value="0" />
												<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
											</div>
										</form>
										<span id="comment_message"></span>
										<br />
										<div id="display_comment"></div>
										<ul class="pagination">
											<li class="page-item disabled">
												<a class="page-link" href="#" tabindex="-1">Previous</a>
											</li>
											<li class="page-item active">
												<a class="page-link" href="#" value="1">1<span class="sr-only">(current)</span></a>
											</li>
											@for($i=2; $i<=$page; $i++)
											<li class="page-item"><a class="page-link" href="#" value="{{$i}}">{{ $i }}</a></li>
											@endfor
											<li class="page-item">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
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
<!-- product-main-area end -->
<!-- features-area start -->
<div class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-heading">
					<h3>Up-Sells</h3>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="features-curosel">
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						<div class="product-img">
							<a href="#">								
								<img class="first-img" src="{{ url('img/product/20.jpg')}}" alt="" />
								<img class="second-img" src="{{ url('img/product/15.jpg')}}" alt="" />
							</a>
							<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
							<div class="action-buttons">
								<a class="add-to-cart" href="#" ><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
								<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
								<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
							</div>
						</div>
						<div class="product-content">
							<div class="pro-rating">
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
							<h5><a href="#">Aliquam lobortis est</a></h5>
							<span class="pro-price">£515.00</span>
						</div>
					</div>
				</div>
				<!-- single-features end -->
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						<span class="sale-text">Sale</span>
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/19.jpg')}}" alt="" />
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
							<h5><a href="#">Condimentum posuere</a></h5>
							<span class="old-price">£230.00</span>
							<span class="pro-price">£220.00</span>
						</div>
					</div>
				</div>
				<!-- single-features end -->
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						<span class="sale-text">Sale</span>
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/10.jpg')}}" alt="" />
								<img class="second-img" src="{{ url('img/product/11.jpg')}}" alt="" />
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
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
							<h5><a href="#">Phasellus vel hendrerit</a></h5>
							<span class="old-price">£80.00</span>
							<span class="pro-price">£70.00</span>
						</div>
					</div>
				</div>
				<!-- single-features end -->
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						<span class="sale-text">Sale</span>
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/22.jpg')}}" alt="" />
								<img class="second-img" src="{{ url('img/product/21.jpg')}}" alt="" />
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
							<h5><a href="#">Dignissim venenatis</a></h5>
							<span class="old-price">£80.00</span>
							<span class="pro-price">£70.00</span>
						</div>
					</div>
				</div>
				<!-- single-features end -->
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/8.jpg')}}" alt="" />
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
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
							<h5><a href="#">Vulputate justo</a></h5>
							<span class="pro-price">£90.00</span>
						</div>
					</div>
				</div>
				<!-- single-features end -->
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						<span class="sale-text">Sale</span>
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/10.jpg')}}" alt="" />
								<img class="second-img" src="{{ url('img/product/11.jpg')}}" alt="" />
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
								<a href="#"><i class="fa fa-star"></i></a>
							</div>
							<h5><a href="#">Phasellus vel hendrerit</a></h5>
							<span class="pro-price">£55.00</span>
						</div>
					</div>
				</div>
				<!-- single-features end -->
			</div>
		</div>	
	</div>
</div>
<!-- features-area end -->	
<!-- features-area start -->
<div class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="section-heading">
					<h3>Related Products</h3>
				</div>
			</div>
		</div>	
		<div class="row">
			<div class="features-curosel">
				@foreach($relateProduct as $key => $item)
				<!-- single-features start -->
				<div class="col-md-3">
					<div class="single-features">
						@if($item['promotion'] != 0)
						<span class="sale-text">Sale</span>
						@endif
						<div class="product-img">
							<a href="#">
								<img class="first-img" src="{{ url('img/product/'.$item['image'].'')}}" alt="" />
								<img class="second-img" src="{{ url('img/product/4.jpg')}}" alt="" />
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
							<h5><a href="#">{{ $item['name'] }}</a></h5>
							@if($item['promotion'] == 0)
							<span class="pro-price">{{ number_format($item['unit_price']) }} VND</span>
							@else
							<span class="old-price">{{ number_format($item['unit_price']) }}</span>
							<span class="pro-price">{{ number_format($item['promotion']) }} VND</span>
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

<!-- footer start -->
<footer>
	<!-- footer-top-area start -->
	<div class="footer-top-area">
		<div class="container">
			<div class="row">
				<!-- footer-widget start -->
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="footer-widget">
						<h3 class="widget-title">Infomation</h3>
						<ul class="footer-menu">
							<li><a href="#">Our Blog</a></li>
							<li><a href="#">About Our Shop</a></li>
							<li><a href="#">Secure Shopping</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Delivery infomation</a></li>
						</ul>
					</div>
				</div>
				<!-- footer-widget end -->
				<!-- footer-widget start -->
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="footer-widget">
						<h3 class="widget-title">My Account</h3>
						<ul class="footer-menu">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="#">Shopping cart</a></li>
						</ul>
					</div>
				</div>
				<!-- footer-widget end -->
				<!-- footer-widget start -->
				<div class="col-lg-3 col-md-3 hidden-sm">
					<div class="footer-widget">
						<h3 class="widget-title">Our services</h3>
						<ul class="footer-menu">
							<li><a href="#">Shipping & Returns</a></li>
							<li><a href="#">Secure Shopping</a></li>
							<li><a href="#">International Shipping</a></li>
							<li><a href="#">Affiliates</a></li>
						</ul>
					</div>
				</div>
				<!-- footer-widget end -->
				<!-- footer-widget start -->
				<div class="col-lg-3 col-md-3 col-sm-4">
					<div class="footer-widget widget-contact">
						<h3 class="widget-title">Contact Us</h3>
						<ul class="footer-menu">
							<li><i class="fa fa-map-marker"> </i> <strong>Addresss</strong> : 123 Pall Mall, London England</li>
							<li><i class="fa fa-phone"> </i> <strong>tel</strong> : (012) 888 8888</li>
							<li><i class="fa fa-fax"> </i> <strong>fax</strong> : (012) 999 9999</li>
							<li><i class="fa fa-envelope"> </i> <strong>Email</strong> : admin@bootexperts.com</li>
						</ul>
					</div>
				</div>
				<!-- footer-widget end -->
			</div>
		</div>
	</div>
	<!-- footer-top-area end -->
	<!-- footer-middle-area start -->
	<div class="footer-middle-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="header-social-icon">
						<a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" title="tumblr"><i class="fa fa-tumblr"></i></a>
						<a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a>
						<a href="#" title="dribbble"><i class="fa fa-dribbble"></i></a>
					</div>					
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="newsletter">
						<h2 class="news-title">Newsletter</h2>
						<div class="join-us">
							<form action="#">
								<input type="text" placeholder="Email"/>
								<input type="submit" value="Subscribe!" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-middle-area end -->
	<!-- footer-bootom-area start -->
	<div class="footer-bootom-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="copyright">
						<p>Copyright © 2015 <a href="http://bootexperts.com/" target="_blank">Bootexperts</a> All Rights Reserved</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="payment">
						<img src="{{ url('img/payment1.png')}}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- footer-bootom-area end -->
</footer>
<!-- footer end -->	

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
	<!-- Modal -->
	<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<div class="modal-product">
						<div class="product-images">
							<div class="main-image images">
								<img alt="" src="{{ url('img/product/13.jpg') }}">
							</div>
						</div><!-- .product-images -->

						<div class="product-info">
							<h1>Diam quis cursus</h1>
							<div class="price-box">
								<p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
							</div>
							<a href="shop.html" class="see-all">See all features</a>
							<div class="quick-add-to-cart">
								<form method="post" class="cart">
									<div class="numbers-row">
										<input type="number" id="french-hens" value="3">
									</div>
									<button class="single_add_to_cart_button" type="submit">Add to cart</button>
								</form>
							</div>
							<div class="quick-desc">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
							</div>
							<div class="social-sharing">
								<div class="widget widget_socialsharing_widget">
									<h3 class="widget-title-modal">Share this product</h3>
									<ul class="social-icons">
										<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
										<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
										<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
										<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
										<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div><!-- .product-info -->
					</div><!-- .modal-product -->
				</div><!-- .modal-body -->
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->
	</div>
	<!-- END Modal -->
</div>
<!-- END QUICKVIEW PRODUCT -->		

<!-- JS -->

<!-- jquery js -->
<script src="{{ url('js/vendor/jquery-1.11.2.min.js') }}"></script>

<!-- bootstrap js -->
<script src="{{ url('js/bootstrap.min.js') }}"></script>

<!-- owl.carousel.min js -->
<script src="{{ url('js/owl.carousel.min.js') }}"></script>

<!-- slicknav js -->
<script src="{{ url('js/jquery.slicknav.js') }}"></script>

<!-- countdown js -->
<script src="{{ url('js/jquery.countdown.min.js') }}"></script>

<!-- price-slider js -->
<script src="{{ url('js/price-slider.js') }}"></script>

<!-- jquery.scrollUp js -->
<script src="{{ url('js/jquery.scrollUp.min.js') }}"></script>			

<!-- Lib js -->		
<script src="{{ url('lib/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script src="{{ url('lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ url('lib/rs-plugin/rs.home.js') }}"></script>

<!-- wow js -->
<script src="{{ url('js/wow.js') }}"></script>		
<script>
	new WOW().init();
</script>		

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>		

<!-- plugins js -->
<script src="{{ url('js/plugins.js') }}"></script>

<!-- main js -->
<script src="{{ url('js/main.js') }}"></script>

</body>

<!-- Tieu Long Lanh -->
</html>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
	function flyToElement(flyer, flyingTo) {
		var $func = $(this);
		var divider = 3;
		var flyerClone = $(flyer).clone();
		$(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
		$('body').append($(flyerClone));
		var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
		var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;

		$(flyerClone).animate({
			opacity: 0.4,
			left: gotoX,
			top: gotoY,
			width: $(flyer).width()/divider,
			height: $(flyer).height()/divider
		}, 700,
		function () {
			$(flyingTo).fadeOut('fast', function () {
				$(flyingTo).fadeIn('fast', function () {
					$(flyerClone).fadeOut('fast', function () {
						$(flyerClone).remove();
					});
				});
			});
		});
	}
	$(document).ready(function(){
		$('.add_cart').on('click',function(e){
			e.preventDefault();
	        //Scroll to top if cart icon is hidden on top
	        $('html, body').animate({
	        	'scrollTop' : $(".shopping-cart").position().top
	        });
	        //Select item image and pass to the function
	        var itemImg = $(this).parent('#form_cart').parent('#parent_cart').parent('#parent1').parent('#parent2').parent('#parent_click').find("img").eq(1);
	        flyToElement($(itemImg), $('.shopping-cart'));
    	});

		$('#comment_form').on('submit', function(event){
			event.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
				url: "{{ route('addComment') }}",
				method: "GET",
				data: form_data,
				dataType : 'JSON',
				success:function(data){
					if(data.error != ''){
						$('#comment_form')[0].reset();
						$('#comment_message').html(data.error);
						$('#comment_id').val('0');
						load_comment();
					}
				}
			});
		});
		load_comment();
		function load_comment(){
			$.ajax({
				url: "{{ route('fetchComment') }}",
				method: "GET",
				success:function(data){
					$('#display_comment').html(data);
				}
			});
		}
		$(document).on('click', '.reply', function(){
			var comment_id = $(this).attr('id');
			$('#comment_id').val(comment_id);
			$('#comment_name').focus();
		});
		$('.pagination li a').each(function(){
			$(this).click(function(e){
				e.preventDefault();
				var page = $(this).attr('value');
				$.ajax({
					url: "{{ route('fetchComment') }}",
					method: 'GET',
					data: {page:page},
					success:function(data){
						$('#display_comment').html(data);
					}
				});
			});
		});

		
		$('input.quantity').blur(function(){
			var quantity = parseFloat(this.value);
			$(this).val(quantity.toFixed());
		});

		$('.add_cart').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			var qty = $('input.quantity').val();
			$.ajax({
				url: "{{ route('product.addManyCart') }}",
				method: "GET",
				data: {id: id, qty:qty},
				success:function(data){
					$('.cart-total').html(data);
				}
			});
		});
	});
</script>
