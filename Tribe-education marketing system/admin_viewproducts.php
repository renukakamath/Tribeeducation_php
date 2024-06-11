<?php include 'adminheader.php'?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<h1>product</h1>
<form method="post">
	<table class="table" style="width: 500px">
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
 		<td><?php echo$row['first_name'] ?></td>
 		<td><?php echo$row['product'];?></td>
 		<td><?php echo$row['rate'];?></td>
 		<td><?php echo$row['quantity'];?></td>
 	</tr>
 	
 <?php
  }

				 ?>
			
		</tr>
	</table>
</form>
</center>
 </div>
    </section>



<?php include 'footer.php' ?>