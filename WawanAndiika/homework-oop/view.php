<?php
	$user = new Db_con(); ?>
	
	<table border="1">
		<tr>
			<th>Username</th>
			<th>Password</th>
		</tr>
		<?php
		$users = $user->ViewAll('tbl_user');;
		while($result = mysql_fetch_array($users)){ ?>
			<tr>
				<td><?php echo $result['username']; ?></td>
				<td><?php echo $result['pass']; ?></td>
			</tr>
		<?php } ?>
	</table>