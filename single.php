<?php get_header();  ?>
<?php if(! have_posts()) : ?>
	<h1>Not Found</h1>
	<p>Aplogies for no results being Found</p>
<?php  endif; ?>


<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="post-details">
					<div class="post-details-left">
						Posted on <strong><?php the_date();   ?></strong> by <span class="author"><?php the_author();   ?></span> under <span class="author"><?php the_category( ', ' );   ?></span>
					</div>
					<div class="post-details-right">
						<?php edit_post_link(' _Edit', '<span class="comment-count">  ' , '</span>'); ?>
						<span class="comment-count"><?php comments_popup_link('Leave a comment   | ', '1 Comment', '% Comments'); ?></span>
					</div>
				</div> <!-- End Post details -->

				<?php if (is_archive() || is_search() ) : //Only display excerpts for Archive and Search ?>
					<?php the_excerpt(); ?>
				<?php else :   ?>
					<?php the_content('Read More' ); ?>
				<?php endif; ?>
	
				
		
				<div class="dots"></div>
			</div><!-- End post -->

<?php comments_template('', true ); ?>
<?php endwhile; ?>	


<div class="spacer"></div>
<?php get_footer(); ?>