$(document).ready(function() {
    $.validator.addMethod('checkFileLength', function(value, element, param) {
        let length = images.length;
        return length > 0;
    });

    $('#addForm').validate({
        rules: {
            pm_name: {
                required: true
            },
            pt_id: {
                required: true
            },
            pm_price: {
                required: true
            },
            pm_certification: {
                required: true
            },
            "pd_color[]": {
                required: true
            },
            pm_material: {
                required: true
            },
            pm_detail: {
                required: true
            },
            pd_number: {
                required: true
            },
            "image[]": {
                checkFileLength: true
            }
        },
        messages: {
            pm_name: {
                required: "Please enter name."
            },
            pt_id: {
                required: "Please select category."
            },
            pm_price: {
                required: "Please enter price."
            },
            pm_certification: {
                required: "Please enter certification."
            },
            'pd_color[]': {
                required: 'Please select the color.'
            },
            pm_material: {
                required: "Please enter material."
            },
            pm_detail: {
                required: "Please enter detail."
            },
            pd_number: {
                required: "Please enter number of products."
            },
            'image[]': {
                checkFileLength: "Please Choose Your Image to Upload."
            }
        },
        submitHandler: function(form) {
            let formData = new FormData(form);

            $.ajax({
                url: "postAddProduct.php",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                }
            });
        },
        errorPlacement: function(error, element) {
            console.log(error);
            if (element.is(":checkbox")) {
                error.appendTo($('#error'));
            } else {
                error.insertAfter(element);
            }
        }
    });

});