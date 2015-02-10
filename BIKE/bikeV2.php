<?php 
class Bike
{	
	  public $name;
	  public $price;
	  public $max_speed;
	  public $miles;
	  public function __construct($name,$price,$max_speed)
	  {
	  	$this->miles=0;
	  	$this->name=$name;
	  	$this->price=$price;
	  	$this->max_speed=$max_speed;
	  }
	  public function display_info()
	  {
	  	echo "<h4>".$this->name."</h4>";
	  	echo "<div><p>Price=".$this->price."<br>";
	  	echo "Max Speed=".$this->max_speed."<br>";
	  	echo "Miles driven=".$this->miles."<br></p></div>";
	  	return $this;
	  }
	  public function drive()
	  {
	  	echo $this->name."~~~~~~~~~~~~Driving ~~~~~~~~~~ "."<br>";
	  	$this->miles+=10;
	  	return $this;
	  }
	  public function reverse()
	  {
	  	echo $this->name."~~~~~~~~~~~~Reversing ~~~~~~~~~~"."<br>";
	  	$this->miles-=5;
	  	if($this->miles<0){
	  		$this->miles=0;
	  	}  
	  	return $this;	 
	  }
}
		$honda		= new Bike("Honda",500,125);
		$suzuki     = new Bike("Suzuki",366,123);
		$kawasaki   = new Bike("Kawasaki",450,165);
		$honda->display_info();
		$suzuki->display_info();
		$kawasaki->display_info();
		//Started driving
		$honda->drive()->drive()->drive()->reverse()->display_info();

		$suzuki->drive()->drive()->reverse()->reverse()->display_info();
	
		$kawasaki->reverse() ->reverse() ->reverse()->display_info();

?>
	 