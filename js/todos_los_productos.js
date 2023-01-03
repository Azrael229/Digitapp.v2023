// var aRelojes = [
//     {
//         imagen: './img/buzo-adidas.jpg',
//         nombre: 'Rolex',
//         categoria:'Hombre',
//         precio: 4999,
//         descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
//     },
//     {
//         imagen: './img/buzo-adidas.jpg',
//         nombre: 'Rolex',
//         categoria:'Mujer',
//         precio: 4999,
//         descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
//     },
//     {
//         imagen: './img/buzo-adidas.jpg',
//         nombre: 'Rolex',
//         categoria:'Hombre',
//         precio: 4999,
//         descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
//     },
//     {
//         imagen: './img/buzo-adidas.jpg',
//         nombre: 'Rolex',
//         categoria:'Mujer',
//         precio: 4999,
//         descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
//     },
//     {
//         imagen: './img/buzo-adidas.jpg',
//         nombre: 'Rolex',
//         categoria:'Hombre',
//         precio: 4999,
//         descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
//     },
//     {
//         imagen: './img/buzo-adidas.jpg',
//         nombre: 'Rolex',
//         categoria:'Mujer',
//         precio: 4999,
//         descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
//     },
// ];

var tarjetas = document.getElementById("area_tarjetas_productos");

// aRelojes.map(item =>{

//     tarjetas.innerHTML +=`<div class="cards">
//     <p>${item.nombre}</p>
//     <p>${item.categoria}</p>
//     <p>${item.descripcion}</p>
//     <p>${item.precio}</p>
//     </div>`
// });

function crearTarjetas(){
    var urlReqProd = "Productos/require_productos.php"

    fetch(urlReqProd)
    .then(res => res.json())
    .then(data => { 
        data.map(item =>{
            tarjetas.innerHTML +=`<div class="cards">
            <img src="img/${item.imagen}" width="200" height="200">
            <p>${item.subcategoria}</p>
            <p>Marca: ${item.marca}</p>
            <p>Modelo:${item.modelo}</p>
            <p>Capacidad: ${item.capacidad}</p>
            <p>Resolución: ${item.resolucion}</p>
            <p>$ ${item.precio_publico}</p>
            </div>`
         });
    });
}
crearTarjetas();