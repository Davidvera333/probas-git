<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual de Usuario - Web Estáticos</title>
    <!-- Bootstrap para mejor estética -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }

        h1,
        h2,
        h3 {
            margin-top: 1.5rem;
        }

        .Indice,
        .Introduccion,
        .Descripcion,
        .login,
        .controlpanel,
        .desplegable {
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
        <div class="Indice">
            <h2>Índice</h2>
            <ul>
                <li>Introducción</li>
                <li>Páginas Web y usos</li>
                <li>Manejo interno</li>
            </ul>
        </div>

        <!-- Introducción -->
        <div class="Introduccion">
            <h2>Introducción</h2>
            <p>El objetivo de esta documentación es que el administrador a cargo de esta web adquiera los conocimientos necesarios para lograr un uso correcto de la misma.</p>
            <p>Los conocimientos básicos para un manejo óptimo de esta web son: <b>Manejo en BD, PHP, HTML</b>.</p>
        </div>

        <!-- Descripción general de la web -->
        <div class="Descripcion">
            <h3><i><b>Pantalla de Inicio</b></i></h3>
            <p>La primera página que se mostrará será Inicio. En la esquina superior derecha se muestra un botón de inicio de sesión llamado <i><b>Iniciar Sesión</b></i>.</p>
            <img src="assets/pantallainicio.JPG" alt="pantallainicio">
        </div>

        <!-- Pantalla de Login -->
        <div class="login">
            <h3><i><b>Pantalla de Login</b></i></h3>
            <p>Al pulsar el botón, serás redireccionado a una pantalla nueva llamada <i><b>Login</b></i> donde ingresarás las credenciales de administrador.</p>
            <img src="assets/login.JPG" alt="login">
        </div>

        <!-- Panel de administración -->
        <div class="controlpanel">
            <h3><i><b>Panel de Control</b></i></h3>
            <p>La manera de ver a los usuarios registrados, productos almacenados y comentarios de los usuarios acerca de los productos es mediante la base de datos almacenada en <i>PhpMyAdmin</i>.</p>
            <p><i>Árbol de tablas de la BD</i></p>
            <img src="assets/arbolBD.JPG" alt="arbolBD">
            <p><i>En clientes verá a los usuarios registrados, y en Mensajes los comentarios enviados desde la web.</i></p>
            <img src="assets/mensajes.JPG" alt="mensajes">
        </div>

        <h1 class="text-center">Páginas de la web</h1>
        <div class="desplegable">
            <h3><i><b>Páginas de la Web</b></i></h3>
            <p>A la izquierda del botón <i>Iniciar Sesión</i>, verá el botón de menú desplegable NAV. Si pulsa en él, se desplegarán los enlaces a las diferentes páginas de la web.</p>
            <img src="assets/botonesnav.JPG" alt="Botones del Nav">

            <h3>Inicio</h3>
            <p><i>Una pantalla anteriormente mostrada</i>. Será la primera página que vea el usuario.</p>
            <img src="assets/pantallainicio.JPG" alt="Inicio">

            <h3>Quiénes Somos</h3>
            <p>En esta pantalla el usuario sabrá acerca de la empresa.</p>
            <img src="assets/who.JPG" alt="quienes-somos">

            <h3>Contacto</h3>
            <p>Donde el usuario puede enviar comentarios o solicitar ciertos servicios. Además, incluye en el pie de página la API de Google Maps, localizando así la empresa.</p>
            <img src="assets/mapsform.JPG" alt="formulario y mapa">

            <h3>Catálogo</h3>
            <p>En esta página el usuario podrá ver los diferentes productos que ofrece tu empresa. Están todas las categorías separadas en desplegables. Pulsando en <i>Ver más - ver productos</i>, ingresará a la categoría deseada.</p>
            <img src="assets/catalogo.JPG" alt="catalogo">

            <h3>Dentro de Catálogo</h3>
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
        <h1 class="text-center">Manejo interno</h1>
        <h3>Árbol de carpetas y el porqué de cada una</h3>
        <i>Al menos las más destacables</i>
        <p><i>Árbol de Directorios</i></p>
        <img src="assets/treeDIR.JPG" alt="arbol de carpetas">
        <ul>
            <li><b>Assets</b>
                <p>- Dentro de esta carpeta estarán alojadas las imágenes, las cuales serán vistas por la base de datos.</p>
            </li>
            <li><b>Config</b>
                <p>- Dentro de esta carpeta estará el archivo Config, que sirve para cambiar el entorno del proyecto ("Development, staging, production"), enlazar a su base de datos y definir la URL que usará la página.</p>
                <pre><code>
// Detectar si estás en un entorno de desarrollo (localhost) o producción
//if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '127.0.0.1') {
// Estás en el entorno local
//   define('BASE_URL', 'http://localhost/estaticos/');
// define('ENV', 'development'); // Entorno de desarrollo
//} else {
// Estás en el entorno de producción
//  define('BASE_URL', 'https://www.curso-web.com/');
//   define('ENV', 'production'); // Entorno de producción
//}

//lo que esta comentado arriba es lo anterior, lo no comentado abajo es lo nuevo

// Definir el entorno actual: 'development', 'staging' o 'production'
define('APP_ENV', 'development'); // Cambiar según el entorno
// Configuración según el entorno
switch (APP_ENV) {
    case 'development':
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        define('DB_NAME', 'curso_web_david');
        define('BASE_URL', 'http://cursoweb.local/');
        break;
    case 'staging':
        error_reporting(E_ALL & ~E_NOTICE);
        ini_set('display_errors', 0);
        define('DB_HOST', 'localhost:3306');
        define('DB_USER', 'david_DB');
        define('DB_PASS', '4w2?h61lC');
        define('DB_NAME', 'curso_web_david');
        define('BASE_URL', 'https://magical-burnell.87-106-228-101.plesk.page/estaticos/');
        break;
    case 'production':
        error_reporting(0);
        ini_set('display_errors', 0);
        define('DB_HOST', 'localhost:3306');
        define('DB_USER', 'david_DB');
        define('DB_PASS', '4w2?h61lC');
        define('DB_NAME', 'curso_web_david');
        define('BASE_URL', 'https://magical-burnell.87-106-228-101.plesk.page/');
        break;
    default:
        die('Entorno no configurado correctamente.');
}
//crear conexion global a al base de datos
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//comprobar la conexion
if ($conexion->connect_error) {
    die("La conexión ha fallado: " . $conexion->connect_error);
}
</code></pre>
            </li>
            <li><b>Core</b>
                <p>- Dentro de Core, tenemos varios archivos. El que usaremos será Router, este archivo nos ayuda a configurar las URLs simples:</p>
                <pre><code>
class Router
{
    private $routes = [
        'home' => [
            'view' => 'home.php',
            'title' => 'Inicio',
        ],
        'quienes-somos' => [
            'view' => 'quienessomos.php',
            'title' => 'Quienes somos?¿',
        ],
        'contacto' => [
            'view' => 'contacto.php',
            'title' => 'Contacto',
        ],
        'catalogo' => [
            'view' => 'Catalogo.php',
            'title' => 'Catalogo',
        ],
        'login' => [
            'view' => '/login.php',
            'title' => 'login',
        ],
        'dashboard' => [
            'view' => '/dashboard.php',
            'title' => 'dashboard',
        ],
    ];

    public function getRoute()
    {
        $url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
        $segments = explode('/', $url);
        $page = $segments[0];

        if (array_key_exists($url, $this->routes)) {
            return [
                'pagina' => $url,
                'view' => 'views/' . $this->routes[$url]['view'],
                'titulo_pagina' => $this->routes[$url]['title'],
                'parametro' => null
            ];
        }

        if ($page === 'catalogo' && isset($segments[1]) && $segments[1] === 'categoria' && isset($segments[2])) {
            return [
                'pagina' => 'categoria',
                'view' => 'views/categoria.php',
                'titulo_pagina' => 'Categoria: ' . ucfirst($segments[2]),
                'parametro' => $segments[2]
            ];
        }
        if ($page === 'catalogo' && isset($segments[1]) && $segments[1] === 'producto' && isset($segments[2])) {
            return [
                'pagina' => 'producto',
                'view' => 'views/producto.php',
                'titulo_pagina' => 'Producto ID: ' . $segments[2],
                'parametro' => $segments[2]
            ];
        }
        return [
            'pagina' => '404',
            'titulo_pagina' => 'Página no encontrada',
            'view' => 'views/404.php',
            'parametro' => null
        ];
    }
}
                </code></pre>
            </li>
            <li><b>Views</b>
                <p>- Dentro de <i>admin</i> solo usaremos login y logout.</p>
                <p>- Dentro de layouts: <i>footer y header</i>.</p>
                <p>- Los demás archivos que están dentro de <i>views</i> son para las diferentes páginas de la web.</p>
                <img src="assets/views.JPG" alt="contenido de la carpeta views">
            </li>
        </ul>
    </div>
</body>

</html>