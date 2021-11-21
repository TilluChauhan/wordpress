<?php get_header();?>
<section class="sectionp1">
	<div class="container">
		<div class="row">
			<?php
				if(have_posts()){
					$tw=array(
						'post_type'=>'team',
					);
					$team=new WP_Query($tw);
					while($team->have_posts()){
						$team->the_post();
						//print_r($team);
						$image=get_field('image');
						?>
						<div class="col-lg-6 col-md-6">
							<div class="x1">
								<img src="<?php echo $image['url']?>"/>
								<div class="x2">
									<?php the_title();?>
									
								</div>
								<div class="x3"><?php echo get_field('description');?>
									<span><a href="<?php echo get_permalink();?>"  class="xa1">Read More</a></span>
								</div>
								
							</div>
						</div>
						
						<?php
					}
				}
			
			?>
			
		</div>
	</div>

</section>

<?php get_footer();?>