$(document).ready(function() {
    $('#addType').click(function() {
        $('#myForm')[0].reset();
        $('.modal-title').text("Add Category Details");
        $('#action').val("Add");
        $('#operation').val("Add")
    });

    var dataTable = $('#add-row').DataTable({
        "paging": true,
        "processing": true,
        "serverSide": true,
        "order": [],
        "info": true,
        "ajax": {
            url: "getType.php",
            type: "POST"
        },
        "columnDefs": [{
            "target": [0, 3, 4],
            "orderable": false,
        }, ],
    });

    $(document).on('submit', '#myForm', function(event) {
        event.preventDefault();
        let formData = new FormData(this);

        $('#myForm').validate({
            rules: {
                pt_name: "required"
            },
            messages: {
                pt_name: "Please enter a category name."
            },
        });

        var pt_id = $('#pt_id').val();
        var pt_name = $('#pt_name').val();

        if (pt_name !== '') {
            $.ajax({
                url: "addType.php",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $('#addRowModal').modal('hide');
                    $.alert({
                        icon: 'fas fa-check-circle',
                        title: 'Successfully',
                        content: 'The new product category has been successfully added to the system.',
                        type: 'green',
                        autoClose: 'okay|5000',
                        buttons: {
                            okay: function() {
                                $('#myForm')[0].reset();
                                dataTable.ajax.reload();
                            }
                        }
                    });
                }
            });
        }


    });

    $(document).on('click', '.edit', function() {
        var pt_id = $(this).attr("id");
        $.ajax({
            url: "fetch_single.php",
            method: "POST",
            data: { pt_id: pt_id },
            dataType: "json",
            success: function(data) {
                $('#addRowModal').modal('show');
                $('#pt_id').val(data.pt_id);
                $('#pt_name').val(data.pt_name);
                $('.modal-title').text("Edit Product Category");
                $('#pt_id').val(pt_id);
                $('#action').val("Save");
                $('#operation').val("Edit");
            }
        });
    });

    $(document).on('click', '.delete', function() {
        var pt_id = $(this).attr("id");
        $.confirm({
            icon: 'fas fa-exclamation-triangle',
            title: 'Warning!',
            content: 'Are you sure want to delete this Product Category?',
            type: 'red',
            typeAnimated: true,
            buttons: {
                close: function() {},
                tryAgain: {
                    text: 'Assent',
                    btnClass: 'btn-red',
                    action: function() {
                        if (confirm) {
                            $.ajax({
                                url: "deleteType.php",
                                method: "POST",
                                data: { pt_id: pt_id },
                                success: function(data) {
                                    dataTable.ajax.reload();
                                }
                            });
                        } else {
                            return false;
                        }
                    }
                }
            }
        });
    });

});