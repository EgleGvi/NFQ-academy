( function( $ ) {
    $('document').ready(function(){
        createDatepickers();
        changeDate(new Date());
});
} )( jQuery );

function createDatepickers() {

    $('#js-date-picker-field').datepicker({
        constrainInput: true,
        minDate: new Date(),
        showOn: 'button',
        autoSize: true,
        altFormat: 'yy-mm-dd',
        beforeShowDay: $.datepicker.Weekends,
        firstDay: 1
    });
}

//Dummy function that simulates backend
function getAvailableTimes(date) {
    var data = {
        "02/20/2019" : [
            "10:00", "10:15", "10:30", "11:00", "12:00", "12:15", "13:45", "15:30", "16:15", "17:00", "18:15", "19:45"
        ],
        "02/21/2019" : [
            "10:15", "10:30", "11:45", "12:00", "12:15", "13:45"
        ],
        "02/22/2019" : [
            "10:30", "11:45", "12:00", "12:15", "13:45", "15:15", "15:45", "16:30", "17:15", "17:45", "18:00",
            "18:15", "18:30", "19:30"
        ],
        "02/23/2019" : [
            "12:00", "12:15", "13:45", "15:45", "16:30", "17:15", "17:45", "18:00",
            "18:15", "18:30", "19:30"
        ],
        "02/24/2019" : [
            "10:30", "11:45", "12:00", "12:15", "13:45", "15:15", "15:45", "16:30", "17:15", "17:45", "18:00",
            "18:15", "18:30", "19:30"
        ],
        "02/25/2019" : [
            "13:45", "15:15", "15:45", "16:30", "17:15", "17:45", "18:00",
            "18:15", "18:30", "19:30"
        ],
        "02/26/2019" : [
            "10:30", "11:45", "13:45", "15:15", "15:45", "16:30", "17:15", "17:45", "18:00",
            "18:15"
        ],
        "02/27/2019" : [
            "10:30", "11:45", "12:00", "12:30", "13:00", "13:45", "15:15", "15:45", "16:30", "17:15", "17:30",
            "18:00", "18:15", "18:30", "19:45"
        ],
    };

    return data[date];
}

function changeDate(date) {
    var availableTimes = getAvailableTimes(date);
    var html = "";
    if(availableTimes !== undefined) {
        availableTimes.forEach(function (time) {
            html += '<div>' + time + '</div>';
        });
    }
    else {
        html = '<p>Nerasta galimų laikų</p>';
    }
    $('#js-available-times').html(html);
    // console.log(availableTimes);
}

