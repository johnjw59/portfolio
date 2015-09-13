<?php 
  include_once("../inc/init.inc");
  $title= "John Wiebe | About";

  $header_add = array(
    0 => '<link rel="stylesheet" href="/css/about.css" type="text/css" />',
    1 => '<script src="/js/jquery.visible.min.js" type="text/javascript"></script>',
    2 => '<link rel="stylesheet" href="/css/skill-bar.css" type="text/css" />',
    3 => '<script src="/js/skill-bar.js" type="text/javascript"></script>',
  );
?>

<?php include_once("../inc/head.inc"); ?>

  <body id="about">
  
    <?php require_once("../inc/nav.inc"); ?>

    <div id="about-hero">
      <h3>John Wiebe</h3>
    </div>
    
    <div id="header" class="clearfix">
      <div class="wrapper">
         <p>
          As you probably have already seen, my name is John Wiebe and I am currently a third year student at the University of British Columbia, majoring in Computer Science. I'm originally from Port Alberni on Vancouver Island and moved to Vancouver in 2009 to attend Langara College. After graduating from Langara with a Diploma in Arts and Science, I transfered to UBC to major in Computer Science.
        </p>
        <p>
          Computers have always been incredibly interesting to me and whenever I was asked the "What are you going to do when you grow up" question, I always answered, "I'm not sure, but it will be something to do with computers". I used to dream of being the next big name in Video Game development, working for Nintendo. After taking a few introductory Computer Science classes while at Langara, I knew that this was the direction for me. It's not because Computer Science is a good career path, or because I did well in class, but because this is a subject that I would be researching and learning even if I wasn't in school. I am not laboured by learning about the ins-and-outs of computers, I'm excited.
        </p>
      </div><!-- end of wrapper -->
    </div><!--- end of header -->
    
    <div id="content">
      <div class="wrapper">
        <h1>Skills</h1>
        <div id="skills" class="clearfix">
          <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title" style="background: #27ae60;"><span>HTML/CSS</span></div>
            <div class="skillbar-bar" style="background: #2ecc71;"></div>
          </div> <!-- End Skill Bar -->
  
          <div class="skillbar clearfix " data-percent="90%">
            <div class="skillbar-title" style="background: #d35400;"><span>PHP</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
          </div> <!-- End Skill Bar -->
          
          <div class="skillbar clearfix " data-percent="85%">
            <div class="skillbar-title" style="background: #6600CC;"><span>Java</span></div>
            <div class="skillbar-bar" style="background: #8058A6;"></div>
          </div> <!-- End Skill Bar -->
          
          <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #124e8c;"><span>Drupal</span></div>
            <div class="skillbar-bar" style="background: #4288d0;"></div>
          </div> <!-- End Skill Bar -->
          
          <div class="skillbar clearfix " data-percent="60%">
            <div class="skillbar-title" style="background: #33ADD6;"><span>jQuery</span></div>
            <div class="skillbar-bar" style="background: #2fccda;"></div>
          </div> <!-- End Skill Bar -->
          
          <div class="skillbar clearfix " data-percent="50%">
            <div class="skillbar-title" style="background: #14a701;"><span>C/C++</span></div>
            <div class="skillbar-bar" style="background: #5BC14D;"></div>
          </div> <!-- End Skill Bar -->
  
          <div class="skillbar clearfix " data-percent="45%">
            <div class="skillbar-title" style="background: #333333;"><span>SQL</span></div>
            <div class="skillbar-bar" style="background: #525252;"></div>
          </div> <!-- End Skill Bar -->

        </div> <!-- end of skills -->

        <h1>Experience</h1>
        <div id="experiences" class="clearfix">

          <div class="experience">
            <img src="http://placehold.it/250" />
            <div class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in mauris gravida, sollicitudin tellus vel, efficitur ligula. Vestibulum ultricies imperdiet ante, ac porta neque varius quis. In non neque dictum ex molestie ultrices. Nulla dapibus augue erat, ac vehicula lacus luctus ac. Duis felis augue, hendrerit eget enim in, vehicula accumsan neque. Pellentesque sed consectetur tortor. In eleifend et velit in tempor. Curabitur ut hendrerit felis. Duis pellentesque turpis ut elementum pharetra. Nullam pretium, tortor iaculis scelerisque ornare, ex risus auctor metus, commodo porttitor sem felis at quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut pulvinar ante eu nunc finibus, vestibulum dapibus arcu elementum. Ut sed turpis mattis, condimentum felis vitae, interdum massa. Quisque porttitor scelerisque erat ac tempus. Curabitur ac sem nibh. Aenean bibendum tellus at nunc eleifend cursus.
            </div>
          </div>

           <div class="experience">
            <img src="http://placehold.it/250" />
            <div class="description">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in mauris gravida, sollicitudin tellus vel, efficitur ligula. Vestibulum ultricies imperdiet ante, ac porta neque varius quis. In non neque dictum ex molestie ultrices. Nulla dapibus augue erat, ac vehicula lacus luctus ac. Duis felis augue, hendrerit eget enim in, vehicula accumsan neque. Pellentesque sed consectetur tortor. In eleifend et velit in tempor. Curabitur ut hendrerit felis. Duis pellentesque turpis ut elementum pharetra. Nullam pretium, tortor iaculis scelerisque ornare, ex risus auctor metus, commodo porttitor sem felis at quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut pulvinar ante eu nunc finibus, vestibulum dapibus arcu elementum. Ut sed turpis mattis, condimentum felis vitae, interdum massa. Quisque porttitor scelerisque erat ac tempus. Curabitur ac sem nibh. Aenean bibendum tellus at nunc eleifend cursus.
            </div>
          </div>

        </div><!-- end of experiences -->
       
      </div><!-- end of wrapper -->

      <div id="about-summary">
        <div class="wrapper">
          <p>
            All that being said, as you can see from this site I have more than just one interest. Drawing has always been something I've very much enjoyed and as soon as I found that I could combine my artistic abilities along with my love of computers I dove right into graphic design (and amusing others with photoshops). My list of hobbies and interests continues but I will often describe the things I like by telling people I am a nerd and enjoy everything that comes with the territory.
          </p>
          <p>
            All in all I would say that I have quite diverse taste and once I find something I enjoy (or something that can bring enjoyment to others), I try to learn all I can about it. Please feel free to look through the various things I have made or <a href="/contact">send me a message</a> if you'd like to know more about me or any of my projects.
          </p>
        </div><!-- end of wrapper -->
      </div><!-- end of about-summary -->

    </div><!--end of content-->
    
    <?php require_once("../inc/footer.inc"); ?>   
  </body>
</html>
