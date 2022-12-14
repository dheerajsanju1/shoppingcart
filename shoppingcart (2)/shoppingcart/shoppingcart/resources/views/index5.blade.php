<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		@include('common/header')
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="main-img">
					<img src="images/16.png">
				</div>
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						@include('common/categories')
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>FEATURED PRODUCTS</p>
					</div>

					@foreach($result as $res)
				 <form action="buycart{{$res->id}}" method="POST">
					{{ csrf_field() }}
					<div class="Camera-info">
						<!-- <div class="cam-info"> -->
							<div class="samsung-cam">
								<div class="cam-info">
									<img src="{{$res->productimage}}">
									<div class="sam-prc">
										<span>{{$res->productname}}</span>
										<p>{{$res->productprice}}</p>
										
									</div>
									<hr class="hr2">
									<div class="cart-btn">
										<i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<a href="buycart{{$res->id}}"><input type="submit" name="" value="Add to cart"></a>
									</div>
								</div>
							</div>
						
						<!-- </div> -->
					</div>
				 </form>
					@endforeach
					
					
					
						</div>
					</div>
				</div>
				<div class="list-1">
					<ul>
						<li>HOME</li>
						<li>NEW PROJECT</li>
						<li>SPECIAL</li>
						<li>ALL PRODUCTS</li>
						<li>REVIEWS</li>
						<li>CONTACT</li>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="footer-2">
					<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i>2013 Enest.Privacy Notice</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>