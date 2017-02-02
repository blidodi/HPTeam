<?php
class Buku {
	var $message, $action, $method, $value, $name, $type;
    function __construct($action_now, $method_now)
    {
        $this->action = $action_now;
        $this->method = $method_now;
    }
    function form_header()
    {
        $this->message = "<form action='".$this->action."' method='".$this->method."'>";
        return $this->message;
    }
    function form_footer()
    {
        $this->message = "</form>";
        return $this->message;
    }
    function form_input($type, $name, $value)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;

        $this->message = "<input type='".$this->type."' name='".$this->name."' value='".$this->value."'/>";
        return $this->message;
    }
    function form_label($name) 
    {
        $this->name = $name;
        $this->message = "<label>".$this->name."</label>";
        return $this->message;
    }


}

?>