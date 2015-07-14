<?php
/*
Template Name: page - Marketing
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

                    <h2>// Product Marketing</h2>
                    <div class="m-bottom one_half">
                    Inspire promotions consists of a world class team of highly skilled professional stunt cyclists that perform a unique display of tricks which will amaze and inspire all who watch. Demonstrations and shows can be tailored to your needs for any kind of event or marketing venture.</p>We can market your brand through various mediums such as branded clothing, banners, stickers, flyers and handouts, posters, videos, websites, give aways, competitions, broadcasting, vocally endorsed and themed nights, all to meet your requirements. We will become an effective marketing tool for your company or brand.</p>We have set up and constructed nation wide tours in many countries, selecting areas in which to target your key demographic market e.g. Universities, Town Centers, Trade shows & schools.</p>We do everything from liaising with the venues directly to selecting the best display areas with the maximum foot fall and exposure. We charter out all the logistics and timetables so you really dont have to worry about a thing
                    </div>

                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://www.youtube.com/watch?v=U8-ESiUkOZk">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/relentless.png" alt="">
                        </div>
                      </a>
                    </div>
                    
                    <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>

                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/marketing_pic_1.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/marketing_pic_2.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/marketing_pic_3.jpg" alt="" />
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