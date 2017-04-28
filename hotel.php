<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$id=$_POST['id'];
$adult=$_POST['adult'];
$child=$_POST['child'];
$room=$_POST['room'];
$hotel=$_POST['hotel'];
$city=$_POST['city'];


$db =  mysqli_connect('localhost','root','','travel');

 $query = "INSERT INTO hotel(name, email, mobile, id, adult, child, room, hotel, city) VALUES ('{$name}','{$email}','{$mobile}','{$id}','{$adult}','{$child}','{$room}','{$hotel}','{$city}') ";
 echo $query;

 $result = mysqli_query($db, $query);
 if($result){

    header("location:hotel.html");
}
    else
	{
   echo "failed";
	}
}

?>