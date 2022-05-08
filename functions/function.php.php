<?php

	$con=mysqli_connect("localhost","root","","bazar");

	//getting categories
	function getCat()
	{
		global $con;
		$get_cat="select * from categories";
		//for persion languge
		$run_cat=@mysqli_query($con,"SET NAMES utf8");
		$run_cat=@mysqli_query($con,"SET CHARACTER SET utf8");
		$run_cat=@mysqli_query($con,$get_cat);
		while($row_cat=@mysqli_fetch_array($run_cat))
		{
			$cat_id=$row_cat['cat_id'];
			$cat_title=$row_cat['cat_title'];
			echo "<li><a href='#'>$cat_title</a></li>";
		}
		
	}

	//getting brands
	function getBrand()
	{
		global $con;
		$get_brand="select * from brands";
		$run_brand =@mysqli_query($con,"SET NAMES utf8");
		$run_brand =@mysqli_query($con,"SET CHARACTER SET utf8");
		$run_brand=@mysqli_query($con,$get_brand);
		while($row_brand=@mysqli_fetch_array($run_brand))
		{
			$brand_id=$row_brand['brand_id'];
			$brand_title=$row_brand['brand_title'];
			echo "<li><a href='#'>$brand_title</a></li>";
		}
	}
?>