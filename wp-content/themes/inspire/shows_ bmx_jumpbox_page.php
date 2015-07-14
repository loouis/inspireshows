<?php
/*
Template Name: Shows - bmx jumpbox page
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

                    <h2>// BMX Jump box</h2>
                    <div class="m-bottom one_half">
                      This consists of  a jump box ramp that will launch our wold class professional riders in to the air, to  perform breathtaking stunts that have to be seen to be believed. They hit the box at great speeds to perform the very best moves including Backflips ,Frontflips, No handers, 360′s , 720′s, Tailwhips and supermans plus many more… 

                      </p>A huge spectacle for any occasion!

                      </p>This show includes 2/3 Pro BMXers, Compere & PA  performing up to 4 times a day, with each show lasting up to 30 minutes. 

                      </p>We have 3 different jump boxes': Our biggest is the mobile van and trailer that unfolds within 30 minutes to make a huge jump box & quarter pipe set up ideal for any arena show!
Our other 2 jump box set ups consist of a slightly scaled version of the jump box that is broken down in to multiple parts. This just makes it a little more portable and a bit easier for events that don't have quite as much space available.

                      </p>You will be guarantee to see a backflip at every show though!
                    </div>
                    
                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://www.youtube.com/watch?v=lWFFbCRAUgM">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/bmx_video_placeholder.jpg" alt="">
                        </div>
                      </a>
                    </div>


                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>



                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/nothing_bmx_jump_box.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/bmx_flip_jump_box.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/jump_box_image_4.jpg" alt="" />
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