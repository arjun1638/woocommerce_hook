/*
Hook to filter woocommerce product title
*/

function custom_woocommerce_product_title( $name, $instance ) { 
    /**Modify product name */
    return 'Hello'; 
}; 
add_filter( 'woocommerce_product_title', 'custom_woocommerce_product_title', 10, 2 ); 
