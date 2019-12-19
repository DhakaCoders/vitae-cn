<?php 
defined( 'ABSPATH' ) || exit;

/*Remove Archive Woocommerce Hooks & Filters are below*/

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );


remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/*Loop Hooks*/

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


/**
 * Add wc custom content wrapper
 */
add_action('woocommerce_before_main_content', 'get_custom_wc_output_content_wrapper', 10);
add_action('woocommerce_after_main_content', 'get_custom_wc_output_content_wrapper_end', 10, 1);

function get_custom_wc_output_content_wrapper(){
	if(is_shop()){ $customClass = ' wcarchive';}elseif(is_product()){$customClass = ' wcsingle';}else{ $customClass = '';}
	echo '<section class="wccontent-wrapper'.$customClass.'"><div class="container"><div class="row"><div class="col-sm-12"><div class="wccontent-inner clearfix">';
    if(!is_product()) put_woocommerce_search_sidebar_tag_start();
}

function get_custom_wc_output_content_wrapper_end(){
    if(!is_product()) put_woocommerce_search_sidebar_tag_end();

	echo '</div></div></div></div></section>';
    get_template_part('templates/footer', 'top');
}


/**
 * woo_hide_page_title
 *
 * Removes the "shop" title on the main shop page
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
add_filter( 'woocommerce_show_page_title' , 'woo_hide_shop_page_title' );
function woo_hide_shop_page_title() {
	return false;
}

/**
 * Change number or products per row to 3
 */
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}


/**
 * Add loop inner details are below
 */
add_action('woocommerce_shop_loop_item_title', 'add_shorttext_below_title_loop', 5);
if (!function_exists('add_shorttext_below_title_loop')) {
	function add_shorttext_below_title_loop() {
		global $product, $woocommerce, $post;
        $product_thumb = '';
        $thumb_id = get_post_thumbnail_id($product->get_id());
        if(!empty($thumb_id)){
            $product_thumb = cbv_get_image_src($thumb_id, 'woocommerce_thumbnail');
        }
        
        $term_obj_list = get_the_terms( $product->get_id(), 'product_cat' );
  		$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );
		echo '<div class="catalogue-image"><a href="'.get_permalink( $product->get_id() ).'">';
        echo '<div class="wcarchive-thumb" style="background:url('.$product_thumb.'); height:300px"></div>';

        echo '</a></div>';
        if ( $term_obj_list && ! is_wp_error( $term_obj_list ) ) : 
          printf('<h5>%s</h5>', join(', ', wp_list_pluck($term_obj_list, 'name')));
        endif;
		echo '<h4><a href="'.get_permalink( $product->get_id() ).'">'.get_the_title().'</a></h4>';
		echo '<div class="shorttext-loop">'.$short_description.'</div>';
		echo '<div class="moreproduct"><a href="'.get_permalink( $product->get_id() ).'">More Info</a></div>';
	}
}


function envy_stock_catalog() {
    global $product;

    if ($product->is_in_stock())//Stock is Available
    {
    if($product->get_stock_quantity() < 1 && $product->backorders_allowed()){ //Product is Out of Stock
       echo '<div class="out-of-stock" >' . __( 'Available on backorder', 'woocommerce' ) . '</div>';
    }
    }else{ //Product is out of stock AND DO NOT allow backorders
    echo '<div class="out-of-stock" >' . __( 'out of stock', 'woocommerce' ) . '</div>';
    }
}
add_action( 'woocommerce_after_shop_loop_item_title', 'envy_stock_catalog' );




/**
 * Archive sidebar tag start
 */
if (!function_exists('put_woocommerce_search_sidebar_tag_start')) {
	function put_woocommerce_search_sidebar_tag_start(){
		?>
<div class="row">
	<div class="col-sm-12">
		<div class="search-catalog clearfix">
		<?php 
			if (function_exists('get_woocommerce_search_catalog')){
				get_woocommerce_search_catalog();
			}
		?>
		</div>
	</div>
</div>
<div class="row">
<div class="col-sm-3">
	<div class="woosidebar-left">
		<?php 
			if (function_exists('get_woocommerce_custom_sideber')){
				get_woocommerce_custom_sideber();
			}
		?>
	</div>
</div>
<div class="col-sm-9">
<?php
}
}

/**
 *  Archive sidebar tag end
 */
if (!function_exists('put_woocommerce_search_sidebar_tag_end')) {
	function put_woocommerce_search_sidebar_tag_end(){
		echo '</div></div>';
	}
}

/**
 * Manage woocommerce sidebar here
 */
