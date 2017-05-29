$(document).ready(function(){
	$("#contact-form button[type='submit']").click(function(e){
		e.preventDefault();

		var form = $(this).parent();
		var submit = $(this);

		submit.find(".loading").css("display", "inline-block");
		submit.find(".message").css("display", "none");
		submit.prop("disabled", true);

		setTimeout(function(){
			submit.find(".message").css("display", "inline-block");
			submit.find(".loading").css("display", "none");
			submit.prop("disabled", false);

			form.find(".alert").show();
		}, 2000);
	});

	$(".language-btns button").click(function(){
		$(this).parent().find("button.active").removeClass("active");
		$(this).addClass("active");
	});
});