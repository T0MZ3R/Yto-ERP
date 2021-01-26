let canFade = true;

let fadeBtn = () => {
  if(canFade){
    $('#login-button').fadeOut("slow",function(){
      $("#login-content").fadeIn("slow");
    });
    canFade = false;
  }
};

window.onload = function(){
  $('#login-button').click(fadeBtn);

  $('#close-login-content').click(function(){
    canFade = true;
    $("#login-content").fadeOut("slow",function(){
      $("#login-button").fadeIn("slow");
    });
  });

};




  