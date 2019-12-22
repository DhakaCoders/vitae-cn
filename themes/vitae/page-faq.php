<?php 
/*
  Template Name: FAQ
*/
get_header('page'); 
$thisID = get_the_ID();
?>
<section class="faq-overview-sec-wrp">
  <div class="container">
      <div class="row">
        <?php 
        $intro = get_field('intro', $thisID);
        if($intro):
        ?>
        <div class="col-sm-12">
          <div class="vt-sec-hdr">
            <?php 
              if( !empty( $intro['subtitel'] ) ) printf( '<a>%s</a>', $intro['subtitel']);  
              if( !empty( $intro['titel'] ) ) printf( '<h1>%s</h1>', $intro['titel']);  
              if( !empty( $intro['beschrijving'] ) ) echo wpautop($intro['beschrijving']);
            ?>
          </div>
        </div>
        <?php
        endif; 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $Query = new WP_Query(array( 
                    'post_type'=> 'faqs',
                    'post_status' => 'publish',
                    'posts_per_page' => 8,
                    'paged' => $paged,
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
          </div>
        </div>
        <div class="col-sm-12">
          <div class="faq-pagination-wrp">
            <?php 
              if( $Query->max_num_pages > 1 ):
              $big = 999999999; // need an unlikely integer
              echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $Query->max_num_pages,
                'type'  => 'list',
                'show_all' => true,
                'prev_next' => false
              ) );
              endif; 
            ?>
          </div>
        </div>
        <?php endif;wp_reset_postdata(); ?>
      </div>
  </div>    
</section><!-- end of faq-overview-sec-wrp -->
<?php 
get_template_part( 'templates/more-about', 'community' );
get_footer(); 
?>