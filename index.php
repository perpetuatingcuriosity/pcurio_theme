<?php get_header(); ?>

<!-- SPLASH SECTION -->
<section class="hero">
	<div class="container">

		<div class="heroWrap">
			<span class="svg-pcurio heroLogo"></span>
			<h2>hey hey I&rsquo;m Alex.</h2>
			<p class ="myTitle"><?php bloginfo( 'description' ); ?></p>
		</div> <!-- /.heroWrap -->	
	
	</div> <!-- /.container -->
</section> <!-- /.hero -->


<!-- ABOUT SECTION -->
<section class="about" id="about-link">
	<div class="container">

		<!-- put custom loop for about-skills here -->
		<!-- There are 4 sections to this loop + one with social links -->
		
		<!-- Skills List -->
		<h3><!-- enter skill title --></h3>
		<ul class="skillSection"></ul> <!-- enter every SkillSection into UL, ANOTHER LOOP -->
		
		<!-- Social Links -->
		<h3><!-- enter social link title --></h3>
		<ul class="skillSection socialSection"></ul>

		<!-- Mail Link -->
		<h3>or: <a href="mailto:perpetuatingcuriosity@gmail.com">perpetuatingcuriosity@gmail.com</a></h3>

		<!-- Resume Links Section -->
		<button class="resumelink"><a href=""></a></button>
		<button class="resumelink"><a href="https://dl.dropboxusercontent.com/u/4917239/AlexandraBain_Resume.pdf">Download PDF Resume</a></button>

	</div> <!-- /.container -->
</section> <!-- /.about -->


<!-- WORK SECTION -->
<!-- target with archive -->
<section class="work" id="work-link">
	put custom loop for projects here
</section>



<!-- BLOG SECTION -->
<section class="recent-blog" id="blog">
	<?php if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

			<section class="homepagePost">
				<header>
					<?php the_category(); ?> 
	 				<?php the_title(); ?>
	 			</header>

	 			<figure style="background: url(
	 				<?php
	 				//Get the Thumbnail URL
	 				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 720,405 ), false, '' );
	 				echo $src[0];
	 			?>
	 			) no-repeat center center;
	            background-size: cover;
	            -webkit-background-size: cover;
	            -moz-background-size: cover; 
	            -o-background-size: cover;">
	 			</figure>

	 		 	<article class = "excerpt">
	 				<?php the_excerpt(); ?>
	 			</article>

	 			<footer>
	 				<?php pcurio_posted_on(); ?>
	 			</footer>

			</section> <!-- /.homepagePost -->

		<!-- Insert Loop Structure for Blog Posts  -->
	<?php endwhile; endif; ?>
</section>



<!-- Just social links -->
<?php get_footer(); ?>