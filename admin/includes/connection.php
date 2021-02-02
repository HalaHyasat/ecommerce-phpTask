<?php 
// open connection
	$conn = mysqli_connect("localhost","root","","orange_academy");
	if(!$conn){
		die('cannot connec to to server');
	}