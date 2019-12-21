<?php
/*
  Template Name: About Token
*/
get_header('page'); 
$thisID = get_the_ID();
?>
<section class="about-drk-sec-wrp">
  <div class="container">
    <?php 
      $intro = get_field('intro', $thisID);

      if($intro):
        $introlinks = $intro['links'];
        $introsrc = '';
        if(!empty($intro['afbeelding'])) $introsrc = $intro['afbeelding'];
    ?>
      <div class="row">
        <div class="col-lg-6 col-md-12 order-2">
          <div class="about-drk-img">
            <img src="<?php echo $introsrc; ?>" alt="intro">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 order-1">
          <div class="about-drk-des">
            <?php 
            if( !empty( $introlinks['subtitel'] ) ) printf( '<span>%s</span>', $introlinks['subtitel']);  
            if( !empty( $introlinks['titel'] ) ) printf( '<h1>%s</h1>', $introlinks['titel']);  
            if( !empty( $introlinks['beschrijving'] ) ) echo wpautop( $introlinks['beschrijving']);
          ?>
          </div>
        </div>
      </div>
      <div class="gap-45"></div>
      <?php endif; 
      $ocommunity = get_field('utility', $thisID);
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
      <div class="row">
        <div class="col-lg-6 col-md-12 order-1">
          <div class="our-community-vdo ad-utility-img">
            <span class="about-circale"><img src="<?php echo THEME_URI; ?>/assets/images/about-circale.png"></span>
            <div class="video-play">
              <?php echo $vposertag; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 order-2">
          <div class="about-dark-utility-dsc">
          <?php 
            if( !empty( $comlinks['titel'] ) ) printf( '<h2>%s</h2>', $comlinks['titel']);  
            if( !empty( $comlinks['subtitel'] ) ) printf( '<span>%s</span>', $comlinks['subtitel']);  
            if( !empty( $comlinks['beschrijving'] ) ) echo wpautop($comlinks['beschrijving']);
            $knops = $comlinks['knops'];
            if($knops):
          ?>
          <div class="vt-about-the-token-btns clearfix">
            <?php 
            foreach ($knops as $key => $knopr) {
              $knop_row = $knopr['knop'];
              if( is_array( $knop_row ) &&  !empty( $knop_row['url'] ) ){
                printf(' <div class="vt-about-the-token-btn"><a href="%s" target="%s"><span>%s</span></a></div>', $knop_row['url'], $knop_row['target'], $knop_row['title']); 
              }
            }
            ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
  </div>    
</section>


<section class="about-dark-service-sec-wrp">
  <div class="container">
  <?php
    $features = get_field('features', $thisID);
    if($features):
  ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="about-dark-service-wrp">
          <ul class="clearfix" id="AboutSerSlider">
            <?php 
            foreach ($features as $key => $feature) { 
              $ficon = '';
              if($feature['icon']) $ficon = $feature['icon'];
            ?>
            <li>
              <div class="about-dark-service-dsc">
                <i><img src="<?php echo $ficon; ?>" alt="feature icon"></i>
                <?php 
                  if( !empty( $feature['titel'] ) ) printf( '<h6>%s</h6>', $feature['titel']);  
                  if( !empty( $feature['tekst'] ) ) echo wpautop($feature['tekst']);
                ?>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="row">
      <div class="col-lg-5 col-md-12 order-2">
        <?php 
          $statistics = get_field('statistics', $thisID);
          if($statistics):
        ?>
        <div class="about-dark-ser-btm-wrp clearfix">
          <div class="about-dark-ser-btm-dsc">
          <?php 
            if( !empty( $statistics['titel'] ) ) printf( '<h2>%s</h2>', $statistics['titel']);  
            if( !empty( $statistics['subtitel'] ) ) printf( '<span>%s</span>', $statistics['subtitel']);  
            if( !empty( $statistics['beschrijving'] ) ) echo wpautop($statistics['beschrijving']);
            $knop_1 = $statistics['knop_1'];
            $knop_2 = $statistics['knop_2'];
          ?>
            <div class="about-dark-ser-btn">
              <?php 
                if( is_array( $knop_1 ) &&  !empty( $knop_1['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop_1['url'], $knop_1['target'], $knop_1['title']); 
                }
                if( is_array( $knop_2 ) &&  !empty( $knop_2['url'] ) ){
                  printf('<a href="%s" target="%s">%s</a>', $knop_2['url'], $knop_2['target'], $knop_2['title']); 
                }
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-lg-7 col-md-12 order-1">
        <div class="about-dark-ser-box-wrp">
          <div class="about-ser-box-tp">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="simply"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-01.svg"></i>
              <h4>1000000</h4>
              <p>Pre Mine</p>
            </div>
          </div>
          <div class="about-ser-box-lft">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="dummy"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-02.svg"></i>
              <h4>100000000</h4>
              <p>Maximum Supply</p>
            </div>
          </div>
          <div class="about-ser-box-middle">
            <img src="<?php echo THEME_URI; ?>/assets/images/roundlogo-middel-icon.png">
          </div>
          <div class="about-ser-box-rgt">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="Lorem"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-03.svg"></i>
              <h4>800000</h4>
              <p>Super Node Burn</p>
            </div>
          </div>
          <div class="about-ser-box-btm">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="Ipsum"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-04.svg"></i>
              <h4>200000</h4>
              <p>Remaining Pre Mine</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
  $columns = get_field('columns', $thisID);
  $col1 = $columns['column_1'];
  $col2 = $columns['column_2'];
?>
<section class="about-drk-ipsum-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about-drk-ipsum-wrp">
          <ul class="clearfix ulc">
            <li>
              <div class="about-drk-ipsum-dsc">
              <?php 
                if( !empty( $col1['titel'] ) ) printf( '<h2>%s</h2>', $col1['titel']);  
                if( !empty( $col1['subtitel'] ) ) printf( '<span>%s</span>', $col1['subtitel']);  
                if( !empty( $col1['beschrijving'] ) ) echo wpautop($col1['beschrijving']);
              ?>
              </div>
            </li>
            <li>
              <div class="about-drk-ipsum-dsc">
                <?php 
                if( !empty( $col2['titel'] ) ) printf( '<h2>%s</h2>', $col2['titel']);  
                if( !empty( $col2['subtitel'] ) ) printf( '<span>%s</span>', $col2['subtitel']);  
                if( !empty( $col2['beschrijving'] ) ) echo wpautop($col2['beschrijving']);
              ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php
    $intro2 = get_field('intro_2', $thisID);
    if($intro2):
      $introlinks = $intro2['links'];
      $intro2src = '';
      if(!empty($intro2['afbeelding'])) $intro2src = $intro2['afbeelding'];

    ?>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="about-drk-ipsum-btm-img">
          <img src="<?php echo $introsrc; ?>" alt="intro2">
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-drk-ipsum-btm-dsc">
          <?php 
            if( !empty( $intro2['titel'] ) ) printf( '<h2>%s</h2>', $intro2['titel']);  
            if( !empty( $intro2['subtitel'] ) ) printf( '<span>%s</span>', $intro2['subtitel']);  
            if( !empty( $intro2['beschrijving'] ) ) echo wpautop($intro2['beschrijving']);
          ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>