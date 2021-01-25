window.onload = function(){
  console.log("test");
  $('#login-button').click(function(){
    $(this).fadeOut("slow",function(){
      $("#login-content").fadeIn("slow");
    });
  });

  $('#close-login-content').click(function(){
    $("#login-content").fadeOut("slow",function(){
      $("#login-button").fadeIn("slow");
    });
  });

};




  