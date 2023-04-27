<!DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Museum pass webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!--Stylesheet CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-amber.min.css" />

    <!--Title-->
    <title>Museum pass Webpage</title> 
  </head>
  <body>

    <!--Header-->
<?php echo "<h1>Movie Ratings with PHP</h1>"; ?>

    <!--Text-->
<?php echo "<p>Welcome to the Museum of Computer Science! Our prices for visiting our amazing Museum will appear below. Just enter your age to verify the appropriate price for a pass. We hope you enjoy your visit!</p>" ?>

    <!--Image-->
    <center>
      <img src="./images/computerHistoryAndScienceMuseum.jpeg" alt="Computer Science" width="400" length="500">
    </center>

    <!--Form for user input-->
    <form action="./calculations.php" method="post" target="results">

    <!--Age of user textfield-->
      <label for="age">What is your age?</label>
      <input type="number" step="1" max="122" name="user-age" placeholder="Your age...">
      <br>
      <br>

    <!--Days of the week dropdown-->
      <label for="day">What day of the week will you visit the museum?</label>
      <select id="day" name="day">
        <option value="Day of week">Day of week</option>
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
      </select>
      <br>
      <br>
  
    <!--Customize button-->
      <input type="submit" id="button" value="Verify" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      </form>
      <br>

    <!--iFrame-->
    <iframe name="results" id="results"></iframe>
      <br>
      <br>
  </body>
</html>