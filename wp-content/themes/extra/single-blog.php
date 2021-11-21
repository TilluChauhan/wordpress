
<?php get_header();?>
<?php  $attachment_id2 = get_field('dimage');?>
<section class="secs1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
			<div class="x1 c1">
				<div class="c2">
				<a class="qw11" href="<?php echo get_permalink();?>"><h1><?php the_title();?></h1></a>
					<div class="c3"><?php echo get_field('date');?></div>
				</div>
				<img  class="h-64 w-full object-cover overflow-hidden" src="<?php echo $attachment_id2['url']; ?>" alt="" />
				<div class="c2 c4"><?php the_content();?></div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>