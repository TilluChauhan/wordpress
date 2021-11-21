<?php get_header();?>
<?php $image=get_field('image');?>
<section class="sectionp1">

	<div class="container">
		<img style="width:100%;" src="<?php echo $image['url']?>"/>
		<div class="row">
		
			<div class="col-lg-12 col-md-12">
				<div class="c3">
					<div class="c10"><?php the_title();?></div>
					<div class=""><?php echo get_field('date');?>,<?php echo get_field('author_name')?></div>
					<div class=""><?php  the_content();?></div>
				</div>
				
				
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>