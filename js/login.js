$("#login").validate({
    rules: {
        email: {
            required: true,
        },
        password: {
            required: true,
        },
        messages: {
            email: {
                required: "Please Enter Your Email-Id",
            },
            password: {
                required: "Please Enter Your Password",
            },
        }
    }
});