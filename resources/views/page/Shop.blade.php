@extends('layout.master')
@section('content')
	<!-- blog-header-area start -->	
	<div class="shop-header-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="shop-header-title">
						<h1>Shop All Products</h1>
						<div class="shop-menu">
							<ul>
								<li><a href="#">All</a></li>
								<li><a href="#">Accessories</a></li>
								<li><a href="#">Digital</a></li>
								<li><a href="#">Kids</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-header-area end -->
	<!-- breadcrumb-area start -->
	<div class="breadcrumb-area shop-breadcrumb">
		<div class="container">
			<div class="breadcrumb">
				<ul>
					<li><a href="{{ url('master') }}">home <i class="fa fa-angle-right"></i></a></li>
					<li>shop</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- breadcrumb-area end -->
	<!-- blog-main-area start -->
	<div class="blog-main-area">
		<div class="container">
			<div class="row">
				<!-- sidebar start -->
				<div class="col-lg-3 col-md-3 col-sm-12">
					<!-- shop-categories start -->
					
					<!-- shop-categories end -->
					<!-- shop-filter start -->
					<div class="shop-filter shop-space">
						<h2 class="shop-sidebar-title"><span>Filter By Price</span></h2>
					<label for="amount">Price range:</label>
					<input type="hidden" id="hidden_minimum_price" value="500000"/>
					<input type="hidden" id="hidden_maximum_price" value="1500000"/>
					<p id="price_show">500,000 - 1,500,000 VND</p>
					<div id="slider-range"></div>
						
					</div>
					<!-- shop-filter end -->
					<!-- shop-categories start -->
					<!-- <div class="shop-categories shop-space">
						<h2 class="shop-sidebar-title"><span>Size</span></h2>
						<ul class="sidebar-menu">
							<li><a href="#">L</a> <span> (1)</span></li>
							<li><a href="#">M</a> <span> (1)</span></li>
							<li><a href="#">S</a> <span> (1)</span></li>
							<li><a href="#">XL</a> <span> (1)</span></li>
						</ul>
					</div> -->
					<!-- shop-categories end -->
					<!-- shop-categories start -->
					<div class="shop-categories shop-space">
						<h2 class="shop-sidebar-title"><span>Type Product</span></h2>
						<ul class="tag-list">
							<li><a href="#" class="AllProducts">All</a></li>
							@foreach($type as $values)
							<li><a href="#" value="{{ $values->id }}" class="type_product">{{ $values->name }}</a></li>
							@endforeach
						</ul>
					</div>
					<!-- shop-categories end -->
					<!-- shop-featured start -->
					<div class="shop-featured shop-space">
						<h2 class="shop-sidebar-title"><span>featured</span></h2>
						<div class="shop-product">
							<div class="shop-pro-img">
								<a href="#"><img src="{{ url('img/product/shop/1.jpg') }}" alt="" /></a>
							</div>
							<div class="shop-pro-content">
								<h3 class="shop-pro-name"><a href="#">Ornare sed consequat</a></h3>
								<div class="shop-price">
									<span class="shop-new">£515.00</span>
								</div>
								<div class="shop-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
							</div>
						</div>
						<div class="shop-product">
							<div class="shop-pro-img">
								<a href="#"><img src="{{ url('img/product/shop/2.jpg') }}" alt="" /></a>
							</div>
							<div class="shop-pro-content">
								<h3 class="shop-pro-name"><a href="#">Etiam molestie</a></h3>
								<div class="shop-price">
									<span class="shop-old">£230.00</span>
									<span class="shop-new">£220.00</span>
								</div>
								<div class="shop-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
							</div>
						</div>
						<div class="shop-product">
							<div class="shop-pro-img">
								<a href="#"><img src="{{ url('img/product/shop/3.jpg') }}" alt="" /></a>
							</div>
							<div class="shop-pro-content">
								<h3 class="shop-pro-name"><a href="#">Aenean eu tristique</a></h3>
								<div class="shop-price">
									<span class="shop-old">£80.00</span>
									<span class="shop-new">£70.00</span>
								</div>
								<div class="shop-rating">
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
									<a href="#"><i class="fa fa-star"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!-- shop-featured end -->										
				</div>
				<!-- sidebar end -->
				<div class="col-lg-9 col-md-9 col-sm-12">
					<div class="row">
						<!-- toolbar start -->
						<div class="col-md-12 col-sm-12">
							<div class="toolbar">
								<div class="view-mode">
									<a class="grid active list" value="list1"><i class="fa fa-th-large"></i></a>
									<a class="list" value="list2"><i class="fa fa-th-list"></i></a>
								</div>
								<div class="page-number">
									<ul>
										<li class="page-num-active"><a href="#" value="1">1</a></li>
										@for($i = 2 ; $i <= $total_page; $i++)
										<li><a value="{{ $i }}">{{ $i }}</a></li>
										@endfor
										<li><a href="#" ><i class="fa fa-arrow-right"></i></a></li>
									</ul>
								</div>
								<div class="show-result">
									<p>Showing 1–12 of 20 results</p>
								</div>
								<div class="toolbar-form">
									<form action="#">
										<div class="tolbar-select">
											<p>Sort by</p>
											<select class="sort" name="select">
											  <option value="default">Default sorting</option>
											  <option value="popular">Sort by popularity</option>
											  <option value="newness">Sort by newness</option>
											  <option value="ASC">Sort by price: low to high</option>
											  <option value="DESC">Sort by price: high to low</option>
											</select> 
										</div>
									</form>								
								</div>
							</div>
						</div>
						<!-- toolbar end -->
						<!-- shop-product-details start -->
						<div class="shop-product-details">
							
						</div>
						<!-- shop-product-details end -->
						<!-- toolbar start -->
						<div class="col-md-12 col-sm-12">
							<div class="toolbar toolbar-border">
								<div class="view-mode">
									<a class="grid active" href="shop.html"><i class="fa fa-th-large"></i></a>
									<a class="list" href="shop-list.html"><i class="fa fa-th-list"></i></a>
								</div>
								<div class="page-number">
									<ul>
										<li class="page-num-active"><a href="#" value="1">1</a></li>
										@for($i = 2 ; $i <= $total_page; $i++)
										<li><a href="#" value="{{ $i }}">{{ $i }}</a></li>
										@endfor
										<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
									</ul>
								</div>
								<div class="show-result">
									<p>Showing 1–12 of 20 results</p>
								</div>
								<div class="toolbar-form">
									<form action="#">
										<div class="tolbar-select">
											<p>Sort by</p>
											<select class="sort" name="select">
											  <option value="volvo">Default sorting</option>
											  <option value="saab">Sort by popularity</option>
											  <option value="mercedes">Sort by popularity</option>
											  <option value="audi">Sort by newness</option>
											  <option value="audi">Sort by price: low to high</option>
											  <option value="audi">Sort by price: high to low</option>
											</select>
										</div>
									</form>
								</div>
							</div>
						</div>
						<!-- toolbar end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- blog-main-area end -->
@endsection
