<?php include 'publicheader.php';

if (isset($_POST['coordinatorreg'])) {
	extract($_POST);
    echo$q="insert into login values(null,'$uname','$password','coordinator')";
        $lid=insert($q);
     echo$q1="insert into coordinators values(null,'$lid','$fname','$lname','$place','$phone','$email') ";
         insert($q1);
         alert('sucessfully');
	return redirect('tribe_coordinatorregistartion.php');

}




 ?>
 <center>
<h1>coordinator registration</h1>
<form method="post">
	<table  class="table" style="width: 500px">
		<tr>
		
		<td><input type="text" placeholder="first name" name="fname" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" placeholder="last name" name="lname" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" placeholder="place" name="place" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" placeholder="phone" name="phone" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" placeholder="email" name="email" class="form-control"></td>
		</tr>
		<tr>
 				
 				<td><input type="text" placeholder="username" name="uname" class="form-control"></td>
 			</tr>
 			<tr>
 				
 				<td><input type="password" placeholder="password" name="password" class="form-control"></td>
 			</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="coordinatorreg" value="submit"class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
<?php include 'footer.php' ?>