<?php include 'adminheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<h1>view user</h1>
<form>
	<table  class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
			<th>DOB</th>
			<th>gender</th>
		</tr>
		<?php 
 $q="select * from registration";
 $res=select($q);
 $sino=1;

 foreach ($res as $row) {?>
 	<tr>
 		<td><?php echo $sino++;?></td>
 		<td><?php echo $row['firstname'] ?></td>
 		<td><?php echo $row['lastname'] ?></td>
 		<td><?php echo $row['place'] ?></td>
 		<td><?php echo $row['phone'] ?></td>
 		<td><?php echo $row['email'] ?></td>
 		<td><?php echo $row['dob'] ?></td>
 		<td><?php echo $row['gender'] ?></td>
 	</tr>
 <?php }

		 ?>
	</table>
</form>
</center>
 </div>
    </section>
<?php include 'footer.php' ?>