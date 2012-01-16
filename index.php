<html>
	<head>
		<title>PHP Watermarker!</title>
	</head>
	<body>
		<h2>Select your files below</h2>
		<form action="process.php" method="post" enctype="multipart/form-data">
			<p>Choose watermark</p>
			<input type="file" name="watermark" />
			<p>Choose files to add the watermark to</p>
			<input type="file" name="files[]" multiple="" />
			<br /><br />
			<input type="submit" value="Add watermark" />
		</form>
	</body>
</html>