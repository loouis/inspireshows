<?php
/*
Template Name: Shows - bmx flatland page
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

                    <h2>// BMX Flatland</h2>
                    <div class="m-bottom one_half">
                    BMX Flatland is the ultimate form of bike control and often likened to breakdancing on a bike,
It's regarded as more of an artform than other styles of BMX, with an emphasis on creativity, style and originality.</p>The riders perform an array of tricks that involve maneuvering the bike in to crazy positions, and doing incredibly fast spinning combinations with out any hands on the bike, that will leave you shocked as to how they manage to stay in control!</p>This show includes world class professional riders, commentator & PA, doing up to four 30 min displays at an event or visiting multiple school in one day to do assembly displays.</p>A standard Flatland shows doesn't require any set other than flat level area, this versatility  makes it perfect for almost any occasion. Particularly suited for dance floors/halls, school playgrounds and shopping centres.</p>We also have a portable stage for grass displays that stands two feet off the ground, so you can have the tricks elevated at eye level for festivals and arena shows.

                    </div>


                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://www.youtube.com/watch?v=hIlVEbaG_3c">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/flatland_video_image.jpg" alt="">
                        </div>
                      </a>
                    </div>



                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>



                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/bmx_flatland_1.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/bmx_flatland_2.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/bmx_flatland_3.jpg" alt="" />
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