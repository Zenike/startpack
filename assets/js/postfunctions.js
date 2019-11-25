$(document).ready(function(){
	$("pre").each(function(){
		$(this).append('<span>code <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
	$("blockquote").each(function(){
		$(this).append('<span>infos <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-up"></i></span>');
	});
});

$("pre, blockquote").on("click","span",function(){
	target = $(this).parents("pre, blockquote");

	if(target.is(".selected")){
		target.removeClass("selected");
	}else{
		target.addClass("selected");
	}
});



$('#example_lift .btn input').on("change", function() {
	if($(this).is(':checked')) {
		$('#example_lift .btn').attr("data-stp-lift-pusher","");
	} else {
		$('#example_lift .btn').removeAttr("data-stp-lift-pusher");
	}
});
$(document).ready(function(){
	$('#example_lift .btn input').prop( "checked", true);
});



function replace_name(){
	$("[data-group] input").each(function(){
		$(this).val($(this).attr("name"));
	});
};

$(".replace_names_link").click(function(){
	replace_name();
});





function customValidation(){
	$(".ffx-error").each(function(){
		$(this).append('<span class="ffx-error__info">Message test</span><span class="ffx-error__arrow"></span>');
		$(this).show();
	});
};

$(".custom-validation-btn").click(function(){
	customValidation();
});
