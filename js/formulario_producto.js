var formulario = document.getElementById("datosProductos");


formulario.addEventListener("submit", function(e){ 
    e.preventDefault();

    // console.log("tengo click")

    var url_insert = "Productos/insert_update.php";  
    const datos = new FormData(formulario);
    
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
            console.log(data);
            alert("Producto Agregado correctamente ¡¡");
            // crearTabla();
            // formulario.reset();
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