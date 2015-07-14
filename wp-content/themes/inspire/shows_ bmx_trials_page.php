<?php
/*
Template Name: Shows - mtb trials page
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

                    <h2>// MTB trials</h2>
                    <div class="m-bottom one_half">
                    The Mountain bike Trials show uses some of the UK's very best trials riders, an action packed show that incorporates a scaffolding like rig structure consisting of various sized platforms and ladders, the riders demonstrate unbelievable bike control as they hop across huge distances!

                    </p>The rig can be set up quickly and in many different ways over practically any surface. The show includes a compere, PA and can fit in and around your event’s timetable, performing up to 4 times a day with each show lasting up to 30 minutes. 
                    </div>

                     <div class="one_half column-last">
<!--                       <a class="fancybox-media" href="http://www.youtube.com/watch?v=OpLhp92b54g">
 -->                        <div class="package_video_btn">
                          <!-- <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div> -->
                          <img src="<?php bloginfo(template_url);?>/images/mtb_video_placeholder.jpg" alt="">
                        </div>
<!--                       </a>
 -->                    </div>
                    
                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>

                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/trials_pic_4.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/mtb_trials_picker.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/mtb_trials_picker2.jpg" alt="" />
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