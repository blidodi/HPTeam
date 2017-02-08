<?php
include_once '../Table.php';

$table = new Table('user');
$users = $table->findAll();
?>
<a href="add.php">Tambah</a>
<table width="100%" border="1" style="border-collapse:collapse">
	<tr>
		<th>User Id</th>
		<th>Name</th>
		<th>Password</th>
		<th>Type</th>
		<th>Action</th>
	</tr>
	<?php foreach($users as $user){?>
	<tr>
		<td><?php echo $user->user_id;?>
		<td><?php echo $user->name;?></td>
		<td><?php echo $user->password?></td>
		<td><?php echo $user->type?></td>
		<td>
			<a href="edit.php?id=<?php echo $user->user_id?>">Edit</a>
			<a href="delete.php?id=<?php echo $user->user_id?>">Delete</a>
		</td>
	</tr>
	<?php }?>
</table> 
