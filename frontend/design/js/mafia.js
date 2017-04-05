/**
 * Created by Haakon on 05.04.2017.
 */

var valgt = document.querySelector('#valgt1');

//jQuery implementation
$('input[type="radio"]').click(function() {
    $('.crimeOption').removeClass('checked');
    if($(this).is(':checked')) {
        $(this).closest('.crimeOption').addClass('checked');
    }
});