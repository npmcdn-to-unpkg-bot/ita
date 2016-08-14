<?php get_header(); ?>
	
	<?php if(have_posts()): the_post(); ?>
		<div class="container">
			<article class="page">
				<div class="text-center">
					<h2 class="entry_title">
						<span><?php the_title(); ?></span>
					</h2>
				</div>

				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>