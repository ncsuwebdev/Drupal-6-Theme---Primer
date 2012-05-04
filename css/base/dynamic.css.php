/* dynamic styles set via the theme options page inside the Drupal site by an Administrator */

<?php
	// set variables for easier referencing below in multiple places
	$mainMenuColor = strtoupper(theme_get_setting('horizontal_main_menu_color'));
	$secondaryMenuColor = strtoupper(theme_get_setting('horizontal_secondary_menu_color'));
	$leftRegionColor = theme_get_setting('left_region_color');
	$leftRegionBlockColor = theme_get_setting('left_region_block_color');
	$leftRegionFontColor = theme_get_setting('left_region_font_color');
	$leftRegionLinkColor = theme_get_setting('left_region_link_color');
	$leftRegionMenuLinkColor = theme_get_setting('left_region_menu_link_color');
?>

body {
	font-size: <?php echo theme_get_setting('base_font_size'); ?>;
	font-family: <?php echo theme_get_setting('base_font_family'); ?>;
	<?php if(theme_get_setting('background_image_url') != ''): ?>
	background: url('<?php echo theme_get_setting('background_image_url'); ?>') <?php if(!theme_get_setting('background_image_tile')): echo 'no-repeat'; endif; ?>;
	<?php endif; ?>
	background-color: <?php echo theme_get_setting('background_color'); ?>;
}
.messages, .warning, .error {
    padding: 5px;
    background-color: <?php echo theme_get_setting('site_link_color'); ?> !important;
    color: <?php echo theme_get_setting('site_background_color'); ?> !important;
    border: 2px solid <?php echo theme_get_setting('site_font_color'); ?> !important;
    margin: 1em 0 1em 0; 
}

.messages a, .warning a, .error a {
    color: <?php echo theme_get_setting('site_background_color'); ?> !important;
    text-decoration: underline !important;
}
.warning td, .warning td li a, .error td, .error td li a, .version-details a {
    color: <?php echo theme_get_setting('site_font_color'); ?> !important;
}
.warning .project, .warning .project a, .warning .project .version-status, .security-error {
    color: <?php echo theme_get_setting('site_background_color'); ?> !important;
}

input[type="submit"] {
    background-color: <?php echo theme_get_setting('site_font_color'); ?>;
    color: <?php echo theme_get_setting('site_background_color'); ?>;
}

#total-page-wrapper {
	<?php if(theme_get_setting('center_layout')): ?>
	margin: auto;
	<?php else: ?>
	margin: 0 0 0 0;
	<?php endif;?>
	-moz-box-shadow: 0 7px 7px 5px <?php echo theme_get_setting('drop_shadow_color'); ?>;
	-webkit-box-shadow: 0 7px 7px 5px <?php echo theme_get_setting('drop_shadow_color'); ?>;
	box-shadow: 0 7px 7px 5px <?php echo theme_get_setting('drop_shadow_color'); ?>;
	background: url('<?php echo theme_get_setting('site_background_image_url'); ?>') <?php if(!theme_get_setting('site_background_image_tile')): echo 'no-repeat'; endif; ?>;
	background-color: <?php echo theme_get_setting('site_background_color'); ?>;
	color: <?php echo theme_get_setting('site_font_color'); ?>;
	top: <?php echo theme_get_setting('total_page_wrapper_top_offset'); ?>;
	border: <?php echo theme_get_setting('site_border_size'); ?> solid <?php echo theme_get_setting('site_border_color'); ?>;
	-moz-border-radius: <?php echo theme_get_setting('header_rc'); ?>;
    border-radius: <?php echo theme_get_setting('header_rc'); ?>;
    -moz-border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
    border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
    margin-bottom: 4em;
}

#page-container {
	background-color:  <?php echo theme_get_setting('site_background_color'); ?>;
	-moz-border-radius: <?php echo theme_get_setting('header_rc'); ?>;
    border-radius: <?php echo theme_get_setting('header_rc'); ?>;
    -moz-border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
    border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
}

