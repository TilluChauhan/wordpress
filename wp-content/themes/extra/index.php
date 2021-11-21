<?php get_header();?>
	
	
	<?php if(is_page(83)){
		get_template_part('template-parts/content','readability');
	}elseif(is_page(107)){
		get_template_part('template-parts/content','HTML');
	}else{
		get_template_part('template-parts/content','home');
	}
		
	?>


	
		
<?php get_footer();?>
	
	