<?php
  session_start();
?>
<!--PAGE REDIRECTS HERE WHEN SIGNING UP, ASKS THE USER TO PICK A PLAN THEN REDIRECTS
THEM TO THE INDEX PAGE -->
<!DOCTYPE html>

<html lang = "en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    <title>Big Music Login</title>
</head>

<body>
<div id = "head1">
    <img src="logo.png" alt="logo" width="100" height="100">
    <h1>Big Music</h1>
</div>

<h1>Thanks for signing up with us!</h1>
<br>
<h1>Final step: Please pick a plan below</h1>
<!--echoing the 'offers' table from the database-->
<?php
	/*https://www.tutorialrepublic.com/php-tutorial/php-mysql-select-query.php */
		/* Attempt MySQL server connection. Assuming you are running MySQL
		server with default setting (user 'root' with no password) */
		$link = mysqli_connect("localhost", "root", "", "musicstream");
 
		// Check connection
		if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
		}
 
		// Attempt select query execution
		$sql = "SELECT * FROM offers";
			if($result = mysqli_query($link, $sql)){
				if(mysqli_num_rows($result) > 0){
					echo "<table>";
					echo "<tr>";
					echo "<th>Title</th>";
					echo "<th>Desciption</th>";
					echo "<th>Price</th>";
					echo "<th>Image</th>";
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>" . $row['title'] . "</td>";
					echo "<td>" . $row['description'] . "</td>";
					echo "<td>" . $row['price'] . "</td>";
					echo "<td>" . $row['image']. "</td>";
					echo "</tr>";
					}
				echo "</table>";
				// Free result set
			mysqli_free_result($result);
			} else{
				echo "No records matching your query were found.";
			}
		} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
 
	// Close connection
	mysqli_close($link);
?>
<!--buttons used on the page-->
<div id="indexbutton">
    </br>
    <form action ="index.php" method ="post">
    <button type="submit" name="Gold">Gold</button>
    </form>
    </br>
    <form action ="index.php" method ="post">
    <button type="submit" name="Silver">Silver</button>
    </form>
    </br>
    <form action ="index.php" method ="post">
    <button type="submit" name="Platinum">Platinum</button>
    </form>
    </br>
    <form action ="index.php" method ="post">
    <button type="submit" name="Family">Family</button>
    </form>
</div>
</body>