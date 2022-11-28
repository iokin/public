/* velocidad carousel */

    $(document).ready(function(){
        $('.carousel').carousel({
  interval: 3000
})
    });


//<!-- scroll to top -->


$(window).scroll(function(){
    if ($(this).scrollTop() > 100)
        $('.scrolltop').fadeIn();
    else
        $('.scrolltop').fadeOut();
});

$(document).ready(function(){
    $('.scrolltop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});


// jQuery
$(document).ready(function(){ 
   $('#alternar-respuesta-ej2').on('click',function(){
      $('#respuesta-ej2').toggle('slow');
   });
});

$(document).ready(function(){
   $("#effectIndex1").mouseover(function(event){
      $("#capa1").addClass("f-gris");
   });
   $("#effectIndex1").mouseout(function(event){
      $("#capa1").removeClass("f-gris");
   });
   $("#effectIndex1").mouseup(function(event){
      $("#capa1").removeClass("f-gris");
   });
});

$(document).ready(function(){
   $("#effectIndex2").mouseover(function(event){
      $("#capa2").addClass("f-gris");
   });
   $("#effectIndex2").mouseout(function(event){
      $("#capa2").removeClass("f-gris");
   });
   $("#effectIndex2").mouseup(function(event){
      $("#capa2").removeClass("f-gris");
   });
});

$(document).ready(function(){
   $("#effectIndex3").mouseover(function(event){
      $("#capa3").addClass("f-gris");
   });
   $("#effectIndex3").mouseout(function(event){
      $("#capa3").removeClass("f-gris");
   });
   $("#effectIndex3").mouseup(function(event){
      $("#capa3").removeClass("f-gris");
   });
});