<?php include("beheersql.php"); ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title>Beheer website Femke Wit</title> 
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" media="screen" href="beheer.css" />
	</head>
<body>


<div class="container">






<div class="head">
	<h1>Hoi lieve Femmie, hier kan jij je teksten wijzigen</h1>
</div>


<table>

<?php
	$tbl_name = "content";
	$result = mysqli_query($con,"SELECT * FROM content WHERE name != 'cadeau' ORDER BY id ASC;");
	
	while($row = mysqli_fetch_array($result)){
    
	$id = $row['id'];
	$name = $row['name'];
	$text = $row['text'];
?>

	<tr>
		<td class="t-name"><?=$name?></td>
		<td class="t-text"><?=$text?></td>
		<td class="t-edit"><a href="edit.php?id=<?=$id ?>&tbl_name=<?=$tbl_name ?>">Wijzig</a></td>
	</tr>

<?php } ?>
</div>

<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-41655156-1', 'lexpostma.me');
	ga('send', 'pageview');
</script>



</body>
</html>
