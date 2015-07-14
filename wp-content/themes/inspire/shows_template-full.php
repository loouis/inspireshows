<?php
/*
Template Name: Page - shows page
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
                   <!--BEGIN .navigation .page-navigation -->
                    <?php endif; ?>

                    <h2>// Show packages</h2>
                    <p class="m-bottom">Below is a link to each individual type of show package we can provide and details about them, all amazing in there own right but each show can also be combined and tailored  to meet your specific needs. Please don't hesitate to get in touch if you have any questions.</p>
                    
                    <a href="<?php (url);?>/inspire/shows-combined/"><div class="shows-cta-btn">
                      <img src="<?php bloginfo(template_url);?>/images/combined_pic1.jpg" alt="">
                      <div class="shows-title">Combined</div>
                    </div></a>
                    <a href="<?php (url);?>/inspire/shows-bmx-flatland/"><div class="shows-cta-btn">
                      <img src="<?php bloginfo(template_url);?>/images/flatland_image_1.jpg" alt="">
                      <div class="shows-title">BMX Flatland</div>
                    </div></a>
                    <a href="<?php (url);?>/inspire/shows-bmx-jumpbox/"><div class="shows-cta-btn no-margin">
                      <img src="<?php bloginfo(template_url);?>/images/nothing_bmx_jump_box.jpg" alt="">
                      <div class="shows-title">BMX Jump Box</div>
                    </div></a>
                    <a href="<?php (url);?>/inspire/shows-mtb-trials/"><div class="shows-cta-btn ">
                      <img src="<?php bloginfo(template_url);?>/images/mtb_trials_picker.jpg" alt="">
                      <div class="shows-title">MTB Trials</div>
                    </div></a>
                    
                   <a href="<?php (url);?>/inspire/shows-skateboarding"> <div class="shows-cta-btn">
                      <img src="<?php bloginfo(template_url);?>/images/skateboarding_pic_2.jpg" alt="">
                      <div class="shows-title">Skateboarding</div>
                    </div></a>
                   <a href="<?php (url);?>/inspire/shows-freestyle-moto-x"> <div class="shows-cta-btn no-margin">
                      <img src="<?php bloginfo(template_url);?>/images/image_fmx.jpg" alt="">
                      <div class="shows-title">Freestyle MotoX</div>
                    </div></a>
                    <a href="<?php (url);?>/inspire/shows-moto-trials"><div class="shows-cta-btn">
                      <img src="<?php bloginfo(template_url);?>/images/image_moto_trails.jpg" alt="">
                      <div class="shows-title">Moto Trials</div>
                    </div></a>
                    <a href="<?php (url);?>/inspire/shows-free-running"><div class="shows-cta-btn">
                      <img src="<?php bloginfo(template_url);?>/images/trials-pic-2.jpg" alt="">
                      <div class="shows-title">Free Running</div>
                    </div></a>
                    <a href="<?php (url);?>/inspire/shows-freestyle-basketball/"><div class="shows-cta-btn no-margin">
                      <img src="<?php bloginfo(template_url);?>/images/basketball_pic1.jpg" alt="">
                      <div class="shows-title">Freestyle Basketball</div>
                    </div></a>

                




                    
             <div class="clear"></div>
        </div>          
    </div>
<div class="clear"></div>
</div>
<!-- End Page Content -->

</div>
<div class="clear"></div>
<?php get_footer(); ?>