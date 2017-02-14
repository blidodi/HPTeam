<?php

class Form
	{
		var $action, $method, $value, $name, $type, $class;
		
		function __construct($new_action, $new_method)
		{
			$this->action = $new_action;
			$this->method = $new_method;
		}

		function header($new_class,$new_entype)
		{
			if(!$new_entype==""){
				$message = '<form action="'.$this->action.'" method="'.$this->method.'" class="'.$new_class.'" enctype="multipart/form-data">';
			} else {
				$message = '<form action="'.$this->action.'" method="'.$this->method.'" class="'.$new_class.'">';
			}
			return $message;
		}

		function footer()
		{
			$message = '</form>';
			return $message;
		}

		function inputsubmit($new_type,$new_name,$new_class,$new_placeholder)
		{
			$this->type = $new_type;
			$this->name = $new_name;
			$this->placeholder = $new_placeholder;
			$message = '<input class="'.$new_class.'" type="'.$this->type.'" name="'.$this->name.'" placeholder="'.$this->placeholder.'"/>';
			return $message;
		}

		function inputvaluedisabled($new_type, $new_name,$new_class,$new_value)
		{
			$this->type = $new_type;
			$this->name = $new_name;
			$this->value = $new_value;
			$message = '<input class="'.$new_class.'" type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'" disabled/>';
			return $message;
		}

		function inputvalue($new_type, $new_name,$new_class,$new_value)
		{
			$this->type = $new_type;
			$this->name = $new_name;
			$this->value = $new_value;
			$message = '<input class="'.$new_class.'" type="'.$this->type.'" name="'.$this->name.'" value="'.$this->value.'"/>';
			return $message;
		}

		function button($new_type,$new_name,$new_class,$new_value)
		{
			$this->type = $new_type;
			$this->name = $new_name;
			$this->value = $new_value;
			$this->class = $new_class;
			$message = '<button class="'.$this->class.'" name="'.$this->name.'" type="'.$this->type.'">'.$this->value.'</button>';
			return $message;
		}

		function textarea($new_name,$new_class,$new_value)
		{
			$this->name = $new_name;
			$this->class = $new_class;
			if($new_value==""){
				$message = '<textarea name="'.$this->name.'" class="'.$this->class.'"/></textarea>';
			} else {
				$message = '<textarea name="'.$this->name.'" class="'.$this->class.'"/>'.$new_value.'</textarea>';
			}
			return $message;
		}

		function label($new_name)
		{
			$this->name = $new_name;
			$message = '<label>'.$this->name.'</label>';
			return $message;
		}

		function formbootstrap_header($new_class_label,$new_value_label,$new_class)
		{
			$message = '<div class="form-group">
	    				<label class="'.$new_class_label.'">'.$new_value_label.'</label>
	    				<div class="'.$new_class.'">';
	    	return $message;
		}

		function formbootstrap_footer()
		{
			$message = '</div></div>';
			return $message;
		}

		function submitbootstrap_header($new_class)
		{
			$message = '<div class="form-group">
	    					<div class="'.$new_class.'">';
	    	return $message;
		}

		function selectbootstrap($new_condition, $new_class, $new_name)
		{
			if($new_condition=="header"){
				$message = '<select class="'.$new_class.'" name="'.$new_name.'">';
			} elseif ($new_condition=="footer") {
				$message = '</select>';
			} 
			return $message;
		}

		function optionbootstrap($new_value, $new_selected, $new_name)
		{
			$message = '<option value="'.$new_value.'" '.$new_selected.'>'.$new_name.'</option>';
			return $message;
		}
	}