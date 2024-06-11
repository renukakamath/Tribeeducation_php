<?php include 'marketingheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<h1>view review</h1>
<form method="post">
	<table  class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>user</th>
			<th>review</th>
			<th>rating</th>
			<th>date</th>
		</tr>
		<?php 
 $q="select * from review inner join registration using (public_id)";
 $res=select($q);
 $sino=1;
 foreach ($res as $row) {?>
 	<tr>
 		<td><?php echo $sino++; ?></td>
         <td><?php echo $row['firstname'] ?></td>
 		<td><?php echo $row['review'] ?></td>
 		<td><?php echo $row['rating'] ?></td>
 		<td><?php echo $row['date'] ?></td>
 	</tr>
 <?php }

		 ?>
	</table>
</form>
</center>
 </div>
    </section>
<?php include 'footer.php' ?>