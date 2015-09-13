<?php 
	include_once("../inc/init.inc");
	$title= "John Wiebe | About"; 
?>

<?php include_once("../inc/head.inc"); ?>

	<body>
	
		<?php require_once("../inc/nav.inc"); ?>
		
		<div id="header" style="height:92px;padding-top:20px;padding-bottom:50px;">
			<div class="wrapper">
				<h3 style="font-size:400%;top:18px;">About Me</h3>	
				<img src="/img/johnwiebe.png" alt="me!" class="me">
			</div><!-- end of wrapper -->
		</div><!--- end of header -->
		
		<div id="content">
			<div class="wrapper">
				<p>
					As you probably have already seen, my name is John Wiebe and I am currently a fourth year student at the University of British Columbia, majoring in Computer Science. I'm originally from Port Alberni on Vancouver Island and moved to Vancouver in 2009 to attend Langara College. After graduating from Langara with a Diploma in Arts and Science, I transfered to UBC to major in Computer Science.
				</p>
				<p>
					Computers have always been incredibly interesting to me and whenever I was asked the "What are you going to do when you grow up" question, I always answered, "I'm not sure, but it will be something to do with computers". I used to dream of being the next big name in Video Game development, working for Nintendo. After taking a few introductory Computer Science classes while at Langara, I knew that this was the direction for me. It's not because Computer Science is a good career path, or because I did well in class, but because this is a subject that I would be researching and learning even if I wasn't in school. I am not laboured by learning about the ins-and-outs of computers, I'm excited.
				</p>
				<p>
					All that being said, as you can see from this site I have more than just one interest. Drawing has always been something I've very much enjoyed and as soon as I found that I could combine my artistic abilities along with my love of computers I dove right into graphic design (and amusing others with photoshops). My list of hobbies and interests continues but I will often describe the things I like by telling people I am a nerd and enjoy everything that comes with the territory.
				</p>
				<p>
					All in all I would say that I have quite diverse taste and once I find something I enjoy (or something that can bring enjoyment to others), I try to learn all I can about it. Please feel free to look through the various things I have made or <a href="<?php echo($baseURL."contact") ?>">send me a message</a> if you'd like to know more about me or any of my projects.
				</p>
			</div><!-- end of wrapper -->
		</div><!--end of content-->
		
		<?php require_once("../inc/footer.inc"); ?>		
	</body>
</html>
