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
	$rightRegionBgColor = theme_get_setting('right_region_background_color');
	$rightRegionBlockColor = theme_get_setting('right_region_block_color');
	$rightRegionFontColor = theme_get_setting('right_region_font_color');
	$rightRegionLinkColor = theme_get_setting('right_region_link_color');
	$rightRegionMenuLinkColor = theme_get_setting('right_region_menu_link_color');
?>

body {
	font-size: <?php echo theme_get_setting('base_font_size'); ?>;
	font-family: <?php echo theme_get_setting('base_font_family'); ?>;
	<?php if(theme_get_setting('background_image_url') != ''): ?>
	background: url('<?php echo theme_get_setting('background_image_url'); ?>') <?php if(!theme_get_setting('background_image_tile')): echo 'no-repeat'; endif; ?>;
	<?php endif; ?>
	background-color: <?php echo theme_get_setting('background_color'); ?>;
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
}

#page-container {
	background-color:  <?php echo theme_get_setting('site_background_color'); ?>;
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


/*
 ***********************************************************************
 * LEFT AND RIGHT REGION CONDITIONAL STYLES (IE: BG == BLACK, SET FONT COLORS 
 ************************************************************************
*/

#region-left-menu { background-color: <?php echo $leftRegionColor; ?> }
#region-left-menu-area-container { color: <?php echo $leftRegionFontColor; ?>; }
#region-left-menu-area-container .block { background-color: <?php echo $leftRegionBlockColor; ?>; }
#region-left-menu { color:  <?php echo $leftRegionFontColor; ?>; } 
#region-left-menu-area-container h2 { color: <?php echo theme_get_setting('left_region_heading_color'); ?>; } 
#region-left-menu-area-container .content .menu li a { color: <?php echo $leftRegionMenuLinkColor; ?>; }
#region-left-menu-area-container .content .menu li a:hover { color: <?php echo $leftRegionMenuLinkColor; ?>; } 
#region-left-menu-area-container a, #region-left-menu-area-container a:visited { color: <?php echo $leftRegionLinkColor; ?>; }

/*
#region-right-sidebar-container { font-size: <?php echo theme_get_setting('right_region_font_size'); ?>; line-height: <?php echo theme_get_setting('right_region_font_size'); ?>; }

#region-right-sidebar { background-color: <?php echo $rightRegionBgColor; ?>; }
#region-right-sidebar-container .block { background-color: <?php echo $rightRegionBlockColor; ?>; }

#region-right-sidebar-container h2 { color: <?php echo theme_get_setting('right_region_heading_color'); ?>; } 
#region-right-sidebar-container .content .menu li a { color: <?php echo $rightRegionMenuLinkColor; ?>; }
#region-right-sidebar-container .content .menu li a:hover { color: <?php echo $rightRegionMenuLinkColor; ?>; } 
#region-right-sidebar a, #region-right-sidebar a:visited {color: <?php echo $rightRegionLinkColor; ?>; } 
#right-center-sidebar-content, #right-below-sidebar-content { color: <?php echo $rightRegionFontColor; ?>; } 
*/

/*
 ***********************************************************************
 * RIGHT TOP REGION CONDITIONAL STYLES (IE: BG == BLACK, SET FONT COLORS 
 ************************************************************************
*/

#right-above-sidebar { background-color: <?php echo theme_get_setting('right_top_region_background_color'); ?>; }
#region-right-above-sidebar-container .block { background-color: <?php echo theme_get_setting('right_top_region_block_color'); ?>; }
#region-right-above-sidebar-container { font-size: <?php echo theme_get_setting('right_top_region_font_size'); ?>; line-height: <?php echo theme_get_setting('right_top_region_font_size'); ?>; }
#region-right-above-sidebar-container h2 { color: <?php echo theme_get_setting('right_top_region_heading_color'); ?>; } 
#region-right-above-sidebar-container .content .menu li a { color: <?php echo theme_get_setting('right_top_region_menu_link_color'); ?>; }
#region-right-above-sidebar-container .content .menu li a:hover { color: <?php echo theme_get_setting('right_top_region_menu_link_color'); ?>; } 
#region-right-above-sidebar-container a, #region-right-above-sidebar-container a:visited {color: <?php echo theme_get_setting('right_top_region_link_color'); ?>; } 
#right-above-sidebar-content { color: <?php echo theme_get_setting('right_top_region_font_color'); ?>; } 

/*
 ***********************************************************************
 * RIGHT CENTER REGION CONDITIONAL STYLES (IE: BG == BLACK, SET FONT COLORS 
 ************************************************************************
*/

#right-center-sidebar { background-color: <?php echo theme_get_setting('right_center_region_background_color'); ?>; }
#region-right-center-sidebar-container .block { background-color: <?php echo theme_get_setting('right_center_region_block_color'); ?>; }
#region-right-center-sidebar-container { font-size: <?php echo theme_get_setting('right_center_region_font_size'); ?>; line-height: <?php echo theme_get_setting('right_center_region_font_size'); ?>; }
#region-right-center-sidebar-container h2 { color: <?php echo theme_get_setting('right_center_region_heading_color'); ?>; } 
#region-right-center-sidebar-container .content .menu li a { color: <?php echo theme_get_setting('right_center_region_menu_link_color'); ?>; }
#region-right-center-sidebar-container .content .menu li a:hover { color: <?php echo theme_get_setting('right_center_region_menu_link_color'); ?>; } 
#region-right-center-sidebar-container a, #region-right-center-sidebar-container a:visited {color: <?php echo theme_get_setting('right_center_region_link_color'); ?>; } 
#right-center-sidebar-content { color: <?php echo theme_get_setting('right_center_region_font_color'); ?>; } 

/*
 ***********************************************************************
 * RIGHT BOTTOM REGION CONDITIONAL STYLES (IE: BG == BLACK, SET FONT COLORS 
 ************************************************************************
*/

#right-below-sidebar { background-color: <?php echo theme_get_setting('right_below_region_background_color'); ?>; }
#region-right-below-sidebar-container .block { background-color: <?php echo theme_get_setting('right_below_region_block_color'); ?>; }
#region-right-below-sidebar-container { font-size: <?php echo theme_get_setting('right_below_region_font_size'); ?>; line-height: <?php echo theme_get_setting('right_below_region_font_size'); ?>; }
#region-right-below-sidebar-container h2 { color: <?php echo theme_get_setting('right_below_region_heading_color'); ?>; } 
#region-right-below-sidebar-container .content .menu li a { color: <?php echo theme_get_setting('right_below_region_menu_link_color'); ?>; }
#region-right-below-sidebar-container .content .menu li a:hover { color: <?php echo theme_get_setting('right_below_region_menu_link_color'); ?>; } 
#region-right-below-sidebar-container a, #region-right-above-sidebar-container a:visited {color: <?php echo theme_get_setting('right_below_region_link_color'); ?>; } 
#right-below-sidebar-content { color: <?php echo theme_get_setting('right_below_region_font_color'); ?>; } 


/*
 ***********************************************************************
 * FOOTER STYLES
 ************************************************************************
*/
#region-footer-container {
	color: <?php echo theme_get_setting('footer_region_font_color'); ?>;
	background-color: <?php echo theme_get_setting('footer_region_background_color'); ?>;
	font-size: <?php echo theme_get_setting('footer_region_font_size'); ?>;
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
#footer-horizontal-menu a {
	color: <?php echo theme_get_setting('footer_menu_link_color'); ?>;
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








