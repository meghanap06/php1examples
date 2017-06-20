<?php
class MyClass {
	public $prop1 = "its a class property";
	public function __construct()
	{
		echo 'the class"', __CLASS__, '" was initiated';
	}
	public function setProperty($newval)
	{
		$this -> prop1 = $newval;
	}
	public function getProperty (){
		return $this -> prop1;
	}

}
$obj = new MyClass;
echo $obj -> getProperty();
echo "end of file";
?>