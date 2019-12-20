<?php 
get_header(); 
$thisID = get_the_ID();

?>
<section class="innerpage-con-wrap">
  <div class="container-sm">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
            <?php 
              if(have_rows('inhoud')){ 
              while ( have_rows('inhoud') ) : the_row(); 
                if( get_row_layout() == 'introductietekst' ){
                    $title = get_sub_field('titel');
                    $afbeelding = get_sub_field('afbeelding');
                    echo '<div class="dfp-promo-module clearfix">';
                      if( !empty($title) ) printf('<h1>%s</h1>', $title);
                      if( !empty($afbeelding) ){
                        echo '<div class="dfp-plate-one-img-bx">', cbv_get_image_tag($afbeelding), '</div>';
                      }
                    echo '</div>';    
                }elseif( get_row_layout() == 'teksteditor' ){
                    $beschrijving = get_sub_field('fc_teksteditor');
                    echo '<div class="dfp-text-module clearfix">';
                      if( !empty( $beschrijving ) ) echo wpautop($beschrijving);
                    echo '</div>';    
                  }elseif( get_row_layout() == 'afbeelding_tekst' ){
                    $fc_afbeelding = get_sub_field('fc_afbeelding');
                    $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
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
                    $gallery_cn = get_sub_field('afbeeldingen');
                    $lightbox = get_sub_field('lightbox');
                    $kolom = get_sub_field('kolom');
                    if( $gallery_cn ):
                    echo "<div class='gallery-wrap clearfix'><div class='gallery gallery-columns-{$kolom}'>";
                      foreach( $gallery_cn as $image ):
                      $imgsrc = cbv_get_image_src($image['ID'], 'dfpageg1');  
                      echo "<figure class='gallery-item'><div class='gallery-icon portrait'>";
                      if( $lightbox ) echo "<a data-fancybox='gallery' href='{$image['url']}'>";
                          echo wp_get_attachment_image( $image['ID'], 'dfpageg1' );
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
                    echo "<div class='dft-blockquote'><div class='dfp-blockquote-inner'>";
                    printf('<blockquote>%s</blockquote>', $fc_diensten);
                    printf('<strong>- %s</strong>', $fc_naam);
                    echo "</div></div>";
                  }elseif( get_row_layout() == 'video' ){
                    $icon = '<i><img src="'.THEME_URI.'/assets/images/play-btn-icon-white-lg.svg"></i>';
                    $fc_videolink = get_sub_field('video_url');
                    $fc_videoposter = '';
                    if(get_sub_field('video_afbeelding')){
                      $fc_videoposter = cbv_get_image_tag(get_sub_field('video_afbeelding'));
                    }
                    echo "<div class='dfp-fancy-bx'><div class='video-play'>";
                    printf('<a data-fancybox="" href="%s">%s%s</a>', $fc_videolink, $icon, $fc_videoposter );
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
                  }elseif( get_row_layout() == 'product' ){
                    $fc_product = get_sub_field('fc_product');
                    $memQuery = new WP_Query(array(
                      'post_type' => 'product',
                      'posts_per_page'=> -1,
                      'post__in' => $fc_product
                    ));
                    if( $memQuery->have_posts() ):
                      echo '<div class="dft-2grd-img-content clearfix"><div class="dft2grdImgConSlider">';
                              while($memQuery->have_posts()): $memQuery->the_post();
                              $gridImage = get_post_thumbnail_id(get_the_ID());
                              if(!empty($gridImage)){
                                $pimgScr = cbv_get_image_src($gridImage, 'pgprodgrid');
                              }else{
                                $pimgScr = '';
                              }  
                              $term_obj_list = get_the_terms( get_the_ID(), 'product_cat' );
                              echo '<div class="dft-2grd-img-con-item-col">';
                              echo '<div class="dft-img-col-hover-scale">
                                <a class="overlay-link" href="'.get_the_permalink().'"></a>';
                              echo '<div class="dft-2grd-img-con-item-img" style="background-image: url('.$pimgScr.');"></div></div>';
                              echo '<div class="dft-2grd-img-con-item-des">';
                              if ( $term_obj_list && ! is_wp_error( $term_obj_list ) ) : 
                                printf('<strong>%s</strong>', join(', ', wp_list_pluck($term_obj_list, 'name')));
                              endif;
                              printf('<h4><a href="%s">%s</a></h4>', get_the_permalink(), get_the_title());
                              echo wpautop( get_the_excerpt(), true );;
                              echo '<a href="'.get_the_permalink().'">More Info <em><img src="'.THEME_URI.'/assets/images/list-icon.svg"></em></a>';
                              echo '</div>';
                              echo '</div>';
                          endwhile;

                      echo '</div></div> <div class="dft-2grd-img-content-separetor"></div>';
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
        </article>
      </div>
    </div>
  </div>
</section>

<section class="footer-top-dsc-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="footer-top-dsc-wrp">
          <div class="footer-top-dsc">
            <h3>More about our social media platform</h3>
            <p>Nunc vel vehicula ligula, at consequat libero. Aenean ultricies sagittis urna a gravida. Quisque aliquet ante ac ullamcorper rutrum. Nullam a ligula quis risus interdum faucibus. Sed facilisis convallis nunc, et ullamcorper erat. Cras non blandit diam, bibendum tristique diam. Pellentesque facilisis justo sit amet dui semper elementum.</p>
            <a href="#">More About Our Socail Media</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!--end of footer-top-dsc-sec-wrp  -->
<?php get_footer(); ?>