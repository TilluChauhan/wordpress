
<?php get_header();?>
<?php  $attachment_id2 = get_field('dimage');?>
<section class="z5">
	<img class="z3" src="<?php echo $attachment_id2['url']?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="z1">
					<div ><h1 class="z4"><?php the_title();?></h1></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-md-8">
				<div><?php the_content();?></div>
			</div>
		</div>
	</div>
	
</section>
<?php get_footer();?>