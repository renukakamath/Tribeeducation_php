<?php include 'publicheader.php';

if(isset($_POST['login'])) {
	extract($_POST);

	echo$q="select * from login where username='$uname' and password='$password'";
	$res=select($q);

 if(sizeof($res>0)) {
 	$_SESSION['logid']=$res[0]['login_id'];
		$logid=$_SESSION['logid'];
 	if($res[0]['type']=="admin") 
 	{
 		return redirect('tribe_admin.php');
 	}
 	elseif($res[0]['type']=="manager")
 	 {
        return redirect('tribe_marketing.php');
 	}
 	elseif($res[0]['type']=="user")
 	 {
 	 	$q1="select * from registration where login_id='$logid'";
 	 	$r=select($q1);
 	 	if (sizeof($r)>0)
 	 	 {
 	 		$_SESSION['uid']=$r[0]['public_id'];
 	 		$uid=$_SESSION['uid'];
 	 		return redirect('tribe_user.php');

 	 	}
 		
 		
 	}
 	elseif ($res[0]['type']=="coordinator") 
 	{
 		return redirect('tribe_coordinator.php');
 	}
 	
 }
	
}


 ?>
<section class="hero_section ">
      <div class="hero-container container">
     <center>
<h1>Login</h1>

 	<form method="post">
 		<table align="center" class="table" style="width: 500px">
 			<tr>
 			
 				<td><input type="text" name="uname" placeholder="user name" class="form-control"></td>
 			</tr>
 			<tr>
 				
 				<td><input type="password" name="password" placeholder="password" class="form-control"></td>
 			</tr>
 			<tr>
 				<td align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn btn-success"></td>
 			</tr>
 		</table>
 	</form>
 </center>
 </div>
    </section>

<?php include 'footer.php' ?>