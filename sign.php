<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];


$db =  mysqli_connect('localhost','root','','travel');

 $query = "INSERT INTO sign(name, email, password, mobile) VALUES ('{$name}','{$email}','{$password}','{$mobile}') ";
 echo $query;

 $result = mysqli_query($db, $query);
 if($result){

    header("location:index.html");
}
    else
	{
   echo "failed";
	}
}

?>