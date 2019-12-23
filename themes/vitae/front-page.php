<?php get_header(); 
$intro = get_field('intro', HOMEID);
if($intro):
  $introlinks = $intro['links'];
  $introsrc = '';
  if(!empty($intro['afbeelding'])) $introsrc = $intro['afbeelding'];

?>
<section class="home-banner">
  <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-6 order-md-1 order-xl-2">
          <div class="home-bnr-img" style="margin-right: -185px">
            <img src="<?php echo $introsrc; ?>" alt="intro">
          </div>
        </div>
        <div class="col-lg-12 col-xl-6 order-md-2 order-xl-1">
          <div class="home-bnr-des">
            <?php 
              if( !empty( $introlinks['titel'] ) ) printf( '<h1>%s</h1>', $introlinks['titel']);  
              if( !empty( $introlinks['beschrijving'] ) ) echo wpautop($introlinks['beschrijving']);
              $knop1 = $introlinks['knop'];
              if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                printf('<a class="fl-fade-effect" href="%s" target="%s"><span>%s</span></a>', $knop1['url'], $knop1['target'], $knop1['title']); 
              }
            ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>

  <section class="social-media-platform-sec position-rltv-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-7">
        <div class="map-img-grd-col">
          <div id="continents-data" class="WW">
            <strong class="worldwide">900.000 Users <span>Worldwide</span></strong>
            <strong class="EU">200.000 Users <span>in Europe</span></strong>
            <strong class="AF">100.000 Users <span>in Africa</span></strong>
            <strong class="NA">125.000 Users <span>in North America</span></strong>
            <strong class="OC">175.000 Users <span>in Oceania</span></strong>
            <strong class="AS">250.000 Users <span>in Asia</span></strong>
            <strong class="SA">150.000 Users <span>in South America</span></strong>
          </div>
          <div class="vt-sm-map-xs-ctlr">
            <div id="jmaps"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-5">
        <?php 
          $mplatform = get_field('media_platform', HOMEID);
          if($mplatform):
        ?>
        <div class="map-img-grd-col-des">
          <?php 
            if( !empty( $mplatform['titel'] ) ) printf( '<h2>%s</h2>', $mplatform['titel']);  
            if( !empty( $mplatform['beschrijving'] ) ) echo wpautop($mplatform['beschrijving']);
            $knop2 = $mplatform['knop'];
            if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
              printf('<a class="fl-fade-effect" href="%s" target="%s"><span>%s</span></a>', $knop2['url'], $knop2['target'], $knop2['title']); 
            }
          ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>    
  </section>

<?php 
  $ocommunity = get_field('our_community', HOMEID);
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
        <i><img src="'.THEME_URI.'/assets/images/play-btn-icon-white.svg"></i>
        '.$cpostertag.'
      </a>';
    }else{
      $vposertag = $cpostertag;
    }
