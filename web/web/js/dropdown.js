function dropdown()
{
    array = document.getElementsByClassName("dropdown");
    for(i=0; i<array.length; i++)
    {
        array[i].children[1].style.width = (array[i].offsetWidth-2) + "px";
    }
    
    desplegables = document.getElementsByClassName("desplegable");
    for(i=0; i<desplegables.length; i++)
    {
        desplegables[i].style.visibility = 'hidden';
    }
}


// abrir menú
function mopen(id)
{	
    document.getElementById(id).style.visibility = 'visible';
}
// cerrar menú
function mclose(id)
{
    document.getElementById(id).style.visibility = 'hidden';
}


window.addEventListener('load', dropdown);