if (!function_exists('get_woocommerce_custom_sideber')) {
	function get_woocommerce_custom_sideber(){
        if ( is_active_sidebar( 'shop-widget' ) ) :
    		dynamic_sidebar('shop-widget');
        endif;
        echo '<div class="wccatalog sidebarcatalog show-xs">';
        _e( '<span>Sort By: </span>', 'woocommerce' ).
        woocommerce_catalog_ordering();
        echo '</div>';
	}

}



/**
 * Manage woocommerce search and catalog ordering here
 */
if (!function_exists('get_woocommerce_search_catalog')) {
	function get_woocommerce_search_catalog(){
		echo '<div class="wcsearch">';
		echo '<form role="search" method="get" class="woocommerce-product-search" action="'. esc_url( home_url( '/' ) ).'">
        <input type="search" class="search-field" placeholder="'. esc_attr__( 'Search products&hellip;', 'woocommerce' ).'" value="'. get_search_query() .'" name="s" />
        <button type="submit" value="'. esc_attr_x( 'Search', 'submit button', 'woocommerce' ).'">'. esc_html_x( 'Search', 'submit button', 'woocommerce' ).'</button>
        </form>';
		echo '</div><div class="wccatalog hide-xs">';
		_e( '<span>Sort By: </span>', 'woocommerce' ).
		woocommerce_catalog_ordering();
		echo '</div>';
	}
}


/**
* @snippet     Rename a Default Sorting Option @ WooCommerce Shop
*/
 
add_filter( 'woocommerce_catalog_orderby', 'bbloomer_rename_sorting_option_woocommerce_shop' );
 
function bbloomer_rename_sorting_option_woocommerce_shop( $options ) {
   $options['price'] = __( 'Price: Ascending', 'woocommerce' );   
   $options['price-desc'] = __( 'Price: Descending', 'woocommerce' );   
   return $options;
}

add_filter( 'woocommerce_catalog_orderby', 'bbloomer_remove_sorting_option_woocommerce_shop' );
 
function bbloomer_remove_sorting_option_woocommerce_shop( $options ) {
   unset( $options['menu_order'] );   
   unset( $options['popularity'] );   
   unset( $options['rating'] );   
   unset( $options['date'] );   
   return $options;
}

/*Remove Single page Woocommerce Hooks & Filters are below*/

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


add_action( 'woocommerce_single_product_summary', 'get_wc_product_desctiption', 10, 1 );
function get_wc_product_desctiption(){
	global $product, $post;
    // Get the prices
    $prefix = '';
    if( $product->is_type('variable') ) $prefix = __( '<span class="price-prefix">Starting at </span>', 'woocommerce' );
	$short_description = apply_filters( 'woocommerce_description', wpautop( $post->post_content, true ));
	$output = '';
	$output .= '<div class="wcprice">';
	$output .= $prefix.'<span class="price">'. $product->get_price_html().'</span>';
	$output .= '</div>';
	$output .= '<div class="wcdetails">';
	$output .= __( '<h2>Description</h2>', 'woocommerce' );
    $output .= $short_description;
	$output .= '<div class="wcdetailsbtn"><a href="#">More Info</a><a href="#">Less Info</a></div>';
	$output .= '</div>';
	echo $output;
}

add_action('woocommerce_single_product_summary','show_stock_single',10, 2);
function show_stock_single() {
  global $product;

  if ($product->is_in_stock())//Stock is Available
  {
    if($product->get_stock_quantity() < 1 && $product->backorders_allowed()){ //Product is Out of Stock
       echo '<div class="obackorder-single" >' . __( 'Available on backorder', 'woocommerce' ) . '</div>';
    }
  }
}

add_action( 'woocommerce_single_product_summary', 'get_wc_gellary_video_proposle_content', 40, 1 );
function get_wc_gellary_video_proposle_content(){
	global $product, $post;
	$output = '';
	$output .= '<div class="gellery-wrapper clearfix">';
	$output .= '<div class="video-inner">';
	$output .= get_product_gallery_video();
	$output .= '</div>';
	$output .= '<div id="galleryToScroll" class="gellery-inner">';
	$output .= get_product_thumbnail_images();
	$output .= '</div>';
	$output .= get_product_request_offer();
	$output .= '</div>';
	echo $output;
}


function get_product_gallery_video(){
	global $product;
	$output = '';
	$output .= '<div class="singlePage-vdo-wrp art-video"><div class="video-play-wrap"><div class="video-play-main">';
    $output .= '<a class="img-zoom" data-fancybox="article" href="https://www.youtube.com/watch?v=b4Yx9eHfsuc">
                <i><img src="'.THEME_URI.'/assets/images/vplay.svg"></i>
                <div class="wcgvideo-thumbnail" style="background: url('.THEME_URI.'/assets/images/video-g.png); height: 360px"></div>
                </a>';
     $output .= '</div></div></div>';
	
	return $output;
}




