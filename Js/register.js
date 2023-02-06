$(document).ready(function () {
  $("form").submit(function (e) {
       e.preventDefault();
    // const data = {
    //   firstname:$('.firstname').val(),
    //   lastname: $('.lastname').val(),
    //   email: $('.email').val(),
    //   password: $('.password').val(),
    //   mobile: $('.mobile').val(),
    //   age: $('.age').val(),

    // }

    $.ajax({
      url: "php/register.php",
      type: "POST",
      data: $("form").serialize(),
      success:function(d) 
      {
       if(d){
        window.location="login.html"
       }else{
        alert("Please enter Again");
       }
        // $("#frm")[0].reset();
      }
    });
  });
});
