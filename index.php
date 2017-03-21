<?php get_header(); ?>

<?php
	get_template_part( 'template-parts/test', 'page');
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>
			<a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
			<!-- <?php the_content(); ?> -->
			<?php
			
		}
	}else{
		echo "have nothing post";
	}
	get_sidebar();
	$cates = get_categories();
	foreach ($cates as $key => $value) {
		// var_dump($key);
		// var_dump($value);
		echo $value["name"];
		echo "<br>";

	}
?>
	<body>
		



<?php get_footer(); ?>
