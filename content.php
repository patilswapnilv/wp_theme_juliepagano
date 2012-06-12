<article>
  <header>
    <h1>
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    </h1>
    <div class="date">
      <span class="month">
        <?php the_time('M'); ?>
      </span>
      <span class="day">
        <?php the_time('d'); ?>
      </span>
    </div>
  </header>
  <div class="entry-timestamp">
    <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
  </div>
  <div class="entry-categories">
    <?php the_category(', '); ?>
  </div>
  <?php the_content(); ?>
  <section class="comments">
    <?php comments_template(); ?>
  </section>
</article>