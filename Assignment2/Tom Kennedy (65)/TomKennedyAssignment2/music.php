<?php
  session_start();
?>
<!DOCTYPE html>

<html lang = "en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">

    <title>Big Music Music Page</title>

</head>

<!--NAVIGATION BAR-->

<body>
    <div id = "head1">
        <img src="logo.png" alt="logo" width="100" height="100">
        <h1 id="music">Music</h1>
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
        
        </ul>
      </div>


<!--Table and dropdown list-->

<h4>Choose a Genre</h4>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Genre.." title="Search for a Genre">
<table id="table">
    <tr class="head">
    <th style="width:10%;">Genre</th>
    <th style="width:10%;">Artist</th>
    <th style="width:10%;">Album</th>
    </tr>
<tr>
     <td>Rap</td>
     <td>Disoriented Scoundrel</td>
     <td>Chap In The Recess</td>
</tr>
<tr>
    <td>Rap</td>
    <td>Skittlz</td>
    <td>The True Thin Ghosty</td>
</tr>
<tr>
    <td>Chart</td>
    <td>Slow Hatter</td>
    <td>Not Scared</td>
</tr>
<tr>
    <td>Chart</td>
    <td>Mallard</td>
    <td>Models and Controllers</td>
</tr>
<tr>
    <td>R&B</td>
    <td>Frank Saturn</td>
    <td>Non Orthodox Sound System</td>
</tr>
<tr>
    <td>R&B</td>
    <td>Creepy Cat</td>
    <td>Catstyle</td>
</tr>
<tr>
    <td>Rock</td>
    <td>Watering Hole</td>
    <td>Daybreak Triumph</td>
</tr>
<tr>
    <td>Rock</td>
    <td>Great Big Trucks</td>
    <td>Halfway Horatio</td>
</tr>
<tr>
    <td>Classic Rock</td>
    <td>Mains Power</td>
    <td>Pathway to Purgatory</td>
</tr>
<tr>
    <td>Classic Rock</td>
    <td>Monarchy</td>
    <td>Read All About It</td>
</tr>
<tr>
    <td>Idie</td>
    <td>The Boulder Perennials</td>
    <td>The Boulder Perennials</td>
</tr>
<tr>
    <td>Indie</td>
    <td>Polar Primates</td>
    <td>What People Claim About Me Is Incorrect</td>
</tr>
<tr>
    <td>Dance</td>  
    <td>Old Chaos</td>
    <td>Entity</td>
</tr>
<tr>
    <td>Dance</td>
    <td>Deceased Rod3nt</td>
    <td>Get Abraded</td>
</tr>
<tr>
    <td>Metal</td>
    <td>Hellsinkers</td>
    <td>En Fin Samling Av L??tar</td>
</tr>
<tr>
    <td>Metal</td>
    <td>K??ll??rz</td>
    <td>B??l??w Ut??pi??</td>
</tr>
</table>

<!--Script below sourced from w3schools-->
<!--https://www.w3schools.com/howto/howto_js_filter_table.asp-->

<script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("table");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>



</body>






</html>