<?php 
$copyright_text = get_field('copyright_text', 'options');
$ftknop = get_field('knop', 'options');
$smedias = get_field('sociale_media', 'options');
$logoObj = get_field('logo_header', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}
?>
<footer class="footer-wrp">
  <div class="footer-top">
    <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-col-innr clearfix">
          <div class="ftr-logo-item">
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
          </div>
          <div class="ftr-col-dsc ftr-menu-item">
            <?php 
              $tmenuOptions = array( 
                  'theme_location' => 'cbv_ft_menu', 
                  'menu_class' => 'clearfix ulc ftr-main-menu',
                  'container' => 'ftmnav',
                  'container_class' => 'ftmainnav'
                );
              wp_nav_menu( $tmenuOptions ); 

              $menuOptions = array( 
                  'theme_location' => 'cbv_main_menu', 
                  'menu_class' => 'clearfix ulc',
                  'container' => 'mnav',
                  'container_class' => 'mainnav'
                );
              wp_nav_menu( $menuOptions ); 
            ?>
          </div>
          <div class="ftr-col-dsc ftr-socail-item clearfix">
            <div class="ftr-socail-icon">
              <?php if($smedias): ?>
              <ul>
                <?php foreach($smedias as $smedia): ?>
                <li><a target="_blank" href="<?php echo $smedia['url']; ?>">
                 <?php echo $smedia['icon']; ?>
                </a></li>
              <?php endforeach; ?>
              </ul>
              <?php endif; 
              if( is_array( $ftknop ) &&  !empty( $ftknop['url'] ) ){
                printf('<div class="ftr-socail-btn hide-sm"><a href="%s" target="%s">%s</a></div>', $ftknop['url'], $ftknop['target'], $ftknop['title']); 
              }
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end of ftr-top --> 
  </div><!-- footer-top -->
  <div class="ftr-btm">
    <div class="container">
     <div class="row">
       <div class="col-sm-12">
         <div class="ftr-btm-innr clearfix">
          <div class="ftr-btm-copy-right">
            <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
          </div>
           <div class="ftr-btm-menu">
             <?php 
                $cmenuOptions = array( 
                    'theme_location' => 'cbv_ftb_menu', 
                    'menu_class' => 'clearfix ulc',
                    'container' => 'cnav',
                    'container_class' => 'cnav'
                  );
                wp_nav_menu( $cmenuOptions ); 
              ?>
           </div>
           <div class="ftr-btm-rgt">
             <a target="_blank" href="https://www.conversal.be/">webdesign by conversal</a>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</footer><!-- end of footer -->

<div class="xs-popup-main-menu-wrap clearfix">
<div class="menuSvg">
  <svg width="375" height="667" preserveAspectRatio="none" viewBox="0 0 375 667" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M79.618 535.545C66.103 482.939 33.4064 434.432 38.2896 380.053C43.1073 326.403 84.7608 284.08 106.659 234.414C129.979 181.522 136.326 122.056 172.21 76.3182C212.149 25.4114 262.817 -19.5232 323.738 -42.2776C387.438 -66.0701 471.276 -95.8164 524.14 -55.1311C586.312 -7.28231 546.77 102.98 593.67 165.468C625.726 208.179 712.804 184.911 739.132 231.317C764.775 276.514 714.03 332.938 718.156 384.88C722.885 444.424 771.028 495.532 764.855 555.148C758.156 619.834 739.04 696.765 682.321 730.919C623.931 766.08 548.562 714.884 481.391 725.838C418.692 736.063 368.389 793.219 305.045 792.445C239.495 791.645 168.478 769.895 126.009 721.497C83.2919 672.816 95.7148 598.201 79.618 535.545Z" fill="url(#menuSvg)"/>
  <defs>
  <linearGradient id="menuSvg" x1="750.19" y1="1170.15" x2="1201.45" y2="122.346" gradientUnits="userSpaceOnUse">
  <stop stop-color="#59C45D"/>
  <stop offset="1" stop-color="#3C8B3D"/>
  </linearGradient>
  </defs>
  </svg>
</div>  
  <div class="clearfix xs-popup-main-menu-con">
    <div>
      <nav class="main-nav clearfix">
      <?php 
        $tmenuOptions = array( 
            'theme_location' => 'cbv_top_menu', 
            'menu_class' => 'clearfix ulc',
            'container' => 'tmnav',
            'container_class' => 'tmainnav'
          );
        wp_nav_menu( $tmenuOptions ); 
      ?>
      </nav>
      <div class="hdr-btm-menu">
        <?php 
          $menuOptions = array( 
              'theme_location' => 'cbv_main_menu', 
              'menu_class' => 'clearfix ulc',
              'container' => 'mnav',
              'container_class' => 'mainnav'
            );
          wp_nav_menu( $menuOptions ); 
        ?>
      </div>
    </div>
  </div>
  <div class="xs-menu-popup-close-btn">
    <span><img src="<?php echo THEME_URI; ?>/assets/images/close-btn.png"></span>
  </div>
</div>
<div class="nav-opener show-sm">
  <div class="opener-inner">
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>