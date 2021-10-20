  <?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $address = get_field('address', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $telephone = get_field('telephone', 'options');
  $email = get_field('email', 'options');
  $copyright_text = get_field('copyright_text', 'options');
?>
  <footer class="footer-wrp">
    <div class="ftr-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-top-inr">
              <?php if( !empty($logo_tag) ): ?>
              <div class="ftr-log show-sm">
                <?php echo $logo_tag; ?>
              </div>
              <?php if( !empty($address) )  printf('<div class="ftr-col ftr-adrs"><a href="%s">%s</a></div>',$gmaplink, $address );?>
              <?php endif; ?>
              <div class="ftr-col ftr-contact-menu">
                <?php 
                  if( !empty($email) ) printf('<a href="mailto:%s">%s</a>',$email, $email ); 
                  if( !empty($telephone) ) printf('<a href="tel:%s">%s</a>',phone_preg($telephone), $telephone ); 
                ?>
              </div>
              <div class="ftr-col ftr-menu">
                <?php 
                  $fmenuOptions1 = array( 
                      'theme_location' => 'cbv_footer_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $fmenuOptions1 );
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="ftr-btm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ftr-btm-inr">
              <div class="ftr-copyright">
                <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?> 
              </div>
              <div class="ftr-btm-menu hide-sm">
                <?php 
                  $copymenuOptions = array( 
                      'theme_location' => 'cbv_copyright_menu', 
                      'menu_class' => 'reset-list',
                      'container' => '',
                      'container_class' => ''
                    );
                  wp_nav_menu( $copymenuOptions ); 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="btm-angle">
    <div class="btm-angle-inr">
      <img src="<?php echo THEME_URI; ?>/assets/images/btm-angle.png">
    </div>
  </div>

</div>
<?php wp_footer(); ?>
</body>
</html>