function get_product_thumbnail_images(){
	if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
		return;
	}

	global $product;

	$attachment_ids = $product->get_gallery_image_ids();
	$output = '';
	if ( $attachment_ids && $product->get_image_id() ) {
        $output .= __( '<h2>Gallery</h2>', 'woocommerce' );
		$output .= '<ul>';
		foreach ( $attachment_ids as $attachment_id ) {
            $thumb_src = cbv_get_image_src($attachment_id, 'prodgallery');
			$full_src = cbv_get_image_src($attachment_id);
            $output .= '<li><a href="'.$full_src.'" data-fancybox="gallery">';
            $output .= '<div><div class="wcgallery-thumbnail" style="background: url('.$thumb_src.'); height: 152px"></div></div>';
			$output .= '</a></li>';
		}
		$output .= '</ul>';
	}
	return $output;
}

function get_product_request_offer(){
	global $product;
	$output = '';
	$output = '<div class="requestoffer-inner">';
	$output .= '<h3>Need a custom proposal?</h3>';
	$output .= '<p>Proin est risus, convallis nec magna sed, semper consequat est.</p>';
	$output .= '<a class="requestbtn" href="#">Request an offer</a>';
	$output .= '</div>';
	
	return $output;
}



add_action( 'woocommerce_admin_process_product_object', 'save_product_custom_meta_data', 100, 1 );
function save_product_custom_meta_data( $product ){
    if ( isset( $_POST['_repair_price'] ) )
        $product->update_meta_data( '_repair_price', sanitize_text_field($_POST['_repair_price']) );
}

// Front: Add a text input field inside the add to cart form on single product page
add_action('woocommerce_single_product_summary','add_repair_price_option_to_single_product', 20 );
function add_repair_price_option_to_single_product(){
    global $product;

    if( !$product->is_type('variable') ) return;

    add_action('woocommerce_before_add_to_cart_button', 'product_option_custom_field', 30 );
}

