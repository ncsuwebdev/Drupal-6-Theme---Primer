<?php

	// pass variables to javascript so they can use the base path and theme path
	$js = "var base_path = '". base_path() . "';";
	drupal_add_js($js, 'inline');
	
	$themePath = drupal_get_path('theme', 'primer');
	drupal_add_js($themePath, 'inline');
	drupal_add_js('misc/collapse.js','core');

/*
* Initialize theme settings
*/
if (is_null(theme_get_setting('primer_center_layout'))) {  
  global $theme_key;

  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the theme-settings.php file.
   */
  $defaults = array(
		'primermanager_selected_configuration'	=> 'no-preset',
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
  		
  		'footer_region_separator_color'			=> '#CC0000',
  		'footer_region_background_color'		=> '#FFFFFF',
  		'footer_region_background_image_url'	=> '',
  		'footer_region_font_color'  			=> '#000000',
		'footer_region_link_color'				=> '#CC0000',
  		'footer_region_font_size'				=> '1.0em',
		'footer_contact_information'			=> 'My Awesome Project Website, Raleigh, NC 27695 Phone: (555) 555-5555',
  		'copyright_information' 				=> '© ' . date('Y', time()),		
  
  		'footer_menu_align'						=> 'center',
		'footer_menu_height'					=> '40px',
		'footer_menu_color'						=> '#666666',
		'footer_menu_link_color'				=> '#FFFFFF',
		'footer_region_menu_font_size'			=> '1.0em',
  		
		
  	);

  	  // Get default theme settings.
	  $settings = theme_get_settings($theme_key);
	  // Don't save the toggle_node_info_ variables.
	  if (module_exists('node')) {
	    foreach (node_get_types() as $type => $name) {
	      unset($settings['toggle_node_info_' . $type]);
	    }
	  }
	  // Save default theme settings.
	  variable_set(
	    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
	    array_merge($defaults, $settings)
	  );
	  // Force refresh of Drupal internals.
	  theme_get_setting('', TRUE);
	
}





/**
 * Return a themed breadcrumb trail.
 *
 * @param $breadcrumb
 *   An array containing the breadcrumb links.
 * @return
 *   A string containing the breadcrumb output.
 */


