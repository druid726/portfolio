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
      $image_1 = get_field('image_1');
      $image_2 = get_field('image_2');
      $image_3 = get_field('image_3');
      $size = 'large';
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
          <?php if($image_1) {
              echo wp_get_attachment_image( $image_1, $size );
            } ?>
        </div><!--portfolio-images-->
      </div>

      <?php endwhile; // end of the loop. ?>

     </section> 


<?php get_footer(); ?>




