<?php
/*
  Template Name: SocialMedia Platform
*/
get_header('page'); 
$thisID = get_the_ID();
?>
<section class="lm-social-platform-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="lm-social-platform-innr text-center">
          <?php 
            $intro = get_field('intro', $thisID);
            if($intro):
          ?>
          <div class="lm-social-platform-head">
           <?php 
            if( !empty( $intro['subtitel'] ) ) printf( '<span>%s</span>', $intro['subtitel']);  
            if( !empty( $intro['title'] ) ) printf( '<h1>%s</h1>', $intro['title']);  
            if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']);
          ?>
          </div>
        <?php endif;
          $tab_1 = get_field('tab_1', $thisID);
          $titel1 = $tab_1['titel'];
          $features1 = $tab_1['features'];
         ?>
          <div class="lm-social-platform-block-tab tab-content">
            <?php if($features1): ?>
            <div class="lm-social-platform-block tab-pane active" id="lm-social-customers">
              <div class="lmSocialSilder-1-arrows show-sm">
                <span class="slide-prev-btn"></span>
                <span class="slide-next-btn"></span>
              </div>
              <div class="clearfix lmSocialSilder-1 xs-pagi-ctrl">
                <?php foreach ($features1 as $key => $tab1) { ?>
                <div class="lmSocialSilder-item">
                  <div class="matchHeightCol">
                    <i>
                      <img src="<?php echo $tab1['icon']; ?>" alt="">
                    </i>                
                    <?php if( !empty( $tab1['tekst'] ) ) echo wpautop($tab1['tekst']); ?>
                  </div>
                </div>
                 <?php } ?>
              </div>            
            </div>
            <?php endif;
              $tab_2 = get_field('tab_2', $thisID);
              $titel2 = $tab_2['titel'];
              $features2 = $tab_2['features'];
              if($features2):  
            ?>
            <div class="lm-social-platform-block tab-pane " id="lm-social-business">
              <div class="lmSocialSilder-2-arrows show-sm">
                <span class="slide-prev-btn"></span>
                <span class="slide-next-btn"></span>
              </div>
              <div class="clearfix lmSocialSilder-2 xs-pagi-ctrl">
                 <?php foreach ($features2 as $key => $tab2) { ?>
                <div class="lmSocialSilder-item">
                  <div class="matchHeightCol">
                    <i>
                      <img src="<?php echo $tab2['icon']; ?>" alt="">
                    </i>                
                    <?php if( !empty( $tab2['tekst'] ) ) echo wpautop($tab2['tekst']); ?>
                  </div>
                </div>
                 <?php } ?>
              </div>            
            </div>
          <?php endif; ?>
          </div>
          <div class="lm-social-platform-tab-trg">
            <ul class="ulc clearfix nav">
              <li class="active">
                <?php if( !empty( $titel1 ) ) printf( '<a data-toggle="tab" href="#lm-social-customers">%s</a>', $titel1);  ?>
              </li>
              <li>
                <?php if( !empty( $titel2 ) ) printf( '<a data-toggle="tab" href="#lm-social-business">%s</a>', $titel2);  ?>
              </li>
            </ul>
          </div>
          <div class="lm-social-platform-map-con">
            <div class="lm-social-platform-map-hdr">
<div id="continents-data" class="WW">
  <strong class="worldwide">900.000 Users <span>Worldwide</span></strong>
  <strong class="EU">200.000 Users <span>in Europe</span></strong>
  <strong class="AF">100.000 Users <span>in Africa</span></strong>
  <strong class="NA">125.000 Users <span>in North America</span></strong>
  <strong class="OC">175.000 Users <span>in Oceania</span></strong>
  <strong class="AS">250.000 Users <span>in Asia</span></strong>
  <strong class="SA">150.000 Users <span>in South America</span></strong>
</div>
            </div>
            <div class="lm-social-platform-map">
  <div id="jmaps"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 
    $comnty = get_field('community', $thisID);
    if($comnty):
    $clinks = $comnty['links'];
    $cmpostersrc = '';
    if(!empty($comnty['afbeelding'])){
      $cmpostersrc = cbv_get_image_src($comnty['afbeelding'], 'lmimg1');
    }
    $knop = $clinks['knop'];
    $cmurl = '#';
    if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
      $cmurl = $knop['url'];
    }
?>
<section class="lm-mauris-aliquam-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="lm-mauris-aliquam-innr">
          <div class="lm-mauris-aliquam-img">
            <?php if(!empty($comnty['afbeelding'])){ ?>
            <a>
              <img src="<?php echo $cmpostersrc; ?>" alt="Grid image 1">
            </a>
            <?php } ?>
          </div>
          <div class="lm-mauris-aliquam-des">
            <?php 
              if( !empty( $clinks['titel'] ) ) printf( '<h2>%s</h2>', $clinks['titel']);  
              if( !empty( $clinks['beschrijving'] ) ) echo wpautop($clinks['beschrijving']);
              if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                printf(' <div class="lm-mauris-aliquam-lnc"><a class="fl-fade-effect" href="%s" target="%s"><span>%s</span></a></div>', $knop['url'], $knop['target'], $knop['title']); 
              }
            ?>
          </div>        
        </div>  
      </div>
    </div>
  </div>    
