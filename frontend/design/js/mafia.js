/**
 * Created by Haakon on 05.04.2017.
 */

var valgt = document.querySelector('#valgt1');

valgt.onchange = function() {
    // Get span and div
    if(this.checked) {
        var elements = document.querySelectorAll('.crimeOption');

        // Loop elements & add class
        for(var i = 0; i < elements.length; i++) {
            if (elements[i].classList)
                elements[i].classList.add("checked");
            else
                elements[i].className += ' checked';
        }
    }
};

//jQuery implementation
$('#valgt').change(function() {
    if($(this).is(':checked')) {
        $('.crimeOption').addClass('checked');
    }
});