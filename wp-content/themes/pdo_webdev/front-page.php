<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since pdo_webdev
 * @author Patti O'Neill
 */

get_header(); ?>

  <section class="home-page">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
      <div class="homepage-hero">        
        <?php the_content(); ?>
      </div>
      <?php endwhile ?>
    </div><!--container-->
  </section><!--home-page-->

  <section class="about-divider">
    <div class="about-info">
      <!-- <h1>Featured Work</h1> -->
    </div>
  </section>


  <div class="about">
    <h2>Helping you grow your business</h2>
  </div>


  <section class="feature-divider">
    <div class="feature-info">
      <h1>Featured Work</h1>
    </div>
  </section>


  <section class="portfolio-divider">
    <div class="portfolio-info">
    <h4>Websites</h4>
    <div class="no-style">
      <ul>
        <?php query_posts('posts_per_page=3&post_type=portfolio'); ?>
          <?php while( have_posts() ) : the_post(); 
            $image_1 = get_field('image_1');
            $size = 'medium';
        ?>
        <li class="portfolio-featured-work">
          <div class="portfolio-side-by-side">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <figure>
             <a href="<?php the_permalink(); ?>">
              <figure>
                <?php 
                $image_1 = get_field('image_1');
                $atts = array(
                  'imageid' => $image_1, 
                  'size1' => '200', 
                  'size2' =>'300', 
                  'size3' =>'500'
                );  ?>              
              </figure>

             <?php echo wp_get_attachment_image($image_1, $size); ?></a>
            </figure>
          </div><!--side-by-side-->
        </li><!--individual-featured-work-->
        <?php endwhile; //end of loop ?>
        <?php wp_reset_query(); //resets the altered query back to the original ?>
      </ul>
    </div><!--no-style--> 
    </div><!-- portfolio-info -->
    <div class="email-info">
    <h4>Email / Newsletter Templates </h4>
    <div class="no-style">
      <ul>
        <?php query_posts('posts_per_page=2&post_type=email'); ?>
          <?php while( have_posts() ) : the_post(); 
            $email_image_1 = get_field('email_image_1');
            $size = "medium";
        ?>
        <li class="email-featured-work">
          <div class="side-by-side">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <figure>
             <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($email_image_1, $size); ?></a> 
            </figure>
          </div><!--side-by-side-->
        </li><!--individual-featured-work-->
        <?php endwhile; //end of loop ?>
        <?php wp_reset_query(); //resets the altered query back to the original ?>
      </ul>
    </div><!--no-style--> 
    </div><!-- email-info -->
  </section>    
  <section class="contact-divider">
    <div class="contact">
      <div class="contact-info">     
        <h4>Contact Me</h4>
      </div>
      <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 5 ); } ?>
    </div>
  </section>   

<?php get_footer(); ?>