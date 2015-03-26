  <body>
    <div class="container fill">

    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> <?php echo $brandName; ?></a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php include $folderName . '/maps/menu.php'; ?>

            <input style='display:none;' class='form-control' id='search_address' placeholder='Enter an address or an intersection' type='text' />
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div id="map_canvas" class="fill"></div>

    <?php include 'credits.php'; ?>

    </div> <!-- #wrapper -->
