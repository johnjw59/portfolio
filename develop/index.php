<?php 
	require_once("../inc/init.inc");
	$title= "John Wiebe | Develop"; 
?>

<?php require_once("../inc/head.inc"); ?>

	<body>
	
		<?php require_once("../inc/nav.inc"); ?>
		
		<div id="header">
			<div class="wrapper">
				<h3 style="font-size:340%;top:8px;">Develop</h3>
				<p><?php require_once("blurb.inc") ?></p>
				<div style="clear: both;"></div><!-- Fixes CSS height problem -->
			</div><!-- end of wrapper -->
		</div><!--- end of header -->
		
		<div id="content">
			<div class="wrapper">
				<h2>Click on an image to make it larger and read more about it</h2>
				<ul id="og-grid" class="og-grid">
					<?php
						$directory = 'items/';
						$items = scandir($directory);
						foreach ($items as $key => $value) {
							if (is_file($directory.$value)) {
								echo '<li>';
								include_once $directory.$value;
								echo'</li>';
							}
						}
					?>
				</ul>
			</div>
		</div><!--end of content-->
		
		<?php require_once("../inc/footer.inc"); ?>
		<script src="<?php echo($baseURL."/js/grid.js") ?>" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				Grid.init();
			});
		</script>	
	</body>
</html>
