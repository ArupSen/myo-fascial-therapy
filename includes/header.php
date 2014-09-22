<?php
// included header file which also inserts meta tags
// the functions and constants files are also required
require_once INCPATH.'constants.php';
require_once INCPATH.'functions.php';

$filename = basename($_SERVER['SCRIPT_FILENAME'],".php");
include_once DATAPATH.'meta_tags.php';
?>
<!DOCTYPE html>
<!-- copyright Arup Sen 2012
   http://arupdesigns.co.uk
   arupsen48@gmail.com -->

<html lang="en" dir="ltr">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<?php // leave in during development and remove once live ?>
	<meta name="robots" content="index, follow" />
	<meta name="google-site-verification" content="QLnIw_E_JIl1BdauN0It_vKwj5G3hTO_KXqE3_GNRoY" />
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<meta name="description" content="<?php echo ${$filename}['description']; ?>" />
	<meta name="keywords" content="<?php echo ${$filename}['keywords']; ?>" />
	<link href='http://fonts.googleapis.com/css?family=Magra' 
rel='stylesheet' type='text/css'>
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>-->

	<title><?php echo ${$filename}['title']; ?></title>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style.css'; ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php echo IMGPATH.'favicon.ico'; ?>" type="image/x-icon" />
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie7.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" href="<?php echo CSSPATH.'style_ie8.css'; ?>" type="text/css" media="screen" />	
	<![endif]-->

</head>
<body id="<?php echo $filename; ?>">
	<div id="wrap">
	<h1>Myofascial <span>Therapy</span></h1>
	<h2 id="subheading">Myofascial Release</h2>
	<p id="phone">p: 020 7221 1302 &nbsp;&nbsp;m: 07944 435338</p>
