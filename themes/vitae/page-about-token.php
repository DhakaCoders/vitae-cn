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
    ?>
      <div class="row">
        <div class="col-lg-6 col-md-12 order-2">
          <div class="about-drk-img">
            <?php if(!empty($intro['afbeelding'])){ ?>
              <img src="<?php echo $intro['afbeelding']; ?>" alt="<?php echo cbv_get_image_alt( $intro['afbeelding'] ); ?>">
            <?php } ?>
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
            $cpostertag = cbv_get_image_tag($comvideo['poster'], 'vdimg');
        }
        if(!empty($vurl)){
          $vposertag = '<a data-fancybox href="'.$vurl.'">
            <i><img src="'.THEME_URI.'/assets/images/play-btn-icon-white.svg" alt="play icon"></i>
            '.$cpostertag.'
          </a>';
        }else{
          $vposertag = $cpostertag;
        }
    ?>
      <div class="row">
        <div class="col-lg-6 col-md-12 order-1">
          <div class="our-community-vdo ad-utility-img">
            <span class="about-circale"><img src="<?php echo THEME_URI; ?>/assets/images/about-circale.png" alt="about circale"></span>
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
          <ul class="clearfix">
            <?php 
            foreach ($knops as $key => $knopr) {
              $knop_row = $knopr['knop'];
              if( is_array( $knop_row ) &&  !empty( $knop_row['url'] ) ){
                printf(' <li><a href="%s" target="%s">%s</a></li>', $knop_row['url'], $knop_row['target'], $knop_row['title']); 
              }
            }
            ?>
            </ul>
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
            ?>
            <li>
              <div class="about-dark-service-dsc">
                <?php if($feature['icon']): ?>
                <i><img src="<?php echo $feature['icon']; ?>" alt="<?php echo cbv_get_image_alt( $feature['icon'] ); ?>"></i>
                <?php 
                  endif;
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
        <?php 
          if(function_exists('APIdata')):
          $vitae = APIdata();
         //var_dump($vitae);
          $preMine = $maxSupply = $superNodeBurn = $remainingPreMine = 0;
          if(!empty($vitae->total_supply)) $preMine = (int)$vitae->total_supply;
          if(!empty($vitae->max_supply)) $maxSupply = (int)$vitae->max_supply;
          if(!empty($vitae->circulating_supply)) $superNodeBurn = (int)$vitae->circulating_supply;
          if($preMine > 0){
            $remainingPreMine = $preMine - $superNodeBurn;
          }
        ?>
        <div class="about-dark-ser-box-wrp">
            <?php 
            $vitaetoken = get_field('about_the_token', HOMEID);
            $lefts = $vitaetoken['lefts'];
            $maximum_supply_titel = $lefts['maximum_supply_titel'];
            $maximum_supply_tooltip = $lefts['maximum_supply_tooltip'];
            $pre_mine_titel = $lefts['pre_mine_titel'];
            $pre_mine_tooltip = $lefts['pre_mine_tooltip'];
            $super_node_titel = $lefts['super_node_titel'];
            $super_node_tooltip = $lefts['super_node_tooltip'];
            $remaining_pre_mine_titel = $lefts['remaining_pre_mine_titel'];
            $remaining_pre_mine_tooltip = $lefts['remaining_pre_mine_tooltip'];
            ?>
          <div class="about-ser-box-tp">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="<?php echo $pre_mine_tooltip; ?>"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-01.svg" alt="Pre mine"></i>
              <?php printf('<h4>%s</h4>', $preMine); ?>
              <p><?php echo $pre_mine_titel; ?></p>
            </div>
          </div>
          <div class="about-ser-box-lft">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="<?php echo $maximum_supply_tooltip; ?>"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-02.svg" alt="Maximum supply"></i>
              <?php printf('<h4>%s</h4>', $maxSupply); ?>
              <p><?php echo $maximum_supply_titel; ?></p>
            </div>
          </div>
          <div class="about-ser-box-middle">
            <img src="<?php echo THEME_URI; ?>/assets/images/roundlogo-middel-icon.png" alt="Round logo">
          </div>
          <div class="about-ser-box-rgt">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="<?php echo $super_node_tooltip; ?>"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-03.svg" alt="Super node"></i>
              <?php printf('<h4>%s</h4>', $superNodeBurn); ?>
              <p><?php echo $super_node_titel; ?></p>
            </div>
          </div>
          <div class="about-ser-box-btm">
            <div class="about-ser-box-dsc">
              <span data-toggle="tooltip" data-placement="top" title="<?php echo $remaining_pre_mine_tooltip; ?>"></span>
              <i><img src="<?php echo THEME_URI; ?>/assets/images/statistics-black-icon-04.svg" alt="Remaining pre mine"></i>
              <?php printf('<h4>%s</h4>', $remainingPreMine); ?>
              <p><?php echo $remaining_pre_mine_titel; ?></p>
            </div>
          </div>
        </div>
        <?php endif; ?>
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
      $intro2links = $intro2['links'];
    ?>
    <div class="row">
      <div class="col-lg-6 col-md-12">
        <div class="about-drk-ipsum-btm-img">
          <?php if(!empty($intro2['afbeelding'])){ ?>
            <img src="<?php echo $intro2['afbeelding']; ?>" alt="<?php echo cbv_get_image_alt( $intro2['afbeelding'] ); ?>">
          <?php } ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-drk-ipsum-btm-dsc">
          <?php 
            if( !empty( $intro2links['titel'] ) ) printf( '<h2>%s</h2>', $intro2links['titel']);  
            if( !empty( $intro2links['subtitel'] ) ) printf( '<span>%s</span>', $intro2links['subtitel']);  
            if( !empty( $intro2links['beschrijving'] ) ) echo wpautop($intro2links['beschrijving']);
          ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>