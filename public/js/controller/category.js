var pathFile = "http://localhost/hireme/";

$(document).ready(function(){


})


function showWorks(id) {

    $.ajax({
        type:"GET",
        url: "../ajax/selectQuery",
        data: {userid:id,action:'selectworksphoto'},
        success: function(response,status) {
            $('.img-works').html('');

            var result = $.parseJSON(response);

            $.each(result,function(i,field){
                $('.img-works').append('<img src="'+pathFile+'storage/app/'+field['photo']+'" style="width:100px;height:100px;padding:10px;" />')
            })

        }
    })

}
