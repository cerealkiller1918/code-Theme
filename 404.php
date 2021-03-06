<?php get_header();?>
<div class = 'row'>
<div class="col-md-12 content-area" id="main-column">
	<main id="main" class="site-main" role="main">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title text-center">Oops! That page can't be found.</h1>
			</header><!-- .page-header -->
			


			<!-- above the search bar -->
			<div class="page-content">
				<p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>



				<!--search form-->
				<form class="form-horizontal" method="get" action="<?php echo esc_url(home_url('/')); ?>" role="form">
					<div class="form-group">
						<div class="col-xs-10">
							<input type="text" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="Search..." title="<?php echo esc_attr_x('Search &hellip;', 'label', 'bootstrap-basic'); ?>" class="form-control" />
						</div>
						<div class="col-xs-2">
							<button type="submit" class="btn btn-default">Search</button>
						</div>
					</div>
				</form>



				<div class="row">
					<div class=" col-sm-6 col-md-3">
						<?php the_widget('WP_Widget_Recent_Posts'); ?> 
					</div>
					<div class=" col-sm-6 col-md-3">
						<div class="widget widget_categories">
							<h2 class="widgettitle"><?php _e('Most Used Categories', 'bootstrap-basic'); ?></h2>
							<ul>
								<?php
								wp_list_categories(array(
									'orderby' => 'count',
									'order' => 'DESC',
									'show_count' => 1,
									'title_li' => '',
									'number' => 10,
								));
								?> 
							</ul>
						</div><!-- .widget -->
					</div>
					<div class=" col-sm-6 col-md-3">
						<?php
						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', 'bootstrap-basic'), convert_smilies(':)')) . '</p>';
						the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
						?> 
					</div>
					<div class=" col-sm-6 col-md-3">
						<?php the_widget('WP_Widget_Tag_Cloud'); ?> 
					</div>
				</div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->
	</main>
</div>





<?php get_footer();?>