#header-background {
	-moz-border-radius: <?php echo theme_get_setting('header_rc'); ?>;
    border-radius: <?php echo theme_get_setting('header_rc'); ?>;
    -moz-border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
    border-radius: <?php echo theme_get_setting('footer_rc'); ?>;	
}

#region-center-right-container a,
#region-center-right-container a,
#region-center-right-container a:visited, 
#region-center-right-container a:hover, 
#breadcrumb a {
	color: <?php echo theme_get_setting('site_link_color'); ?>;
}

#main-content #page-title h1 {
	color: <?php echo theme_get_setting('site_heading_color'); ?>;
}
#region-header-container {
    height: <?php echo theme_get_setting('site_title_height'); ?>;
}

#site-title h1 {
	font-size: <?php echo theme_get_setting('site_title_font_size'); ?>;
}

#header-background {
	background-color: <?php echo theme_get_setting('site_title_bg_color'); ?>;
	<?php if(theme_get_setting('header_background_image_url') != ''): ?>
		background: <?php echo theme_get_setting('site_title_bg_color'); ?> url('<?php echo theme_get_setting('header_background_image_url'); ?>') no-repeat;
	<?php endif; ?>
}

#site-title {
	font-family: <?php echo theme_get_setting('site_title_font_family'); ?>;
}

#site-title h1 {
	color: <?php echo theme_get_setting('site_title_text_color'); ?>;
	top: <?php echo theme_get_setting('site_title_vertical_offset'); ?>;
	left: <?php echo theme_get_setting('site_title_horizontal_offset'); ?>;
}

#region-header-right #header-small-right-menu {
	font-size: <?php echo theme_get_setting('header_small_menu_font_size'); ?>;
	color: <?php echo theme_get_setting('header_small_menu_font_color'); ?>;
	height: <?php echo theme_get_setting('header_small_menu_height'); ?>;
}
#region-header-right #header-small-right-menu a, #region-header-right #header-small-right-menu a:visited {
	color: <?php echo theme_get_setting('header_small_menu_font_color'); ?>;
}
#head-forms {
	top: <?php echo theme_get_setting('header_search_region_offset'); ?>;
}

#region-left-menu-area-container {
	font-size: <?php echo theme_get_setting('left_region_font_size'); ?>;
}

/*
 ***********************************************************************
 * HORIZONTAL MENU STYLES
 ************************************************************************
*/

#horizontal-main-menu, #horizontal-main-menu ul.menu, #horizontal-main-menu ul {
	background-color: <?php echo $mainMenuColor; ?>;
}
#horizontal-secondary-menu, #horizontal-secondary-menu ul.menu {
	background-color: <?php echo $secondaryMenuColor; ?>;
}

#horizontal-main-menu {
	font-size: <?php echo theme_get_setting('horizontal_main_menu_font_size'); ?>;
	height: <?php echo theme_get_setting('horizontal_main_menu_height'); ?>;
	line-height: <?php echo theme_get_setting('horizontal_main_menu_height'); ?>;
}
#horizontal-secondary-menu {
	font-size: <?php echo theme_get_setting('horizontal_secondary_menu_font_size'); ?>;
	height: <?php echo theme_get_setting('horizontal_secondary_menu_height'); ?>;
	line-height: <?php echo theme_get_setting('horizontal_secondary_menu_height'); ?>;
}
#horizontal-main-menu ul.menu {
	min-height: <?php echo theme_get_setting('horizontal_main_menu_height'); ?>;
}
#horizontal-secondary-menu ul.menu {
	min-height: <?php echo theme_get_setting('horizontal_secondary_menu_height'); ?>;
}



<?php if(theme_get_setting('horizontal_main_menu_align') == 'center'): ?>
	#horizontal-main-menu {
	   	text-align: center;
	}
	#horizontal-main-menu ul {
	    margin: auto;
	}
	#horizontal-main-menu .block ul {
		margin: inherit 0 inherit 0 !important;
		padding: inherit 0 inherit 0 !important;
	}
