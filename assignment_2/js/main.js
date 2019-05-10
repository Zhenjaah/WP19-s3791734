function validateForm(){
	$("form").validate({
  		debug: true
	});
}

// Phone number can consist of only numerical characters
$(document).on("input", "#inputPhone", function() {
    this.value = this.value.replace(/\D/g,'');
});

$(document).on("keydown", "#letters-only", function(event){
  // Allow controls such as backspace, tab etc.
  var arr = [8,9,16,17,20,35,36,37,38,39,40,45,46];

  // Allow letters
  for(var i = 65; i <= 90; i++){
    arr.push(i);
  }

  // Prevent default if not in array
  if(jQuery.inArray(event.which, arr) === -1){
    event.preventDefault();
  }
});

$(document).on("input", "#letters-only", function(){
  var regexp = /[^a-zA-Z]/g;
  if($(this).val().match(regexp)){
    $(this).val( $(this).val().replace(regexp,'') );
  }
});

// Make all fields required //
$(document).ready(function() {
   $("input").attr("required", true);
});

$("#form-alert").on("submit", function(e) {
    e.preventDefault();
    $(".alert-danger").show();
});

$(document).ready(function(){
	$(".erase").click(function(){
	/* Single line Reset function executes on click of Reset Button */
	$("#form")[0].reset();
	});});

$("#erase").click(function(){
  $("$form-content").hide();
  $("$form-alert").hide();
});

$(document).ready(function(){
  $("a#contact-tab").click(function(){
    $("#links").removeClass("active");
    $("#contact").addClass("active");
    $("#contact-tab").addClass("active")
    $("a#link-tab").removeClass("active")
  });
});

$(document).ready(function(){
  $("a#link-tab").click(function(){
    $("#links").addClass("active");
    $("#contact").removeClass("active");
    $("#contact-tab").removeClass("active")
    $("a#link-tab").addClass("active")
  });
});


function writeFormData(){

}

$(function() {

});