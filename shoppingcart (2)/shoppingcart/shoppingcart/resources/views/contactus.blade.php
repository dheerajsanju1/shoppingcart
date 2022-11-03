<!DOCTYPE html>
<html>
<head>
	<title>ENEST-1</title>
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
					<div class="contact-us">
						<p>CONTACT US</p>
					</div>
					<div class="costomer-info">
						<div class="costomer-service">
							<p>Customer Service:91 7508115758</p>
							<p>Ludhiana,Punjab,INDIA</p>
							<p>Yorex Infotec.</p>
						</div>
						<hr class="hr">
						<div class="info">
							<div class="required-info">
								<h4>Contact Us</h4>
								<p>Have a question? We have 24x7 Costomer Service.</p>
								<p>Befor you contact us,skim through our self Serve opton and Frequently Asked Question for Quicker answer.</p>
								<p>Want to know more about the status of the orders?</p>
								<p>Login to view our order.</p>
							</div>
						</div>
						<div class="border">
							<div class="border-1">
								<div class="border-2">
									<p>Contact Us</p>
									
								</div>
								<div class="requir-info">
									<span>*Required information</span>
								</div>
								<div class="input-info">
									<div class="input-information">
										<form action="{{url('form-last')}}" method="post">
											{{ csrf_field() }}
											<table class=" form">
												<tr>
													<td ><p>full Name* </p></td>
													<td><input type="text" name="fullname"></td>
												</tr>
												<tr>
													<td > <p>E-mail Address </p></td>
													<td><input type="text" name="email"></td>
												</tr>
												<tr>
													<td> <p>Message</p></td>
													<td><textarea name="meassage"></textarea></td>
												</tr>
												<tr>
													<td><input type="submit" name="submit" value="save"></td>
												</tr>
											</table>
											<div class="snd-btn">											
											
											</div>
										</form>
									</div>
								</div>
							</div>
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