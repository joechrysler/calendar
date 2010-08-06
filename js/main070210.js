
var monthArray = ['January','February','March','April','May','June','July','August','September','October','November','December'];
 
var daysInMonthArray = [31,28,31,30,31,30,31,31,30,31,30,31];


/*This function is called from the main xHTML by the clicking of the "Go" Button
and the parameters that were selected are passed into this JS code*/
function displayCalendar(yearInput,monthInput,dayInput,buttonObj)
{
/*create smaller esier to read variables*/
var year = yearInput.options[yearInput.selectedIndex].value
var month = monthInput.options[monthInput.selectedIndex].value
var day = dayInput.options[dayInput.selectedIndex].value;
var daysInMonth = daysInMonthArray[month];

var firstDay = firstDayofMonth(1, month, year);

if ((month == 1) && (isLeapYear))
{
daysInMonth = daysInMonth + 1;
}
/*clear the first part of the calendar*/
for(var i=0; i<firstDay; i++)
document.getElementById("cal"+i).innerHTML = "";

/*Load calendar dates*/
var cnt = 1;
for(var i=firstDay; i<(daysInMonth+firstDay); i++)
{
	document.getElementById("cal"+i).innerHTML = cnt;
	cnt++;
}
/*clear the end of the calendar*/
for(var i=(daysInMonth+firstDay); i<41; i++)
document.getElementById("cal"+i).innerHTML = "";

alert ("the first day of the month is " + firstDay);

alert("The year is "+ year +
" the month is " + (parseInt(month)+1) +
" the day is " + day +
" the number of days in the month is " + daysInMonth);

/*alert("display Caleandar is running the year is "+ yearInput.options[yearInput.selectedIndex].value +
" the month is " + monthInput.options[monthInput.selectedIndex].value +
" the day is " + dayInput.options[dayInput.selectedIndex].value); */
}

function isLeapYear(inputYear)
/*check to see if this is leap year returns true if it is*/
{
	if(inputYear%400==0||(inputYear%4==0&&inputYear%100!=0)) return true;
	return false;

}

function firstDayofMonth(day, month, year) {
/*Calculate the first day of the any month using month year and day. This calculation can actually
calculate the day of the week for any month day and year given but in this case the day is always equal to 1.
The value of d returned is 0 for a Sunday, 1 for a Monday, 2 for a Tuesday, etc.*/
	var tempmonth = (parseInt(month) + 1); /*converts string month into a number*/
    var a = Math.floor((14 - tempmonth) / 12);
    var y = year - a;
    var m = tempmonth + 12 * a - 2;
    var d = (day + y + Math.floor(y / 4) - Math.floor(y / 100) +
             Math.floor(y / 400) + Math.floor((31 * m) / 12))  % 7;
    return d;
}


