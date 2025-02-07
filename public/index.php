<?php
require_once __DIR__ . '/../core/Router.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

$router = new Router();
$authController = new AuthController();

$router->get('/login', function() use ($authController) {
    $authController->login();
});

$router->post('/login', function() use ($authController) {
    $authController->login();
});

$router->get('/register', function() use ($authController) {
    $authController->register();
});

$router->post('/register', function() use ($authController) {
    $authController->register();
});

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = str_replace('/Veille_app/public', '', $uri);

// If the URI is empty or just "/", show the homepage
if ($uri === '' || $uri === '/') {
    require __DIR__ . '/../app/views/home.php';
    exit();
}

$router->resolve($uri, $_SERVER['REQUEST_METHOD']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application de Veille Technologique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    .gradient-bg {
        background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%);
    }

    .card-hover {
        transition: all 0.3s ease;
    }

    .card-hover:hover {
        transform: translateY(-5px);
    }
    </style>
</head>

<body class="bg-gray-50">
    <nav class="gradient-bg shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="flex items-center">
                        <i class="fas fa-layer-group text-white text-2xl mr-2"></i>
                        <span class="font-bold text-white text-xl tracking-tight">VeilleTech</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="flex items-center px-3 py-2 text-white hover:text-indigo-100 transition">
                        <i class="fas fa-home mr-2"></i> Accueil
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-white hover:text-indigo-100 transition">
                        <i class="fas fa-plus mr-2"></i> Ajouter
                    </a>
                    <a href="#" class="flex items-center px-3 py-2 text-white hover:text-indigo-100 transition">
                        <i class="fas fa-list mr-2"></i> Catégories
                    </a>
                    <a href="/Veille_app/public/login"
                        class="bg-white text-indigo-600 px-4 py-2 rounded-lg font-medium hover:bg-indigo-50 transition">
                        <i class="fas fa-user mr-2"></i> Connexion
                    </a>

                </div>
            </div>
        </div>
    </nav>

    <div class="gradient-bg text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Plateforme de Veille Technologique</h1>
            <p class="text-xl text-indigo-100 mb-8">Restez à jour avec les dernières actualités technologiques</p>

            <div class="max-w-2xl mx-auto">
                <div class="flex items-center bg-white rounded-lg shadow-lg p-1">
                    <input type="text" placeholder="Rechercher une veille..."
                        class="w-full px-6 py-3 rounded-lg focus:outline-none text-gray-700">
                    <button class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Section Title -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Dernières Veilles</h2>
            <p class="text-gray-600">Découvrez les analyses technologiques les plus récentes</p>
        </div>

        <!-- Veille Cards Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl shadow-md card-hover overflow-hidden">
                <div class="p-1 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span
                            class="bg-indigo-100 text-indigo-800 text-sm font-medium px-3 py-1 rounded-full">Tech</span>
                        <span class="text-sm text-gray-500">Il y a 2 jours</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Intelligence Artificielle</h3>
                    <p class="text-gray-600 mb-4">Dernières avancées en IA et Machine Learning</p>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-user-circle text-indigo-500 mr-2"></i>
                            <span>John Doe</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-calendar text-indigo-500 mr-2"></i>
                            <span>04/02/2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl shadow-md card-hover overflow-hidden">
                <div class="p-1 bg-gradient-to-r from-green-500 to-teal-600"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full">Web</span>
                        <span class="text-sm text-gray-500">Il y a 1 semaine</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-800">Développement Web</h3>
                    <p class="text-gray-600 mb-4">Nouveautés en frameworks et outils web</p>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-user-circle text-green-500 mr-2"></i>
                            <span>Jane Smith</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-calendar text-green-500 mr-2"></i>
                            <span>01/02/2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="bg-gradient-to-br from-white to-purple-50 rounded-xl shadow-lg card-hover overflow-hidden border border-purple-100">
                <div class="h-2 bg-gradient-to-r from-purple-500 via-pink-500 to-red-500"></div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <span
                                class="bg-purple-100 text-purple-800 text-sm font-medium px-4 py-1.5 rounded-full flex items-center">
                                <i class="fas fa-paint-brush mr-2"></i>
                                Design
                            </span>
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-pink-100 text-pink-800">
                                <i class="fas fa-fire-alt mr-1"></i> Trending
                            </span>
                        </div>
                        <span class="text-sm text-gray-500 italic">Il y a 3 jours</span>
                    </div>

                    <h3
                        class="text-2xl font-bold mb-3 text-gray-800 hover:text-purple-600 transition-colors duration-300">
                        UX/UI Design
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">Tendances en design d'interface utilisateur</p>

                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-gradient-to-r from-purple-400 to-pink-500 flex items-center justify-center text-white">
                                    <i class="fas fa-user-circle text-lg"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Marie Claire</p>
                                    <p class="text-xs text-gray-500">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="flex items-center text-sm text-gray-500">
                                <i class="fas fa-calendar text-purple-500 mr-2"></i>
                                <span>02/02/2025</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white mt-12 py-6">
        <div class="container mx-auto px-4">
            <p class="text-center text-gray-600">&copy; 2024 Application de Veille Technologique</p>
        </div>
    </footer>
</body>

</html>