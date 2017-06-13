<?php
$seitentitel = 'Karte';
require_once (__DIR__ . '/inc/header.php');

// require für Datenbankverbindungseinstellungen

require_once (__DIR__ . '/globalconfig.php');

?>






  <body class="nav-md">
  <!-- Body wird in footer geschlossen, in Footer wird nur Body und HTML geschlossen -->
  <!-- Hier Hintergrund soll weiß, wegen Tabelle -->

  <?php
setlocale(LC_TIME, "de_DE.utf8"); ?>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php
echo $projectxname ?></span></a>
            </div>

				<?php
require_once (__DIR__ . '/inc/layout.php');
 ?>
</div>
</div>


        

        <!-- page content -->
		
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3><?php
echo $seitentitel; ?></h3><br />
			</div>
			</div>
			</div>

		
			
		
	<div id="mapid"></div>
    <script src="js/leafletmap.js"></script>


	
	
	
	
	
	
	

	</div>
	</div>




<?php
require_once (__DIR__ . '/inc/footer.content.php');
 ?>
<?php
require_once (__DIR__ . '/inc/footer.php');
 ?>