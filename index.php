<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual de Usuario - Web Estáticos</title>
    <!-- Bootstrap para mejor estética -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/img/pepook.jpg" sizes="32x32" />
    <style>
        body {
            background: #f8f9fa;
        }

        h1,
        h2,
        h3 {
            margin-top: 1.5rem;
        }


        #Introduccion,
        #Descripcion,
        #login,
        #controlpanel,
        #desplegable {
            background: #fff;
            border-radius: 8px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        ul {
            margin-bottom: 0;
        }

        img {
            max-width: 100%;
            border-radius: 6px;
            margin: 1rem 0;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.07);
        }

        pre {
            background: #222;
            color: #eee;
            padding: 1rem;
            border-radius: 6px;
            overflow-x: auto;
        }

        code {
            color: #ffd700;
        }
    </style>
</head>

<body>
    <div class="container my-4">
        <h1 class="text-center mb-4">Manual para el Usuario de Administración de la Web Estáticos</h1>

        <!-- Indice -->
        <div class="Indice" style="position: relative;">

            <!-- Botón fijo en el lateral izquierdo -->
            <button id="abrirIndiceBtn" class="btn btn-outline-primary"
                style="position: fixed; top: 120px; left: 0; z-index: 2000; border-radius: 0 30px 30px 0; padding-left: 12px; padding-right: 18px;">
                ☰
            </button>
            <!-- Menú lateral oculto -->
            <div id="indiceLateral" style="
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 260px;
        background: #fff;
        box-shadow: 2px 0 8px rgba(0,0,0,0.1);
        padding: 2rem 1rem 1rem 1.5rem;
        z-index: 2050;
        transform: translateX(-100%);
        transition: transform 0.3s;
    ">
                <button type="button" class="btn-close mb-3" aria-label="Cerrar" id="cerrarIndiceBtn"></button>
                <h5>Índice</h5>
                <ul>
                    <li><a href="#introduccion" onclick="cerrarIndice()"><b>Introducción</b></a></li>
                    <ol><!--primeraseccion-->
                        <li><a href="#Descripcion" onclick="cerrarIndice()">Pantalla de Inicio</a></li>
                        <li><a href="#login" onclick="cerrarIndice()">Pantalla de Login</a></li>
                        <li><a href="#controlpanel" onclick="cerrarIndice()">Panel de Control</a></li>
                    </ol>
                    <!--segundaseccion-->
                    <li><a href="#paginas-web-y-usos" onclick="cerrarIndice()"><b>Páginas Web y usos</b></a></li>
                    <ol>
                        <li><a href="#paginadelaweb" onclick="cerrarIndice()">Paginas de la web</a></li>
                        <li><a href="#inicio" onclick="cerrarIndice()">Inicio</a></li>
                        <li><a href="#quienes-somos" onclick="cerrarIndice()">Quiénes somos</a></li>
                        <li><a href="#contacto" onclick="cerrarIndice()">Contacto</a></li>
                        <li><a href="#catalogo" onclick="cerrarIndice()">Catálogo</a></li>
                        <li><a href="#dentro-de-catalogo" onclick="cerrarIndice()">Dentro de Catálogo</a></li>
                    </ol>
                    <li><a href="#manejo-interno" onclick="cerrarIndice()"><b>Manejo interno</b></a></li>
                    <ol><!--terceraseccion-->
                        <li><a href="#arbolcarpetas" onclick="cerrarIndice()">Árbol de carpetas</a></li>

                        <li><a href="#creacion-de-paginas" onclick="cerrarIndice()">Creación de páginas</a></li>
                        <li><a href="#mod-paginas" onclick="cerrarIndice()">Modificación de páginas</a></li>
                    </ol>
                </ul>
            </div>
            <script>
                const abrirBtn = document.getElementById('abrirIndiceBtn');
                const cerrarBtn = document.getElementById('cerrarIndiceBtn');
                const indiceLateral = document.getElementById('indiceLateral');
                abrirBtn.onclick = () => indiceLateral.style.transform = 'translateX(0)';
                cerrarBtn.onclick = () => indiceLateral.style.transform = 'translateX(-100%)';

                function cerrarIndice() {
                    indiceLateral.style.transform = 'translateX(-100%)';
                }
            </script>
        </div>
        <!-- Introducción -->
        <div id="introduccion">
            <h2>Introducción</h2>
            <p>El objetivo de esta documentación es que el administrador a cargo de esta web adquiera los conocimientos necesarios para lograr un uso correcto de la misma.</p>
            <p>Los conocimientos básicos para un manejo óptimo de esta web son: <b>Manejo en BD, PHP, HTML</b>.</p>
        </div>

        <!-- Descripción general de la web -->
        <div id="Descripcion">
            <h3><i><b>Pantalla de Inicio</b></i></h3>
            <p>La primera página que se mostrará será Inicio. En la esquina superior derecha se muestra un botón de inicio de sesión llamado <i><b>Iniciar Sesión</b></i>.</p>
            <img src="assets/pantallainicio.JPG" alt="pantallainicio">
        </div>

        <!-- Pantalla de Login -->
        <div id="login">
            <h3><i><b>Pantalla de Login</b></i></h3>
            <p>Al pulsar el botón, serás redireccionado a una pantalla nueva llamada <i><b>Login</b></i> donde ingresarás las credenciales de administrador.</p>
            <img src="assets/login.JPG" alt="login">
        </div>

        <!-- Panel de administración -->
        <div id="controlpanel">
            <h3><i><b>Panel de Control</b></i></h3>
            <p>La manera de ver a los usuarios registrados, productos almacenados y comentarios de los usuarios acerca de los productos es mediante la base de datos almacenada en <i>PhpMyAdmin</i>.</p>
            <p><i>Árbol de tablas de la BD</i></p>
            <img src="assets/arbolBD.JPG" alt="arbolBD">
            <p><i>En clientes verá a los usuarios registrados, y en Mensajes los comentarios enviados desde la web.</i></p>
            <img src="assets/mensajes.JPG" alt="mensajes">
        </div>

        <h1 id="paginas-web-y-usos" class="text-center">Páginas web y usos</h1>
        <div id="paginadelaweb" class="desplegable">
            <h3><i><b>Páginas de la Web</b></i></h3>
            <p>A la izquierda del botón <i>Iniciar Sesión</i>, verá el botón de menú desplegable NAV. Si pulsa en él, se desplegarán los enlaces a las diferentes páginas de la web.</p>
            <img src="assets/botonesnav.JPG" alt="Botones del Nav">

            <h3 id="inicio">Inicio</h3>
            <p><i>Una pantalla anteriormente mostrada</i>. Será la primera página que vea el usuario.</p>
            <img src="assets/pantallainicio.JPG" alt="Inicio">

            <h3 id="quienes-somos">Quiénes Somos</h3>
            <p>En esta pantalla el usuario sabrá acerca de la empresa.</p>
            <img src="assets/who.JPG" alt="quienes-somos">

            <h3 id="contacto">Contacto</h3>
            <p>Donde el usuario puede enviar comentarios o solicitar ciertos servicios. Además, incluye en el pie de página la API de Google Maps, localizando así la empresa.</p>
            <img src="assets/mapsform.JPG" alt="formulario y mapa">

            <h3 id="catalogo">Catálogo</h3>
            <p>En esta página el usuario podrá ver los diferentes productos que ofrece tu empresa. Están todas las categorías separadas en desplegables. Pulsando en <i>Ver más - ver productos</i>, ingresará a la categoría deseada.</p>
            <img src="assets/catalogo.JPG" alt="catalogo">

            <h3 id="dentro-de-catalogo">Dentro de Catálogo</h3>
            <p><i>Se mostrarán los pasos a seguir para consultar información acerca de un producto.</i></p>
            <ol>
                <li>Pulsa el botón del producto del cual quiera saber más información <i>Ver Producto</i></li>
                <img src="assets/catalogo1.JPG" alt="catalogo1">
                <li>Una vez dentro del producto deseado, pulsa <i>Solicitar Información</i></li>
                <img src="assets/catalogo2.JPG" alt="catalogo 2">
                <li>Serás redireccionado a Contacto, ingresa tus datos y demás información, y pulsa <i>Enviar</i></li>
                <img src="assets/catalogo3.JPG" alt="catalogo 3">
            </ol>
            <p>Sus datos serán enviados y almacenados en la base de datos mencionada anteriormente.</p>
        </div>

        <!-- Manejo interno -->
        <h1 id="manejo-interno" class="text-center">Manejo interno</h1>
        <h3 id="arbolcarpetas">Árbol de carpetas y el porqué de cada una</h3>
        <i>Al menos las más destacables</i>
        <p><i>Árbol de Directorios</i></p>
        <img src="assets/treeDIR.JPG" alt="arbol de carpetas">

        <h3 id="creacion-de-paginas">Creacion de paginas</h3>
        <p>En esta parte explicaremos la manera de crear una pagina, añadirla a la web, y hacer que tenga una <i>url</i> amigable.</p>
        <ul>
            <li><b>Views</b> </li>
            <p>Esta carpeta sera la que almacenara los archivos que construiran la web, dentro de este arbol de carpetas tenemos <i>Views</i> como directorio principal, el mismo Directorio almacenara Los archivos internos que seran el cuerpo de a web, Dentro , tambien tenemos dos carpetas, <i>Admin</i> y <i>Layouts</i>, <i>Admin</i> almacena los archivos de Inicio de sesion y cierre de sesion de los usuarios,y <i>Layout el header y footer</i>.</p>

            <img src="assets/views.JPG" alt="contenido de la carpeta views">
            <p>Comencemos con añadir el nombre de esa nueva pagina al menu desplegable de la web, <i>Menu.php</i> es un archivo que nos ayuda a crear ese menu, mediante html y bucles .</p>
            <pre><code>
                
