<?php 
Class HtmlHelper
{

	public $first_name;
	public $last_name;
	public $email;

	
	public function __construct($first_name,$last_name,$email)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
	}
	public function print_table()
	{
		//echo "Print Table";
		echo "<table class='class'>";
		echo "<tr>";
		echo "<td>".$this->first_name."</td>";
		echo "<td>".$this->last_name."</td>";
		echo "<td>".$this->email."</td>";
		echo "<tr>";
		echo "</table>";
	}
}

 
?>