<?php include 'publicheader.php' ;

if (isset($_POST['managerreg'])) {
	extract($_POST);
    $q="insert into login values(null,'$uname','$password','manager')";
  $lid=insert($q);
  echo$q1="insert into managers values(null,'$lid','$fname','$lname','$place','$phone','$email') ";
   insert($q1);
   alert('sucessfully');
	return redirect('tribe_managerregistration.php');
}

?>
<center>
<h1> manager registration</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
	
		<td><input type="text" name="fname" placeholder="first name" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="lname" placeholder="last name"  class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="place" placeholder="place" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="phone" placeholder="phone" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="email" placeholder="email" class="form-control" ></td>
		</tr>
		<tr>
 				
 				<td><input type="text" name="uname" placeholder="user name" class="form-control"></td>
 			</tr>
 			<tr>
 				
 				<td><input type="password" placeholder="password" name="password" class="form-control"></td>
 			</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="managerreg" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
<?php include 'footer.php' ?>