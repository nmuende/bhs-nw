<?php get_header(); ?>
<!--begin main-->
			<div id="page-content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>">
					<?php the_content('<p class="serif">More &raquo;</p>'); ?>
	    			<?php edit_post_link('Edit this entry.', '<p class="clear"><small>', '</small></p>'); ?>
				</div>

				<?php endwhile; endif; ?>  

				<?php get_children_pages(); ?>

			</div><!--end page-content-->
			<!--start sidebar-->
			<?php choose_sidebar(); ?>
			<!--end sidebar-->
		</div><!--end main-inside-->	
	</div><!--end main-outside-->
	
<?php get_footer(); ?>