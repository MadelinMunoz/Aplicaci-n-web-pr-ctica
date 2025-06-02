<!-- Declaración del Documento y Metadatos  -->
 <!DOCTYPE <!DOCTYPE html>
 <html lang="es">
    <head>
        <!-- Configuración de caracteres y responsividad -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Título de la Página -->
        <title>Gestión Universidad de Nariño</title>   

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

         <!-- Encabezado -->
         <header>
            <div class="navbar">
                <!-- Logo a la izquierda -->
                <img src="imagenes/Logo.png" alt="Logo Universidad de Nariño" class="logo">
                
                <!-- Menú de navegación -->
                <nav>
                    <ul>
                        <li><a href="productos.php">Productos</a></li>
                        <li><a href="#Clientes">Clientes</a></li>
                        <li><a href="pedidos.html">Pedidos</a></li>
                        <li><a href="#Informacion">Información</a></li>
                        <li><a href="#Login">Iniciar sesion o Registrarse</a></li>
                    </ul>
                </nav>
            </div>
            
        </header> 
    <main>
        <section id="inicio">
            <h2>Bienvenido</h2>
            <p>Plataforma para la gestión del mercado La Tulpa y otros aliados/patrocinadores. <br> Seccion Inicial </p>
            <!-- Contenedor para imágenes con estilo Flexbox -->
             <div style="display: flex; justify-content: center; align-items: center;">
                <img src="imagenes/portada.jpeg" alt="Logo PastoEats" style ="max-width: 90%; max-height: 60vh; height: auto;">
            </div>
            <p>Impulsamos la produccion y el consumo de alimentos saludables, sin quimicos, completamente orgánicos </p>
        </section>
        <!-- Sección de Información -->
        <section id="Informacion" style="padding: 40px 20px; text-align:center;">
            <h2>
                ¿Quienes somos?
            </h2>
            <p>
                Somos <strong>La Tulpa</strong>, un mercado campesino y orgánico que promueve el consumo de alimentos saludables, sin químicos, completamente naturales. <br>
                Trabajamos desde el año <strong>2015</strong> con productores locales y emprendimientos aliados para apoyar una economía justa y responsable.
            </p>

            <h3>Contáctanos</h3>
                <ul style="list-style: none; padding: 0; font-size: 16px;">
                    <li>📧 Correo: <a href="mailto:latulpanarino@gmail.com">latulpanarino@gmail.com</a></li>
                    <li>📱 WhatsApp: <a href="https://wa.me/573132016463" target="_blank">+57 313 201 6463</a></li>
                </ul>
            <!-- Imágenes información -->
            <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 15px; margin: 20px 0; ">
                <img src="imagenes/v_info1.jpeg" alt="info1" style="width: 250px; border-radius: 10px;">
                <img src="imagenes/productos_info2.jpeg" alt="Imagen 2" style="width: 250px; border-radius: 10px;">
            </div>
            <!-- Redes sociales -->
            <div>
                <p>Síguenos en nuestras redes sociales:</p>
                <a href="https://www.facebook.com/LaTulpaNarino" target="_blank" style="margin: 0 10px;">
                    <img src="imagenes/facebook.png" alt="Facebook" width="40">
                </a>
                <a href="https://www.instagram.com/latulpanarino?igsh=aTFpOHlkZGprM2xu" target="_blank" style="margin: 0 10px;">
                    <img src="imagenes/instagram.jpeg" alt="Instagram" width="40">
                </a>
            </div>
        </section>

        <!-- login -->
        <section class = "Login-section" id="Login">
            <div class = "login-container">
                <div class = "login-image">
                    <img src="imagenes/img_login.png" alt="Imagen de login">
                </div>
                
                <!----formulario de INICIAR SESION-->
                <div class = "login-form form-login">
                    <h2>Bienvenido!</h2>
                    <form action="login.php" method="POST">    
                        <input type="text" placeholder="Usuario" name="usuario" required>
                        <input type="password" placeholder="Contraseña" name="password" required>
                        <button type="submit" class="login-btn">Iniciar Sesión</button>
                        <div class="login-options">
                            <label>
                                <input type="checkbox" name="remember">Recuérdame </label>
                                <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>

                        <div class="login-footer">
                            <p>¿No tienes cuenta? <a href="#" id = "show-register">Regístrate</a></p>
                            <a href="#" class="admin-btn">ADMINISTRADOR</a>
                        </div>

                    </form>
                </div>
                <!-- Registrarse-->
                <div class="login-form form-register hidden">
                    <h2> Crear cuenta</h2>

                    <form action="registrar.php" method="POST">
                    
                     <!-- <form action="/register" method="POST"> -->
                        <input type="text" placeholder="Nombres" name = "nombres" required>
                        <input type="text" placeholder="Apellidos" name = "apellidos" required>
                        <input type="text" placeholder="Usuario" name="usuario" required>
                        <input type="password" placeholder="Contraseña" name="contrasena" required>
                        <input type="text" placeholder="Cedula" name="cedula" required>
                        <input type = "text" placeholder="Correo Electrónico" name="correo" required>
                        <input type="text" placeholder="Telefono" name="telefono" required>
                        <input type="text" placeholder="Direccion" name="direccion" required>
                        <label for="fecha_nacimiento" style="
                            font-size: 12px;
                            color: #777;
                            font-stretch: condensed;
                            display: block;
                            text-align: left;
                            margin-left: 1em;
                        ">
                            Fecha de nacimiento:
                        </label>
                        <input type="date" placeholder="Fecha de Nacimiento" name="fecha_nacimiento" required>

                        <button type="submit" class = "login-btn" style = "background-color: green;">Registrarse</button>

                        <div class="login-footer">
                            <p> ¿Ya tienes cuenta? <a href="#" id="show-login">Iniciar Sesión</a> </p>
                        </div>
                    </form>

                </div>

            </div>

        </section>

        <script src="scripts.js" defer></script>

        <!---Creditos de iconos redes sociales --->
        <footer style="text-align: center; padding: 20px; font-size: 14px;">
            <p>Íconos diseñados por 
                <a href="https://www.flaticon.com/authors/ruslan-babkin" target="_blank" rel="noopener noreferrer">
                    Ruslan Babkin
                </a> – 
                <a href="https://www.flaticon.com/" target="_blank" rel="noopener noreferrer">
                    Flaticon
                </a> – 
                <a href="https://es.vecteezy.com/" target="_blank" rel="noopener noreferrer">
                    vecteezy
                </a>
            </p>
        </footer>

        <?php
        if (isset($_GET['mensaje']) && $_GET['mensaje'] === 'registro_exitoso') {
            echo "<script>alert('✅ Registro exitoso, Por favor inicia sesión');</script>";
        }
        if (isset($_GET['error']) && $_GET['error'] === 'cedula_o_usuario_existente') {
            echo "<script>alert('⚠️ La cédula o el usuario ya están registrados. Inicia sesión con tu usuario y contraseña.');</script>";
        }
        if (isset($_GET['error']) && $_GET['error'] === 'error_al_guardar') {
            echo "<script>alert('❌ Ocurrió un error al guardar los datos');</script>";
        }
        if (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<script>alert('❌ Usuario o contraseña incorrectos.');</script>";
        }
        ?>

        
    </body>
 </html>
