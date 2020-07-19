<?php
	
	$multipurpose_magazine_first_theme_color = get_theme_mod('multipurpose_magazine_first_theme_color');

	$multipurpose_magazine_custom_css = '';

	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .=' #footer input[type="submit"], #sidebar .tagcloud a:hover, input[type="submit"], .nav-menu ul ul a, #header .menu-sec, .text .know-btn a.blogbutton-small, .owl-carousel .owl-nav .owl-prev, .owl-carousel .owl-nav .owl-next, #categry .meta-box a, .blog-sec .post-info, h1.page-title, h1.search-title, #top-trending .trending-cat .top-tag a, .blogbtn a, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], pagination .current, span.meta-nav, .tags a:hover,#comments a.comment-reply-link, a.button, .pagination a:hover, .back-to-top, .woocommerce-product-search button, .pagination .current, .woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
			$multipurpose_magazine_custom_css .='background-color: '.esc_html($multipurpose_magazine_first_theme_color).';';
		$multipurpose_magazine_custom_css .='}';
	}
	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .=' .woocommerce .widget_shopping_cart .buttons a:hover, .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover{';
			$multipurpose_magazine_custom_css .='background-color: '.esc_html($multipurpose_magazine_first_theme_color).' !important;';
		$multipurpose_magazine_custom_css .='}';
	}
	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .='  a, .logo h1 a:hover, .contact-details i, .footerinner ul li a:hover, .woocommerce-message::before,  span.post-title, .logo h1 a, .logo p.site-title a, .tags a i, .nav-menu ul ul a:hover{';
			$multipurpose_magazine_custom_css .='color: '.esc_html($multipurpose_magazine_first_theme_color).';';
		$multipurpose_magazine_custom_css .='}';
	}
	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .=' #top-trending h2, #top-trending hr.top-head , .woocommerce-message, .tags a:hover, .nav-menu ul ul{';
			$multipurpose_magazine_custom_css .='border-color: '.esc_html($multipurpose_magazine_first_theme_color).';';
		$multipurpose_magazine_custom_css .='}';
	}
	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .=' .nav-menu ul ul a:hover{';
			$multipurpose_magazine_custom_css .='border-left-color: '.esc_html($multipurpose_magazine_first_theme_color).';';
		$multipurpose_magazine_custom_css .='}';
	}
	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .=' .back-to-top::before{';
			$multipurpose_magazine_custom_css .='border-bottom-color: '.esc_html($multipurpose_magazine_first_theme_color).';';
		$multipurpose_magazine_custom_css .='}';
	}
	if($multipurpose_magazine_first_theme_color != false){
		$multipurpose_magazine_custom_css .='
		@media screen and (max-width:1000px){
			.nav-menu ul li a:hover, .nav-menu ul li a:hover, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
				$multipurpose_magazine_custom_css .='color: '.esc_html($multipurpose_magazine_first_theme_color).';';
			$multipurpose_magazine_custom_css .='} 
			.nav-menu ul li a:hover{';
				$multipurpose_magazine_custom_css .='border-left-color: '.esc_html($multipurpose_magazine_first_theme_color).';';
			$multipurpose_magazine_custom_css .='} 
		}';
	}

	// Layout Options
	$multipurpose_magazine_theme_layout = get_theme_mod( 'multipurpose_magazine_theme_layout_options','Default Theme');
    if($multipurpose_magazine_theme_layout == 'Default Theme'){
		$multipurpose_magazine_custom_css .='body{';
			$multipurpose_magazine_custom_css .='max-width: 100%;';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_theme_layout == 'Container Theme'){
		$multipurpose_magazine_custom_css .='body{';
			$multipurpose_magazine_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_theme_layout == 'Box Container Theme'){
		$multipurpose_magazine_custom_css .='body{';
			$multipurpose_magazine_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$multipurpose_magazine_custom_css .='}';
	}

	/*--------------- Slider Opacity -------------*/

	$multipurpose_magazine_slider_layout = get_theme_mod( 'multipurpose_magazine_slider_opacity','0.7');
	if($multipurpose_magazine_slider_layout == '0'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.1'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.1';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.2'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.2';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.3'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.3';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.4'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.4';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.5'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.5';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.6'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.6';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.7'){
		$multipurpose_magazine_custom_css .='#slider img{';
			$multipurpose_magazine_custom_css .='opacity:0.7';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.8'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.8';
		$multipurpose_magazine_custom_css .='}';
	}else if($multipurpose_magazine_slider_layout == '0.9'){
		$multipurpose_magazine_custom_css .='#categry .owl-carousel .owl-item img{';
			$multipurpose_magazine_custom_css .='opacity:0.9';
		$multipurpose_magazine_custom_css .='}';
	}

	/*--------- Preloader Color Option -------*/
	$multipurpose_magazine_preloader_color = get_theme_mod('multipurpose_magazine_preloader_color');

	if($multipurpose_magazine_preloader_color != false){
		$multipurpose_magazine_custom_css .=' .tg-loader{';
			$multipurpose_magazine_custom_css .='border-color: '.esc_html($multipurpose_magazine_preloader_color).';';
		$multipurpose_magazine_custom_css .='} ';
		$multipurpose_magazine_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$multipurpose_magazine_custom_css .='background-color: '.esc_html($multipurpose_magazine_preloader_color).';';
		$multipurpose_magazine_custom_css .='} ';
	}

	$multipurpose_magazine_preloader_bg_color = get_theme_mod('multipurpose_magazine_preloader_bg_color');

	if($multipurpose_magazine_preloader_bg_color != false){
		$multipurpose_magazine_custom_css .=' #overlayer, .preloader{';
			$multipurpose_magazine_custom_css .='background-color: '.esc_html($multipurpose_magazine_preloader_bg_color).';';
		$multipurpose_magazine_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/

	$multipurpose_magazine_top_button_padding = get_theme_mod('multipurpose_magazine_top_button_padding');
	$multipurpose_magazine_bottom_button_padding = get_theme_mod('multipurpose_magazine_bottom_button_padding');
	$multipurpose_magazine_left_button_padding = get_theme_mod('multipurpose_magazine_left_button_padding');
	$multipurpose_magazine_right_button_padding = get_theme_mod('multipurpose_magazine_right_button_padding');
	if($multipurpose_magazine_top_button_padding != false || $multipurpose_magazine_bottom_button_padding != false || $multipurpose_magazine_left_button_padding != false || $multipurpose_magazine_right_button_padding != false){
		$multipurpose_magazine_custom_css .='.blogbtn a, #comments input[type="submit"].submit{';
			$multipurpose_magazine_custom_css .='padding-top: '.esc_html($multipurpose_magazine_top_button_padding).'px; padding-bottom: '.esc_html($multipurpose_magazine_bottom_button_padding).'px; padding-left: '.esc_html($multipurpose_magazine_left_button_padding).'px; padding-right: '.esc_html($multipurpose_magazine_right_button_padding).'px; display:inline-block;';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_button_border_radius = get_theme_mod('multipurpose_magazine_button_border_radius');
	$multipurpose_magazine_custom_css .='.blogbtn a, #comments input[type="submit"].submit{';
		$multipurpose_magazine_custom_css .='border-radius: '.esc_html($multipurpose_magazine_button_border_radius).'px;';
	$multipurpose_magazine_custom_css .='}';

	/*----------- Copyright css -----*/
	$multipurpose_magazine_copyright_top_padding = get_theme_mod('multipurpose_magazine_top_copyright_padding');
	$multipurpose_magazine_copyright_bottom_padding = get_theme_mod('multipurpose_magazine_top_copyright_padding');
	if($multipurpose_magazine_copyright_top_padding != false || $multipurpose_magazine_copyright_bottom_padding != false){
		$multipurpose_magazine_custom_css .='.inner{';
			$multipurpose_magazine_custom_css .='padding-top: '.esc_html($multipurpose_magazine_copyright_top_padding).'px; padding-bottom: '.esc_html($multipurpose_magazine_copyright_bottom_padding).'px; ';
		$multipurpose_magazine_custom_css .='}';
	} 

	$multipurpose_magazine_copyright_alignment = get_theme_mod('multipurpose_magazine_copyright_alignment', 'center');
	if($multipurpose_magazine_copyright_alignment == 'center' ){
		$multipurpose_magazine_custom_css .='#footer .copyright p{';
			$multipurpose_magazine_custom_css .='text-align: '. $multipurpose_magazine_copyright_alignment .';';
		$multipurpose_magazine_custom_css .='}';
	}elseif($multipurpose_magazine_copyright_alignment == 'left' ){
		$multipurpose_magazine_custom_css .='#footer .copyright p{';
			$multipurpose_magazine_custom_css .=' text-align: '. $multipurpose_magazine_copyright_alignment .';';
		$multipurpose_magazine_custom_css .='}';
	}elseif($multipurpose_magazine_copyright_alignment == 'right' ){
		$multipurpose_magazine_custom_css .='#footer .copyright p{';
			$multipurpose_magazine_custom_css .='text-align: '. $multipurpose_magazine_copyright_alignment .';';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_copyright_font_size = get_theme_mod('multipurpose_magazine_copyright_font_size');
	$multipurpose_magazine_custom_css .='#footer .copyright p{';
		$multipurpose_magazine_custom_css .='font-size: '.esc_html($multipurpose_magazine_copyright_font_size).'px;';
	$multipurpose_magazine_custom_css .='}';

	/*------ Topbar padding ------*/
	$multipurpose_magazine_top_topbar_padding = get_theme_mod('multipurpose_magazine_top_topbar_padding');
	$multipurpose_magazine_bottom_topbar_padding = get_theme_mod('multipurpose_magazine_bottom_topbar_padding');
	if($multipurpose_magazine_top_topbar_padding != false || $multipurpose_magazine_bottom_topbar_padding != false){
		$multipurpose_magazine_custom_css .='.top-bar{';
			$multipurpose_magazine_custom_css .='padding-top: '.esc_html($multipurpose_magazine_top_topbar_padding).'px; padding-bottom: '.esc_html($multipurpose_magazine_bottom_topbar_padding).'px; ';
		$multipurpose_magazine_custom_css .='}';
	}

	/*------ Show/Hide Search ------*/
	$multipurpose_magazine_show_search = get_theme_mod('multipurpose_magazine_show_search');
	if($multipurpose_magazine_show_search == false){
		$multipurpose_magazine_custom_css .='.login{';
			$multipurpose_magazine_custom_css .='margin: 25px 0; ';
		$multipurpose_magazine_custom_css .='}';
		$multipurpose_magazine_custom_css .='.login a{';
			$multipurpose_magazine_custom_css .='border: 0; ';
		$multipurpose_magazine_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$multipurpose_magazine_product_border = get_theme_mod('multipurpose_magazine_product_border',false);

	if($multipurpose_magazine_product_border == true){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_magazine_custom_css .='border: 1px solid '.esc_html($multipurpose_magazine_first_theme_color).';';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_product_top = get_theme_mod('multipurpose_magazine_product_top_padding');
	$multipurpose_magazine_product_bottom = get_theme_mod('multipurpose_magazine_product_bottom_padding');
	$multipurpose_magazine_product_left = get_theme_mod('multipurpose_magazine_product_left_padding');
	$multipurpose_magazine_product_right = get_theme_mod('multipurpose_magazine_product_right_padding');
	if($multipurpose_magazine_product_top != false || $multipurpose_magazine_product_bottom != false || $multipurpose_magazine_product_left != false || $multipurpose_magazine_product_right != false){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_magazine_custom_css .='padding-top: '.esc_html($multipurpose_magazine_product_top).'px; padding-bottom: '.esc_html($multipurpose_magazine_product_bottom).'px; padding-left: '.esc_html($multipurpose_magazine_product_left).'px; padding-right: '.esc_html($multipurpose_magazine_product_right).'px;';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_product_border_radius = get_theme_mod('multipurpose_magazine_product_border_radius');
	if($multipurpose_magazine_product_border_radius != false){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$multipurpose_magazine_custom_css .='border-radius: '.esc_html($multipurpose_magazine_product_border_radius).'px;';
		$multipurpose_magazine_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$multipurpose_magazine_product_button_top = get_theme_mod('multipurpose_magazine_product_button_top_padding',10);
	$multipurpose_magazine_product_button_bottom = get_theme_mod('multipurpose_magazine_product_button_bottom_padding',10);
	$multipurpose_magazine_product_button_left = get_theme_mod('multipurpose_magazine_product_button_left_padding',15);
	$multipurpose_magazine_product_button_right = get_theme_mod('multipurpose_magazine_product_button_right_padding',15);
	if($multipurpose_magazine_product_button_top != false || $multipurpose_magazine_product_button_bottom != false || $multipurpose_magazine_product_button_left != false || $multipurpose_magazine_product_button_right != false){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$multipurpose_magazine_custom_css .='padding-top: '.esc_html($multipurpose_magazine_product_button_top).'px; padding-bottom: '.esc_html($multipurpose_magazine_product_button_bottom).'px; padding-left: '.esc_html($multipurpose_magazine_product_button_left).'px; padding-right: '.esc_html($multipurpose_magazine_product_button_right).'px;';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_product_button_border_radius = get_theme_mod('multipurpose_magazine_product_button_border_radius');
	if($multipurpose_magazine_product_button_border_radius != false){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$multipurpose_magazine_custom_css .='border-radius: '.esc_html($multipurpose_magazine_product_button_border_radius).'px;';
		$multipurpose_magazine_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$multipurpose_magazine_product_sale_top = get_theme_mod('multipurpose_magazine_product_sale_top_padding');
	$multipurpose_magazine_product_sale_bottom = get_theme_mod('multipurpose_magazine_product_sale_bottom_padding');
	$multipurpose_magazine_product_sale_left = get_theme_mod('multipurpose_magazine_product_sale_left_padding');
	$multipurpose_magazine_product_sale_right = get_theme_mod('multipurpose_magazine_product_sale_right_padding');
	if($multipurpose_magazine_product_sale_top != false || $multipurpose_magazine_product_sale_bottom != false || $multipurpose_magazine_product_sale_left != false || $multipurpose_magazine_product_sale_right != false){
		$multipurpose_magazine_custom_css .='.woocommerce span.onsale {';
			$multipurpose_magazine_custom_css .='padding-top: '.esc_html($multipurpose_magazine_product_sale_top).'px; padding-bottom: '.esc_html($multipurpose_magazine_product_sale_bottom).'px; padding-left: '.esc_html($multipurpose_magazine_product_sale_left).'px; padding-right: '.esc_html($multipurpose_magazine_product_sale_right).'px;';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_product_sale_border_radius = get_theme_mod('multipurpose_magazine_product_sale_border_radius',50);
	if($multipurpose_magazine_product_sale_border_radius != false){
		$multipurpose_magazine_custom_css .='.woocommerce span.onsale {';
			$multipurpose_magazine_custom_css .='border-radius: '.esc_html($multipurpose_magazine_product_sale_border_radius).'px;';
		$multipurpose_magazine_custom_css .='}';
	}

	$multipurpose_magazine_menu_case = get_theme_mod('multipurpose_magazine_product_sale_position', 'Right');
	if($multipurpose_magazine_menu_case == 'Right' ){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_magazine_custom_css .=' left:auto; right:0;';
		$multipurpose_magazine_custom_css .='}';
	}elseif($multipurpose_magazine_menu_case == 'Left' ){
		$multipurpose_magazine_custom_css .='.woocommerce ul.products li.product .onsale{';
			$multipurpose_magazine_custom_css .=' left:-10px; right:auto;';
		$multipurpose_magazine_custom_css .='}';
	}