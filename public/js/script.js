$(document).ready(function(){
	$(document).on("click", ".like-post", likePost);
	$(document).on("click", "#follow-btn", follow);
});

function likePost(){
	var post_id = $(this).attr("data-pg");
	$.ajax({
		url: "/posts/like/"+post_id,
		type: "get",
		success:function(data){
			var like_count = data.length;

			$("#like-count-"+post_id).html(like_count+" likes");

			var likers = "";
			$.each(data, function(key, value){
				likers += "<div><a href='/profile/"+value['username']+"'>"+value['name']+"</a></div>";
			});
			$("#myModal_"+post_id+" .modal-body").html(likers);
		}
	});
}

function follow(){
	var following_id = $(this).attr("following-id");
	$.ajax({
		url: "/follows/"+following_id,
		type: "get",
		success:function(data){
			console.log(data);
			if(data != ""){
				var count = document.getElementById("follower-count").innerHTML;
				count++;
				$("#follower-count").innerHTML = count;
				var newFollower = document.createElement("h4");
				newFollower.className = "text-center";

				var innerNewFollower = document.createElement("a");

				newFollower.appendChild(innerNewFollower);
							
				innerNewFollower.innerHTML = data["name"];

				innerNewFollower.setAttribute("href", "/profile/"+data["username"]);

				document.getElementById("followers-body").appendChild(newFollower);


				var followbtn = document.getElementById("follow-btn");
				followbtn.innerHTML = "Unfollow";
				followbtn.className = "btn btn-default";

			}
			else{
				var followbtn = document.getElementById("follow-btn");
				followbtn.innerHTML = "Follow";
				followbtn.className = "btn btn-success";
				var count = document.getElementById("follower-count").innerHTML;
				count--;
				document.getElementById("follower-count").innerHTML = count;

			}
		}
	});
}