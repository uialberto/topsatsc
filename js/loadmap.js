/*window.addEvent('domready', function(){
    $('mapa-uno').addEvent('click', function(e) {
       e = new Event(e).stop();
       var url = "../pages/mapaone.php";
       $('contenido-mapa').empty().addClass('cargando');
       var miajax = new Ajax(url, {
          method: 'post',
          update: $('contenido-mapa'),
          onComplete: function() {
             $('contenido-mapa').removeClass('cargando')
          }
       });
       miajax.request();
    });
 }); 
 window.addEvent('domready', function(){
    $('mapa-dos').addEvent('click', function(e) {
       e = new Event(e).stop();
       var url = "../pages/mapatwo.php";
       $('contenido-mapa').empty().addClass('cargando');
       var miajax = new Ajax(url, {
          method: 'post',
          update: $('contenido-mapa'),
          onComplete: function() {
             $('contenido-mapa').removeClass('cargando')
          }
       });
       miajax.request();
    });
 });*/
 function cargarmapadirone(){
    var url="pages/mapaone.php";
    $.post(url, function(data){
        $("#contenido-mapa").html(data);   
    });
}
 function cargarmapadirtwo(){
    var url="pages/mapatwo.php";
    $.post(url, function(data){
        $("#contenido-mapa").html(data);   
    });
}