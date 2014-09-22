<?php
// -- navbar.php --
// create a list item with link to another page where all names are the same
function createNavLink($name)
{
    echo '<li id="nav-'.$name.'"><a href="'.$name.'.php" title="'.$name.'"><span class="tab">'.$name.'</span></a></li>';
    echo "\n"; // makes the source to browser tidy
}
// has the following output
// <li id="nav-name"><a href="name.php" title="name"><span class="tab">name</span></a></li>
?>
<ul id="navbar">
	<li id="nav-home"><a href="index.php" title="home"><span class="tab" >home</span></a></li>
	<li id="nav-about"><a href="about.php" title="about mfr"><span class="tab" >about mfr</span></a></li>
	<?php //createNavLink("about"); ?>
	<?php createNavLink("appointments"); ?>
	<?php createNavLink("therapist"); ?>
    <?php createNavLink("comments"); ?>
	<?php createNavLink("links"); ?>
</ul>
<div id="clear"></div>
<div id="contents">