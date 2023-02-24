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

        
        

            <section class="formulario" id="section_form_clientes">

               
                    
                <form class="form" id="form_datosClientes" method="POST" enctype="multipart/form-data" >

                    

                    <h2 class="form_contenido" id="tit_dat_contacto">DATOS DEL CONTACTO</h2>
                    
                    <input class="form_contenido" type="text" id="nomb_contacto" name="nombre" placeholder="Nombre">

                    <input class="form_contenido" type="text" id="departamento_contacto" name="departamento_contacto" placeholder="Departamento">

                    <input class="form_contenido" type="text" id="tel1_contacto" name="tel1_contacto" placeholder="Teléfono 1">

                    <input class="form_contenido" type="text" id="tel2_ccontacto" name="tel2_contacto" placeholder="Telefono 2">

                    <input class="form_contenido" type="email" id="email_contacto" name="email_contacto" placeholder="Correo @">

                    <select class="form_contenido" name="empresa_contacto" id="empresa_contacto" >

                        <option value="0">Empresa</option>
                        <option value="1">Dicoisa</option>
                        <option value="2">Metelix</option>
                        <option value="3">PROALFA</option>
                        
                    </select>

                    <button class="form_contenido" type="submit">GUARDAR</button>
                    
                    
                </form>
                                                    
            </section>






            <section class="formulario" id="section_form_empresa">

                <form  class="form" id="form_datosEmpresa" method="POST" enctype="multipart/form-data">

                    <div class="div_datos_empresa">

                        <h2 class="form_contenido" id="tit_dat_empresa">DATOS DE EMPRESA</h2>

                        <input class="form_contenido" type="text" id="nomb_empresa" name="nomb_empresa" placeholder="Nombre">

                        <input class="form_contenido" type="text" id="email" name="email" placeholder="Correo @">

                        <input class="form_contenido" type="text" id="telefono" name="telefono" placeholder="Telefono">

                        <input class="form_contenido" type="text" id="razon_social" name="razon_social" placeholder="Razón Social">

                        <input class="form_contenido" type="text" id="rfc" name="rfc" placeholder="RFC">  

                        
                        <textarea class="form_contenido" name="descripEmpresa" id="descripEmpresa" placeholder="Descripción" cols="25" rows="6"></textarea>

                    </div>

                    <div class="div_datos_empresa">

                        <br>
                        <h4 class="form_contenido" id="tit_dat_empresa">Dirección</h4>

                        <input class="form_contenido" type="text" id="calle" name="calle" placeholder="Calle">

                        <input class="form_contenido" type="text" id="numero" name="numero" placeholder="Numero">

                        <input class="form_contenido" type="text" id="colonia" name="colonia" placeholder="Colonia">

                        <input class="form_contenido" type="text" id="cp" name="cp" placeholder="C.P.">

                        <input class="form_contenido" type="text" id="ciudad" name="ciudad" placeholder="Ciudad">

                        <input class="form_contenido" type="text" id="estado" name="estado" placeholder="Estado">                          
                        <button class="form_contenido" type="submit">GUARDAR</button>

                    </div>

                </form>

            </section>



            <section class="tarjetas_productos"id="area_tarjetas_productos">
                <div class="cards" id="nuevo" onclick=ir_formulario()>
                    
                    <div class="datos">
                    <h2><i class="fa-solid fa-circle-plus"></i> NUEVO</h2>
                    </div>
                </div>
            </section>





                
            

            
        
        </main>





        <script src="js/clientes.js" ></script>
        
        
    </body>

    <?php include_once("1.Plantillas/footer.php");?>

   
</html>