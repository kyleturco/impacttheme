<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div id="home-hero-section">
  <div class="container">
    <div id="home-hero-content" class="home-hero-width">
      <div class="logo-circle">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/collide-circle-logo.png">
      </div>
      <h1 class="text-white">Slogan or value statement goes here</h1>
      <p id="home-hero-description" class="text-white">
        Collide Media Group is a Nashville-based marketing company that specializes in faith based,
        family entertainment
      </p>
      <a class="btn-link" href="#home-services-section">
        <div id="home-hero-btn" class="btn-primary">our services <i class="fa fa-angle-double-down"></i></div>
      </a>
    </div>
  </div>
</div>
<div id="home-services-section">
  <div class="container">
    <div id="home-services-content">
      <div class="services-boxes">
        <div class="services-box col-md-4">
          <h2>Campaign Management</h2>
        </div>
        <div class="services-box col-md-4">
          <h2>Brand Development</h2>
        </div>
        <div class="services-box col-md-4">
          <h2>Strategic Partnerships</h2>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="services-content">
        <div class="campaign-mgmt-content">
          <p>
            Our exploration process starts by going back to the beginning.  By taking your brand apart and putting it
            back together, we are able to set aside things that are not essential to your goals and mission.  In the
            case of brand development, we are unique in three ways:
          </p>
          <div class="col-md-4 quality-item">
            <h4>Our Faith</h4>
            <p>
              We believe that we have a Creator and everything was created, likewise, we look at someone with an
              idea (or tons of ideas) or a brand, and know this came out of their life somewhere.
            </p>
          </div>
          <div class="col-md-4 quality-item">
            <h4>Our Experience</h4>
            <p>
              Collide has a long history of campaign management on behalf of ministries and brands.  Collide team
              members have developed brands and quarterbacked campaigns.
            </p>
          </div>
          <div class="col-md-4 quality-item">
            <h4>Our Experience</h4>
            <p>
              A lot of what we do is create a differentiation, which comes with a deep understanding and working
              knowledge of the market landscape.
            </p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="about-section">
  <div class="container">
    <div class="about-section-content">
      <h1 class="text-white header-underline">About</h1>
      <p class="text-white">
        <b>Collide Media Group is a marketing agency whose mission is to elevate media that inspires a
        deeper relationship with Christ.</b>
      </p>
      <div class="col-md-6 text-white">
        <p>
          Over the years, Collide team members have helmed major brand development campaigns for clients such as
          Thomas Nelson Bibles, Moody Publishing and The Five Love Languages and faith financial icon Ron Blue. They
          have run and contributed to major theatrical campaigns for over 30 films including The Chronicles of Narnia
          "The Lion, The Witch, and the Wardrobe" in 2005,
        </p>
      </div>
      <div class="col-md-6 text-white">
        <p>
          “Courageous" and "Soul Surfer" in 2011 and Paramount's "Captive" in 2015.  Strategic partnerships have been
          formed and developed for clients including the recent box office hit "God's Not Dead" and currently with
          Phil Vischer's "JellyTelly" media platform for families.
        </p>
      </div>
    </div>
  </div>
</div>
<div id="team-section">
  <div class="container">
    <div class="team-section-content">
    <?php
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
      );
    $team_members = new WP_Query( $args );
    ?>
      <h1 class="header-underline">Team</h1>
      <div class="team-container">
        <?php
        $i = 0;
        if ( $team_members->have_posts() ) {
          while ( $team_members->have_posts() ) {
            $team_members->the_post();
            $member_name = get_the_title();
            $image_url = get_field('team_member_image', $post->ID)['url'];
            $job_title = get_field('job_title');
            $email = get_field('email');
        ?>
        <div class="team-member">
          <a href=""><?php the_post_thumbnail('large'); ?></a>
          <h3><?php echo $member_name; ?></h3>
          <p><?php echo $job_title; ?></p>
        </div>
       <?php
            $i++;
          }
        }
      ?>
      </div>
    </div>
  </div>
</div>
<div id="contact-section">
  <div class="container">
    <div id="contact-section-content">
      <h1 class="header-underline text-white">Let's Talk</h1>
      <div class="col-md-4">
        <p class="text-white">Sentence encouraging communication of some kind. Get in touch today!</p>
        <div class="icon-section">
          <div class="icon-1">
            <i class="fa fa-phone-square text-white"></i><h4 class="contact-item text-white">615-567-3122</h4>
          </div>
          <div class="clearfix"></div>
          <div class="icon-2">
            <i class="fa fa-facebook-square text-white"></i><h4 class="contact-item text-white">Facebook</h4>
          </div>
          <div class="clearfix"></div>
          <div class="icon-3">
            <i class="fa fa-twitter-square text-white"></i><h4 class="contact-item text-white">@collide_mg</h4>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-8">
        <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
