<?php
	$page_title = "Femke Wit"; 
	include("header.php"); ?>


<div class="content" onclick="">

	<div class="box-background"></div>
	<div class="box-text">

<?php
	$texts = mysqli_query($con,"SELECT * FROM content WHERE name = 'homepage';");
	while($row = mysqli_fetch_array($texts)){
	    echo $row['text'];	
	} 
?>

	</div>

	<div class="social-fill"></div>
	<div class="social-buttons">
		<a href="mailto:femke.wit@me.com" class="social-mail" title="Mail mij">Mail</a>
		<a href="http://www.linkedin.com/in/femkewit" class="social-linkedin" title="LinkedIn">LinkedIn</a>
		<a href="https://www.facebook.com/femkewit" class="social-facebook" title="Facebook">Facebook</a>
		<a href="https://twitter.com/femke_wit" class="social-twitter" title="Twitter">Twitter</a>
		<a href="files/web_cv_Femke_Wit.pdf" class="social-cv" title="Download mijn cv">CV</a>
		<a href="http://lexpostma.me" class="social-liefde" title="Liefde">Liefde</a>
	</div>

</div>



<?php include("footer.php"); ?>