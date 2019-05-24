<!-- single-features start -->
@foreach($products as $key => $item)
<div class="col-md-12 col-sm-12">
								<div class="single-features">
									<div class="product-img">
										<a href="#">								
											<img class="first-img" src="{{ url('img/product/1.jpg') }}" alt="" />
											<img class="second-img" src="{{ url('img/product/2.jpg') }}" alt="" />
										</a>
										<span class="sale-text">Sale</span>
										<a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
									</div>
									<div class="product-content">
										<h5><a href="#">{{ $item->name }}</a></h5>
										<div class="pro-rating">
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
											<a href="#"><i class="fa fa-star"></i></a>
										</div>
										<span class="old-price">£230.00</span>
										<span class="pro-price">£515.00</span>
										<div class="shop-desc">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
										</div>
										<div class="action-buttons">
											<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
											<a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
											<a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
										</div>										
									</div>
								</div>
							</div>
							<!-- <script>
								$(document).ready(function(){

								});
							</script> -->
@endforeach
 <!-- single-features end -->
