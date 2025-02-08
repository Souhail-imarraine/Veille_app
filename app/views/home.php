<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Système de Veille Technologique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: {
                        50: '#f0f6ff',
                        100: '#e4eeff',
                        600: '#1e40af',
                        700: '#1e3a8a',
                    }
                }
            }
        }
    }
    </script>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-primary-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center space-x-4">
                    <h1 class="text-xl font-bold">VeilleTech Pro</h1>
                    <div class="hidden md:flex space-x-4">
                        <a href="/" class="px-3 py-2 text-sm font-medium hover:text-primary-100">Accueil</a>
                        <a href="/about" class="px-3 py-2 text-sm font-medium hover:text-primary-100">À propos</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login"
                        class="bg-white text-primary-700 px-4 py-2 rounded-md hover:bg-primary-50 transition duration-150 text-sm font-semibold">Connexion</a>
                    <a href="/register"
                        class="bg-primary-600 text-white px-4 py-2 rounded-md hover:bg-primary-700 transition duration-150 text-sm font-semibold border border-white/20">Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header -->
        <div class="mb-8 border-b border-gray-200 pb-5">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Veilles Technologiques</h2>
                    <p class="mt-1 text-sm text-gray-600">Découvrez les dernières analyses technologiques</p>
                </div>
                <div class="flex space-x-3">
                    <select class="bg-white border border-gray-300 rounded-md px-3 py-1 text-sm text-gray-700">
                        <option>Tous les statuts</option>
                        <option>Validé</option>
                        <option>En attente</option>
                        <option>Refusé</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Veille Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Veille Card 1 -->
            <article
                class="bg-white rounded-lg border border-gray-200 hover:border-primary-600 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span
                            class="bg-emerald-50 text-emerald-700 text-xs px-3 py-1 rounded-full font-medium">Validé</span>
                        <time class="text-sm text-gray-500 font-medium">15 Mars 2024</time>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 line-clamp-2">L'Impact de l'IA dans le
                        Développement Logiciel</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-sm">Prof. Marie Laurent</span>
                        </div>
                        <div class="pt-3 border-t border-gray-100">
                            <a href="#"
                                class="text-primary-600 hover:text-primary-700 text-sm font-medium flex items-center">
                                Voir les détails
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Veille Card 2 -->
            <article
                class="bg-white rounded-lg border border-gray-200 hover:border-primary-600 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-amber-50 text-amber-700 text-xs px-3 py-1 rounded-full font-medium">En
                            attente</span>
                        <time class="text-sm text-gray-500 font-medium">14 Mars 2024</time>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 line-clamp-2">Sécurité des Applications Cloud
                        Native</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-sm">Prof. Thomas Martin</span>
                        </div>
                        <div class="pt-3 border-t border-gray-100">
                            <a href="#"
                                class="text-primary-600 hover:text-primary-700 text-sm font-medium flex items-center">
                                Voir les détails
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Veille Card 3 -->
            <article
                class="bg-white rounded-lg border border-gray-200 hover:border-primary-600 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-rose-50 text-rose-700 text-xs px-3 py-1 rounded-full font-medium">Refusé</span>
                        <time class="text-sm text-gray-500 font-medium">13 Mars 2024</time>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 line-clamp-2">Tendances DevOps 2024</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-sm">Prof. Sophie Dubois</span>
                        </div>
                        <div class="pt-3 border-t border-gray-100">
                            <a href="#"
                                class="text-primary-600 hover:text-primary-700 text-sm font-medium flex items-center">
                                Voir les détails
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>

</html>