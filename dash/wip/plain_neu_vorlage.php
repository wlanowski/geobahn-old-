<?php
$seitentitel = 'Plain vorlage';
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

		
			
	
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo diam ante, at laoreet magna dictum pretium. Sed feugiat ligula non ultrices fringilla. Mauris a gravida dui. Vivamus id finibus elit, eu accumsan libero. Nunc lacinia velit nulla, sed blandit felis maximus ultricies. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas nec turpis sed urna ultrices molestie vel non massa. Maecenas in facilisis elit. Donec dignissim erat quis velit facilisis varius. Nam mollis luctus justo sit amet vestibulum. Suspendisse porta lacus lorem, ac placerat enim vulputate dictum. Maecenas id ante tincidunt, euismod erat in, viverra neque.

Mauris quis sodales mauris. Proin eget risus eleifend, lacinia tortor vitae, dapibus justo. Morbi eleifend purus ac mattis lobortis. Cras mollis ipsum volutpat, interdum nibh ac, efficitur augue. Morbi felis velit, laoreet vel tincidunt at, tempor ac ipsum. Vestibulum quis turpis ac nibh imperdiet dictum. Fusce a felis dui. Vivamus interdum suscipit feugiat. Pellentesque dictum quam in erat cursus semper. Nunc consequat odio magna.

Suspendisse rutrum tortor in velit aliquet tincidunt. Fusce ut ligula vitae orci gravida tempus eget id erat. Maecenas maximus dolor lacus, nec tincidunt ante tincidunt vel. Suspendisse et varius enim. Phasellus volutpat, justo a condimentum feugiat, tortor felis tincidunt odio, quis mollis tortor lectus et metus. Nullam ut ex venenatis, fermentum massa ut, pulvinar ex. Praesent congue purus vitae ligula fermentum, eget scelerisque arcu facilisis. Sed lorem urna, malesuada vel rutrum et, facilisis in odio. Vivamus nulla felis, sodales id euismod pharetra, mollis vitae justo. Maecenas ut risus vulputate, imperdiet erat ut, sollicitudin ipsum.

In consequat metus id quam dapibus, vitae commodo eros aliquam. Fusce quis vulputate libero, ut accumsan urna. Pellentesque interdum odio urna, quis sollicitudin enim ultrices in. Sed sed velit ut mi blandit ultrices eu vel lectus. Fusce dui ligula, efficitur efficitur sagittis sit amet, tincidunt ut mauris. Mauris posuere felis nibh, vitae blandit ligula vulputate vitae. Praesent sed justo quis leo tincidunt consequat eu quis orci. Mauris mauris sapien, eleifend iaculis dictum et, maximus et nisl.

Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla in nisl felis. Vivamus in venenatis dui, vel tempor eros. In ac aliquam tortor. Cras consectetur nisl non felis ultrices, nec pulvinar enim rutrum. Aliquam erat volutpat. Vivamus nec aliquet tellus. Vivamus mattis risus eget risus placerat commodo. Vivamus tristique augue consequat nisl tristique vestibulum. Aenean vel pretium libero, eget sollicitudin dui. Phasellus sagittis vehicula lacus. Donec molestie ante et orci efficitur mollis. Pellentesque pretium nibh ullamcorper tortor fringilla ornare.
	
	
	
	
	
	
	

	</div>
	</div>




<?php
require_once (__DIR__ . '/inc/footer.content.php');
 ?>
<?php
require_once (__DIR__ . '/inc/footer.php');
 ?>