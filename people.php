<?php
require 'inc/head_foot.inc';

$title = "People";
phead();

$people = array(
            array('Chat Hull', 'UC Berkeley', 'chat@astro.berkeley.edu'),
            array('Dick Plambeck', 'UC Berkeley', 'plambeck@astro.berkeley.edu'),
	    array('Alberto Bolatto', 'University of Maryland', 'bolatto@astro.umd.edu'),
	    array('Geoff Bower', 'UC Berkeley', 'gbower@astro.berkeley.edu'),
	    array('John Carpenter', 'Caltech', 'jmc@astro.caltech.edu'),
	    array('Dick Crutcher', 'University of Illinois', 'crutcher@illinois.edu'),
	    array('Jason Fiege', 'University of Manitoba', 'fiege@physics.umanitoba.ca'),
	    array('Erica Franzmann', 'University of Manitoba', 'umfranze@cc.umanitoba.ca'),
	    array('Nicholas Hakobian', 'University of Illinois', 'nhakobi2@illinois.edu'),
	    array('Carl Heiles', 'UC Berkeley', 'heiles@astro.berkeley.edu'),
	    array('Roger Hildebrand', 'University of Chicago', 'roger@oddjob.uchicago.edu'),
	    array('Martin Houde', 'University of Western Ontario', 'mhoude2@uwo.ca'),
	    array('Meredith Hughes', 'UC Berkeley', 'mhughes@astro.berkeley.edu'),
	    array('Katherine Jameson', 'University of Maryland', 'kjameson@astro.umd.edu'),
	    array('Woojin Kwon', 'University of Illinois', 'wkwon@illinois.edu'),
	    array('James Lamb', 'Caltech', 'lamb@ovro.caltech.edu'),
	    array('Leslie Looney', 'University of Illinois', 'lwl@illinois.edu'),
	    array('Dan Marrone', 'University of Arizona', 'dmarrone@email.arizona.edu'),
	    array('Brenda Matthews', 'National Research Council of Canada', 
		  'Brenda.Matthews@nrc-cnrc.gc.ca'),
	    array('Lee Mundy', 'University of Maryland', 'lgm@astro.umd.edu'),
	    array('Thushara Pillai', 'Caltech', 'tpillai@astro.caltech.edu'),
	    array('Marc Pound', 'University of Maryland',  'mpound@astro.umd.edu'),
	    array('Ian Stephens', 'University of Illinois', 'stephen6@illinois.edu'),
	    array('John Vaillancourt', 'SOFIA Science Center', 'jvaillancourt@sofia.usra.edu'),
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
