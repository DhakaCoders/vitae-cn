<?php 
/*
  Template Name: Contact
*/
get_header('page'); 
$thisID = get_the_ID();

$title = get_field('titel', $thisID);
if(empty($ctitle)){
  $title = get_the_title($thisID);
}
$content = get_field('beschrijving', $thisID);
$shortcode = get_field('shortcode', $thisID);
?>
<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-form-wrp clearfix">
          <div class="contac-form-dsc">
            <?php 
              if( !empty( $title ) ) printf( '<h1>%s</h1>', $title); 
              if( !empty( $content ) ) echo wpautop($content);
            ?> 
          </div>
          <div class="contact-form">
            <?php if( !empty( $shortcode ) ) echo do_shortcode($shortcode); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of contact-form-sec-wrp -->


<section class="vt-community-we-sec position-rltv-10 contact-prd-btm">
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
              if( !empty( $newsletter['titel'] ) ) printf( '<h3>%s<i class="icon-heard"></i></h3>', $newsletter['titel']);  
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