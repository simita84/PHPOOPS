<?php

Class Car
{
	public $name;
	public $price;
	public $speed;
	public $fuel;
	public $mileage;
	public $tax;

	public function __construct($name,$price,$speed,
		                         $fuel,$mileage)
	{
		$this->name=$name;
		$this->price=$price;
		$this->speed=$speed;
		$this->fuel=$fuel;
		$this->mileage=$mileage;
		if($price>10000)
		{
			$this->tax=.15;
		}
		else
		{
			$this->tax=.12;
		}
		$this->Display_all();

	} 
	public function Display_all()
	{
		echo "<h3>".$this->name."</h3>";
		echo "<div><p>"."Price : ".$this->price."</p>";
		echo "<p>"."Speed : ".$this->speed."</p>";
		echo "<p>"."Fuel : ".$this->fuel."</p>";
		echo "<p>"."Mileage : ".$this->mileage."</p></div>";
		echo "<p>"."Tax : ".$this->tax."</p></div>";
	}
	

} 

$honda= new Car("honda Crv","24000","26mph","full","18mpg");
$nissan=new Car("sentra","8000","30mph","kind of full","25mpg");
$toyota=new Car("camry","18000","35mph","half","25mpg");
$porsche=new Car("porsche","8000","30mph","kond of full","20mpg");
$hyundai=new Car("sonata","8000","30mph","kond of full","30mpg");

?>
 


