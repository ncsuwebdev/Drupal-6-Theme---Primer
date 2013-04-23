<!DOCTYPE html>
<html lang="en-US">
	<head>
		<?php print $head ?>
		<title><?php print $head_title ?></title>
		<?php print $styles ?>
		<?php print $scripts ?>
		<style type="text/css" media="all"><?php print $dynamic_styles; ?></style>
	</head>
	<body>
            <!-- start accessibility links -->
            <div class="access skipNav">
                    <h2 role="navigation" aria-label="Accessibility Navigation List">Accessibility Navigation:</h2>
                            <ul>
                            <li><a href="#main-content-access" title="Skip to main content area">Skip to Main Content Area</a></li>
                            <?php if($breadcrumb): ?>
                                    <li><a href="#breadcrumb-access" title="Skip to breadcrumbs">Skip to breadcrumb list</a></li>
                            <?php endif; ?>
                            <?php if($horizontal_main_menu): ?>
                                    <li><a href="#horizontal-main-menu-access" title="Skip to main horizontal main menu">Skip to main horizontal menu</a></li>
                            <?php endif; ?>
                            <?php if($horizontal_secondary_menu): ?>
                                    <li><a href="#horizontal-secondary-menu-access" title="Skip to secondary horizontal main menu">Skip to secondary horizontal menu</a></li>
                            <?php endif; ?>
                            <?php if($page['region-widths']['show-left-region']): ?>
                                    <li><a href="#left-sidebar-access" title="Skip to left sidebar (primary navigation area)">Skip to left sidebar (primary navigation area)</a></li>
                            <?php endif; ?>
                            <?php if($page['region-widths']['show-right-region']): ?>
                                <li><a href="#right-sidebar-access" title="Skip to right sidebar">Skip to right sidebar</a></li>
                            <?php endif; ?>
                            <?php if($page['header_search']): ?>
                                <li><a href="#site-search-access" title="Skip to search this site">Skip to search this site</a></li>
                            <?php endif; ?>
                            <li><a href="#footer-access" title="Skip to footer">Skip to footer region</a></li>
                            </ul>
            </div>
            <!-- end accessibility links -->
    <div class="access" id="topOfPage">Top Of Page</div>
    <div id="total-page-wrapper">
		<div id="page-container" class="container_<?php echo $page['region-widths']['maxPageWidth']; ?>">
			<!-- start header container region with site title, quicklinks, search box etc -->
			<div id="header-background">
				<div id="region-header-container" class="container_<?php echo $page['region-widths']['maxPageWidth']; ?>">
					<div id="head">
						<div id="region-header-left" class="grid_<?php echo $page['region-widths']['region-header-left-width']; ?>">
					        <a href="<?php echo base_path(); ?>" title="Return to the homepage of this website">
					        	<?php if(theme_get_setting('site_title_top_line') == '' && theme_get_setting('site_title_bottom_line') == ''): // check to see if the title variable exist ?>
                                <div id="site-title" class="<?php if($page['region-widths']['site-title-two-lines']): echo 'site-title-two-lines'; else: echo 'site-title-one-line'; endif; ?>" style="height: 105px">
                                    <div>&nbsp;</div>
                                </div>
                                <?php else: ?>
                                <div id="site-title" class="<?php if($page['region-widths']['site-title-two-lines']): echo 'site-title-two-lines'; else: echo 'site-title-one-line'; endif; ?>">
						        	<h1>
						        		<div id="site-title-top-line"><?php echo theme_get_setting('site_title_top_line'); ?></div>
						        		<div id="site-title-bottom-line"><?php echo theme_get_setting('site_title_bottom_line'); ?></div>
						        	</h1>
						        </div>
                                <?php endif; ?>
					        </a>
					    </div>
					    <?php if ($page['region-widths']['show-right-header-region']): ?>
						    <div id="region-header-right" class="grid_28">
								<?php if($header_small_right_menu): ?>
						    	<div id="header-small-right-menu">
						    		 <?php print $header_small_right_menu; ?>
								</div>
								<?php endif; ?>
								<div id="head-forms" class="<?php if($header_small_right_menu): echo 'with-menu'; else: echo 'no-menu'; endif; ?>">
									<div class="access" id="site-search-access">Search this site</div>    	
								   	<div role="search" aria-label="Search this website" id="header-site-search">
										<?php print $header_search; ?>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<!--  End header container region -->
			<!--  START Horizontal Menu Region -->
			<?php if($horizontal_main_menu || $horizontal_secondary_menu): ?>
				<div id="horizontal-menu-container" class="grid_<?php echo $page['region-widths']['maxPageWidth']; ?>">
					<?php if($horizontal_main_menu): ?>
						<div id="horizontal-main-menu">
							<div class="access" id="horizontal-main-menu-access">Horizontal Main Menu</div>
							<?php print $horizontal_main_menu; ?>
						</div>
					<?php endif; ?>
					<?php if($horizontal_secondary_menu): ?>
						<div id="horizontal-secondary-menu">
							<div class="access" id="horizontal-secondary-menu-access">Horizontal Secondary Menu</id>
							<?php print $horizontal_secondary_menu; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<!--  End horizontal menu -->
			<!-- Start 3 column layout area -->
			<div id="content-area-container" class="container_<?php echo $page['region-widths']['maxPageWidth']; ?>">
				<div id="content-area" class="grid_<?php echo $page['region-widths']['maxPageWidth']; ?> <?php if($page['region-widths']['show-left-region']): echo 'content-area-background-with-left-column'; else: echo 'content-area-background-without-left-column'; endif;?>">
					<!-- begin grid for left side of the layout -->
					<?php if($page['region-widths']['show-left-region']): ?>
						<div class="access" id="left-sidebar-access" role="navigation" aria-label="Left Side Bar (Primary Navigation Area)">Left Side Bar (Primary Navigation Area)</div>    	
						<div class="grid_<?php echo $page['region-widths']['left-region-width']; ?>">
							<div id="region-left-menu-area-container" class="container_<?php echo $page['region-widths']['left-region-width']; ?>">
								<div id="region-left-menu" class="grid_<?php echo $page['region-widths']['left-region-width']; ?>">
									<?php if($left_above_menu): ?>
										<div id="left-above-menu" class="grid_<?php echo $page['region-widths']['left-region-width']; ?>">
								      		<div id="left-above-menu-content" aria-label="Left Region Above Menus">
												<?php print $left_above_menu; ?>
											</div>
										</div>
									<?php endif; ?>
									<?php if($left_primary_menu): ?>
										<div id="left-main-menu" class="grid_<?php echo $page['region-widths']['left-region-width']; ?>">
											<div id="left-main-menu-content" role="navigation" aria-label="Left Region Primary Menu">		
												<?php print $left_primary_menu; ?>
											</div>
										</div>
									<?php endif; ?>
									<?php if($left_secondary_menu): ?>
										<div id="left-sub-menu" class="grid_<?php echo $page['region-widths']['left-region-width']; ?>">
											<div id="left-sub-menu-content" role="navigation" aria-label="Left Region Secondary Menu">
												<?php print $left_secondary_menu; ?>
											</div>
										</div>
									<?php endif; ?>
									<?php if($left_below_menu): ?>
										<div id="left-below-menu" class="grid_<?php echo $page['region-widths']['left-region-width']; ?>">
								      		<div id="left-below-menu-content" aria-label="Left Region Below Menus">	
												<?php print $left_below_menu; ?>
											</div>
										</div>
									<?php endif; ?>
								</div>			
							</div>
						</div>
					<?php endif; ?>
					<!-- end grid for left side of the layout -->
					<!-- begin grid for center and right side of the layout -->
					<!-- check to see if there's a left bar and then set the width accordingly -->
					<div class="grid_<?php echo $page['region-widths']['center-right-region-width']; ?>">
						<div id="region-center-right-container" class="container_<?php echo $page['region-widths']['center-right-region-width']; ?>">
							<?php if($main_image): ?>
								<div id="region-main-image" class="grid_<?php echo $page['region-widths']['main-image-width']; ?>">
									<div class="alpha omega" aria-label="Main Image">
										<?php print $main_image; ?>
									</div>
								</div>
							<?php endif; ?>
							<div id="region-center-content-container" class="container_<?php echo $page['region-widths']['center-region-width']; ?>">
								<?php if ($breadcrumb && theme_get_setting('show_breadcrumbs')): ?>
								<div id="region-breadcrumbs" class="grid_<?php echo $page['region-widths']['center-region-width']; ?>">
									<div class="access" id="breadcrumb-access">Breadcrumbs</div>    	
									<div id="breadcrumb" class="alpha omega" role="navigation" aria-label="Breadcrumb Links List">
										<?php print $breadcrumb; ?>
									</div>
								</div>
								<?php endif; ?>
								<div id="main-content-wrapper" class="grid_<?php echo $page['region-widths']['center-region-width']; ?>">	
									<?php if($main_above_content): ?>
                                        <div id="above-main-content" aria-label="Above Main Content Area">  
                                            <?php print($main_above_content); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div id="main-content" role="main" aria-label="Main Content Area">	
										<div class="access" id="main-content-access"></div>
									    <?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
									    <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
									    <?php if ($title): print '<div id="page-title"><h1'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h1></div>'; endif; ?>
									    <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
									    <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
									    <?php if ($show_messages && $messages): print $messages; endif; ?>
									    <?php print $help; ?>
							          	<div class="clear-block">
							          		<?php print $content ?>
										</div>
										<?php print $feed_icons ?>
									</div>
                                    <?php if($main_below_content): ?>
                                        <div id="below-main-content" aria-label="Below Main Content Area">  
                                            <?php print($main_below_content); ?>
                                        </div>
                                    <?php endif; ?>
								</div>
							</div>
							<?php if($page['region-widths']['show-right-region']): ?>
								<div class="access" id="right-sidebar-access">Right Side Bar</div>    
								<div id="region-right-sidebar-container" class="container_<?php echo $page['region-widths']['right-region-width']; ?> <?php if ($breadcrumb && theme_get_setting('show_breadcrumbs') && $page['region-widths']['show-right-region']): echo 'right-sidebar-with-breadcrumbs'; endif; ?>">
										<div id="region-right-sidebar" class="grid_<?php echo $page['region-widths']['right-region-width']; ?>">
										<?php if($right_above_sidebar): ?>
											<div id="right-above-sidebar" class="grid_<?php echo $page['region-widths']['right-region-width']; ?>">
												<div id="right-above-sidebar-content" aria-label="Right Top Sidebar">
													<?php print $right_above_sidebar; ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if($right_center_sidebar): ?>
											<div id="right-center-sidebar" class="grid_<?php echo $page['region-widths']['right-region-width']; ?>">
												<div id="right-center-sidebar-content" aria-label="Right Center Sidebar">
													<?php print $right_center_sidebar; ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if($right_below_sidebar): ?>
											<div id="right-below-sidebar" class="grid_<?php echo $page['region-widths']['right-region-width']; ?>">
												<div id="right-below-sidebar-content" aria-label="Right Below Sidebar">
													<?php print $right_below_sidebar; ?>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
					<!-- end grid for center and right side of the layout -->
				</div>
			</div>
		</div>
		<!-- End 3 column layout area -->
		<!-- Start footer area (everything underneath the main content area) -->
        <div id="footer-separator" class="grid_<?php echo ($page['region-widths']['maxPageWidth']); ?>"></div>
		<div id="region-footer-container" class="container_<?php echo $page['region-widths']['maxPageWidth']; ?>">
			<div class="access" id="footer-access">Footer</div>    
			<?php if($footer_menu): ?>
				<div id="footer-horizontal-menu" class="grid_<?php echo $page['region-widths']['maxPageWidth']; ?>" role="contentinfo" aria-label="Footer">
					<?php print $footer_menu; ?>
				</div>
			<?php endif; ?>
            <?php if($page['region-widths']['show-footer-four-regions']):?>
	            <div id="footer_one" class="grid_<?php echo $page['region-widths']['footer_four_regions']; ?> footer_four_regions" role="contentinfo" aria-label="Footer">
	            	<?php if($footer_one): ?>
	                    	<?php print $footer_one; ?>
					<?php else: echo '&nbsp;'; endif; // echo empty space to make divs correct width @todo fix this the right way later ?>
	            </div>           
	            <div id="footer_two" class="grid_<?php echo $page['region-widths']['footer_four_regions']; ?> footer_four_regions" role="contentinfo" aria-label="Footer">
	            	<?php if($footer_two): ?>
	                    <?php print $footer_two; ?>
	                <?php else: echo '&nbsp;'; endif; // echo empty space to make divs correct width @todo fix this the right way later?>
	            </div>
	            <div id="footer_three" class="grid_<?php echo $page['region-widths']['footer_four_regions']; ?> footer_four_regions" role="contentinfo" aria-label="Footer">
	                <?php if($footer_three): ?>
						<?php print $footer_three; ?>
	                <?php else: echo '&nbsp;'; endif; // echo empty space to make divs correct width @todo fix this the right way later?>
	            </div>
	            <div id="footer_four" class="grid_<?php echo $page['region-widths']['footer_four_regions']; ?> footer_four_regions" role="contentinfo" aria-label="Footer">
	            	<?php if($footer_four): ?>
	                    <?php print $footer_four; ?>
	            	<?php else: echo '&nbsp;'; endif; // echo empty space to make divs correct width @todo fix this the right way later?>
	            </div>
             <?php endif; ?>   
             <?php if($footer_full): ?>           
            <div id="footer_full" class="grid_<?php echo $page['region-widths']['maxPageWidth']; ?> footer_full" role="contentinfo" aria-label="Footer">
                    <?php print $footer_full; ?>
            </div>
            <?php endif; ?>
			<div id="footer-address-contact-info" class="grid_<?php echo $page['region-widths']['maxPageWidth']; ?>">
				<?php echo theme_get_setting('footer_contact_information'); ?>
			</div>
			<div id="footer-copyright-information" class="grid_<?php echo $page['region-widths']['maxPageWidth']; ?>">
				<?php echo theme_get_setting('copyright_information'); ?>
			</div>
		</div>
	</div>
	<?php print $closure; ?>
	</body>
</html>
