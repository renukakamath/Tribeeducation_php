<?php include 'userheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">

<center>
<h1>view cart</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>total</th>
			<th>product</th>
			<th>amount</th>
			<th>quantity</th>
			<th>date</th>
		</tr>
		<?php 

 $q=" select *  from orderdetails inner join ordermaster using(omaster_id) inner join products using(product_id) ";
 $res=select($q);
 $sino=1;
   foreach ($res as $row) {?>
   	<tr>
   		<td><?php echo $sino++; ?></td>
   		<td><?php echo $row['total'] ?></td>
   		<td><?php echo $row['product'] ?></td>
   		<td><?php echo $row['amount'] ?></td>
   		<td><?php echo $row['quantity'] ?></td>
   		<td><?php echo $row['date'] ?></td>
   		<td><a href="user_cartpayment.php?mid=<?php echo $row['omaster_id'] ?>&rate=<?php echo $row['rate']?>">make payment</a></td>
   	</tr>
      
  <?php }

        

		 ?>
	</table>
</form>
</center>

 </div>
    </section>
<?php include 'footer.php' ?>