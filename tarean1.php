<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo No. 7</title>

    <link rel="stylesheet" href="assets/style/sytle.css">
    <script type="text/javascript" src="assets/js/tarean1.js"></script>

</head>

<body>

    <!--Inicio del Header-->
    <header class="header">
        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tarean1.php">Tarea No. 1</a></li>
                <li><a href="tarean2.php">Tarea No. 2</a></li>
                <li><a href="tarean3.php">Tarea No. 3</a></li>
            </ul>
        </nav>
    </header>
    <!--Fin del Header-->

    <!--Inicio Contenido-->
    <main class="main-container">

        <section class="container-form">
            <h2>Rellene todos los campos por favor. </h2>
            <form action="# " method="POST " id="formulario" onsubmit="return false;">
                <form action="# " method="POST " id="formulario" onsubmit="return false;">
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="nombre" id="nombre"><br>
                    <span id="error_nombre"></span><br>

                    <label for="apellido">Apellido</label><br>
                    <input type="text" name="apellido" id="apellido"><br>
                    <span id="error_apellido"></span><br>


                    <label for="edad">Edad</label><br>
                    <input type="text" name="edad" id="edad"><br>
                    <span id="error_edad"></span><br>

                    <label for="edad">Email</label><br>
                    <input type="email" name="email" id="email"><br>
                    <span id="error_email"></span><br>

                    <label for="edad">Sexo</label><br>
                    <input type="text" name="sexo" id="sexo"><br>
                    <span id="error_sexo"></span><br>

                    <input type="submit" name="enviar" id="enviar">
                   
                </form>

        </section>

        <!--Inicio sección Tabla de datos-->
        <section class="container-table">

            <!--
            <div class="box dashed ">
                <h3><strong> Información del usuario</h3></strong>
                <hr>
                <p id="p_nombre">
                    Nombre: <span></span>
                </p>
                <p id="p_apellido">
                    Apellido: <span></span>
                </p>
                <p id="p_edad">
                    Edad: <span></span>
                </p>

                <p id="p_email">
                    Email: <span></span>
                </p>

                <p id="p_sexo">
                    Sexo: <span></span>
                </p>
            </div>

            <div class="">

            </div>
            -->


            <div class="box dashed">
                <h3><strong>Información Ingresada</strong></h3>
                
                <table>
                    <tr>
                        <td><strong>Nombre </strong></td>
                        <td><strong>Apellido</strong></td>
                        <td><strong>Edad</strong></td>
                        <td><strong>Email</strong></td>
                        <td><strong>Sexo</strong></td>
                    </tr>
                    
                    <tr>
                        <td>
                            <p id="p_nombre">
                             <span></span>
                            </p>
                        </td>
                        <td>
                            <p id="p_apellido">
                                <span></span>
                            </p>
                        </td>
                        <td>
                            <p id="p_edad">
                                <span></span>
                            </p>
                        </td>
                        <td>
                            <p id="p_email">
                                <span></span>
                            </p>
                        </td>
                        <td>
                            <p id="p_sexo">
                                <span></span>
                            </p>
                        </td>
                        
                    </tr>
                </table>
            </div>
        </section>
        <!--Fin sección Tabla de datos-->

    </main>
    <!--Fin Contenido-->

</body>

</html>