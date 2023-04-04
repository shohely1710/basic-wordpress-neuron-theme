
<?php
/* 
Template Name: Custom Query

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

								$posts_per_page = 2;
								$total = 9;
								$post_ids = array(80,1,71,148,151,153);
								
								$_p = get_posts(array(
									'posts_per_page'=>$posts_per_page,
									 //'post__in' => $post_ids,

									 //showing for author posts
									' author__in' =>array(1),
									'numberposts'=>$total,
									'orderby'=>'post_ids',
									'paged'=>$paged
									

								));

								foreach($_p as $post){
									setup_postdata($post);
								



								?>

							<h2><?php  the_title(); ?></h2>
							<p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>

							<?php
								}

								wp_reset_postdata();
								// the_title();
								echo count($_p);

								?>


							
						</div><!-- end breadcrumb content -->
					</div>
				</div>
			</div>


			<div class="container post-pagination">
				<div class="row">
					<div class="col-md-4"></div>

					<div class="col-md-8">
						<?php
							echo paginate_links(array(
								'total' => ceil($total/$posts_per_page)
							));

						?>
					</div>
				</div>
			</div>

			
		</section><!-- end breadcrumb -->
	
		  <?php get_template_part('content/services'); ?>


        <!-- <?php endwhile; ?> -->

<?php get_footer(); ?>