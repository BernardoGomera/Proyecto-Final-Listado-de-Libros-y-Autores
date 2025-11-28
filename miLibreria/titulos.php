<?php include 'php/conexion.php'?>
<?php include 'php/getTitulos.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Store</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styletitulo.css">
  <link rel="stylesheet" href="css/styleheader.css">
  <link rel="stylesheet" href="ccs/stylefooter.css">
  <link rel="icon" href="css/img/logo.png" type="image/x-icon"> 
<!-- CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necesario para algunas funciones de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (necesario para algunos componentes de Bootstrap que requieren tooltips y popovers) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>
<!-- Fondo decorativo dinámico tipo librería -->
<div class="estante-libreria"></div>
<div class="libros-svg">
    <svg width="320" height="60" viewBox="0 0 320 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="10" y="10" width="24" height="50" rx="4" fill="#6366f1"/>
        <rect x="40" y="18" width="18" height="42" rx="3" fill="#e0e7ff"/>
        <rect x="65" y="12" width="16" height="48" rx="3" fill="#a5b4fc"/>
        <rect x="85" y="22" width="12" height="38" rx="2" fill="#818cf8"/>
        <rect x="100" y="10" width="20" height="50" rx="4" fill="#6366f1"/>
        <rect x="125" y="16" width="14" height="44" rx="3" fill="#e0e7ff"/>
        <rect x="145" y="20" width="10" height="40" rx="2" fill="#a5b4fc"/>
        <rect x="160" y="12" width="18" height="48" rx="3" fill="#818cf8"/>
        <rect x="185" y="10" width="24" height="50" rx="4" fill="#6366f1"/>
        <rect x="215" y="18" width="18" height="42" rx="3" fill="#e0e7ff"/>
        <rect x="240" y="12" width="16" height="48" rx="3" fill="#a5b4fc"/>
        <rect x="260" y="22" width="12" height="38" rx="2" fill="#818cf8"/>
        <rect x="275" y="10" width="20" height="50" rx="4" fill="#6366f1"/>
        <rect x="300" y="16" width="14" height="44" rx="3" fill="#e0e7ff"/>
    </svg>
</div>

<!-- Header-->
<?php include("php/header.php") ?>


<!-- Contenido -->
<section id="titulos">
    <br>
</section>

<section class="page-section about-heading">
    <div class="container">
        <div class="product-item">
            <!-- Container para pantallas grandes -->
            <div class="product-item-title d-flex d-none d-md-block" id= "Pantallas_grandes" style="width : 630px;">
                <div class="bg-faded p-5 d-flex me-auto rounded" style="margin-left : 50px;">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-lower">Libros Disponibles</span>
                    </h2>
                </div>
            </div>

            <!-- Container para pantallas mobiles -->
            <div class="product-item-title d-flex d-md-none position-relative">
                <div class="bg-faded p-4 d-flex me-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-lower">Libros Disponibles</span>
                    </h2>
                </div>
            </div>                         
            
            <section class="container-fluid d-flex justify-content-center align-items-start" style="min-height: 0; position: relative; z-index: 2; padding-top: 0;">
                <div class="titulos-content-elevado p-4 rounded-4 shadow-lg" style="background: rgba(99,102,241,0.13); max-width: 1200px; width: 100%; margin-top: 0;">
                    <!-- Lista de Libros -->
                    <?php
                        $libreria = new DBGestionLibreria($conexion);
                        $titulos = $libreria->getTitulos();
                        if (count($titulos) > 0) {
                            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
                            foreach ($titulos as $registro) {
                                $data = htmlspecialchars(json_encode($registro), ENT_QUOTES, 'UTF-8');
                                echo '<div class="col">
                                        <div class="card libro-card h-100 shadow-sm">
                                            <div class="card-body d-flex flex-column justify-content-between">
                                                <h5 class="card-title">'.htmlspecialchars($registro['titulo']).'</h5>
                                                <button class="btn btn-outline-primary mt-3 ver-mas-btn" data-libro="'.$data.'">Ver más</button>
                                            </div>
                                        </div>
                                    </div>';
                            }
                            echo '</div>';
                        } else {
                            echo '<div class="alert alert-warning">No hay libros disponibles.</div>';
                        }
                    ?>
                </div>
            </section>


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

        <!-- Footer -->
        <footer id= "footer">
            <div class="footer-container text-center background-color: #333">
                        <img src="assets/img/logobeato.png" alt="Logo" width="35" height="40" >
                                <p><b>Books Store</b></p>
                <h4>Copyright ©2024 - Todos los derechos reservados.</h4>
        </div>
    </footer>
        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>
        <script>
        $(function(){
            $('.ver-mas-btn').on('click', function(){
                var libro = $(this).data('libro');
                if(typeof libro === 'string') libro = JSON.parse(libro);
                var html = '<ul class="list-group">';
                html += '<li class="list-group-item"><strong>Título:</strong> '+(libro.titulo||'')+'</li>';
                // Traducción de tipo
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
                    // Diccionario de descripciones personalizadas por título
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
                        // Puedes agregar más títulos y descripciones aquí
                    };
                    var descripcion = descripcionesPorTitulo[libro.titulo] || 'Libro sin descripción personalizada disponible.';
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