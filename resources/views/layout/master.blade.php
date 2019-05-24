<!doctype html>
<html class="no-js" lang="">

<!-- Tieu Long Lanh -->
<head>
		<!-- Basic page needs
			============================================ -->	
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<title>Home page </title>
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
			
		<!-- main CSS
			============================================ -->		
			<link rel="stylesheet" href="{{ url('css/main.css') }}">
			
		<!-- home-3-color CSS
			============================================ -->		
			<link rel="stylesheet" href="{{ url('css/home-3-color.css') }}">
			
		<!-- style CSS
			============================================ -->			
			<link rel="stylesheet" href="{{ url('style.css') }}">
			
		<!-- responsive CSS
			============================================ -->			
			<link rel="stylesheet" href="{{ url('css/responsive.css') }}">

			<link rel="stylesheet" href="{{ url('css/jquery-ui.css') }}">
			<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
		<!-- modernizr js
			============================================ -->		
			<script src="{{ url('js/vendor/modernizr-2.8.3.min.js') }}"></script>
			
			
			<style>
				/* Full-width input fields */
				input[type=text], input[type=password] {
					width: 100%;
					padding: 15px;
					margin: 5px 0 22px 0;
					display: inline-block;
					border: none;
					background: #f1f1f1;
				}

				/* Add a background color when the inputs get focus */
				input[type=text]:focus, input[type=password]:focus {
					background-color: #ddd;
					outline: none;
				}

				/* Set a style for all buttons */
				button {
					background-color: #4CAF50;
					color: white;
					padding: 14px 20px;
					margin: 8px 0;
					border: none;
					cursor: pointer;
					width: 100%;
					opacity: 0.9;
				}

				button:hover {
					opacity:1;
				}

				/* Extra styles for the cancel button */
				.cancelbtn {
					padding: 14px 20px;
					background-color: #f44336;
				}

				/* Float cancel and signup buttons and add an equal width */
				.cancelbtn, .signupbtn {
					float: left;
					width: 50%;
				}

				/* Add padding to container elements */
				.container {
					padding: 16px;
				}

				/* The Modal (background) */
				.modal {
					display: none; /* Hidden by default */
					position: fixed; /* Stay in place */
					z-index: 1; /* Sit on top */
					left: 0;
					top: 0;
					width: 100%; /* Full width */
					height: 100%; /* Full height */
					overflow: auto; /* Enable scroll if needed */
					background-color: #474e5d;
					padding-top: 50px;
				}

				/* Modal Content/Box */
				.modal-content {
					background-color: #fefefe;
					margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
					border: 1px solid #888;
					width: 80%; /* Could be more or less, depending on screen size */
				}

				/* Style the horizontal ruler */
				hr {
					border: 1px solid #f1f1f1;
					margin-bottom: 25px;
				}
				
				/* The Close Button (x) */
				.close {
					position: absolute;
					right: 35px;
					top: 15px;
					font-size: 40px;
					font-weight: bold;
					color: #f1f1f1;
				}

				.close:hover,
				.close:focus {
					color: #f44336;
					cursor: pointer;
				}

				/* Clear floats */
				.clearfix::after {
					content: "";
					clear: both;
					display: table;
				}

				/* Change styles for cancel button and signup button on extra small screens */
				@media screen and (max-width: 300px) {
					.cancelbtn, .signupbtn {
						width: 100%;
					}
				}
			</style>
		</head>
		<body class="home-3">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
        @include('partial.header')

        @yield('content')
        
        @include('partial.footer')
        @include('page.chatbox')
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
        								<img alt="" src="{{ url('img/product/13.jpg') }}" >
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
        
        <!-- plugins js -->
        <script src="{{ url('js/plugins.js') }}"></script>
        
        <!-- main js -->
        <script src="{{ url('js/main.js') }}"></script>
        
    </body>

    <!-- Tieu Long Lanh -->
    </html>
    <style>
    	#loading
    	{
    		text-align:center; 
    		background: {{url('img/loader.gif')}} no-repeat center; 
    		height: 150px;
    	}
    	#ex1Slider .slider-selection {
    		background: #BABABA;
    	}
    </style>
    <script src="{{ url('js/jquery-ui.js') }}"></script>
    <script src="{{ url('js/jquery-3.4.0.js') }}"></script>
    <script src="{{ url('js/jquery-ui.min.js') }}"></script>
    <script>
    	$(document).ready(function(){
    		$('.page-number ul li a').each(function(){
    			$(this).click(function(e){
    				e.preventDefault();
    				var page = $(this).attr('value');
    				$.ajax({
    					url: "{{ route('getData') }}",
    					method: 'GET',
    					data: {page:page},
    					success:function(data){
    						$('.shop-product-details').html(data);
    					}
    				});
    			});
    		});
    		fetch_data();
    		function fetch_data(){
    			$('.shop-product-details').html('<div id="loading" style="" ></div>');
    			var action = 'fetch_data';
    			var search   = $('#search').val();
    			var minimum_price = $('#hidden_minimum_price').val();
    			var maximum_price = $('#hidden_maximum_price').val();
    			var sort = $("select.sort").children("option:selected").val();
    			var list = $('.list').attr('value');
    			$.ajax({
    				url: "{{ route('fetchData') }}",
    				method: "GET",
    				data: {search: search, action:action, minimum_price:minimum_price, maximum_price:maximum_price
    					, sort:sort, list:list
    				},
    				success:function(data){
    					$('.shop-product-details').html(data);
    				}
    			});
    		}


    		$('#search').on('keyup', function(){
    			fetch_data();
    		});
    		$('.AllProducts').click(function(e){
    			e.preventDefault();
    			fetch_data();
    		});
    		$('.type_product').each(function(){
    			$(this).click(function(e){
    				e.preventDefault();
    				var id_type = $(this).attr('value');
    				$.ajax({
    					url: "{{ route('fetchData') }}",
    					method: 'GET',
    					data: {id_type: id_type},
    					success:function(data){
    						$('.shop-product-details').html(data);
    					}
    				});
    			});
    		});

		//Slider
		$('#slider-range').slider({
			range:true,
			min:500000,
			max:1500000,
			values:[500000, 1500000],
			step:250000,
			stop:function(event, ui)
			{
				$('#price_show').html(ui.values[0] + ' - ' + ui.values[1]+ ' VND');
				$('#hidden_minimum_price').val(ui.values[0]);
				$('#hidden_maximum_price').val(ui.values[1]);
				fetch_data();
			}
		});

		//Sort select
		$("select.sort").change(function(){
			fetch_data();
		});
	});
</script>
