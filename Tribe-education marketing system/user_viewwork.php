<?php include 'userheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<h1>view work</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
		 <th>sino</th>
		 <th>children</th>
		 <th>work</th>
		 <th>image</th>
		</tr>
		<?php 
   $q="select * from works inner join children using (children_id)";
   $res=select($q);
   $sino=1;

   foreach ($res as $row) {?>
   	  
   	  <tr>
   	  	<td><?php echo $sino++;?></td>
   	  	<td><?php echo $row['firstname'] ?></td>
   	  	<td><?php echo $row['work'] ?></td>
   	  	<td><img src="<?php echo$row['images'] ?>" width="100" height="100"></td>
   	  </tr>
  <?php }




		 ?>
	</table>
</form>
</center>
 </div>
    </section>
<?php include 'footer.php' ?>