?>
  <section class="our-community-sec position-rltv-10">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 order-sm-1 order-md-2">
            <div class="our-community-vdo">
              <?php if( !empty( $vposertag ) ){ ?>
              <span class="radius-gren"></span>
              <div class="video-play">
                <?php echo $vposertag; ?>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 order-sm-2 order-md-1">
            <div class="our-community-des">
            <?php 
              if( !empty( $comlinks['titel'] ) ) printf( '<h2>%s</h2>', $comlinks['titel']);  
              if( !empty( $comlinks['beschrijving'] ) ) echo wpautop($comlinks['beschrijving']);
              $knop3 = $comlinks['knop'];
              if( is_array( $knop3 ) &&  !empty( $knop3['url'] ) ){
                printf('<a class="fl-fade-effect" href="%s" target="%s"><span>%s</span></a>', $knop3['url'], $knop3['target'], $knop3['title']); 
              }
            ?>
            </div>
          </div>
        </div>
    </div>    
  </section>
<?php endif; ?>
  <section class="vt-about-the-token-sec position-rltv-10">
    <div id="vtabout-gridiant"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-5 order-md-1 order-lg-2">
          <?php 
            $vitaetoken = get_field('about_the_token', HOMEID);
            if($vitaetoken):
              $abtoken = $vitaetoken['rights'];
          ?>
          <div class="vt-about-the-token-des">
            <?php 
              if( !empty( $abtoken['titel'] ) ) printf( '<h2>%s</h2>', $abtoken['titel']);  
              if( !empty( $abtoken['subtitel'] ) ) printf( '<span class="subtitle">%s</span>', $abtoken['subtitel']);  
              if( !empty( $abtoken['Beschrijving'] ) ) echo wpautop($abtoken['Beschrijving']);
              $knops = $abtoken['knops'];
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
        <?php endif; ?>
        </div>
        <div class="ol-md-12 col-lg-7 order-md-2 order-lg-1">
          <?php 
            if(function_exists('APIdata')):
              $lefts = $vitaetoken['lefts'];
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
          <div class="vt-about-tokens">
            <?php 
            $maximum_supply_titel = $lefts['maximum_supply_titel'];
            $maximum_supply_tooltip = $lefts['maximum_supply_tooltip'];
            $pre_mine_titel = $lefts['pre_mine_titel'];
            $pre_mine_tooltip = $lefts['pre_mine_tooltip'];
            $super_node_titel = $lefts['super_node_titel'];
            $super_node_tooltip = $lefts['super_node_tooltip'];
            $remaining_pre_mine_titel = $lefts['remaining_pre_mine_titel'];
            $remaining_pre_mine_tooltip = $lefts['remaining_pre_mine_tooltip'];
            ?>
            <div class="vt-about-token vt-about-token-01">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="<?php echo $pre_mine_tooltip; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-01.svg">
                  <?php printf('<strong>%s</strong>', $preMine); ?>
                  <span><?php echo $pre_mine_titel; ?></span>
                </div>
              </div>
            </div>
            <div class="vt-about-token vt-about-token-02">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="<?php echo $maximum_supply_tooltip; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-02.svg">
                  <?php printf('<strong>%s</strong>', $maxSupply); ?>
                  <span><?php echo $maximum_supply_titel; ?></span>
                </div>
              </div>
            </div>

            <div class="vt-about-token-center-logo">
              <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-mdl.svg">
            </div>

            <div class="vt-about-token vt-about-token-03">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="<?php echo $super_node_tooltip; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-03.svg">
                  <?php printf('<strong>%s</strong>', $superNodeBurn); ?>
                  <span><?php echo $super_node_titel; ?></span>
                </div>
              </div>
            </div>
            <div class="vt-about-token vt-about-token-04">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="<?php echo $remaining_pre_mine_tooltip; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-04.svg">
                  <?php printf('<strong>%s</strong>', $remainingPreMine); ?>
                  <span><?php echo $remaining_pre_mine_titel; ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="partners-4-prosperity-sec position-rltv-10">
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


  <section class="home-vt-faq-sec position-rltv-10">
    <div id="faqParticles"></div>
    <div class="container">
        <div class="row">
          <?php 
            $faq = get_field('faq', HOMEID);
            if($faq):
          ?>
          <div class="col-sm-12">
            <div class="vt-sec-hdr">
            <?php 
              if( !empty( $faq['titel'] ) ) printf( '<h2>%s</h2>', $faq['titel']);  
              if( !empty( $faq['beschrijving'] ) ) echo wpautop($faq['beschrijving']);
            ?>
            </div>
          </div>
          <?php endif; 

            $Query = new WP_Query(array( 
                    'post_type'=> 'faqs',
                    'post_status' => 'publish',
                    'posts_per_page' => 4,
                    'order'=> 'DESC'
                  ) 
                );

            if( $Query->have_posts() ):
          ?>
          <div class="col-sm-12">
            <div class="vt-faq-grds">
              <ul class="clearfix ulc">
              <?php while($Query->have_posts()): $Query->the_post(); ?>
                <li>
                  <div class="vt-faq-grd-item matchHeightCol">
                    <i><img src="<?php echo THEME_URI; ?>/assets/images/faq-grd-icon.svg"></i>
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">Read More</a>                
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php 
              $faqknop = $faq['knop'];
                if( is_array( $faqknop ) &&  !empty( $faqknop['url'] ) ){
                  printf('<div class="more-faq-btn"><a class="fl-fade-effect" href="%s" target="%s"><span>%s</span></a></div>', $faqknop['url'], $faqknop['target'], $faqknop['title']); 
                }

              ?>
            </div>
          </div>
          <?php endif;wp_reset_postdata(); ?>
        </div>
    </div>    
  </section>

  <section class="vt-community-we-sec position-rltv-10">
    <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <?php 
              $newsletter = get_field('newsletter', HOMEID);
              if($newsletter):
                $form_shortcode = $newsletter['form_shortcode'];
            ?>
            <div class="community-we-hdr">
            <?php 
              if( !empty( $newsletter['titel'] ) ) printf( '<h3>%s</h3>', $newsletter['titel']);  
              if( !empty( $newsletter['beschrijving'] ) ) echo wpautop($newsletter['beschrijving']);
            ?>
            </div>
            <div class="newsletter-form" id="newsletter-form">
              <div id="wp-form">
                <?php 
                if( !empty( $form_shortcode ) )
                echo do_shortcode($form_shortcode); 
                ?>
              </div>
            </div>
            <?php endif; ?>
            <div class="subscribe-cmnt text-center">
              <div class="feeds-wrap clearfix">
                <div class="twitter-feed">
                  <a class="twitter-timeline" data-height="500" href="https://twitter.com/OfficialVitae?ref_src=twsrc%5Etfw">Tweets by OfficialVitae</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="discord-feed">
                  <iframe src="https://discordapp.com/widget?id=411142379257724929&amp;theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
  </section>
<?php get_footer(); ?>