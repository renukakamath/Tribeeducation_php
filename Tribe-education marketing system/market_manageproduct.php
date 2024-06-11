<?php include 'marketingheader.php';
extract($_GET);
$lid=$_SESSION['logid'];


 if (isset($_POST['product'])) {
 	extract($_POST);

 	echo$q="insert into products values(null,'$lid','$pro','$rate','$quantity')";
 	insert($q);
 	// alert('insertion sucessfully');
 	// return redirect('market_manageproduct.php');
 }
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from products where product_id='$did'";
	delete($q);
	alert('deleteing sucessfully');
	return redirect('market_manageproduct.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from products where product_id='$uid'";
	$res=select($q);
}

if (isset($_POST['update'])) {
	extract($_POST);
	echo$q="update products set product='$pro',rate='$rate',quantity='$quantity' where product_id='$uid'";
	update($q);
	alert('successfully');
	return redirect('market_manageproduct.php');
}

 ?>
  <section class="hero_section ">
      <div class="hero-container container">
 <center>

<h1>manage product</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>product</th>
			<td><input type="text" name="pro"  class="form-control" value="<?php echo $res[0]['product'];?>"></td>
		</tr>
		<tr>
			<th>rate</th>
			<td><input type="text" name="rate" class="form-control" value="<?php echo $res[0]['rate'];?>" ></td>
		</tr>
		<tr>
			<th>quantity</th>
			<td><input type="text" name="quantity" class="form-control" value="<?php echo $res[0]['quantity'];?>" ></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php }else{ ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>product</th>
			<td><input type="text" name="pro"  class="form-control"></td>
		</tr>
		<tr>
			<th>rate</th>
			<td><input type="text" name="rate"  class="form-control" ></td>
		</tr>
		<tr>
			<th>quantity</th>
			<td><input type="text" name="quantity" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="product" value="submit" class="btn btn-success"></td>
		</tr>
	</table>

<?php } ?>
</form>
</center>
 </div>
    </section>

    <center>
<h1>view product</h1>
<form method="post">
	<table>
		<tr>
			<th>sino</th>
			<th>manager</th>
			<th>product</th>
			<th>rate</th>
			<th>quantity</th>
		</tr>
		<?php 
   $q="select * from products inner join managers using (manager_id)";
   $res=select($q);
   $sino=1;
   foreach ($res as $row) {
   	?>
         <tr>
         	<td><?php echo $sino++; ?></td>
         	<td><?php echo $row['first_name'] ?></td>
         	<td><?php echo $row['product'] ?></td>
         	<td><?php echo $row['rate']?></td>
         	<td><?php echo $row['quantity']?></td>
         	<td><a href="?did=<?php echo $row['product_id'] ?>"> delete</a></td>
         	<td><a href="?uid=<?php echo $row['product_id'] ?>">update</a></td>
         </tr>
   <?php
}


		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>