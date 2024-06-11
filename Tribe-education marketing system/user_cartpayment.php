<?php include 'userheader.php' ;

if (isset($_POST['payment'])) {
	extract($_POST);

	$q="insert into payment values(null,'$mid','$amount',curdate())";
	insert($q);
}



?>
<section class="hero_section ">
      <div class="hero-container container">
     <center>
<h1>payment</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>card number</th>
			<td><input type="text " name="card" class="form-control"></td>
			
		</tr>
		<tr>
			<th>cv</th>
			<td><input type="text" name="cv"  class="form-control"></td>
		</tr>
		
		<tr>
			<th>amount</th>
			<td><input type="text" value="<?php echo $rate ?>" name="amount" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="payment" value="submit" class="btn btn-success"></td>
		</tr>
		
	</table>
</form>
 </div>
    </section>
<?php include 'footer.php' ?>