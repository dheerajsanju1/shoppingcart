<!DOCTYPE html>
<html>
<head>
	<title>ENEST-3</title>
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
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						@include('common/categories')
					</div>
				</div>
				<div class="contact">
					@foreach($sql as $s)
					<div class="contact-us">
						<p>{{$s->productname}}</p>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="{{$s->productimage}}">
							</div>
							<div class="stock">
								<p>In Stock: {{$s->productquantity}}</p>
							</div>
							<div class="detail">
								<span>Details:</span>
								<p>{{$s->productname}}</p>
							</div>
						</div>
						<div class="machine-info">
							<div class="washer">
								<p>{{$s->productname}}</p>
							</div>
							<div class="model-info">
								<span>Model:{{$s->productname}}</span>
								<p>Manufacturer:{{$s->productname}}</p>
							</div>
							<div class="quantity">
								<form action="" method="post">
									{{ csrf_field() }}
									<input type="text" name="id" value="">
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="" name="qty"></td>
										</tr>
									</table>
							
								<div class="price">
									<span>Rs.6500</span>
								</div>
							</div>
							<div class="cart">
								<input type="submit" name="submit" value="Add to Cart">
							</div>
						</form>
							<div class="checkout">
								<input type="button" name="" value="checkout">
							</div>
						</div>
					</div>
					@endforeach
					<div class="info">
						<form>
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>
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