<?php 
	require_once("class/Upload.php");

	// WAIT FOR FORM TO BE SUBMITED
	if (isset($_FILES['file'])) {
		$allowedFile = array("jpg","png");
		// call the Upload class and upload file
		$upload = new Upload($_FILES['file'],"images/",1000000,$allowedFile);
		// show results
		$result = $upload->GetResult();
		print "<pre>";
		print_r($result);
		print "</pre>";
	}
?>
<form action="index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit">
</form>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right sidebar hackerrahul.com -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3641343196914554"
     data-ad-slot="5783482020"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<hr>
<b>A <a href="http://hackerrahul.com"> HackerRahul</a> Product</b>