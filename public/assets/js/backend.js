$(function () {
    
    var FormList = ['user-form'];
    for(var i = 0; i < FormList.length; i++) {
        $('#'+FormList[i]).on('submit', function(event){
            event.preventDefault();
            SubmitForm($(this));
        });
    }
    
    function SubmitForm($form) {
        console.log('SubmitForm: ' + $form.attr('id'));
        var FormID = $form.attr('id'),
            FormData = $form.serialize(),
            URL = $form.attr('action');
        if (typeof URL === 'undefined') {
            URL = window.location.href;
        }    
        $form.find('.has-error').removeClass('has-error');
        $form.find('.form_error').empty();

        console.log('URL: '+URL);
        console.log('FormData: '+FormData);

        // POST
        var posting = $.post(URL, FormData);
        posting.done(function(data) {
            if(data.success == true) {
                switch(FormID) {
                    case 'user-form':
                        request_uri = 'acp/user';
                        break;
                    default:
                        request_uri = '';
                }
                window.location.href = BASE_URL + request_uri;
            } else {
                for(var key in data.error){
                    var input = $form.find('input[name="'+key+'"]');
                    input.parent().find('.form_error').html(data.error[key])
                    input.parent().parent().addClass('has-error');
                }
            }
        }); 
    }
});
