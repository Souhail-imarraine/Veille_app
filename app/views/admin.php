<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeilleTech - Plateforme de Veille Technologique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-3">
                        <i class="fas fa-laptop-code text-2xl text-blue-600"></i>
                        <span class="text-xl font-bold text-blue-600">VeilleTech</span>
                    </a>
                    <div class="hidden md:flex items-center space-x-4 ml-10">
                        <a href="/calendar" class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="far fa-calendar-alt mr-2"></i>Calendrier
                        </a>
                        <a href="/topics" class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-lightbulb mr-2"></i>Sujets
                        </a>
                        <a href="/statistics" class="text-gray-600 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">
                            <i class="fas fa-chart-bar mr-2"></i>Statistiques
                        </a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="text-gray-600 hover:text-blue-600">
                        <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                    </a>
                    <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        <i class="fas fa-user-plus mr-2"></i>Inscription
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="pt-24 pb-12 bg-gradient-to-r from-blue-600 to-blue-800">
        <div class="max-w-7xl mx-auto px-4 text-center text-white">
            <h1 class="text-4xl font-bold mb-4">Plateforme de Veille Technologique</h1>
            <p class="text-xl text-blue-100 mb-8">Découvrez et partagez les dernières innovations technologiques</p>
            <div class="flex justify-center space-x-4">
                <a href="/register" class="bg-white text-blue-600 px-6 py-3 rounded-lg hover:bg-gray-100">
                    <i class="fas fa-user-plus mr-2"></i>Rejoindre la communauté
                </a>
                <a href="/calendar" class="border border-white text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                    <i class="far fa-calendar-alt mr-2"></i>Voir le calendrier
                </a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <!-- Search Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">
                <i class="fas fa-search mr-3 text-blue-600"></i>Rechercher une Veille
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                    <input type="date" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                    <input type="text" placeholder="Rechercher par titre..." class="w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Présentateur</label>
                    <input type="text" placeholder="Nom du présentateur..." class="w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                        <i class="fas fa-search mr-2"></i>Rechercher
                    </button>
                </div>
            </div>
        </div>

        <!-- Upcoming Veilles -->
        <div class="mb-12">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">
                <i class="far fa-calendar-check mr-3 text-blue-600"></i>Présentations à venir
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Veille Card -->
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition duration-200">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Intelligence Artificielle</h3>
                            <span class="px-3 py-1 bg-green-100 text-green-800 text-sm rounded-full">
                                <i class="fas fa-clock mr-1"></i>À venir
                            </span>
                        </div>
                        <div class="space-y-3 text-gray-600 mb-4">
                            <p class="flex items-center">
                                <i class="far fa-calendar-alt mr-2 text-blue-600"></i>15 Février 2024
                            </p>
                            <p class="flex items-center">
                                <i class="far fa-user mr-2 text-blue-600"></i>John Doe
                            </p>
                            <p class="flex items-center">
                                <i class="far fa-clock mr-2 text-blue-600"></i>14:00 - 15:30
                            </p>
                        </div>
                        <a href="#" class="block text-center bg-gray-100 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-200">
                            <i class="fas fa-info-circle mr-2"></i>Voir les détails
                        </a>
                    </div>
                </div>
                <!-- Add more veille cards here -->
            </div>
        </div>

        <!-- Statistics Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Total Présentations</h3>
                    <i class="fas fa-presentation text-blue-600 text-2xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900">156</p>
                <p class="text-sm text-gray-600">Depuis le début de l'année</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Étudiants Actifs</h3>
                    <i class="fas fa-users text-blue-600 text-2xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900">89</p>
                <p class="text-sm text-gray-600">Ce mois-ci</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Taux de Participation</h3>
                    <i class="fas fa-chart-line text-blue-600 text-2xl"></i>
                </div>
                <p class="text-3xl font-bold text-gray-900">87%</p>
                <p class="text-sm text-gray-600">Moyenne mensuelle</p>
            </div>
        </div>
    </main>

    

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">À propos</h3>
                    <p class="text-gray-400">VeilleTech est une plateforme dédiée au partage des connaissances technologiques entre étudiants et enseignants.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens rapides</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/calendar" class="hover:text-white">Calendrier</a></li>
                        <li><a href="/topics" class="hover:text-white">Sujets</a></li>
                        <li><a href="/contact" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i>contact@veilletech.com</li>
                        <li><i class="fas fa-phone mr-2"></i>+33 1 23 45 67 89</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 VeilleTech. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>