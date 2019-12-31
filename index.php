<?php

get_header();
?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">

      <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        if ( have_posts() ) :

          if ( is_home() && ! is_front_page() ) :
            ?>
            <header>
              <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
            <?php
          endif;

         
          while ( have_posts() ) :
            the_post();

            
            get_template_part( 'template-parts/content', get_post_type() );

          endwhile;

          the_posts_navigation();

        else :

          get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

        </main><!-- #main -->
      </div><!-- #primary -->
    </div>
    <div class="col-sm-4">
    <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>