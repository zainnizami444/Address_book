<?php
include('header.php');
include ('../config.php');
$Query_Pro="SELECT tbl_cart.Cart_id, tbl_cart.Cart_User_id,tbl_product.Product_Name,Sum(tbl_cart.Product_Quantity),tbl_product.Product_Image,tbl_cart.Product_Price ,tbl_cart.Cart_Status from tbl_cart inner join tbl_product on tbl_product.Product_id = tbl_cart.Cart_Product_id where tbl_cart.Cart_Status = 'Placed' GROUP by tbl_cart.Cart_Product_id Order by Sum(tbl_cart.Product_Quantity) DESC limit 10";
$result_pro=mysqli_query($conn,$Query_Pro);
$Query_Customer="SELECT sum(tbl_orders.Order_Amount),tbl_orders.Customer_Name,tbl_orders.User_id from tbl_orders GROUP By tbl_orders.Customer_Name  ORDER by sum(tbl_orders.Order_Amount) DESC limit 10;";
$result_customer=mysqli_query($conn,$Query_Customer);
?>

<main class="content">
<div class="container-fluid p-0">
				<div class="input-group ml-5">
     
        <div class="container-fluid p-0">
				<div class="input-group ml-5">
          
	  </div>

	  </div>
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3 text-center"><strong>Top 10 Best Selling Products</strong> </h1>
                       <div class= "content-body">
                      <div class="authincation h-100">
                        <div class="container-fluid h-100">
                           <div class="row justify-content-center h-100 align-items-center">

                                                     <div class="col-md-12">
	
	                              <div class="table-responsive bg-white">
                                              <table class="table" >
                                          <thead>
                                                         <tr>

                                     <th scope="col">Name</th>
        <th scope="col">Quantity</th>


      </tr>
      </thead>
     <tbody>
     <?php

while ($row_pro=mysqli_fetch_array($result_pro)) {
  
    ?>
    <tr>
<td><?php echo $row_pro['Product_Name']?></td>
<td><?php echo $row_pro['Sum(tbl_cart.Product_Quantity)']?></td>

</tr>
    <?php
    }
    ?>
   
          </tbody>
	  
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>


<main class="content">
<div class="container-fluid p-0">
				<div class="input-group ml-5">
     
        <div class="container-fluid p-0">
				<div class="input-group ml-5">
     
	  </div>

	  </div>
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3 text-center"><strong>Top 10 Best Customer</strong> </h1>
                       <div class= "content-body">
                      <div class="authincation h-100">
                        <div class="container-fluid h-100">
                           <div class="row justify-content-center h-100 align-items-center">

                                                     <div class="col-md-12">
	
	                              <div class="table-responsive bg-white">
                                              <table class="table" >
                                          <thead>
                                                         <tr>

                                     <th scope="col">Name</th>
        <th scope="col">Payed Amount </th>


      </tr>
      </thead>
     <tbody>
     <?php

while ($row_customer=mysqli_fetch_array($result_customer)) {
  
    ?>
    <tr>
<td><?php echo $row_customer['Customer_Name']?></td>
<td><?php echo $row_customer['sum(tbl_orders.Order_Amount)']?></td>

</tr>
    <?php
    }
    ?>
   
          </tbody>
	  
  </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<?php
include('footer.php');
?>
