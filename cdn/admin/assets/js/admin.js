$(function(){
    "use strict";

    //on page onLoad
    onPageLoad();

    //initialize form wizard
    $('#rootwizard').bootstrapWizard({
        'tabClass': 'nav nav-tabs tabdrop',
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').not('.tabdrop').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard').find('#bar .progress-bar').css({width:$percent+'%'});

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $('#rootwizard').find('.pager .next').hide();
                $('#rootwizard').find('.pager .finish').show();
                $('#rootwizard').find('.pager .finish').removeClass('disabled');
            } else {
                $('#rootwizard').find('.pager .next').show();
                $('#rootwizard').find('.pager .finish').hide();
            }
        },

        onNext: function(tab, navigation, index) {
            var form = $('.form' + index)
            form.parsley('validate');
            if(form.parsley('isValid')) {
                tab.addClass('success');
            } else {
                return false;
            }
        },

        onTabClick: function(tab, navigation, index) {
            var form = $('.form' + (index+1))

            form.parsley('validate');

            if(form.parsley('isValid')) {
                tab.addClass('success');
            } else {
                return false;
            }
        }
    });

    // Initialize tabDrop
    $('.tabdrop').tabdrop({text: '<i class="fa fa-th-list"></i>'});
});

function onPageLoad(){
    // Submit new category form
    $("#add-duka-category").submit(function(e){//user clicks form submit button
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
                    text: "New category has been added!",
                    type: "success",
                    confirmButtonText: "Ok",
                    closeOnConfirm:	true
                });
                window.location = '/sudo/new-category'
            }
            else if(data.msg == 'error'){
                swal({
                    title: "Error!",
                    text: "Error adding myduka category.",
                    type: "error",
                    confirmButtonColor: "#FF0000",
                    confirmButtonText: "Error!",
                    closeOnConfirm:	true
                });
                location.reload();
            }
        });
        e.preventDefault();
    });

    // Submit admin reg form
    $("#add-new-career").submit(function(e){//user clicks form submit button
        var formData = $(this).serialize(); //prepare the form for ajax post
        var url = $(this).attr('action');

        $.ajax({//make ajax request to cart process.php
                url: url,
                type: "POST",
                datType: 'json',
                data: formData
            })
            .success(function(data){
                if(data.msg == 'Success'){
                    swal({
                        title: "Success!",
                        text: "New job has been added!",
                        type: "success",
                        confirmButtonText: "Ok",
                        closeOnConfirm:	true
                    });
                    location.reload();
                    //window.location = '/admin/staff'
                }
                else if(data.msg == 'System Failed'){
                    swal({
                        title: "Error!",
                        text: "Error adding new job.",
                        type: "error",
                        confirmButtonColor: "#FF0000",
                        confirmButtonText: "Error!",
                        closeOnConfirm:	true
                    });
                    location.reload();
                }
                else if(data.msg == 'exists'){
                    swal({
                        title: "Error!",
                        text: "User mail already exists!",
                        type: "error",
                        confirmButtonColor: "#FF0000",
                        confirmButtonText: "Error!",
                        closeOnConfirm:	true
                    });
                }
            });
        e.preventDefault();
    });

    //Add new sub-category
    $('#new-sub-category, #new-child-category').submit(function(e){
        var dataForm = $(this).serialize();
        var url = $(this).attr('action');

        $.ajax({
                url : url,
                type: "POST",
                data: dataForm,
                dataType : "json"
            })
            .done(function(){
                $('#add-sub-category').modal('hide');
                location.reload();
            });
        e.preventDefault();
    });
}
