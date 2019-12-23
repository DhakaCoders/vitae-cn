<?php 
get_header(); 
$thisID = get_the_ID();
?>
<section class="faq-detalis-page-con">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="faq-detalis-block">
          <div class="faq-back-btn">
            <a href="<?php echo esc_url( site_url('faq'));?>">Back to overview</a>
          </div>
          <div class="vt-faq-details-con-block default-page-con">
            <?php 
              if(have_rows('inhoud')){ 
              while ( have_rows('inhoud') ) : the_row(); 
                if( get_row_layout() == 'introductietekst' ){
                    $title = get_sub_field('titel');
                    $afbeelding = get_sub_field('afbeelding');
                    echo '<div class="dfp-faq-promo-module clearfix">';
                      if( !empty($title) ) printf('<h1>%s</h1>', $title);
                      if( !empty($afbeelding) ){
                        echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding, 'dfpageg1'), '</div>';
                      }
                    echo '</div>';    
                }elseif( get_row_layout() == 'teksteditor' ){
                    $beschrijving = get_sub_field('fc_teksteditor');
                    echo '<div class="dfp-faq-promo-module clearfix">';
                      if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
                    echo '</div>';    
                  }elseif( get_row_layout() == 'afbeelding_tekst' ){
                    $fc_afbeelding = get_sub_field('fc_afbeelding');
                    $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfppage2');
                    $fc_tekst = get_sub_field('fc_tekst');
                    $fc_cirkel = get_sub_field('cirkel');
                    $positie_afbeelding = get_sub_field('positie_afbeelding');
                    $imgposcls = ( $positie_afbeelding == 'right' ) ? 'fl-dft-rgtimg-lftdes' : '';
                    echo '<div class="fl-dft-overflow-controller">
                      <div class="fl-dft-lftimg-rgtdes clearfix equalHeight '.$imgposcls.'">';
                           echo ($positie_afbeelding == 'right' && $fc_cirkel == true)? '<span class="fl-dft-circle-rgt"></span>': '';
                           echo ($positie_afbeelding == 'left' && $fc_cirkel == true)? '<span class="fl-dft-circle-lft"></span>': '';

                            echo '<div class="fl-dft-lftimg-rgtdes-lft matchHeightCol" style="background: url('.$imgsrc.');"></div>';
                            echo '<div class="fl-dft-lftimg-rgtdes-rgt matchHeightCol">';
                              echo wpautop($fc_tekst);
                            echo '</div>';
                    echo '</div></div>';      
                  }elseif( get_row_layout() == 'afbeelding_beschrijving' ){
                    $fc_afbeelding = get_sub_field('afbeelding');
                    $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
                    $fc_tekst = get_sub_field('beschrijving');
                    echo '<div class="dft-img-des-grd-cols clearfix">';
                            echo '<div class="dft-img-grd"><div class="dft-img-grd-inner-img matchHeightCol" style="background: url('.$imgsrc.');"></div></div>';
                            echo '<div class="dft-img-grd"><div class="dft-img-grd-inner-des matchHeightCol">';
                              echo wpautop($fc_tekst);
                            echo '</div></div>';
                    echo '</div>';      
                  }elseif( get_row_layout() == 'galerij' ){
                    $gallery_cn = get_sub_field('galerij_afbeelding');
                    $lightbox = get_sub_field('lightbox');
                    $kolom = get_sub_field('kolom');
                    if( $gallery_cn ):
                    echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                      foreach( $gallery_cn as $image ):
                      $imgsrc = cbv_get_image_src($image['ID'], 'pgallery');  
                      echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                      if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                          echo wp_get_attachment_image( $image['ID'], 'pgallery' );
                      if( $lightbox ) echo "</a>";
                      echo "</div></figure>";
                      endforeach;
                    echo "</div></div>";
                    endif;      
                  }elseif( get_row_layout() == 'usps' ){
                    $fc_usps = get_sub_field('upssec');
                    echo "<div class='dfp-grd-slider-ctlr dfp-grd-slider-ctlr-1'>";
                    echo '<span class="slide-prev-btn"></span><span class="slide-next-btn"></span>';
                    echo '<div class="dfp-grd-slider dfp-grd-slider-1 xs-pagi-ctrl">';
                      foreach( $fc_usps as $usp ):
                        echo '<div class="dfp-grd-slide-item"><div class="dfp-grd-slide-item-inner matchHeightCol">';
                          echo '<div class="dfp-grd-slide-item-img">';
                          echo wp_get_attachment_image( $usp['afbeelding'] );
                          echo "</div>";
                          if(!empty($usp['beschrijving'])) echo wpautop( $usp['beschrijving'] );
                        echo "</div></div>";
                      endforeach;
                    echo "</div></div>";
                  }elseif( get_row_layout() == 'quote' ){
                    $fc_naam = get_sub_field('fc_naam');
                    $fc_diensten = get_sub_field('fc_quote');
                    echo "<div class='dfp-blockquote'><div class='dfp-blockquote-inner'>";
                    printf('<blockquote>%s</blockquote>', $fc_diensten);
                    printf('<strong>- %s</strong>', $fc_naam);
                    echo "</div></div>";
                  }elseif( get_row_layout() == 'video' ){
                    $icon = '<i><img src="'.THEME_URI.'/assets/images/play-btn-icon-white-lg.svg"></i>';
                    $fc_videolink = get_sub_field('video_url');
                    $fc_videoposter = '';
                    if(get_sub_field('video_afbeelding')){
                      $fc_videoposter = cbv_get_image_tag(get_sub_field('video_afbeelding'), 'vdimg2');
                    }
                    echo "<div class='dfp-fancy-bx'><div class='video-play'>";
                    if(!empty($fc_videolink)):
                    printf('<a data-fancybox="" href="%s">%s%s</a>', $fc_videolink, $icon, $fc_videoposter );
                    else: 
                      echo $fc_videoposter;
                    endif;
                    echo "</div></div>";
                  }elseif( get_row_layout() == 'ourcommunity' ){
                    $fc_title = get_sub_field('titel');
                    $fc_knop = get_sub_field('knop');
                    echo "<div class='dft-join-the-community'><div class='dft-join-the-community-inner clearfix'>";
                    printf('<h3>%s</h3>', $fc_title);
                    printf('<div><a target="%s" href="%s">%s</a></div>', $fc_knop['target'], $fc_knop['url'], $fc_knop['title']);
                    echo "</div></div>";
                  }elseif( get_row_layout() == 'map' ){
                    echo '<div class="dft-map-module"><div class="dft-map-module-inner">';
                    echo '<strong>200.000 Users <span>in Europe</span></strong>';
                    echo '<div><img src="'.THEME_URI.'/assets/images/dft-map-img.jpg"></div>';
                    echo '</div></div>';
                  }elseif( get_row_layout() == 'tabel' ){
                    $fc_table = get_sub_field('fc_table');
                    cbv_table($fc_table);
                  }elseif( get_row_layout() == 'partners' ){
                    $fc_partners = get_sub_field('fc_partners');
                    $memQuery = new WP_Query(array(
                      'post_type' => 'partner',
                      'posts_per_page'=> -1,
                      'post__in' => $fc_partners
                    ));
                    if( $memQuery->have_posts() ):
                      echo '<div class="dfp-grd-slider-ctlr dfp-grd-slider-ctlr-2 "><span class="slide-prev-btn"></span><span class="slide-next-btn"></span><div class="dfp-grd-slider dfp-grd-slider-2 xs-pagi-ctrl">';
                        while($memQuery->have_posts()): $memQuery->the_post();
                          $partners = get_field('partners', get_the_ID());
                          $plogosrc = '';
                          if(!empty($partners['logo'])){
                              $plogosrc = $partners['logo'];
                          }
                          $pllink = $partners['knop'];
                          $knicon = $partners['knop_icon'];
                          $kniconhover = $partners['knop_hover_icon'];
                          $positie_icon = $partners['positie_icon'];
                          $plurl = '#';
                          if( is_array( $pllink ) &&  !empty( $pllink['url'] ) ){
                            $plurl = $pllink['url'];
                          }
                          $content = $partners['beschrijving'];
                          
                          if(!empty($positie_icon) && $positie_icon == 'right'){
                            $classiposition = 'dft-two-plate-des-col-rgt';
                          }else{
                            $classiposition = 'dft-two-plate-des-col-lft';
                          }
                        echo '<div class="dfp-grd-slide-item">';
                        echo '<div class="dfp-grd-slide-item-inner matchHeightCol">
                          <div class="dfp-grd-slide-item-img">
                            <a target="_blank" href="'.$plurl.'"><img src="'.$plogosrc.'" alt=""></a>
                          </div>
                          <a href="'.$plurl.'" target="_blank">'.get_the_title().'</a>
                        </div>
                        <div class="dft-two-plate-des-col '.$classiposition.' matchHeightCol">'.wpautop( $content ).'</p>';
                          if( is_array( $pllink ) &&  !empty( $pllink['url'] ) ){
                            printf('<a onMouseOver="this.style.background=url('.$kniconhover.')"
   onMouseOut="this.style.background=url('.$knicon.')" href="%s" target="%s">%s</a>', $pllink['url'], $pllink['target'], $pllink['title']); 
                          }
                        echo '</div></div>';
                          endwhile;

                      echo '</div></div>';
                    endif; wp_reset_postdata();
                  }elseif( get_row_layout() == 'afbeelding' ){
                    $fc_afbeelding = get_sub_field('fc_afbeelding');
                    if( !empty( $fc_afbeelding ) ){
                      printf('<div class="df-page-simage">%s</div>', cbv_get_image_tag($fc_afbeelding));
                    }
                  }elseif( get_row_layout() == 'gap' ){
                   $gap = get_sub_field('aantal_pixels');
                   printf('<div class="gap clearfix" data-value="'.$gap.'" data-md="10" data-xs="10" data-sm="10" data-xxs="10"></div>', $gap);
                  }
              endwhile;
              }
            ?>
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