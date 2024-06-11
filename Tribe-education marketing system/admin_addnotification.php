<?php include 'adminheader.php';


if (isset($_POST['notification'])) {
	extract($_POST);

	$q="insert into notification values(null,'$no',curdate())";
     insert($q);
     alert('insertion sucsessfully');
    return redirect('admin_addnotification.php');
   
 }
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from notification where notification_id='$did' ";
	delete($q);
	alert('delete sucsessfully');
	return redirect('admin_addnotification.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);

   $q="select * from notification where notification_id='$uid'";
   $res=select($q);

}
if (isset($_POST['update'])) {
	extract($_POST);

	$q="update notification set notification='$no' where  notification_id='$uid'";
	update($q);
	alert('successfully');
	return redirect('admin_addnotification.php');
 }




 ?>
 <section class="hero_section ">
      <div class="hero-container container">
 <center>
<h1>Add notification</h1>

<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px">
		<tr>
			<th>notification</th>
			<td><input type="text" name="no" value="<?php echo$res[0]['notification']; ?>" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="submit"></td>
		</tr>
	</table>
<?php }else{ ?>
	<table  class="table" style="width: 500px">
		<tr>
			<th>notification</th>
			<td><input type="text" name="no" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="notification" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php } ?>
</form>
</center>

      </div>
    </section>

<center>
<h1>view notification</h1>

	<form method="post">

		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
				<th>notification</th>
				<th>date</th>
			</tr>

        <?php 

    $q="select * from notification";
    $res=select($q);
    $sino=1;


   foreach ($res as $row) {?>

   	<tr>
   		<td><?php echo $sino++; ?></td>
   		<td><?php echo$row['notification']; ?></td>
   		<td><?php echo$row['date'];?></td>
   		<td><a href="?did=<?php echo $row['notification_id']; ?>">delete</a></td>
   		<td><a href="?uid=<?php echo $row['notification_id']; ?>">update</a></td>
   	</tr>
   
  <?php }
         ?>


		</table>
		
	</form>
</center>



<?php include 'footer.php' ?>