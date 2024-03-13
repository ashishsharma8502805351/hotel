<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hotelwebsite";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:".$conn->connect_error);
}
else{
	echo "connection successfully";
}



if(isset($_POST['submit'])){

	$title=$_POST['title'];
	$newstext=$_POST['newstext'];
    $image=$_FILES['image']['name'];
	



	$query = "INSERT INTO explore1(title,newstext,image)VALUES('$title','$newstext','$image')";
$query_run = mysqli_query($conn,$query);


if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "image/".$_FILES["image"]["name"]);
	header('Location: exp1form.php');
}
}
?>