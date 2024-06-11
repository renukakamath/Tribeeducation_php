<?php include 'publicheader.php';
  
  if (isset($_POST['registration'])) {
  	extract($_POST);


     echo$q1="insert into login values(null,'$uname','$password','user')";
     $id=insert($q1);
  	echo$q="insert into registration values(null,'$id','$fname','$lname','$place','$phone','$email','$dob','$gen')";
  	insert($q);
  	alert('inserion successfully');
  	return redirect('tribe_registration.php');

  }





 ?>
 
	<center>
<h1>registration</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			
			<td><input type="text" name="fname" placeholder="first name" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="lname" placeholder="last name" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="text" name="place" placeholder="place" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="numbers" name="phone" placeholder="phone" class="form-control"></td>
		</tr>
		<tr>
			
			<td><input type="email" name="email" placeholder="email" class="form-control"></td>

		</tr>
		<tr>
			
			<td><input type="date" name="dob" placeholder="date of birth" class="form-control"></td>
		</tr>
		<tr>
			<th>gender</th>
			<td><input type="radio" name="gen" value="female">female
			<input type="radio" name="gen" value="male">male</td>
		</tr>
		<tr>
 				
 				<td><input type="text" name="uname" placeholder="user name" class="form-control"></td>
 			</tr>
 			<tr>
 				
 				<td><input type="password" name="password" placeholder="password" class="form-control"></td>
 			</tr>
 			
		<tr>
			<td align="center" colspan="2"><input type="submit" name="registration" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
<?php include 'footer.php' ?>