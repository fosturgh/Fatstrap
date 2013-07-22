<?php get_header(); ?>

<section>
	
	<!--<?php include(TEMPLATEPATH . '/sidebar-left.php'); ?>-->
		<div class="content large-9 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
    	
        <div class="post-content">
        	 <h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
        	<div class="content">
        		
        	
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			
			</div>
			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4fe83fca392c9015"></script>
<!-- AddThis Button END -->
        </div>
    </div>
	
  <?php endwhile; endif; ?>

	
</div>

<?php include(TEMPLATEPATH . '/sidebar-right.php'); ?>

</section>

<?php get_footer(); ?>