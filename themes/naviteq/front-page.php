  <?php get_header(); ?>
  <?php  
  $hbanner = get_field('banner', HOMEID);
  if($hbanner):
    $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';
?>
  <section class="hm-page-bnr-cntlr">
    <div class="hm-page-border"></div>
    <div class="hm-page-bnr-des-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hm-page-bnr-des">

              <div class="hm-page-banner<?php echo !empty($hbanner['upload_video'])?' has-video':''; ?>">
                <div class="pg-bnr-black-bg"></div>
                <div class="page-banner-bg inline-bg" style="background:url(<?php echo $banner; ?>);">
                </div>
                <?php 
                if( !empty($hbanner['upload_video']) ): 
                  $video_url = $hbanner['upload_video'];
                ?>
                <div class="bnr-video">
                  <video id="vdo-lg" autoplay muted>
                    <?php if($hbanner['video_type'] == 'ogg'){ ?>
                    <source src="<?php echo $video_url; ?>" type="video/ogg">
                    <?php }else{ ?>
                    <source src="<?php echo $video_url; ?>" type="video/mp4">
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