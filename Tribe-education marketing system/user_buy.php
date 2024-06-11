<?php include 'userheader.php' ;

if (isset($_POST['buy'])) {
	extract($_POST);

	$q="insert into ordermaster values(null,'$mid','$total',curdate())";
	$oid=insert($q);
	$q1="insert into orderdetails values(null,'$oid','$pid','$amount','$quantity',curdate())";
	insert($q1);
	$q2="insert into payment values(null,'$oid','$amount',curdate())";
	insert($q2);
}



?>

<script type="text/javascript">
	function TextOnTextChange()
	{
		var x =document.getElementById("p_amount").value;
		var y =document.getElementById("p_qnty").value;
		document.getElementById("t_amount").value = x * y;
	}

</script> 
<section class="hero_section ">
      <div class="hero-container container">
     <center>
<h1>add to cart</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>amount</th>
			<td><input type="text"  id="p_amount" value="<?php echo $rate ?>" readonly name="amount" class="form-control"></td>
		</tr>
		<tr>
			<th>quantity</th>
			<td><input type="text"   id="p_qnty" onchange="TextOnTextChange()" name="quantity" class="form-control"></td>
		</tr>
		<tr>
			<th>total</th>
			<td><input type="text" name="total" id="t_amount" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="submit" name="buy" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
 </center>
 </div>
    </section>

<?php include 'footer.php' ?>