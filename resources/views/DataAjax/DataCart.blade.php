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
										@foreach($products as $product)
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
											<div class="pro-del"><a href="{{ route('product.removeOne', ['id' => $product['item']['id']]) }}" class="removeOne" id="{{ $product['item']['id'] }}"><i class="fa fa-times-circle"></i></a></div>											
										</div>
										@endforeach
										<div class="clear"></div>
									@endif
										<p class="total">Subtotal:
											@if(Session::has('cart'))		
												<span class="amount">{{ number_format($totalPrice) }} VND</span>
												@else
												<span class="amount">0 VND</span>
												@endif
										</p>
										<div class="clear"></div>
										<p class="cart-button-top"><a href="{{ route('getCheckout') }}">Checkout</a></p>
									</div>
								</li>
							</ul>
<script>
$(document).ready(function(){
	$('.removeOne').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id');
		$.ajax({
			url: "{{ route('product.removeOne') }}",
			method: 'GET',
			data: {id: id},
			success:function(data){
				$('.cart-total').html(data);
			}
		});
	});
});
</script>