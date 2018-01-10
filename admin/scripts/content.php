<?php

	include('connect.php');

	if(isset($_GET['images'])){

		$filter = $_GET['images'];
		$filterQuery = "SELECT * FROM tbl_portfolio ";

		$getContent = mysqli_query($link, $imagesQuery);
	}
	}else{

		$imagesQuery = "SELECT  FROM tbl_movies ORDER BY movies_title ASC";

		$getContent = mysqli_query($link, $imagesQuery);
		//echo $getMovies;
	}

	$grpResult = "";

	echo "[";

	while($movResult = mysqli_fetch_assoc($getMovies)) {
		//echo "Are we there yet?";
		//echo $movResult['movies_id'];
		$jsonResult = json_encode($movResult);
		$grpResult .= $jsonResult.",";
	}

	echo substr($grpResult, 0, -1);

	echo "]";

	mysqli_close($link);
 ?>
