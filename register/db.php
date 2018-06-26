<?php
$conn = mysqli_connect('localhost','root','','pana');

if (!$conn) {
	die('Could not connect: ' . mysqli_error());
}
?>