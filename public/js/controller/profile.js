$(document).ready(function() {

    $("#profileimage").change(function(){
        console.log('hello world');
        var input = this;
        var url = $(this).val();
        var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
        // if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
        //  {
        var reader = new FileReader();

        reader.onload = function (e) {
           $('#userprofileimg').attr('src', e.target.result);
        }
       reader.readAsDataURL(input.files[0]);
        // }
        // else
        // {
        //   $('#img').attr('src', '/assets/no_preview.png');
        // }
    })


    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).css({'width':'100px','height':'100px','margin-left':'10px'}).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };


    $('#worksphoto').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });

})


function deletePhotos() {

    var userid = $("#userid").val();

    $.ajax({
        type:"GET",
        url: "ajax/createQuery",
        data: {userid:userid},
        success: function(response,status){
          window.location.href="";
        }
    })

}
