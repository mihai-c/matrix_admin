//***********************************//
// For select 2
//***********************************//
$(".select2").select2();

/*colorpicker*/
$('.demo').each(function() {
    //
    // Dear reader, it's actually very easy to initialize MiniColors. For example:
    //
    //  $(selector).minicolors();
    //
    // The way I've done it below is just for the demo, so don't get confused
    // by it. Also, data- attributes aren't supported at this time...they're
    // only used for this demo.
    //
    $(this).minicolors({
        control: $(this).attr('data-control') || 'hue',
        position: $(this).attr('data-position') || 'bottom left',

        change: function(value, opacity) {
            if (!value) return;
            if (opacity) value += ', ' + opacity;
            if (typeof console === 'object') {
                console.log(value);
            }
        },
        theme: 'bootstrap'
    });

});
/*datwpicker*/
jQuery('.mydatepicker').datepicker();
jQuery('#datepicker-autoclose').datepicker({
    autoclose: true,
    todayHighlight: true
});
var quill = new Quill('#editor', {
    theme: 'snow'
});
