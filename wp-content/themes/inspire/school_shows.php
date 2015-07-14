<?php
/*
Template Name: School Shows
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

                    <h2>// School Shows</h2>
                    <div class="m-bottom one_half">
                      Schools with the aid of our unique school shows we can easily cater specifically for children of all ages. Our shows provide children with something they can remember and also learn from. With a unique format of visually appealing tricks combined with inspirational talking on cycling safety, bicycle maintenance, being active and the importance of practice we can easily grab every child’s attention. We make sure that everything we do and talk about can relate to the children’s own interests whether it may be a creative or musical hobby, sport or even academia we help prove that perseverance and dedication is the key to success.

</p>As well as being CRB checked our top professional riders are all great speakers and positive role models each with their own cool image that kids love. By first impressing the children first with fast spins and intense tricks makes it easier for us to connect with them on a more serious level and help discuss important issues such as bullying, obesity and crime. We feel that we can help educate them in a way that can’t always be achieved in the classroom.

</p>At the end of each show our riders always take time for Q&amp;A and help enlighten the children on anything they would like to know or are unsure about.
                    </div>
                    
                    <div class="one_half column-last">
                      <a class="fancybox-media" href="http://www.youtube.com/watch?v=s57i7-hik7M">
                        <div class="package_video_btn">
                          <div class="play_video_btn">
                            <img src="<?php bloginfo(template_url);?>/images/new_play_btn.png" alt="">
                          </div>
                          <img src="<?php bloginfo(template_url);?>/images/school_trials_video_placeholder.jpg" alt="">
                        </div>
                      </a>

                      <div class="school-quote">
                      "The Children got soo much out of this display. The messages where very inspiring. It really gave us something we can build on with the children. Just simply amazing, every school should get to see this."</div>
                      <div class="person-quote">Mrs Irons - Cranbrook Primary School</div>

                    </div>


                     <div class="cta">
                          <div class="cta-btn"><p>Pictures</p></div>
                      </div>

                    <div class="shows-media-section">

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/school_shows_pic_1.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn">
                        <img src="<?php bloginfo(template_url);?>/images/school_pic_3.jpg" alt="" />
                      </div>

                      <div class="shows-cta-btn no-margin">
                        <img src="<?php bloginfo(template_url);?>/images/school_shows_pic_3.jpg" alt="" />
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