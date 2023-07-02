$("#regi").validate({
    rules: {
        name: {
            required: true,
            minlength: 3,
        },
        email: {
            required: true,
            email: true,
        },
        phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
        },
        password: {
            required: true,
            minlength: 8,
        },
        cpassword: {
            required: true,
            minlength: 8,
            equalTo: "#password",
        },
        messages: {
            name: {
                required: "Please Enter Your Name",
                minlength: "Your Name Must Consist of At Least 3 Charecters"
            },
            email: {
                required: "Please Enter Your Email-Id",
                email: "Please Enter A Valide Email-Id"
            },
            phone: {
                required: "Please Enter Your Phone Number",
                minlength: "Your Phone Number Must Consist of At Least 10 Digits",
                maxlength: "Your Phone Number Must Consist of Only 10 Digits"
            },
            password: {
                required: "Please Enter Your Password",
                minlength: "Your Password Must Consist of At Least 8 Charecters"
            },
            cpassword: {
                required: "Please Enter Your Confirm Password",
                minlength: "Your Confirm Password Must Consist of At Least 8 Charecters",
                equalTo: "Password Are Not Matched"
            },
        },
    },
});