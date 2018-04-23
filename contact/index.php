<?php
	require_once("../inc/init.inc");
	require_once("../inc/conn.inc");
	$title = "John Wiebe | Contact";

	$header_add = array('<script src="https://www.google.com/recaptcha/api.js"></script>');
?>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script> <!-- Google Maps -->
<?php require_once("../inc/head.inc"); ?>
	<!-- Google Maps Initialize and options -->
	<script type="text/javascript">
		function initialize() {

			var mapOptions = {
				center: new google.maps.LatLng(49.225, -123.107),
				zoom: 13,
				disableDefaultUI: true,
				scrollwheel: false,
				draggable: false
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		}
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

	<style>
		#map-canvas, #content, #footer {
			position: relative;
			top:-19;
		}
	</style>

	<?php require_once("../inc/mail_form.inc"); ?>


	<body>

		<?php require_once("../inc/nav.inc"); ?>

		<div id="map-canvas"></div>

		<div class="wrapper">
			<h3 style="font-weight:500;color:4e4e4e;font-size:400%;z-index:100;position:absolute;top:60px;">Contact</h3>
		</div><!-- end of wrapper -->

		<div id="content">
			<div class="wrapper">
				<p style="width: 80%;">See something you like that I've made? Or maybe you found something that isn't working quite right? Maybe you're interested in working with me? Either way, you can feel free to fill out the form below to send me a message, I promise I'll reply!</p>

				<?php
					if (!empty($error)) {
						echo '<p class="error">ERROR: '. $error . "</p>";
					}
					if (!empty($success)) {
						echo '<p class="success">Your mail was successfully sent!</p>';
					}
				?>
				<form action="<?php echo basename(__FILE__); ?>" method="post">
					<label for="name">Name</label><br />
					<input type="text" style="width:300px;" name="name" id="name" required><br />

					<label for="email">E-mail</label><br />
					<input type="text" style="width:300px;" name="email" id="email" required><br />

					<label for="comments">Message</label><br />
					<textarea name="comments" id="comments" rows="8" cols="50" style="width:600px" required ></textarea><br />

					<div class="g-recaptcha" data-sitekey="<?php print($recaptcha_key); ?>"></div><br />

					<input type="submit" name="submit" id="submit" value="Send">
				</form>

			</div><!-- end of wrapper -->
		</div><!--end of content-->

		<?php require_once("../inc/footer.inc"); ?>

	</body>
</html>

