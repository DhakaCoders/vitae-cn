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
            <div class="community-we-hdr">
              <h3><span>The community we</span></h3>
              <p>Subscribe to our mailing list, get the latest news. </p>
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
            <div class="subscribe-cmnt text-center">
              <img src="<?php echo THEME_URI; ?>/assets/images/Subscribe.png">
            </div>
          </div>
        </div>
    </div>    
  </section>
<?php get_footer(); ?>