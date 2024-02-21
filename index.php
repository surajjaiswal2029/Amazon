<?php
session_start();


//if type session created, 
  // if type = admin, reditect to login.php
  // if type = user, reditect to show.php

  if(isset($_SESSION['type'])){

   if($_SESSION['type']=="admin"){
   	header("Location:login.php"); 
   }
    else if($_SESSION['type']=="user"){
   	header("Location:show.php"); 
   }
   

}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body bgcolor="lightgrey">
<div class="g1">
	<h1 style="margin-left: 140px; font-size: 50px; " >Login </h1>
	<form method="post" action="logic.php">
	<input type="text" name="email" placeholder="Email" style="width:380px; height:50px; margin-left: 5px;"><br>	
    <input type="password" name="password" placeholder="password" style="width:380px; height:50px; margin-left: 5px;"><br>
    <input type="submit" name="sub2" value="Login" style="width:170px; height:40px; font-size: 30px; background-color: orange; margin-left: 100px; margin-top: 20px;">
	</form>


</div>

<style type="text/css">
.g1{
background-color: gray;	
height: 300px;
width: 400px;
margin-top:200px ;
margin-left:400px ;
}	




</style>
</body>
</html>