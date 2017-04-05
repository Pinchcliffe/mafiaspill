/**
 * Created by Haakon on 05.04.2017.
 */

var valgt = document.querySelector('#valgt1');

//jQuery implementation
$('input[type="radio"]').click(function(e) {
    $(this).closest('.crimeOption').trigger('click');
});

$('.crimeOption').click(function() {
    $('.crimeOption').removeClass('checked');
    if($(this).find('input[type="radio"]').is(':checked')) {
        $(this).find('input[type="radio"]').prop("checked", false);
        //$(this).addClass('checked');
    } else {
        $(this).find('input[type="radio"]').prop("checked", true);
        $(this).addClass('checked');
    }

});