function product_option_custom_field(){
    global $product, $woocommerce;

// variation regular price
if($product->is_type('variable')){
    //$sale_price     =  $product->get_variation_sale_price( 'min', true );
    $regular_price  =  $product->get_variation_regular_price();
}


$wo_currency = get_woocommerce_currency_symbol();
$wo_decimals = wc_get_price_decimals();
$wo_separator = wc_get_price_thousand_separator();

$active_price = (float) $product->get_price();

$attributes = $product->get_attributes(); //get all attributes
$attrVariation = $product->get_variation_attributes(); //get variation attributes
$pa_capacity = get_the_terms( $product->get_id(), 'pa_capacity');
$onlyAttr = array_diff_key($attributes, $attrVariation); //get attribues that are not used for variation
$onlyAttrK = array_keys($onlyAttr); //keys -> pa_capacity, pa_color

echo '<div class="custom_attribues_wrapper clearfix" data-currency="'.$wo_currency.'" data-decimals="'.$wo_decimals.'" data-separator="'.$wo_separator.'" data-pvariation="'.$regular_price.'">';
echo '<span class="clearoptions" style="display:none">Clear Options</span>';
$j = 1;
foreach ( $onlyAttrK as $onlyAttrKS ) {
    echo '<div class="hidden-field additionalPriceWrap">';
    $terms = get_taxonomy( $onlyAttrKS ); //get this texonomy data
    $onlyAttrKSterms = get_the_terms( $product->get_id(), $onlyAttrKS); // get all the child terms
    echo '<span class="wcoptioanl">'.$terms->labels->singular_name.'</span>';
    echo '<p class="form-row form-row-wide" data-priority="">';
    $i = 1;
    foreach ( $onlyAttrKSterms as $term ) {
    //printr($term);
      $term_id = $term->term_id;
      $name = $term->name;
      $acf = 'term_' . $term_id;
      $markup = get_field('price', $acf);
        echo '<div class="woocommerce-input-wrapper">';
        echo '<input type="radio" id="optional-'.$i.$j.'" class="input-checkbox" data-label="'.$name.': + '.$wo_currency.$markup.'" name="'.$onlyAttrKS.'" value="'.$markup.'">';
        echo '<label for="optional-'.$i.$j.'" class="checkbox customCheckbox">'.$name.'</label>';
        echo '<span>+ '.wc_price($markup).'</span>';
        echo '</div>';
    $i ++; 
    }
    echo '</p>';
    echo '</div>';
    $j ++;
}
echo '<input id="additionalPrice" type="hidden" name="additionalPrice" value="0">';
echo '<input id="additionalLabel" type="hidden" name="additionalLabel" value="">';
echo '<input id="prPrice" type="hidden" name="active_price" value="' . $active_price . '">';
echo '</div>';

    // Jquery: Update displayed price
    ?>
    <script type="text/javascript">
    jQuery(function($) {
        var pp = 'div.wcprice span.price';
        var pvr = '#wcvariation-price';
        var pvariation = 0;

        var currency = $('.custom_attribues_wrapper').data('currency');
        var decimals = $('.custom_attribues_wrapper').data('decimals');
        var separator = $('.custom_attribues_wrapper').data('separator');
        
        pvariation = parseInt($('.custom_attribues_wrapper').data('pvariation'));
        // when variation is found, do something
        $('.variations_form').on( 'found_variation', function( event, variation ) {
                pvariation = parseInt(variation['display_regular_price']); 
                var addTotalV = parseInt($('#additionalPrice').val());
                addTotalV = formatPrice(addTotalV + pvariation, decimals, separator);
                $(pvr).html('<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'+currency+'</span>'+addTotalV+'</span></span>');

        });

        //console.log(pvariation);
        $('.additionalPriceWrap input').on('change', function(){
            var addTotal = 0;
            var Labeltext = '';
            $('.clearoptions').show();
            $('.additionalPriceWrap input').each(function(){
                if( $(this).prop('checked') === true ){
                    addTotal += parseInt($(this).val());
                    Labeltext += $(this).data('label')+', ';
                    $(this).addClass("theone");
                }
            });
            //console.log(Labeltext);
            var prRegPrice = parseInt($('#prPrice').val());
            var prTotal = prRegPrice + addTotal;

            prTotal = formatPrice(prTotal, decimals, separator);
            var prvTotal = formatPrice(addTotal + pvariation, decimals, separator);
            

            $('#additionalPrice').val(addTotal);
            $('#additionalLabel').val(Labeltext);
            $(pp).html('<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'+currency+'</span>'+prTotal+'</span>');
            $(pvr).html('<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'+currency+'</span>'+prvTotal+'</span></span>');
        });
$(".custom_attribues_wrapper .clearoptions").on("click",function (e) {
    var revarPrice = formatPrice(pvariation, decimals, separator);
    //console.log(revarPrice);
    var inp=$('.additionalPriceWrap input:radio'); //cache the selector
    if (inp.is(".theone")) { //see if it has the selected class
        inp.prop("checked",false).removeClass("theone");
        $(pvr).html('<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">'+currency+'</span>'+revarPrice+'</span></span>');
        return;
    }
});
/*        $(".additionalPriceWrap input:radio").on("click",function (e) {
            var inp=$(this); //cache the selector
            if (inp.is(".theone")) { //see if it has the selected class
                inp.prop("checked",false).removeClass("theone");
                return;
            }
            $(".additionalPriceWrap input:radio[name='"+inp.prop("name")+"'].theone").removeClass("theone");
            inp.addClass("theone");
        });*/

    });

    function formatPrice(pricetotal, decimals, separator){
        //var valueString="1500"; //can be 1500.0 or 1500.00 
        var formatAmount=parseFloat(pricetotal).toFixed(decimals);
        return formatAmount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, separator);
    }
    </script>
    <?php
}

// Front: Calculate new item price and add it as custom cart item data
add_filter('woocommerce_add_cart_item_data', 'add_custom_product_data', 10, 3);
function add_custom_product_data( $cart_item_data, $product_id, $variation_id ) {
    if (isset($_POST['additionalPrice']) && !empty($_POST['additionalPrice']) ) {
        $cart_item_data['new_price'] = (float) ($_POST['active_price'] + $_POST['additionalPrice']);
        $cart_item_data['additionalPrice'] = (float) $_POST['additionalPrice'];
        $cart_item_data['active_price'] = (float) $_POST['active_price'];

        $cart_item_data['repair_lebel'] = $_POST['additionalLabel'];

        $cart_item_data['unique_key'] = md5(microtime().rand());
    }

    return $cart_item_data;
}

// Front: Set the new calculated cart item price
add_action('woocommerce_before_calculate_totals', 'extra_price_add_custom_price', 20, 1);

function extra_price_add_custom_price($cart) {
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

    foreach($cart->get_cart() as $cart_item) {
        if (isset($cart_item['new_price']))
            $cart_item['data']->set_price((float) $cart_item['new_price']);
    }
}

