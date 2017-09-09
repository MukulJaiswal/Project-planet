<?php

	//if upload button is pressed 
	if(isset($_post['upload']))
	{
		$target="images/".basename($_FILES['image']['name']);

		//connect to database
		$db = mysqli_connect("localhost","root","" ,"photos");
		$image=$_FILES['image']['name'];
		$text=$_POST['text'];
		$image = basename($_FILES['image']['name']);

		  $id = $_POST['id'];
    	$correo=$_POST['correo'];


		$sql="INSERT INTO images (images , text,id_user) VALUES ('$images','$text','$id')";
		mysqli_query($db , $sql);//stores the submitted data into the database table

		if(move_uploaded_file($_FILES['images']['tmp_name'],$target))
		{
			$msg="Image Uploaded Successfully";
		}
		else
		{
			$msg="There was a problem uploading Image";

		}


	}



?>


<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="content">

	<?php
		$db = mysqli_connect("localhost","root","","photos");
		$sql = "SELECT * FROM images";
		$result = mysqli_query($db,$sql);
		while ($row = mysqli_fetch_array($result)) 
		{
			echo "<div id='img_div'>";
			echo "img src='images/".$row['image']."' >";
			echo "<p>".$row['text']."</p>";
			echo "</div";
			
		}


	?>


	<form method="post" action ="index.php" enctype="multipart/form-data">
	<input type="hidden" name="size" value="1000000">
	<div>
		<input type="file" name="image">
	<div>
		<textarea name="text" cols="40" rows="4" placeholder="Say something about this Project..">			
		</textarea>
	</div>
		<input type="submit" name="upload" value="Upload Image">
	</div>
	</form>
	</div>


</body>
</html>