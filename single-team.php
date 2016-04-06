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
  $bkg_photo = get_field('additional_photo');
?>

<?php get_header('site'); ?>

<div class="content-margin">
  <div id="header-section" style="background: url(<?php echo $bkg_photo; ?>) no-repeat; background-size: cover;">
    <div class="container">
      <div class="team-member-info">
      </div>
    </div>
  </div>
  <div id="team-member-content">
    <div class="container">
      <main id="main" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
            <h1 class="entry-title single-title member-name" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
            <h3 class="member-title"><?php echo $job_title; ?></h3>
            <section class="team-member-entry entry-content cf" itemprop="articleBody">
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
</div>

<?php get_footer(); ?>
