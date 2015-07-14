<?php
/*
Template Name: Shows - basketball
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

                    <h2>// Freestyle Basketball</h2>
                    <div class="m-bottom one_half">
                    Basketball freestylers are known for their fluid freestyle skills, dribbling, ball spinning and combination movements. The street sport of basketball freestyle entertainment makes for an amazing shows in its own right but is also great for a number of events as a walker round artist for guerrilla marketing, street & in-store promotions, shopping centre entertainment, festivals, product launches, stage shows, corporate events, school and sport club activation days and more.</p>Basketball freestyle workshops can also be provided alongside any performance or show.
                    </div>

                    <div class="one_half column-last">
                     <!--  <a class="fancybox-media" href="http://vimeo.com/68889213"> -->
                        <div class="package_video_btn">
                          <!-- <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div> -->
                          <img src="<?php bloginfo(template_url);?>/images/basketball_pic2.jpg" alt="">
                        </div>
                     <!--  </a> -->
                    </div>
                    
                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>



                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/basketball_pic1.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/basketball_pic3.jpg" alt="" />
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