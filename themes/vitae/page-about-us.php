<?php
/*
  Template Name: AboutUs
*/
get_header('page'); 
$thisID = get_the_ID();
?>
<section class="about-us-secvice-sec-wrp">
  <div class="container">
    <div class="row">
      <?php 
        $intro = get_field('intro', $thisID);
        if($intro):
          $introlinks = $intro['links'];
      ?>
      <div class="col-lg-6 col-md-12">
        <div class="about-us-dsc-lft">
          <?php 
            if( !empty( $introlinks['subtitel'] ) ) printf( '<span>%s</span>', $introlinks['subtitel']);  
            if( !empty( $introlinks['title'] ) ) printf( '<h1>%s</h1>', $introlinks['title']);  
            if( !empty( $introlinks['tekst'] ) ) printf( '<h5>%s</h5>', $introlinks['tekst']);  
          ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="about-us-dsc-rgt">
        <?php if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']); ?>
        </div>
      </div>
      <?php endif; 
      $features = get_field('features', $thisID);
      if($features):?>
      <div class="col-sm-12">
        <div class="about-service-wrp clearfix">
          <ul class="clearfix">
            <?php foreach ($features as $key => $feature) { ?>
            <li>
              <div class="about-service-inr mHc">
                <div class="about-service-dsc">
                  <i><img src="<?php echo $feature['icon']; ?>" alt="<?php echo $feature['titel']; ?>"></i>
                  <?php 
                  $knop2 = $feature['knop'];
                  $furl = '#';
                  if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                    $furl = $knop2['url'];
                  }
                    if( !empty( $feature['titel'] ) ) printf( '<h6><a href="%s">%s</a></h6>', $furl, $feature['titel']);  
                    if( !empty( $feature['tekst'] ) ) echo wpautop($feature['tekst']);
                    
                    if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                      printf('<a href="%s" target="%s">%s</a>', $knop2['url'], $knop2['target'], $knop2['title']); 
                    }
                  ?>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php 
$ourteam = get_field('our_team', $thisID);
$galleries = $ourteam['galerij'];
$gfirst = $gsecond = $gthird = $g1title = $g2title = $g3title ='';
if($galleries){
  foreach ($galleries as $key => $gallery) {
    if($key == 0) {
      $gimgID = $gallery['ID'];
      $gfirst = cbv_get_image_src($gimgID, 'augl1');
      $g1title = $gallery['title'];
    }
    if($key == 1){
      $gimgID = $gallery['ID'];
      $gsecond = cbv_get_image_src($gimgID, 'augl2');
      $g2title = $gallery['title'];
    } 
    if($key == 2) {
      $gimgID = $gallery['ID'];
      $gthird = cbv_get_image_src($gimgID, 'augl3');
      $g3title = $gallery['title'];
    }
  }
}
?>

