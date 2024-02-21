<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php
include "db.php";
if(isset($_GET['id'])){
$id1=$_GET['id'];

$ww="SELECT * FROM upload1 where id='$id1'";
$ww1=$yo->query($ww);

while($ww3=$ww1->fetch_assoc()){

	$ww4=$ww3['id'];
	

echo'
<div class="d1">
<div class="d2" > <img src="image/'.$ww3['image'].'"class="im1"></div>	
<div class="d6">
<div class="d3" >'.$ww3['product_name'].' </div>
<div class="d4" >'.$ww3['about'].' </div>
<div class="d5" >'.$ww3['price'].' </div>
</div>
</div>';

}

}
?>

<style type="text/css">

.d1{
	
	height: 300px;
display: inline-block;
}	
.im1{
height: 300px;
width: 100%;


}
.d3{
	height: 50px;
	font-size: 40px;
	border: 1px solid black;
	background-color:orange;
	text-align: center;

}

.d2{
height: 300px;
width: 500px;
float: left;

}
.d4{
		
	font-size: 30px;
	height: 150px;
	

}
.d5{
	text-align: center;
		border: 2px solid red;
	font-size: 50px;
	background-color: red ;

}
.d6{
	background-color: ghostwhite;
	border: 4px solid black;
	height: 290px;
	width: 600px;
	float: left;
	margin-left: 10px;
}
</style>

</body>

</html>

