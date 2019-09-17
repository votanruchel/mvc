$(function(){
    $('.login100-form').on('submit',function(e){
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url: BASE_URL +'ajax/userAuth',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(ret){
                if(ret.login == 1){
                    window.location.href = BASE_URL+'panel'; 
                }
            }
        });
    });
});