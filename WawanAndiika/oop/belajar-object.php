<?php
	class Object
	{
		var $num1, $num2;

		function header()
		{
			$header = "header";
			return $header;
		}

		function body($new_num1,$new_num2)
		{
			$this->num1 = $new_num1;
			$this->num2 = $new_num2;
		}

		function footer()
		{
			$footer = "footer";
			return $footer;
		}
	}

	$object = new Object();
	echo $object->header(); 
	$object->body(10,11); ?>
	<table border='1'>
		<tr>
			<td>Number 1</td>
			<td>Number 2</td>
		</tr>
		<tr>
			<td><?php echo $object->num1 ?></td>
			<td><?php echo $object->num2 ?></td>
	</table>
	<?php echo $object->footer();

?>