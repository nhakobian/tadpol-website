<?php
require 'inc/head_foot.inc';

$title = "People";
phead();

$people = array(
            array('Chat Hull', 'UC Berkeley', 'chat@astro.berkeley.edu'),
            array('Dick Plambeck', 'UC Berkeley', 'plambeck@astro.berkeley.edu'),
	    array('Alberto Bolatto', 'UMD', 'bolatto@astro.umd.edu'),
	    array('Geoff Bower', 'UC Berkeley', 'gbower@astro.berkeley.edu'),
	    array('John Carpenter', 'Caltech', 'jmc@astro.caltech.edu'),
	    array('Dick Crutcher', 'UIUC', 'crutcher@illinois.edu'),
	    array('Jason Fiege', 'University of Manitoba', 'fiege@physics.umanitoba.ca'),
	    array('Erica Franzmann', 'University of Manitoba', 'umfranze@cc.umanitoba.ca'),
	    array('Nicholas Hakobian', 'UIUC', 'nhakobi2@illinois.edu'),
	    array('Carl Heiles', 'UC Berkeley', 'heiles@astro.berkeley.edu'),
	    array('Roger Hildebrand', 'UChicago', 'roger@oddjob.uchicago.edu'),
	    array('Martin Houde', 'University of Western Ontario', 'mhoude2@uwo.ca'),
	    array('Meredith Hughes', 'UC Berkeley', 'mhughes@astro.berkeley.edu'),
	    array('Katherine Jameson', 'UMD', 'kjameson@astro.umd.edu'),
	    array('Woojin Kwon', 'UIUC', 'wkwon@illinois.edu'),
	    array('James Lamb', 'Caltech', 'lamb@ovro.caltech.edu'),
	    array('Leslie Looney', 'UIUC', 'lwl@illinois.edu'),
	    array('Dan Marrone', 'University of Arizona', 'dmarrone@email.arizona.edu'),
	    array('Brenda Matthews', 'Herzberg Institute of Astrophysics', 
		  'Brenda.Matthews@nrc-cnrc.gc.ca'),
	    array('Lee Mundy', 'UMD', 'lgm@astro.umd.edu'),
	    array('Thushara Pillai', 'Caltech', 'tpillai@astro.caltech.edu'),
	    array('Marc Pound', 'UMD',  'mpound@astro.umd.edu'),
	    array('Ian Stephens', 'UIUC', 'stephen6@illinois.edu'),
	    array('John Vaillancourt', 'SOFIA', 'jvaillancourt@sofia.usra.edu'),
	    array('Nikolaus Volgenau', 'Caltech', 'volgenau@ovro.caltech.edu'),
	    array('Melvyn Wright', 'UC Berkeley', 'wright@astro.berkeley.edu'),
		);
?>

<h2 style="text-align:center">People</h2>
<br>

<table>
  <tr class="thead"><td>Name</td><td>Institution</td><td colspan='3'>E-mail</td></tr>
<?php
foreach ($people as $person)
{
  $email = explode('@', $person[2]);
  echo '<tr class="trow">';
  echo '<td class="name">'.$person[0].'</td>';
  echo '<td class="inst">'.$person[1].'</td>';
  echo '<td class="email1">'.$email[0].'</td>';
  echo '<td class="emailat">_at_</td>';
  echo '<td class="email2">'.$email[1].'</td>';
  echo '</tr>';
}
?>
</table>

<div class="clear"></div>

<?php pfoot();?>
