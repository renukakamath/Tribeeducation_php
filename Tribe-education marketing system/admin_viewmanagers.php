<?php include 'adminheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<h1>view managers</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
		</tr>
		<?php 
  $q="select * from managers";
 $res=select($q);
 $sino=1;

 foreach ($res as $row) {
 	?>
 	 
 	 <tr>
 	 	<td><?php echo $sino++; ?></td>
 	 	<td><?php echo$row['first_name'] ?></td>
 	 	<td><?php echo$row['last_name'] ?></td>
 	 	<td><?php echo$row['place'] ?></td>
 	 	<td><?php echo$row['phone'] ?></td>
 	 	<td><?php echo$row['email'] ?></td>
 	 	<!-- <td><a href="?did=<?php echo$row['manager_id'] ?>">delete</a></td>
 	 	<td><a href="?uid=<?php echo$row['manager_id'] ?>">update</a></td> -->
 	 	<td><a href="admin_viewproducts.php?mid=<?php echo $row['manager_id'] ?>">view product</a></td>
 	 </tr>
 <?php
}

		 ?>
	</table>
	
</form>
</center>
 </div>
    </section>

<?php include 'footer.php' ?>