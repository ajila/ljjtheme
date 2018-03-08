<div class="mobile-nav__container <?php czr_fn_echo('element_class') ?>" <?php czr_fn_echo('element_attributes') ?>>
   <nav class="mobile-nav__nav flex-column czr-collapse" id="mobile-nav">
      <div class="mobile-nav__inner <?php czr_fn_echo( 'inner_elements_class' ) ?>">
      <?php
        if ( czr_fn_is_registered_or_possible( 'mobile_menu_search' ) ) {
          //下拉菜单形式的搜索表单模板
          czr_fn_render_template( 'header/parts/search_form', array(
            'model_id'   =>  'mobile_menu_search',
            'model_args' => array(
              'element_tag'          => 'div',
            )
          ) );
        }
        if ( czr_fn_is_registered_or_possible('mobile_menu') ) {
          //菜单模板
          czr_fn_render_template( 'header/parts/menu', array(
            'model_id'   =>  'mobile_menu',
          ) );
        };
      ?>
      </div>
  </nav>
</div>