<section class="about-our-team-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about-our-team-wrp clearfix">
          <div class="about-our-team-lft">
            <?php if( !empty( $gfirst ) ){ ?>
            <div class="about-our-team-img-small">
              <img src="<?php echo $gfirst; ?>" alt="<?php echo $g1title; ?>">
            </div>
            <?php }if( !empty( $gsecond ) ){ ?>
            <div class="about-our-team-img">
              <img src="<?php echo $gsecond; ?>" alt="<?php echo $g2title; ?>">
            </div>
            <?php } ?>
          </div>
          <div class="about-our-team-rgt">
            <?php if( !empty( $gthird ) ){ ?>
            <div class="about-our-team-img show-md">
              <img src="<?php echo $gthird; ?>" alt="<?php echo $g3title; ?> device-md">
            </div>
            <?php }
              if($ourteam):
            ?>
            <div class="about-our-team-dsc">
              <?php 
                if( !empty( $ourteam['intro']['titel'] ) ) printf( '<h3>%s</h3>', $ourteam['intro']['titel']);  
                if( !empty( $ourteam['intro']['beschrijving'] ) ) echo wpautop($ourteam['intro']['beschrijving']);
              ?>
            </div>
            <?php endif; ?>
            <?php if( !empty( $gthird ) ){ ?>
            <div class="about-our-team-img hide-md">
              <img src="<?php echo $gthird; ?>" alt="<?php echo $g3title; ?>">
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="partners-4-prosperity-sec about-prd-tp">
  <div class="container-lg">
      <div class="row">
        <?php 
            $partners = get_field('partners', HOMEID);
            if($partners):
        ?>
          <div class="col-sm-12">
            <div class="vt-sec-hdr">
            <?php 
              if( !empty( $partners['titel'] ) ) printf( '<h3>%s</h3>', $partners['titel']);  
              if( !empty( $partners['beschrijving'] ) ) echo wpautop($partners['beschrijving']);
            ?>
            </div>
          </div>
          <?php endif; 

          $Query = new WP_Query(array( 
                  'post_type'=> 'partner',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  'order'=> 'DESC'
                ) 
              );

          if( $Query->have_posts() ):
          ?>
          <div class="col-sm-12">
            <div class="partners-slider-ctlr">
              <span class="slide-prev-btn"></span>
              <span class="slide-next-btn"></span>
              <div class="partnersSlider xs-pagi-ctrl">
                <?php 
                while($Query->have_posts()): $Query->the_post(); 
                  $partners = get_field('partners', get_the_ID());
                  $plogosrc = '';
                  if(!empty($partners['logo'])){
                      $plogosrc = $partners['logo'];
                  }
                  $pllink = $partners['knop'];
                  $plurl = '#';
                  if( is_array( $pllink ) &&  !empty( $pllink['url'] ) ){
                    $plurl = $pllink['url'];
                  }
                ?>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="<?php echo $plurl; ?>" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo $plogosrc; ?>" alt="<?php the_title(); ?>"></span>
                      <strong><?php the_title(); ?></strong>
                    </div>
                  </div>
                </div>
                <?php endwhile; ?>
                
              </div>
            </div>
          </div>
          <?php endif; wp_reset_postdata(); ?>
      </div>
  </div>    
</section>


<?php 
  $ocommunity = get_field('our_community', $thisID);
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
<section class="about-our-community-sec">
  <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="our-community-vdo">
            <div class="video-play">
              <?php echo $vposertag; ?>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
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

  $promo = get_field('promo', $thisID);
  $columns = get_field('columns', $thisID);
  $promotag = '';
  if(!empty($promo['afbeelding'])) $promotag = cbv_get_image_tag($promo['afbeelding']);

?>
<section class="about-new-life-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about-new-life-dsc-wrp">
          <div class="about-new-life-dsc-tp clearfix">
            <?php 
              if( !empty( $promo['titel'] ) ) printf( '<h2>%s</h2>', $promo['titel']);  
              if( !empty( $promo['beschrijving'] ) ) echo wpautop($promo['beschrijving']);
            ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="about-new-life-img">
          <?php echo $promotag; ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="about-new-life-dsc-btm">
        <?php if( !empty( $columns['Column_1'] ) ) echo wpautop($columns['Column_1']); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="about-new-life-dsc-btm">
          <?php if( !empty( $columns['Column_2'] ) ) echo wpautop($columns['Column_2']); ?>
        </div>
      </div>
      <?php
        $testimonials = get_field('testimonials', $thisID);
        if($testimonials):
      ?>
      <div class="col-sm-12">
        <div class="about-new-life-blockquote">
          <?php 
            if( !empty( $testimonials['tekst'] ) ) printf( '<blockquote>%s</blockquote>', $testimonials['tekst']);  
            if( !empty( $testimonials['naam'] ) ) printf( '<span>- %s</span>', $testimonials['naam']);  
          ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>


<section class="social-media-platform-sec about-social-media-sec">
  <div class="container">
      <div class="row">
        <?php 
          $mplatform = get_field('social_media_platform', $thisID);
          $afbeelding = $mplatform['afbeelding'];
        ?>
        <div class="col-sm-12 col-lg-7">
          <div class="map-img-grd-col">
            <?php if( !empty( $afbeelding ) ){ ?>
            <div class="vt-sm-map-xs-ctlr">
              <img src="<?php echo $afbeelding; ?>">
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="col-sm-12 col-lg-5">
        <?php
          if($mplatform):
            $maplinks = $mplatform['links'];
        ?>
          <div class="map-img-grd-col-des">
            <?php 
            if( !empty( $maplinks['titel'] ) ) printf( '<h2>%s</h2>', $maplinks['titel']);  
            if( !empty( $maplinks['beschrijving'] ) ) echo wpautop($maplinks['beschrijving']);
            $knop4 = $maplinks['knop'];
            if( is_array( $knop4 ) &&  !empty( $knop4['url'] ) ){
              printf('<a href="%s" target="%s">%s</a>', $knop4['url'], $knop4['target'], $knop4['title']); 
            }
          ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
  </div>    
</section>
<?php 
get_template_part( 'templates/more-about', 'community' );
get_footer(); 
?>