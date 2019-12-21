<?php 
/*
  Template Name: FAQ
*/
get_header(); 
$thisID = get_the_ID();

$title = get_field('titel', $thisID);
if(empty($ctitle)){
  $title = get_the_title($thisID);
}
$content = get_field('beschrijving', $thisID);
$shortcode = get_field('shortcode', $thisID);
?>
<section class="faq-overview-sec-wrp">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="vt-sec-hdr">
            <a>Learn More</a>
            <h1>Frequently Asked Questions</h1>
            <p>Nunc vel vehicula ligula, at consequat libero. Aenean ultricies sagittis urna a gravida. Quisque aliquet ante ac ullamcorper rutrum. Nullam a ligula quis risus interdum faucibus. Sed facilisis convallis nunc, et ullamcorper erat. Cras non blandit diam, bibendum tristique diam. Pellentesque facilisis justo sit amet dui semper elementum.</p>
          </div>
        </div>
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $Query = new WP_Query(array( 
                    'post_type'=> 'faqs',
                    'post_status' => 'publish',
                    'posts_per_page' => 1,
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