function primer_breadcrumb($breadcrumb) {
  // Wrap separator with span element.
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<span class="access">' . t('You are here') . '</span>';
    $output .= '<div class="breadcrumb">' . implode('<span class="separator"> ' . theme_get_setting('breadcrumb_separator') . '</span>', $breadcrumb) . '</div>';
    return $output;
  }
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function primer_preprocess_page(&$vars, $hook) {
	
	$vars['tabs2'] = menu_secondary_local_tasks();
	
	/* Add dynamic stylesheet */
  	ob_start();
  	//include('dynamic.css.php');
  	include(drupal_get_path('theme', 'primer') . '/css/base/dynamic.css.php');
  	$vars['dynamic_styles'] = ob_get_contents();
  	ob_end_clean();  
	
  	// Drupal wants us to set the indexes/custom variables ahead of time, or it will throw an error for the world to see (it will work, just with errors)
	$vars['page']['region-widths']['show-left-region'] = '';
	$vars['page']['region-widths']['show-right-region'] = '';
	
	// detect, set and store the widths for the different regions, based on what's being displayed (left, right, center and all combinations)
	$vars['page']['region-widths']['maxPageWidth'] = 96; // maximum number of columns in the grid system
	
	$vars['page']['region-widths']['breadcrumb'] = $vars['breadcrumb'];
	
	// if the page being rendered is the block config page for primer, then don't display the left or right regions
	if ($vars['template_files'][2] == 'page-admin-build-block') {
		$vars['page']['region-widths']['show-left-region'] = false;
		$vars['page']['region-widths']['show-right-region'] = false;
	} else {
	
		// check to see if there are left or right regions to make it easier to set widths of regions below
		if($vars['left_above_menu'] || $vars['left_primary_menu'] || $vars['left_secondary_menu'] || $vars['left_below_menu']) { 
			// there is something in the left region, so set the necessary widths here
			$vars['page']['region-widths']['show-left-region'] = true;
			$vars['page']['region-widths']['left-region-width'] = 23;
		}
			
		if($vars['right_above_sidebar'] || $vars['right_center_sidebar'] || $vars['right_below_sidebar']) {
			// there is something in the right region, so set the necessary widths here
			$vars['page']['region-widths']['show-right-region'] = true;
			$vars['page']['region-widths']['right-region-width'] = 27;
		}
	}
	
	// now check to see for combinations of the left and right showing or not, and set the width accordingly
	// set the center/right region width (everything to the right of the left region)
	if($vars['page']['region-widths']['show-left-region']) {
		$vars['page']['region-widths']['center-right-region-width'] = 73;
	} else {
		$vars['page']['region-widths']['center-right-region-width'] = $vars['page']['region-widths']['maxPageWidth'];
	}
	
	// set the center region width (not including the right region)
	if($vars['page']['region-widths']['show-left-region'] && $vars['page']['region-widths']['show-right-region']) {
		$vars['page']['region-widths']['center-region-width'] = 46; //if both left and right regions are showing
		$vars['page']['region-widths']['main-image-width'] = 73; // set the main image width too
	} elseif($vars['page']['region-widths']['show-left-region'] && !$vars['page']['region-widths']['show-right-region']) {
		$vars['page']['region-widths']['center-region-width'] = 73; // if only the left region is showing
		$vars['page']['region-widths']['main-image-width'] = 73; // set the main image width too
	} elseif(!$vars['page']['region-widths']['show-left-region'] && $vars['page']['region-widths']['show-right-region']) {
		$vars['page']['region-widths']['center-region-width'] = 68; // if only the right region is showing
		$vars['page']['region-widths']['main-image-width'] = 96; // set the main image width too
	} else {
		$vars['page']['region-widths']['center-region-width'] = $vars['page']['region-widths']['maxPageWidth']; // if neither left or right regions are showing
		$vars['page']['region-widths']['main-image-width'] = $vars['page']['region-widths']['maxPageWidth']; // set the main image width too
	}
	
	// detect if both the top and bottom site-title lines have values, and if not, set a variable for the css to center the single line in the header region
	if(theme_get_setting('title_top_line') && theme_get_setting('title_bottom_line')) {
		$vars['page']['region-widths']['site-title-two-lines'] = true;
	}
	
	// detect if the search bar or header region menu is displayed, and set the header region widths accordingly
	if ($vars['header_search'] || $vars['header_small_right_menu']) {
		$vars['page']['region-widths']['show-right-header-region'] = true;
		$vars['page']['region-widths']['region-header-left-width'] = 68;
		
	} else {
		$vars['page']['region-widths']['show-right-header-region'] = false;
		$vars['page']['region-widths']['region-header-left-width'] = 96;
	}
	
	//set the title image appropriately based on how much room there is to use: number of grids * 10 (pixels), minus 30 (pixels) for space
	$vars['page']['region-widths']['region-header-title-width'] = ($vars['page']['region-widths']['region-header-left-width'] * 10) - 30;
	
	// set 4 footer region widths
	$vars['page']['region-widths']['footer_four_regions'] = $vars['page']['region-widths']['maxPageWidth'] /4;
	
	// check to see if any of the 4 footer regions are available
	if($vars['footer_one'] || $vars['footer_two'] || $vars['footer_three'] || $vars['footer_four']) { 
			// there is something in the 4 columns region, so set variable accordingly
			$vars['page']['region-widths']['show-footer-four-regions'] = true;
		}
}

/**
 * Add a "Comments" heading above comments except on forum pages.
 */
function primer_preprocess_comment_wrapper(&$vars) {
  if ($vars['content'] && $vars['node']->type != 'forum') {
    $vars['content'] = '<h2 class="comments">'. t('Comments') .'</h2>'.  $vars['content'];
  }
}

/**
 * Returns the rendered local tasks. The default implementation renders
 * them as tabs. Overridden to split the secondary tasks.
 *
 * @ingroup themeable
 */
function primer_menu_local_tasks() {
  return menu_primary_local_tasks();
}

/**
 * Returns the themed submitted-by string for the comment.
 */
function primer_comment_submitted($comment) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $comment),
      '!datetime' => format_date($comment->timestamp)
    ));
}

/**
 * Returns the themed submitted-by string for the node.
 */
function primer_node_submitted($node) {
  return t('!datetime — !username',
    array(
      '!username' => theme('username', $node),
      '!datetime' => format_date($node->created),
    ));
}

/*
 * potentially obsolete function
 * 
*/
/*
function primer_system_settings_form($form) {
  // Collapse fieldsets
  $form_elements = element_children($form);
  foreach ($form_elements as $element) {
    if ($form[$element]['#type'] == 'fieldset') { //Identify fieldsets and collapse them
      $form[$element]['#collapsible'] = TRUE;
      $form[$element]['#collapsed'] = TRUE;
    }
  }
  
  return drupal_render($form);
}
*/
