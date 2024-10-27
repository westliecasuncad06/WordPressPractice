<?php 

	$meditation_and_yoga_custom_style = '';

	// Logo Size
	$meditation_and_yoga_logo_top_padding = get_theme_mod('meditation_and_yoga_logo_top_padding');
	$meditation_and_yoga_logo_bottom_padding = get_theme_mod('meditation_and_yoga_logo_bottom_padding');
	$meditation_and_yoga_logo_left_padding = get_theme_mod('meditation_and_yoga_logo_left_padding');
	$meditation_and_yoga_logo_right_padding = get_theme_mod('meditation_and_yoga_logo_right_padding');

	if( $meditation_and_yoga_logo_top_padding != '' || $meditation_and_yoga_logo_bottom_padding != '' || $meditation_and_yoga_logo_left_padding != '' || $meditation_and_yoga_logo_right_padding != ''){
		$meditation_and_yoga_custom_style .=' .logo {';
			$meditation_and_yoga_custom_style .=' padding-top: '.esc_attr($meditation_and_yoga_logo_top_padding).'px; padding-bottom: '.esc_attr($meditation_and_yoga_logo_bottom_padding).'px; padding-left: '.esc_attr($meditation_and_yoga_logo_left_padding).'px; padding-right: '.esc_attr($meditation_and_yoga_logo_right_padding).'px;';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_logo_size = get_theme_mod('meditation_and_yoga_logo_size');
	if( $meditation_and_yoga_logo_size != '') {
		if($meditation_and_yoga_logo_size == 100) {
			$meditation_and_yoga_custom_style .=' .custom-logo-link img {';
				$meditation_and_yoga_custom_style .=' width: 350px;';
			$meditation_and_yoga_custom_style .=' }';
		} else if($meditation_and_yoga_logo_size >= 10 && $meditation_and_yoga_logo_size < 100) {
			$meditation_and_yoga_custom_style .=' .custom-logo-link img {';
				$meditation_and_yoga_custom_style .=' width: '.esc_attr($meditation_and_yoga_logo_size).'%;';
			$meditation_and_yoga_custom_style .=' }';
		}
	}

	$meditation_and_yoga_toptext_color = get_theme_mod('meditation_and_yoga_toptext_color');

	if ( $meditation_and_yoga_toptext_color != '') {
		$meditation_and_yoga_custom_style .=' .contact-details span a{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_toptext_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_topicon_color = get_theme_mod('meditation_and_yoga_topicon_color');

	if ( $meditation_and_yoga_topicon_color != '') {
		$meditation_and_yoga_custom_style .=' .contact-details i{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_topicon_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_topbg_color = get_theme_mod('meditation_and_yoga_topbg_color');

	if ( $meditation_and_yoga_topbg_color != '') {
		$meditation_and_yoga_custom_style .=' #header{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_topbg_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_searchtext_color = get_theme_mod('meditation_and_yoga_searchtext_color');

	if ( $meditation_and_yoga_searchtext_color != '') {
		$meditation_and_yoga_custom_style .=' #header input[type="search"]{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_searchtext_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	//slider color
	$meditation_and_yoga_slider_color = get_theme_mod('meditation_and_yoga_slider_color');

	if ( $meditation_and_yoga_slider_color != '') {
		$meditation_and_yoga_custom_style .=' #slider .inner_carousel h1,#slider .inner_carousel p{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_slider_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_sliderbtn_color = get_theme_mod('meditation_and_yoga_sliderbtn_color');
	$meditation_and_yoga_sliderbtnbg_color = get_theme_mod('meditation_and_yoga_sliderbtnbg_color');
	if ( $meditation_and_yoga_sliderbtn_color != '') {
		$meditation_and_yoga_custom_style .=' #slider .read-btn a{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_sliderbtn_color).'; background-color:'.esc_attr($meditation_and_yoga_sliderbtnbg_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_slidernp_color = get_theme_mod('meditation_and_yoga_slidernp_color');
	$meditation_and_yoga_slidernpbg_color = get_theme_mod('meditation_and_yoga_slidernpbg_color');
	if ( $meditation_and_yoga_slidernp_color != '') {
		$meditation_and_yoga_custom_style .=' #slider i{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_slidernp_color).'; background-color:'.esc_attr($meditation_and_yoga_slidernpbg_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	// service section padding
	$meditation_and_yoga_topic_section_padding = get_theme_mod('meditation_and_yoga_topic_section_padding');

	if( $meditation_and_yoga_topic_section_padding != ''){
		$meditation_and_yoga_custom_style .=' #our-topic {';
			$meditation_and_yoga_custom_style .=' padding-top: '.esc_attr($meditation_and_yoga_topic_section_padding).'px; padding-bottom: '.esc_attr($meditation_and_yoga_topic_section_padding).'px;';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_service_color = get_theme_mod('meditation_and_yoga_service_color');

	if ( $meditation_and_yoga_service_color != '') {
		$meditation_and_yoga_custom_style .=' #our-topic h3 a,#our-topic h2{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_service_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	// Site Title Font Size
	$meditation_and_yoga_site_title_font_size = get_theme_mod('meditation_and_yoga_site_title_font_size');
	if( $meditation_and_yoga_site_title_font_size != ''){
		$meditation_and_yoga_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$meditation_and_yoga_custom_style .=' font-size: '.esc_attr($meditation_and_yoga_site_title_font_size).'px;';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_site_title_color = get_theme_mod('meditation_and_yoga_site_title_color');
	if ( $meditation_and_yoga_site_title_color != '') {
		$meditation_and_yoga_custom_style .=' .logo p.site-title a{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_site_title_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	// Site Title Font Size
	$meditation_and_yoga_site_tagline_font_size = get_theme_mod('meditation_and_yoga_site_tagline_font_size');
	if( $meditation_and_yoga_site_tagline_font_size != ''){
		$meditation_and_yoga_custom_style .=' .logo p.site-description {';
			$meditation_and_yoga_custom_style .=' font-size: '.esc_attr($meditation_and_yoga_site_tagline_font_size).'px;';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_site_tagline_color = get_theme_mod('meditation_and_yoga_site_tagline_color');
	if ( $meditation_and_yoga_site_tagline_color != '') {
		$meditation_and_yoga_custom_style .=' .logo p.site-description{';
			$meditation_and_yoga_custom_style .=' color:'.esc_attr($meditation_and_yoga_site_tagline_color).';';
		$meditation_and_yoga_custom_style .=' }';
	}

	//Menu animation
	$meditation_and_yoga_dropdown_anim = get_theme_mod('meditation_and_yoga_dropdown_anim');

	if ( $meditation_and_yoga_dropdown_anim != '') {
		$meditation_and_yoga_custom_style .=' .nav-menu ul ul {';
			$meditation_and_yoga_custom_style .=' animation:'.esc_attr($meditation_and_yoga_dropdown_anim).' 1s ease;';
		$meditation_and_yoga_custom_style .=' }';
	}

	// Copyright padding
	$meditation_and_yoga_copyright_padding = get_theme_mod('meditation_and_yoga_copyright_padding');

	if( $meditation_and_yoga_copyright_padding != ''){
		$meditation_and_yoga_custom_style .=' .site-info {';
			$meditation_and_yoga_custom_style .=' padding-top: '.esc_attr($meditation_and_yoga_copyright_padding).'px; padding-bottom: '.esc_attr($meditation_and_yoga_copyright_padding).'px;';
		$meditation_and_yoga_custom_style .=' }';
	}

	$meditation_and_yoga_slider_hide_show = get_theme_mod('meditation_and_yoga_slider_hide_show',false);
	if( $meditation_and_yoga_slider_hide_show == true){
		$meditation_and_yoga_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$meditation_and_yoga_custom_style .=' display:none;';
		$meditation_and_yoga_custom_style .=' }';
	} else {
		$meditation_and_yoga_custom_style .=' .page-template-custom-home-page #header .menu-section {';
			$meditation_and_yoga_custom_style .=' position: static;';
		$meditation_and_yoga_custom_style .=' }';
	}

	//Our Topics css
	$meditation_and_yoga_img_hight = get_theme_mod('meditation_and_yoga_img_hight');

	if( $meditation_and_yoga_img_hight != ''){
		$meditation_and_yoga_custom_style .=' .service-section img {';
			$meditation_and_yoga_custom_style .=' width: '.esc_attr($meditation_and_yoga_img_hight).'px; height: '.esc_attr($meditation_and_yoga_img_hight).'px;';
		$meditation_and_yoga_custom_style .=' }';
	}