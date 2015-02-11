<?php 
Class MyParentClass
{
	public function __construct($instance)
	{
		echo "I am inside parent".$instance."<br>";
	}
	public function another1(){
		echo "another in parent"."<br>";
	}
}
Class MyChildClass extends  MyParentClass
{
	public function __construct($instance)
	{
   parent::__construct($instance);//Call parent constrcutor
		echo "I am inside child and will be added to the constrcutor".$instance."<br>";
	}
	public function another2(){
		echo "another in child";
	}
}
$my_object = new MyChildClass("Object");
$my_object->another1();
$my_object->another2();
?>