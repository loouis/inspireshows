<?php
/*
Template Name: Page - About page
*/
?>
<?php get_header(); ?>

<?php
/* #Start the Loop
======================================================*/
if (have_posts()) : while (have_posts()) : the_post();
?>

<?php
/* #Get Fullscreen Background
======================================================*/
$pageimage = get_post_meta($post->ID,'_thumbnail_id',false);
$pageimage = wp_get_attachment_image_src($pageimage[0], 'portfoliolarge', false);
ag_fullscreen_bg($pageimage[0]);
?>

<div class="contentarea">

<!-- Page Title
  ================================================== -->
<div class="container namecontainer">
    <div class="pagename">
        <h2><span><?php echo the_title(); ?></span></h2>
    </div>
</div>

<!-- Page Content
  ================================================== -->
<div class="container clearfix"><!-- For Stupid ie7-->
    <div class="largepage pagebg">
        <div class="contentwrap">
          <?php the_content(); ?>

          <?php endwhile; else :?>
          <!-- Else nothing found -->
          <h2><?php _e('Error 404 - Not found.', 'framework'); ?></h2>
          <p><?php _e("Sorry, but you are looking for something that isn't here.", 'framework'); ?></p>
         <!--BEGIN .navigation .page-navigation -->
          <?php endif; ?>
          <div id="home0-text">

<blockquote>
<h3><b><i>INSPIRE SHOWS ARE THE UK'S PREMIER ALTERNATIVE ENTERTAINMENT AND ACTION SPORTS SHOW PROVIDER DOING IN EXCESS OF 400 INDIVIDUAL SHOWS A YEAR!</i></b></h3>
</blockquote>
<div class="home-text-container">
  We provide many different types of show for any occasion big or small and all our demonstrations are performed by world class professionals. All our shows provide an amazing spectacle with an unbelievable atmosphere that spectators will never forget!

  </p>We work on many different levels with our clients and have contracts and tours in place right across the globe with all types of business from:
  School/University, Trade shows, Cycle Races, Advertising campaigns, Theme parks, County shows, Holiday parks & Festivals…

  </p>We pride ourselves on catering specifically for your needs so whether its constructing and scheduling a school tour or us working as a promotional tool to help draw attention to your event or brand. One thing is certain we will not fail to inspire!

  </p>Please check the <a href="<?php bloginfo(url);?>/packages">shows</a> section for specifics what we can provide.
</div>

<div class="sponsered-by">
  <p>
    Supported by the Extreme sorts company.
  </p>
  <img src="<?php bloginfo(template_url);?>/images/extreme-logo.png" alt="" />
  <p>
    With our shows you get access there reach of over <b>22 million</b> across media platforms
  </p>
</div>
<div class="clear" style="margin-bottom: 30px;"></div>

<div class="home-video-con">
  <div class="new_play_btn">
    <div class="play_icon">
      <img src="<?php bloginfo (template_url);?>/images/new_play_btn.png" alt="">
    </div>
  </div>
</div>

</div>

             <div class="clear"></div>
        </div>
    </div>
<div class="clear"></div>
</div>
<!-- End Page Content -->

</div>
<div class="clear"></div>
<?php get_footer(); ?>
