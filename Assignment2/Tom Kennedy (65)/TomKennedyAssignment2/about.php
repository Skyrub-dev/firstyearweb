<?php
  session_start();
?>
<!DOCTYPE html>

<html lang = "en">
  

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta charset="UTF-8">
    
    <title>Big Music About Page</title>
    
</head>


<body>

    <div id = "head1">
        <img src="logo.png" alt="logo" width="100" height="100">
        <h1>Big Music</h1>
    </div>
    <!--NAVIGATION BAR-->
    <!--Includes classes and content-->
    <div id="menu">
    <div class="sticky">
    <!--Used a sticky nav bar which keeps the bar at the top of the screen at all times-->
    <!--I implemented this to make it easier and faster for people to change between sites-->
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
    </div>

    <!--Used for description box-->

    <div id="bioheader">
      <h3>Artist biography</h3>
      <p>Monarchy are a British rock band made up of Fred Venus, Bryan June, Roger Cobbler and Jon Vicars. They formed in Preston in 1970 after Bryan and Roger left their previous band 'Cheesy Grin'. They achieved moderate chart success and have played to large stadiums such as the Globe Arena, Deepdale Stadium and Gigg Lane. Their first album 'Monarchy' reached a high point of 164 in the album charts in 1974 while their 1975 album 'night at the guildhall' brought them international success and was the top selling album that year in Liechtenstein. That album featured the single 'Slavic Symphony', which stayed at number one in the UK for nine seconds.</p>
    </div>

    <img class="bheader" src="acguitar.jpg" alt="eximg" width="450" height="350">
    <img class="bheader2" src="bguitar.jpg" alt="eximg2" width="450" height="350">
    <img class="bheader3" src="audience.jpg" alt="eximg3" width="450" height="350">
    <img class="bheader4" src="msg.jpg" alt="eximg4" width="450" height="350">

    <div id="featured">
        <h2>Currently featured artist: Monarchy</h2>
        <img src="monarchyalbum.jpg" alt="feat" width="600" height="400">
    
    
    </div>

        <h5>Albums</h5>
        <img class="im1" src="monarchyalbum.jpg" alt="monarch" width="600" height="400">
        <img class="im2" src="monarchy-DE.jpg" alt="second" width="600" height="400">
        <img class="im3" src="monarchy-ES.jpg" alt="third" width="600" height="400">
        <img class="im4" src="monarchy-ludo.jpg" alt="fourth" width="600" height="400">
        <img class="im5" src="monarchy-NATG.jpg" alt="fifth" width="600" height="400">
        <img class="im6" src="monarchy-RAAI.jpg" alt="sixth" width="600" height="400">

        <div id="references">
        <h5>References</h5>
        <p>UCLAN. (n.d.). Week 3-CSS Layout and style (Interactive Applications). Preston.</p>
        <p>-I used this source to help link the stylesheet to the html documents</p>
        <p>W3SCHOOLS. (n.d.). How to create a sticky navbar. Retrieved from https://www.w3schools.com/howto/howto_js_navbar_sticky.asp</p>
        <p>-I used this instead of a scroll up button because I thought it would be a lot more easier and practical to be able to not only scroll to the top by pressing the page button, but if the user wanted to go to a different page, they could click that respective page.</p>
        <p>W3SCHOOLS. (n.d.). W3SCHOOLS. Retrieved from How to filter/search Table: https://www.w3schools.com/howto/howto_js_filter_table.asp</p>
        <p>-I used this to help users type in a specific genre of music they wanted, and that type of music filering in the table, I sampled a script for this from W3schools, however I made the table itslef.</p>
        </div>
        <!--footer-->
        <div id="footer">

        </div>

</body>










</html>