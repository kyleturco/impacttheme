<?php
/*
Template Name: Single Team Member
*/
?>

<?php
  $member_name = get_the_title();
  $image_url = get_field('team_member_image', $post->ID)['url'];
  $job_title = get_field('job_title');
  $email = get_field('email');
  $permalink = get_permalink();
?>

<?php get_header('site'); ?>

<div id="content">
  <div id="inner-content" class="wrap cf">
    <main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
          <header class="article-header entry-header">
            <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
          </header>
          <section class="entry-content cf" itemprop="articleBody">
            <div><?php the_post_thumbnail('full'); ?></div>
            <?php
              the_content();
            ?>
          </section>
        </article>

      <?php endwhile; ?>

      <?php else : ?>

        <article id="post-not-found" class="hentry cf">
            <header class="article-header">
              <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
            </header>
            <section class="entry-content">
              <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
            </section>
            <footer class="article-footer">
                <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
            </footer>
        </article>
      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
