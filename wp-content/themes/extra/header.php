<!DOCTYPE html>
<html>

	<head>
		<title>Wordpress</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head();?>
	</head>
	<body>
		
	<section class="sec1">
			<div class="">
				<div class="row row1">
					<div class="col-lg-3 col-md-3">
						<div class="qw">
							Revelar
						</div>
					
					</div>
			
				
					<div class="col-lg-9 col-md-9">
						<?php	
							$arr=array(
								'menu_class'=>'l',
								
								'theme_location'=>'primary_menu',
								'container_class' => 'myclass',
							);
							wp_nav_menu($arr);
						?>
				
					</div>
				</div>
			</div>
		</section>