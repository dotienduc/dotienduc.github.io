 <!-- header start -->    
 <header>
	<!-- header-top-area start -->
	<div class="header-top-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="email-content">
						<span>duckudo@gmail.com</span>
					</div>
					<div class="header-top-menu">
						<ul>
							<li><a href="#">English <i class="fa fa-caret-down"></i></a>
								<ul>
									<li><a href="#">Spanish</a></li>
								</ul>
							</li>
						</ul>
					</div>					
				</div>	
				<!-- cat-search start -->
				<div class="col-lg-8 col-md-8 col-sm-8">
					<div class="cat-search">
						<div class="cart-total">
							<ul>
								<li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart shopping-cart"></i></span>
								@if(Session::has('cart'))
								 	<span class="cart-no">{{ Session::get('cart')->totalQty }}</span>
								@else
									 <span class="cart-no">0</span>
								@endif
								 </a>
									<div class="mini-cart-content">
									@if(Session::has('cart'))
										@foreach(Session::get('cart')->items as $product)
										<div class="cart-img-details">											
											<div class="cart-img-photo">
												<a href="#"><img src="{{ url('img/product/'.$product['item']['image'].'') }}" alt="" /></a>
												<span class="quantity">{{ $product['qty'] }}</span>
											</div>
											<div class="cart-img-contaent">
												<a href="#"><h4>{{ $product['item']['name'] }}</h4></a>
												@if($product['item']['promotion'] == 0)
												<span>{{ number_format($product['item']['unit_price']) }} VND</span>
												@else
												<span>{{ number_format($product['item']['promotion']) }} VND</span>
												@endif
											</div>
											<div class="pro-del"><a href="{{ route('product.removeOne', ['id' => $product['item']['id']]) }}" class="removeOne" id="{{ $product['item']['id'] }}"><i class="fa fa-times-circle"></i></a>
											<a href="{{ route('product.removeOne', ['id' => $product['item']['id']]) }}" class="removeOne" id="{{ $product['item']['id'] }}"><i class="fas fa-trash-alt"></i></a>
											</div>
										</div>
										@endforeach
										<div class="clear"></div>
									@endif
										<p class="total">Subtotal:
											@if(Session::has('cart'))		
												<span class="amount">{{ number_format(Session::get('cart')->totalPrice) }} VND</span>
												@else
												<span class="amount">0 VND</span>
												@endif
										</p>
										<div class="clear"></div>
										<p class="cart-button-top"><a href="{{ route('getCheckout') }}">Checkout</a></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- header-search start -->
						<div class="header-search">						
							<div class="top-category">
								<ul>
									<li><a href="#">All Categories</a>
										<ul>
											<li><a href="#">All Categories</a></li>
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Digital</a></li>
											<li><a href="#">_Camera</a></li>
											<li><a href="#">_Refrigerator</a></li>
											<li><a href="#">_Smart Phone</a></li>
											<li><a href="#">Kids</a></li>
											<li><a href="#">Shoes</a></li>
										</ul>
									</li>
									<li class="search-top">
										<form action="#">
											<input type="text" id="search"name="search" placeholder="Search product..." />
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</li>
								</ul>
							</div>
						</div>
						<!-- header-search end -->
					</div>
				</div>
				<!-- cat-search end -->
			</div>
		</div>
	</div>	
	<!-- header-top-area end -->
	<!-- mainmenu-area start -->
	<div class="mainmenu-area">
		<div class="container">
			<div class="row">
				<!-- logo start -->
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="logo">
						<a href="{{ url('master') }}"><img src="{{ url('img/logo/logo3.png') }}" alt="" /></a>
					</div>
				</div>
				<!-- logo end -->
				<div class="col-lg-8 col-md-8 col-sm-12">
					<div class="mainmenu">
						<nav>
							<ul>
								<li><a href="{{ url('master') }}">Home <span></span></a>
								</li>
								<li><a href="{{ url('shop') }}">Shop <span></span></a>								
								</li>
								<li><a href="blog-nosidebar.html">Blog <span><i class="fa fa-caret-down"></i></span></a>
									<div class="mega-menu">
										<span>
											<a class="mega-menu-title" href="#">Blog Layouts </a>
											<a href="blog-nosidebar.html">None Sidebar</a>
											<a href="blog-fullwidth.html">Full Width</a>
											<a href="blog-left-sidebar.html">Sidebar Left</a>
											<a href="blog-right-sidebar.html">Sidebar Right</a>
										</span>
									</div>									
								</li>
								<li><a href="#">Buy Now</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu start -->
			<div class="row">
				<div class="col-md-12">
					<div class="mobile-menu">
						<nav>
							<ul id="mobile-menu">
								<li><a href="index.html">Home</a>								
								</li>
								<li><a href="shop.html">Shop</a>
									<ul>
										<li><a href="#">Shop Layouts</a>
											<ul>
												<li><a href="#">Full Width</a></li>
												<li><a href="#">Sidebar Left</a></li>
												<li><a href="#">Sidebar Right</a></li>
												<li><a href="#">Sidebar Right</a></li>
												<li><a href="shop-list.html">List View</a></li>
											</ul>
										</li>
									</ul>								
								</li>
								<li><a href="blog-nosidebar.html">Blog</a>
									<ul>
									<li><a href="#">Blog Layouts</a>
										<ul>
											<li><a href="blog-nosidebar.html">None Sidebar</a></li>
											<li><a href="blog-fullwidth.html">Full Width</a></li>
											<li><a href="blog-left-sidebar.html">Sidebar Left</a></li>
											<li><a href="blog-right-sidebar.html">Sidebar Right</a></li>
										</ul>									
									</li>
									<li><a href="#">Blog Pages</a>
										<ul>
											<li><a href="blog-author.html">Author</a></li>
											<li><a href="blog-archive.html">Archive</a>	</li>
											<li><a href="blog-category.html">Category </a></li>
											<li><a href="blog-tag.html">Blog Tag</a></li>
										</ul>									
									</li>
									<li><a href="#">Post Formats</a>
										<ul>
											<li><a href="blog-post-image.html">Image Format</a></li>
											<li><a href="blog-post-gallery.html">Gallery Format </a></li>
											<li><a href="blog-post-audio.html">Audio Format </a></li>
											<li><a href="blog-post-video.html">Video Format</a></li>
										</ul>									
									</li>
									</ul>
								</li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="product.html">Simple Product</a></li>
										<li><a href="product-variable.html">Variable Product</a></li>
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-list.html">shop-list</a></li>
										<li><a href="404.html">Error 404</a></li>
									</ul>									
								</li>
								<li><a href="#">Buy Now</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<!-- mobile menu end -->			
		</div>
	</div>
	<!-- mainmenu-area end -->
	</header>
	<!-- header end --> 