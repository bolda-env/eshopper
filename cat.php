<?php include("header.php");?>
<div class="category-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
		<?php  
			$dd=mysqli_query($link,"SELECT * FROM te_cat");
			while($rr = mysqli_fetch_array($dd))
			{
				$can[]=$rr['name'];
				$can_id[]=$rr['id'];
			}
			
			$x=1;
			foreach ($can as $ss)
			{
				echo '<li ><a href="#'.$ss.'" data-toggle="tab">'.$ss.'</a></li>';
			}
		?>
		</ul>
	</div>
	
	<div class="tab-content">
		<?php	foreach ($can as $ss){?>
			<div class="tab-pane fade  in" id="<?php echo $ss;?>" >
				<?php 
				if(isset($can_id[$x]))
				{ 
					$dp=mysqli_query($link,"SELECT * FROM te_pro WHERE cat_id='$can_id[$x]'");
					while($rp=mysqli_fetch_array($dp)){	?>
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									<img src="images/home/gallery1.jpg" alt="" />
									<h2>$56</h2>
									<p><?php echo $rp['p_name'];?></p>
									<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
							</div>
						</div>
					</div>
				<?php;}
				}else{}			
			?>			
				</div>
				<?php $x++;}?>		
			</div>
</div><!--/category-tab-->
<?php include("footer.php");?>