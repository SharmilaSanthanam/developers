$(document).ready(function () {
    $('#login_button').click(function () {
        var email = $("#email").val();
        var password = $("#password").val();

        var data = "email=" + email + "&password=" + password;

        $.ajax({
            method: "post",
            url: "https://profilewithphp.netlify.app/php/login.php",
            data: data,
            success: function (data) {
                $("#msg").html(data);

                localStorage.setItem("userdata", JSON.stringify(data));
                console.log(JSON.stringify(userdata));
               

            }
        })

    })
})
