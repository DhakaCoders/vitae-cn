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
<div class="cookie-policy-wrp">
   <div class="cookie-policy-dsc">
    <span class="cross-white"></span>
     <h4>Cookie Policy</h4>
     <p>This site uses cookies to improve your browsing experience.</p>
     <a href="#"> Meer Info</a>
     <div class="cookie-btn">
       <a href="#">Accept Cookies</a>
     </div>
   </div>
 </div>


  <section class="social-media-platform-sec position-rltv-10">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-7">
        <div class="map-img-grd-col">
          <strong>200.000 Users <span>in Europe</span></strong>
          <div class="vt-sm-map-xs-ctlr">
            <img src="<?php echo THEME_URI; ?>/assets/images/home-map-img.jpg">
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
  <section class="our-community-sec position-rltv-10">
    <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6 order-sm-1 order-md-2">
            <div class="our-community-vdo">
              <span class="radius-gren"></span>
              <div class="video-play">
                <?php echo $vposertag; ?>
              </div>
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
            $abtoken = get_field('about_the_token', HOMEID);
            if($abtoken):
          ?>
          <div class="vt-about-the-token-des">
            <?php 
              if( !empty( $abtoken['titel'] ) ) printf( '<h2>%s</h2>', $abtoken['titel']);  
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
          <div class="vt-about-tokens">
            <div class="vt-about-token vt-about-token-01">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="Lorem ipsum dolor"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-01.svg">
                  <strong>1000000</strong>
                  <span>Pre Mine</span>
                </div>
              </div>
            </div>
            <div class="vt-about-token vt-about-token-02">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="Lorem ipsum dolor"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-02.svg">
                  <strong>100000000</strong>
                  <span>Maximum Supply</span>
                </div>
              </div>
            </div>

            <div class="vt-about-token-center-logo">
              <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-mdl.svg">
            </div>

            <div class="vt-about-token vt-about-token-03">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="Lorem ipsum dolor"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-03.svg">
                  <strong>800000</strong>
                  <span>Super Node Burn</span>
                </div>
              </div>
            </div>
            <div class="vt-about-token vt-about-token-04">
              <div class="vt-about-token-inner">
                <div class="text-right bt-tooltip-btn">
                  <span data-toggle="tooltip" title="Lorem ipsum dolor"><img src="<?php echo THEME_URI; ?>/assets/images/tooltip-btn-icon.svg"></span>
                </div>
                <div class="vt-about-token-con">
                  <img src="<?php echo THEME_URI; ?>/assets/images/vt-token-icon-04.svg">
                  <strong>200000</strong>
                  <span>Remaining Pre Mine</span>
                </div>
              </div>
            </div>
          </div>
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
          <?php endif; ?>
          <div class="col-sm-12">
            <div class="partners-slider-ctlr">
              <span class="slide-prev-btn"></span>
              <span class="slide-next-btn"></span>
              <div class="partnersSlider xs-pagi-ctrl">
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-01.svg"></span>
                      <strong>MasterNodes.Pro </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-02.svg"></span>
                      <strong>MasterNode.Live </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-03.svg"></span>
                      <strong>NodeHub.io </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-04.svg"></span>
                      <strong>MasterNodes.Online </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-01.svg"></span>
                      <strong>MasterNodes.Pro </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-01.svg"></span>
                      <strong>MasterNodes.Pro </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-01.svg"></span>
                      <strong>MasterNodes.Pro </strong>
                    </div>
                  </div>
                </div>
                <div class="partnersSlideItem">
                  <div class="partnersSlideItemInner matchHeightCol">
                    <a class="overlay-link" href="#" target="_blank"></a>
                    <div>
                      <span class="partners-logo-bx"><img src="<?php echo THEME_URI; ?>/assets/images/partners-logo-01.svg"></span>
                      <strong>MasterNodes.Pro </strong>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
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
              <?php while($Query->have_posts()): $Query->the_post();  ?>
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
                  printf('<div class="more-faq-btn"><a class="fl-fade-effect" href="%s" target="%s">%s</a></div>', $faqknop['url'], $faqknop['target'], $faqknop['title']); 
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
            ?>
            <div class="community-we-hdr">
            <?php 
              if( !empty( $newsletter['titel'] ) ) printf( '<h3><span>%s</span></h3>', $newsletter['titel']);  
              if( !empty( $newsletter['beschrijving'] ) ) echo wpautop($newsletter['beschrijving']);
            ?>
            </div>
            <div class="newsletter-form" id="newsletter-form">
              <div id="wp-form">
                <form class="wpforms-validate wpforms-form">
                  <div class="wpforms-field-container">
                    <div id="wpforms-723-field_2-container" class="wpforms-field wpforms-field-text 1in2col" data-field-id="2">
                    <label class="wpforms-field-label" for="wpforms-723-field_2">Your E-mailadres </label>
                    <input id="wpforms-723-field_2" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" placeholder="example: stef@vitaetoken.io" required="" type="email" />
                    </div>

                  </div>
                  <div class="wpforms-submit-container"><input name="wpforms[id]" type="hidden" value="723" />
                    <input name="wpforms[author]" type="hidden" value="2" />
                    <input name="wpforms[post_id]" type="hidden" value="14" />
                    <button id="wpforms-submit-723" class="wpforms-submit" name="wpforms[submit]" type="submit" value="wpforms-submit" data-alt-text="Sending..." data-submit-text="Verzenden"><span>Subscribe</span></button>
                  </div>
                </form>
              </div>
            </div>
            <?php endif; ?>
            <div class="subscribe-cmnt text-center">
              <img src="<?php echo THEME_URI; ?>/assets/images/Subscribe.png">
            </div>
          </div>
        </div>
    </div>    
  </section>
<?php  get_footer(); ?>