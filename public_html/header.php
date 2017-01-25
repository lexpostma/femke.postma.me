<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?></title> 
		<?php require("sql.php"); ?>
		<link rel="shortcut icon" href="/images/favicon.ico" />
		<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>

<!-- SEO -->
<?php
	$seo_key = mysqli_query($con,"SELECT * FROM content WHERE name = 'google_keywords';");
	while($row = mysqli_fetch_array($seo_key)){
		$keywords = $row['text'];
?>
		<meta name="keywords" content="<?=$keywords;};?>" />
<?php
	$seo_des = mysqli_query($con,"SELECT * FROM content WHERE name = 'google_description';");
	while($row = mysqli_fetch_array($seo_des)){
		$description = $row['text'];
?>
		<meta name="description" content="<?=$description;};?>" />
		<meta name="author" content="Femke Wit" />
		<meta name="copyright" content="Copyright (c) 2013-<?php echo date('Y');?> by Femke Wit" />
		<meta name="language" content="Dutch" />
		<meta http-equiv="language" content="NL" />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />	

<!-- iOS optimalizations -->
		<link rel="apple-touch-icon-precomposed" 	sizes="60x60"		href="/apple-touch-icons/ios7-iphone.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="120x120"		href="/apple-touch-icons/ios7-iphone@2x.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="76x76"		href="/apple-touch-icons/ios7-ipad.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="152x152"		href="/apple-touch-icons/ios7-ipad@2x.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="57x57" 		href="/apple-touch-icons/ios6-iphone.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="114x114" 	href="/apple-touch-icons/ios6-iphone@2x.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="72x72" 		href="/apple-touch-icons/ios6-ipad.png" />
		<link rel="apple-touch-icon-precomposed" 	sizes="144x144" 	href="/apple-touch-icons/ios6-ipad@2x.png" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-title" content="Femke Wit">
	
<!-- Styling/LESS -->
		<script type="text/javascript">var less=less||{};less.env='development';</script>
		<link rel="stylesheet/less" type="text/css" href="/style.less" />
		<script type="text/javascript" src="/less.js"></script>
	</head>

	<body>
		<div class="container">