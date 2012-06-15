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
  <?php the_content(); ?>
  <footer>
    <div class="entry-categories">
      <ul>
        <li>
          <strong>Categories:</strong>
        </li>
        <?php foreach((get_the_category()) as $category) { ?>
          <li>
            <a href="<?= get_category_link($category->cat_ID) ?>">
              <?= $category->cat_name ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
    <div class="entry-timestamp">
      <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
    </div>
  </footer>
  <section class="comments">
    <?php comments_template(); ?>
  </section>
</article>