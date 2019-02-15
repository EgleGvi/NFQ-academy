( function( $ ) {
    $('document').ready(function(){
        $( "#datepicker" ).datepicker();

        $('#datepickerfield').datepicker({
            constrainInput: true,
            minDate: new Date(),
            showOn: 'button',
            autoSize: true,
            altFormat: 'yy-mm-dd',
            beforeShowDay: $.datepicker.Weekends,
            firstDay: 1
        });
});
} )( jQuery );

