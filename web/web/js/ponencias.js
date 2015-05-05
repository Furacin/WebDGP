// calcula la posición absoluta de un elemento en pantalla
function getAbsoluteElementPosition(element) 
{  
      var y = 0;
      var x = 0;
      while (element.offsetParent) {
        x += element.offsetLeft;
        y += element.offsetTop;
        element = element.offsetParent;
      }
      return {top:y,left:x};
}

var alignText;
var alignCM;

// muestra el panel de una ponencia
function ponencia(id)
{
    ajaxponencias(id);
    div = document.getElementById('ponencia');
    p = document.getElementById(id);
    
    var pos = getAbsoluteElementPosition(p);
    
    div.style.top = pos.top + "px";
    w = pos.left + p.parentElement.offsetWidth;
    document.getElementById('texto-ponencia').style.float = 'left';
    alignText = 'left';
    cm = document.getElementById('context-menu');
    cm.style.float = 'right';
    alignCM = 'right';
    cm.style.marginRight = '20px';
    cm.style.marginLeft = '0px';
    if(w > 1000)
    {
        w = pos.left - div.offsetWidth - 10;        
        document.getElementById('texto-ponencia').style.float = 'right';
        alignText = 'right';
        cm = document.getElementById('context-menu');
        cm.style.float = 'left';
        alignCM = 'left';
        cm.style.marginLeft = '20px';
        cm.style.marginRight = '0px';
    }
    div.style.left = w + "px" ;  
        
    div.style.visibility = 'visible';
}

// carga una ponencia
function cargarPonencia(id)
{
    ajaxponencias(id);
    document.getElementById('texto-ponencia').style.float = alignText;
    cm = document.getElementById('context-menu');
    cm.style.float = alignCM;
    if(alignCM == 'right')
    {
        cm.style.marginLeft = '0px';
        cm.style.marginRight = '20px';
    }
    else
    {
        cm.style.marginRight = '0px';
        cm.style.marginLeft = '20px';
    }
        
}

// cierra el panel de la ponencia
function cerrar()
{
    div = document.getElementById('ponencia');
    div.style.visibility = 'hidden';
}


// petición ajax para cargar una ponencia sin necesidad de recargar la página
function ajaxponencias(id)
{
    var conexion = new XMLHttpRequest();
    
    conexion.open("GET", "ponencias.php?ponencia="+id, false);
    conexion.onreadystatechange=function(){
        if (conexion.readyState==4 && conexion.status==200)
        {
            document.getElementById("ponencia").innerHTML = conexion.responseText;
        }
    }
    conexion.send(null);
}
