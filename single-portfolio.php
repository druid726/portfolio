<?php
/**
 * The template for displaying portfolio examples.
 *
 * Patti O'Neill - pdoneill26@gmail.com
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since PDO Webdev
 * @author Patti O'Neill
 */

get_header(); ?>
       
    <?php while ( have_posts() ) : the_post();
      $description = get_field('description');
      $link = get_field('site_link');
      $image = get_field('image_1');
    ?>

     <section class="portfolio-single">
      <div class="portfolio">
        <div class="portfolio-text">
          <h2><?php the_title(); ?></h2>
          <h6><?php echo $description; ?></h6>
          <?php the_content(); ?>
          <p>
            <a href="<?php the_field ('site_link'); ?>">Visit Site</a>
          </p>
        </div> 

        <div class="portfolio-images">
        <img src="<?php $image = get_field('image_1'); echo($image['sizes']['large']); ?>" alt="" />
        </a>
        </div><!--portfolio-images-->
      </div>

      <?php endwhile; // end of the loop. ?>

     </section> 


<?php get_footer(); ?>

