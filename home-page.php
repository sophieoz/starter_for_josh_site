<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   <!--  Tells WordPress to include header.php -->
         <section class= "container-fluid aboutbg text-center">
            <div class="container">
            <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->
            <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
<p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

            </div> <!--container-->
        <div class="blocker"></div>        
        </section>
        <section class="container-fluid articlesbg">
            <div class="container">
                    <div class="row">
                    <div class="col-md-4">
                    <h3 CLASS="text-center"><?php the_field('titleforarticles'); ?></h3>
                      <img class="img-fluid" src="<?php the_field('articleimage');?>" alt="woman">
                      <h4 class="article-title"><?php the_field('articletitle'); ?> </h4>
                      <p class="date" ><?php the_field('articledate'); ?></p>
                      <p class="article-p"><?php the_field('articleexcerpt'); ?> </p>
                      <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4">
                    <h3 CLASS="text-center"><?php the_field('titleforarticles'); ?></h3>
                      <img class="img-fluid" src="<?php the_field('articleimage');?>" alt="model">
                      <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                      < <p class="date" ><?php the_field('articledate'); ?></p>
                      <p class="article-p"><?php the_field('articleexcerpt_middle'); ?> </p>
                      <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    <div class="col-md-4">
    
                      <img class="img-fluid" src="<?php the_field('articleimage');?>" alt="map">
                      <h4 class="article-title"><?php the_field('articletitle'); ?></h4>
                      < <p class="date" ><?php the_field('articledate'); ?></p>
                      <p class="article-p"><?php the_field('articleexcerpt_end'); ?> </p>
                      <a href="<?php the_field('readmore'); ?>" class="readmore">CONTINUE READING</a>
                    </div>
                    </div><!--row-->
                </div><!--container-->
               </section><!--container-fluid-->
               <?php get_footer();?>   <!-- Tells WordPress to include footer.php   -->