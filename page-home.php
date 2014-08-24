<?php 
/*
Template Name: Page – Home
*/

get_header(); ?>

<!-- HERO SECTION -->
<section class="hero">
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
<section class="fullBleed sectionTitle aboutTitle" id="about-link">
<!-- 	<div class="container">
		<h3>about</h3>
	</div> -->
</section>

<section class="fullBleed about">
	<div class="container">

		<p class="intro"><?php the_author_meta( 'description', '1' ); ?> </p>
		
		<!-- <p class="intro">I’m most passionate about using my skills design and development to create solutions to problems that aren’t limited to print or digital.
		<span>(Not-so-secret ambition: design for large-scale human systems.)</span>
		My superpower is my ability to discover, recall and apply information.</p> -->
		
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
		
		<div class="skillSection">
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

					<ul class="skillList socialList">
					    <?php while(the_repeater_field('social_link')): ?>
					        <li><a href="<?php the_sub_field('social_url') ?>"><?php the_sub_field('social_name') ?></a></li>
					    <?php endwhile; ?>
					</ul>
				
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>


		<!-- Mail Link -->
		<h3>or: <a href="mailto:perpetuatingcuriosity@gmail.com">perpetuatingcuriosity@gmail.com</a></h3>

		<!-- Resume Links Section -->
		<div class="resumeLinks">
			<h3></h3>
			<a href="" class="btn resumeLink">View Resume</a>
			<a href="https://dl.dropboxusercontent.com/u/4917239/AlexandraBain_Resume.pdf" class="btn resumeLink">Get PDF</a>
		</div>

	</div> <!-- /.container -->
</section> <!-- /.about -->


<!-- ---------------------------------------------------------------- -->

<!-- WORK SECTION -->
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
					<figure class="projectPreview">
						<?php echo get_the_post_thumbnail( $post->ID); ?> 
					</figure>
					
					<article class="projectDescription">
						<h4><?php the_title(); ?></h4>
						<h5><?php the_field('tagline'); ?></h5>
						<p><?php the_content(); ?></p>			

						<div class="buttons">
							<a href="#" class="btn projectLink">Details</a>
							<a href="<?php the_field('live_link'); ?>" class="btn projectLink">Live</a>
							<a href="<?php the_field('github_link'); ?>" class="btn projectLink">GitHub</a>
						</div>
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
<section class="fullBleed blog" id="blog-link">
	<div class="container">
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
		 				?></p>
		 			</footer> 
					
					<a class="btn" href="<?php the_permalink(); ?>">Read More</a>

				</section> <!-- /.homepagePost -->

			<!-- Insert Loop Structure for Blog Posts  -->
		<?php endwhile; endif; ?>
	</div>
</section>



<!-- Just social links -->
<?php get_footer(); ?>