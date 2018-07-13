<?php
require 'connect.php';
$con=mysqli_connect("localhost","root","localhost@123","harini");
$qu = 'insert into hello values("'.$_POST['name'].'")';
if($qu1 = mysqli_query($con, $qu)){
	echo "done";
}
else{
	echo "no";
}

$query = "select * from hello";
if($q = mysqli_query($con,$query))
{
	echo "query done<br>";
	while($query1 = mysqli_fetch_array($q))
	{
		echo $query1['name'];
		echo "<br>";
	}
}
else{
echo "na";
}
mysqli_close($con);
?>