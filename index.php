<?php get_header(); ?>

    <div id='main' role='main'>
      <div id='page_title'>
         <h1>BLOG</h1>
      </div>
      <div class='container'>
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            <p><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> | <?php the_category(', '); ?> | <?php comments_number('No comment', '1 comment', '% comments'); ?></p>
          <?php endwhile; ?>
        <?php else : ?>
          No blog posts available.
        <?php endif; ?>
      </div>
    </div>

<?php get_footer(); ?>