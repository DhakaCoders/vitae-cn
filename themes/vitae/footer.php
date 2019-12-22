<?php 
$copyright_text = get_field('copyright_text', 'options');
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
              <?php endif; ?>
              <div class="ftr-socail-btn hide-sm">
                <span href="#">VITAE.COM</span>
              </div>
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
             <a href="#">webdesign by conversal</a>
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</footer><!-- end of footer -->

<div class="xs-popup-main-menu-wrap clearfix">
  
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