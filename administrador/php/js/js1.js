// ejecutar funcion en el evento click
document.getElementById("boton").addEventListener("click", open_close)
// declaramos variables

var menu_side=document.getElementById("menu_side");
var boton =document.getElementById("boton");
var body =document.getElementById("body");


// evento para mostrar y ocultar menu

function open_close(){
   body.classList.toggle("body_move")
   menu_side.classList.toggle("menu_side_move")
}












































//si ancho de la pagina es menor a 760px ocultara el menu al recargar la pagina


// if(window.innerWidth<760){

//    body.classList.add("body_move");
//    menu_side.classList.add("menu_side_move");
    
// }

// //haciendo el menu responsi

// window.addEventListener("resize", function(){
//  if(this.window.innerWidth<760){

//    body.classList.remove("body_move")
//    menu_side.classList.remove("menu_side_move")
//  }

//  if(this.window.innerWidth>760){

//    body.classList.add("body_move")
//    menu_side.classList.add("menu_side_move")
//  }

// })