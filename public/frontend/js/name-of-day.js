function dateDisplay(argument) {

	var myDate = new Date();
	var year = myDate.getYear();
	if (year < 1000) 
	{
		year += 1900;
	}
	var day = myDate.getDay();
	var month = myDate.getMonth();
	var daym = myDate.getDate();
	var dayArray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
	var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "Novemnber", "December");


	var dayText = document.getElementById('mon-sun');
	dayText.textContent = dayArray[day];
	dayText.innerText = dayArray[day];

	var dateText = document.getElementById('login-date');
	dateText.textContent = monthArray[month] + " " + daym + ", " + year;
	dateText.innerText = monthArray[month] + " " + daym + ", " + year;

	setTimeout('dateDisplay()', 1000);
}
	dateDisplay();