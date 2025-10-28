<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal de noticias moderno impulsado por PHP.">
    <meta name="author" content="Alex Alcantara Zuñoga">
    <link rel="icon" href="https://placehold.co/32x32/C70000/FFFFFF?text=AA">

    <title>Noticias 2025 - Alex Alcantara Zuñiga</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Estilos personalizados -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f4f5; /* bg-zinc-100 */
        }
        /* Color de acento principal (rojo CNN) */
        :root {
            --brand-red: #C70000;
        }
        .text-brand-red {
            color: var(--brand-red);
        }
        .bg-brand-red {
            background-color: var(--brand-red);
        }
        .border-brand-red {
            border-color: var(--brand-red);
        }
        /* Para la barra de scroll de categorías */
        .category-nav::-webkit-scrollbar {
            height: 4px;
        }
        .category-nav::-webkit-scrollbar-thumb {
            background-color: #d1d5db; /* bg-gray-300 */
            border-radius: 20px;
        }
        .category-nav {
            scrollbar-width: thin;
            scrollbar-color: #d1d5db transparent;
        }
    </style>
</head>

<body>

    <!-- Incluir todos los archivos PHP de secciones al principio -->
    <?php
        include("secciones/portada.php");
        include("secciones/internacional.php");
        include("secciones/nacional.php");
        include("secciones/economia.php");
        include("secciones/opinion.php");
        include("secciones/tecnologia.php");
        include("secciones/ciencia.php");
        include("secciones/cultura.php");
        include("secciones/gente.php");
        include("secciones/deportes.php");
        include("secciones/television.php");
        include("secciones/video.php");
        include("secciones/formacion.php");
        include("secciones/empleo.php");
        include("secciones/sociedad.php");
        include("secciones/openstack.php");
        include("secciones/git.php");
        include("secciones/contenedores.php");
        include("secciones/openshift.php");
    ?>

    <!-- Encabezado Principal -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-3xl font-extrabold text-brand-red">
                        Alex Alcantara Zuñiga
                    </a>
                    <a href="#" class="hidden sm:block ml-3 text-2xl font-bold text-zinc-800">
                        Noticias
                    </a>
                </div>
                
                <!-- Navegación (visible en escritorio) -->
                <nav class="hidden md:flex space-x-6">
                    <a href="#" class="font-semibold text-zinc-700 hover:text-brand-red transition-colors">Internacional</a>
                    <a href="#" class="font-semibold text-zinc-700 hover:text-brand-red transition-colors">Nacional</a>
                    <a href="#" class="font-semibold text-zinc-700 hover:text-brand-red transition-colors">Economía</a>
                    <a href="#" class="font-semibold text-zinc-700 hover:text-brand-red transition-colors">Tecnología</a>
                    <a href="#" class="font-semibold text-zinc-700 hover:text-brand-red transition-colors">Deportes</a>
                </nav>

                <!-- Botón de Menú Móvil -->
                <div class="md:hidden">
                    <button class="text-zinc-500 hover:text-zinc-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Barra de Categorías Deslizable -->
        <nav class="border-b border-t border-gray-200 bg-gray-50">
             <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="category-nav flex space-x-6 overflow-x-auto py-3">
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Opinión</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Ciencia</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Cultura</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Gente</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">TV</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Video</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Sociedad</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Formación</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Empleo</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">OpenStack</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Git</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">Contenedores</a>
                    <a href="#" class="text-sm font-semibold text-zinc-600 hover:text-brand-red whitespace-nowrap">OpenShift</a>
                </div>
             </div>
        </nav>
    </header>

    <!-- Contenido Principal -->
    <main class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">

        <!-- Sección Héroe (Portada) -->
        <section class="mb-8">
            <div class="bg-zinc-900 text-white rounded-xl shadow-xl p-8 md:p-12">
                <span class="inline-block bg-brand-red text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">Noticia Principal</span>
                <h1 class="text-3xl md:text-5xl font-extrabold mt-4">
                    <a href="#" class="hover:underline">
                        <?php echo $portada["titulo"]; ?>
                    </a>
                </h1>
                <p class="text-lg md:text-xl text-zinc-300 mt-4 max-w-3xl">
                    <?php echo $portada["resumen"]; ?>
                </p>
                <p class="text-sm text-zinc-400 mt-4">
                    Por: <?php echo $portada["autor"]; ?>
                </p>
            </div>
        </section>

        <!-- Grid de Noticias Principales -->
        <section class="mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Card: Internacional -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-blue-600">Internacional</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-blue-700">
                                <?php echo $internacional["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $internacional["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $internacional["autor"]; ?></span>
                    </div>
                </div>

                <!-- Card: Nacional -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-green-600">Nacional</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-green-700">
                                <?php echo $nacional["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $nacional["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $nacional["autor"]; ?></span>
                    </div>
                </div>

                <!-- Card: Economía -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-yellow-600">Economía</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-yellow-700">
                                <?php echo $economia["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $economia["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $economia["autor"]; ?></span>
                    </div>
                </div>

                <!-- Card: Deportes -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl md:col-span-2 lg:col-span-1">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-brand-red">Deportes</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-brand-red">
                                <?php echo $deportes["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $deportes["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $deportes["autor"]; ?></span>
                    </div>
                </div>

                <!-- Card: Opinión -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-purple-600">Opinión</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-purple-700">
                                <?php echo $opinion["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $opinion["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $opinion["autor"]; ?></span>
                    </div>
                </div>

                <!-- Card: Sociedad -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-orange-600">Sociedad</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-orange-700">
                                <?php echo $sociedad["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $sociedad["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $sociedad["autor"]; ?></span>
                    </div>
                </div>

            </div>
        </section>

        <!-- Sección de Tecnología y Ciencia -->
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-zinc-900 mb-6 pb-2 border-b-4 border-brand-red">Tecnología y Ciencia</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card: Tecnología -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl lg:col-span-2">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-sky-600">Tecnología</span>
                        <h2 class="text-2xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-sky-700">
                                <?php echo $tecnologia["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 mb-4">
                            <?php echo $tecnologia["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $tecnologia["autor"]; ?></span>
                    </div>
                </div>

                <!-- Card: Ciencia -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-6">
                        <span class="text-sm font-semibold text-lime-600">Ciencia</span>
                        <h2 class="text-xl font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-lime-700">
                                <?php echo $ciencia["titulo"]; ?>
                            </a>
                        </h2>
                        <p class="text-zinc-700 mt-2 text-sm mb-4">
                            <?php echo $ciencia["resumen"]; ?>
                        </p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $ciencia["autor"]; ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Cultura y Sociedad -->
        <section class="mb-8">
             <h2 class="text-3xl font-extrabold text-zinc-900 mb-6 pb-2 border-b-4 border-brand-red">Cultura y Estilo de Vida</h2>
             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Card: Cultura -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-5">
                        <span class="text-sm font-semibold text-indigo-600">Cultura</span>
                        <h3 class="text-lg font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-indigo-700"><?php echo $cultura["titulo"]; ?></a>
                        </h3>
                        <p class="text-zinc-700 mt-2 text-sm mb-3"><?php echo $cultura["resumen"]; ?></p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $cultura["autor"]; ?></span>
                    </div>
                </div>
                <!-- Card: Gente -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-5">
                        <span class="text-sm font-semibold text-pink-600">Gente</span>
                        <h3 class="text-lg font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-pink-700"><?php echo $gente["titulo"]; ?></a>
                        </h3>
                        <p class="text-zinc-700 mt-2 text-sm mb-3"><?php echo $gente["resumen"]; ?></p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $gente["autor"]; ?></span>
                    </div>
                </div>
                <!-- Card: Televisión -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-5">
                        <span class="text-sm font-semibold text-teal-600">Televisión</span>
                        <h3 class="text-lg font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-teal-700"><?php echo $television["titulo"]; ?></a>
                        </h3>
                        <p class="text-zinc-700 mt-2 text-sm mb-3"><?php echo $television["resumen"]; ?></p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $television["autor"]; ?></span>
                    </div>
                </div>
                <!-- Card: Video -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-5">
                        <span class="text-sm font-semibold text-red-700">Video</span>
                        <h3 class="text-lg font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-red-800"><?php echo $video["titulo"]; ?></a>
                        </h3>
                        <p class="text-zinc-700 mt-2 text-sm mb-3"><?php echo $video["resumen"]; ?></p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $video["autor"]; ?></span>
                    </div>
                </div>
             </div>
        </section>

        <!-- Sección de Formación y Desarrollo (Tech) -->
        <section class="mb-8">
            <h2 class="text-3xl font-extrabold text-zinc-900 mb-6 pb-2 border-b-4 border-brand-red">Formación y Desarrollo</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card: Formación -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-5">
                        <span class="text-sm font-semibold text-cyan-600">Formación</span>
                        <h3 class="text-lg font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-cyan-700"><?php echo $formacion["titulo"]; ?></a>
                        </h3>
                        <p class="text-zinc-700 mt-2 text-sm mb-3"><?php echo $formacion["resumen"]; ?></p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $formacion["autor"]; ?></span>
                    </div>
                </div>
                <!-- Card: Empleo -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl">
                    <div class="p-5">
                        <span class="text-sm font-semibold text-amber-600">Empleo</span>
                        <h3 class="text-lg font-bold text-zinc-900 mt-2">
                            <a href="#" class="hover:text-amber-700"><?php echo $empleo["titulo"]; ?></a>
                        </h3>
                        <p class="text-zinc-700 mt-2 text-sm mb-3"><?php echo $empleo["resumen"]; ?></p>
                        <span class="text-xs text-zinc-500">Por: <?php echo $empleo["autor"]; ?></span>
                    </div>
                </div>

                <!-- Sección Tech Especializada (Anidada) -->
                <div class="md:col-span-2 lg:col-span-1 space-y-4">
                    <!-- Card: OpenStack -->
                    <div class="bg-zinc-800 text-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl p-4">
                        <span class="text-xs font-semibold text-gray-300">OpenStack</span>
                        <h4 class="font-bold text-white mt-1">
                            <a href="#" class="hover:underline"><?php echo $openstack["titulo"]; ?></a>
                        </h4>
                    </div>
                    <!-- Card: Git -->
                    <div class="bg-zinc-800 text-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl p-4">
                        <span class="text-xs font-semibold text-gray-300">Git</span>
                        <h4 class="font-bold text-white mt-1">
                            <a href="#" class="hover:underline"><?php echo $git["titulo"]; ?></a>
                        </h4>
                    </div>
                    <!-- Card: Contenedores -->
                    <div class="bg-zinc-800 text-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl p-4">
                        <span class="text-xs font-semibold text-gray-300">Contenedores</span>
                        <h4 class="font-bold text-white mt-1">
                            <a href="#" class="hover:underline"><?php echo $contenedores["titulo"]; ?></a>
                        </h4>
                    </div>
                    <!-- Card: OpenShift -->
                    <div class="bg-zinc-800 text-white rounded-lg shadow-lg overflow-hidden transition-all duration-300 hover:shadow-xl p-4">
                        <span class="text-xs font-semibold text-gray-300">OpenShift</span>
                        <h4 class="font-bold text-white mt-1">
                            <a href="#" class="hover:underline"><?php echo $openshift["titulo"]; ?></a>
                        </h4>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-zinc-900 text-zinc-400 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <a href="#" class="text-3xl font-extrabold text-brand-red">
                        AAZ
                    </a>
                    <p class="text-sm mt-2">© 2025 Alex Alcantara Zuñoga. Todos los derechos reservados.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors">Twitter</a>
                    <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                    <a href="#" class="hover:text-white transition-colors">GitHub</a>
                </div>
            </div>
             <div class="mt-8 border-t border-zinc-700 pt-8 text-center text-sm">
                <p>Este es un portal de demostración. Las noticias son reales y obtenidas de fuentes públicas.</p>
                <p><a href="#" class="hover:underline text-zinc-300">Volver arriba</a></p>
            </div>
        </div>
    </footer>

    <!-- Scripts (si fueran necesarios) -->
    <!-- 
    <script>
        // JS para el menú móvil
    </script> 
    -->

</body>
</html>

