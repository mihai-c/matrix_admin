$(function(){
    // Success Type
    $('#ts-success').on('click', function() {
        toastr.success('Have fun storming the castle!', 'Miracle Max Says');
    });

    // Success Type
    $('#ts-info').on('click', function() {
        toastr.info('We do have the Kapua suite available.', 'Turtle Bay Resort');
    });

    // Success Type
    $('#ts-warning').on('click', function() {
        toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
    });

    // Success Type
    $('#ts-error').on('click', function() {
        toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
    });
});