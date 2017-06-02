$(document).ready(function(){
	$(".wpcf7-form").submit(function(){
		var form = $(this)
		var submit = $(this).find("[type=submit]");

		submit.find(".loading").css("display", "inline-block");
		submit.find(".message").css("display", "none");
		submit.prop("disabled", true);

		var response = $(this).find(".wpcf7-response-output");
		response.unbind().bind("DOMSubtreeModified",function(){
		  submit.find(".message").css("display", "inline-block");
			submit.find(".loading").css("display", "none");
			submit.prop("disabled", false);
		});
	});
});

//# sourceMappingURL=main.js.map