<?php elseif(theme_get_setting('horizontal_main_menu_align') == 'left'): ?>
    #horizontal-main-menu {
	   	text-align: left;
	}
	#horizontal-main-menu ul {
	    margin: 0;
	}
<?php elseif(theme_get_setting('horizontal_main_menu_align') == 'right'): ?>
    #horizontal-main-menu {
	   	text-align: right;
	}
	#horizontal-main-menu ul {
	    margin: 0;
	}
<?php endif; ?>

<?php if(theme_get_setting('horizontal_secondary_menu_align') == 'center'): ?>
	#horizontal-secondary-menu {
	   	text-align: center;
	}
	#horizontal-secondary-menu ul {
	    margin: auto;
	    padding: 0;
	}
	#horizontal-secondary-menu .block ul {
		margin: inherit 0 inherit 0 !important;
		padding: inherit 0 inherit 0 !important;
	}
<?php elseif(theme_get_setting('horizontal_secondary_menu_align') == 'left'): ?>
    #horizontal-secondary-menu {
	   	text-align: left;
	}
	#horizontal-secondary-menu ul {
	    margin: 0;
	}
<?php elseif(theme_get_setting('horizontal_secondary_menu_align') == 'right'): ?>
    #horizontal-secondary-menu {
	   	text-align: right;
	}
	#horizontal-secondary-menu ul {
	    margin: 0;
	}
<?php endif; ?>

/*
 ***********************************************************************
 * HORIZONTAL MENU CONDITIONAL STYLES
 ************************************************************************
*/

#horizontal-main-menu a, #horizontal-main-menu a:visited {
	color: <?php echo theme_get_setting('horizontal_main_menu_link_color'); ?>;
}
#horizontal-main-menu a:hover {
	color: <?php echo theme_get_setting('horizontal_main_menu_link_hover_color'); ?>;
}

#horizontal-secondary-menu a,#horizontal-secondary-menu a:visited { 
	color: <?php echo theme_get_setting('horizontal_secondary_menu_link_color'); ?>;
}
#horizontal-secondary-menu a:hover {
	color: <?php echo theme_get_setting('horizontal_secondary_menu_link_hover_color'); ?>;
}
#horizontal-main-menu, #horizontal-main-menu ul.menu {
   -moz-border-radius: <?php echo theme_get_setting('horizontal_main_menu_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('horizontal_main_menu_rc_region'); ?>;
}
#horizontal-secondary-menu, #horizontal-secondary-menu ul.menu {
   -moz-border-radius: <?php echo theme_get_setting('horizontal_secondary_menu_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('horizontal_secondary_menu_rc_region'); ?>;
}

