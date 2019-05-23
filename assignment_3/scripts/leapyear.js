function validateForm(){
	$("form").validate({
  		debug: true
	});
}

$(document).ready(function() {
  $(".numbers-only").attr({
    "max" : 125,        // maximum age
    "min" : 1          // minimum age
  });
});

$(document).on("input", ".numbers-only", function() {
  if($(this).val() > 125) {
      $(this).addClass("is-invalid");
      $(this).removeClass("is-valid");
  }
  else {
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
  }
});



$(document).on("input", ".letters-only", function(){
  var regexp = /[^a-zA-Z- \u00C0-\u00D6\u00D8-\u00F6\u00F8-\u00FF]/g;
  if($(this).val().match(regexp)) {
    $(this).val($(this).val().replace(regexp, ''));
    $(this).addClass("is-invalid");
    $(this).removeClass("is-valid");
  }
  else {
    $(this).removeClass("is-invalid");
    $(this).addClass("is-valid");
  }
});

// Make all fields required //
$(document).ready(function() {
   $("input").attr("required", true);
});