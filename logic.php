<?php
include "db.php";
session_start();


if(isset($_POST['sub'])){
$product=$_POST['name'];
$about=$_POST['about'];
$number=$_POST['number'];

$file=$_FILES['myfile'];
print_r($file);

$filename=$_FILES['myfile']['name'];
$temp=$_FILES['myfile']['tmp_name'];
$folder="image/".$filename;


$type=$_FILES['myfile']['type'];

$size=$_FILES['myfile']['size'];


if($type=="image/jpeg" || $type=="image/jpg"  || $type=="image/png"){

if(move_uploaded_file($temp, $folder)){

$t="INSERT INTO upload1(id,product_name,image,about,price)values(NULL,'$product','$filename','$about','$number')";
	$t1=$yo->query($t);

	header("Location:show.php");
	 }
}

else{
	echo "only png, jpg and jped allowed";
}
// echo '<img src="image/'.$filename.'"';

}

if(isset($_POST['sub2'])){
$email=$_POST['email'];
$password=$_POST['password'];

$r="SELECT * FROM loginn where email='$email' and password='$password'";
$r1=$yo->query($r);


if($r1->num_rows>0)
{  
  while($result=$r1->fetch_assoc()){

  //create session
      $_SESSION['useremail']=$result['email'];
      $_SESSION['type']=$result['type'];

      if($result['type']=="admin"){
      	header("Location:login.php");
      }
      else if($result['type']=="user"){
      	header("Location:show.php");
      }
      else{
      	header("Location:index.php");
      }


  }
	
}
else{
	header("Location:index.php");
} 
}



if($_POST['logout']){
  

  unset($_SESSION['useremail']);
  unset($_SESSION['type']);
  header("Location:index.php");


}

?>