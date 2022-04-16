<?php
session_start();
$Userid=$_SESSION['Userid'];
include('config.php');
if(isset($_POST['Delete']))
  
{

	header('location:index.php');
}

include('header.php');
?>
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        	<i class="tf-ion-android-checkmark-circle"></i>
          <h2 class="text-center">Thank you! For your payment</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, sed.</p>
          <form action="confirmation.php" method="post"> 
          <input type="Submit"class="btn btn-main mt-20" name="Delete" value="Continue Shopping"/>
</form>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->
<?php
include('footer.php');
?>