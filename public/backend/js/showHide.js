// actions in clicking log in button Start
$(document).ready(function(){
	$("#showLoginButton").click(function(){
		$("#main-header").css("display", "none");
		$("#login-header").css("display", "block");
		$("#login-header").css("margin-top", "60px");
		$("#loginInputs").css("display", "block");
		$("#showLoginButton").css("display", "none");
		$("#showLogoutButton").css("display", "none");
	});
});

$(document).ready(function(){
	$("#backLoginButton").click(function(){
		$("#main-header").css("display", "block");
		$("#login-header").css("display", "none");
		$("#loginInputs").css("display", "none");
		$("#showLoginButton").css("display", "block");
		$("#showLogoutButton").css("display", "block");
		$("#right-div").css("top", "25px");
	});
});
// actions in clicking log in button End


// actions in clicking log out button Start
$(document).ready(function(){
	$("#showLogoutButton").click(function(){
		$("#main-header").css("display", "none");
		$("#logout-header").css("display", "block");
		$("#logout-header").css("margin-top", "60px");
		$("#logoutInputs").css("display", "block");
		$("#showLogoutButton").css("display", "none");
		$("#showLoginButton").css("display", "none");
		$("#right-div").css("top", "0px");
	});
});

$(document).ready(function(){
	$("#backLogoutButton").click(function(){
		$("#main-header").css("display", "block");
		$("#logout-header").css("display", "none");
		$("#logoutInputs").css("display", "none");
		$("#showLoginButton").css("display", "block");
		$("#showLogoutButton").css("display", "block");
		$("#right-div").css("top", "25px");
	});
});
// actions in clicking log out button End



$('#selection-of-position-login').change(function(){
	var qty = $('#selection-of-position-login').val();
	$("#unique-id-num-login").val(qty);
})

$('#selection-of-position-logout').change(function(){
	var qty = $('#selection-of-position-logout').val();
	$("#unique-id-num-logout").val(qty);
})