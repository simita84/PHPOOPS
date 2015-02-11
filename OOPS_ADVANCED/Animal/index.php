<?php 
Class Animal
{
  public $name;
  public $health;
  public function __construct($name)
  {
  	$this->name=$name;
  	$this->health=100;
    //echo "Animal";
  	return $this;
  }
  
  public function walk()
  {
  	$this->health-=1;
  	return $this;
  }
  public function run()
  {
  	$this->health-=5;
  	return $this;
  }
  public function displayHealth()
  {
  	echo "<h4>".$this->name."</h4>";
  	echo "<div>".$this->health."</div>";

  }
}
Class Dog extends Animal
{
  public function __construct()
  {
    //parent::__construct("calling");
    //echo "Dog";
    $this->health=150;

  }
  public function pet()
  {
     $this->health+=5;
     return $this;
  }
}

Class Dragon extends Animal
{
  public $health;

  public function __construct()
  {
    //Calling parent contsructor
    parent::__construct("Dragon");
    $this->health=170;

  }
  public function fly()
  {
    $this->health-=10;
    return $this;
  }
  public function displayHealth()
  {
    //Calling parent method
   parent:: displayHealth();
   echo "this is a dragon";
  }
}

$cow=new Animal("cow");
$cow->walk()->walk()->walk()->run()->run()->displayHealth();

$poodle=new Dog();
$poodle->walk()->walk()->walk()->run()->run()->pet()->displayHealth();
//$poodle->pet()->displayHealth();
$dragon=new Dragon("dragon");
$dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
//echo $dragon->health;
$cow->fly();
?>