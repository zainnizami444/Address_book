<?php
session_start();

include('config.php');
if($_SESSION['Userid'] == Null)
{
   header('location:login.php');
}
$User_id=$_SESSION['Userid'];
$Query_Select="Select Sum(Product_Price),Cart_id,Cart_Status from tbl_cart where Cart_User_id = $User_id And Cart_Status = 'Pending'";
$Result_Select=mysqli_query($conn,$Query_Select);
$Row_Select=mysqli_fetch_array($Result_Select);
$Status = $Row_Select['Cart_Status'];
if($Status == 'Pending')
{
if(isset($_POST['Place']))
{
   if($Status == 'Pending')
   $amount=$Row_Select['Sum(Product_Price)'];
   $name=$_POST['name'];
   $address=$_POST['address'];
   $email=$_POST['email'];
   $workphone=$_POST['workphone'];
   $Dob=$_POST['dob'];
   $remarks=$_POST['remarks'];
   $payment_method=$_POST['optradio'];
$insert_query = "insert into tbl_orders values (null,$amount,'$name','$address',' $email',$workphone,' $Dob', '$remarks',CURRENT_DATE,$User_id,'$payment_method')";
$Result_insert=mysqli_query($conn,$insert_query);
$update_query="update tbl_cart set  Cart_Status = 'Placed' where Cart_User_id = $User_id";
$Result_update = mysqli_query($conn,$update_query);
 header('location:confirmation.php');


}
}
else {
   echo '<script>alert("Canot Check out Cart is empty")</script>';

}
include('header.php');
?>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Place An Order</h4>
                  <form class="checkout-form" method="post" action="checkout.php">

               
                     <div class="form-group">
                        <label for="full_name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="">
                     </div>
                    
                        <div class="form-group">
                           <label for="user_post_code">E-Mail</label>
                           <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">Work Phone No</label>
                           <input type="number" class="form-control"  name="workphone" value="">
                        </div>
                   
                   
						<div class="form-group" >
                           <label for="user_city">D.O.B</label>
                           <input type="date" class="form-control"  name="dob" value="">
                        </div>
					
						<div class="form-group" >
                           <label for="user_city">Remarks</label>
                           <input type="text" class="form-control"  name="remarks" value="">
                        </div>
           
               </div>
               <div class="block">
                  <h4 class="widget-title">Payment Method</h4>
                  
                  <div class="checkout-product-details">
                     <div class="payment">
                        <div class="card-details">
                          
						   <label class="radio-inline">
      <input type="radio" name="optradio" value="Easy Paisa" checked>Easy Paisa
    </label>
    <label class="radio-inline"   >
      <input type="radio" name="optradio" value="Cash On Delivery">Cash On Delivery
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" value="Credit Card">Credit Card
    </label>
    <br/>
    <input type="Submit" name="Place" class="btn btn-main mt-20" Value="Place Order" / >
                           </form>
						   
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>
                     <div class="media product-card">
                        
                        <div class="media-body">
                      
                        
                        </div>
                     </div>
                    
                     <ul class="summary-prices">
                        <li>
                           <span>Subtotal:</span>
                           <span class="price">Rs:<?php echo $Row_Select['Sum(Product_Price)'];?></span>
                        </li>
                        <li>
                           <span>Shipping:</span>
                           <span>Free</span>
                        </li>
                     </ul>
                     <div class="summary-total">
                        <span>Total</span>
                        <span>Rs:<?php echo $Row_Select['Sum(Product_Price)'];?></span>
                     </div>
                     <div class="verified-icon">
                        <img src="images/shop/verified.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
   
   <!-- <div class="modal fade" id="coupon-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <input class="form-control" type="text" placeholder="Enter Coupon Code">
                  </div>
                  <button type="submit" class="btn btn-main">Apply Coupon</button>
               </form>
            </div>
         </div>
      </div>
   </div> --> 
   <?php
include('footer.php');
?>