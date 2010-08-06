function showcalendar(page,pwidth,pheight) {
	createPopUp(page,"ActiveCalendarWindow",pwidth,pheight,"no","no");
}
function createPopUp(theURL, Name, popW, popH, scroll, resize) {
	var winleft = (screen.width - popW) / 2;
	var winUp = (screen.height - popH) / 2;
	winProp = 'width='+popW+',height='+popH+',left='+winleft+',top='+winUp+',scrollbars='+scroll+',resizable='+resize+'';
	Win = window.open(theURL, Name, winProp);
	Win.window.focus();
}
function getStartDate(year,month,day) {
	self.close();
	opener.setStartDates(day,month,year);
}
function getEndDate(year,month,day) {
	self.close();
	opener.setEndDates(day,month,year); 
}
function getEUDate(year,month,day){
	self.close();
	opener.setEUDates(day,month,year);
}
function getUSDate(year,month,day){
	self.close();
	opener.setUSDates(day,month,year);
}
function setStartDates(day,month,year) {
    for (i=0; i<document.calform.StartDay.length; i++) {
        if (document.calform.StartDay.options[i].value == day){
		document.calform.StartDay.selectedIndex = i;
        }
    }
    for (i=0; i<document.calform.StartMonth.length; i++) {
        if (document.calform.StartMonth.options[i].value == month){
		document.calform.StartMonth.selectedIndex = i;
        }
    }
    for (i=0; i<document.calform.StartYear.length; i++) {
        if (document.calform.StartYear.options[i].value == year){
		document.calform.StartYear.selectedIndex = i;
        }
    }
}
function setEndDates(day,month,year) {
    for (i=0; i<document.calform.EndDay.length; i++) {
        if (document.calform.EndDay.options[i].value == day){
		document.calform.EndDay.selectedIndex = i;
        }
    }
    for (i=0; i<document.calform.EndMonth.length; i++) {
        if (document.calform.EndMonth.options[i].value == month){
		document.calform.EndMonth.selectedIndex = i;
        }
    }
    for (i=0; i<document.calform.EndYear.length; i++) {
        if (document.calform.EndYear.options[i].value == year){
		document.calform.EndYear.selectedIndex = i;
        }
    }
}
function setEUDates(day,month,year) {
	date=day+'-'+month+'-'+year;
	document.calform.eu.value = date;
}
function setUSDates(day,month,year) {
	date=month+'/'+day+'/'+year;
	document.calform.us.value = date;
}
 
