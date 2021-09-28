$(function(){
    var note = $('.note'),
        ts = new Date(2017, 01, 01),
        newYear = true;

    if((new Date()) > ts){
        // The new year is here! Count towards something else.
        // Notice the *1000 at the end - time must be in milliseconds
        ts = (new Date()).getTime() + 10*24*60*60*1000;
        newYear = false;
    }

    $('.countdownHolder').countdown({
        timestamp	: ts,
        callback	: function(days, hours, minutes, seconds){
            var message = "";

            message += days + " day" + ( days==1 ? '':'s' ) + ", ";
            message += hours + " hour" + ( hours==1 ? '':'s' ) + ", ";
            message += minutes + " minute" + ( minutes==1 ? '':'s' ) + " and ";
            message += seconds + " sec" + ( seconds==1 ? '':'s' ) + " <br />";

            if(newYear){
                message += "left until the end of the bid!";
            }
            else {
                message += "left to 10 days from now!";
            }

            note.html(message);
        }
    });

})