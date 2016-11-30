<?php $files = glob("sounds/*.{mp3, ogg, wav}", GLOB_BRACE); ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>soundboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" charset="utf-8">
    $(function() {
      $("audio").removeAttr("controls").each(function(i, audioElement) {
        var audio = $(this);
        var that = this;
        $(".players").append($('<button>'+audio.attr("title")+'</button>').click(function() {
          that.play();
        }));
      });
    });
  </script>
  <div class="players">
    <?php foreach($files as $file) { ?>
      <?php $title = str_replace(".ogg", "", str_replace("sounds/", "", $file)); ?>
      <audio src="<?php echo $file; ?>" controls autobuffer="true" title="<?php echo $title ?>"></audio>
    <?php } ?>
  </div>
</body>
</html>
