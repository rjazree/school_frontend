<?php

$name=$_POST['name'];

$roll=$_POST['roll'];

$con=mysqli_connect('localhost','root','','project1');

$query="DELETE FROM `student` WHERE name='f'";

$run=mysqli_query($con,$query);

if($run==TRUE)

	echo "Data deleted  successfully";

else
	echo "error !!!";

?>