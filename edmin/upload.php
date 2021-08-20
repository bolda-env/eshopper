<?php include("../auth/connect.php"); include_once("functions.php");
	$uploaded_images = array();
	$thumb_width = 250;
	$thumb_height = 250;
	$upload_dir = 'uploads/';
	$rand = rand();
	$upload_dir_thumbs = 'uploads/thumbs/';

	$name = $_POST['name'];
	$describ = $_POST['describ'];
	$price = $_POST['price'];
	$cat_id = $_POST['cat_id'];

	foreach($_FILES['upload_images']['name'] as $key=>$val)
	{
		$filename = $rand.$_FILES['upload_images']['name'][$key];	
		$images[]=$filename;	
		$upload_file = $upload_dir.$filename;	
		
		if(move_uploaded_file($_FILES['upload_images']['tmp_name'][$key],$upload_dir.$filename))
		{		
			createThumbnail($filename, $thumb_width, $thumb_height, $upload_dir, $upload_dir_thumbs); 
			list($orig_width,$orig_height) = getimagesize($upload_dir . $filename);	
			list($thumbs_width,$thumbs_height) = getimagesize($upload_dir_thumbs . $filename);
		}
	}

	$im  = implode(",", $images);
	$qt = mysqli_query($link,"INSERT INTO `product`(`name`, `describ`, `price`,`cat_id`, `images`) VALUES ('$name','$describ','$price','$cat_id','$im')");
	header("Location: index.php");
?>