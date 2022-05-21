<!DOCTYPE html>
<html>

<body>

	<?php

	$filename = $_FILES['file']['name'];

	$location = "upload/".$filename;

	if(move_uploaded_file($_FILES['file']['tmp_name'], $location))
	{
			echo "File uploaded succesfully";
	}else {
		echo 'Error uploading file';
	}

	?>

	<button id="btn3">
		<a href="books.html">
			Home
		</a>

	</button>

</body>
</html>