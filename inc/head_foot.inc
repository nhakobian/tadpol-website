<?php /* -*- mode: php; -*- */

// Comment out the next two lines on a production environment.
ini_set('display_errors',1);
error_reporting(E_ALL);

function phead() {
  // Set default title
  global $title;
  if (isset($title) == FALSE) {
    $title = "TADPOL - Telescope Array Doing Polarization";
  } else {
    $title = "TADPOL - " . $title;
  }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$title?></title>
  <base href="/tadpol/" />
  <link rel="stylesheet" href="tadpol.css" type="text/css" />
</head>
<body>

<div id="page-container">
  <div id="header">
   <p>TADPOL - Telescope Array Doing Polarization</p>
  </div>
  
  <div id="menu">
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="people.php">People</a></li>
      <li><a href="papers.php">Papers</a></li>
      <li><a href="talks.php">Talks</a></li>
      <li><a href="data.php">Data</a></li>
      <li><a href="http://carma.astro.umd.edu/wiki/index.php/TADPOL">Internal</a></li>   
    </ul>
  </div>
  
  <div id="content">
    <?php }

function pfoot() {
  ?>
    <div class="clear"></div>
  </div>

  <div id="footer">
    &copy; 2012 CARMA Tadpol Consortium. All rights reserved.
  </div>
</div>
</body>
</html>
  <?php }
