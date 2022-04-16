<?php
include('header.php');
include('config.php');
?>
<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-left">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PERFUMES</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Our excellent<br> range of designer perfume.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="perfume.php">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/252938219_1848037035376067_8050172849468217479_n.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">MAKE UP</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Makeup online from a wide variety of <br> 100% original makeup in Pakistan.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="makeup.php">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/HomSlider1.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-right">
          <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">JEWELLERY</p>
          <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Jewellery adds sparkle and the <br> finishing touch to your look.</h1>
          <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="jewellery.php">Shop Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

</section>
<section class="product-category section">
<h2 class="text-center">Product Category</h2>
<hr>

	<div class="container">
		<div class="row">
		
			 <div class="col-md-6" >
			 <div class="img-hover-zoom">
			  <img src="images\category-5-feca755-rivaj-uk.png" class="w-100 h-75" alt="" />
			  <img src="images\CATAGORY-2-47999f5-rivaj-uk.png" class="w-100 h-75 mt-4" alt="" />
				</div>
                </div>  
			   <div class="col-md-6">
				   <div class="img-hover-zoom">
						<img src="images\CATAGORY1-4d258f3-rivaj-uk.png"  class="w-100" style="height:600px;"  alt="" />
                      </div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="products section bg-gray">
<h2 class="text-center">Product Trendy</h2>
<hr>
	<div class="container">
		
		<!--jewellery-->
		<div class="row">
			<?php
			$Query_Select="Select * from tbl_product limit 9";
			$result=mysqli_query($conn,$Query_Select);
			while ($Row=mysqli_fetch_array($result)) {
				
			
			?>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="Pro_Images/<?php echo $Row['Product_Image']?> " alt="product-img" width="200px" height="200px"/>

						<div class="preview-meta">
							
									<a href="Single_Product.php"><h4 class="text-light"><?php echo $Row['Product_Name']?></h4>
						<p class="price text-light"><?php echo $Row['Product_Price']?></p></a>
							
                      	</div>
					</div>
			
				</div>
			</div>
<?php
			}
?>
		</div>
	</div>
</section>
<hr>

<section class="coming-soon bg-coming-soon text-center overly">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="block">
					<div class="count-down">
						<div class="syotimer">
							<div class="your_selector_to_countdown" id="simple-timer"></div>
						</div>
					</div>
					<h1>Hello, we're Famms and <br> Our new products are almost ready for launch</h1>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!--
Start Call To Action
<?php
include('footer.php');
?>