function deletecomment(id) {
	if (confirm("Are you sure you want to delete this comment?")) {
		$.ajax({
			url: "comment-delete.php",
			type: "POST",
			data: 'comment_id=' + id,
			success: function(data) {

				if (data) {
					$("#comment-" + id).remove();
					if ($("#count-number").length > 0) {
						var currentCount = parseInt($("#count-number").text());
						var newCount = currentCount - 1;
						$("#count-number").text(newCount)
					}
				}
			}
		});
	}
}

function validate() {
	var name = $('#name').val();
	var message = $('#message').val();
	valid = true;
	$(".error").text("");
	$('#name-info').removeClass("error");
	$('#message-info').removeClass("error");
	if (name == "") {
		$('#name-info').addClass("error");
		valid = false;
	}
	if (message == "") {
		$('#message-info').addClass("error");
		valid = false;
	}
	$(".error").text("required");
	return valid;
}

$(document).ready(function() {
	$("#frmComment").on("submit", function(e) {
		e.preventDefault();
		var valid = validate();
		if (valid) {
			$("#loader").show();
			$("#submit").hide();
			$.ajax({
				type: 'POST',
				url: 'comment-add.php',
				data: $(this).serialize(),
				success: function(response) {

					$("#frmComment input").val("");
					$("#frmComment textarea").val("");
					$('#response').prepend(response);

					if ($("#count-number").length > 0) {
						var currentCount = parseInt($("#count-number").text());
						var newCount = currentCount + 1;
						$("#count-number").text(newCount)
					}
					$("#loader").hide();
					$("#submit").show();
				}
			});
		}
	});
});
