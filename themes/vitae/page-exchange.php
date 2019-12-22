<?php
/*
  Template Name: Exchange
*/
get_header('page'); 
$thisID = get_the_ID();
?>
<div class="vt-exchange-page-con">
<?php 
$intro = get_field('intro', $thisID);
if($intro):
?>
  <section class="vt-exchange-entry-hdr">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="vt-exchange-entry-hdr-inr">
            <?php 
              if( !empty( $intro['subtitel'] ) ) printf( '<strong>%s</strong>', $intro['subtitel']);  
              if( !empty( $intro['titel'] ) ) printf( '<h1>%s</h1>', $intro['titel']);  
              if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']);
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="vt-exchange-form-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="vt-exchange-form">
            <img src="<?php echo THEME_URI; ?>/assets/images/vt-exchange-form.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
    $partners = get_field('partners', $thisID);
    if($partners):
    	$prtlogos = $partners['exchange_solutions'];
  ?>
  <section class="vt-more-exchange-sec">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="vt-more-exchange-sec-hdr">
            <?php 
              if( !empty( $partners['titel'] ) ) printf( '<h3>%s</h3>', $partners['titel']);  
              if( !empty( $partners['beschrijving'] ) ) echo wpautop($partners['beschrijving']);
            ?>
          </div>
        </div>
        <?php if($prtlogos): ?>
        <div class="col-sm-12">
          <div class="exchange-solution-slider-ctlr">
            <span class="slide-prev-btn"></span>
            <span class="slide-next-btn"></span>
            <div class="exchange-solution-slider exchangeSolutionSlider xs-pagi-ctrl">
              <?php 
              foreach($prtlogos as $prtlogo): 
              	$plogosrc = '';
			    if(!empty($prtlogo['logo'])){
			        $fea1src = $prtlogo['logo'];
			    }
			    $pllink = $prtlogo['knop'];
			    $plurl = '';
			    if( is_array( $pllink ) &&  !empty( $pllink['url'] ) ){
			    	$plurl = $pllink['url'];
			    }
              ?>
              <div class="esSlideItem">
                <div class="esSlideItemInner matchHeightCol">
                  <a class="overlay-link" href="<?php echo $plurl; ?>" target="_blank"></a>
                  <div>
                    <span class="esSlideItem-logo-bx"><img src="<?php echo $fea1src; ?>" alt="<?php echo $prtlogo['titel'] ?>"></span>
                    <?php if( !empty( $prtlogo['titel'] ) ) printf( '<strong>%s</strong>', $prtlogo['titel']); ?>
                  </div>
                </div>
              </div>
          	  <?php endforeach; ?>
            </div>
          </div>
        </div>
    	<?php endif; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>
</div>
<?php 
get_footer(); 
?>