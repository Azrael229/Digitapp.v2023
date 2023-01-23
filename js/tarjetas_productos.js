
var tarjetas = document.getElementById("area_tarjetas_productos");
var ver_producto = document.getElementById("area_detalle_producto");


function crearTarjetas(){
    var urlReqProd = "Productos/require_productos.php"

    fetch(urlReqProd)
    .then(res => res.json())
    .then(data => { 
            data.map(item =>{
            tarjetas.innerHTML +=`
            <div class="cards" onclick=pedir_producto("${item.ID}")>
                
                <img src="img/${item.imagen}" width="200" height="200"><br>

                <div class="datos">
                    <p>${item.subcategoria}</p>
                    <p>Marca: ${item.marca}</p>
                    <p>Modelo:${item.modelo}</p>
                    <p>Capacidad: ${item.capacidad}</p>
                    <p>Resolución: ${item.resolucion}</p>
                    <p>$ ${item.precio_publico}</p>
                </div><br>
                <div class="botones">       
                    <button id="btnver" class="datos">Añadir</button>
                </div>
            </div>
            `
         });
    });
};
crearTarjetas();


function pedir_producto(ID){
    
    document.getElementById("area_tarjetas_productos").style.display = "none";
    
    console.log(ID)
    var url_req_id_producto = "Productos/req_id_producto.php";

    fetch(url_req_id_producto,{
        method: "POST",
        body: ID
    })
    .then(res => res.json())
    .then(data => {
        data.map(item =>{
            ver_producto.innerHTML +=`
            
            <div class="tarjeta_producto" id="detalle_producto">

                <img src="img/${item.imagen}" width="500" height="500" >
                
                <div class="datos">
                    <h1>${item.subcategoria}</h1><br><br>
                    <h2>Marca: ${item.marca}</h2><br>
                    <h2>Modelo: ${item.modelo}</h2><br><br>
                    <p>Capacidad: ${item.capacidad}</p><br>
                    <p>Resolución: ${item.resolucion}</p><br><br>
                    <h3>$ ${item.precio_publico}</h3>
                </div>
                    
            </div>
            `
        });              
    });
};
