<?php
/*
  Template Name: Wallet
*/
get_header('page'); 
$thisID = get_the_ID();
?>
<section class="wallet-dark-main-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="wallet-dark-main-innr">
          <div class="wallet-dark-main-top clearfix">
          	<?php 
				$intro = get_field('intro', $thisID);
				if($intro):
				  $introlinks = $intro['links'];

          	?>
            <div class="wallet-dark-main-top-lft">
            <?php 
              if( !empty( $introlinks['titel'] ) ) printf( '<span>%s</span>', $introlinks['titel']);  
              if( !empty( $introlinks['titel'] ) ) printf( '<h1>%s</h1>', $introlinks['titel']);  
              if( !empty( $introlinks['beschrijving'] ) ) echo wpautop($introlinks['beschrijving']);
              $knop1 = $introlinks['knop_1'];
              $knop2 = $introlinks['knop_2'];
              if( is_array( $knop1 ) &&  !empty( $knop1['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $knop1['url'], $knop1['target'], $knop1['title']); 
              }
              if( is_array( $knop2 ) &&  !empty( $knop2['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $knop2['url'], $knop2['target'], $knop2['title']); 
              }

              $dwallets = $intro['download_wallet'];
              $knops = $dwallets['knops'];
            ?>
            </div>
        	<?php if($knops): ?>
            <div class="wallet-dark-main-top-rgt text-center">
              <h6>Download Wallet:</h6>
              <ul class="ulc clearfix">
              	<?php foreach ($knops as $key => $knop) { ?>
                <?php
                  $dicon = $knop['icon'];
                  $dknop = $knop['knop'];
                  if( is_array( $dknop ) &&  !empty( $dknop['url'] ) ){
	                printf('<li>
                  <a href="%s" target="%s"><span>%s%s</span></a></li>', $dknop['url'], $dknop['target'], $dicon,  $dknop['title']); 
	              }

                ?>
            	<?php } ?>
              </ul>
            </div>
            <?php endif; endif; ?>
          </div>
        </div>

        <div class="wallet-dark-feature-img show-lg clearfix vt-wallet-mobile-feature-img">
          <div class="wallet-dark-feature-img-innr" style="background:url(<?php echo THEME_URI; ?>/assets/images/dark-page-mob-img.png);">
            <div class="mobile-img-feature mobile-img-feature-1">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>
            </div>
            <div class="mobile-img-feature mobile-img-feature-2">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>              
            </div>
            <div class="mobile-img-feature mobile-img-feature-3">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>              
            </div>
            <div class="mobile-img-feature mobile-img-feature-4">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>              
            </div> 
          </div>
        </div>

        <div class="wallet-dark-feature-des clearfix show-lg">
          <div class="wallet-dark-feature-des-innrclearfix" id="vt-wallet-grd-item-ctlr">
            <ul class="ulc clearfix">
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
            </ul>          
          </div>  
        </div>

      </div>
    </div>
  </div> 
  <div class="wallet-dark-feature-two-part ">
    <div id="faqParticles" class="walletDarkMiddleParticles"></div>
    <ul class="ulc clearfix">
      <li class="vt-laptop-sec">
        <div class="wallet-dark-feature-img wallet-dark-feature-img-laptop">
          <div class="vt-laptop-frame-ctrl">
            <div class="vt-laptop-frame">
              <div class="vt-laptop-frame-inr">
                <div class="vt-laptop-frame-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/about-drk-img.png);"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="wallet-dark-feature-des clearfix hide-lg">
          <div class="wallet-dark-feature-des-innr clearfix">
            <ul class="ulc clearfix">
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
            </ul>          
          </div>  
        </div>    
      </li>
      <li class="">
        <div class="wallet-dark-feature-img hide-lg clearfix">
          <div class="wallet-dark-feature-img-innr" style="background:url(<?php echo THEME_URI; ?>/assets/images/dark-page-mob-img.png);">
            <div class="mobile-img-feature mobile-img-feature-1">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>
            </div>
            <div class="mobile-img-feature mobile-img-feature-2">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>              
            </div>
            <div class="mobile-img-feature mobile-img-feature-3">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>              
            </div>
            <div class="mobile-img-feature mobile-img-feature-4">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/mobile-img-feature-icon-02.png" alt="" /></i>
                <strong>Feature</strong>
                <span>Nulla in mauris in enim</span>
              </div>              
            </div> 
          </div>
        </div>          
        <div class="wallet-dark-feature-des clearfix">
          <div class="wallet-dark-feature-des-innr clearfix" id="vt-wallet-grd-item-ctlr">
            <ul class="ulc clearfix">
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
              <li>
                <i><img src="<?php echo THEME_URI; ?>/assets/images/wallet-dark-feature-des-icon.svg" alt="" /></i>
                <h6>Feature</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. </p>
              </li>
            </ul>          
          </div>  
        </div>    
      </li>
    </ul>    
  </div>   
</section>


<section class="about-dark-service-sec-wrp" id="wlt-dark-service-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about-dark-service-wrp">
          <ul class="clearfix" id="AboutSerSlider">
            <li>
              <div class="about-dark-service-dsc">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/world-icon.svg"></i>
                <h6>Confirmations Are Fast</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. Fusce commodo fringilla erat, ac tempus urna vehicula nec.</p>
              </div>
            </li>
            <li>
              <div class="about-dark-service-dsc">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/network-icon.svg"></i>
                <h6>Super Node Burn</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. Fusce commodo fringilla erat, ac tempus urna vehicula nec.</p>
              </div>
            </li>
            <li>
              <div class="about-dark-service-dsc">
                <i><img src="<?php echo THEME_URI; ?>/assets/images/pie-chart-icon.svg"></i>
                <h6>Everyone Can Mine</h6>
                <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. Fusce commodo fringilla erat, ac tempus urna vehicula nec.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="partners-4-prosperity-sec" id="wlt-dark-partners-4-sec">
  <div class="container-lg">
      <div class="row">
        <div class="col-sm-12">
          <div class="vt-sec-hdr">
            <h3>Partners 4 Prosperity</h3>
            <p>Nulla in mauris in enim cursus volutpat. Quisque egestas auctor dui, nec rutrum nibh pretium at. Fusce commodo fringilla erat, ac tempus urna vehicula nec.</p>
          </div>
        </div>
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
<?php 
get_footer(); 
?>