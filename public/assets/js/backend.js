$(function () {
    var BASE_URL = 'http://fuelphp.local/';
    
    var FormList = ['user-form'];
    for(var i = 0; i < FormList.length; i++) {
        $('#'+FormList[i]).on('submit', function(event){
            event.preventDefault();
            SubmitForm($(this));
        });
    }
    
    function SubmitForm($form) {
        var FormID = $form.attr('id'),
            FormData = $form.serialize(),
            URL = $form.attr('action');
        if (typeof URL === 'undefined') {
            URL = window.location.href;
        }    
        $form.find('.form_error').empty();

        var posting = $.post(URL, FormData);
        posting.done(function(data) {
            if(data.success == true) {
                switch(FormID) {
                    case 'user-form':
                        uri = 'acp/user';
                        break;
                    default:
                        uri = '';
                }
                window.location.href = BASE_URL + uri;
            } else {
                for(var key in data.error){
                    var input = $form.getElementsByName[key];
                    console.log(input);
                }
               
            }
        });
        
        
        
    }
});
