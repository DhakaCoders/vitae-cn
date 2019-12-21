<?php 
$thisID = get_the_ID();
  $showhidemedia = get_field('tonen_verbergen', $thisID);
  if($showhidemedia):
    $glcomm = get_field('global_about_community', $thisID);
?>
<section class="footer-top-dsc-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="footer-top-dsc-wrp">
          <div class="footer-top-dsc">
            <?php 
              if( !empty( $glcomm['titel'] ) ) printf( '<h3>%s</h3>', $glcomm['titel']);  
              if( !empty( $glcomm['beschrijving'] ) ) echo wpautop($glcomm['beschrijving']);
              $knop = $glcomm['knop'];
              if( is_array( $knop ) &&  !empty( $knop['url'] ) ){
                printf('<a href="%s" target="%s">%s</a>', $knop['url'], $knop['target'], $knop['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!--end of footer-top-dsc-sec-wrp  -->
<?php endif; ?>