  <?php get_header(); ?>
  <?php  
  $hbanner = get_field('banner', HOMEID);
  if($hbanner):
    $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
    $hasvideo = !empty($hbanner['ogg_video']) || !empty($hbanner['mp4_video'])? true:false;
?>
  <section class="hm-page-bnr-cntlr">
    <div class="hm-page-border"></div>
    <div class="hm-page-bnr-des-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hm-page-bnr-des">

              <div class="hm-page-banner<?php echo $hasvideo?' has-video':''; ?>">
                <div class="pg-bnr-black-bg"></div>
                <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);">
                </div>
                <?php 
                if( $hasvideo ): 
                  $video_urlmp4 = $hbanner['mp4_video'];
                  $video_urlogg = $hbanner['ogg_video'];
                ?>
                <div class="bnr-video">
                  <video id="vdo-lg" autoplay muted>
                    <?php if( !empty($video_urlogg)){ ?>
                    <source src="<?php echo $video_urlogg; ?>" type="video/ogg">
                    <?php } 
                    if( !empty($video_urlmp4)){
                    ?>
                    <source src="<?php echo $video_urlmp4; ?>" type="video/mp4">
                    <?php } ?>
                  </video>
                </div>
                <?php endif; ?>
              </div>

              <div class="hm-page-bnr-des-inr">
                <div>
                  <?php 
                    if( !empty($hbanner['title']) ) printf( '<h1 class="hm-page-bnr-title fl-h1">%s</h1>', $hbanner['title'] ); 
                    if( !empty($hbanner['subtitle']) ) printf( '<h2 class="hm-page-bnr-sub-title fl-h3">%s</h2>', $hbanner['subtitle'] ); 
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php endif; ?>
<?php get_template_part('templates/breadcrumbs'); ?>
  <section class="nq-content-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="nq-text-module">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>