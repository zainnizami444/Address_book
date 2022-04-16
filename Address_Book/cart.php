<?php

session_start();
if($_SESSION['Userid'] == null)
{
header('location:login.php');
}
include('config.php');
$User_id=$_SESSION['Userid'];
$Query_Select="SELECT tbl_cart.Cart_id, tbl_cart.Cart_User_id,tbl_product.Product_Name,tbl_cart.Product_Quantity,tbl_product.Product_Image,tbl_cart.Product_Price from tbl_cart inner join tbl_product on tbl_product.Product_id = tbl_cart.Cart_Product_id where tbl_cart.Cart_User_id = $User_id And Cart_Status ='Pending'";

$Result_Select=mysqli_query($conn,$Query_Select);


include('header.php');
?>
<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                    <th class="">Item Name</th>
                      <th class="">Item Quantity</th>
                      <th class="">Item Price</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
          
                    while($Row_Select=mysqli_fetch_array($Result_Select))
                    {
                    ?>
                                
                   <tr class="">
                     
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="Pro_Images/<?php echo $Row_Select['Product_Image']?>" alt="" />
                          <a href="#!"><?php echo $Row_Select['Product_Name']?></a>
                        </div>
                      </td>
                      <td class="">
             
                      <a href="faq.php?cart_id=<?php echo $Row_Select['Cart_id'];?>" class="btn btn-light btn-lg ">-</a>
                      <?php echo $Row_Select['Product_Quantity'];?>
                        <a href="perfume.php?cart_id=<?php echo $Row_Select['Cart_id'];?>" class="btn btn-light btn-lg ">+</a>
             
                      </td>
                      <td class="">Rs. <?php echo  $Row_Select['Product_Price'] ?> </td>
                      
                      <td class="">
                      
                       
                      <a href="emptycart.php?cart_id=<?php echo $Row_Select['Cart_id'];?>" class="btn btn-light btn-lg ">Remove</a>
             
                        <form/>
                      </td>
                    </tr>     
                      <?php
                    }

                   ?>
                  </tbody>
                </table>
                <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
                <a href="index.php" class="btn btn-main pull-left">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include('footer.php');
?>