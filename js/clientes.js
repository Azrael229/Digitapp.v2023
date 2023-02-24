var titulo_header = document.getElementById("titulo_header");
var form_datosClientes = document.getElementById("form_datosClientes");  


titulo_header.innerHTML = "Clientes";
document.getElementById("btn_cotizacion").style.display = "none";
document.getElementById("ico_flecha_regresar").style.display = "none";


//-------- AGREGAR CONTACTO-------------------(1)----------------

form_datosClientes.addEventListener("submit", function(e){ 
    e.preventDefault();

    var url_insert = "clientes/insert_update.php";  
    const datos = new FormData(form_datosClientes);

    console.log(datos);
    console.log(datos.get("empresa_contacto"))

    fetch(url_insert,{
        method: "POST",
        body: datos
    })

    .then(res => res.json())
    .then(data => {

        if(data == "true") {
            // location.reload();
            console.log(datos);
            alert("Contacto agregado correctamente");
        }

    });

});
//----------------------------------------------------------




//-------- CREAR TARJETAS --------------------(2)---------------

function crearTarjetasClientes(){
    
    // document.getElementById("area_detalle_producto").style.display = "none";
    // document.getElementById("area_formulario").style.display = "none";
    // document.getElementById("area_cotizacion").style.display = "none";

    var urlReqProd = "Productos/require_clientes.php"

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
crearTarjetasClientes();

//----------------------------------------------------------
