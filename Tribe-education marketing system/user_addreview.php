<?php include 'userheader.php';

if (isset($_POST['review'])) {
	extract($_POST);

	$q="insert into review values(null,'$uid','$rev','$rate',curdate())";
	insert($q);
	alert('sucessfully');
	return redirect('user_addreview.php');
	
}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from review where review_id='$did'";
	delete($q);
	alert('sucessfully');
	return redirect('user_addreview.php');
	
}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from review where review_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update review set review='$rev',rating='$rate' where review_id='$uid'";
	update($q);
	alert('sucessfully');
	return('user_addreview.php');
}



 ?>
 <section class="hero_section ">
      <div class="hero-container container">
      	<center>
<h1>add review</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px">
		

		<tr>
			<th>review</th>
			<td><input type="text" name="rev" value="<?php echo $res[0]['review']?>" class="form-control"></td>
		</tr>
		<tr>
			<th>rating</th>
			<td><input type="text" name="rate" value="<?php echo $res[0]['rating'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="submit"></td>
		</tr>
	</table>
<?php }else{?>
	<table class="table" style="width: 500px">
		
		<tr>
			<th>review</th>
			<td><input type="text" name="rev" class="form-control"></td>
		</tr>
		<tr>
			<th>rating</th>
			<td><input type="text" name="rate" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="submit" name="review" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php } ?>
</form>
 </div>
    </section>
    </center>
    <center>
<h1>view review</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>user name</th>
			<th>review</th>
			<th>rating</th>
		</tr>
		<?php 
 $q="select * from review inner join registration using (public_id)";
  $res=select($q);
  $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  	<td><?php echo$sino++; ?></td>
  	<td><?php echo$row['firstname'] ?></td>
  	<td><?php echo $row['review'] ?></td>
  	<td><?php echo $row['rating'] ?></td>
  	<td><a href="?did=<?php echo $row['review_id'] ?>">delete</a></td>
  	<td><a href="?uid=<?php echo $row['review_id'] ?>">update</a></td>
  	</tr>
 <?php 
  }


		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>