/*
 ***********************************************************************
 * LEFT ABOVE MENU REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#left-above-menu .content p { margin-bottom: <?php echo theme_get_setting('left_above_menu_region_font_size'); ?>; }
#left-above-menu { background-color: <?php echo theme_get_setting('left_above_menu_region_background_color'); ?>; }
#left-above-menu .block { 
	background-color: <?php echo theme_get_setting('left_above_menu_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_above_menu_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('left_above_menu_region_rc_content'); ?>;
}
#left-above-menu { font-size: <?php echo theme_get_setting('left_above_menu_region_font_size'); ?>; }
#left-above-menu .content .menu li a { font-size: <?php echo theme_get_setting('left_above_menu_region_menu_size'); ?>;  }
#left-above-menu .content .menu li li a { font-size: <?php echo theme_get_setting('left_above_menu_region_menu_sub_size'); ?>; }
#left-above-menu h2 { font-size: <?php echo theme_get_setting('left_above_menu_region_heading_size'); ?>; }
#left-above-menu h2 { color: <?php echo theme_get_setting('left_above_menu_region_heading_color'); ?>; } 
#left-above-menu .content .menu li a { color: <?php echo theme_get_setting('left_above_menu_region_menu_link_color'); ?>; }
#left-above-menu .content .menu li a:hover { color: <?php echo theme_get_setting('left_above_menu_region_menu_link_color'); ?>; } 
#left-above-menu a, #left-above-menu a:visited {color: <?php echo theme_get_setting('left_above_menu_region_link_color'); ?>; } 
#left-above-menu-content { color: <?php echo theme_get_setting('left_above_menu_region_font_color'); ?>; } 
#left-above-menu-content h2 { 
	background-color: <?php echo theme_get_setting('left_above_menu_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_above_menu_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('left_above_menu_region_rc_head'); ?>;
}
#left-above-menu {
	-moz-border-radius: <?php echo theme_get_setting('left_above_menu_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('left_above_menu_region_rc_region'); ?>;
}

/*
 ***********************************************************************
 * LEFT MAIN MENU REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#left-main-menu .content p { margin-bottom: <?php echo theme_get_setting('left_main_menu_region_font_size'); ?>; }
#left-main-menu { background-color: <?php echo theme_get_setting('left_main_menu_region_background_color'); ?>; }
#left-main-menu .block { 
	background-color: <?php echo theme_get_setting('left_main_menu_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_main_menu_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('left_main_menu_region_rc_content'); ?>;
}
#left-main-menu { font-size: <?php echo theme_get_setting('left_main_menu_region_font_size'); ?>;  }
#left-main-menu .content .menu li a { font-size: <?php echo theme_get_setting('left_main_menu_region_menu_size'); ?>; }
#left-main-menu .content .menu li li a { font-size: <?php echo theme_get_setting('left_main_menu_region_menu_sub_size'); ?>;  }
#left-main-menu h2 { font-size: <?php echo theme_get_setting('left_main_menu_region_heading_size'); ?>;  }
#left-main-menu h2 { color: <?php echo theme_get_setting('left_main_menu_region_heading_color'); ?>; } 
#left-main-menu .content .menu li a { color: <?php echo theme_get_setting('left_main_menu_region_menu_link_color'); ?>; }
#left-main-menu .content .menu li a:hover { color: <?php echo theme_get_setting('left_main_menu_region_menu_link_color'); ?>; } 
#left-main-menu a, #left-main-menu a:visited {color: <?php echo theme_get_setting('left_main_menu_region_link_color'); ?>; } 
#left-main-menu-content { color: <?php echo theme_get_setting('left_main_menu_region_font_color'); ?>; } 
#left-main-menu-content h2 { 
	background-color: <?php echo theme_get_setting('left_main_menu_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_main_menu_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('left_main_menu_region_rc_head'); ?>;
}
#left-main-menu {
	-moz-border-radius: <?php echo theme_get_setting('left_main_menu_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('left_main_menu_region_rc_region'); ?>;
}
/*
 ***********************************************************************
 * LEFT SUB/SECONDARY MENU REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#left-sub-menu .content p { margin-bottom: <?php echo theme_get_setting('left_sub_menu_region_font_size'); ?>; }
#left-sub-menu { background-color: <?php echo theme_get_setting('left_sub_menu_region_background_color'); ?>; }
#left-sub-menu .block { 
	background-color: <?php echo theme_get_setting('left_sub_menu_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_sub_menu_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('left_sub_menu_region_rc_content'); ?>;
}
}
#left-sub-menu { font-size: <?php echo theme_get_setting('left_sub_menu_region_font_size'); ?>;  }
#left-sub-menu .content .menu li a { font-size: <?php echo theme_get_setting('left_sub_menu_region_menu_size'); ?>;  }
#left-sub-menu .content .menu li li a { font-size: <?php echo theme_get_setting('left_sub_menu_region_menu_sub_size'); ?>;  }
#left-sub-menu h2 { font-size: <?php echo theme_get_setting('left_sub_menu_region_heading_size'); ?>;  }
#left-sub-menu h2 { color: <?php echo theme_get_setting('left_sub_menu_region_heading_color'); ?>; } 
#left-sub-menu .content .menu li a { color: <?php echo theme_get_setting('left_sub_menu_region_menu_link_color'); ?>; }
#left-sub-menu .content .menu li a:hover { color: <?php echo theme_get_setting('left_sub_menu_region_menu_link_color'); ?>; } 
#left-sub-menu a, #left-sub-menu a:visited {color: <?php echo theme_get_setting('left_sub_menu_region_link_color'); ?>; } 
#left-sub-menu-content { color: <?php echo theme_get_setting('left_sub_menu_region_font_color'); ?>; } 
#left-sub-menu-content h2 { 
	background-color: <?php echo theme_get_setting('left_sub_menu_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_sub_menu_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('left_sub_menu_region_rc_head'); ?>;
}
#left-sub-menu {
	-moz-border-radius: <?php echo theme_get_setting('left_sub_menu_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('left_sub_menu_region_rc_region'); ?>;
}
/*
 ***********************************************************************
 * LEFT BELOW MENU REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#left-below-menu .content p { margin-bottom: <?php echo theme_get_setting('left_below_menu_region_font_size'); ?>; }
#left-below-menu { background-color: <?php echo theme_get_setting('left_below_menu_region_background_color'); ?>; }
#left-below-menu .block { 
	background-color: <?php echo theme_get_setting('left_below_menu_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_below_menu_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('left_below_menu_region_rc_content'); ?>;
}
#left-below-menu { font-size: <?php echo theme_get_setting('left_below_menu_region_font_size'); ?>;  }
#left-below-menu .content .menu li a { font-size: <?php echo theme_get_setting('left_below_menu_region_menu_size'); ?>;  }
#left-below-menu .content .menu li li a { font-size: <?php echo theme_get_setting('left_below_menu_region_menu_sub_size'); ?>;  }
#left-below-menu h2 { font-size: <?php echo theme_get_setting('left_below_menu_region_heading_size'); ?>;  }
#left-below-menu h2 { color: <?php echo theme_get_setting('left_below_menu_region_heading_color'); ?>; } 
#left-below-menu .content .menu li a { color: <?php echo theme_get_setting('left_below_menu_region_menu_link_color'); ?>; }
#left-below-menu .content .menu li a:hover { color: <?php echo theme_get_setting('left_below_menu_region_menu_link_color'); ?>; } 
#left-below-menu a, #left-below-menu a:visited {color: <?php echo theme_get_setting('left_below_menu_region_link_color'); ?>; } 
#left-below-menu-content { color: <?php echo theme_get_setting('left_below_menu_region_font_color'); ?>; } 
#left-below-menu-content h2 { 
	background-color: <?php echo theme_get_setting('left_below_menu_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('left_below_menu_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('left_below_menu_region_rc_head'); ?>;
}
#left-below-menu {
	-moz-border-radius: <?php echo theme_get_setting('left_below_menu_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('left_below_menu_region_rc_region'); ?>;
}

/*
 ***********************************************************************
 * RIGHT TOP REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#right-above-sidebar-content .content p { margin-bottom: <?php echo theme_get_setting('right_top_region_font_size'); ?>; }
#right-above-sidebar { background-color: <?php echo theme_get_setting('right_top_region_background_color'); ?>; }
#right-above-sidebar .block { 
	background-color: <?php echo theme_get_setting('right_top_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('right_top_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('right_top_region_rc_content'); ?>;
}
#right-above-sidebar { font-size: <?php echo theme_get_setting('right_top_region_font_size'); ?>;  }
#right-above-sidebar .content .menu li a { font-size: <?php echo theme_get_setting('right_top_region_menu_size'); ?>;  }
#right-above-sidebar .content .menu li li a { font-size: <?php echo theme_get_setting('right_top_region_menu_sub_size'); ?>;  }
#right-above-sidebar h2 { font-size: <?php echo theme_get_setting('right_top_region_heading_size'); ?>;  }
#right-above-sidebar h2 { color: <?php echo theme_get_setting('right_top_region_heading_color'); ?>; } 
#right-above-sidebar .content .menu li a { color: <?php echo theme_get_setting('right_top_region_menu_link_color'); ?>; }
#right-above-sidebar .content .menu li a:hover { color: <?php echo theme_get_setting('right_top_region_menu_link_color'); ?>; } 
#right-above-sidebar a, #right-above-sidebar a:visited {color: <?php echo theme_get_setting('right_top_region_link_color'); ?>; } 
#right-above-sidebar-content { color: <?php echo theme_get_setting('right_top_region_font_color'); ?>; } 
#right-above-sidebar-content h2 { 
	background-color: <?php echo theme_get_setting('right_top_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('right_top_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('right_top_region_rc_head'); ?>;
}
#right-above-sidebar {
	-moz-border-radius: <?php echo theme_get_setting('right_top_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('right_top_region_rc_region'); ?>;
}

/*
 ***********************************************************************
 * RIGHT CENTER REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#right-center-sidebar-content .content p { margin-bottom: <?php echo theme_get_setting('right_center_region_font_size'); ?>; }
#right-center-sidebar { background-color: <?php echo theme_get_setting('right_center_region_background_color'); ?>; }
#right-center-sidebar .block { 
	background-color: <?php echo theme_get_setting('right_center_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('right_center_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('right_center_region_rc_content'); ?>;
}
#right-center-sidebar { font-size: <?php echo theme_get_setting('right_center_region_font_size'); ?>;  }
#right-center-sidebar .content .menu li a { font-size: <?php echo theme_get_setting('right_center_region_menu_size'); ?>;  }
#right-center-sidebar .content .menu li li a { font-size: <?php echo theme_get_setting('right_center_region_menu_sub_size'); ?>;  }
#right-center-sidebar h2 { font-size: <?php echo theme_get_setting('right_center_region_heading_size'); ?>;  }
#right-center-sidebar h2 { color: <?php echo theme_get_setting('right_center_region_heading_color'); ?>; } 
#right-center-sidebar .content .menu li a { color: <?php echo theme_get_setting('right_center_region_menu_link_color'); ?>; }
#right-center-sidebar .content .menu li a:hover { color: <?php echo theme_get_setting('right_center_region_menu_link_color'); ?>; } 
#right-center-sidebar a, #right-center-sidebar a:visited {color: <?php echo theme_get_setting('right_center_region_link_color'); ?>; } 
#right-center-sidebar-content { color: <?php echo theme_get_setting('right_center_region_font_color'); ?>; } 
#right-center-sidebar-content h2 { 
	background-color: <?php echo theme_get_setting('right_center_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('right_center_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('right_center_region_rc_head'); ?>;
}
#right-center-sidebar {
	-moz-border-radius: <?php echo theme_get_setting('right_center_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('right_center_region_rc_region'); ?>;
}

/*
 ***********************************************************************
 * RIGHT BOTTOM REGION CONDITIONAL STYLES 
 ************************************************************************
*/

