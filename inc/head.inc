<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title><?php echo($title); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="John Wiebe Portfolio Vancouver Computer Science CPSC UBC Portfolio Develop Design Draw" />
		<meta name="description" content="John Wiebe's Portfolio. An online collection of projects, designs and drawings." />
		<script src="/js/google-analytics.js" type="text/javascript"></script><!-- Google Analytics -->
		
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Raleway:600,500,400,300' type='text/css' /><!--Google Raleway Font-->
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="stylesheet" href="/css/main.css" type="text/css" />
		
		
		<script src="/js/jquery.min.js" type="text/javascript"></script><!--jQuery library-->
		<script src="/js/smooth_scroll.js" type="text/javascript"></script><!--Smooth Scrolling-->
		
		<!--fancyBox-->
		<script src="/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<script src="/js/jquery.fancybox-media.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css" />
		
		<script src="/js/modernizr.custom.js" type="text/javascript"></script><!--Thumbnail Grid with Expanding Preview-->
		
		<?php
			$parent = basename(getcwd());
			if (($parent == 'draw') || ($parent == 'develop') || ($parent == 'design')) {
				// include Grid stylesheet
				print '<link rel="stylesheet" href="/css/thumbnailgrid.css" type="text/css" />';
				// include fancyBox stylesheet
				print '<script type"text/javascript"> $(document).ready(function() { $(".fancybox").fancybox(); }); </script>';
			}

			if (!empty($header_add) && is_array($header_add)) {
				foreach($header_add as $addition) {
					print ($addition);
				}
			}
		?>
	</head>

                            
