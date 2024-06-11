<?php include 'userheader.php';

if (isset($_GET['tid'])) {
	extract($_GET);

	$q="insert into takeover  values(null,'$uid','$tid',curdate())";
	insert($q);
}



 ?>
<section class="hero_section ">
      <div class="hero-container container">
<center>
<h1>view children</h1>
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
	<td><?php echo$sino++ ?></td>
	<td><?php echo$row['firstname'] ?></td>
	<td><?php echo $row['lastname'] ?></td>
	<td><?php echo $row['place'] ?></td>
	<td><?php echo $row['phone'] ?></td>
	<td><?php echo $row['age'] ?></td>
	<td><?php echo$row['gender'] ?></td>
  <td><a href="user_viewwork.php?vid=<?php echo $row['children_id'] ?>">view work</a></td>
  <td><a href="?tid=<?php echo $row['children_id'] ?>">takeover</a></td>
  <td><a href="user_viewtakeover.php?tid=<?php $row['children_id'] ?>">view takeover</a></td>
	</tr>
<?php  }
		 ?>
	</table>
</form>
</center>
 </div>
    </section>
<?php include 'footer.php' ?>