
<?php
// Mostrar errores para depuración
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'php/conexion.php';
include 'php/getTitulos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Títulos | Books Store</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <!-- Eliminado titulos_moderno.css para evitar conflictos de estilos -->
    <link rel="stylesheet" href="css/styleheader.css">
    <link rel="stylesheet" href="css/stylefooter.css">
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <body>
    <?php include("php/header.php"); ?>


    <link rel="stylesheet" href="css/titulos_moderno_nuevo.css">
    <section class="titulos-section">
                    <!-- Figuras decorativas CSS -->
                    <div class="fondo-circulo circulo-1"></div>
                    <div class="fondo-circulo circulo-2"></div>
                    <div class="fondo-onda"></div>
                <div class="titulos-banner">
                    <img src="assets/img/logo.png" alt="Logo" width="70" class="mb-2">
                    <h1>Books Store</h1>
                    <p>Explora nuestra colección y descubre tu próxima lectura favorita.</p>
                    <div style="font-size:0.95rem;color:#6366f1;">Copyright ©2024 - Todos los derechos reservados</div>
                </div>
        <div class="titulos-grid">
            <?php
                $libreria = new DBGestionLibreria($conexion);
                $titulos = $libreria->getTitulos();
                if (count($titulos) > 0) {
                    foreach ($titulos as $registro) {
                        $titulo = isset($registro['titulo']) && $registro['titulo'] !== null ? htmlspecialchars($registro['titulo']) : 'Título desconocido';
                        $descripcion = isset($registro['descripcion']) && $registro['descripcion'] !== null ? htmlspecialchars($registro['descripcion']) : 'Descubre este libro en nuestra librería.';
                        $precio = isset($registro['precio']) && $registro['precio'] !== null ? htmlspecialchars($registro['precio']) : '0.00';
                        $data = htmlspecialchars(json_encode($registro), ENT_QUOTES, 'UTF-8');
                            echo '<div class="titulo-card">
                                <img src="assets/img/LibroIcono.png" alt="Portada libro">
                                <div class="card-title">'.$titulo.'</div>
                                <div class="card-desc">'.$descripcion.'</div>
                                <div class="card-precio">$'.$precio.'</div>
                                <button class="btn ver-mas-btn" data-libro="'.$data.'">Ver más</button>
                            </div>';
                    }
                } else {
                    echo '<div class="alert alert-warning">No hay libros disponibles.</div>';
                }
            ?>
        </div>
        <img src="assets/img/fondo-libros-1.svg" class="titulos-fondo-svg">
        <!-- Bloque de logo y copyright al final de la página de Títulos -->
        <div class="titulos-footer" style="width:100%;background:rgba(255,255,255,0.92);border-radius:2rem 2rem 0 0;box-shadow:0 -4px 24px rgba(99,102,241,0.10);padding:2rem 1rem 2rem 1rem;text-align:center;margin-top:3rem;display:flex;flex-direction:column;align-items:center;gap:1rem;">
            <img src="assets/img/logo.png" alt="Logo" width="40" height="45" style="margin-bottom:0.5rem;box-shadow:0 2px 8px rgba(248,181,0,0.12);border-radius:1rem;">
            <h1 style="color:#f8b500;font-weight:bold;letter-spacing:2px;margin-bottom:0.5rem;">Books Store</h1>
            <div style="font-size:0.95rem;color:#6366f1;">Copyright ©2024 - Todos los derechos reservados</div>
            <div style="display:flex;gap:1rem;justify-content:center;margin-top:1rem;">
                <a href="index.php" class="btn btn-warning" style="font-weight:bold;border-radius:0.5rem;padding:0.5rem 1.2rem;box-shadow:0 2px 8px rgba(99,102,241,0.10);">Inicio</a>
                <a href="autores.php" class="btn btn-outline-primary" style="font-weight:bold;border-radius:0.5rem;padding:0.5rem 1.2rem;box-shadow:0 2px 8px rgba(99,102,241,0.10);">Autores</a>
                <a href="contacto.php" class="btn btn-outline-success" style="font-weight:bold;border-radius:0.5rem;padding:0.5rem 1.2rem;box-shadow:0 2px 8px rgba(99,102,241,0.10);">Contacto</a>
            </div>
        </div>
    <!-- Modal para detalles de libro -->
    <div class="modal fade" id="modalLibro" tabindex="-1" aria-labelledby="modalLibroLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLibroLabel">Detalles del libro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body" id="modalLibroBody">
                    <!-- Detalles dinámicos -->
                </div>
            </div>
        </div>
    </div>

    <?php include("php/Footer.php"); ?>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script>
        $(function(){
            $('.ver-mas-btn').on('click', function(){
                var libro = $(this).data('libro');
                if(typeof libro === 'string') libro = JSON.parse(libro);
                var html = '<ul class="list-group">';
                html += '<li class="list-group-item"><strong>Título:</strong> '+(libro.titulo||'')+'</li>';
                var tipo = (libro.tipo||'');
                var tipoTrad = tipo;
                if (/business/i.test(tipo)) tipoTrad = 'Negocios';
                else if (/psychology/i.test(tipo)) tipoTrad = 'Psicología';
                else if (/cook/i.test(tipo)) tipoTrad = 'Cocina';
                else if (/computer/i.test(tipo)) tipoTrad = 'Computación';
                else if (/self-help/i.test(tipo)) tipoTrad = 'Autoayuda';
                else if (/reference/i.test(tipo)) tipoTrad = 'Referencia';
                else if (/children/i.test(tipo)) tipoTrad = 'Infantil';
                else if (/fiction/i.test(tipo)) tipoTrad = 'Ficción';
                else if (/non-fiction/i.test(tipo)) tipoTrad = 'No ficción';
                else if (/health/i.test(tipo)) tipoTrad = 'Salud';
                else if (/education/i.test(tipo)) tipoTrad = 'Educación';
                else if (/popular_comp/i.test(tipo)) tipoTrad = 'Popular';
                html += '<li class="list-group-item"><strong>Tipo:</strong> '+tipoTrad+'</li>';
                html += '<li class="list-group-item"><strong>Precio:</strong> $'+(libro.precio||'')+'</li>';
                var descripcionesPorTitulo = {
                    'Emotional Security: A New Algorithm': 'Un enfoque innovador para lograr seguridad emocional en la vida moderna.',
                    'Fifty Years in Buckingham Palace Kitchens': 'Memorias y secretos culinarios tras medio siglo en las cocinas reales.',
                    'Is Anger the Enemy?': 'Reflexión sobre el papel del enojo y cómo gestionarlo positivamente.',
                    'Life Without Fear': 'Guía para superar miedos y vivir con confianza.',
                    'Net Etiquette': 'Las reglas esenciales para una convivencia digital respetuosa.',
                    'Onions, Leeks, and Garlic: Cooking Secrets of the Mediterranean': 'Descubre los sabores y técnicas mediterráneas con estos ingredientes clave.',
                    'Prolonged Data Deprivation: Four Case Studies': 'Análisis de casos sobre el impacto de la falta de datos en la sociedad.',
                    'Secrets of Silicon Valley': 'Historias y aprendizajes del corazón tecnológico mundial.',
                    'Silicon Valley Gastronomic Treats': 'Recorrido por las delicias culinarias de Silicon Valley.',
                    'Straight Talk About Computers': 'Explicaciones claras y sencillas sobre el mundo de la computación.',
                    'Sushi, Anyone?': 'Introducción a la cultura y preparación del sushi.',
                    "The Busy Executive's Database Guide": 'Recomendaciones prácticas para ejecutivos sobre bases de datos.',
                    'The Gourmet Microwave': 'Recetas y trucos para aprovechar al máximo el microondas gourmet.',
                    'The Psychology of Computer Cooking': 'Cómo la tecnología influye en la experiencia culinaria.',
                    'You Can Combat Computer Stress!': 'Consejos para reducir el estrés relacionado con la informática.',
                    // Descripciones reales añadidas
                    'Life Without Fear': 'Este libro te enseña a superar tus miedos y vivir con confianza, a través de técnicas psicológicas y ejemplos inspiradores.',
                    'Is Anger the Enemy?': 'Una profunda reflexión sobre el papel del enojo en la vida diaria y cómo transformarlo en una fuerza positiva.',
                    'Straight Talk About Computers': 'Guía práctica para entender el mundo de la computación, ideal para principiantes y curiosos.',
                    'Sushi, Anyone?': 'Descubre la historia, cultura y secretos detrás de la preparación del sushi, desde Japón hasta tu mesa.',
                    'The Gourmet Microwave': 'Recetas innovadoras y trucos para convertir tu microondas en una herramienta gourmet en la cocina.',
                    'Net Etiquette': 'Manual esencial para la convivencia digital, con consejos sobre comunicación, respeto y seguridad en internet.',
                    'Secrets of Silicon Valley': 'Historias inéditas y aprendizajes del corazón tecnológico mundial, contadas por sus protagonistas.',
                    'Fifty Years in Buckingham Palace Kitchens': 'Relatos y recetas de medio siglo en las cocinas reales, con anécdotas y secretos culinarios.',
                    'Onions, Leeks, and Garlic: Cooking Secrets of the Mediterranean': 'Explora los sabores mediterráneos y aprende a usar estos ingredientes clave en recetas tradicionales.',
                    'Prolonged Data Deprivation: Four Case Studies': 'Análisis detallado de casos reales sobre el impacto de la falta de datos en la sociedad moderna.',
                };
                var descripcion = descripcionesPorTitulo[libro.titulo] || 'Libro de nuestra colección, recomendado por lectores y expertos. ¡Descubre su historia en nuestra tienda!';
                html += '<li class="list-group-item"><strong>Descripción:</strong> '+descripcion+'</li>';
                html += '<li class="list-group-item"><strong>Fecha publicación:</strong> '+(libro.fecha_pub||'')+'</li>';
                html += '</ul>';
                $('#modalLibroBody').html(html);
                var modal = new bootstrap.Modal(document.getElementById('modalLibro'));
                modal.show();
            });
        });
    </script>
</body>
</html>