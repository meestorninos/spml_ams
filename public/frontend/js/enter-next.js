		var loginIdNext = document.getElementById("id-number-login");
		loginIdNext.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				document.getElementById("pwd-login").focus();
			}
		});

		var loginPwdNext = document.getElementById("pwd-login");
		loginPwdNext.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				document.getElementById("next-login-button").focus();
			}
		});

		var logoutIdNext = document.getElementById("id-number-logout");
		logoutIdNext.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				document.getElementById("pwd-logout").focus();
			}
		});

		var logoutPwdNext = document.getElementById("pwd-logout");
		logoutPwdNext.addEventListener("keyup", function(event) {
			event.preventDefault();
			if (event.keyCode === 13) {
				document.getElementById("next-logout-button").focus();
			}
		});

		