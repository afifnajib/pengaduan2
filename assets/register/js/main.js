$(function(){
    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
             element.before(error);
        },
        rules: {
            nik : {
                required: true,
            },
            nama : {
                required: true,
            },
            alamat : {
                required: true,
            },
            telp : {
                required: true,
            },
            email : {
                required: true,
            },
            username : {
                required: true,
            },
            password: {
                required: true,
            },

        },messages: {
            nik : {
                required : "Please enter your NIK"
            },
            nama : {
                required : "Please enter your Full Name"
            },
            alamat : {
                required : "Please enter your address"
            },
            email : {
                required : "Please enter your email",
                email: "Please enter a valid email address!"
            },
            telp : {
                required : "Please enter your telpon number"
            },
            username : {
                required : "Please enter your username"
            },
            password : {
                required : "Please enter your password"
            },

        },
        onfocusout: function(element) {
            $(element).valid();
        },
        highlight : function(element, errorClass, validClass) {
            $(element.form).find('.actions').addClass('form-error');
            $(element).removeClass('valid');
            $(element).addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element.form).find('.actions').removeClass('form-error');
            $(element).removeClass('error');
            $(element).addClass('valid');
        }
    });
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        // enableAllSteps: true,
        enableFinishButton: !1,
        labels: {
            finish: "Submit",
            next: "Next",
            previous: "Back"
        },
        onInit : function (event, currentIndex) {
            // Suppress (skip) "Warning" step if the user is old enough.
            // if(currentIndex === 0) {
            //     form.find('.actions').addClass('btn');
            // };
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";
        return form.valid();
            // return form.submit();
        },
        onFinished: function (event, currentIndex)
        {

            // alert('Sumited');
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {

            if (currentIndex === 2) {
                var $input = $("<button type='submit' class='button button-primary button-shadow' name='submit' id='sign-btn' value='submit'>Finish</button>");
                $input.appendTo($('ul[aria-label=Pagination]'));
            } else {
                $('ul[aria-label=Pagination] button[value="submit"]').remove('button');
            }
            // if (currentIndex === 2) { //if last step
                //remove default #finish button
                // $('#signup-form').find("a[href$='#finish']").remove();
                //append a submit type button
                // $('#signup-form .actions li:last-child').append("<button type='submit' name='signup-btn' class='btn' id='signup-btn'>asdads</button>");
            // }else {}

        },
        onStepChanging: function (event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            if ( newIndex === 1 ) {
                $('.wizard > .steps ul').addClass('step-2');
            } else {
                $('.wizard > .steps ul').removeClass('step-2');
            }
            if ( newIndex === 2 ) {
                $('.wizard > .steps ul').addClass('step-3');
            } else {
                $('.wizard > .steps ul').removeClass('step-3');
            }
            return form.valid();
        }
    });
    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Date Picker
    // var dp1 = $('#dp1').datepicker().data('datepicker');
    // dp1.selectDate(new Date());
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#your_picture_image')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
