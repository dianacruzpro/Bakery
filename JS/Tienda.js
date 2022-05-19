/***********    JAVASCRPT   ***********/


var valorCarro = 0;//Valor de carrito de compra

//Funcion para el boton mas
function btnMas(IDCont){
    var txtContador = document.getElementById("txtContador"+IDCont);//Contador
    var valor = document.getElementById("txtContador"+IDCont);//Valor del contador
    var txtPrecio = document.getElementById("txtPrecio"+IDCont);//Precio
    valor = parseInt(valor.innerHTML);//parsear valor del contador
    if(valor<30){
        valor++;//Sumarle uno al contador
        txtContador.innerHTML = "";//Vaciar contenedor
        txtContador.innerHTML = valor;//Colocar valor del Contador
        txtPrecio = parseFloat(txtPrecio.innerHTML);//Parsear valor del producto
        sumarCarrito(txtPrecio);//Realizar la resta al carrito
    }
}

//Funcion para el boton menos
function btnMenos(IDCont){
    var txtContador = document.getElementById("txtContador"+IDCont);//Contador
    var valor = document.getElementById("txtContador"+IDCont);//Valor del contador
    var txtPrecio = document.getElementById("txtPrecio"+IDCont);
    valor = parseInt(valor.innerHTML);//Parsear valor del contador
    if(valor>0){
        valor--;//Restar uno al contador
        txtContador.innerHTML = "";//Vaciar contenedor
        txtContador.innerHTML = valor;//Colocar valor del Contador
        txtPrecio = parseFloat(txtPrecio.innerHTML);//Parsear valor del producto
        restarCarrito(txtPrecio);//Realizar la resta al carrito
    }
}

//Funcion para sumar al carrito
function sumarCarrito(cant){
    var txtCarrito = document.getElementById("txtCarrito");//Carrito
    var valor = document.getElementById("txtCarrito");//Valor Carrito
    valor = parseFloat(valor.innerHTML);//Parsear valor del carrito
    valor = valor + Number(cant);//Sumar cantidad
    txtCarrito.innerHTML = "";//Vaciar carrito
    txtCarrito.innerHTML = valor.toFixed(2);//Colocar valor del Carrito
}

//Funcion para restar al carrito
function restarCarrito(cant){
    var txtCarrito = document.getElementById("txtCarrito");//Carrito
    var valor = document.getElementById("txtCarrito");//Valor Carrito
    valor = parseFloat(valor.innerHTML);//Parsear valor del carrito
    valor = valor - Number(cant);//Restar cantidad
    txtCarrito.innerHTML = "";//Vaciar carrito
    txtCarrito.innerHTML = valor.toFixed(2);//Colocar valor del Carrito
}

/***********    JQUEY   ***********/

/* Simulacion de API */
/**
 * Esta simulacion de API consta de Un objeto producto
 * dentro del este se encuentra los productos en otro objeto producto
 * los cuales estan numerados, empezando por el numero 0
 * cada uno cuenta con su nombre, precio (Float), 
 * y el nombre de la imagen (La imagen debe estar en la carpeta IMG)
 */
