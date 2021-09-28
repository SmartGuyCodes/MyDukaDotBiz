$(document).ready(function (){
    onPageLoad();
});

function onPageLoad(){
    // Submit user reg form
    $("#admin-form-signin").submit(function(e){//user clicks form submit button
        var formData = $(this).serialize(); //prepare the form for ajax post
        var url = $(this).attr('action');

        $.ajax({//make ajax request to cart process.php
                url: url,
                type: "POST",
                datType: 'json',
                data: formData
            })
            .success(function(data){
                if(data.msg == 'success'){
                    swal({
                        title: "Success!",
                        text: "Success!",
                        type: "success",
                        confirmButtonText: "Ok",
                        closeOnConfirm:	true
                    });
                    window.location = '/';
                }
                else if(data.msg == 'error'){
                    swal({
                        title: "Error!",
                        text: "Error logging in",
                        type: "error",
                        confirmButtonColor: "#FF0000",
                        confirmButtonText: "Error! Check and correct your login details",
                        closeOnConfirm:	true
                    });
                }
            });
        e.preventDefault();
    });
}