<?php
if ( version_compare( $GLOBALS['wp_version'], '6.0', '<' ) ) {
	
}
function macruuf_theme_support(){
	add_theme_support( 'title-tag' );

	add_theme_support(
		'post-formats',
		array(
			'link',
			'aside',
			'gallery',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		)
	);

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );

	register_nav_menus(
		array(
			'header' => esc_html__( 'header menu', 'macruuf' ),
		)
	);

	add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		$logo_width  = 190;
		$logo_height = 29;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);
		
	//	wp_enqueue_style( 'style', get_stylesheet_uri('style.css') );
		
}

add_action( 'after_setup_theme', 'macruuf_theme_support' );

function macruuf_callout($wp_customize) {
	$wp_customize->add_section('macruuf-callout-section', array(
		'title' => 'Home Show'
	));

	$wp_customize->add_setting('macruuf-callout-display', array(
		'default' => 'none'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-display-control', array(
			'label' => 'Display home show',
			'section' => 'macruuf-callout-section',
			'settings' => 'macruuf-callout-display',
			'type' => 'select',
			'choices' => array('none' => 'none', 'block' => 'block')
		)));

	$wp_customize->add_setting('macruuf-callout-title', array(
		'default' => 'I am abdirahman</br> mahamoud mahdi'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-title-control', array(
			'label' => 'title',
			'section' => 'macruuf-callout-section',
			'settings' => 'macruuf-callout-title'
		)));

	$wp_customize->add_setting('macruuf-callout-description', array(
		'default' => 'I am a web developer, web Designer and graphic designer'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-description-control', array(
			'label' => 'description',
			'section' => 'macruuf-callout-section',
			'settings' => 'macruuf-callout-description',
			'type' => 'textarea'
		)));

		$wp_customize->add_setting('macruuf-callout-button', array(
			'default' => 'About'
		));
	
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-button-control', array(
				'label' => 'button one',
				'section' => 'macruuf-callout-section',
				'settings' => 'macruuf-callout-button'
			)));

			$wp_customize->add_setting('macruuf-callout-link');

			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-link-control', array(
					'label' => 'Link page button one',
					'section' => 'macruuf-callout-section',
					'settings' => 'macruuf-callout-link',
					'type' => 'dropdown-pages'
				)));

		$wp_customize->add_setting('macruuf-callout-buttonTwo', array(
			'default' => 'Contact'
		));
	
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-buttonTwo-control', array(
				'label' => 'button two',
				'section' => 'macruuf-callout-section',
				'settings' => 'macruuf-callout-buttonTwo'
			)));

			$wp_customize->add_setting('macruuf-callout-linkTwo');
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'macruuf-callout-linkTwo-control', array(
				'label' => 'Link page button two',
				'section' => 'macruuf-callout-section',
				'settings' => 'macruuf-callout-linkTwo',
				'type' => 'dropdown-pages'
			)));

			$wp_customize->add_setting('macruuf-callout-image');

			$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'macruuf-callout-image-control', array(
					'label' => 'Image',
					'section' => 'macruuf-callout-section',
					'settings' => 'macruuf-callout-image',
					'width' => 407,
					'height' => 407
				)));
	
}
add_action('customize_register', 'macruuf_callout');

function posts_section($wp_customize){
	$wp_customize->add_section('posts-section', array(
		'title' => 'Posts Section'
	));
	$wp_customize->add_setting('posts-section-title', array(
		'default' => 'Latest Blog Post'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'posts-section-title-control', array(
			'label' => 'title',
			'section' => 'posts-section',
			'settings' => 'posts-section-title'
		)));
		
		$wp_customize->add_setting('posts-section-view-author', array(
			'default' => 'block'
		));
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'posts-section-view-author-control', array(
			'label' => 'author posts View',
			'section' => 'posts-section',
			'settings' => 'posts-section-view-author',
			'type' => 'select',
			'choices' => array('none' => 'none', 'block' => 'block')
		)));

			$wp_customize->add_setting('posts-section-date-type', array(
				'default' => 'F j, Y g:i a'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'posts-section-date-type-control', array(
				'label' => 'Date Type',
				'section' => 'posts-section',
				'settings' => 'posts-section-date-type',
				'type' => 'select',
				'choices' => array(
					'F j, Y g:i a' => date('F j, Y g:i a'),
					'm-d-y' => date('m-d-y'),
					'd-m-Y' => date('d-m-Y'),
					'd-m-Y g:i a' => date('d-m-Y g:i a'),
					'd-m-Y G:i' => date('d-m-Y G:i'),
					'D M j Y' => date('D M j Y'),
					 )
			)));
		
}
add_action('customize_register', 'posts_section');