require_once __DIR__ . '/../../models/Menu.php';
$menu = new menu(); //creamos  instancia del menu 
//agregar los elementos del menu
//invocamos la instancia del menu, 
//explicacion de que es cada seccion
$menu->agregarItem("Nombre-en-el-menu", "la-url-que-usara", "Nombre-del-archivo-al-que-ira");
//codigo de ejemplo 
$menu->agregarItem("Catalogo", "catalogo", "catalogo");
                  

</code></pre>

        </ul>
        <p>Ahora toca hacer las URL amigables, con esto la url de esa pagina no sera por ejemplo <b>Miweb.local/archivo.php</b>, si no que pasara a <b>Miweb.local/archivo</b>, ademas de poder añadir un titulo dentro de la pagina . </p>
        <p><i>IMG archivo rutas</i></p>
        <img src="assets/core.JPG" alt="URL-amigables">
        <p><i>Dentro del mismo archivo tambien se pone lo que va delante, osea el miweb.local/ </i>,El resultado final seria, miweb.local/paginacreada .</p>
        <pre><code>
  'lo-que-veremos-en-la-url' => [
            'view' => 'archivo-que-tendra-la-modificacion',
            'title' => 'el-titulo-que-aparecera-dentro-del-archivo',
        ],             

</code></pre>
        <!--en esta parte diremos com modificar la spaginas , osea com hacer que tengan elheader el  footer y todo eso -->
        <h3 id="mod-paginas">Modificacion de paginas</h3>
        <p>En este apartado se mostrara como se incluye una cabecera y un pie de pagina de forma global, tienes que usar los dos archivos dentro de <i>Views/Layouts/</i></p>
        <img src="assets/HF.JPG" alt="imagen de la carpetas layout y demas">
        <p>El archivo footer.php incluye un cuerpo html basico sin mas <i>
                <pre><code>footer piepagina footer</code></pre>
            </i></p>
        <p>El header incluye ya mas codigo , ya que es un menu desplegable</p>
        <img src="assets/header.JPG" alt="imagen de la cabecera">
        <p>La manera de <i>Invocarlos</i> , osea que aparezcan en los demas archivos seria asi.</p>
        <pre><code>  
  include_once 'views/layouts/header1.php';
  ?php include $view; ?>
  ?php
  include_once 'views/layouts/footer.php';
  ?>
</code></pre>
        <p><b>Pagina de error</b></p>
        <p>Si algun dia una de estas paginas fallara, dentro de routes, esto redirecciona a un archivo 404, <i>el propio codigo esta dentro de routes</i> .
        <pre><code>
          return [
            'pagina' => '404',
            'titulo_pagina' => 'Página no encontrada',
            'view' => 'views/404.php',
            'parametro' => null
    </code></pre>
        </p>
    </div>
</body>

</html>