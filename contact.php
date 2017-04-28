<?php

if(isset($_POST['submit'])){


$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$query=$_POST['query'];

$db =  mysqli_connect('localhost','root','','travel');

 $query = "INSERT INTO contact(name, email, subject, query) VALUES ('{$name}','{$email}','{$subject}','{$query}') ";

 $result = mysqli_query($db, $query);
 if($result){

    header("location:query.html");
}
    else
	{
   echo "failed";
	}
}

?>