<?php include("header.php"); $_SESSION['page'] = 'Home';?>
<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="item active">
							<div class="col-sm-6">
								<h1><span>D</span>2u - Online Market</h1>
								<h2>Free Online Shopping</h2>
								<p>Shopping is better than sex. If you’re not satisfied after shopping, you can make an exchange for something you really like.</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png"  class="pricing" alt="" />
							</div>
						</div>
						<div class="item">
							<div class="col-sm-6">
								<h1><span>D</span>2u - Online Market</h1>
								<!-- <h2>100% Responsive Design</h2> -->
								<p>Anyone who lives within their means suffers from a lack of imagination.</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png"  class="pricing" alt="" />
							</div>
						</div>
						
						<div class="item">
							<div class="col-sm-6">
								<h1><span>D</span>2u - Online Market</h1>
								<!-- <h2>Free Ecommerce Template</h2> -->
								<p>I love shopping. There is a little bit of magic found in buying something new. It is instant gratification, a quick fix.</p>
								<button type="button" class="btn btn-default get">Get it now</button>
							</div>
							<div class="col-sm-6">
								<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png" class="pricing" alt="" />
							</div>
						</div>						
					</div>
					
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section><!--/slider-->

<section>
	<div class="container">
		<div class="row">
			<?php include("aside.php");?>
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Features Items</h2>
					<?php 
						$sel=mysqli_query($link,"SELECT * FROM product");
						while($ft=mysqli_fetch_array($sel))
						{
					?>
					<div class="col-sm-4">
						<div class="product-image-wrapper">
							<div class="single-products">
									<div class="productinfo text-center" >
										<div class="di" style="background-image:url(edmin/uploads/thumbs/<?php $str = $ft['images']; $tt=explode(',', $str); echo $tt[0];?>
										); width:250px; height:250px; backgorund-size:cover; margin: 0 auto;"></div>
										<h2>&#8358;<?php echo $ft['price'];?></h2>
										<p><?php echo $ft['name'];?></p>
										<!-- <a href="single?product=<?php echo base64_decode($ft['id']);?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a> -->
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>&#8358;<?php echo $ft['price'];?></h2>
											<p><?php echo $ft['describ'];?></p>
											<a href="single?product=<?php echo $ft['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>
										</div>
									</div>
							</div>
						</div>
					</div>
					<?php ;}?>
				</div><!--features_items-->
				
				<div class="category-tab"><!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
						<?php  
							$dd = mysqli_query($link,"SELECT * FROM cat LIMIT 8");
							while($rr = mysqli_fetch_array($dd))
							{
								$can[]=$rr['Title'];
								$can_id[]=$rr['id'];
							}

							$x=0;
							$a=1;
							foreach ($can as $ss){
								if($a==1){$active="active";}else{$active="";}
								echo '<li class="'.$active.'" ><a href="#'.$ss.'" data-toggle="tab">'.$ss.'</a></li>';
								$a++;
							}
						?>
						</ul>
					</div>
					<div class="tab-content">
				<?php foreach ($can as $ss){?>
					<div class="tab-pane fade <?php if($x==0){echo 'active';}?> in" id="<?php echo $ss;?>" >
						<?php if(isset($can_id[$x])){ 
							$dp=mysqli_query($link,"SELECT * FROM product WHERE cat_id='$can_id[$x]' ORDER BY id DESC LIMIT 4");
							while($rp=mysqli_fetch_array($dp)){	?>
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="./edmin/uploads/thumbs/<?php $str=$rp['images']; $tt=explode(',', $str);echo $tt[0];?>" alt="<?php echo $rp['name'];?>" />
											<h2>₦<?php echo $rp['price'];?></h2>
											<p><?php echo$can_id[$x];?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Product</a>
										</div>
										
									</div>
								</div>
							</div>
						<?php ;}
							}else{ }
						?>
							
					</div>
						<?php $x++;}?>
					</div>
				</div><!--/category-tab-->

				<div class="recommended_items"><!--recommended_items-->
					<h2 class="title text-center">recommended items</h2>
					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						<?php for ($i=0; $i < 4; $i++){ ?>	
							<div class="item <?php if($i==0){echo 'active';}?>">	
						<?php $dp=mysqli_query($link,"SELECT * FROM product ORDER BY rand() LIMIT 3 ");
							while($rp=mysqli_fetch_array($dp)){?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="./edmin/uploads/thumbs/<?php $str=$rp['images']; $tt=explode(',', $strs);echo $tt[0];?>" alt="<?php echo $rp['name'];?>" alt="" />
												<h2>₦<?php echo $rp['price'];?></h2>
												<p><?php echo $rp['name'];?></p>
												<!-- $_SESSION['login_user'] -->
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</div>
								</div>
						<?php ;}?>
							</div>
						<?php ;}?>
						</div>
							<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
							</a>
							<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
							</a>			
					</div>
				</div><!--/recommended_items-->
			</div>
		</div>
	</div>
</section>
<?php include("footer.php");?>