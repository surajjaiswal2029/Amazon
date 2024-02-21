<?php
session_start();


// if email session not created, page will be redirected to index.php
if(!isset($_SESSION['useremail'])){

    header("Location:index.php");    
}


//if sesstion if created but type not equal to admin, redirect to index
if(isset($_SESSION['type'])){

   if($_SESSION['type']!="admin"){
   	header("Location:index.php"); 
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
<form method="post" action="logic.php">
	<input type="submit" name="logout" value="Log Out">
	
</form>


<div class="d1">
<form method="post" action="logic.php" enctype="multipart/form-data"><br>
<input class="g1" type="text" name="name" placeholder="Product name">	<br>
<input class="g1" type="text" name="about" placeholder="About"><br>
<input class="g1" type="number" name="number" placeholder="Price"><br>
<input  type="file" name="myfile"><br>
<input class="f1" type="submit" name="sub" value="create"><br>


</form>
<div class="y1">
<a href="show.php"><button class="f2">Show product</button> </a>
</div>
</div>
<style type="text/css">
	
.f1{
background-color: orange;
font-size: 20px;
margin-left: 80px;
float: left;
margin-top: 19px;
}
.f2{
background-color: orange;
font-size: 20px;
margin-left: 30px;
}
.y1{

}
.d1{
background-color: gray;
height: 300px;
width: 400px;
margin-left: 400px;
margin-top: 200px;
}
.g1{
	height: 40px;
	width: 390px;
	margin-top: 20px;
	font-size: 20px;
}
</style>

</body>
</html>