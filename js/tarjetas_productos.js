
var tarjetas = document.getElementById("area_tarjetas_productos");
var ver_producto = document.getElementById("area_detalle_producto");
var formulario = document.getElementById("datosProductos");
var ver_cotizacion = document.getElementById("area_cotizacion");
var btn_cotizacion = document.getElementById("btn_cotizacion");
var btn_ico_regresar = document.getElementById("ico_flecha_regresar");
var tbody = document.getElementById("tbody");
var contador = document.getElementById("span_contador");
var btn_ico_menu = document.getElementById("ico_menu");


function crearTarjetas(){
    
    document.getElementById("area_detalle_producto").style.display = "none";
    document.getElementById("area_formulario").style.display = "none";
    document.getElementById("area_cotizacion").style.display = "none";

    var urlReqProd = "Productos/require_productos.php"

    fetch(urlReqProd)
    .then(res => res.json())
    .then(data => { 
            data.map(item =>{
            tarjetas.innerHTML +=`
            <div class="cards" >
                
                <img src="img/${item.imagen}" width="200" height="200" onclick=pedir_producto("${item.ID}")><br>

                <div class="datos">
                    <p>${item.subcategoria}</p>
                    <p>Marca: ${item.marca}</p>
                    <p>Modelo:${item.modelo}</p>
                    <p>Capacidad: ${item.capacidad}</p>
                    <p>Resolución: ${item.resolucion}</p>
                    <p>$ ${item.precio_publico}</p>
                </div><br>
                <div class="botones">       
                    <button id="btnver" onclick=addProductoToCotizar("${item.ID}")>Cotizar_<i class="fa-regular fa-file-lines"></i></button>
                </div>
            </div>
            `
         });
    });
};
crearTarjetas();


function pedir_producto(ID){
    
    document.getElementById("area_tarjetas_productos").style.display = "none";
    document.getElementById("area_detalle_producto").style.display = "flex";
    
    // console.log(ID)
    var url_req_id_producto = "Productos/req_id_producto.php";

    fetch(url_req_id_producto,{
        method: "POST",
        body: ID
    })
    .then(res => res.json())
    .then(data => {
        data.map(item =>{
            ver_producto.innerHTML =`
            
            <div class="tarjeta_producto" id="detalle_producto">
                <div id="div_img_tarjeta_producto">
                <img src="img/${item.imagen}" width="300" height="300" >
                </div>
                <div class="datos" id="div_datos_tarjeta_producto">
                    <h2>${item.subcategoria}</h2><br>
                    <h3>Marca: ${item.marca}</h3><br>
                    <h3>Modelo: ${item.modelo}</h3><br>
                    <h3>Capacidad: ${item.capacidad}</h3><br>
                    <h3>Resolución: ${item.resolucion}</h3><br>
                    <h3>$ ${item.precio_publico}</h3><br><br>
                    <h3>Descripción: ${item.descripcion}</h3><br>
                    <hr><br>
                        <div class="contenedor_btn">       
                            <button id="btneliminar" class="btn_detalle" onclick=eliminarReg("${item.ID}")>Eliminar <i class="fa-solid fa-trash-can"></i></button>
                            <button id="btneditar" class="btn_detalle" onclick=editarReg("${item.ID}")>Editar <i class="fa-solid fa-pen-to-square"></i></button>
                        </div>

                </div>
                
                    
            </div>
            `
        });              
    });
};

function ir_formulario(){
    document.getElementById("area_tarjetas_productos").style.display = "none";
    document.getElementById("area_detalle_producto").style.display = "none";
    document.getElementById("area_cotizacion").style.display = "none";
    document.getElementById("area_formulario").style.display = "flex";
};

formulario.addEventListener("submit", function(e){ 
    e.preventDefault();

    

    var url_insert = "Productos/insert_update.php";  
    const datos = new FormData(formulario);
    console.log(datos)
    console.log(datos.get("categoria"))
    console.log(datos.get("subcategoria"))
    console.log(datos.get("Producto"))
    console.log(datos.get("Marca"))
    console.log(datos.get("Modelo"))
    console.log(datos.get("Capacidad"))
    console.log(datos.get("Resolucion"))
    console.log(datos.get("descripProducto"))
    console.log(datos.get("imagen"))
    console.log(datos.get("proveedor"))
    console.log(datos.get("precioDist"))
    console.log(datos.get("actual_precio"))
    console.log(datos.get("factor"))
    console.log(datos.get("precioPublico"))

    fetch(url_insert,{
        method: "POST",
        body: datos
    })


    .then(res => res.json())
    .then(data => {

        if(data == "true") {
            location.reload();
            // console.log(dataos);
            alert("Se agregará éste producto a la base de datos");
            
        }
    });
});

