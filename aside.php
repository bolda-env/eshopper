<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			
		
		<?php $sel=mysqli_query($link,"SELECT * FROM cat ");
		while($ft=mysqli_fetch_array($sel)){?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="category?name=<?php echo $ft['Title'];?>"><?php echo $ft['Title'];?></a></h4>
				</div>
			</div>
			
			<?php ;}?>
		
		</div><!--/category-products-->
	
	
		
		<div class="shipping text-center"><!--shipping-->
			<img src="images/home/shipping.jpg" alt="" />
		</div><!--/shipping-->
	
	</div>
</div>