var productos = {
    
    0:{
        nombre: 'Alfajor (x7)',
        precio: 3.50,
        img: 'alfajor.jpg'
    },
    1:{
        nombre: 'Muffin (x2)',
        precio: 0.75,
        img: 'muffin.jpg'
    },
    2:{
        nombre: 'Baguette (x2)',
        precio: 2.15,
        img: 'baguette.jpg'
    },
    3:{
        nombre: 'Brazo Gitano',
        precio: 5.10,
        img: 'brazo-de-gitano-con-dulce-de-leche.jpg'
    },
    4:{
        nombre: 'Cacho Simple',
        precio: 0.35,
        img: 'cacho-simple.jpg'
    },
    5:{
        nombre: 'Pack Muffins (x9)',
        precio: 6.30,
        img: 'pack-muffins.jpg'
    },
    6:{
        nombre: 'Pan de Muerto',
        precio: 0.75,
        img: 'pan-de-muerto.jpg'
    },
    7:{
        nombre: 'Pan Frances (x4)',
        precio: 1.50,
        img: 'pan-frances.jpg'
    },
    8:{
        nombre: 'Pichardines (x2)',
        precio: 0.60,
        img: 'pichardines.jpg'
    },
    9:{
        nombre: 'Quesadilla',
        precio: 1.75,
        img: 'quesadilla.jpg'
    },
    10:{
        nombre: 'Dona',
        precio: 1.10,
        img: 'dona.jpg'
    },
    11:{
        nombre: 'Rosquilla (x2)',
        precio: 0.75,
        img: 'rosquilla.jpg'
    },
    12:{
        nombre: 'Sandwich de Jamon',
        precio: 0.85,
        img: 'sandwich-de-jamon.jpg'
    },
    13:{
        nombre: 'Semita Alta',
        precio: 0.60,
        img: 'semita-alta.jpg'
    },
    14:{
        nombre: 'Tarta de Fresa',
        precio: 6.75,
        img: 'tarta-de-fresas.jpg'
    },
    15:{
        nombre: 'Torta de Naranja',
        precio: 5.50,
        img: 'torta-de-naranja.jpg'
    },
    16:{
        nombre: 'Volteado de Piña',
        precio: 3.30,
        img: 'volteado-de-piña.jpg'
    },
    17:{
        nombre: 'Zeppole',
        precio: 0.40,
        img: 'zeppole.jpg'
    }
};

//Funcion para generar los productos al abrir el documento
$(document).ready(function(){

    //Identificar cuantas filas se necesitan
    var contProductos =Object.keys(productos).length;//Cuenta cuantos productos hay
    var filasFloat = (contProductos)/4;//Obtener valor de filas con decimal
    var filasInt = parseInt(filasFloat);//Obtener valor de filas sin decimal

    //Saber si las filas son exactas
    if (filasFloat > filasInt) {
        filasInt++;//Si el valor no es exacto, sumar una fila
    }

    var row = "";//Variable de fila
    var j = 0;//Contador del Do-While
    var contElements = 0;//Contar cuantos productos han sido generados
    do {
        //Inicio de card-grup
        row+="<div class=\"card-group\">";
        //Añadir 4 productos por card-grup
        for (var i = 0; i < 4; i++){
            //Comprobar si hay productos disponibles para añadir
            if (contProductos>contElements) {
                row+= '<div class="card border-dark p-1" style="width: 100%; background:none;">'
                +'<img src="IMG/PRODUCTOS/'+productos[contElements].img+'" class="card-img-top" alt="...">' 
                +'<div class="card-body tiendaProductos">'
                +'<h5 class="card-title text-center">'+productos[contElements].nombre+'</h5>'//Titulo
                +'<div class="botones fs-1 fw-bold"> '
                +'<img src="IMG/btnMenos.svg" class="btn btn-link btn-sm d-inline m-0 p-0" style="width: 30px;" id="btnMenos'+contElements+'" onclick="btnMenos('+contElements+');"/>'
                +'<p class="d-inline fs-4 p-1" id="txtContador'+contElements+'">0</p>'
                +'<img src="IMG/btnMas.svg" class="btn btn-link btn-sm d-inline m-0 p-0" style="width: 30px;" id="btnMas'+contElements+'" onclick="btnMas('+contElements+');"/>'
                +'<div class="float-end">'
                +'<p class="d-inline fs-4">$</p>'
                +'<p class="d-inline fs-4" id="txtPrecio'+contElements+'">'+(productos[contElements].precio).toFixed(2)+'</p>'
                +'</div> </div> </div> </div>';
                contElements++;//Sumar contador de productos generados
            }else{
                //Si no hay mas producto, llenar los huecos vacios con card vacias
                row+= '<div class="card border-dark p-1" style="width: 100%; background:none;"></div>';
            }
        }
        row+="</div>";//Cerrar card-grup
        j++;
    } while (j<filasInt);
    $("#tabla").append(row);//Añadir codigo generado al div con id="tabla"
});