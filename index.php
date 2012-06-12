<?php get_header(); ?>

    <div id='main' role='main'>
      <div id='page_title'>
         <h1>BLOG</h1>
      </div>
      <div class='container'>
        <div class='content'>
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
          <?php else : ?>
            No blog posts available.
          <?php endif; ?>
        </div>
        <div class='sidebar'>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>