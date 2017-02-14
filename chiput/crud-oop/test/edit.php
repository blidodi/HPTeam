<?php
include_once '../Table.php';
$user = new Table('user');
if($_POST){
	try{
		$data = array(
			'user_id' => $_POST['user_id'],
			'name' => $_POST['name'],
			'type' => $_POST['type']
		);
		if(!empty($_POST['password'])){
			$data['password'] = md5($_POST['password']);
		}
		$user->updateBy('user_id', $_POST['user_id'], $data);
		header("Location: index.php");
		exit;
	}catch(Exception $e){
		echo 'Gagal Mengedit data User';
		echo '<br/>Error: '.$e->getMessage();
	}
}
$currentUser = $user->findBy('user_id', $_GET['id']);
$currentUser = $currentUser->current();
?>
<form action="" method="post">
	User Id: <input type="text" name="user_id" value="<?php echo $currentUser->user_id?>" readonly="readonly"/><br/>
	Name: <input type="text" name="name" value="<?php echo $currentUser->name?>"/><br/>
	Password: <input type="text" name="password"/> Biarkan kosong jika tidak diedit!<br/>
	Type: <select name="type">
		<option value="admin" <?php echo $currentUser->type == 'admin' ? 'selected="selected"' : '';?>>Admin</option>
		<option value="user" <?php echo $currentUser->type == 'user' ? 'selected="selected"' : '';?>>User</option>
	</select><br/>
	<input type="submit" value="Save"/>
</form> 
