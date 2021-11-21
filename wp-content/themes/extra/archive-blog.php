<?php get_header();?>
<section class="secho">
	<div class="container">
	
		<div class="row">
<?php
	if(have_posts()){
		$list=array(
		'post_type' => 'blog',
		);
		$listblog=new WP_Query($list);
		while($listblog->have_posts()){
			$listblog->the_post();
			 $attachment_id1 = get_field('image');
			//print_r($listblog);
			?>
			<div class="col-lg-6 col-md-6">
				<div class="qw1">
				
					<a class="qw11" href="<?php echo get_permalink();?>"> <img  class="h-64 w-full object-cover overflow-hidden" src="<?php echo $attachment_id1['url']; ?>" alt="" /></a>
					 <div class="qw3">
				
					 <h2><a class="qw11" href="<?php echo get_permalink();?>"><?php the_title();?></h2></a>
					<div class="qw112"><?php echo get_field('date');?></div>
					
					</div>
				</div>
			</div>
			<?php
		}
	}


?>
	</div>
			
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>