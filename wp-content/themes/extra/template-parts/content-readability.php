
	
<?php
if (have_posts()) {
  while (have_posts()) {
	the_post();


?>
	<section class="secr1">
		<div class="container r2">
			<div class="row">
				<div class="col-lg-12">
					<div class="r1">
						<h1 class="r4"><?php the_title();?></h1>
						<div class="r3"><?php the_content();?></div>
						<?php get_template_part('template-parts/content','feedback');?>
					</div>
				</div>
				
			</div>
		</div>
	</section>
<?php
  }
}
?>