#right-below-sidebar-content .content p { margin-bottom: <?php echo theme_get_setting('right_below_region_font_size'); ?>; }
#right-below-sidebar { background-color: <?php echo theme_get_setting('right_below_region_background_color'); ?>; }
#right-below-sidebar .block { 
	background-color: <?php echo theme_get_setting('right_below_region_block_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('right_below_region_rc_content'); ?>;
    border-radius: <?php echo theme_get_setting('right_below_region_rc_content'); ?>;
}
#right-below-sidebar { font-size: <?php echo theme_get_setting('right_below_region_font_size'); ?>;  }
#right-below-sidebar .content .menu li a { font-size: <?php echo theme_get_setting('right_below_region_menu_size'); ?>;  }
#right-below-sidebar .content .menu li li a { font-size: <?php echo theme_get_setting('right_below_region_menu_sub_size'); ?>;  }
#right-below-sidebar h2 { font-size: <?php echo theme_get_setting('right_below_region_heading_size'); ?>;  }
#right-below-sidebar h2 { color: <?php echo theme_get_setting('right_below_region_heading_color'); ?>; } 
#right-below-sidebar .content .menu li a { color: <?php echo theme_get_setting('right_below_region_menu_link_color'); ?>; }
#right-below-sidebar .content .menu li a:hover { color: <?php echo theme_get_setting('right_below_region_menu_link_color'); ?>; } 
#right-below-sidebar a, #region-right-above-sidebar-container a:visited {color: <?php echo theme_get_setting('right_below_region_link_color'); ?>; } 
#right-below-sidebar-content { color: <?php echo theme_get_setting('right_below_region_font_color'); ?>; } 
#right-below-sidebar-content h2 { 
	background-color: <?php echo theme_get_setting('right_below_region_heading_background_color'); ?>; 
	-moz-border-radius: <?php echo theme_get_setting('right_below_region_rc_head'); ?>;
    border-radius: <?php echo theme_get_setting('right_below_region_rc_head'); ?>;
}
#right-below-sidebar {
	-moz-border-radius: <?php echo theme_get_setting('right_below_region_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('right_below_region_rc_region'); ?>;
}

