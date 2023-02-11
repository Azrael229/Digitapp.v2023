<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Productos</title>
        <link rel="stylesheet" href="css/tarjetas_productos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        
        <?php include_once("1.Plantillas/barra_navegacion.php");?>

        <?php include_once("1.Plantillas/header.php");?>


        




        <main class="main">



            <section class="tarjetas_productos"id="area_tarjetas_productos">
                <div class="cards" id="nuevo" onclick=ir_formulario()>
                    
                    <div class="datos">
                    <h2><i class="fa-solid fa-circle-plus"></i> NUEVO</h2>
                    </div>
                </div>
            </section>






            <section class="ver_producto" id="area_detalle_producto">
            </section>




            <section class="formulario" id="area_formulario">
                <form class="form" id="datosProductos" method="POST" enctype="multipart/form-data" >
 

                   <div class="div_form">
                        <h2>Categorias</h2><br><br>
                            <select name="categoria" id="categoria">
                                <option value="0">categoria</option>
                                <option value="1">Equipo</option>
                                <option value="2">Refacciones</option>
                                <option value="3">Servicio</option>
                            </select><br>
                            
                            <select name="subcategoria" id="subcategoria">
                                <option value="0">subcategoria</option>
                                <option value="1">Báscula de Plataforma</option>
                                <option value="2">Balanza Analítica</option>
                                <option value="3">Analizador de humedad</option>
                                <option value="4">Balanza</option>
                                <option value="5">Báscula Contadora</option>
                                <option value="6">Báscula de gancho</option>
                                <option value="7">Báscula de mesa</option>
                                <option value="8">Indicador de peso</option>
                                <option value="9">Plataforma</option>
                                <option value="10">Batería</option>
                                <option value="11">Celda de Carga</option>
                                <option value="12">Caja de conexiones</option>
                            </select>
                   </div>
                    
                                  
                    <div class="div_form">
                        <h2>Datos del Producto</h2><br><br>

                            <label for="Producto">Nombre del Producto</label>
                            <input type="hidden" name="id" id="idmy" value="">
                            <input type="text" id="Prod" name="Producto"><br>
                                            
                            <label for="Marca">Marca</label>
                            <input type="text" id="Marca" name="Marca"><br>
                                                
                            <label for="Modelo">Modelo</label>
                            <input type="text" id="Modelo" name="Modelo"><br>
                                            
                            <label for="Capacidad">Capacidad</label>
                            <input  type="text" id="Capacidad" name="Capacidad"><br>
                            
                            <label for="Resolucion">Resolucion</label>
                            <input  type="text" id="Resolucion" name="Resolucion"><br>
                                        
                            <label for="descripProducto">Descripción</label>
                            <textarea name="descripProducto" id="descr" cols="28" rows="4"></textarea><br>

                            <input type="file" name="imagen" id="imagen">
                            <button type="button" id="botimg">Subir Imagen</button>
                    </div>
                    
                 
                    <div class="div_form">
                        <h2>Datos del Proveedor</h2><br><br>

                            <select name="proveedor" id="proveedor">
                                <option value="0">Proveedor</option>
                                <option value="1">Equipos Servin</option>
                                <option value="2">Basculas y Soluciones</option>
                                <option value="3">Multi Servicios Conin</option>
                                <option value="4">Ingeniería en Basculas</option>
                            </select><br>
                                
                            <label for="precioDist">Precio sin IVA distribuidor mxn</label>
                            <input type="number" step="0.01" id="precioDist" name="precioDist"><br>
                                            
                            <label for="actual_precio">Fecha de Actualización</label>
                            <input type="date" name="actual_precio" id="actual_precio"><br>
                                        
                            <select name="factor" id="factor">
                                <option value="0">Factor</option>
                                <option value="1.4">1.4</option>
                                <option value="1.3">1.3</option>
                                <option value="1.25">1.25</option>
                                <option value="1.20">1.20</option>
                                <option value="1.18">1.18</option>
                                <option value="1.15">1.15</option>
                                <option value="1.12">1.12</option>
                                <option value="1.10">1.10</option>
                            </select><br>
                                                
                            <label for="precioPublico">Precio al Publico sin IVA</label>
                            <input  type="number" step="0.01" id="precioPublico" name="precioPublico"><br>

                            <button type="submit" id="botonEnviar">Guardar Producto</button>
                    </div>


                </form>
                
                    
               
            </section>

            <section class="Cotizacion" id="area_cotizacion">

                <div>
                    
                </div>


                <table class="tabla">

                    <thead>
                        <tr>

                            <th width="10%">IMG</th>

                            <th width="75%">Descripción</th>

                            <th width="5%">Cantidad</th>

                            <th width="10%">Precio Unitario</th>

                        </tr>
                    </thead>



                    <tbody id="tbody">

                        
                    </tbody>  



                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>SubTotal</td>
                            <td id="Total"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>IVA</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>ISR</td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td></td>
                        </tr>
                    </tfoot>
                    
                </table>

                
            </section>

        
        
        </main>





        <script src="js/tarjetas_productos.js" ></script>
        

    </body>

    <?php include_once("1.Plantillas/footer.php");?>

   
</html>