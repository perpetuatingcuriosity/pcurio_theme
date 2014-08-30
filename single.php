<?php get_header(); ?>

<section class="fullBleed singlePage">
	<div class="container">
		<!-- Get Date of Post and Tags -->
		<?php while ( have_posts() ) : the_post(); ?>
		<aside>
				<p class="single-date"><?php the_date(); ?></p>
				<div class="single-tagSection">
				<ul class="single-tags"><?php
				  $posttags = get_the_tags();
				  if ($posttags) {
				    foreach($posttags as $tag) {
				      echo '<li>' . $tag->name . '</li>'; 
				    }
				  }
				?>
				</p>
				</div>
		</aside>
		
		<!-- Main Article -->
		<main>
			<header>
			<h2><?php the_title(); ?></h2>

			<div class="mobileSubHead">
				<p class="single-date"><?php the_date(); ?></p>
				<div class="single-tagSection">
				<ul class="single-tags"><?php
				  $posttags = get_the_tags();
				  if ($posttags) {
				    foreach($posttags as $tag) {
				      echo '<li>' . $tag->name . '</li>'; 
				    }
				  }
				?>
				</ul>
			</div>

			</header>


			<article>
				<?php the_content(); ?>
			</article>

			<footer class="more-posts">
			</footer>
		</main>
		<?php endwhile; // end of the loop. ?>
	<?php wp_reset_postdata(); ?>
	</div> <!-- /.container -->
</section> <!-- /.fullBleed.singlePage -->

<!-- ---------------------------------------------------------------- -->

<!-- BLOG SECTION -->
<section class="fullBleed blog" id="blog-link">
	<div class="container">
		<?php  
		$this_post = $post->ID;
		?>

		<?php $latest_blog_posts = new WP_Query( array( 
		'posts_per_page' => 3, 
		'post__not_in' => array( $post->ID )
		) ); ?>

		<?php if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

				<section class="homepagePost">
					<header>
						<p class="post-categories">	
						<?php
						$category = get_the_category(); 
						echo $category[0]->cat_name;
						?>
		 				</p>
		 				<?php the_title(); ?>
		 			</header>

		 			<!-- <figure>
		 				get the Featured Image
		 			</figure> -->

		 		 	<article class = "excerpt">
		 				<?php the_excerpt(); ?>
		 			</article>

		 			<footer>
		 				<p>
		 				<?php
		 				  $posttags = get_the_tags();
		 				  if ($posttags) {
		 				    foreach($posttags as $tag) {
		 				      echo $tag->name . ' '; 
		 				    }
		 				  }
		 				?>
		 				</p>
		 			</footer> 
					
					<a class="btn" href="<?php the_permalink(); ?>">Read More</a>

				</section> <!-- /.homepagePost -->

			<!-- Insert Loop Structure for Blog Posts  -->
		<?php endwhile; endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>





<!-- Just social links -->
<?php get_footer(); ?>

