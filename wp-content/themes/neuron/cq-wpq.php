
<?php
/* 
Template Name: Custom Query WPQuery

*/


get_header(); ?>




<!-- <?php while ( have_posts() ) : the_post(); ?> -->

    	<!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
		<section <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)" <?php endif; ?> class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- breadcrumb content -->
						<div class="page-breadcrumbd">

						
							


							<?php 

								$paged = get_query_var("paged")?get_query_var("paged"):1;

								$posts_per_page = 3;
								// $total = 9;
								$post_ids = array(80,1,71,148,151,153);
								
								$_p = new WP_Query( array( 
									// 'category_name' => 'uncategorized',
									// 'tag' => 'new',
									'posts_per_page' => $posts_per_page,
									'paged' 		 => $paged,
								    'meta_query'     =>array(
										'relation' => 'AND',

										array(
											'key' 		=> 'featured',
											'value'     =>  '1',
											'compare'   =>  '='
										),
										array(
											'key' 		=> 'homepage',
											'value'     =>  '1',
											'compare'   =>  '='
										)
									)
									// 'tax_query' =>array(
									// 	'relation' => 'OR',

									// array(
									// 	'taxonomy' => 'post_format',
									// 	'field' => 'slug',
									// 	'terms' => array(
									// 		'post-format-quote',
									// 		'post-format-video'
											
									// 	),

									// 	// 'operator'=>"NOT IN"
									// ),

									// )

									// 'monthnum'=> 2,
									//  'year' =>2023,
									 //'post_status' =>'future'
								 ));

								while($_p->have_posts() ){
									$_p->the_post();

								?>

							<h2><?php  the_title(); ?></h2>
							<p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>

							<?php
								}

								 wp_reset_query();

								?>


							
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>



			<div class="container post-pagination">
				<div class="row">
					<div class="col-md-12">
						<?php 
						echo paginate_links(array(
							'total' => $_p->max_num_pages,
							'current' => $paged,
							'prev_next' =>false


						));
						
						?>
					</div>
				</div>
			</div>

			
		</section><!-- end breadcrumb -->
	
		  <?php get_template_part('content/services'); ?>


        <!-- <?php endwhile; ?> -->

<?php get_footer(); ?>