<?php
/**
 * The template for displaying product content in the single-product.php template
 */
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

?>


  <div>

      <div class="container dark-grey-text">
          <div class="row">
              <div class="col-md-6 mb-4">

              <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
              ?>
              </div>
              <div class="col-md-6 mb-4">
              <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                do_action( 'woocommerce_single_product_summary' );
              ?>
            </div>
          </div>
      </div>
          <hr>
          <?php if (wc_get_related_products(get_the_ID())) {  ?>

          <div class="row">
            <?php
              /**
               * Hook: woocommerce_after_single_product_summary.
               *
               * @hooked woocommerce_output_product_data_tabs - 10
               * @hooked woocommerce_upsell_display - 15
               * @hooked woocommerce_output_related_products - 20
               */
              do_action( 'woocommerce_after_single_product_summary' );
            ?>
          </div>
          <?php } ?>

  </div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
