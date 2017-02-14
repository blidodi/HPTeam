<?php
if($_POST){
	include_once '../Table.php';
	$user = new Table('user');
	try{
		$user->save(array(
			'user_id' => $_POST['user_id'],
			'name' => $_POST['name'],
			'password' => md5($_POST['password']),
			'type' => $_POST['type']
		));
		header("Location: index.php");
		exit;
	}catch(Exception $e){
		echo 'Gagal Menyimpan User';
		echo '<br/>Error: '.$e->getMessage();
	}
}
?>
<form action="" method="post">
	User Id: <input type="text" name="user_id"/><br/>
	Name: <input type="text" name="name"/><br/>
	Password: <input type="text" name="password"/><br/>
	Type: <select name="type">
		<option value="admin">Admin</option>
		<option value="user">User</option>
	</select><br/>
	<input type="submit" value="Save"/>
</form>
