<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Jennifer K. Galas">
    <title><?php echo $pageTitle; ?></title>

    <!-- Google web fonts - add as many as necessary for design and testing but pare down for production -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Lora:400,400italic" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <?php if ($mainStyles === true) {
      echo '<link rel="stylesheet" href="http://streetrailway.com/common/css/style.css">';
      }
    if ($mapStyles === true) {
      echo "\n    <!-- Add FusionTable-MapTemplate styles -->\n    ";
      echo '<link rel="stylesheet" href="../../vendor/fusiontable-map-template/css/custom.css">';
      }
    if ($extraStyles) {
      echo "\n\n    <!-- Add page-specific styles -->\n    ";
      echo '<link rel="stylesheet" href="../css/' . $extraStyles . '.css">' . "\n";
      }
    ?>

    <!-- Extras -->
    <?php if ($fancyBox === true) {
      echo "<!-- Add fancyBox -->\n    ";
      echo '<link rel="stylesheet" href="../../vendor/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen">';
      }
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <?php if ($mapStyles === true) {
      echo "<noscript>
        <div class='alert alert-info'>
          <h4>JavaScript is disabled in your browser.</h4>
          <p>Please enable JavaScript to view the map.</p>
        </div>
      </noscript>\n";
      }
    ?>
  </head>
