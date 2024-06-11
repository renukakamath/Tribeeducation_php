<?php include 'coordinatorheader.php';
if (isset($_POST['child'])) {
	extract($_POST);

	echo $q="insert into children values(null,'$fname','$lname','$place','$phone','$age','$gen')";
	insert($q);
	alert('sucessfully');
	return redirect('coordination_addchild.php');

}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from children where children_id='$did'";
	delete($q);
alert('sucessfully');
	return redirect('coordination_addchild.php');

	
}
if (isset($_GET['uid'])) {
	extract($_GET);

	 echo $q="select * from children where children_id='$uid'";
	 $res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update children set firstname='$fname', lastname='$lname',place='$place',phone='$phone',age='$age',gender='$gen' where children_id='$uid'";
	update($q);
	alert('sucessfully');
	return redirect('coordination_addchild.php');
}



 ?>
 <section class="hero_section ">
      <div class="hero-container container">
     <center>
<h1> add children details</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table  class="table" style="width: 500px">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" class="form-control"value="<?php echo $res[0]['firstname'] ?>"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname"class="form-control" value="<?php echo $res[0]['lastname'] ?>"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" name="place"class="form-control" value="<?php echo $res[0]['place'] ?>"></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" name="phone"class="form-control" value="php <?php echo $res[0]['phone'] ?>"></td>
		</tr>
		<tr>
			<th>age</th>
			<td><input type="text" name="age"class="form-control" value="<?php echo $res[0]['age'] ?>"></td>
		</tr>
		<tr>
			<th>gender</th>
			<td><input type="radio" name="gen" value="female">female 
				<input type="radio" name="gen" value="male">male</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php }else{ ?>
	<table  class="table" style="width: 500px">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" class="form-control"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname" class="form-control"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" name="place" class="form-control"></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" name="phone" class="form-control"></td>
		</tr>
		<tr>
			<th>age</th>
			<td><input type="text" name="age" class="form-control"></td>
		</tr>
		<tr>
			<th>gender</th>
			<td><input type="radio" name="gen" value="female">female
				<input type="radio" name="gen" value="male">male</td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="child" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php } ?>
</form>
 </center>
 </div>
    </section>
    <center>
<h1>view childrens</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>age</th>
			<th>gender</th>
		</tr>
		<?php 
     $q="select * from children";
     $res=select($q);
     $sino=1;
  foreach ($res as $row) {?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['firstname'] ?></td>
  		<td><?php echo $row['lastname'] ?></td>
  		<td><?php echo $row['place'] ?></td>
  		<td><?php echo $row['phone'] ?></td>
  		<td><?php echo $row['age'] ?></td>
  		<td><?php echo $row['gender'] ?></td>
  		<td><a href="?did=<?php echo $row['children_id'] ?>">delete</a></td>
  		<td><a href="?uid=<?php echo $row['children_id'] ?>">update</a></td>
  		<td><a href="coordintion_addwork.php?wid=<?php echo $row['children_id'] ?>">add work</a></td>
  	</tr>
  <?php }

 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>