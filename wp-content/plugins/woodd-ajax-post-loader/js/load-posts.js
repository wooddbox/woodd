

jQuery(document).ready(function($) {

	// The number of the next page to load (/page/x/).
	var pageNum = parseInt(woodd_alp.startPage) + 1;
	
	// The maximum number of pages the current query can return.
	var max = parseInt(woodd_alp.maxPages);
	
	// The link of the next page of posts.
	var nextLink = woodd_alp.nextLink;
	
	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('#content')
			.append('<div class="woodd-alp-placeholder-'+ pageNum +'"></div>')
			.append('<p id="woodd-alp-load-posts"><a href="#">Load More Posts</a></p>');
			
		// Remove the traditional navigation.
		$('.navigation').remove();
	}
	
	
	/**
	 * Load new posts when the link is clicked.
	 */
	$('#woodd-alp-load-posts a').click(function() {
	
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading posts...');
			
			$('.woodd-alp-placeholder-'+ pageNum).load(nextLink + ' .post',
				function() {
					// Update page number and nextLink.
					pageNum++;
					nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
					
					// Add a new placeholder, for when user clicks again.
					$('#woodd-alp-load-posts')
						.before('<div class="woodd-alp-placeholder-'+ pageNum +'"></div>')
					
					// Update the button message.
					if(pageNum <= max) {
						$('#woodd-alp-load-posts a').text('Load More Posts');
					} else {
						$('#woodd-alp-load-posts a').text('No more posts to load.');
					}
				}
			);
		} else {
			$('#woodd-alp-load-posts a').append('.');
		}	
		
		return false;
	});
});