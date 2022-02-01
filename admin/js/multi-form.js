(function($) {
    $.fn.multiStepForm = function(args) {
        if (args === null || typeof args !== "object" || $.isArray(args))
            throw " : Called with Invalid argument";
        var form = this;
        var tabs = form.find(".tab");
        var steps = form.find(".step");

        steps.each(function(i, e) {
            $(e).on("click", function(ev) {});
        });
        form.navigateTo = function(i) {
            /*index*/
            /*Mark the current section with the class 'current'*/
            tabs.removeClass("current").eq(i).addClass("current");
            // Show only the navigation buttons that make sense for the current section:
            form.find(".previous").toggle(i > 0);
            atTheEnd = i >= tabs.length - 1;
            form.find(".next").toggle(!atTheEnd);
            // console.log('atTheEnd='+atTheEnd);
            form.find(".submit").toggle(atTheEnd);
            fixStepIndicator(curIndex());
            return form;
        };

        function curIndex() {
            /*Return the current index by looking at which section has the class 'current'*/
            return tabs.index(tabs.filter(".current"));
        }

        function fixStepIndicator(n) {
            steps.each(function(i, e) {
                i == n ? $(e).addClass("active") : $(e).removeClass("active");
            });
        }
        /* Previous button is easy, just go back */
        form.find(".previous").click(function() {
            form.navigateTo(curIndex() - 1);
        });

        /* Next button goes forward iff current block validates */
        /* เรียกข้อมูลมาแสดง */
        form.find(".next").click(function() {
            form.find('#emailText').text(' ');
            form.find('#usernameText').text(' ');
            form.find('#passwordText').text(' ');
            form.find('#yourName').text(' ');
            form.find('#birthdayText').text(' ');
            form.find('#genderText').text(' ');
            // form.find('#addressText').text(' ');

            let email = form.find('#email').val();
            let username = form.find('#username').val();
            let password = form.find('#password').val();
            let yourName = form.find('#firstName').val() + ' ' + form.find('#lastName').val();
            let birthday = form.find('#date').val();
            let gender = $('input[name=gender]:checked', form).val();

            let address = form.find('#address').val() + ' ' + form.find('#tambol').val() + ' ' + form.find('#amphur').val() +
                ' ' + form.find('#province').val() + ' ' + form.find('#postalCode').val();


            form.find('#emailText').append(email);
            form.find('#usernameText').append(username);
            form.find('#passwordText').append(password);
            form.find('#yourName').append(yourName);
            form.find('#birthdayText').append(birthday);
            form.find('#genderText').append(gender);
            // form.find('#addressText').append(address);
            /* END เรียกข้อมูลมาแสดง */

            if ("validations" in args &&
                typeof args.validations === "object" &&
                !$.isArray(args.validations)
            ) {
                if (!("noValidate" in args) ||
                    (typeof args.noValidate === "boolean" && !args.noValidate)
                ) {
                    form.validate(args.validations);
                    if (form.valid() == true) {
                        form.navigateTo(curIndex() + 1);
                        return true;
                    }
                    return false;
                }
            }
            form.navigateTo(curIndex() + 1);
        });

        form.find(".submit").on("click", function(event, currentIndex) {
            if ($('#status').is(":checked")) {

                /* ส่งข้อมูลเข้าฐานข้อมูล */
                let formData = {
                    email: form.find('#email').val(),
                    username: form.find('#username').val(),
                    password: form.find('#password').val(),
                    Cpassword: form.find('#Cpassword').val(),
                    firstName: form.find('#firstName').val(),
                    lastName: form.find('#lastName').val(),
                    date: form.find('#date').val(),
                    gender: $('input[name=gender]:checked', form).val(),
                    phone: form.find('#phone').val(),

                    address: form.find('#address').val(),
                    tambol: form.find('#tambol').val(),
                    amphur: form.find('#amphur').val(),
                    province: form.find('#province').val(),
                    postalCode: form.find('#postalCode').val(),

                    status: form.find('#status').val()
                }

                console.log(JSON.stringify(formData));

                $.ajax({
                    url: "add_member.php",
                    type: "post",
                    data: { formData: JSON.stringify(formData) },
                    cache: false,
                    success: function(response) {
                        console.log(response);
                        if (response === "True") {
                            $.alert({
                                icon: 'fas fa-check-circle',
                                title: 'Succeed',
                                content: 'Completed membership application',
                                type: 'green',
                                typeAnimated: true,
                                buttons: {
                                    tryAgain: {
                                        text: 'THANK YOU!',
                                        btnClass: 'btn-green',
                                        action: function() {
                                            window.location.href = 'http://localhost/nano_tech/signin.php';
                                        }
                                    }
                                }
                            });
                        }
                    }
                });
            } else {
                $.confirm({
                    icon: 'fas fa-exclamation-triangle',
                    title: 'Warning',
                    content: 'Please accept the terms of use.',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        tryAgain: {
                            text: 'Close',
                            btnClass: 'btn-red',
                            action: function() {}
                        },
                    }
                });
                return form;
            }
            console.log(form);

            if (
                typeof args.submit === "undefined" ||
                (typeof args.submit === "boolean" && args.submit)
            ) {}

            typeof args.defaultStep === "number" ?
                form.navigateTo(args.defaultStep) :
                null;

            form.noValidate = function() {};
            return form;
        });
        typeof args.defaultStep === "number" ?
            form.navigateTo(args.defaultStep) :
            null;

        form.noValidate = function() {};
        return form;
    };
})
(jQuery);