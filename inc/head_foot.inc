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
  <title><?php echo $title ?></title>
  <base href="/" />
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
      <li><a href="presentations.php">Presentations</a></li>
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
    &copy; 2013 CARMA TADPOL Consortium. All rights reserved.
  </div>
</div>
</body>
</html>
  <?php }
