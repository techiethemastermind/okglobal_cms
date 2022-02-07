// ===  Global Element Events === //
$(document).on('change', 'input[data-preview]', function() {
    display_image(this, $($(this).attr('data-preview')));
});

/**
 * Display Blob picture in front end side
 * @param {*} input - file html element
 * @param {*} target - html element to display picture
 */
function display_image(input, target) {
    var file = input.files[0];
    var reader  = new FileReader();
    
    reader.onload = function(e)  {
        target.attr('src', e.target.result);
    }
    // declear file loading
    reader.readAsDataURL(file);
}