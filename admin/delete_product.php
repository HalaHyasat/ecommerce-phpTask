<?php
require('includes/connection.php');

$query = "delete from products where product_id = {$_GET['id']}";
mysqli_query($conn,$query);

header("location:manage_products.php");

 ?>