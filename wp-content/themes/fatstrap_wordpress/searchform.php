<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<label>Search Us Here:</label>
<input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Enter a keyword here..." />
<input type="submit" id="searchsubmit" value="Search" class="btn" />
</form>