function sidebar_section($wp_customize){
	$wp_customize->add_section('sidebar-section', array(
		'title' => 'Sidebar Section'
	));

	$wp_customize->add_setting('sidebar-section-view', array(
		'default' => 'block'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-view-control', array(
		'label' => 'Sidebar View',
		'section' => 'sidebar-section',
		'settings' => 'sidebar-section-view',
		'type' => 'select',
		'choices' => array('none' => 'none', 'block' => 'block')
	)));
	
	$wp_customize->add_setting('sidebar-section-control-one', array(
		'default' => 'block'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-control-one-control', array(
		'label' => 'control one',
		'section' => 'sidebar-section',
		'settings' => 'sidebar-section-control-one',
		'type' => 'select',
		'choices' => array('none' => 'none', 'block' => 'block')
	)));

	$wp_customize->add_setting('sidebar-section-title-one', array(
		'default' => 'skills'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-title-one-control', array(
			'label' => 'title control one',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-title-one'
		)));
	$wp_customize->add_setting('sidebar-section-row-icon-one', array(
		'default' => 'fa-solid fa-desktop'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-icon-one-control', array(
			'label' => 'Icon row one',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-row-icon-one'
		)));
	$wp_customize->add_setting('sidebar-section-row-name-one', array(
		'default' => 'Web Development'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-name-one-control', array(
			'label' => 'Name row one',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-row-name-one'
		)));
	
	$wp_customize->add_setting('sidebar-section-row-icon-two', array(
		'default' => 'fa-solid fa-pen-nib'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-icon-two-control', array(
			'label' => 'Icon row two',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-row-icon-two'
		)));
	$wp_customize->add_setting('sidebar-section-row-name-two', array(
		'default' => 'Graphic Design'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-name-two-control', array(
			'label' => 'Name row two',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-row-name-two'
		)));
	$wp_customize->add_setting('sidebar-section-row-icon-there', array(
		'default' => 'fa-solid fa-camera'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-icon-there-control', array(
			'label' => 'Icon row there',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-row-icon-there'
		)));
	$wp_customize->add_setting('sidebar-section-row-name-there', array(
		'default' => 'Video Editor'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-name-there-control', array(
			'label' => 'Name row there',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-row-name-there'
		)));
	
	
		$wp_customize->add_setting('sidebar-section-control-two', array(
			'default' => 'block'
		));
	
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-control-two-control', array(
			'label' => 'control two',
			'section' => 'sidebar-section',
			'settings' => 'sidebar-section-control-two',
			'type' => 'select',
			'choices' => array('none' => 'none', 'block' => 'block')
		)));
	
		$wp_customize->add_setting('sidebar-section-title-two', array(
			'default' => 'programmer language'
		));
	
		$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-title-two-control', array(
				'label' => 'title control two',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-title-two'
			)));

			$wp_customize->add_setting('sidebar-section-row-two-icon-one', array(
				'default' => 'fa-brands fa-html5'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-two-icon-one-control', array(
					'label' => 'Icon row one',
					'section' => 'sidebar-section',
					'settings' => 'sidebar-section-row-two-icon-one'
				)));
			$wp_customize->add_setting('sidebar-section-row-two-name-one', array(
				'default' => 'Html And Css'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-two-name-one-control', array(
					'label' => 'Name row one',
					'section' => 'sidebar-section',
					'settings' => 'sidebar-section-row-two-name-one'
				)));
			
			$wp_customize->add_setting('sidebar-section-row-two-icon-two', array(
				'default' => 'fa-brands fa-js'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-two-icon-two-control', array(
					'label' => 'Icon row two',
					'section' => 'sidebar-section',
					'settings' => 'sidebar-section-row-two-icon-two'
				)));
			$wp_customize->add_setting('sidebar-section-row-two-name-two', array(
				'default' => 'Javascript'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-two-name-two-control', array(
					'label' => 'Name row two',
					'section' => 'sidebar-section',
					'settings' => 'sidebar-section-row-two-name-two'
				)));
				$wp_customize->add_setting('sidebar-section-row-two-icon-there', array(
					'default' => 'fa-brands fa-php'
				));
			
				$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-two-icon-there-control', array(
						'label' => 'Icon row there',
						'section' => 'sidebar-section',
						'settings' => 'sidebar-section-row-two-icon-there'
					)));
			$wp_customize->add_setting('sidebar-section-row-two-name-there', array(
				'default' => 'Php And Mysqli'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-row-two-name-there-control', array(
				'label' => 'Name row there',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-row-two-name-there'
			)));
		
			$wp_customize->add_setting('sidebar-section-view-fb', array(
				'default' => 'block'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-view-fb-control', array(
				'label' => 'facebook View',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-view-fb',
				'type' => 'select',
				'choices' => array('none' => 'none', 'block' => 'block')
			)));

			$wp_customize->add_setting('sidebar-section-fb-url', array(
				'default' => 'https://www.facebook.com/'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-fb-url-control', array(
				'label' => 'Facebook url',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-fb-url'
			)));
			$wp_customize->add_setting('sidebar-section-view-in', array(
				'default' => 'block'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-view-in-control', array(
				'label' => 'instagram View',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-view-in',
				'type' => 'select',
				'choices' => array('none' => 'none', 'block' => 'block')
			)));

			$wp_customize->add_setting('sidebar-section-in-url', array(
				'default' => 'https://www.instagram.com/'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-in-url-control', array(
				'label' => 'Instagram url',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-in-url'
			)));
			$wp_customize->add_setting('sidebar-section-view-tw', array(
				'default' => 'block'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-view-tw-control', array(
				'label' => 'twitter View',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-view-tw',
				'type' => 'select',
				'choices' => array('none' => 'none', 'block' => 'block')
			)));

			$wp_customize->add_setting('sidebar-section-tw-url', array(
				'default' => 'https://www.twitter.com/'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-tw-url-control', array(
				'label' => 'Twitter url',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-tw-url'
			)));
			$wp_customize->add_setting('sidebar-section-view-gb', array(
				'default' => 'block'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-view-gb-control', array(
				'label' => 'github View',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-view-gb',
				'type' => 'select',
				'choices' => array('none' => 'none', 'block' => 'block')
			)));

			$wp_customize->add_setting('sidebar-section-gb-url', array(
				'default' => 'https://www.github.com/'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-gb-url-control', array(
				'label' => 'Github url',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-gb-url'
			)));
			$wp_customize->add_setting('sidebar-section-view-tk', array(
				'default' => 'block'
			));
		
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-view-tk-control', array(
				'label' => 'tiktok View',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-view-tk',
				'type' => 'select',
				'choices' => array('none' => 'none', 'block' => 'block')
			)));

			$wp_customize->add_setting('sidebar-section-tk-url', array(
				'default' => 'https://www.tiktok.com/'
			));
			$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'sidebar-section-tk-url-control', array(
				'label' => 'Tiktok url',
				'section' => 'sidebar-section',
				'settings' => 'sidebar-section-tk-url'
			)));
		
}
add_action('customize_register', 'sidebar_section');

