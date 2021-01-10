function countDown(){

	var myDate = new Date();
	myDate.setDate(myDate.getDate()+1);
	var tomorrow = myDate.getFullYear() + '/'  + ("0" + (myDate.getMonth() + 1)).slice(-2) + '/' + myDate.getDate() ;

	$('.clock').countdown(tomorrow, function(event) {
		var format = '%H:%M:%S';
		if(event.offset.totalDays > 0) {
			format =  event.strftime('%d %!d:giorno,giorni;') + ' ' + format;
			$(this).html(event.strftime(format));
		 }
	   if(event.offset.weeks > 0) {
 			format =  event.strftime('%d %!d:settimana,settimane;') + ' ' + format;
 	  }
		$(this).html(event.strftime(format));
	});
};
