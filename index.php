<?php get_header(); ?>
    <main class="main-contents wrapper">
        <div class="post-list">
        <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post-item">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('/images/ph.png')); ?>" alt="" class="wp-post-image">
                <?php endif; ?>
                </a>
                <header class="post-header">
                    <h2 class="post-title">
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                    </h2>
                    <time class="post-date" datetime="<?php echo get_the_date('m-Y-d'); ?>">
                      <?php the_date(); ?>
                    </time>
                    <?php the_category(); ?>
                </header>
            </article>
            <?php endwhile; else : ?>
              <p>記事はありません。</p>
            <?php endif; ?>
        </div>

        <div class="nav-links">
            <a href="#">← 新しい投稿</a>
            <a href="#">過去の投稿 →</a>
        </div>
    </main>
<?php get_footer(); ?>