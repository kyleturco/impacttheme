<?php
/*
Template Name: Homepage
*/

// Sets WP editable fields
$hero_description = get_field('hero_description');
$camp_mgmt = get_field('camp_mgmt_text');
$brand_dev = get_field('brand_dev_text');
$strat_partner = get_field('strat_partner_text');
$contact_description = get_field('contact_text');
?>

<?php get_header(); ?>

<div id="home-hero-section">
  <div class="container">
    <div id="home-hero-content" class="home-hero-width inner-content">
      <div class="logo-circle">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/collide-circle-logo.png">
      </div>
      <h1 class="text-white">Elevating media that inspires a deeper relationship with Christ</h1>
      <p id="home-hero-description" class="text-white">
        <?php echo $hero_description; ?>
      </p>
      <a class="btn-link" href="#home-services-section">
        <div id="home-hero-btn" class="btn-primary">our services <i class="fa fa-angle-double-down"></i></div>
      </a>
    </div>
  </div>
</div>
<div id="home-services-section">
  <div class="container">
    <div id="home-services-content" class="inner-content">
      <div class="services-boxes">
        <div id="camp-mgmt-box" class="services-box col-md-4 active">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/campaign-mgmt.png" alt="collide mg campaign management">
          </div>
          <h2>Campaign Management</h2>
        </div>
        <div id="brand-dev-box" class="services-box col-md-4">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/brand-dev.png" alt="collide mg campaign management">
          </div>
          <h2>Brand Development</h2>
        </div>
        <div id="strat-part-box" class="services-box col-md-4">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/library/images/strat-part.png" alt="collide mg campaign management">
          </div>
          <h2>Strategic Partnerships</h2>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="services-content">
        <div class="content-box" id="services">
          <div class="camp-mgmt-content">
            <p><?php echo $camp_mgmt; ?></p>
          </div>
        </div>
        <div class="content-box" id="brand-dev">
          <div class="brand-dev-content">
            <p><?php echo $brand_dev; ?></p>
          </div>
        </div>
        <div class="content-box" id="strat-part">
          <div class="strat-part-content">
            <p><?php echo $strat_partner; ?></p>
          </div>
        </div>
      </div>
      <div id="additional-services">
        <h3 class="service-1 col-md-4">Consumer Engagement</h3>
        <h3 class="service-2 col-md-4">Consulting Services</h3>
        <h3 class="service-3 col-md-4">Retail Development</h3>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="home-services-section-mobile">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <div class="container">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
            <h2>Campaign Management</h2>
            <i class="fa fa-plus-square-o plus-icon"></i>
          </a>
        </h4>
      </div>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="container">
          <p><?php echo $camp_mgmt; ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <div class="container">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h2>Brand Development</h2>
            <i class="fa fa-plus-square-o plus-icon"></i>
          </a>
        </h4>
      </div>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <div class="container">
          <p>
            <?php echo $brand_dev; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <div class="container">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <h2>Strategic Partnerships</h2>
            <i class="fa fa-plus-square-o plus-icon"></i>
          </a>
        </h4>
      </div>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <div class="container">
          <p><?php echo $strat_partner; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="about-section">
  <div class="container">
    <div class="inner-content">
      <h1 id="about-header" class="text-white header-underline">About</h1>
      <p id="about-subhead" class="text-white about-subhead p-subhead">
        <b>Collide Media Group is a marketing agency whose mission is to elevate media that inspires a
        deeper relationship with Christ.</b>
      </p>
      <div class="col-md-6 text-white paragraph-1">
        <p>
          Over the years, Collide Media Group team members have helmed major brand development campaigns for clients such as
          Thomas Nelson Bibles, Moody Publishing and The Five Love Languages and faith financial icon Ron Blue. They
          have run and contributed to major theatrical campaigns for over 30 films including The Chronicles of Narnia
          "The Lion, The Witch, and the Wardrobe"
        </p>
      </div>
      <div class="col-md-6 text-white paragraph-2">
        <p>
          in 2005, “Courageous" and "Soul Surfer" in 2011 and Paramount's "Captive" in 2015.  Strategic partnerships have been
          formed and developed for clients including the recent box office hit "God's Not Dead" and currently with
          Phil Vischer's "JellyTelly" media platform for families.
        </p>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div id="team-section">
  <div class="container">
    <div class="inner-content team-section-content">
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
            $permalink = get_permalink();
        ?>
        <div class="team-member">
          <div><?php the_post_thumbnail('full'); ?></div>
          <h2 class="member-name-mobile"><?php echo $member_name; ?></h2>
          <p class="member-job-title-mobile"><?php echo $job_title; ?></p>
          <a href="<?php echo $permalink; ?>" target="_blank">
          <div class="team-member-overlay">
            <div class="team-member-text">
              <h2 class="member-name"><?php echo $member_name; ?></h2>
              <p class="member-job-title"><?php echo $job_title; ?></p>
            </div>
          </div>
          </a>
        </div>
       <?php
            $i++;
          }
        }
      ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div id="contact-section">
  <div class="container">
    <div id="contact-section-content" class="inner-content">
      <h1 class="header-underline text-white">Let's Talk</h1>
      <div class="clearfix"></div>
      <div class="col-md-4 no-left-pad">
        <p class="text-white"><?php echo $contact_description; ?></p>
        <div class="icon-section">
          <div class="icon-1">
            <i class="fa fa-phone-square text-white"></i><h4 class="contact-item text-white">615-567-3122</h4>
          </div>
          <div class="clearfix"></div>
          <div class="icon-2">
            <i class="fa fa-facebook-square text-white"></i><a href="https://www.facebook.com/collidemg" target="_blank"><h4 class="contact-item text-white">Facebook</h4></a>
          </div>
          <div class="clearfix"></div>
          <div class="icon-3">
            <i class="fa fa-twitter-square text-white"></i><a href="https://twitter.com/collide_mg" target="_blank"><h4 class="contact-item text-white">@collide_mg</h4></a>
          </div>
        </div>
      </div>
      <div class="form-container col-md-8 no-left-pad">
        <?php echo do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ); ?>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
