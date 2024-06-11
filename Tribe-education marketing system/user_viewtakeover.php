<?php  include 'userheader.php' ?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>user</th>
			<th>children</th>
			<th>date</th>
		</tr>
			<?php 
			$q="SELECT *,CONCAT(`children`.`firstname`,' ',`children`.`lastname`) AS cname,CONCAT(`registration`.`firstname`,' ',`registration`.`lastname`) AS uname FROM takeover INNER JOIN registration USING (public_id) INNER JOIN children USING (children_id)";
			$res=select($q);
			$sino=1;
			foreach ($res as $row) {?>
				<tr>
				<td><?php echo $sino++; ?></td>
				<td><?php echo $row['uname'] ?></td>
				<td><?php echo $row['cname'] ?></td>
				<td><?php echo $row['date'] ?></td>
				</tr>
			<?php }



			?>
		</tr>
	</table>
</form>
</center>
 </div>
    </section>
<?php include 'footer.php' ?>