// Front: Display option in cart item
add_filter('woocommerce_get_item_data', 'display_custom_item_data', 10, 2);

function display_custom_item_data($cart_item_data, $cart_item) {
    if (isset($cart_item['additionalPrice']) && isset($cart_item['repair_lebel'])) {
        $labelexpArray = explode(', ', $cart_item['repair_lebel']);
        $labelfilter = array_filter($labelexpArray, 'strlen');

        if(is_array($labelfilter) && !empty($labelfilter)){
            $i = 1;
            foreach ($labelfilter as $key => $value) {
                $cart_item_data[] = array(
                    'name' => __("Optional ".$i, "woocommerce"),
                    'value' => strip_tags($value)
                );

                $i++;
            }

        }

        
    }

    return $cart_item_data;
}




//add_action('woocommerce_order_item_meta_start', 'add_custom_order_item_meta_data', 1, 3 );
function add_custom_order_item_meta_data( $item_id, $values, $cart_item ) {

    global $order;

    echo wc_get_order_item_meta( $item_id, 'optional', $single = true );

}


// Save and display custom fields in order item meta
add_action( 'woocommerce_add_order_item_meta', 'add_custom_fields_order_item_meta', 20, 3 );
function add_custom_fields_order_item_meta( $item_id, $cart_item, $cart_item_key ) {
	$wo_currency = get_option('woocommerce_currency');
        $user_custom_values = $cart_item['repair_lebel'].': +'.$wo_currency.$cart_item['repair_price'];


    if (isset($cart_item['repair_lebel'])) {
        $labelexpArray = explode(', ', $cart_item['repair_lebel']);
        $labelfilter = array_filter($labelexpArray, 'strlen');

        if(is_array($labelfilter) && !empty($labelfilter)){
            $i = 1;
            foreach ($labelfilter as $key => $value) {
                 wc_add_order_item_meta($item_id,"Optional ".$i, strip_tags($value));  

                $i++;
            }

        }

        
    }

}




/*Checkout Woocommerce Hooks*/

//remove_action( 'woocommerce_checkout_order_review', 'woocommerce_order_review', 10 );
//remove_action( 'woocommerce_proceed_to_checkout','woocommerce_button_proceed_to_checkout', 20);
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 ); 

function get_woocommerce_custom_cart(){
	get_template_part( 'woocommerce/checkout/review', 'order' );
}



function ship_to_different_address_translation( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
	case 'Ship to a different address?' :
		$translated_text = __( 'Where is the equipment installed?', 'woocommerce' );
	break;
	case 'Billing details' :
		$translated_text = __( 'Personal Info', 'woocommerce' );
	break;
	case 'Cart totals' :
		$translated_text = __( '', 'woocommerce' );
	break;
    case 'Product successfully added to your cart' :
        $translated_text = __( 'Added to cart.', 'woocommerce' );
    break;
    case 'Place order' :
        $translated_text = __( 'CHECKOUT', 'woocommerce' );
    break;
	}

	return $translated_text;
}

add_filter('gettext', 'ship_to_different_address_translation', 20, 3);



/**
 * @snippet       Add Inline Field Error Notifications @ WooCommerce Checkout
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=86570
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.5.6
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
//add_filter( 'woocommerce_form_field', 'bbloomer_checkout_fields_in_label_error', 10, 4 );
 
function bbloomer_checkout_fields_in_label_error( $field, $key, $args, $value ) {
   if ( strpos( $field, '</span>' ) !== false && $args['required'] ) {
      $error = '<span class="error" style="display:none">';
      $error .= sprintf( __( '%s is a required field. %s', 'woocommerce' ), $args['label'], var_dump($args['validate']) );
      $error .= '</span>';
      $field = substr_replace( $field, $error, strpos( $field, '</span>' ), 0);
   }
   return $field;
}



//add_action('init', 'ajax_cart_action' );

function ajax_cart_action(){
    wp_register_script('ajax-cart-script', THEME_URI. '/assets/js/ajax-action.js', array('jquery') );
    wp_enqueue_script( 'ajax-cart-script' );
    wp_localize_script( 'ajax-cart-script', 'ajax_cart_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
    // Enable the user with no privileges to run ajax_login() in AJAX
    add_action( 'wp_ajax_view_cart', 'ajax_view_cart' );
    add_action( 'wp_ajax_nopriv_view_cart', 'ajax_view_cart' );
}
function ajax_view_cart(){
    if ( isset( $_POST["check_cart"] ) && $_POST["check_cart"] == 1 ) {
        get_woocommerce_custom_cart();
    }
}
