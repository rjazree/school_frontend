<?php

$name=$_POST['name'];

$roll=$_POST['roll'];

$con=mysqli_connect('localhost','root','','project1');

$query="INSERT INTO `student`(`NAME`, `ROLL`) VALUES ('$name','$roll')";

$run=mysqli_query($con,$query);

if($run==TRUE)

	echo "Data insert  successfully";

else
	echo "error !!!";

?>