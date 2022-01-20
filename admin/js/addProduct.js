$(document).ready(function() {

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
            }
        },
        errorPlacement: function(error, element) {
            if (element.is(":checkbox")) {
                error.appendTo($('#error'));
            } else {
                error.insertAfter(element);
            }
        }
    });

});