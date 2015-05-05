var email;
var asunto;

function validar()
{
    /*creo una variable de tipo booleana que en principio tendrá un valor true(verdadero), 
    y que retornaremos en false(falso) cuando nuestra condición no se cumpla*/
    var todo_correcto = true;

    /*Para comprobar el email haremos uso de una expresión regular. Esto es una secuencia 
    de caracteres que nos dirá si el valor ingresado por el usuario tiene estructura de 
    correo electrónico. Lo que hacemos es obtener el value del campo de texto destinado 
    al email, y le aplicamos el método test() del objeto global RegExp(que nos permite 
    trabajar con expresiones regulares).*/
    var expresion = /^[a-z][\w+.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    email = document.getElementById('email-formulario').value;
    asunto = document.getElementById('asunto-formulario').value;
    if (!expresion.test(email)){
        todo_correcto = false;
    }

    /*Por último, y como aviso para el usuario, si no está todo bién, osea, si la variable 
    todo_correcto ha devuelto false al menos una vez, generaremos una alerta advirtiendo 
    al usuario de que algunos datos ingresados no son los que esperamos.*/
    if(!todo_correcto){
        alert('Email incorrecto, vuelva a intentarlo');
    }

    if(todo_correcto){
        ajaxenviarcorreo();
        document.getElementById('email-formulario').value = "";
        document.getElementById('asunto-formulario').value = "";
        document.getElementById('nombre-formulario').value = "";
    }
}


// petición ajax para enviar un correo
function ajaxenviarcorreo()
{
    var conexion = new XMLHttpRequest();
    
    conexion.open("GET", "enviar-correo.php?email="+email+"&asunto="+asunto, true);
    conexion.onreadystatechange=function(){
        if (conexion.readyState==4 && conexion.status==200)
        {
            alert(conexion.responseText);
        }
    }
    conexion.send(null);
}