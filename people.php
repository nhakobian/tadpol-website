<?php
require 'inc/head_foot.inc';

$title = "People";
phead();

$people = array(
		array('Chat Hull (PI)', 'UC Berkeley', 'chat@astro.berkeley.edu', 'http://astro.berkeley.edu/~chat/'),
		array('Dick Plambeck', 'UC Berkeley', 'plambeck@astro.berkeley.edu', ''),
		array('Alberto Bolatto', 'University of Maryland', 'bolatto@astro.umd.edu', 'http://www.astro.umd.edu/people/bolatto.html'),
		array('Geoff Bower', 'UC Berkeley', 'gbower@astro.berkeley.edu', 'http://astro.berkeley.edu/~gbower/'),
		array('John Carpenter', 'Caltech', 'jmc@astro.caltech.edu', 'http://www.astro.caltech.edu/~jmc/'),
		array('Dick Crutcher', 'University of Illinois', 'crutcher@illinois.edu', 'http://www.astro.uiuc.edu/people/crutcher'),
		array('Jason Fiege', 'University of Manitoba', 'fiege@physics.umanitoba.ca', ''),
		array('Erica Franzmann', 'University of Manitoba', 'umfranze@cc.umanitoba.ca', ''),
		array('Nicholas Hakobian', 'University of Illinois', 'nhakobi2@illinois.edu', 'http://www.astro.uiuc.edu/people/nhakobi2'),
		array('Carl Heiles', 'UC Berkeley', 'heiles@astro.berkeley.edu', 'http://astro.berkeley.edu/~heiles/'),
		array('Martin Houde', 'University of Western Ontario', 'mhoude2@uwo.ca', 'http://www.astro.uwo.ca/~houde/'),
		array('Meredith Hughes', 'Wesleyan', 'amhughes@wesleyan.edu', 'http://amhughes.web.wesleyan.edu/'),
		array('Katherine Jameson', 'University of Maryland', 'kjameson@astro.umd.edu', 'http://www.astro.umd.edu/people/kjameson.html'),
		array('Woojin Kwon', 'University of Illinois', 'wkwon@illinois.edu', ''),
		array('James Lamb', 'Caltech', 'lamb@ovro.caltech.edu', 'http://www.ovro.caltech.edu/~lamb/'),
		array('Leslie Looney', 'University of Illinois', 'lwl@illinois.edu', 'http://eeyore.astro.illinois.edu/'),
		array('Dan Marrone', 'University of Arizona', 'dmarrone@email.arizona.edu', 'https://www.as.arizona.edu/people/faculty/marrone.html'),
		array('Brenda Matthews', 'National Research Council of Canada', 
		      'Brenda.Matthews@nrc-cnrc.gc.ca', 'http://astrowww.phys.uvic.ca/~brenda/'),
		array('Lee Mundy', 'University of Maryland', 'lgm@astro.umd.edu', 'http://www.astro.umd.edu/people/lgm.html'),
		array('Thushara Pillai', 'Caltech', 'tpillai@astro.caltech.edu', ''),
		array('Marc Pound', 'University of Maryland',  'mpound@astro.umd.edu', 'http://www.astro.umd.edu/people/mpound.html'),
		array('Ian Stephens', 'University of Illinois', 'stephen6@illinois.edu', 'http://www.astro.uiuc.edu/people/stephen6'),
		array('John Vaillancourt', 'SOFIA Science Center', 'jvaillancourt@sofia.usra.edu', 'http://www.sofia.usra.edu/Science/team/jvaillancourt.html'),
		array('Nikolaus Volgenau', 'CARMA', 'volgenau@ovro.caltech.edu', 'http://directory.caltech.edu/cgi-bin/search.cgi?uid=volgenau'),
		array('Melvyn Wright', 'UC Berkeley', 'wright@astro.berkeley.edu', 'http://astro.berkeley.edu/~wright/'),
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
  echo '<td class="name">';
  if ($person[3] != '') {
    echo '<a href="'.$person[3].'">'.$person[0].'</a></td>';
  } else {
    echo $person[0].'</td>';
  }
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
