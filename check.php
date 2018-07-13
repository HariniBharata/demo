<?php
	$conn = mysqli_connect("localhost","root","localhost@123","harini");
	$q = "select * from hello";
	if($q1= mysqli_query($conn,$q)){
		while($g = mysqli_fetch_array($q1)){
			if($g['name'] == 'harini'){
				echo "yeaaa";
			}
		}
	}
?>
