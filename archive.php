<?php get_header(); get_sidebar(); ?>	   
     
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			<div class="post">
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
			</div>
			
		<?php endwhile; wp_corenavi(); else : ?>
		<h2>Не найдено</h2>
		<p>К сожалению, но вы запросили то, чего здесь нет.</p>		
	<?php endif; ?>
</div> 

<?php get_footer(); ?>
   