<?php
// -- index.php --
require_once 'inc_path.php';
require_once INCPATH.'header.php';
navbar();

// the unique contents will go here up to the footer
?>
<h3>Welcome</h3>

<p>My name is Astrid Spoon and  I am a Sports and Remedial massage therapist, specializing in  Myofascial Release (MFR). I have treated clients with acute and chronic pain problems for over seven years now and seen some very good results in restoring balance, fluidity, and healthy function of the body so that they can enjoy an active and pain-free life.</p>
<p>I have been passionate about exploring the connection between mind and body for a long time, and have experienced many types of treatments. When I received my first MFR treatment these two aspects came together for me, which made me so curious that I wanted to learn how to do it myself. I first studied in the UK and later in the USA.</p>
<p>I find MFR an amazing results based approach that helped me a lot with understanding and dealing with pain. There is more and more research on the fascia of the body and the benefits of MFR these days.</p>
<p><a href="links.php">Please see my links page.</a></p>
<p>
I work from my home near Ladbroke  Grove West London.
For an appointment please call:<br /> 0207 2211302 or mobile 07944435338
</p>
<div class="massage_logos">
	<?php img_tag('isrm_small.jpg','Institute of Sport and Remedial Massage','isrm'); ?>

<?php img_tag('cnhc_small.jpg','Complementary and Natural Healthcare Council','cnhc'); ?>
<?php img_tag('imft_small.jpg','Integrated Myofascial Therapy','imft'); ?>

</div>
<?php img_tag('girl_jumping_small.jpg','','girl_jumping'); ?>
<?php 
// filename, title, id
// img_tag('','',''); ?>

<?php footer(); ?>
