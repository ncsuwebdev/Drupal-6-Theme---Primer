<?php

function primer_settings($saved_settings) {
	
	/*
	 * 
	 * force the primer settings page to render using the primer theme
	 * admin/build/themes/settings/primer
	 * 
	 */
	
	global $custom_theme;
    $custom_theme = 'primer';
	
	// use this variable to specify which form elements should use the complete color picker (full spectrum)
	$allColorPickerClass = 'all-colorpicker';	
	
	// change this to true to specify whether this theme should allow the use of branded colors, or all colors
	$brandedColorPicker = false;
		
	// grab the color library and use it to populate the color list if using the branded option
	
	if($brandedColorPicker) {
		// grab the color library from the included repo (git submodule) and use it to populate the color lists
		include(drupal_get_path('theme', 'primer') . '/library/php-ncstate/Ncstate/Brand/Color.php');
		$color = new Ncstate_Brand_Color();
	  	
	  	// color list for branded colorPicker plugin
	  	// all branded colors
		$allColors = $color->getColors();
		$returnArray = array();
		foreach(array_values($allColors) as $key => $value) {
			$returnArray[$key] = '#' . $value;
		}
		$jsonEncodedColorsAll = json_encode(array_values($returnArray));
		$brandedColorsAllClass = 'branded-colorpicker-all';
		
		// primary branded colors only
		$primaryColors = $color->getColors('primary');
		$returnArray = array();
		foreach(array_values($primaryColors) as $key => $value) {
			$returnArray[$key] = '#' . $value;
		}
		$jsonEncodedColorsPrimary = json_encode(array_values($returnArray));
		$brandedColorsPrimaryClass = 'branded-colorpicker-primary';
		
		// secondary branded colors only
		$secondaryColors = $color->getColors('secondary');
		$returnArray = array();
		foreach(array_values($secondaryColors) as $key => $value) {
			$returnArray[$key] = '#' . $value;
		}
		$jsonEncodedColorsSecondary = json_encode(array_values($returnArray));
		$brandedColorsSecondaryClass = 'branded-colorpicker-secondary';
		
		// support branded colors only
		$supportColors = $color->getColors('support');
		$returnArray = array();
		foreach(array_values($supportColors) as $key => $value) {
			$returnArray[$key] = '#' . $value;
		}
		$jsonEncodedColorsSupport = json_encode(array_values($returnArray));
		$brandedColorsSupportClass = 'branded-colorpicker-support';
		
	}
	
   // SET FONT SIZE OPTIONS FOR USE IN MULTIPLE PLACES
   
	$fontSizeOptions = array(
      	'0.5em' 	=> '0.5x',
    	'0.55em' 	=> '0.55x',
    	'0.6em' 	=> '0.6x',
    	'0.65em' 	=> '0.65x',
    	'0.7em' 	=> '0.7x',
    	'0.75em' 	=> '0.75x',
    	'0.8em' 	=> '0.8x',
    	'0.85em' 	=> '0.85x',
    	'0.9em' 	=> '0.9x',
    	'1.0em' 	=> '1x',
		'1.1em' 	=> '1.1x',
		'1.2em' 	=> '1.2x',
		'1.3em' 	=> '1.3x',
		'1.4em' 	=> '1.4x',
      	'1.5em' 	=> '1.5x',
  		'2.0em' 	=> '2x',
		'2.5em' 	=> '2.5x',
		'3.0em' 	=> '3x',
		'3.5em' 	=> '3.5x',
		'4.0em' 	=> '4.0x',
  		'4.5em' 	=> '4.5x',
  		'5.0em' 	=> '5.0x',
    );
  	
	
	$defaults = array(
		'total_page_wrapper_top_offset'			=> '5px',
		'center_layout' 						=> 1,
		'background_image_url' 					=> '',
		'background_image_tile' 				=> 1,
		'background_color' 						=> '#FFFFFF',
		'drop_shadow_color' 					=> '#000000',
		'site_border_size'  					=> '1px',
  		'site_border_color'  					=> '#000000',
		'site_background_color'  				=> '#FFFFFF',
		'site_background_image_url' 			=> '',
		'site_background_image_tile' 			=> 1,
		'site_font_color'  						=> '#000000',
  		'site_link_color'  						=> '#CC0000',
  		'site_heading_color'  					=> '#CC0000',
		'base_font_size'	      				=> '0.75em',
		'base_font_family'						=> 'Verdana',
		'header_background_image_url' 			=> '',
		'site_title_font_family'				=> 'Arial',
		'site_title_font_size'     				=> '2.5em',
		'site_title_height'  					=> '105px',
		'site_title_vertical_offset'    		=> '10px',
		'site_title_horizontal_offset'  		=> '0px',
    	'site_title_text_color'	      			=> '#CC0000',
		'site_title_bg_color'	      			=> '#FFFFFF',
    	'site_title_top_line'	      			=> 'My Awesome Website',
		'site_title_bottom_line'      			=> 'Department of Even More Awesome Websites',
		'header_small_menu_height' 				=> '20px',
		'header_search_region_offset' 			=> '5px',
		'header_small_menu_font_size' 			=> '1.0em',
  		'header_small_menu_font_color' 			=> '#CC0000',
		'show_breadcrumbs'      				=> 1,
		'breadcrumb_separator'		 			=> ' > ',
		
		'horizontal_main_menu_align'    		=> 'left',
		'horizontal_main_menu_height'    		=> '25px',
		'horizontal_main_menu_font_size'    	=> '1.0em',
		'horizontal_main_menu_color'    		=> '#666666',
  		'horizontal_main_menu_link_color'		=> '#FFFFFF',
  		'horizontal_main_menu_link_hover_color'	=> '#CCCCCC',
		
  		'horizontal_secondary_menu_align'    	=> 'left',
		'horizontal_secondary_menu_height' 		=> '20px',
		'horizontal_secondary_menu_font_size'   => '1.0em',
  		'horizontal_secondary_menu_color'		=> '#CCCCCC',
  		'horizontal_secondary_menu_link_color'	=> '#000000',
  		'horizontal_secondary_menu_link_hover_color'	=> '#000000',
		
		'left_above_menu_region_font_size' 		=> '1.0em',
  		'left_above_menu_region_menu_size' 		=> '1.0em',
  		'left_above_menu_region_menu_sub_size' 	=> '1.0em',
  		'left_above_menu_region_heading_size'	=> '1.3em',
  		'left_above_menu_region_background_color'	=> '#FFFFFF',
  		'left_above_menu_region_block_color'    => '#FFFFFF',
  		'left_above_menu_region_heading_color'  => '#000000',
		'left_above_menu_region_heading_background_color'  	=> '#FFFFFF',
  		'left_above_menu_region_font_color'  	=> '#000000',
  		'left_above_menu_region_menu_link_color'=> '#CC0000',
  		'left_above_menu_region_link_color'  	=> '#CC0000',
  
  		'left_main_menu_region_font_size' 		=> '1.0em',
  		'left_main_menu_region_menu_size' 		=> '1.0em',
  		'left_main_menu_region_menu_sub_size' 	=> '1.0em',
  		'left_main_menu_region_heading_size'	=> '1.3em',
  		'left_main_menu_region_background_color'	=> '#FFFFFF',
  		'left_main_menu_region_block_color'    => '#FFFFFF',
  		'left_main_menu_region_heading_color'  => '#000000',
		'left_main_menu_region_heading_background_color'  	=> '#FFFFFF',
  		'left_main_menu_region_font_color'  	=> '#000000',
  		'left_main_menu_region_menu_link_color'=> '#CC0000',
  		'left_main_menu_region_link_color'  	=> '#CC0000',
  
  		'left_sub_menu_region_font_size' 		=> '1.0em',
  		'left_sub_menu_region_menu_size' 		=> '1.0em',
  		'left_sub_menu_region_menu_sub_size'	=> '1.0em',
  		'left_sub_menu_region_heading_size'		=> '1.3em',
  		'left_sub_menu_region_background_color'	=> '#FFFFFF',
  		'left_sub_menu_region_block_color'    => '#FFFFFF',
  		'left_sub_menu_region_heading_color'  => '#000000',
		'left_sub_menu_region_heading_background_color'  	=> '#FFFFFF',
  		'left_sub_menu_region_font_color'  	=> '#000000',
  		'left_sub_menu_region_menu_link_color'=> '#CC0000',
  		'left_sub_menu_region_link_color'  	=> '#CC0000',
  
  		'left_below_menu_region_font_size' 		=> '1.0em',
  		'left_below_menu_region_menu_size' 		=> '1.0em',
  		'left_below_menu_region_menu_sub_size' 	=> '1.0em',
  		'left_below_menu_region_heading_size'	=> '1.3em',
  		'left_below_menu_region_background_color'	=> '#FFFFFF',
  		'left_below_menu_region_block_color'    => '#FFFFFF',
  		'left_below_menu_region_heading_color'  => '#000000',
		'left_below_menu_region_heading_background_color'  	=> '#FFFFFF',
  		'left_below_menu_region_font_color'  	=> '#000000',
  		'left_below_menu_region_menu_link_color'=> '#CC0000',
  		'left_below_menu_region_link_color'  	=> '#CC0000',
  
		'right_top_region_font_size'     		=> '1.0em',
  		'right_top_region_menu_size'     		=> '1.0em',
  		'right_top_region_menu_sub_size'     	=> '1.0em',
  		'right_top_region_heading_size'    		=> '1.3em',
  		'right_top_region_background_color'		=> '#FFFFFF',
  		'right_top_region_block_color'     		=> '#FFFFFF',
  		'right_top_region_heading_color'  		=> '#000000',
  		'right_top_region_heading_background_color'  	=> '#FFFFFF',
  		'right_top_region_font_color'  			=> '#000000',
  		'right_top_region_menu_link_color'  	=> '#CC0000',
  		'right_top_region_link_color'  			=> '#CC0000',
		
  		'right_center_region_font_size'     	=> '1.0em',
  		'right_center_region_menu_size'     	=> '1.0em',
  		'right_center_region_menu_sub_size'    	=> '1.0em',
  		'right_center_region_heading_size'    	=> '1.3em',
  		'right_center_region_background_color'	=> '#FFFFFF',
  		'right_center_region_block_color'     	=> '#FFFFFF',
  		'right_center_region_heading_color'  	=> '#000000',
  		'right_center_region_heading_background_color'  	=> '#FFFFFF',
  		'right_center_region_font_color'  		=> '#000000',
  		'right_center_region_menu_link_color'  	=> '#CC0000',
  		'right_center_region_link_color'  		=> '#CC0000',
		
  		'right_below_region_font_size'     		=> '1.0em',
  		'right_below_region_menu_size'     		=> '1.0em',
  		'right_below_region_menu_sub_size' 		=> '1.0em',
  		'right_below_region_heading_size'  		=> '1.3em',
  		'right_below_region_background_color'	=> '#FFFFFF',
  		'right_below_region_block_color'     	=> '#FFFFFF',
  		'right_below_region_heading_color'  	=> '#000000',
  		'right_below_region_heading_background_color'  	=> '#FFFFFF',
  		'right_below_region_font_color'  		=> '#000000',
  		'right_below_region_menu_link_color'  	=> '#CC0000',
  		'right_below_region_link_color'  		=> '#CC0000',
	
		'copyright_information' 				=> '© ' . date('Y', time()),
		'footer_region_font_size'				=> '0.85em',
  		'footer_region_menu_font_size'			=> '1em',
		'footer_region_separator_color'			=> '#000000',
		'footer_region_background_color'		=> '#DEDDDB',
  		'footer_region_link_color'				=> '#CC0000',
		'footer_menu_align'						=> 'center',
		'footer_menu_height'					=> '40px',
  		'footer_menu_color'						=> '#000000',
  		'footer_menu_link_color'				=> '#CC0000',
		'footer_region_font_color'  			=> '#000000',
		'footer_contact_information'			=> 'My Awesome Project Website, Raleigh, NC 27695 Phone: (555) 555-5555',
  	);
  	
	// Merge the saved variables and their default values
  $settings = array_merge($defaults, $saved_settings);

  // Create the form widgets using Forms API
  
  // hidden form fields for use with the branded color picker (hidden from user view by jquery/css)
  
  $form['hidden']['initialcolorsAll'] = array(
    '#title' => 'Initial Branded Colors for Form Elements',
    '#type' => 'textarea',
    '#default_value' => $jsonEncodedColorsAll,
  	'#attributes' => array('class' => 'jsonColorList'),
  );
  
  $form['hidden']['initialcolorsPrimary'] = array(
    '#title' => 'Initial Colors for Primary Branded Color Form Elements',
    '#type' => 'textarea',
    '#default_value' => $jsonEncodedColorsPrimary,
  	'#attributes' => array('class' => 'jsonColorList'),
  );
  $form['hidden']['initialcolorsSecondary'] = array(
    '#title' => 'Initial Colors for Secondary Branded Color Form Elements',
    '#type' => 'textarea',
    '#default_value' => $jsonEncodedColorsSecondary,
  	'#attributes' => array('class' => 'jsonColorList'),
  );
  $form['hidden']['initialcolorsSupport'] = array(
    '#title' => 'Initial Colors for Support Branded Color Form Elements',
    '#type' => 'textarea',
    '#default_value' => $jsonEncodedColorsSupport,
  	'#attributes' => array('class' => 'jsonColorList'),
  );
  
   /*
   * 
   * SET UP FORM FIELDS FOR EACH AREA OF THE THEME CONFIG PAGE
   * 
   */
  
  $form['main_site_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Main Site Settings'),
    '#description' => t("Settings for the overall site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['header_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header Region Settings'),
    '#description' => t("Settings for the header region"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['breadcrumb_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Breadcrumb Settings'),
    '#description' => t("Settings for the breadcrumbs"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['horizontal_main_menu_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Horizontal Main Menu Settings'),
    '#description' => t("Settings for the horizontal main menu"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['horizontal_secondary_menu_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Horizontal Secondary Menu Settings'),
    '#description' => t("Settings for the horizontal secondary menu"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['left_above_menu_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Left Above Menu Region Settings'),
    '#description' => t("Settings for the left above menu region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['left_main_menu_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Left Main Menu Region Settings'),
    '#description' => t("Settings for the left main menu region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['left_sub_menu_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Left Sub-Menu Region Settings'),
    '#description' => t("Settings for the left sub-menu region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['left_below_menu_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Left Below Menu Region Settings'),
    '#description' => t("Settings for the left-below-menu region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['right_top_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Right Top Region Settings'),
    '#description' => t("Settings for the right top region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['right_center_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Right Center Region Settings'),
    '#description' => t("Settings for the right center region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['right_below_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Right Bottom Region Settings'),
    '#description' => t("Settings for the right bottom region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
  $form['footer_region_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Region Settings'),
    '#description' => t("Settings for the footer region of the site"),
  	'#attributes' => array('class' => 'collapsible collapsed'),
  );
  
   /*
   * 
   * MAIN THEME/SITE STYLES & SETTINGS
   * 
   */
  
  $form['main_site_settings']['total_page_wrapper_top_offset'] = array(
    '#title' => 'Top Offset Margin',
  	'#description' => t('Use this to shift the layout away from the top of the browser window. Include px.'), 
    '#type' => 'textfield',
    '#default_value' => $settings['total_page_wrapper_top_offset'],
  	'#required' => TRUE,
  );
  
  $form['main_site_settings']['center_layout'] = array(
    '#title' => 'Site layout location',
  	'#description' => t('Align the layout on the left, or the center of the page.'), 
    '#type' => 'select',
    '#default_value' => $settings['center_layout'],
    '#options' => array(
      0 => 'Left',
      1 => 'Center',
    ),
  );
  
  $form['main_site_settings']['background_image_url'] = array(
    '#title' => 'Background Image URL',
    '#description' => t('Image to be displayed behind the main layout. Full URL required (including http://)'), 
    '#type' => 'textfield',
    '#default_value' => $settings['background_image_url'],
    '#size' => 50, 
    '#maxlength' => 255, 
    '#required' => FALSE,
  );
  
  $form['main_site_settings']['background_image_tile'] = array(
    '#title' => 'Tile the background image?',
  	'#description' => t('Only used if a background image is specified above.'), 
    '#type' => 'select',
    '#default_value' => $settings['background_image_tile'],
    '#options' => array(
      0 => 'No',
      1 => 'Yes',
    ),
  );
  
 
  $form['main_site_settings']['background_color'] = array(
    '#title' => 'Background color outside the main layout',
  	'#description' => t('Solid color displayed outside the main layout, and underneath any specified background image.'), 
    '#type' => 'textfield',
    '#default_value' => $settings['background_color'],
  	'#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['main_site_settings']['drop_shadow_color'] = array(
    '#title' => 'Drop-shadow color around the main layout',
  	'#description' => t('Visible only on modern browsers. To hide, set to same color as background color'), 
    '#type' => 'textfield',
    '#default_value' => $settings['drop_shadow_color'],
  	'#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['main_site_settings']['site_border_color'] = array(
    '#title' => 'Site border color',
    '#type' => 'textfield',
    '#default_value' => $settings['site_border_color'],
  	'#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['main_site_settings']['site_border_size'] = array(
    '#title' => 'Site border size (px)',
    '#type' => 'textfield',
    '#default_value' => $settings['site_border_size'],
  );
  
  $form['main_site_settings']['site_background_color'] = array(
    '#title' => 'Background color for inside the main layout',
    '#type' => 'textfield',
    '#default_value' => $settings['site_background_color'],
  	'#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['main_site_settings']['site_background_image_url'] = array(
    '#title' => 'Background Image URL for inside the main layout',
  	'#description' => t('Image to be displayed inside the main layout. Full URL required (including http://)'),
    '#type' => 'textfield',
    '#default_value' => $settings['site_background_image_url'],
  );
  
  $form['main_site_settings']['site_background_image_tile'] = array(
    '#title' => 'Tile the background image inside the main layout?',
  	'#description' => t('Only used if a background image is specified above.'), 
    '#type' => 'select',
    '#default_value' => $settings['site_background_image_tile'],
    '#options' => array(
      0 => 'No',
      1 => 'Yes',
    ),
  );
  
  $form['main_site_settings']['base_font_family'] = array(
    '#title' => 'Base font',
  	'#description' => t('The main font used on the website (unless overridden by another setting)'), 
    '#type' => 'select',
    '#default_value' => $settings['base_font_family'],
    '#options' => array(
      	'Arial' 			=> 'Arial',
  		'Helvetica' 		=> 'Helvetica',
      	'Times New Roman' 	=> 'Times New Roman',
  		'Georgia' 			=> 'Georgia',
  		'Verdana' 			=> 'Verdana',
    ),
  );
  
  $form['main_site_settings']['base_font_size'] = array(
    '#title' => 'Base font size', 
    '#type' => 'select',
    '#default_value' => $settings['base_font_size'],
    '#options' => $fontSizeOptions
  );
  
  $form['main_site_settings']['site_heading_color'] = array(
    '#title' => 'Standard headings font color',
    '#type' => 'textfield',
    '#default_value' => $settings['site_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['main_site_settings']['site_font_color'] = array(
    '#title' => 'Default color for the text',
    '#type' => 'textfield',
    '#default_value' => $settings['site_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['main_site_settings']['site_link_color'] = array(
    '#title' => 'Default color for links',
    '#type' => 'textfield',
    '#default_value' => $settings['site_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
   /*
   * 
   * HEADER REGION STYLES & SETTINGS
   * 
   */
  
  $form['header_settings']['site_title_height'] = array(
    '#title' => 'Height (px) of the Site Title Area',
    '#description' => t('Make sure to include the "px" on the end of your height number.'), 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_height'],
    '#size' => 50, 
    '#maxlength' => 255, 
    '#required' => TRUE,
  );
  
  $form['header_settings']['header_background_image_url'] = array(
    '#title' => 'Header background image URL',
    '#description' => t('Image to be used as the background for the header region. Maximum Dimensions: 75x920. Full URL required (including http://)'), 
    '#type' => 'textfield',
    '#default_value' => $settings['header_background_image_url'],
    '#size' => 50, 
    '#maxlength' => 255, 
    '#required' => FALSE,
  );
  
  $form['header_settings']['site_title_font_family'] = array(
    '#title' => 'Site Title Font', 
    '#type' => 'select',
    '#default_value' => $settings['site_title_font_family'],
    '#options' => array(
      	'Arial' 			=> 'Arial',
  		'Helvetica' 		=> 'Helvetica',
      	'Times New Roman' 	=> 'Times New Roman',
  		'Georgia' 			=> 'Georgia',
  		'Verdana' 			=> 'Verdana',
    ),
  );
  
  $form['header_settings']['site_title_font_size'] = array(
    '#title' => 'Site Title Font Size', 
    '#type' => 'select',
    '#default_value' => $settings['site_title_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['header_settings']['site_title_vertical_offset'] = array(
    '#title' => 'Site Title Vertical Offset (px)',
    '#description' => t('Move the site title vertically (helpful if you change the size or font options). NOTE: include "px" on the end of your offset.'), 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_vertical_offset'],
    '#size' => 6, 
    '#maxlength' => 5, 
    '#required' => TRUE,
  );
  
  $form['header_settings']['site_title_horizontal_offset'] = array(
    '#title' => 'Site Title Horizontal Offset (px)',
    '#description' => t('Move the site title horizontally (helpful if you change the size or font options). NOTE: include "px" on the end of your offset.'), 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_horizontal_offset'],
    '#size' => 6, 
    '#maxlength' => 5, 
    '#required' => TRUE,
  );
  
  $form['header_settings']['site_title_text_color'] = array(
    '#title' => 'Title text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_text_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['header_settings']['site_title_bg_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_bg_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['header_settings']['site_title_top_line'] = array(
    '#title' => 'Title Text Top Line',
    '#description' => t('The text in the title on the top line (this line is regular font)'), 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_top_line'],
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => FALSE,
  );
  $form['header_settings']['site_title_bottom_line'] = array(
    '#title' => 'Title text bottom line',
    '#description' => t('The text in the title on the bottom line (this line is bold/strong font)'), 
    '#type' => 'textfield',
    '#default_value' => $settings['site_title_bottom_line'],
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => FALSE,
  );
  
  $form['header_settings']['header_search_region_offset'] = array(
    '#title' => 'Search Region Vertical Offset', 
  	'#description' => t('Set the vertical offset (px) of the search region in the header'),
    '#type' => 'textfield',
    '#default_value' => $settings['header_search_region_offset'],
  	'#size' => 60, 
    '#required' => FALSE,
  );
  
  $form['header_settings']['header_small_menu_height'] = array(
    '#title' => 'Small Header Menu Height', 
  	'#description' => t('Set the height (px) so the search box and other elements can be positioned correctly'),
    '#type' => 'textfield',
    '#default_value' => $settings['header_small_menu_height'],
  	'#size' => 60, 
    '#required' => FALSE,
  );
  
  $form['header_settings']['header_small_menu_font_size'] = array(
    '#title' => 'Small Header Menu Font Size', 
  	'#description' => t('If you use a block in the small header menu region, what font-size do you want'),
    '#type' => 'select',
    '#default_value' => $settings['header_small_menu_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['header_settings']['header_small_menu_font_color'] = array(
    '#title' => 'Small Header Menu Font Color', 
  	'#description' => t('If you use a block in the small header menu region, what color do you want'),
    '#type' => 'textfield',
    '#default_value' => $settings['header_small_menu_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
	
   /*
   * 
   * BREADCRUMB REGION STYLES & SETTINGS
   * 
   */
  
  $form['breadcrumb_settings']['show_breadcrumbs'] = array(
    '#title' => 'Show Breadcrumbs when available', 
   	'#description' => t('If your site supports breadcrumbs, you can turn them off globally here.'),
    '#type' => 'select',
    '#default_value' => $settings['show_breadcrumbs'],
    '#options' => array(
      0 => 'False',
      1 => 'True',
    ),
  );
  
  $form['breadcrumb_settings']['breadcrumb_separator'] = array(
    '#title' => 'Breadcrumb separator character',
    '#description' => t('The character that will go in between breadcrumb items. Include spaces if necessary'), 
    '#type' => 'textfield',
    '#default_value' => $settings['breadcrumb_separator'],
    '#size' => 15, 
    '#maxlength' => 10, 
    '#required' => FALSE,
  );
  
  
   /*
   * 
   * HORIZONTAL MENU REGION STYLES & SETTINGS
   * 
   */
  
  $form['horizontal_main_menu_settings']['horizontal_main_menu_align'] = array(
    '#title' => 'Alignment',
    '#type' => 'select',
    '#default_value' => $settings['horizontal_main_menu_align'],
    '#options' => array(
      'left' => 'Left',
      'center' => 'Center',
  	  'right' => 'Right',
	),
  );
  
  $form['horizontal_main_menu_settings']['horizontal_main_menu_height'] = array(
    '#title' => 'Height (px)',
  	'#description' => t('Make sure to include px'), 
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_main_menu_height'],
  );
  
  $form['horizontal_main_menu_settings']['horizontal_main_menu_font_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['horizontal_main_menu_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['horizontal_main_menu_settings']['horizontal_main_menu_color'] = array(
    '#title' => 'Background Color',
  	'#description' => t('Select the background color'), 
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_main_menu_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['horizontal_main_menu_settings']['horizontal_main_menu_link_color'] = array(
    '#title' => 'Menu item link color',
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_main_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['horizontal_main_menu_settings']['horizontal_main_menu_link_hover_color'] = array(
    '#title' => 'Link hover color',
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_main_menu_link_hover_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['horizontal_seconday_menu_settings']['horizontal_secondary_menu_align'] = array(
    '#title' => 'Alignment',
    '#type' => 'select',
    '#default_value' => $settings['horizontal_secondary_menu_align'],
    '#options' => array(
      'left' => 'Left',
      'center' => 'Center',
  	  'right' => 'Right',
	),
  );
  
  $form['horizontal_seconday_menu_settings']['horizontal_secondary_menu_height'] = array(
    '#title' => 'Height (px)',
  	'#description' => t('Make sure to include px'), 
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_secondary_menu_height'],
  );
  
  $form['horizontal_seconday_menu_settings']['horizontal_secondary_menu_font_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['horizontal_secondary_menu_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  
  $form['horizontal_seconday_menu_settings']['horizontal_secondary_menu_color'] = array(
    '#title' => 'Background color',
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_secondary_menu_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['horizontal_seconday_menu_settings']['horizontal_secondary_menu_link_color'] = array(
    '#title' => 'Menu item link color',
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_secondary_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['horizontal_seconday_menu_settings']['horizontal_secondary_menu_link_hover_color'] = array(
    '#title' => 'Link hover color',
    '#type' => 'textfield',
    '#default_value' => $settings['horizontal_secondary_menu_link_hover_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * LEFT ABOVE MENU REGION STYLES & SETTINGS
   * 
   */
  
  $form['left_above_menu_region_settings']['left_above_menu_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_heading_color'] = array(
    '#title' => 'Heading text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_heading_size'] = array(
    '#title' => 'Heading size', 
    '#type' => 'select',
    '#default_value' => $settings['left_above_menu_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_font_size'] = array(
    '#title' => 'Font Size', 
    '#type' => 'select',
    '#default_value' => $settings['left_above_menu_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  ); 
  
  $form['left_above_menu_region_settings']['left_above_menu_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_above_menu_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_above_menu_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_above_menu_region_settings']['left_above_menu_region_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_above_menu_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * LEFT MAIN MENU REGION STYLES & SETTINGS
   * 
   */
  
  $form['left_main_menu_region_settings']['left_main_menu_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_heading_size'] = array(
    '#title' => 'Heading size', 
    '#type' => 'select',
    '#default_value' => $settings['left_main_menu_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_heading_color'] = array(
    '#title' => 'Heading text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['left_main_menu_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
   $form['left_main_menu_region_settings']['left_main_menu_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_main_menu_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_main_menu_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_main_menu_region_settings']['left_main_menu_region_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_main_menu_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * LEFT SUB MENU REGION STYLES & SETTINGS
   * 
   */
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_heading_color'] = array(
    '#title' => 'Heading text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_heading_size'] = array(
    '#title' => 'Heading size', 
    '#type' => 'select',
    '#default_value' => $settings['left_sub_menu_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['left_sub_menu_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_link_color'] = array(
    '#title' => 'Link Color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_sub_menu_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_sub_menu_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_sub_menu_region_settings']['left_sub_menu_region_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_sub_menu_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * LEFT BELOW MENU REGION STYLES & SETTINGS
   * 
   */
  
  $form['left_below_menu_region_settings']['left_below_menu_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_heading_size'] = array(
    '#title' => 'Heading text size', 
    '#type' => 'select',
    '#default_value' => $settings['left_below_menu_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_heading_color'] = array(
    '#title' => 'Heading color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['left_below_menu_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_below_menu_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['left_below_menu_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['left_below_menu_region_settings']['left_below_menu_region_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['left_below_menu_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * RIGHT TOP REGION STYLES & SETTINGS
   * 
   */
  
  $form['right_top_region_settings']['right_top_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_top_region_settings']['right_top_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_top_region_settings']['right_top_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_top_region_settings']['right_top_region_heading_color'] = array(
    '#title' => 'Heading text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_top_region_settings']['right_top_region_heading_size'] = array(
    '#title' => 'Heading text size', 
    '#type' => 'select',
    '#default_value' => $settings['right_top_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_top_region_settings']['right_top_region_font_color'] = array(
    '#title' => 'Font Color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_top_region_settings']['right_top_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['right_top_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_top_region_settings']['right_top_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_top_region_settings']['right_top_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['right_top_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_top_region_settings']['right_top_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['right_top_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_top_region_settings']['right_top_region_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_top_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * RIGHT CENTER REGION STYLES & SETTINGS
   * 
   */
  
  $form['right_center_region_settings']['right_center_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_center_region_settings']['right_center_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_center_region_settings']['right_center_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_center_region_settings']['right_center_region_heading_color'] = array(
    '#title' => 'Heading text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_center_region_settings']['right_center_region_heading_size'] = array(
    '#title' => 'Heading text size', 
    '#type' => 'select',
    '#default_value' => $settings['right_center_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_center_region_settings']['right_center_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['right_center_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_center_region_settings']['right_center_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_center_region_settings']['right_center_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_center_region_settings']['right_center_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['right_center_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_center_region_settings']['right_center_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['right_center_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_center_region_settings']['right_center_region_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_center_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  
  /*
   * 
   * RIGHT BELOW REGION STYLES & SETTINGS
   * 
   */
  
  $form['right_below_region_settings']['right_below_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_below_region_settings']['right_below_region_block_color'] = array(
    '#title' => 'Block background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_block_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_below_region_settings']['right_below_region_heading_background_color'] = array(
    '#title' => 'Heading background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_heading_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_below_region_settings']['right_below_region_heading_color'] = array(
    '#title' => 'heading text color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_heading_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_below_region_settings']['right_below_region_heading_size'] = array(
    '#title' => 'Heading text size', 
    '#type' => 'select',
    '#default_value' => $settings['right_below_region_heading_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_below_region_settings']['right_below_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['right_below_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_below_region_settings']['right_below_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_below_region_settings']['right_below_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['right_below_region_settings']['right_below_region_menu_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['right_below_region_menu_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_below_region_settings']['right_below_region_menu_sub_size'] = array(
    '#title' => 'Menu sub-item size', 
    '#type' => 'select',
    '#default_value' => $settings['right_below_region_menu_sub_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['right_below_region_settings']['right_below_region_menu_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['right_below_region_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  /*
   * 
   * FOOTER REGION STYLES & SETTINGS
   * 
   */
  
  $form['footer_region_settings']['footer_region_separator_color'] = array(
    '#title' => 'Separator color',
    '#description' => 'Color for the line that separated the main content from the footer region', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_region_separator_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['footer_region_settings']['footer_region_background_color'] = array(
    '#title' => 'Background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_region_background_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['footer_region_settings']['footer_region_font_color'] = array(
    '#title' => 'Font color', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_region_font_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['footer_region_settings']['footer_region_font_size'] = array(
    '#title' => 'Font size', 
    '#type' => 'select',
    '#default_value' => $settings['footer_region_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['footer_region_settings']['footer_region_link_color'] = array(
    '#title' => 'Link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_region_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['footer_region_settings']['footer_menu_height'] = array(
    '#title' => 'Footer menu height (px)', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_menu_height'],
  );
  
  $form['footer_region_settings']['footer_menu_color'] = array(
    '#title' => 'Menu background color', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_menu_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['footer_region_settings']['footer_menu_link_color'] = array(
    '#title' => 'Menu item link color', 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_menu_link_color'],
    '#attributes' => array('class' => $allColorPickerClass),
  );
  
  $form['footer_region_settings']['footer_region_menu_font_size'] = array(
    '#title' => 'Menu item size', 
    '#type' => 'select',
    '#default_value' => $settings['footer_region_menu_font_size'],
    '#options' => $fontSizeOptions,
  );
  
  $form['footer_region_settings']['footer_menu_align'] = array(
    '#title' => 'Horizontal menu alignment',
    '#type' => 'select',
    '#default_value' => $settings['footer_menu_align'],
  	'#options' => array(
      'left' => 'Left',
      'center' => 'Center',
  	  'right' => 'Right',
	),
  );
  
  
  
  $form['footer_region_settings']['copyright_information'] = array(
    '#title' => 'Copyright information',
    '#description' => t('Information about copyright holder of the website - will show up at the bottom of the page'), 
    '#type' => 'textfield',
    '#default_value' => $settings['copyright_information'],
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => FALSE,
  );
  
  $form['footer_region_settings']['footer_contact_information'] = array(
    '#title' => 'Contact Information Block',
    '#description' => t('For example: My Company Name, City, State Zip Phone: (555) 555-5555'), 
    '#type' => 'textfield',
    '#default_value' => $settings['footer_contact_information'],
    '#size' => 60, 
    '#maxlength' => 128, 
    '#required' => TRUE,
  );

  // Return the form widgets
  return $form;

}