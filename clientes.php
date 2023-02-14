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
                        
                    </select>

                    <button class="form_contenido" type="submit">GUARDAR</button>
                    
                    
                </form>
                  
                        
                
            </section>

                
            

            
        
        </main>





        <script src="js/clientes.js" ></script>
        
        
    </body>

    <?php include_once("1.Plantillas/footer.php");?>

   
</html>