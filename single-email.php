<?php
/**
 * The template for displaying email examples.
 *
 * Patti O'Neill - pdoneill26@gmail.com
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since PDO Webdev
 * @author Patti O'Neill
 */

get_header(); ?>

  <section class="email-single">
    
      
    <?php while ( have_posts() ) : the_post();
      $title = get_field('email_title');
      $subtitle = get_field('subtitle');
      $email_image_1 = get_field('email_image_1');
      $size = 'large';
    ?>
      <article class="email">
        <aside class="email-sidebar">
          <h2><?php the_title(); ?></h2>
          <h6><?php echo $subtitle; ?></h6>
          <?php the_content(); ?>
        </aside>

        <div class="email-image">
          <?php if($email_image_1) {
            echo wp_get_attachment_image( $email_image_1, $size );
         } ?> 
        </div><!--email-image-->
      </article>

      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->
  </section>

<?php get_footer(); ?>