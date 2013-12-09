jQuery(document).ready(function($) {
 
	// The number of the next page to load (/page/x/).
	var pageNum = parseInt(pbd_alp.startPage) + 1;
 
	// The maximum number of pages the current query can return.
	var max = parseInt(pbd_alp.maxPages);
 
	// The link of the next page of posts.
	var nextLink = pbd_alp.nextLink;

	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('#content')
			.append('<div class="woodd-apl-placeholder-'+ pageNum +'"></div>')
			.append('<p id="woodd-apl-load-posts"><a href="#">Load More Posts</a></p>');
	 
		// Remove the traditional navigation.
		$('.navigation').remove();
	}

	/**
	 * Load new posts when the link is clicked.
	 */
	        $(window).scroll(function(){
	                if  ($(window).scrollTop() == $(document).height() - $(window).height()){
	       	
	                
	 
			// Are there more posts to load?
			if(pageNum <= max) {
		 
				

				$('.woodd-apl-placeholder-'+ pageNum).load(nextLink + ' .post',
					function() {
						// Update page number and nextLink.
						pageNum++;
						nextLink = nextLink.replace(/\/page\/[0-9]?/, '/page/'+ pageNum);
				 					
					}

				);

			} 
			return false;
		}

	});


});
