<?php include("header.php");
    $cate_name = $_GET['name'];

    $qry = mysqli_query($link,"SELECT * FROM cat WHERE `Title`='$cate_name'");
    $ft = mysqli_fetch_array($qry);
    $cat_id = $ft['id'];

    $qrys = mysqli_query($link,"SELECT * FROM product WHERE `cat_id` = '$cat_id'");
    $ft_pro = mysqli_fetch_array($qrys);
?>

<section>
	<div class="container">
		<div class="row">
			<?php include("aside.php");?>
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--category-->
					<h2 class="title text-center">
                        <?php 
                            if(empty($ft_pro['name']))
                            {
                                echo "No Product(s) in this Category!!";
                            }else{
                                echo $ft_pro['name'];
                            }
                        ?>
                    </h2>
                    <div class="features_items"><!--prod-->
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
				</div><!--prod-->
				</div><!--category-->
			</div>
		</div>
	</div>
</section>
<?php include("footer.php");?>
