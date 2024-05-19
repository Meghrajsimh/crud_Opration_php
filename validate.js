$(document).ready(function(){
    $("#form").validate({
        rules:{
            first_name:'required',
            last_name:'required',
            age:'required',
            phone_number:{
                required:true,
                minlength:10
            },
            gender:'required',
            state:'required',
            course:'required',
            addres:'required',
            email:{
                required: true,
                mail:true
            },
            password:{
                required:true,
                minlength:8
            }

        },
        messages:{
            first_name:"Please enter your first name",
            last_name:"Please enter your last name",
            age:"Please enter your age",
            phone_number:{
                required:"Please enter your phone number",
                minlength:"number minimum length 10"
            },
            gender:"Please select gender",
            state:"please select your state",
            course:"select your course",
            addres:"Enter your adress",
            email:{
                required:"Please enter your email",
                email:"enter only email formate"
            },
            password:{
                required:"Enter your password",
                minlength:"password should be minimum 8 length"
            }

        },
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
              $(placement).append(error)
            } else {
              error.insertAfter(element);
            }
        }
    })
})