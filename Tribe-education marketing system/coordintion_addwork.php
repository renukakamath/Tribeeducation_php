<?php include 'coordinatorheader.php';

if (isset($_POST['work'])) {
	extract($_POST);

	$dir = "image/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{
 echo$q="insert into works values(null,'$child','$w','$target')";
 insert($q);
 alert('sucessfully');
 return redirect('coordintion_addwork.php');
}
else
		{
			echo "file uploading error occured";
		}


	
	
}




 ?>
 <section class="hero_section ">
      <div class="hero-container container">
     <center>

<h1>add work</h1>
<form method="post" enctype="multipart/form-data">
	<table class="table" style="width: 500px">
		<tr>
			<th>children</th>
			<td>
				<select name="child" class="form-control">
					<option>select</option>
					<?php 

                 $q="select * from children";
                 $res=select($q);

                 foreach ($res as $row) {
                 	?>
<option value="<?php echo $row['children_id'] ?>"><?php echo $row['firstname'] ?></option>
                 	
                 <?php
                  }
               ?>

				</select>
			</td>
		</tr>
		<tr>
			<th>work</th>
			<td><input type="text" name="w" class="form-control"></td>
		</tr>
		<tr>
			<th>images</th>
			<td><input type="file" name="img"class="form-control"></td>
		</tr>
		<tr>
			<td ><input type="submit" name="work" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>

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
   	  	<td><img src="<?php echo $row['images'] ?>" width="100" height="100"></td>
   	  </tr>
  <?php }




		 ?>
	</table>
</form>
 </center>
 </div>
    </section>



<?php include 'footer.php' ?>