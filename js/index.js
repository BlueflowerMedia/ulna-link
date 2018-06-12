function treePop() {
	$(".tree").each(function() {
		var ourTree = $(this);
		var treeHeight = $(this).offset().top + $(this).height();
		var windowHeight = $(window).height();
		$(document).scroll(function() {
			var scrolled = $(window).scrollTop() + windowHeight-200;
			//console.log(treeHeight, scrolled)
			if (treeHeight < scrolled) {
				//console.log("now!");
				ourTree.addClass("treeReveal");
			}
		})
	})
}

treePop();
