$(document).ready(function () {
    var data = {
       
        email: $("#email").val(),
        password: $("#password").val(),
        
    };

    $.ajax({
        url: 'php/login.php',
        type: 'post',
        data: data,
        success: function (res) {
          
            if (res == "Login Successful") {
               
            window.location = "profile.html"
            } else {
                alert("Wrong password");
            }
        }
    });
});