</section>
<?php endif; 
$features = get_field('features', $thisID);
$fears = $features['features'];
?>
<section class="lm-community-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="lm-community-innr clearfix">
          <div class="lm-community-head text-center">
            <?php 
              if( !empty( $features['title'] ) ) printf( '<h3>%s</h3>', $features['title']);  
              if( !empty( $features['beschrijving'] ) ) echo wpautop($features['beschrijving']);
            ?>
          </div>
          <?php if($fears): ?>
          <div class="lm-community-features">
            <div class="lmCommunitySlider-arrows show-sm">
              <span class="slide-prev-btn"></span>
              <span class="slide-next-btn"></span>
            </div>
            <div class="clearfix lmCommunitySlider xs-pagi-ctrl">
              <?php foreach ($fears as $key => $feature) { ?>
              <div class="lmCommunitySlider-item">
                <i>
                  <img src="<?php echo $feature['icon']; ?>" alt="<?php echo $feature['titel']; ?>">
                </i>              
                <?php 
                  if( !empty( $feature['titel'] ) ) printf( '<h6>%s</h6>', $feature['titel']);  
                  if( !empty( $feature['tekst'] ) ) echo wpautop($feature['tekst']);
                ?>
              </div>
              <?php } ?>
            </div>
          </div> 
          <?php endif; ?>           
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 
  $ocommunity = get_field('community_2', $thisID);
  if($ocommunity):
    $comlinks = $ocommunity['links'];
    $comvideo = $ocommunity['video'];
    $vurl = $comvideo['video_url'];
    $cpostertag = '';
    if(!empty($comvideo['poster'])){
        $cpostertag = cbv_get_image_tag($comvideo['poster'], 'hmbbox');
    }
    if(!empty($vurl)){
      $vposertag = '<a data-fancybox href="'.$vurl.'">
        <i><img src="'.THEME_URI.'/assets/images/play-btn-icon-white.svg"></i>
        '.$cpostertag.'
      </a>';
    }else{
      $vposertag = $cpostertag;
    }
?>
<section class="our-community-sec" id="curabitur-efficitur-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 order-lg-1 order-xl-2">
        <div class="our-community-vdo">
          <div class="video-play">
            <?php echo $vposertag; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 order-lg-2 order-xl-1">
        <div class="our-community-des">
          <?php 
            if( !empty( $comlinks['titel'] ) ) printf( '<h2>%s</h2>', $comlinks['titel']);  
            if( !empty( $comlinks['beschrijving'] ) ) echo wpautop($comlinks['beschrijving']);
            $knop3 = $comlinks['knop'];
            if( is_array( $knop3 ) &&  !empty( $knop3['url'] ) ){
              printf('<a href="%s" target="%s">%s</a>', $knop3['url'], $knop3['target'], $knop3['title']); 
            }
          ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; 
  $call_action = get_field('call_to_action', $thisID);
  $promo = get_field('promo', $thisID);
  $testimonials = get_field('testimonials', $thisID);
  $beschrijving = get_field('beschrijving', $thisID);
?>
<section class="lm-homework-des-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="lm-homework-des-innr">
          <div class="lm-homework-des-top-bar">
            <?php 
            if( !empty( $call_action['titel'] ) ) printf( '<h3>%s</h3>', $call_action['titel']);  
            $knop4 = $comlinks['knop'];
            if( is_array( $knop4 ) &&  !empty( $knop4['url'] ) ){
              printf('<a href="%s" target="%s">%s</a>', $knop4['url'], $knop4['target'], $knop4['title']); 
            }
          ?>
          </div>
          <div class="lm-homework-des-hdr clearfix">
            <div class="lm-homework-des-hdr-lft">
            <?php if( !empty( $promo['titel'] ) ) printf( '<h2>%s</h2>', $promo['titel']);  ?>
            </div>
            <div class="lm-homework-des-hdr-rgt">
              <?php if( !empty( $promo['beschrijving'] ) ) echo wpautop($promo['beschrijving']); ?>
            </div>
          </div>

          <div class="lm-homework-des-main-con clearfix">
            <div class="lm-homework-des-bq">
              <i>
                <img src="<?php echo THEME_URI; ?>/assets/images/lm-quote-inc.svg" alt="" />  
              </i>              
              <?php if( !empty( $testimonials['tekst'] ) ) echo wpautop($testimonials['tekst']);
              if( !empty( $testimonials['naam'] ) ) printf( '<span>- %s</span>', $testimonials['naam']); 
              ?>
            </div>
            <div class="lm-homework-des-main">
              <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php 
get_template_part( 'templates/more-about', 'community' );
get_footer(); 
?>