// theme color

function macruuf_theme_color( $wp_customize ) {

	$wp_customize->add_setting('primary_color', array(
		'default' => '#3995D1',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('secondary-color', array(
		'default' => '#56A545',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('bng-color', array(
		'default' => '#F6F6F6',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('white-color', array(
		'default' => '#fff',
		'transport' => 'refresh',
	));
	$wp_customize->add_setting('black-color', array(
		'default' => '#000',
		'transport' => 'refresh',
	));

	$wp_customize->add_section('macruuf_colors', array(
		'title' => __('Theme Colors', 'macruuf'),
		'priority' => 30,
	));

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_control', array(
		'label' => __('Primary Color', 'macruuf'),
		'section' => 'macruuf_colors',
		'settings' => 'primary_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary-color_control', array(
		'label' => __('Secondary Color', 'macruuf'),
		'section' => 'macruuf_colors',
		'settings' => 'secondary-color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bng-color_control', array(
		'label' => __('Background Color', 'macruuf'),
		'section' => 'macruuf_colors',
		'settings' => 'bng-color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'white-color_control', array(
		'label' => __('White Color', 'macruuf'),
		'section' => 'macruuf_colors',
		'settings' => 'white-color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'black-color_control', array(
		'label' => __('Black Color', 'macruuf'),
		'section' => 'macruuf_colors',
		'settings' => 'black-color',
	) ) );

}
add_action('customize_register', 'macruuf_theme_color');

function macruuf_color_css() { ?>

	<style type="text/css">
		:root{
			--primary-color:<?php if(get_theme_mod('primary_color') == null){?>#3995D1 <?php }else{echo get_theme_mod('primary_color');} ?>;

			--secondary-color: <?php if(get_theme_mod('secondary-color') == null){?>#56A545 <?php }else{echo get_theme_mod('secondary-color');}  ?>;

			--bng-color: <?php if(get_theme_mod('bng-color') == null){?>#F6F6F6 <?php }else{echo get_theme_mod('bng-color');}  ?>;

			--white: <?php if(get_theme_mod('white-color') == null){?>#fff <?php }else{echo get_theme_mod('white-color');}  ?>;

			--black: <?php if(get_theme_mod('black-color') == null){?>#000 <?php }else{echo get_theme_mod('black-color');}  ?>;
		}
	</style>

<?php }

add_action('wp_head', 'macruuf_color_css');

?>