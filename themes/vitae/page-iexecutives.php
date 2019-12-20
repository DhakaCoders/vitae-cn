<?php 
get_header();
get_template_part('templates/page', 'banner');
?>

<?php 
if( have_rows('inhoud') ):
?>
<section class="innerpage-con-wrap">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <article class="default-page-con">
          <div class="default-page-con-top">
<?php 
while ( have_rows('inhoud') ) : the_row();
	if( get_row_layout() == 'introductietekst' ){
		$title = get_sub_field('titel');
		$beschrijving = get_sub_field('fc_introductietekst');
		$afbeelding = get_sub_field('afbeelding');
		echo '<div class="dfp-promo-module clearfix">';
			if( !empty($title) ) printf('<h1>%s</h1>', $title);
			if( !empty($beschrijving) ) printf('<strong>%s</strong>', $beschrijving);
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
		$imgsrc = cbv_get_image_src($fc_afbeelding, 'ipgrid1');
		$fc_tekst = get_sub_field('fc_tekst');
		$positie_afbeelding = get_sub_field('positie_afbeelding');
		$kleur = get_sub_field('kleur');
		if( !$kleur ){
		echo '<div class="nb-dft-overflow-controller imgpos-'.$positie_afbeelding.'"><div class="nb-dft-lftimg-rgtdes equalHeight clearfix">';
            echo '<div class="nb-dft-lftimg-rgtdes-lft equalHeightCol" style="background: url('.$imgsrc.');"></div>';
            echo '<div class="nb-dft-lftimg-rgtdes-rgt equalHeightCol">';
            	echo wpautop($fc_tekst);
            echo '</div>';
		echo '</div></div>';
		}else{
			echo '<div class="iex-two-plate-grid-wrp clearfix imgpos-'.$positie_afbeelding.'">
				<div class="iex-two-plate-grid-lft-img" style="background:url('.$imgsrc.');">
					'.cbv_get_image_tag($fc_afbeelding, 'ipgrid1').'
				</div>
				<div class="iex-two-plate-grid-rgt-dsc">'.wpautop($fc_tekst).'</div>
			</div>';		
		}
	}elseif( get_row_layout() == 'manager' ){
		$fc_manager = get_sub_field('fc_manager');
		$imansQuery = new WP_Query(array(
		'post_type' => 'managers',
		'post__in'  => $fc_manager
		));
	    if( $imansQuery->have_posts() ):	
		echo '<div class="iex-two-part-post-wrp clearfix">';
		while($imansQuery->have_posts()): $imansQuery->the_post();
		  $pID = get_the_ID();	
		  $diensten = get_field('diensten');
		  $first = reset($diensten);
		  $post_title = $first->post_title;
		  $positie = get_field('positie');
		  $post_thumbnail_id = get_post_thumbnail_id();
		  if($post_thumbnail_id) $imgSrc = cbv_get_image_src($post_thumbnail_id, 'manager'); else $imgSrc = THEME_URI.'/assets/images/mavater.jpg';
		  $term_list = wp_get_post_terms(get_the_ID(), 'managers_group', array("fields" => "slugs"));
		echo '<div class="it-management-info-dsc-inr">
		  <div class="mng-img-holder">
		    <div class="it-management-info-img" style="background: url('.$imgSrc.');">
		        <a class="overlay-link" href="'.get_the_permalink().'"></a>
		    </div>
		  </div>
		  <div class="it-management-info-dsc">
		    <h5>'.get_the_title().'</h5>
		    <strong>'.$positie.'</strong>';
		    if( is_array( $diensten ) ): foreach( $diensten as $line ):
		    echo '<span>'.$line->post_title.'</span>';
		    endforeach; endif;
		    echo '<div class="general-icon-holder">
		    <a class="general-icon" href="'.get_the_permalink().'"><i><img src="'.THEME_URI.'/assets/images/zero-icon.svg"></i><span>'.__('Meer Info', 'iexceutives').'</span></a>
		    </div>
		  </div>
		</div>';
		endwhile;
		echo '</div>';
		endif; wp_reset_postdata(); wp_reset_query();		
	}elseif( get_row_layout() == 'quote' ){
		$fc_quote = get_sub_field('fc_quote');
		echo '<div class="dft-blockquote-module">
		  <blockquote>'.$fc_quote.'</blockquote>
		</div>';
	}elseif( get_row_layout() == 'tabel' ){
		$fc_table = get_sub_field('fc_table');
		if( !empty( $fc_table ) )
			cbv_table($fc_table);
	}elseif( get_row_layout() == 'afbeelding' ){
		$fc_afbeelding = get_sub_field('fc_afbeelding');
		$imgSrc = cbv_get_image_src($fc_afbeelding);
		echo '<div class="pageimageblock">';
		    echo '<div class="pageimagesrc" style="background: url('.$imgSrc.'); display: none;"></div>';
		    echo cbv_get_image_tag($fc_afbeelding);
		echo '</div>';
	}
endwhile;
?>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
get_footer(); 
?>