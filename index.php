<?php get_header(); ?>

<div class = 'jumbotron'>
	<h1 class = 'text-center'>Justin Frasier</h1>
</div>
<div class = 'panel panel-default panel-body'>
	<div class = ' row'>
		<div id="categories" class= 'col-xs-0 col-sm-3 col-md-2'>
			<ul class = 'nav nav-pills nav-stacked'>
			<?php wp_list_categories('orderby=name&title_li='); ?>
			</ul>
		</div>
		<div class = 'body-meat'>
			<div class=' col-xs-12 col-sm-9 col-md-10'>
				<?php while(have_posts()) : the_post();?>
					<h3><a href="<?php the_permalink(); ?>"> <?php the_title( ); ?></a></h3>
					<?php the_excerpt(); ?>
					<p class="text-muted">Posted by <?php the_author(); ?> on <?php the_time( 'F jS, Y' ); ?> <?php  ?></p>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>	
	</div>
</div>








<?php get_footer(); ?>