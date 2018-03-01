$(function () {
    var duplicates = 0,
        $original = $('.form-content').clone(true);

    function DuplicateForm () {
        var newForm;

        duplicates++; 

        newForm = $original.clone(true).insertBefore($('h4'));

        $.each($('input', newForm), function(i, item) {            
            $(item).attr('name', $(item).attr('name') + duplicates);
        });

        $('<h5>School ' + (duplicates + 1) + ' details </h5>').insertBefore(newForm);
    }

    $('a[href="add-new-form"]').on('click', function (e) {
        e.preventDefault();
        DuplicateForm();
    });
});