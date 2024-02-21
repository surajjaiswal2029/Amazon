<?php

$servername="127.0.0.1";
$username="root";
$password="";
$databasename="suraj1";

$yo=new mysqli($servername,$username,$password,$databasename);

if($yo->connect_error)

{
	die("database not connect".$yo->connect_error);
}




?>