<?php
/**
 * The template for displaying the primary navbar utils.
 * Contains:
 * Search Button
 * ( Woocommerce Cart Icon )
 * ( Sidenav Menu)
 */
?>
<div class="primary-nav__utils nav__utils col-auto" <?php czr_fn_echo('element_attributes') ?>>
    <ul class="nav utils flex-row flex-nowrap regular-nav">
      <?php
      if ( czr_fn_is_registered_or_possible( 'desktop_primary_search' ) ) {
        //导航栏搜索框模板
        czr_fn_render_template( 'header/parts/nav_search', array(
          'model_id' => 'desktop_primary_search',
          'model_args' => array(
            //全屏弹出框
            'search_toggle_class' => array( 'czr-overlay-toggle_btn' ),
	          //下拉菜单  luojunji
	          //'search_toggle_class'         => array( 'czr-dropdown' ),
	          //'search_toggle_attributes'    => 'data-aria-haspopup="true"',
	          //'has_dropdown'                => true,
	          //'search_form_container_class' => czr_fn_get_property( 'search_form_container_class' )
          )
        ) );
      }

      if ( czr_fn_is_registered_or_possible( 'desktop_primary_wc_cart' ) ) :
          //购物车模板
          czr_fn_render_template( 'header/parts/woocommerce_cart', array(
            'model_id'   => 'woocommerce_cart',
            'model_args' => array(
              'element_class' => array('nav__woocart', 'menu-item-has-children', 'czr-dropdown'),
            )
          ) );

      endif;

      if ( czr_fn_is_registered_or_possible( 'sidenav' ) ) :
          //菜单按钮模板（侧边弹出菜单）
          czr_fn_render_template( 'header/parts/menu_button', array(
            'model_args' => array(
              'data_attributes' => 'data-toggle="sidenav" aria-expanded="false"',
            )
          ) );
      endif;
      ?>
    </ul>
</div>