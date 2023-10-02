$(document).ready(function() {
    // When a table row with the class "description-row" is clicked, toggle the ellipsis class
    $('.description-row').click(function() {
        $(this).find('.description').toggleClass('ellipsis');
    });
});
