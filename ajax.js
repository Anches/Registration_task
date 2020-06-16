$( document ).ready(function() {
    $("#complite_signup").click(
		function(){
			sendSignUp('result_ajax_signup', 'form_ajax', 'signup_ajax.php');
			return false; 
		}
	);
	$("#complite_signin").click(
		function(){
			sendSignIn('result_ajax_signin', 'form_ajax', 'signin_ajax.php');
			return false; 
		}
	);
});

function sendSignUp(result_ajax_signup, ajax_form, url) {
    $.ajax({
        url:     signup_ajax.php, 
        type:     "POST", 
        dataType: "html",
        data: $("#"+ form_ajax).serialize(), 
        success: function(response) { 
        	result = $.parseJSON(response);
        	$('#result_ajax_signup').html('Name: '+ result.name + '<br>Login: '+ result.login + '<br>Email: ' + result.email + '<br>Password: ' + result.pass);
    	},
    	error: function(response) {
            $('#result_ajax_signup').html('Error');
    	}
 	});
}

function sendSignIn(result_ajax_signin, ajax_form, url) {
    $.ajax({
        url:     signin_ajax.php, 
        type:     "POST", 
        dataType: "html",
        data: $("#"+ form_ajax).serialize(), 
        success: function(response) {
        	result = $.parseJSON(response);
        	$('#result_ajax_signin').html('Login: '+ result.login + '<br>Password: ' + result.pass);
    	},
    	error: function(response) {
            $('#result_ajax_signin').html('Error');
    	}
 	});
}