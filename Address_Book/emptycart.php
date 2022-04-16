<?php
include('config.php');
$Cart_id=$_GET['cart_id'];

$Delete_query=" DELETE FROM `tbl_cart` WHERE `Cart_id` = $Cart_id";
$Result_Delete = mysqli_query($conn,$Delete_query);
if($Result_Delete)
{

	header('location:cart.php');
}
?>