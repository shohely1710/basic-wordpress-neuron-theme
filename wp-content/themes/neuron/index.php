<?php get_header(); ?>
	

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">


		<?php
			global $post;
			$args = array ('posts_per_page' => 5,  'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$myposts = get_posts($args);
			foreach($myposts as $post){


		  $btn_text = get_post_meta($post->ID, 'btn_text', true); 
			   $btn_link = get_post_meta($post->ID, 'btn_link', true); ?>
		
			<!-- slide item one -->
			<div style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);" class="homepage-slider">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1><?php the_title(); ?></h1>
										<?php the_content(); ?>
										<a href="<?php echo $btn_link; ?>"><?php echo $btn_text; ?> <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php 
			}
			 wp_reset_query(); ?>
			
			<!-- slide item three -->
			<!-- <div class="homepage-slider slider-bg3">
				<div class="display-table">
					<div class="display-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-sm-7">
									<div class="slider-content">
										<h1>Prepare for the future with our advisors</h1>
										<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
										<a href="#">Meet Experts <i class="fa fa-long-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			
		</section><!-- slider area end -->
	
		<?php get_template_part('content/promo'); ?>
		<?php get_template_part('content/books'); ?>
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful & Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepageblock.jpg" alt="" />

						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<?php get_template_part('content/services'); ?>
	
<?php get_footer();  ?>