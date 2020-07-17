$(document).ready(function(){
	$("#login_form").submit(function(e){
		e.preventDefault();
		$("#signin_button").html("Loading...");
		$("#signin_button").prop('disabled', true);

		$.post( "/api", $(this).serialize()).done(function(data){
			console.log(data);
			$("#signin_button").html("Sign in");
			$("#signin_button").prop('disabled', false);
			data = $.parseJSON(data);

			if(data['errors'])
				alert(data['errors'][0]['message']);
			else
				displayDevices(data);
		});
	});
});

function displayDevices(data) {
	$("#login_input").slideUp();
	var contents = '<ul class="list-group">';
	contents += '<li class="list-group-item disabled">Device Name - (Device ID)</li>';

	$.each(data['results']['devices'], function(i){
		item = data['results']['devices'][i];
		contents += '<li class="list-group-item">' + item['name'] + ' - (' + item['id'] + ')</li>';
	});

	contents += '</ul>';
	$("#devices").html(contents);
}