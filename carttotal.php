<!DOCTYPE html>
<?php
include('chunks/header.php');
$mycarts = $_SESSION['cart'];
$username = $_SESSION['username'];
?>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div id="gallery">  
	  
	  
	  
        <figure>
          <header class="heading">Check Out</header>

      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div id="portfolio">
 
	   <?php
  $totalPrice=0;   
    if (isset($mycarts)){
		?> 
<a  href="clearcart.php" class="btn" type="button"><i class="fa fa-shopping-cart"></i> <span>Clear Cart</span></a>


<!-- Cart Item -->
						<div class="chart-item table-responsive fix">
							<table class="col-md-12" height=80%>
								<thead>
									<tr>
										<th class="th-delate">Remove</th>
										<th class="th-product">Images</th>
										<th class="th-details">Product Name</th>
										
										<th class="th-price">Unit Price</th>
										<th class="th-qty">Qty</th>
										<th class="th-total">Subtotal</th>
									</tr>
								</thead>
								<tbody>
<?php
                      
foreach($mycarts as $mycart){
$productId=$mycart['productId'];
$productName =$mycart['productName'];
$productPrice =$mycart['productPrice'];
$productPicture =$mycart['productPicture'];
$totalPrice =$totalPrice+$productPrice;
?>

									<tr>
										<td class="th-delate"><a href="#">X</a></td>
										<td class="th-product">
											<a href="#"> <img  src="<?php echo $productPicture; ?>" height="40%" width="40%" alt="cart"></a>
										</td>
										<td class="th-details">
											<h2><a href="#"><?php echo $productName; ?></a></h2>
										</td>
									
										<td class="th-price"><?php echo ''.$productPrice.'M' ?></td>
										<td class="th-qty">
										<?php
										?>
											<input type="text" placeholder="1" >
										</td>
										<td class="th-total"><?php echo '' .$productPrice. 'M' ?></td>
									</tr>
								
<?php						
}
?>
		</tbody>
							</table>
						</div><!-- End Cart Item -->

<?php
	}else{
echo"<h2>No Product in Cart<h2>";
	}
	?>
<img src="images/product_images/payment.jpg" border="1"  ALT="promo1"> </img>
<img src="images/product_images/payment.jpg" border="1"  ALT="promo1"> </img>
<img src="images/product_images/payment.jpg" border="1"  ALT="promo1"> </img>
<img src="images/product_images/payment.jpg" border="1"  ALT="promo1"> </img>
<div class="table">
<form action="buy-page.php" method="POST" >
<table  width="40%" height="50%" >
<tr><td>Visa Account</td><td><input id="visa" type="text" name="visaAcc" /></td></tr>
<tr><td>Pin</td><td><input id="pin" type="password" name="pin" /></td></tr>
<tr><td><b>Total Amount:</b></td><td><b>Ksh. <?php echo $totalPrice ?>M</b></td></tr>
<tr><td>Paid</td><td><input id="amount" type="text" name="amount" /></td></tr>
<tr><td> </td><td> </td></tr>

</table>
<input class="btnpay" type="submit"
name="submit" value="Buy" />
</form>

</div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ --> 
      <!-- / main body -->
  
       </figure>
      </div>
      <!-- ################################################################################################ --> 
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<?php
include('chunks/footer.php');
?>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
</body>
</html>