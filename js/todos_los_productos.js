var aRelojes = [
    {
        imagen: './img/buzo-adidas.jpg',
        nombre: 'Rolex',
        categoria:'Hombre',
        precio: 4999,
        descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
    },
    {
        imagen: './img/buzo-adidas.jpg',
        nombre: 'Rolex',
        categoria:'Mujer',
        precio: 4999,
        descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
    },
    {
        imagen: './img/buzo-adidas.jpg',
        nombre: 'Rolex',
        categoria:'Hombre',
        precio: 4999,
        descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
    },
    {
        imagen: './img/buzo-adidas.jpg',
        nombre: 'Rolex',
        categoria:'Mujer',
        precio: 4999,
        descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
    },
    {
        imagen: './img/buzo-adidas.jpg',
        nombre: 'Rolex',
        categoria:'Hombre',
        precio: 4999,
        descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
    },
    {
        imagen: './img/buzo-adidas.jpg',
        nombre: 'Rolex',
        categoria:'Mujer',
        precio: 4999,
        descripcion:'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum deserunt.',
    },
];

let tarjetas = document.getElementById("area_tarjetas_productos");

aRelojes.map(item =>{

    tarjetas.innerHTML +=`<div class="cards">
    <p>${item.nombre}</p>
    <p>${item.categoria}</p>
    <p>${item.descripcion}</p>
    <p>${item.precio}</p>
    </div>`;
});