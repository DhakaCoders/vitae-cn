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
              if( !empty( $introlinks['subtitel'] ) ) printf( '<span>%s</span>', $introlinks['subtitel']);  
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
        <?php 
        $features2 = get_field('features2', $thisID);
            $fe2lists = $features2['features_list'];
            $fblock = $features2['rechten'];
            $fe2blocks = $fblock['features_block'];
            $feab2src = '';
            if(!empty($fblock['afbeelding'])){
                $feab2src = cbv_get_image_src($fblock['afbeelding'], 'hmbbox');
            }
              
        ?>
        <div class="wallet-dark-feature-img show-lg clearfix vt-wallet-mobile-feature-img">
          <?php if($fe2blocks): ?>
          <div class="wallet-dark-feature-img-innr" style="background:url(<?php echo THEME_URI; ?>/assets/images/dark-page-mob-img.png);">
            <div class="mobile-screen-bg-img" style="background:url(<?php echo $feab2src; ?>);"></div>
            <?php
              $i = 1; 
              foreach($fe2blocks as $fe2block):
              $fe1icon = '';
              if(!empty($fe2block['icon'])) $fe1icon = $fe2block['icon'];
              ?>
            <div class="mobile-img-feature mobile-img-feature-<?php echo $i; ?>">
              <div class="mobile-img-feature-innr">
              <i><img src="<?php echo $fe1icon; ?>" alt="" /></i>
              <?php 
              if( !empty( $fe2block['titel'] ) ) printf( '<strong>%s</strong>', $fe2block['titel']);  
              if( !empty( $fe2block['tekst'] ) ) printf( '<span>%s</span>', $fe2block['tekst']);  
              ?>
              </div>
            </div>
            <?php $i++; endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
        <?php 
        $features1 = get_field('features1', $thisID);
        $fe1lists = $features1['features_list'];
        if($fe1lists): ?>
        <div class="wallet-dark-feature-des clearfix show-lg">
          <div class="wallet-dark-feature-des-innrclearfix" id="vt-wallet-grd-item-ctlr">
            <ul class="ulc clearfix">
              <?php 
              foreach($fe1lists as $fe1list):
              $fe1icon = '';
              if(!empty($fe1list['icon'])) $fe1icon = $fe1list['icon'];
              ?>
              <li>
                <i><img src="<?php echo $fe1icon; ?>" alt="" /></i>
                <?php 
                if( !empty( $fe1list['titel'] ) ) printf( '<h6>%s</h6>', $fe1list['titel']);  
                if( !empty( $fe1list['tekst'] ) ) echo wpautop($fe1list['tekst']);
                ?>
              </li>
              <?php endforeach; ?>
            </ul>          
          </div>  
        </div>
      <?php endif; ?>
      </div>
    </div>
  </div> 

  <div class="wallet-dark-feature-two-part ">
    <div id="faqParticles" class="walletDarkMiddleParticles"></div>
    <ul class="ulc clearfix">
   <?php 
	$features1 = get_field('features1', $thisID);
	if($features1):
		$fea1src = '';
	    if(!empty($features1['afbeelding'])){
	        $fea1src = cbv_get_image_src($features1['afbeelding']['id'], 'hmbbox');
	    }
	    $fe1lists = $features1['features_list'];
	?>
      <li class="vt-laptop-sec">
        <div class="wallet-dark-feature-img wallet-dark-feature-img-laptop">
          <div class="vt-laptop-frame-ctrl">
            <div class="vt-laptop-frame">
              <div class="vt-laptop-frame-inr">
                <div class="vt-laptop-frame-img" style="background: url(<?php echo $fea1src; ?>);"></div>
              </div>
            </div>
          </div>
        </div>
        <?php if($fe1lists): ?>
        <div class="wallet-dark-feature-des clearfix hide-lg">
          <div class="wallet-dark-feature-des-innr clearfix">
            <ul class="ulc clearfix">
              <?php 
              foreach($fe1lists as $fe1list):
              $fe1icon = '';
              if(!empty($fe1list['icon'])) $fe1icon = $fe1list['icon'];
              ?>
              <li>
                <i><img src="<?php echo $fe1icon; ?>" alt="" /></i>
                <?php 
		            if( !empty( $fe1list['titel'] ) ) printf( '<h6>%s</h6>', $fe1list['titel']);  
		            if( !empty( $fe1list['tekst'] ) ) echo wpautop($fe1list['tekst']);
		        ?>
              </li>
          	  <?php endforeach; ?>
            </ul>          
          </div>  
        </div> 
        <?php endif; ?>   
      </li>
  	<?php endif; ?>
      <li class="">
        <div class="wallet-dark-feature-img hide-lg clearfix">
        <?php 
    		$features2 = get_field('features2', $thisID);
    		    $fe2lists = $features2['features_list'];
    		    $fblock = $features2['rechten'];
    		    $fe2blocks = $fblock['features_block'];
    		    $feab2src = '';
    		    if(!empty($fblock['afbeelding'])){
    		        $feab2src = cbv_get_image_src($fblock['afbeelding'], 'hmbbox');
    		    }
    		    if($fe2blocks):
    		    	
    		?>
          <div class="wallet-dark-feature-img-innr" style="background:url(<?php echo THEME_URI; ?>/assets/images/dark-page-mob-img.png);">
            <div class="mobile-screen-bg-img" style="background:url(<?php echo $feab2src; ?>);"></div>
          	<?php
          	  $i = 1; 
              foreach($fe2blocks as $fe2block):
              $fe1icon = '';
              if(!empty($fe2block['icon'])) $fe1icon = $fe2block['icon'];
              ?>
            <div class="mobile-img-feature mobile-img-feature-<?php echo $i; ?>">
              <div class="mobile-img-feature-innr">
                <i><img src="<?php echo $fe1icon; ?>" alt="" /></i>
                <?php 
		            if( !empty( $fe2block['titel'] ) ) printf( '<strong>%s</strong>', $fe2block['titel']);  
		            if( !empty( $fe2block['tekst'] ) ) printf( '<span>%s</span>', $fe2block['tekst']);  
		        ?>
              </div>
            </div>
            <?php $i++; endforeach; ?>
          </div>
      	  <?php endif; ?>
        </div>          
        <div class="wallet-dark-feature-des clearfix">
          <div class="wallet-dark-feature-des-innr clearfix" id="vt-wallet-grd-item-ctlr">
          	<?php if($fe2lists): ?>
            <ul class="ulc clearfix">
              <?php foreach($fe2lists as $fe2list): 
				$fe2icon = '';
              	if(!empty($fe2list['icon'])) $fe2icon = $fe2list['icon'];
              	?>
              <li>
                <i><img src="<?php echo $fe2icon; ?>" alt="" /></i>
                <?php 
		            if( !empty( $fe2list['titel'] ) ) printf( '<h6>%s</h6>', $fe2list['titel']);  
		            if( !empty( $fe2list['tekst'] ) ) echo wpautop($fe2list['tekst']);
		        ?>
              </li>
          	<?php endforeach; ?>
            </ul>
            <?php endif; ?>       
          </div>  
        </div>    
      </li>
    </ul>    
  </div>   
</section>

<?php 
	$fes3 = get_field('features3', $thisID);
	if($fes3):
?>
<section class="about-dark-service-sec-wrp" id="wlt-dark-service-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="about-dark-service-wrp">
          <ul class="clearfix" id="AboutSerSlider">
          	<?php foreach($fes3 as $fesrow3): 
			$feicon3 = '';
          	if(!empty($fesrow3['icon'])) $feicon3 = $fesrow3['icon'];
          	?>
            <li>
              <div class="about-dark-service-dsc">
                <i><img src="<?php echo $feicon3; ?>" alt="" /></i>
                <?php 
		            if( !empty( $fesrow3['titel'] ) ) printf( '<h6>%s</h6>', $fesrow3['titel']);  
		            if( !empty( $fesrow3['tekst'] ) ) echo wpautop($fesrow3['tekst']);
		        ?>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="partners-4-prosperity-sec" id="wlt-dark-partners-4-sec">
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
get_footer(); 
?>