<?php
/*
Template Name: Shows - combined
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

                    <h2>// Combined shows</h2>
                    <div class="m-bottom one_half">
                    Each of the individual shows we provide make for an amazing display on there own, but many of the styles complienmet each other really well and can be combined to make a very special show! 

</p>It often isn't that much more costly to combine another style of show either, 
as the compare and PA will already be in place. Its not like you are paying for two completely different set ups. We will just be putting a package together of performers that work together really well to make one amazing show.

</p>All you have to do is let us know what type of show you think  would work well at your event,
then we will tailor a show package within budget specifically for you!
                    </div>

                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://www.youtube.com/watch?v=U8-ESiUkOZk">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/combined_video_placeholder.jpg" alt="">
                        </div>
                      </a>
                    </div>
                    
                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>



                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/combined_pic2.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/combined_pic1.jpg" alt="" />
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