<?php 
echo "hola marihuanos";

$con = mysqli_connect("localhost","root","test","dbname");

if($con){
	echo "conectado";
}else{
	echo "no se conecto";
}