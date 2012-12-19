<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<?php include('dynamicContent.php'); ?>

<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Curtis Free" />
    <meta name="copyright" content="&copy; 2007-<?php echo date('Y'); ?> Curtis Free and Rebecca Drake" />
    <title>Curtis Free and Rebecca Drake</title>
    <link rel="stylesheet" href="style.php" type="text/css" />
  </head>

  <body>
    <h1>Curtis Free and Rebecca Drake</h1>
    <p>
      <a href="/">
        <img id="main" src="<?php echo getRandomImage(); ?>" alt="This is Us. :-D"
             title="<?php echo (getUsTimeStr() . ' ' . getUsTimeSuffix()); ?>"/>
      </a>
    </p>
    <p id="tagline">Together forever since February 11, 2005...</p>
  </body>

</html>
