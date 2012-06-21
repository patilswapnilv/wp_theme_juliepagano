<?php get_header(); ?>

    <div id='main' role='main'>
      <div id='page_title'>
         <h1>BLOG</h1>
      </div>
      <div class='container'>
        <div class='content'>
          <div class="blog_posts">
            <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
              <?php endwhile; ?>
            <?php else : ?>
              No blog posts available.
            <?php endif; ?>

            <div class="pagination">
              <?php posts_nav_link(); ?>
            </div>
          </div>
          <div class='sidebar'>
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>