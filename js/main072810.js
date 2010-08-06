
var monthArray = ['January','February','March','April','May','June','July','August','September','October','November','December'];
 
var daysInMonthArray = [31,28,31,30,31,30,31,31,30,31,30,31];

function writeCalendarContent()
{
}

function displayCalendar(yearInput,monthInput,dayInput,buttonObj)
{
var year = yearInput.options[yearInput.selectedIndex].value
var month = monthInput.options[monthInput.selectedIndex].value
var day = dayInput.options[dayInput.selectedIndex].value;
var leapYear = isLeapYear(year);
var daysInMonth = daysInMonthArray[month]

if ((month == 1) && (leapYear))
{
alert ("leap year");
daysInMonth = daysInMonth + 1;
}


alert("The year is "+ year +
" the month is " + monthArray[month] +
" the day is " + day +
" the number of days in the month is " + daysInMonth);

/*alert("display Caleandar is running the year is "+ yearInput.options[yearInput.selectedIndex].value +
" the month is " + monthInput.options[monthInput.selectedIndex].value +
" the day is " + dayInput.options[dayInput.selectedIndex].value); */
}

function isLeapYear(inputYear)
{
	if(inputYear%400==0||(inputYear%4==0&&inputYear%100!=0)) return true;
	return false;

}

