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
					<h1><U>YOUR PRODUCT-LIST</U></h1>
					<div class="dish-info">
						<table border="1" width="100%">
							<tr>
								<th>id</th>
								<th>userid</th>
								<th>productid</th>
								<th>price</th>
								<th>qty</th>
								<th>total</th>
								 <th>Remove</th>
								
							</tr>
							<?php 
							$total=0;
							$q=0;
							$sum=0;
							?>
							@foreach($ch as $c)
							<tr>
								<?php 
									$sum=$c->product->productprice * $c->qty;
									$total=$sum+$total;
									$q=$q+$c->qty;


								?>
								<th>{{$c->id}}</th>
								<th>{{$c->signup->fullname}}</th>
								<th>{{$c->product->productname}}</th>
								<th>{{$c->product->productprice}}</th>
								<th>{{$c->qty}}</th>
								<th>{{$c->product->productprice * $c->qty}}</th>
								<th> <a href="{{'check/'.$c->id}}"> Remove</a></th>
								
								
							</tr>
							@endforeach
							<tr>
								<th colspan="4">total</th>
								<th><?php echo $q ?></th>
								<th><?php echo $total ?></th>
								
							</tr>
						</table>
							
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