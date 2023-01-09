
var tarjetas = document.getElementById("area_tarjetas_productos");


function crearTarjetas(){
    var urlReqProd = "Productos/require_productos.php"

    fetch(urlReqProd)
    .then(res => res.json())
    .then(data => { 
        data.map(item =>{
            tarjetas.innerHTML +=`
            <div class="cards">
                <img src="img/${item.imagen}" width="200" height="200"><br>
                <div class="datos">
                <p>${item.subcategoria}</p>
                <p>Marca: ${item.marca}</p>
                <p>Modelo:${item.modelo}</p>
                <p>Capacidad: ${item.capacidad}</p>
                <p>Resolución: ${item.resolucion}</p>
                <p>$ ${item.precio_publico}</p>
                </div><br>
                <button id="btnver" class="datos">VER</button>
            </div>
            `
         });
    });
}
crearTarjetas();

