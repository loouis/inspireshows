<?php
/*
Template Name: Shows - freestyle moto x
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

                    <h2>// Freestyle motoX</h2>
                    <div class="m-bottom one_half">
                    Perfect arena of stadium entertainment. Our purpose built lorry seperates to make a take off and landing where you will witness the very best motorbike riders launching in to the air and performing unbelievable airborne moves from massive stretched superman moves to the ellusive backflip!</p>With a compare and PA the Riders perform up to four 20 minute shows throughout the day.
A huge spectacle and a great addition to any festival or county show.
                    </div>

                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://vimeo.com/68889213 ">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/motox_video_placeholder.jpg" alt="">
                        </div>
                      </a>
                    </div>
                    
                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>

                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                           <img src="<?php bloginfo(template_url);?>/images/motox_pic_1.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/fmx_moto_img_2.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/fmx_moto_img_5.jpg" alt="" />
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