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
  <link rel="stylesheet" href="tadpol.css" type="text/css" />
</head>
<body>

<div id="page-container">
  <div id="header">
   <p>TADPOL - Telescope Array Doing Polarization</p>
  </div>
  
  <div id="menu">
   Home -- People -- Papers -- Data -- Internal
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
