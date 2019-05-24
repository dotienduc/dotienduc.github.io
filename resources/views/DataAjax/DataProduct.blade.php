<!-- shop-product-details start -->
<div class="shop-product-details">
							@foreach($products as $key => $item)
							<!-- single-features start -->
							<div class="col-md-4 col-sm-4">
								<div class="single-features">
								@if($item->promotion == 0)
										@else
										<span class="sale-text">Sale</span>
										@endif
									<div class="product-img">
										<a href="#">
											<img class="first-img" src="{{ url('img/product/'.$item->image.'') }}" alt="" />
											<!-- <img class="second-img" src="{{ url('img/product/4.jpg') }}" alt="" /> -->
										</a>
										<div class="action-buttons">
											<input type="hidden" id="image{{$item->id}}" name="hidden_image" value="{{ $item->image }}"/>
											<input type="hidden" id="quantity{{$item->id}}" name="hidden_quantity" value="1"/>
											<input type="hidden" id="name{{$item->id}}" name="hidden_name" value="{{ $item->name }}"/>
											<input type="hidden" id="unit_price{{$item->id}}" name="hidden_unit_price" value="{{ $item->unit_price }}"/>
											<a class="add-to-cart" value="{{ $item->id }}" id="{{ $item->id }}"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
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
										<h5><a href="{{ route('productDetail', ['id' => $item->id]) }}">{{ $item->name }}</a></h5>
										@if($item->promotion == 0)
										<span class="pro-price">{{ number_format($item->unit_price) }} VND</span>
										@else
										<span class="old-price">{{ number_format($item->unit_price) }}</span>
										<span class="pro-price">{{ number_format($item->promotion) }} VND</span>
										@endif
									</div>
								</div>
							</div>
							<!-- single-features end -->
							@endforeach
						</div>
						<!-- shop-product-details end -->
					
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
    $('.add-to-cart').on('click',function(e){
		e.preventDefault();
        //Scroll to top if cart icon is hidden on top
        $('html, body').animate({
            'scrollTop' : $(".shopping-cart").position().top
        });
        //Select item image and pass to the function
        var itemImg = $(this).parent('.action-buttons').parent('.product-img').find("img").eq(0);
        flyToElement($(itemImg), $('.shopping-cart'));
    });

	//Cart 
	$('.add-to-cart').click(function(e){
			e.preventDefault();
			var id = $(this).attr('id');
			var action = 'add';
			$.ajax({
				url: "{{ route('product.addtoCart') }}",
				method: 'GET',
				data:{
					id:id, action: action
				},
				success:function(data){
					$('.cart-total').html(data);
				}
			})
	});
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