<?php get_header();  ?>
<?php if(! have_posts()) : ?>
	<h1>Not Found</h1>
	<p>Aplogies for no results being Found</p>
<?php  endif; ?>


<?php while (have_posts()) : the_post(); ?>

			<div class="post">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				

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