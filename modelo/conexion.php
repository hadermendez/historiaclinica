<?php 
$nombre = $_POST['nombre'];
$pass = $_POST['password'];

$con = mysqli_connect("localhost","root","root","usuarios");
$query = "select * from clientes where username='".$nombre."' and contra='".$pass."'";