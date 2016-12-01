<?php $files = glob("*/"); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>soundboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="buttons">
    <?php foreach($files as $file) { ?>
			<?php $title = ucwords(pathinfo($file, PATHINFO_FILENAME)); ?>
      <a href="<?php echo $file; ?>"><button><?php echo $title; ?></button></a>
    <?php } ?>
  </div>
</body>
</html>
