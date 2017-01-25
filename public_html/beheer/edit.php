<?php include("beheersql.php");

$tbl_name=$_GET['tbl_name'];
$id=$_GET['id'];

// Edit data in mysql from row that has this id 
$result=mysqli_query($con,"SELECT * FROM $tbl_name WHERE id='$id'");
$row = mysqli_fetch_array($result);

	$name = $row['name'];
	$text = $row['text'];
?>



<html>
	<head>
		<title>Wijzig website Femke Wit</title> 
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" media="screen" href="beheer.css" />
	</head>

<body>

<div class="container">
	
	<div class="head">
		<h1>Wijzig <?=$name?> (<?=$id?>)</h1>
	</div>

<table class="edittable">
	<tr>
		<form name="edit-text" method="post" action="save.php?id=<?=$id?>&name=<?=$name?>&tbl_name=<?=$tbl_name?>">
			<td class="t-text"><textarea name="text"	type="text" 	required	id="a-text"	placeholder="Lorem ipsum dolor sit amet."><?=$text ?></textarea></td>
			<td class="t-edit"><button name="save"					type="submit" 			 			value="Submit">Opslaan</button></td>
		</form>
	</tr>
</table>



</div>

</body>
</html>