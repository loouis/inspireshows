<?php
/*
Template Name: Shows - free running
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

<script>
    jQuery(document).ready(function() {
        jQuery(".fancybox").fancybox();
    });
</script>

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
                   <!--BEGIN .navigation .page-navigation -->
                    <?php endif; ?>

                    <h2>// Free running</h2>
                    <div class="m-bottom one_half">
                    Free running is all about agility, flexibility, body power, strength and precision co-ordination as they flip and leap across any obstacles in there path. For displays Freerunners often share the same scaffolding rig set up as the MTB Trials riders with the addition of trampolines and crash mats for specific challenges.</p>We can also construct a course out of practically anything, the guys are frequently used in TV/Film and advertising campaign's as stunt doubles.</p>This  disciplines adds amazing energy is a great addition to any display, also kids coaching sessions go down really well on the crash mats between shows.
                    </div>

                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://www.youtube.com/watch?v=iBzRrdSBFXQ">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/freerunning_placeholder_video.jpg" alt="">
                        </div>
                      </a>
                    </div>
                    
                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>

                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/trials-pic-2.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/freerunning_pic_2.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/combined_pic3.jpg" alt="" />
                      </div>

                    </div>

                    <a href="<?php bloginfo(url);?>/contact">
                      <div class="contact-btn">
                       <div class="slide-btn-effect"></div>Contact us
                      </div>
                    </a>
                    
             <div class="clear"></div>
        </div>          
    </div>
<div class="clear"></div>
</div>
<!-- End Page Content -->

</div>
<div class="clear"></div>
<?php get_footer(); ?>