<?php 
session_start();
require_once('inc/connect.php'); 
include('templates/header.php'); 
include('templates/nav.php');
?>
<div class="container">
	<div class="row">
	  <table class="table">
	  	<tr>
	  		<th>S.NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
	  	</tr>
  	
	  	<tr>
	  		<td>Item number</td>
	  		<td><a href="delcart.php?remove=">Remove</a> Item Name</td>
	  		<td>$1000</td>
	  	</tr>
		<tr>
			<td><strong>Total Price</strong></td>
			<td><strong>$1000</strong></td>
			<td><a href="#" class="btn btn-info">Checkout</a></td>
		</tr>
	  </table>
	</div>
</div>
<?php include('templates/footer.php'); ?>
<?php 
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
?>
<?php
$total = '';
$i=1;
 foreach ($cartitems as $key=>$id) {
	$sql = "SELECT * FROM products WHERE id = $id";
	$res=mysqli_query($connection, $sql);
	$r = mysqli_fetch_assoc($res);
?>	  	
	<tr>
		<td><?php echo $i; ?></td>
		<td><a href="delcart.php?remove=<?php echo $key; ?>">Remove</a> <?php echo $r['title']; ?></td>
		<td>$<?php echo $r['price']; ?></td>
	</tr>
<?php 
	$total = $total + $r['price'];
	$i++; 
	} 
?>
