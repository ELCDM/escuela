<?php
get_header();
the_post();	
?>
<main class="conten_content min5000 w-clearfix">
	<div class="titlehistoria titulcursos w-clearfix">
		<h1 class="titulseccion">CURSOS</h1>
	</div>
	<div class="contentcursos">
		<div class="div960 w-clearfix">
			<?php
			$co = 0;
			$query = new WP_Query( array( 'post_type' => 'cursos', 'posts_per_page'=> 6, 'orderby' => 'date', 'order' => 'DESC' ) );
			while ($query->have_posts()):$query->the_post();
			$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
			$iniciocursos = get_post_meta( get_the_ID(), 'wpcf-fecha-de-incio', true );
			?>
			<a class="uncurso w-clearfix w-inline-block" data-ix="scale-propio-2" href="<?php the_permalink(); ?>">
				<img class="imgdecurs" src="<?php echo $post_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
				<h2 class="tituldecursgrid"><?php the_title(); ?></h2>
				<div class="textdecurso"><?php the_excerpt(); ?></div>
				<div class="fechcursgrid"><?php echo $iniciocursos; ?></div>
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
	</main>					<?php
	get_footer();
	?>