/*
 ***********************************************************************
 * FOOTER STYLES
 ************************************************************************
*/
#region-footer-container {
	color: <?php echo theme_get_setting('footer_region_font_color'); ?>;
	background-color: <?php echo theme_get_setting('footer_region_background_color'); ?>;
	font-size: <?php echo theme_get_setting('footer_region_font_size'); ?>;
    <?php if(theme_get_setting('footer_region_background_image_url') != ''): ?>
    background: url('<?php echo theme_get_setting('footer_region_background_image_url'); ?>');
    <?php endif; ?>
    -moz-border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
    border-radius: <?php echo theme_get_setting('footer_rc'); ?>;
}
  

#region-footer-container a, #region-footer-container a:visited {
	color: <?php echo theme_get_setting('footer_region_link_color'); ?>;
}

#footer-separator {
	background-color: <?php echo theme_get_setting('footer_region_separator_color'); ?>;
}

#footer-horizontal-menu {
	font-size: <?php echo theme_get_setting('footer_region_menu_font_size'); ?>;
	height: <?php echo theme_get_setting('footer_menu_height'); ?>;
}
#footer-horizontal-menu ul li {
    line-height: <?php echo theme_get_setting('footer_menu_height'); ?>;
}


<?php if(theme_get_setting('footer_menu_align') == 'center'): ?>
	#footer-horizontal-menu {
	   	text-align: center;
	}
	#footer-horizontal-menu ul {
	    margin: auto;
	    padding: 0;
	}
