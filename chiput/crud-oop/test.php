<?php

include_once 'Table.php';

/*$mysql = new Table('user');
$mysql->connect();
echo ($mysql->save(array('foo' => 1, 'bar' => "foo's", 'baz' => 3))); */

include_once 'Select.php';

$users = new Select("select * from user");

foreach($users as $user){
	var_dump($user);
}
$users->close();
