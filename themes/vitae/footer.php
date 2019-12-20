<?php 
$copyright_text = get_field('copyright_text', 'options');
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
              <ul>
                <li><a target="_blank" href="#">
                  <svg class="ftr-fb-icon-svg" width="11" height="19" viewBox="0 0 11 19" fill="#66697A">
                    <use xlink:href="#ftr-fb-icon-svg"></use>
                  </svg>
                </a></li>
                <li><a target="_blank" href="#">
                  <svg class="ftr-twiter-icon-svg" width="22" height="16" viewBox="0 0 22 16" fill="#66697A">
                    <use xlink:href="#ftr-twiter-icon-svg"></use>
                  </svg>
                </a></li>
                <li><a target="_blank" href="#">
                  <svg class="ftr-ins-icon-svg" width="20" height="19" viewBox="0 0 20 19" fill="#66697A">
                    <use xlink:href="#ftr-ins-icon-svg"></use>
                  </svg>
                </a></li>
                <li><a target="_blank" href="#">
                  <svg class="ftr-message-icon-svg" width="18" height="20" viewBox="0 0 18 20" fill="#66697A">
                    <use xlink:href="#ftr-message-icon-svg"></use>
                  </svg>
                </a></li>
                <li><a target="_blank" href="#">
                  <svg class="ftr-emoj-icon-svg" width="23" height="18" viewBox="0 0 23 18" fill="#66697A">
                    <use xlink:href="#ftr-emoj-icon-svg"></use>
                  </svg>
                </a></li>
                <li><a target="_blank" href="#">
                  <svg class="ftr-github-icon-svg" width="20" height="19" viewBox="0 0 20 19" fill="#66697A">
                    <use xlink:href="#ftr-github-icon-svg"></use>
                  </svg>
                </a></li>
              </ul>
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
    <span><img src="assets/images/close-btn.png"></span>
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
<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/popper.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/slick.slider/slick.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/particles.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/app.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>