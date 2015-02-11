<?php 
Class HtmlHelper
{
	public $first_name;
	public $last_name;
	public $email;	
	public $state;
	public $array;
	 
	public function print_table($first_name,$last_name,$email)
	{	
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->email = $email;
		echo "<tr>";
			echo "<td>".$this->first_name."</td>";
			echo "<td>".$this->last_name."</td>";
			echo "<td>".$this->email."</td>";
		echo "</tr>";		 
	 }
	 public function print_select()
	 {
	 	$states_array=array('WA','CA','IL','NJ','NY','UT');
  	
	 }
}
?>
</body>
</html>