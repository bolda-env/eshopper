<?php include_once "header.php";

if(!empty($_SESSION['login_user'])){
    // header('Location: add_product.php');
}else{
    $_SESSION['current_page'] = "add_product.php";
    header("LOCATION: login.php");
}
?>
<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
			</div>
		</div>
	</div>
</section><!--/slider-->

<section>
	<div class="container">
		<div class="row">
			<?php include("aside.php");?>
			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--add_product-->
					<h2 class="title text-center">Add Product</h2>
                    <form action="#" name="add_product" method="post" enctype="multipart/form-data">
                        <div class="field_prod">
                            <label for="product_name" style="display: inline-block; margin-bottom: .5rem;">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-field">
                        </div>
                        <div class="field_prod">
                            <label for="product_price" style="display: inline-block; margin-bottom: .5rem;">Product Price</label>
                            <input type="text" name="product_price" id="product_price" class="form-field">
                        </div>
                        <div class="field_prod">
                            <label for="product_describ" style="display: inline-block; margin-bottom: .5rem;">Product Description</label>
                            <input type="text" name="product_describ" id="product_describ" class="form-field">
                        </div>
                        <div class="field_prod">
                            <label for="product_images" style="display: inline-block; margin-bottom: .5rem;">Product Images</label>
                            <input type="file" name="product_images" id="product_images" class="form-field">
                        </div>
                        <div class="field_prod">
                            <label for="select_cat" style="display: inline-block; margin-bottom: .5rem;">Select Category</label>
                            <select name="select_cat" id="select_cat" class="form-field">
                                <option value="">Electronic</option>
                                <option value="">Wares</option>
                                <option value="">Fashion</option>
                                <option value="">Food</option>
                                <option value="">Medication</option>
                                <option value="">Others</option>
                            </select>
                        </div>
                        <div class="field_prod">
                            <input type="submit" name="add_product" class="btn" value="Add Product">
                        </div>
                    </form>
				</div><!--add_product-->
			</div>
		</div>
	</div>
</section>
<?php include("footer.php");?>