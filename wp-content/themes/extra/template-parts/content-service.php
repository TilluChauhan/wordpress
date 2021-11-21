<section class="secser">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
			<div class="m1">
				<div ><p class="m2"><?php the_title();?></ps></div>
				<div class="m3"> offer a range of services to help you achieve the results you’re after. Not sure what you need, or what it costs? We can explain what services are right for you and tell you more about our fees. Get in touch below.</div>
			
			</div>
			</div>
		</div>
		<div class="row">
			
			<?php 
			if(have_posts()){
				$ser=array(
				'post_type'=>'service',
				
				);
				$service=new WP_Query($ser);
				while($service->have_posts()){
					$service->the_post();
					$qw=get_field('image');
					//print_r($qw);
					?>
					<div class="col-lg-4 col-md-4">
					<div class="m5">
						<a href="<?php echo get_permalink();?>"><img class="m6" src="<?php echo $qw['url']?>"></a>
						<div class="m7"><?php the_title();?></div>
						<div class="m8"><?php echo get_field('content');?></div>
					</div>
					</div>
					<?php
				}
				
			}
			?>
					
			
		</div>
	</div>
</section>