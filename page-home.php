<?php 
/*
Template Name: Page – Home
*/

get_header(); ?>

<!-- HERO SECTION -->
<section class="hero" id="top-link">
	<div class="container">

		<div class="heroWrap">
			<span class="svg-pcurio heroLogo"></span>
			<h2>hey hey I&rsquo;m Alex.</h2>
			<p class ="myTitle"><?php bloginfo( 'description' ); ?></p>
		</div> <!-- /.heroWrap -->	
	
	</div> <!-- /.container -->
</section> <!-- /.hero -->

<!-- ---------------------------------------------------------------- -->


<!-- ABOUT SECTION -->
<!-- <section class="fullBleed sectionTitle aboutTitle" id="about-link">
	<div class="container">
		<h3>about</h3>
	</div>
</section> -->

<section class="fullBleed about" id="about-link">
	<div class="container">

		<p class="intro"><?php the_author_meta( 'description', '1' ); ?> </p>
		
		<div class="skillSection">
			<?php
			$skillsQuery = new WP_Query( 
				array( 
					'post_type' => 'skills', 
					// 'project_type' => $projectTerms, 
					// 'post__not_in' => array( $post->ID )  
					) 
			); ?>
			<?php if ( $skillsQuery->have_posts() ) : ?>

				<?php while ($skillsQuery->have_posts()) : $skillsQuery->the_post(); ?>
					<h3><?php the_title(); ?></h3>

					<ul class="skillList">
					    <?php while(the_repeater_field('skill_section')): ?>
					        <li><?php the_sub_field('skill_name') ?></li>
					    <?php endwhile; ?>
					</ul>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div> <!-- /. skillSection -->
		
		<div class="skillSection socialSection">
			<?php
			$socialQuery = new WP_Query( 
				array( 
					'post_type' => 'social_links', 
					// 'project_type' => $projectTerms, 
					// 'post__not_in' => array( $post->ID )  
					) 
			); ?>

			<?php if ( $socialQuery->have_posts() ) : ?>

				<?php while ($socialQuery->have_posts()) : $socialQuery->the_post(); ?>

					<h3><?php the_title(); ?></h3>

					<ul class="socialList">
					    <?php while(the_repeater_field('social_link')): ?>
					        <li><a href="<?php the_sub_field('social_url') ?>"><?php the_sub_field('social_name') ?></a></li>
					    <?php endwhile; ?>
					</ul>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			<!-- Other Links Section -->
			<ul class="otherLinks">
				<li><a href="mailto:perpetuatingcuriosity@gmail.com" class="otherLink">perpetuatingcuriosity@gmail.com</a></li>
				<!-- <a href="" class="otherLink">View Resume</a> -->
				<li><a href="https://dl.dropboxusercontent.com/u/4917239/AlexandraBain_Resume.pdf" class="otherLink">Resume PDF</a></li>
			</ul>
		</div>


	</div> <!-- /.container -->
</section> <!-- /.about -->


<!-- ---------------------------------------------------------------- -->

<!-- WORK SECTION -->
<section class="fullBleed sectionTitle workTitle">
	<div class="container">
<!-- 		<h3>work</h3> -->
	</div>
</section>

<section class="fullBleed work" id="work-link">
	
	<!-- Custom Project Loop for projects here -->
	<?php

	$projectQuery = new WP_Query( 
		array( 
			'posts_per_page' => 4, 
			'post_type' => 'portfolio', 
			// 'project_type' => $projectTerms, 
			// 'post__not_in' => array( $post->ID )  
			) 
	); ?>

	<?php if ( $projectQuery->have_posts() ) : ?>

		<?php while ($projectQuery->have_posts()) : $projectQuery->the_post(); ?>
			
			<section class="projectPost">
					<div class="container">	
					<div class="projectPreview">
						<figure class="screen">
						<div class="featuredImage">
							<?php echo get_the_post_thumbnail( $post->ID); ?> 
						</div>
							<img class="imacTemplate" src="<?php echo bloginfo( 'template_directory' ); ?>/images/empty_imac.png" alt="imac screen displaying site preview">
						</figure>

						<!-- <div class="buttons"> -->
							<ul class="buttons">
								<!-- <li><a href="#" class="btn projectLink">Details</a></li> -->
								<li><a href="<?php the_field('live_link'); ?>" class="projectLink">View Live</a></li>
								<li><a href="<?php the_field('github_link'); ?>" class="projectLink">GitHub</a></li>
							</ul>
						<!-- </div>
 -->					</div>
					
					<article class="projectDescription">
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field('tagline'); ?></h4>
						<p><?php the_content(); ?></p>			
						<footer>
							<ul>
							<?php
							  $posttech = get_the_terms($post->ID,'technologies');

							  if ($posttech) {
							    foreach($posttech as $tech) {
							      echo '<li>' . $tech->name . '</li>'; 
							    }
							  }
							?>
							</ul>
						</footer>
					</article>


				</div> <!-- /.container -->
			</section> <!-- /.projectPost -->


		<?php endwhile; ?>
		
		<?php wp_reset_postdata(); ?>
		
<!-- 	<?php else:  ?>
		[stuff that happens if there aren't any posts] -->
	<?php endif; ?>


</section> <!-- /.work -->

<!-- ---------------------------------------------------------------- -->

<!-- BLOG SECTION -->

<section class="fullBleed sectionTitle blogTitle" id="blog-link">
	<div class="container">
	<!-- 	<h3>blog</h3> -->
	</div>
</section>

<section class="fullBleed blog" id="bloglink">

	<div class="container blogContainer">
		<?php $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 6 ) ); ?>

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