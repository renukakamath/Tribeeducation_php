<?php include 'marketingheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
     <center>

<h1>view notification</h1>
<form method="post">
	<table  class="table" style="width: 500px">
		<tr>
			<th>notification</th>
			<th>date</th>
		</tr>
		<?php 
  $q="select * from notification";
  $res=select($q);


  foreach ($res as $row) {?>

     <tr>
     	<td><?php echo $row['notification'] ?></td>
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