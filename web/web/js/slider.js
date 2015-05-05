var ul;
var li_items; 
var li_number;
var image_number = 0;
var slider_width = 0;
var image_width;
var current = 0;

function init()
{	
	ul = document.getElementById('image_slider');
	li_items = ul.children;
	li_number = li_items.length;
    
    // calculamos el ancho del slider
	for (i = 0; i < li_number; i++)
    {
        image_width = li_items[i].childNodes[0].clientWidth;
        slider_width += image_width+40;
        image_number++;
	}
	
	ul.style.width = parseInt(slider_width + 100) + 'px';
    current = ul.style.left;
}

var interval = setInterval('animation()', 10);

function animation()
{		    
    current = current-1;	
    if(current < (image_width+40-slider_width))
    {
        current = 0;  
    }
    ul.style.left = parseInt(current) + "px";
}


window.addEventListener('load', init);