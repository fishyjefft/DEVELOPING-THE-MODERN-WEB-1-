<?php

$conn = mysqli_connect("localhost:3306","root","","login");

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
?>
