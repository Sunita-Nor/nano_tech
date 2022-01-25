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
                url: "insert_addProduct.php",
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
///======Clone method
$(document).ready(function() {
    $("body").on("click", ".add_node_btn_frm_field", function(e) {
        var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length + 1;
        var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);

        $(e.target).closest(".form_field_outer").last().append(cloned_el).find(
            ".remove_node_btn_frm_field:not(:first)").prop("disabled", false);

        $(e.target).closest(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled",
            true);

        //change id
        $(e.target)
            .closest(".form_field_outer")
            .find(".form_field_outer_row")
            .last()
            .find("input[type='color']")
            .attr("id", "color_no_" + index);

        $(e.target)
            .closest(".form_field_outer")
            .find(".form_field_outer_row")
            .last()
            .find("input[ttype='number']")
            .attr("id", "number_no_" + index);

        console.log(cloned_el);
        //count++;
    });
});
$(document).ready(function() {
    $("body").on("click", ".add_new_frm_field_btn", function() {
        console.log("clicked");
        var index = $(".form_field_outer").find(".form_field_outer_row").length + 1;
        $(".form_field_outer").append(`
            <div class="row form_field_outer_row">
                <div class="form-group col-md-6">
                    <div class="form-group form-group-default">
                        <label style="font-size: 20px;">Color</label>
                        <input type="color" class="form-control" name="pd_color[]" id="color_no_${index}" value="#00BFFF">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <div class="form-group form-group-default">
                    <label style="font-size: 20px;">Number of products</label>
                        <input type="number" class="form-control" name="pd_number[]" id="number_no_${index}" placeholder="Fill Number of products">
                    </div>
                </div>

                <div class="form-group col-md-2 add_del_btn_outer">
                    <button class="btn_round1 add_new_frm_field_btn" title="Add Item">
                    <i class="fas fa-plus add_icon"></i>
                    </button>

                    <button class="btn_round1 add_node_btn_frm_field" title="Copy or clone this row">
                    <i class="fas fa-copy"></i>
                    </button>

                    <button class="btn_round remove_node_btn_frm_field">
                    <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        `);
        $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);
        $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);
    });
});

$(document).ready(function() {
    //===== delete the form fieed row
    $("body").on("click", ".remove_node_btn_frm_field", function() {
        $(this).closest(".form_field_outer_row").remove();
        console.log("success");
    });
});