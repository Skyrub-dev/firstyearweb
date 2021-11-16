<?php
  session_start();
?>

<!DOCTYPE html>

<html lang = "en">

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    <title>Big Music Home Page</title>
    
    </head>

    <body>
        <div id = "head1">
        <img src="logo.png" alt="logo" width="100" height="100">
        <h1>Big Music</h1>
        </div>
      <!--NAVIGATION BAR-->

    <div id="menu">
    <ul>
        
        <li><a href="index.php">Home</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="tracks.php">Tracks</a></li>
        <li><div id="secondmenu">
        <?php
          if (isset($_SESSION["username"]))
          {
            /*Grabs the username of the user and displays it on the site*/
            echo "<li><p>You are signed in as: " . $_SESSION["username"] . "</p></li>";
            echo "<li> <a href='includes/logout.inc.php'>Logout</a></li>";
          }
          else
          {
            header("location: signup.php");
            exit();
          }
        ?>
        </div> </li>
        
    </ul>
  </div>

<!--When the user starts a session after entering their login and pass, this will
grab the username entered from the database and read it out -->
<div id="intro">
<?php
  if (isset($_SESSION["username"]))
  {
    echo "<h2>Welcome to the website " . $_SESSION["username"], "!" . "</h2>";
  }

?>
    
  <p>This newly opened website by Big Music contains information on the latest artists and some information on bands, please check our following pages for more bands</p>
</div>

<h3>Here's some of the membership deals we offer</h3>
<div id = "planstable">
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
					echo "<td><img src='".$row["image"]."' alt='Images'></td>";
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
</div>

<div id="intro2">
<p>Featured Album: Night at the Guildhall</p>
    
    <img src="monarchy-NATG.jpg" alt="ex" width="500" height="400">
</div>

  
  <!--Div for introduction table, includes quick description and image-->
  

<!--A footer I implemented to make the website have a bit of consitency to where it starts and where it ends-->

<div id="indexfooter">
  
</div>
    
  </body>

  </html>