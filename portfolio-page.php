<?php
/**
 * Template Name: Portfolio Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Catch Themes
 * @subpackage Adventurous
 * @since Adventurous 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">

        <main class="clearfix">
              <!-- clickable thumbnails of all the work -->
              <div id="portfolio">
                <ul>
                    <li class="filter" data-filter=".art">Art</li>
                    <h4> | </h4>
                    <li class="filter" data-filter=".teach">Education</li>
                    <h4> | </h4>
                    <li class="filter" data-filter=".design">Web Design</li>
                    <h4> | </h4>
                    <li class="filter" data-filter="all">All</li>
                  </ul>
              </div>
              <div id="all-work" class="clearfix">

                <a href="#kinder" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design" data-myorder="1">
                  <img src="/wp-content/uploads/2015/09/square-kinder.png" alt="">
                    <figcaption class="img-title">
                        <h4>KinderXplorer</h4>
                    </figcaption>
                </figure>
                </a>

                <a href="#inkwash" class="fancybox" data-fancybox-group="art">
                <figure class="gallery-item mix art">
                  <img src="/wp-content/uploads/2015/09/square-inkwash.jpg" alt="ink wash painting">
                    <figcaption class="img-title">
                        <h4>Ink Wash</h4>
                    </figcaption>
                </figure>
                </a>


                <a href="#stonefields" class="fancybox" data-fancybox-group="teach">
                <figure class="gallery-item mix teach">
                  <img src="/wp-content/uploads/2015/09/square-artclass.jpg" alt="art class">
                    <figcaption class="img-title">
                        <h4>Art Class</h4>
                    </figcaption>
                </figure>   
                </a>             

                <a href="#sketch" class="fancybox" data-fancybox-group="art">
                <figure class="gallery-item mix art">
                  <img src="/wp-content/uploads/2015/09/square-sketchbook.jpg" alt="sketchbook drawing">
                    <figcaption class="img-title">
                      
                        <h4>Sketchbook Drawing</h4>
                      
                    </figcaption>
                </figure>
                </a>

                <!-- <figure class="gallery-item mix art">
                  <img src="img/square-sketchbook2.jpg" alt="sketchbook drawing">
                    <figcaption class="img-title">
                      <a href="#sketch2" class="fancybox" data-fancybox-group="art">
                        <h4>Sketchbook Drawing</h4>
                      </a>
                    </figcaption>
                </figure> -->

                <a href="#angel" class="fancybox" data-fancybox-group="art">
                <figure class="gallery-item mix art">
                  <img src="img/square-angel.png" alt="angel">
                    <figcaption class="img-title">
                      
                        <h4>The Heavens</h4>
                      
                    </figcaption>
                </figure>
                </a>

                <a href="#class5" class="fancybox" data-fancybox-group="teach">
                <figure class="gallery-item mix teach">
                  <img src="img/square-artclass5.jpg" alt="teach class">
                    <figcaption class="img-title">
                      
                        <h4>Art Class, Mixing Colors</h4>
                      
                    </figcaption>
                </figure>
                </a>
                
                <a href="#latin-wireframe" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design">
                  <img src="img/square-tablet-design.png" alt="latinissimo">
                    <figcaption class="img-title">
                      
                        <h4>Latinissimo Wireframes</h4>
                      
                    </figcaption>
                </figure>
                </a>

                <a href="#figure" class="fancybox" data-fancybox-group="art">
                  <figure class="gallery-item mix art">
                  <img src="img/square-figure-oil.png" alt="figure painting">
                    <figcaption class="img-title">
                      
                        <h4>Figure Study</h4>
                      
                    </figcaption>
                  </figure>
                </a>

                <a href="#kinder2" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design">
                  <img src="img/square-kinder-science.jpg" alt="kinderxplorer">
                    <figcaption class="img-title">
                        <h4>KinderXplorer</h4>
                    </figcaption>
                  </figure>
                </a>

                <a href="#latinissimo" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design">
                  <img src="img/square-latinissimo.png" alt="latinissimo">
                    <figcaption class="img-title">
                        <h4>Latinissimo</h4>
                    </figcaption>
                </figure>
                </a>

                <a href="#class4" class="fancybox" data-fancybox-group="teach">
                  <figure class="gallery-item mix teach">
                  <img src="img/square-artclass4.jpg" alt="art class ">
                    <figcaption class="img-title">
                      
                        <h4>Painting Class</h4>
                      
                    </figcaption>
                </figure>
                </a>

                <a href="#oldman" class="fancybox" data-fancybox-group="art">
                  <figure class="gallery-item mix art">
                  <img src="img/square-inkwash2004.png" alt="ink wash">
                    <figcaption class="img-title">
                      
                        <h4>Old Man</h4>
                      
                    </figcaption>
                  </figure>
                </a>

                <a href="#leo-becky" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design">
                  <img src="img/square-Leo-Becky.jpg" alt="Leo and Becky Zouk">
                    <figcaption class="img-title">
                      
                        <h4>Leo and Becky</h4>
                      
                    </figcaption>
                  </figure>
                </a>
                
                <a href="#still-life" class="fancybox" data-fancybox-group="art">
                  <figure class="gallery-item mix art">
                  <img src="img/square-still-life.png" alt="">
                    <figcaption class="img-title">
                      
                        <h4>Still Life</h4>
                      
                    </figcaption>
                  </figure>
                </a>

                <a href="#class6" class="fancybox" data-fancybox-group="teach">
                  <figure class="gallery-item mix teach">
                    <img src="img/square-artclass6.jpg" alt="art class">
                      <figcaption class="img-title">
                        
                          <h4>Student Work</h4>
                        
                      </figcaption>
                  </figure>
                </a>

                <!-- <figure class="gallery-item mix design">
                  <img src="img/square-heidi-wireframe3.png" alt="portfolio wireframes">
                    <figcaption class="img-title">
                      <a href="#portfolio-wireframe" class="fancybox" data-fancybox-group="design">
                        <h4>Portfolio Wireframes</h4>
                      </a>
                    </figcaption>
                </figure> -->

                <!-- <figure class="gallery-item mix art" >
                  <img src="img/square-acrylic.png" alt="acrylic">
                    <figcaption class="img-title">
                      <a href="#acrylic" class="fancybox" data-fancybox-group="art">
                        <h4>Self-Portrait</h4>
                      </a>
                    </figcaption>
                </figure> -->

                <a href="#class3" class="fancybox" data-fancybox-group="teach">
                  <figure class="gallery-item mix teach" >
                    <img src="img/square-artclass3.jpg" alt="art class">
                      <figcaption class="img-title">
                        
                          <h4>Student Crafts</h4>
                        
                      </figcaption>
                  </figure>
                </a>

                <a href="#kinder-moodboard" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design">
                  <img src="img/square-kinder-moodboard.jpg" alt="kinder moodboard">
                    <figcaption class="img-title">
                      
                        <h4>KinderXplorer Moodboard</h4>
                      
                    </figcaption>
                </figure>
                </a>

                <!-- <figure class="gallery-item mix art">
                  <img src="img/square-pencilgirl.jpg" alt="pencil drawing">
                    <figcaption class="img-title">
                      <a href="#girl" class="fancybox" data-fancybox-group="art">
                        <h4>Girl with Braids</h4>
                      </a>
                    </figcaption>
                </figure> -->

                <a href="#katy" class="fancybox" data-fancybox-group="art">
                  <figure class="gallery-item mix art">
                  <img src="img/square-katy.png" alt="pencil drawing">
                    <figcaption class="img-title">
                      
                        <h4>Katie</h4>
                      
                    </figcaption>
                  </figure>
                </a>
       
                <a href="#tomato" class="fancybox" data-fancybox-group="art">
                  <figure class="gallery-item mix art">
                  <img src="img/square-tomato.png" alt="tomato oil painting">
                    <figcaption class="img-title">
                      
                        <h4>Tomatoes</h4>
                      
                    </figcaption>
                  </figure>
                </a>
         
                <a href="#littlegirl" class="fancybox" data-fancybox-group="art">
                  <figure class="gallery-item mix art">
                  <img src="img/square-watercolor2003.png" alt="water color">
                    <figcaption class="img-title">
                      
                        <h4>Little Girl</h4>
                      
                    </figcaption>
                  </figure>
                </a>

                <a href="#shop" class="fancybox" data-fancybox-group="design">
                  <figure class="gallery-item mix design">
                  <img src="img/square-danceshop.png" alt="dance shop">
                    <figcaption class="img-title">
                      
                        <h4>First Website</h4>
                      
                    </figcaption>
                  </figure>
                </a>

                
                <a href="#winter" class="fancybox" data-fancybox-group="teach">
                  <figure class="gallery-item mix teach">
                  <img src="img/square-winterfest.jpg" alt="Winter Art Festival">
                    <figcaption class="img-title">
                      
                        <h4>Winter Festival</h4>
                      
                    </figcaption>
                  </figure>
                </a>

                <!-- <figure class="gallery-item mix art">
                  <img src="img/square-art-noveau.png" alt="art noveau painting">
                    <figcaption class="img-title">
                      <a href="#noveau" class="fancybox" data-fancybox-group="art">
                        <h4>Art Noveau Portrait</h4>
                      </a>
                    </figcaption>
                </figure> -->

                <!-- <figure class="gallery-item mix art">
                  <img src="img/square-glazing.png" alt="glazing acrylic painting">
                    <figcaption class="img-title">
                      <a href="#glazing" class="fancybox" data-fancybox-group="art">
                        <h4>Study in Glaze</h4>
                      </a>
                    </figcaption>
                </figure> -->

                <div class="gap"></div>
                   
              </div>
              <!-- end of thumnbnails -->

              <!-- start of fancyboxes hidden -->
              <div class="panels" style="display:none;">

              <figure id="sketch">
                  <img src="img/sketchbook.jpg" alt="sketchbook drawing">
                  <figcaption>
                    <h3>Sketchbook Drawing, 2014</h3>
                    <p></p>
                  </figcaption>
                </figure>

                <figure id="kinder">
                  <img src="img/kinder-home.png" alt="kinderxplorer">
                  <figcaption>
                    <h3>KinderXplorer, 2014</h3><a href="http://heidicone.com/kinderxplorer/" target="blank">Launch Website</a>
                    <p>This project was built as a prototype for an educational kindergarten learning platform. <i>**Website best viewed on tablet device**</i></p>
                  </figcaption>
                </figure>

                <figure id="latin-wireframe">
                  <img src="img/tablet-design.png" alt="kinderxplorer">
                  <figcaption>
                    <h3>Latinissimo Wireframes, 2014</h3>
                    <a href="http://latindancestudio.co.nz" target="blank">Launch Website</a>
                    <p>The wireframes for the Latinissimo Dance Studio website redesign, which was created in Balsamiq.</p>
                  </figcaption>
                </figure>

                <figure id="kinder2">
                  <img src="img/kinder-science.jpg" alt="kinderxplorer">
                  <figcaption>
                    <h3>KinderXplorer, 2014</h3><a href="http://heidicone.com/kinderxplorer/" target="blank">Launch Website</a>
                    <p>This project was built as a prototype for an educational kindergarten learning platform.</p>
                  </figcaption>
                </figure>

                <figure id="leo-becky">
                  <img src="img/Leo-Becky.jpg" alt="leo and becky zouk">
                  <figcaption>
                    <h3>Leo and Becky, 2014</h3>
                    <p>This poster was created as part of a promotion for dance workshops.</p>
                  </figcaption>
                </figure>

                <figure id="portfolio-wireframe">
                  <img src="img/heidi-wireframe3.png" alt="heidi portfolio wireframe">
                  <figcaption>
                    <h3>Portfolio Wireframe, 2014</h3>
                    <p>These wireframes were designed during the production of this portfolio website.</p>
                  </figcaption>
                </figure>

                <figure id="kinder-moodboard">
                  <img src="img/moodboard.jpg" alt="kinderxplorer moodboard">
                  <figcaption>
                    <h3>KinderXplorer: Moodboard, 2014</h3>
                    <p>This moodboard was created as part of the design process for the KinderXplorer App.</p>
                  </figcaption>
                </figure>

                <figure id="inkwash">
                  <img src="img/inkwash.jpg" alt="ink wash painting">
                  <figcaption>
                    <h3>Lee, 2005</h3>
                    <p>Sketchbook painting of a classmate, Lee, with ink wash.</p>
                  </figcaption>
                </figure>

                <figure id="angel">
                  <img src="img/angel.png" alt="angel">
                  <figcaption>
                    <h3>The Heavens, 2009</h3>
                    <p>Italian Street Painting at the Winter Arts Festival in State College, Pennsylvania, 2009.</p>
                  </figcaption>
                </figure>

                <figure id="sketch2">
                  <img src="img/sketchbook2.jpg" alt="sketchbook drawing">
                  <figcaption>
                    <h3>Sketchbook Drawing, 2008</h3>
                    <p></p>
                  </figcaption>
                </figure>

                <figure id="class5">
                  <img src="img/artclass5.jpg" alt="art class">
                  <figcaption>
                    <h3>Art Class, Mixing Colors</h3>
                    <p>Primary School art class, learning to mix colors and create outdoor landscape paintings.</p>
                  </figcaption>
                </figure>

                <figure id="class3">
                  <img src="img/artclass3.jpg" alt="art class">
                  <figcaption>
                    <h3>Art Class, Puzzle Craft</h3>
                    <p>Primary School art class, designing and painting custome puzzles</p>
                  </figcaption>
                </figure>

                <figure id="figure">
                  <img src="img/figure-oil.png" alt="kinderxplorer">
                  <figcaption>
                    <h3>Study in Figure, 2007</h3>
                    <p>Exploring the human figure, Penn State University Studio Class.</p>
                  </figcaption>
                </figure>

                <figure id="class4">
                  <img src="img/artclass4.jpg" alt="art class">
                  <figcaption>
                    <h3>Painting Class, 2014</h3>
                    <p>Primary School painting class, 2014</p>
                  </figcaption>
                </figure>

                <figure id="oldman">
                  <img src="img/inkwash2004.png" alt="ink wash">
                  <figcaption>
                    <h3>Old Man, 2004</h3>
                    <p>Experiment with ink wash in a studio art class.</p>
                  </figcaption>
                </figure>

                <figure id="still-life">
                  <img src="img/still-life.png" alt="still life">
                  <figcaption>
                    <h3>Still Life, 2007</h3>
                    <p>Exploring shape and space with oil paints in a studio class.</p>
                  </figcaption>
                </figure>

                <figure id="class6">
                  <img src="img/artclass6.jpg" alt="art class">
                  <figcaption>
                    <h3>Student Work, 2014</h3>
                    <p>Primary School painting class, painting landscapes.</p>
                  </figcaption>
                </figure>

                <figure id="acrylic">
                  <img src="img/acrylic.png" alt="acrylic">
                  <figcaption>
                    <h3>Self-Portrait, 2004</h3>
                    <p>Experiment in acrylic</p>
                  </figcaption>
                </figure>

                <figure id="girl">
                  <img src="img/pencilgirl.jpg" alt="pencil drawing">
                  <figcaption>
                    <h3>Girl with Braids, 2003</h3>
                    <p>Sketchbook drawing</p>
                  </figcaption>
                </figure>

                <figure id="katy">
                  <img src="img/katy.png" alt="katy pencil drawing">
                  <figcaption>
                    <h3>Katy, 2014</h3>
                    <p>Experiment in color mixing</p>
                  </figcaption>
                </figure>

                <figure id="tomato">
                  <img src="img/tomato.png" alt="still life">
                  <figcaption>
                    <h3>Tomato, 2006</h3>
                    <p>Exploring shape and space with oil paints in a studio class.</p>
                  </figcaption>
                </figure>

                <figure id="littlegirl">
                  <img src="img/watercolor2003.png" alt="water color painting">
                  <figcaption>
                    <h3>Little Girl, 2003</h3>
                    <p>First water color painting, painting class, State College Area High School.</p>
                  </figcaption>
                </figure>

                <figure id="noveau">
                  <img src="img/art-noveau.png" alt="art noveau painting">
                  <figcaption>
                    <h3>Art Noveau Portrait, 2005</h3>
                    <p>Self-portrait in acrylic in the style of Art Noveau.</p>
                  </figcaption>
                </figure>

                <figure id="glazing">
                  <img src="img/glazing.png" alt="glazing acrylic painting">
                  <figcaption>
                    <h3>Study in Glazing, 2009</h3>
                    <p>My example of an assigment on glazing with acrylics for my painting class.</p>
                  </figcaption>
                </figure>

                <figure id="latinissimo">
                  <img src="img/latinissimo.png" alt="Latinissimo Dance Studio">
                  <figcaption>
                    <h3>Latinissimo Dance Studio, 2014</h3>
                    <a href="http://latindancestudio.co.nz" target="blank">Launch Website</a>
                    <p>Website for a client, Latinissimo Dance Studio, Auckland, a dance school.</p>
                  </figcaption>
                </figure>

                <figure id="shop">
                  <img src="img/danceshop.png" alt="dance shop">
                  <figcaption>
                    <h3>Le Petite Boutique, 2014</h3>
                    <a href="http://heidicone.com/lepetiteboutique/" target="blank">Launch Website</a>
                    <p>My first website design, a practice data-driven website for a pretend dance shop.</p>
                  </figcaption>
                </figure>

                <figure id="winter">
                  <img src="img/winterfest.jpg" alt="art class">
                  <figcaption>
                    <h3>Winter Festival, 2009</h3>
                    <p>I taught a couple workshops on Italian Street Painting at State College Area High School and organized an art booth at the Winter Art Festival to raise money for the State College Area High School Art Club.</p>
                  </figcaption>
                </figure>

                <figure id="stonefields">
                  <img src="img/artclass.jpg" alt="art class">
                  <figcaption>
                    <h3>Art Class, 2014</h3>
                    <p>Painting class at a Primary School</p>
                  </figcaption>
                </figure>

              </div>
              <!-- end of hidden fancyboxes -->

              <!-- start of about me section -->
              <div id="about">
                                     
                   <div>

                    <h2>About Me</h2>
                    <p>Hi, my name is Heidi Cone and I am a Front-End Developer, artist, teacher, dancer, and mom to a furry little beast named Harley. I grew up in the United States, where I started drawing as soon as I could hold a crayon.</p><br> <p>Throughout intermediate and high school, I took as many art, design, and dance classes available to me. At Pennsylvania State University, I studied Art Education and continued on to teach ages ranging from preschool to high school.</p> <br> <p>My passion for art and design has grown over the years, resulting in the decision to study at Media Design School in my current town, Auckland, New Zealand. Studying to become a front-end developer has opened my eyes to a future full of possibilities, and I look forward to discovering them.</p>

                    <h2>Contact Me</h2>

                    <div class="contact">

                      <a href="http://nz.linkedin.com/pub/heidi-cone/26/82b/3b" target="_blank"><img src="img/linked.png"></a>
                      <a href="http://heidicone.com/blog/" target="_blank"><img src="img/wordpress18.png" alt="wordpress"></a>
                      <a href="http://vizualize.me/HeidiCone" target="blank"><img src="img/cv.png"></a>
                     <!--  <img src="img/facebook.png"> -->
                      <a href="mailto:heidicone@gmail.com" target="_blank"><img src="img/email.png"></a>

                      <!-- <a href="http://nz.linkedin.com/pub/heidi-cone/26/82b/3b" target="_blank"><h3>Linked In</h3></a>
                      
                      <a href="http://vizualize.me/HeidiCone" target="blank"><h3>CV</h3></a>
                      <a href="mailto:heidicone@gmail.com" target="_blank"><h3>Email</h3></a> -->

                    </div>

                    <h2>My Skills</h2>
                     
                    <div class="skills">

                        <img src="img/sass.png" alt="SASS" title="SASS">
                        <img src="img/photoshop.png" alt="Photoshop" title="Adobe Photoshop">
                        <img src="img/illustrator.png" alt="illustrator" title="Adobe Illustrator">
                        <!-- <img src="img/sublime-logo.jpg" alt="sublime text" title="Sublime Text"> -->
                        <img src="img/shopify.png" alt="shopify" title="Shopify">
                        <img src="img/HTML5_Logo.png" alt="HTML 5" title="HTML 5">
                        <img src="img/css3.svg" alt="CSS" title="CSS">
                        <img src="img/jquery.jpeg" alt="jQuery" title="jQuery">
                        <img src="img/jquery-ui.gif" alt="jQuery UI" title="jQuery UI">
                        <img src="img/js.png" alt="JavaScript" title="JavaScript">
                        
                        <img src="img/github.png" alt="GitHub" title="GitHub">
                        <img src="img/balsamiq.png" alt="Balsamiq" title="Balsamiq">
                        <!-- <img src="img/FileZilla.png" alt="FileZilla" title="Filezilla"> -->
                        <img src="img/terminal.png" alt="terminal" title="Terminal">
                        <img src="img/wordpress.png" alt="wordpress" title="WordPress">

                    </div>
                    <!-- end of skills -->
                  </div>
                  <!-- end of about text and skills -->
                  <img src="img/heidi.jpg" alt="Heidi Cone" class="heidi">

              </div>
               <!-- end of about section -->
            </main>
            <!-- end of main section -->

      </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->


<?php get_footer(); ?>