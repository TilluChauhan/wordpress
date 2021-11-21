
<section class="sechome1">
	<div class="container">
		<div class="row">
		<?php 
	if(have_posts()){
		
	$args=array(
			'post_type' => 'blog',
			'posts_per_page' => 2
	);
		
		$blogs=new WP_Query($args);
		while($blogs->have_posts()){
		$blogs->the_post();
			
 // print_r($post);
  $attachment_id1 = get_field('image');

 // print_r($attachment_id2);
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
			<div class="row">
	<?php 
	if(have_posts()){
		
	$args=array(
			'post_type' => 'blog',
	'posts_per_page' => 5
	);
		$count=null;
		$blogs=new WP_Query($args);
		while($blogs->have_posts()){
			
		$blogs->the_post();
		if($count>1){
			
 // print_r($post);
  $attachment_id1 = get_field('image');

 // print_r($attachment_id2);
			?>
			<div class="col-lg-4 col-md-4">
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
		$count++;
		}
	}


?>
			</div>
			
			</div>
		</div>
	</div>
</section>
			
			 
		



	



