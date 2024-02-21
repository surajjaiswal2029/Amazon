<?php
session_start();


// if email session not created, page will be redirected to index.php
if(!isset($_SESSION['useremail'])){

    header("Location:index.php");    
}


//if sesstion if created but type not equal to user, redirect to index

if(isset($_SESSION['type'])){

   if($_SESSION['type']!="user"){
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
<!-- <form method="post" action="logic.php">
	<input type="submit" name="logout" value="Log Out">
	
</form>

	 -->
<div class="tt1">
	<div class="u1"><img class="h1" src="ama.png"> </div>
	<div class="u1"><img class="h2" src="location.png"> </div>
		<div class="k1">
			
		<select class="b1">
			<option>All</option>
			<option>All categories</option>
</select>
		</div>
<div class="u2">
	
	<form method="post" action="#">
		
	   <input class="j1" type="text" name="text1" placeholder="Search">

<div class="u3">
 <input type="submit" name="search" class="r1" value="Search">
  </div>
 
</form>
 <div class="s1">Create<br> account</div>
 <div class="s2">Returns<br>& Order

 </div>
</div>	
</div>

<div class="rr1">

<div class="rr2">All</div>	
<div class="rr3">Fresh</div>
<div class="rr4">Amazon miniTV</div>
<div class="rr5">Sell</div>
<div class="rr6">Mobiles</div>
<div class="rr7">Taday's Deal</div>
<div class="rr8">Electronic</div>
<div class="rr9">Custmer service </div>
</div>

<div class="hh1">
 <?php
include "slider.php"

 ?>
 </div>




<?php
include "db.php";


$rr="SELECT * FROM upload1";
if(isset($_POST['search'])){
  $ss=$_POST['text1'];

  if($ss==""){
  	$rr="SELECT * FROM upload1";

  }
else{
	$rr="SELECT * FROM upload1 where product_name LIKE '%$ss%' OR about LIKE '%$ss%'";
}
}

echo'<div class="wee">';
$rr1=$yo->query($rr);
while($rr2=$rr1->fetch_assoc()){
$about1=explode(" ", $rr2['about']);
echo'

<div class="d1">
<div class="d2" > <img src="image/'.$rr2['image'].'"class="im1"></div>	
<div class="d3" >'.$rr2['product_name'].' </div>
<div class="d4" >';



echo substr($rr2['about'],0,11);

echo ' </div>
<div class="d5" >'.$rr2['price'].' </div>
<a href="readmore.php?id='.$rr2['id'].'"><button class="d6" >read more</button></a>
</div>
';


}
echo'</div>';
?>			


<?php

include "db.php";

$getquery=mysqli_query($yo,"select * from upload1 order by id desc limit 4");

echo '<div class="yy1">';
echo '<div class="bb1"><b>Keep Shopping For</b></div>';
while($rr2=$getquery->fetch_assoc())
{

echo'
<div class="yu">

          <img src="image/'.$rr2['image'].'" class="yu1">
          <div class="art">'.$rr2['product_name'].'</div>

</div>

';

}
echo '</div>';
?> 


<?php

include "db.php";

$getquery=mysqli_query($yo,"select * from upload1 order by id  limit 4");

echo '<div class="yy1">';
echo '<div class="bb1"><b>Pick up where you left off</b></div>';
while($rr2=$getquery->fetch_assoc())
{

echo'
<div class="yu">

          <img src="image/'.$rr2['image'].'" class="yu1">
          <div class="art">'.$rr2['product_name'].'</div>

</div>

';

}
echo '</div>';
?>

<?php

include "db.php";

$getquery=mysqli_query($yo,"select * from upload1 order by id desc limit 4");

echo '<div class="yy1">';
echo '<div class="bb1"><b>Categories to explore</b></div>';
while($rr2=$getquery->fetch_assoc())
{

echo'
<div class="yu">

          <img src="image/'.$rr2['image'].'" class="yu1">
          <div class="art">'.$rr2['product_name'].'</div>

</div>

';

}
echo '</div>';
?>

<!-- dggffgffhfh -->

<?php

include "db.php";

$getquery=mysqli_query($yo,"select * from upload1 order by id  limit 20");
echo '<div class=rp1>';
echo '<div class="bb2"><b>Pick up where you left off</b></div>';
echo '<div class="yyy3">';
echo '<div class="yyy2">';

while($rr2=$getquery->fetch_assoc())
{

echo'
<div class="yyu1">

          <img src="image/'.$rr2['image'].'" class="yyu2">
          <div class="art1">'.$rr2['product_name'].'</div>

</div>

';

}
echo '</div>';
echo '</div>';
echo '</div>';
?>

<style type="text/css">
.rp{
background-color: white;
}
.yyy2{

	width: 100%;
	background-color: white;
	float: left;
border: 1px solid black;
	margin-top: 20px;
	width: max-content;
	
}
.yyu1{
	
	width: 200px;
	float: left;
		margin-left: 20px;
		margin-top: 10px;
}
.yyu2{
	height: 210px;
	width: 200px;


}
.bb2{
	font-size: 30px;
	margin-left: 20px;

}
.art1{
	font-size: 24px;
	text-align: center;
}
.yyy3{
	width: 100%;
	display: inline block;
	overflow: auto;
}

.yy1{
height: 410px;
width: 390px;
float: left;
margin-top: 40px;
border: 3px solid black;
display: inline block;
margin-left:15px;
background-color: white;

}
.bb1{
	font-size: 30px;
margin-left: 20px;
}
.yu{
height: 170px;
width: 170px;
margin-top: 20px;
margin-left: 15px;
float: left;


}
.yu1{
height: 140px;
width: 180px;
float: left;
}
.art{
	float: left;
	font-size: 20px;
	margin-left: 30px;
}
.u1{
		height: 40px;
		width:150px ;
		float: left;
}
.u2{
height: 35px;
		width:350px ;

		float: left;

			margin-top:6px;
margin-right: 3px;

}
.u3{
	height: 50px;
		width:150px ;
margin-top: 5px;
		float: left;
		margin-top: 5px;
margin-left: 300px;
position: absolute;
}

.b1{
height: 36px;
width: 50px;
margin-top: 5px;



}


.j1{
height: 30px;
		width:300px ;
		font-size: 30px;
float: left;
margin-top: 5px;

}
.wee{

	display: inline block;
width: 100%;
margin-top: 5px;


}

.d1{
	height: 240px;

	width: 180px;
	background-color:white;	
border: 1px solid black;
	float: left;
	margin-left: 60px;
margin-top: 20px;
/*box-shadow: 4px 4px 4px 4px;*/
}	

.d2{
float: left;
text-align: center;
}

.im1{
	height: 140px;
float: left;
	width: 180px;

}

.d3{
display: inline block;
margin-left: 20px;
/*float: left;*/
text-align: center;
}

.d4{
/*float: left;*/
text-align: center;
}
.d5{

	text-align: center;
}
.d6{
	background-color: orange;
	height: 30px;
	width: 100px;
	font-size: 15px;
	border-radius: 6px;
	margin-left: 40px;
	margin-top: 5px;
}
.tt1{
height: 50px;
width: 100%;
background-color: black;
	display: inline block;


}
.r1{
height: 37px;
font-size: 20px	;
background-color: orange;

}
.h1{
	float: left	;	
	height: 50px;
	width: 110px;
}
.h2{
float: left	;	
	height: 50px;
	width: 150px;
	
margin-right: 15px;
}
.img3{
height: 34px;
width: 40px;
background-color: white;

}
.k1{
	float: left	;	
height: 37px;
width: 50px;
margin-top: 6PX;
color: white;
margin-left: 4px;
}
.s1{
float: left;

height: 50px;
width: 100px;
color: white;
position: absolute;
margin-left: 380px;
font-size: 20px;
text-align: center;

}
.s2{
float: left;

height: 50px;
width: 100px;
color: white;
position: absolute;
margin-left: 480px;
font-size: 20px;
text-align: center;

}
.rr1{
	background-color:#37475A;
	height: 30px;
	width: 100%;
}

.hh1{
	border: 1px solid green;

}
.rr2{
	color: white;
	width: 60px;
	
	height: 30px;
    text-align: center;
    font-size: 20px;
    float: left;
}
.rr3{
	color: white;
	height: 30px;

	width: 70px;
    text-align: center;
    font-size: 20px;
      float: left;
}
.rr4{
	color: white;
	width: 150px;
		height: 30px;
    text-align: center;
    font-size: 20px;
      float: left;
}
.rr5{
	color: white;
	height: 30px;

	  float: left;
    text-align: center;
    font-size: 20px;
    width: 70px;
}
.rr6{
	color: white;
	  float: left;

	  float: left;
    text-align: center;
    font-size: 20px;
    height: 30px;
    width: 80px;
}
.rr7{
	color: white;
	height: 30px;
	
	  float: left;
    text-align: center;
    font-size: 20px;
    width: 150px;
}
.rr8{
	color: white;
	  float: left;
	
	height: 30px;
    text-align: center;
    font-size: 20px;
    width: 130px;
}
.rr9{
	color: white;
	  float: left;

	height: 30px;
    text-align: center;
    font-size: 20px;
    width: 150px;
}
</style>

</body>
</html>
