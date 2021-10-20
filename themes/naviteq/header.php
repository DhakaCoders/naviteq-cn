<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#13a89e">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
<link rel="shortcut icon" href="<?php echo $favicon; ?>" />
<?php } ?>
<link rel="preconnect" href="https://fonts.gstatic.com">

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $telephone = get_field('telephone', 'options');
  $email = get_field('email', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';

  $logoObj = get_field('hdlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
?> 
<div class="page-body-cntlr">
<div class="bdoverlay"></div>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header-inr clearfix">
          <div class="hdr-lft">
          <?php if( !empty($logo_tag) ): ?>
          <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php echo $logo_tag; ?>
            </a>
          </div>
          <?php endif; ?>
          </div>
          <div class="hdr-rgt">
            <div class="xs-hdr show-sm">
              <div class="hamburger-cntlr show-sm">
                <strong><?php _e('menu', 'naviteq'); ?></strong>
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="xs-contact-menu">
                <ul class="reset-list">
                  <?php if( !empty($telephone) ): ?>
                  <li><a href="tel:<?php echo phone_preg($telephone); ?>"><img src="<?php echo THEME_URI; ?>/assets/images/xs-tel-icon.png"></a></li>
                  <?php 
                    endif;
                    if( !empty($gmaplink) ): ?>
                  <li><a href="<?php echo $gmaplink; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/xs-map-icon.png"></a></li>
                  <?php 
                    endif;
                    if( !empty($email) ): ?>
                  <li><a href="mailto:<?php echo $email; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/xs-mail-icon.png"></a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="hdr-topbar">
              <div class="hdr-details-cntlr hide-sm">
                <div class="hdr-details ">
                  <?php if( !empty($email) ): ?>
                  <div class="hdr-mail hdr-details-col">
                    <strong><?php _e('E-mail', 'naviteq'); ?></strong>
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                  </div>
                  <?php 
                  endif;
                  if( !empty($telephone) ): ?>
                  <div class="hdr-tel hdr-details-col">
                    <strong><?php _e('Tel.', 'naviteq'); ?></strong>
                    <a href="tel:<?php echo phone_preg($telephone); ?>"><?php echo $telephone; ?></a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="hdr-menu hide-sm">
              <nav class="main-nav">
              <?php 
                $menuOptions = array( 
                    'theme_location' => 'cbv_main_menu', 
                    'menu_class' => 'clearfix reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $menuOptions ); 
              ?>
              </nav>
            </div>
          </div>
          <div class="xs-mobile-menu">
            <div class="xs-menu show-sm">
              <nav class="main-nav">
                  <?php 
                    $menuOptions = array( 
                        'theme_location' => 'cbv_mobile_menu', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $menuOptions ); 
                  ?>
              </nav>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</header>