<?php 
	require_once("inc/init.inc");	
	$title= "John Wiebe"; 
?>
<?php require_once("inc/head.inc"); ?>
	<body>
		<script type="text/javascript">
			function showHeight(){
				var $height = ($(window).height() - 163);
				$("#header").css("height", ($height));
				$("h2").css("padding-top", (($height - 253)/2));
				
			}
			$(document).ready(showHeight);
			$(window).resize(showHeight);
		</script>
		<?php require_once("inc/nav.inc"); ?>
		
		<div id="header">
			<div class="wrapper">
				<h2>I develop beautiful code along with beautiful designs. I strive to never stop learning or become complacent. I am a fourth year Computer Science major at the University of British Columbia.<br /></h2>
				<h1>I am John Wiebe</h1>
			</div><!-- end of wrapper -->
		</div><!--end of header-->
		
		<div id="content">
			<div class="wrapper" style="max-width:1370px; min-width:1000px; width:100%;">
				<table>
					<tr>
						<td colspan="3" align="center" valign="middle">
							<div id="down"><a href="#content"><img src="img/down.png" align="middle" alt="click to scroll down" /></a></div>
						</td>
					</tr>
					<tr>
						<td>
							<a href="design/"><img src="img/design.png" alt="Design" /></a>
						</td>
						<td>
							<a href="develop/"><img src="img/develop.png" alt="Develop" /></a>
						</td>
						<td>
							<a href="draw/"><img src="img/draw.png" alt="Draw" align="middle" /></a>
						</td>
					</tr>
					<tr>
						<td>
							<h1>DESIGN</h1>
						</td>
						<td>
							<h1>DEVELOP</h1>
						</td>
						<td>
							<h1>DRAW</h1>
						</td>
					</tr>
					<tr>
						<td>
							<p><?php require_once("design/blurb.inc") ?></p>
						</td>
						<td>
							<p><?php require_once("develop/blurb.inc") ?></p>
						</td>
						<td>
							<p><?php require_once("draw/blurb.inc") ?></p>
						</td>
					</tr>
				</table>
			</div><!-- end of wrapper -->
		</div><!--end of content-->

		<?php require_once("inc/footer.inc"); ?>
		
	</body>
</html>
