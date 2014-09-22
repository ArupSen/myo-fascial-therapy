<?php
// --links.php--
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

$url = array(
	'http://www.youtube.com/watch?v=_gJN7I0a9XU',// for Deepak Chopra
	'http://www.youtube.com/watch?v=PWRuS9xAbMo',// for John Barnes fireside chat 1
	'http://www.youtube.com/watch?v=W4QrvlwtBOU',// John Barnes fireside chat 2
	'http://www.youtube.com/watch?v=yj9NqWZ-0ik',// Robert Schleip
	'http://www.youtube.com/watch?v=y01_bpLMpqU',// Robert Schleip

	'http://www.youtube.com/watch?v=01jdrGrp4Fo',// Strolling under the skin, JC Guinmberteau
	'http://www.youtube.com/watch?v=k6FaULbOmnE',// Strolling under the skin, JC Guimberteau
	'http://www.youtube.com/watch?v=ZyU7SsQmVRE',// Tom Meyers
	'http://www.youtube.com/watch?v=N80J8SJv-ek'//  Scott van Niekerk
);

$link_text = array(
	'Deepak Chopra',
	'John Barnes fireside chat 1',
	'John Barnes fireside chat 2',
	'Robert Schleip',
	'Robert Schleip',
	'Strolling under the skin, JC Guinmberteau',
	'Strolling under the skin, JC Guimberteau',
	'Tom Meyers',
	'Scott van Niekerk'
);
// builds a link wrapped in a <p> tag 
// takes 2 args - $url and $link_text which are arrays
// arrays must be of the same length and in the same order i.e. they should match
function buildLink($url, $link_text){
	for ($i=0; $i < count($url); $i++) { 
		echo '<p><a href="'.$url[$i].'">'.$link_text[$i].'</a></p>';
		echo "\n";
	}
	
}

// the unique contents will go here up to the footer
?>
<h3>Links and Resources</h3>
<h4>A selection of useful websites for further information.</h4>
<p><a href="http://www.myofascialrelease.co.uk/">myofascialrelease.co.uk</a></p>
<p><a href="http://www.theisrm.com">the institute of sports and remedial massage</a></p>
<p><a href="http://www.lssm.com">london school of sports massage</a></p>
<p><a href="http://www.myofascialrelease.com">myofascialrelease.com</a></p>
<p><a href="http://en.wikipedia.org/wiki/Myofascial_release">Myofascial release on Wikipedia</a></p>
<p><a href="http://www.anatomytrains.com/">anatomytrains.com</a></p>
<p><a href="http://www.trager.com/">trager.com</a></p>
<p><a href="http://www.trager.co.uk/">trager.co.uk</a></p>
<h4>Books:</h4>
<p><a href="http://www.amazon.co.uk/Healing-Ancient-Wounds-Renegades-Wisdom/dp/1929894058/ref=sr_1_4?s=books&ie=UTF8&qid=1337789925&sr=1-4">Healing Ancient wounds, &ldquo;the renegade’s wisdom&rdquo; by John F Barnes</a></p>
<p><a href="http://www.myofascialrelease.co.uk/Home/MFR%20Products#Books">A patient’s guide to understanding John. F..Barnes Myofascialrelease by Cathy Cowell</a></p>
<p><a href="http://www.amazon.co.uk/Anatomy-Trains-Myofascial-Meridians-Therapists/dp/044310283X/ref=pd_sim_b_6">"Anatomy Trains" By Thomas Meyers</a></p>
<h4>DVDs:</h4>
<p><a href="http://www.myofascialrelease.co.uk/Home/MFR%20Products#Strolling">&ldquo;Strolling under the Skin&rdquo; by Dr JC Guimberteau (also see youtube clips)</a></p>
<p><a href="http://www.myofascialrelease.com/fascia_massage/public/product_details.asp?ProdTypeID=5">&ldquo;Fireside chats&rdquo; by John F Barnes</a></p>

<h4>YouTube:</h4>
<?php buildLink($url, $link_text); ?>
<div id="photobox">
    
    <?php // img_tag('fascia','the web-like nature of fascia','fascia'); ?>
</div>
<?php img_tag('fascia_skeleton.jpg','skeleton showing fascia','skeleton'); ?>
<?php img_tag('fascia_woman_small.jpg','fascia','tensegrity'); ?>
<?php footer(); ?>
