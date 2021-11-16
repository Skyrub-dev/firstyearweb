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
            echo "<li><p>You are signed in as: " . $_SESSION["username"] . "</p></li>";
            echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
          }
          else
          {
            header("location: signup.php");
            exit();
          }
        ?>
        </div> 
        
    </ul>
  </div>

<h1> Full list of tracks avaliable </h1>

<p> Try a playlist of our music! </p>

<audio style="float: left;" id="audioplayer" controls> <!-- Remove the "Controls" Attribute if you don't want the visual controls -->
</audio>
<script>
    var lastSong = null;
    var selection = null;
    var playlist = ["samples/bonus-track.mp3", "samples/chapintherecess.mp3", "samples/daybreaktriumph.mp3","samples/entity.mp3","samples/getabraded.mp3","samples/non-orthodoxsoundsystem.mp3","samples/pinniped.mp3","samples/theboulderperennials.mp3","samples/themisplacedcassette.mp3","samples/thomas.mp3","samples/whatpeopleclaimaboutmeisincorrect.mp3",]; // List of Songs
    var player = document.getElementById("audioplayer"); // Get Audio Element
    player.autoplay=true;
    player.addEventListener("ended", selectRandom); // Run function when song ends

 

    function selectRandom(){
        while(selection == lastSong){ // Repeat until different song is selected
            selection = Math.floor(Math.random() * playlist.length);
        }
        lastSong = selection; // Remember last song
        player.src = playlist[selection]; // Tell HTML the location of the new Song

 

    }

 

    selectRandom(); // Select initial song
    player.play(); // Start Song
</script>

<?php
$connection = mysqli_connect("localhost", "root", "", "musicstream");

if ($connection === false)
{
  die("ERROR: Could not connect." . mysqli_connect_error());
}

$sql = "SELECT thumb, sample, name FROM tracks";
if($result = mysqli_query($connection, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<table style='float: left;'>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Thumb</th>";
    echo "</tr>";
  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['thumb'] . "</td>";
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
mysqli_close($connection);
?>
<br>
<table style="float: right;">
<div id ="soundstable">
<tr>
<th>Sounds:</th>
</tr>
<tr>



<td>
      <!--REPLACE ALL 'music' with 'samples'-->
      <p> bonus-track <p>
      <audio controls>
         <source src="samples/bonus-track.mp3" type="audio/mp3">
      </audio>
      
      <br>
      <br>
      <p> chapintherecess <p>
      <audio controls>
         <source src="samples/chapintherecess.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> daybreaktriumph <p>
      <audio controls
         <source src="samples/daybreaktriumph.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> entity <p>
      <audio controls
         <source src="samples/entity.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> getabraded <p>
      <audio controls>
         <source src="samples/getabraded.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> non-orthodoxsoundsystem <p>
      <audio controls>
         <source src="samples/non-orthodoxsoundsystem.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> pinniped <p>
      <audio controls>
         <source src="samples/pinniped.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> theboulderperennials <p>
      <audio controls>
         <source src="samples/theboulderperennials.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> themisplacedcassette <p>
      <audio controls>
         <source src="samples/themisplacedcassette.mp3" type="audio/mp3">
      </audio>
      <br>
      <br>
      <p> thomas <p>
      <audio controls>
         <source src="samples/thomas.mp3" type="audio/mpeg">
      </audio>
      <br>
      <br>
      <p> whatpeopleclaimaboutmeisincorrect <p>
      <audio controls>
         <source src="samples/whatpeopleclaimaboutmeisincorrect.mp3" type="audio/mp3">
      </audio>

      
      
</td>


</tr>
</table>
<div>

</body>



</html>