<?php elseif(theme_get_setting('footer_menu_align') == 'left'): ?>
    #footer-horizontal-menu {
	   	text-align: left;
	}
	#footer-horizontal-menu ul {
	    margin: 0 0 0 10px;
	}
<?php elseif(theme_get_setting('footer_menu_align') == 'right'): ?>
    #footer-horizontal-menu {
	   	text-align: right;
	}
	#footer-horizontal-menu ul {
	    margin: 0 10px 0 0;
	}
<?php endif; ?>

#footer-horizontal-menu {
	background-color: <?php echo theme_get_setting('footer_menu_color'); ?>;
}
#footer-horizontal-menu a, #footer-horizontal-menu a:visited {
	color: <?php echo theme_get_setting('footer_menu_link_color'); ?>;
}
#footer-horizontal-menu, #footer-horizontal-menu ul.menu {
   -moz-border-radius: <?php echo theme_get_setting('footer_region_menu_rc_region'); ?>;
    border-radius: <?php echo theme_get_setting('footer_region_menu_rc_region'); ?>;
}



/*
 ***********************************************************************
 * Custom styles based on dynamic colors (for built-in drupal elements)
 ************************************************************************
*/
ul.primary li a, ul.primary li a:hover {
	background-color:  <?php echo theme_get_setting('site_background_color'); ?>;
}
ul.primary li.active a, #comment-form .form-submit {
	background-color:  <?php echo theme_get_setting('site_link_color'); ?>;
	color: <?php echo theme_get_setting('site_background_color'); ?> !important;
}
form, td {
	background-color: inherit;
}
fieldset {
	border: 1px solid <?php echo theme_get_setting('site_link_color'); ?>;

}
legend, legend a {
	background-color:  <?php echo theme_get_setting('site_link_color'); ?> !important;
	color: <?php echo theme_get_setting('site_background_color'); ?> !important;
}









