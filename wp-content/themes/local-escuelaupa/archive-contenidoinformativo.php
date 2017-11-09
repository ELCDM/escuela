<?php
the_post();
get_header();
?>
<main class="conten_content min5000 w-clearfix">
	<div class="titlehistoria titulcursos w-clearfix">
		<h1 class="titulseccion">contenido informativo</h1>
	</div>
	<div class="contentblog contentcursos">
		<div class="div960 w-clearfix">
			<?php
			$co = 0;
			$query = new WP_Query( array( 'post_type' => 'contenidoinformativo', 'posts_per_page'=> 12, 'orderby' => 'date', 'order' => 'DESC' ) );
			while ($query->have_posts()):$query->the_post();
			$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'contenido-informativo');
			?>
			<a class="unbloggrid uncurso w-clearfix w-inline-block" data-ix="scale-4" href="<?php the_permalink(); ?>">
				<img class="imgdecurs" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
				<h2 class="titulblog tituldecursgrid"><?php the_title(); ?></h2>
				<div class="descblog textdecurso"><?php the_excerpt(); ?></div>
			</a>
		</a>
		<?php
		$co++;
		endwhile;
		wp_reset_postdata();
		if($co > 6){
			?>
			<a class="link" href="#">VER MÁS</a>
			<?php } ?>
		</div>
	</div>
</main>
<?php
get_footer();
?>