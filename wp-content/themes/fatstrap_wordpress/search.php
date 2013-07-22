<?php get_header(); ?>

<div class="main">
	
	

<div class="content eleven columns">
<h1>Here are your search results...</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="post" id="post-<?php the_ID(); ?>">

	<div class="entrytext">
		
	
			<div class="image"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php if(has_post_thumbnail()) {
    the_post_thumbnail();
} else {
    echo '<img src="'.get_bloginfo("template_url").'/images/placeholder.png" />';
} ?></a></div>
			<div class="entry">
				 <div class="post-title">
				<h3><?php the_title(); ?></h3>
			</div>
	  <p><?php
  $excerpt = get_the_excerpt();
  echo string_limit_words($excerpt,25);
?>..</p>
	
	</div> 
	</div>
  </div>
<?php endwhile; endif; ?>

<h3>Not what you where looking for?</h3>
<div class="search">
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</div>
</div>

<?php get_sidebar(); ?>
	
	 
</div>

<?php get_footer(); ?>