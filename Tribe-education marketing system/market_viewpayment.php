<?php include 'marketingheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
     <center>
     	<h1>view payment</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>total</th>
			<th>amount</th>
			<th>date</th>
		</tr>
		<?php 
 $q="select *  from payment inner join ordermaster using (omaster_id)";
$res=select($q);
$sino=1;
foreach ($res as $row) {?>
	<tr>
		<td><?php echo $sino++; ?></td>
		<td><?php echo $row['total'] ?></td>
		<td><?php echo $row['amount'] ?></td>
		<td><?php echo $row['date'] ?></td>
	</tr>
	
<?php  }


		 ?>
	</table>
</form>
 </center>
 </div>
    </section>
<?php include 'footer.php' ?>