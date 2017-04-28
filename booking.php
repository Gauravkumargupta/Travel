<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$code=$_POST['code'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$country=$_POST['country'];
$arrive=$_POST['arrive'];
$depart=$_POST['depart'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$room=$_POST['room'];
$comment=$_POST['comment'];

$db =  mysqli_connect('localhost','root','','travel');

 $query = "INSERT INTO booking(name, email, code, contact, address, country, arrive, depart, adult, child, room, comment) VALUES ('{$name}','{$email}','{$code}','{$contact}','{$address}','{$country}','{$arrive}','{$depart}','{$adult}','{$child}','{$room}','{$comment}') ";
 echo $query;

 $result = mysqli_query($db, $query);
 if($result){

    header("location:book.html");
}
    else
	{
   echo "failed";
	}
}

?>