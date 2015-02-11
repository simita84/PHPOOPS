<?php 
	include("htmlhelper.php");
	require("db-connection.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login and Registration</title>
		<link rel="stylesheet" 
			  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" 
			  href="styles.css">
	</head>
	<body class="container">
		<h1 class="pahe-header">Admins</h1>
		 <div>
		 	  <table class="table table-striped">
				<thead>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
				</thead>
				<tbody>
		<?php 
		  $fetch_users="Select first_name,last_name,email from users";
		  $all_users=array();
		  $all_users=fetch_all($fetch_users);
		  $count=0;
		  foreach ($all_users as $user) {
		  	$admins[$count]=new HtmlHelper();
		  	 
		  	$count++;
		  }	  ?>
		 
			  	<?php 
				  for ($i=0; $i < count($admins); $i++) 
				  {
				  		$admins[$i]->print_table($user["first_name"],
		  								 $user["last_name"],
		  								 $user["email"]);
				  }
			  	?>
				</tbody>
			   </table>
			</div>
			<div>
				
			</div>
	</body>
	</html>