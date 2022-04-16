<?php
include('config.php');
$Cart_id=$_GET['cart_id'];

$Query_Select = "Select * from tbl_cart where Cart_id = $Cart_id ";
$Result_Select = mysqli_query($conn,$Query_Select);
$Row_Select=mysqli_fetch_array($Result_Select);
$Pro_id = $Row_Select['Cart_Product_id'];
$Query = "Select * from tbl_product where Product_id = $Pro_id ";
$Result = mysqli_query($conn,$Query);
$Row=mysqli_fetch_array($Result);
$Pro_Price = $Row['Product_Price'];
if($Row_Select['Product_Quantity'] > 1 && $Row_Select['Product_Price'] > 1){
$Quantity = $Row_Select['Product_Quantity'] - 1;
$Price = $Row_Select['Product_Price'] - $Pro_Price ;
$update_query="update tbl_cart set Product_Quantity = $Quantity , Product_Price = $Price where  Cart_id = $Cart_id";
$Result_update = mysqli_query($conn,$update_query);
}
else {
	header('location:cart.php');
}
if($Result_update)
{

	header('location:cart.php');
}
?>

