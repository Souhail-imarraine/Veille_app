<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Veille Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <!-- Admin Navigation -->
    <nav class="bg-primary-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center space-x-4">
                    <h1 class="text-xl font-bold">Admin Dashboard</h1>
                    <div class="hidden md:flex space-x-4">
                        <a href="/admin" class="px-3 py-2 text-sm font-medium text-white bg-primary-600 rounded-md">Veilles</a>
                        <a href="/admin/users" class="px-3 py-2 text-sm font-medium hover:text-primary-100">Utilisateurs</a>
                        <a href="/admin/settings" class="px-3 py-2 text-sm font-medium hover:text-primary-100">Paramètres</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">Admin: John Doe</span>
                    <a href="/logout" class="text-sm hover:text-primary-100">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header with Stats -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900">Gestion des Veilles</h2>
            <div class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-amber-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">En attente</dt>
                                    <dd class="text-lg font-semibold text-gray-900">5</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-emerald-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Approuvées</dt>
                                    <dd class="text-lg font-semibold text-gray-900">12</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-rose-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-gray-500 truncate">Rejetées</dt>
                                    <dd class="text-lg font-semibold text-gray-900">3</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="mb-6 flex justify-between items-center">
            <div class="flex space-x-4">
                <select class="bg-white border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-700">
                    <option>Tous les statuts</option>
                    <option>En attente</option>
                    <option>Approuvées</option>
                    <option>Rejetées</option>
                </select>
                <input type="text" placeholder="Rechercher..." class="border border-gray-300 rounded-md px-3 py-2 text-sm">
            </div>
        </div>

        <!-- Veille Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Your existing article card code here -->
            <article class="bg-white rounded-lg border border-gray-200 hover:border-primary-600 transition duration-300">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-amber-50 text-amber-700 text-xs px-3 py-1 rounded-full font-medium">En attente</span>
                        <time class="text-sm text-gray-500 font-medium">15 Mars 2024</time>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 line-clamp-2">L'Impact de l'IA dans le Développement Logiciel</h3>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-700">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span class="text-sm">Prof. Marie Laurent</span>
                        </div>
                        
                        <!-- Review Section -->
                        <div class="pt-4 border-t border-gray-100 mt-4">
                            <div class="flex flex-col space-y-3">
                                <button onclick="openReviewModal(1)" class="w-full bg-primary-600 text-white px-4 py-2 rounded-md hover:bg-primary-700 transition duration-150 text-sm font-medium flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                    Examiner
                                </button>
                                
                                <div class="flex space-x-2">
                                    <button class="flex-1 bg-emerald-50 text-emerald-700 px-4 py-2 rounded-md hover:bg-emerald-100 transition duration-150 text-sm font-medium">
                                        Approuver
                                    </button>
                                    <button class="flex-1 bg-rose-50 text-rose-700 px-4 py-2 rounded-md hover:bg-rose-100 transition duration-150 text-sm font-medium">
                                        Rejeter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <!-- Review Modal (Your existing modal code) -->
    <div id="reviewModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <!-- Your existing modal content -->
    </div>

    <script>
        function openReviewModal(id) {
            document.getElementById('reviewModal').classList.remove('hidden');
        }

        function closeReviewModal() {
            document.getElementById('reviewModal').classList.add('hidden');
        }
    </script>
</body>
</html> 