<?php get_header();?>
	
 
<?php if(is_page(83)){
		get_template_part('template-parts/content','readability');
	}elseif(is_page(107)){
		get_template_part('template-parts/content','HTML');
	}elseif(is_page(141)){
		get_template_part('template-parts/content','bloglist');
	}elseif(is_page(152)){
		get_template_part('template-parts/content','service');
	}else{
		get_template_part('template-parts/content','home');
	}
		
	?>
	
	
<?php get_footer();?>