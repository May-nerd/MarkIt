$(document).ready(function(){
	$(document).on("click", " #mark", markPost);
});

function markPost(){
	var mark_id = $(this).attr("data-pg");
	$.ajax({
		url: "/home"
	})	
}