document.addEventListener("DOMContentLoaded",() =>{

    let img = document.getElementById("imagen");
    let btnimg = document.getElementById("botimg");

    btnimg.addEventListener("click",() => {
      img.click();
    // console.log(img.files);
    });
});


function eliminarReg(ID){
    var urlElimReg = "Productos/elimReg.php";
    let confirmado = confirm("Confirmar para elimiar definitivamente éste producto");

    if(confirmado){

        fetch(urlElimReg,{
            method: "POST",
            body: ID
        })
        .then(res => res.json())
        .then(data => {
            if(data == "true"){
                location.reload();                           
                
            }
        }); 
    };
}



function editarReg(ID){
    var urlEditarReg = "Productos/editarReg.php";
    document.getElementById("area_detalle_producto").style.display = "none";
    document.getElementById("area_formulario").style.display = "flex";

    fetch(urlEditarReg,{
        method: "POST",
        body: ID
    })
    .then(res => res.json())
    .then(data => {

        categoria.value = data.categoria;
        subcategoria.value = data.subcategoria;
        idmy.value = data.id_producto;
        Prod.value = data.nombre_prod;
        Marca.value = data.marca;
        Modelo.value = data.modelo;
        Capacidad.value = data.capacidad;
        Resolucion.value = data.resolucion;
        descr.value = data.descripcion;
        // imagen.value = data.imagen;
        proveedor.value = data.proveedor;
        precioDist.value = data.precio_distribuidor;
        actual_precio.value = data.fecha_actualizacion;
        factor.value = data.factor;
        precioPublico.value = data.precio_publico;
        botonEnviar.innerHTML = "Actualizar";
        console.log(data);
       
    });

};



function addProductoToCotizar(ID){ 
   
    // console.log(ID);
    
    var url_req_id_producto = "Productos/req_id_producto.php";

    fetch(url_req_id_producto,{
        method: "POST",
        body: ID
    })
    .then(res => res.json())
    .then(data => {

        let str = "";

        data.map(item =>{
            str =`
            
            <tr>
                <td><img src="img/${item.imagen}" width="50" height="50" ></td>

                <td>${item.nombre_prod}, marca: ${item.marca}, modelo ${item.modelo}, capacidad: ${item.capacidad}, resolucion: ${item.resolucion}, ${item.descripcion}</td>

                <td>1</td>

                <td>$ ${item.precio_publico}</td>

            </tr>
            `
        });    

        
       
        let obj = data[0];
    
        producto = obj;
        
        
        tbody.innerHTML += str;
        
        addProductos();
        contadorProductos();
        totalCotizacion()
    });
      

};





var nuevacotizacion= [];
function addProductos(){
    nuevacotizacion.push(producto);
    console.log(nuevacotizacion);
}
 





function contadorProductos(){
    let contador=nuevacotizacion.length;
    span_contador.innerHTML = contador;
    // console.log(contador);
}






function totalCotizacion(){
    let Total = 0;
    const itemCotyTotal = document.getElementById("Total");

    nuevacotizacion.forEach(item => {
        const precio = Number(item.precio_publico.replace("$", ""))
        
        Total = Total + precio
        // console.log(Total);
    })
    itemCotyTotal.innerHTML = `$ ${Total}`
}




btn_cotizacion.addEventListener("click", function(){
    
    document.getElementById("area_cotizacion").style.display = "flex";
    document.getElementById("area_tarjetas_productos").style.display = "none";
    document.getElementById("area_detalle_producto").style.display = "none";
    document.getElementById("area_formulario").style.display = "none";


    
});

btn_ico_regresar.addEventListener("click", function(e){
    e.preventDefault();
    // crearTarjetas();
    
    document.getElementById("area_cotizacion").style.display = "none";
    document.getElementById("area_detalle_producto").style.display = "none";
    document.getElementById("area_formulario").style.display = "none";
    document.getElementById("area_tarjetas_productos").style.display = "flex";

});


btn_ico_menu.addEventListener("click", function(){

    document.getElementById("enlaces-menu").style.display = "flex"
        
});