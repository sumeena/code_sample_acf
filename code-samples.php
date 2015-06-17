<?php
/**
 * ACF used in Page Template to render different fields
**/

/** Link to check : http://wtalliance.staging.wpengine.com/resource-center/ **/

	// Gets Optional Header Space Banner from Page - on top
	echo (get_field('optional_header_space_image'))?'<div class="header-space"><a href="'.get_field('optional_header_space_link').'"><img src="'.get_field('optional_header_space_image').'"></a></div>':'';?> 

	<!-- Gets the Custom Page Description - Below Page Title  -->
	<h2 class="entry-desc"><?php the_field('page_description'); ?></h2>

	<!-- Displays the Featured Tool Widget - using ACF Plugin  -->
	<?php if(get_field('featured_tool_image') || get_field('featured_tool_title')): ?>
		<div class="tool-widget">
			<div class="tool-image"><img src="<?php the_field('featured_tool_image'); ?>"></div>
			<div class="tool-title"><h4>Featured Tool: <br><?php the_field('featured_tool_title'); ?></h4></div>
			<div class="tool-text"><?php the_field('featured_tool_content'); ?></div>
			<div class="tool-button"><a href=""><?php the_field('featured_tool_download_button_text'); ?></a></div>
		</div>
		<div style="display:none;">
			<div id="download-form">
				<?php 
				$did = get_field('featured_tool_download_button_id',get_the_ID());
				$cid = get_field('featured_tool_download_button_contact_id',get_the_ID());
				echo do_shortcode('[email-download download_id="'.$did.'" contact_form_id="'.$cid.'" title="Download Form"]');
				?>
			</div>
		</div>
	<?php endif; ?>

	<!-- Today's Tip section - using ACF Plugin  -->
	<?php if(get_field('todays_tip_to_succeed')): ?>
		<!-- Today's Tip section starts -->
		<div class="row">
			<?php $tip_class= ''; (get_field('image_for_todays_tip'))?$tip_class = 'col-lg-8 col-sm-8 col-xs-12':$tip_class='col-lg-12 col-sm-12 col-xs-12' ?>
			<div class="tip-left <?php echo $tip_class; ?>">
				<div class="tip-title">Today's Tip to Succeed:</div>
				<div class="tip-content"><?php the_field('todays_tip_to_succeed'); ?></div>
			</div>
			<?php echo (get_field('image_for_todays_tip'))?'<div class="tip-right col-lg-4 col-sm-4 col-xs-12"><img src="'.get_field('image_for_todays_tip').'"></div>':''; ?>
		</div><!--  .row  -->
		<!-- Today's Tip section ends -->
	<?php endif; ?>