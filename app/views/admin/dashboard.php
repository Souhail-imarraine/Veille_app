<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Administrateur | Veille Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%); }
        .sidebar-item:hover { background: rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <div class="w-64 bg-gray-900 text-white">
            <div class="p-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-layer-group text-purple-400 text-2xl"></i>
                    <span class="text-lg font-bold">VeilleTech Admin</span>
                </div>
            </div>
            <nav class="mt-8">
                <div class="px-4 py-2 text-xs uppercase text-gray-400 font-semibold">
                    Menu Principal
                </div>
                <a href="#dashboard" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Tableau de bord</span>
                </a>
                <div class="px-4 py-2 mt-4 text-xs uppercase text-gray-400 font-semibold">
                    Gestion des Sujets
                </div>
                <a href="#topics" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Validation des sujets</span>
                </a>
                <a href="#assignments" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-users"></i>
                    <span>Attribution des sujets</span>
                </a>
                <div class="px-4 py-2 mt-4 text-xs uppercase text-gray-400 font-semibold">
                    Gestion des Utilisateurs
                </div>
                <a href="#users" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-user-check"></i>
                    <span>Validation des comptes</span>
                </a>
                <a href="#calendar" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Calendrier</span>
                </a>
            </nav>
        </div>

        <div class="flex-1 overflow-auto">
            <div class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-4 md:px-8 py-4">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-xl md:text-2xl font-semibold text-gray-800">Tableau de bord</h1>
                    </div>
                    <div class="flex items-center space-x-2 md:space-x-4">
                        <button class="text-gray-500 hover:text-gray-700 relative">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
                        </button>
                        <div class="flex items-center space-x-2">
                            <span class="hidden md:inline text-gray-700 font-medium">Admin</span>
                            <img src="https://ui-avatars.com/api/?name=Admin&background=6366f1&color=fff" 
                                 alt="Admin" class="w-8 h-8 rounded-full">
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-4 md:p-8 space-y-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- Total Présentations -->
                    <div class="bg-white rounded-xl shadow-sm p-4 md:p-6">
                        <div class="flex items-center justify-between mb-2 md:mb-4">
                            <div class="text-sm font-medium text-gray-500">Présentations</div>
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                <i class="fas fa-presentation text-indigo-600"></i>
                            </div>
                        </div>
                        <div class="text-lg md:text-2xl font-bold text-gray-800">124</div>
                        <div class="text-xs md:text-sm text-green-500 flex items-center mt-1 md:mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> +12.5%
                        </div>
                    </div>

                    <!-- Étudiants Actifs -->
                    <div class="bg-white rounded-xl shadow-sm p-4 md:p-6">
                        <div class="flex items-center justify-between mb-2 md:mb-4">
                            <div class="text-sm font-medium text-gray-500">Étudiants</div>
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-purple-100 flex items-center justify-center">
                                <i class="fas fa-users text-purple-600"></i>
                            </div>
                        </div>
                        <div class="text-lg md:text-2xl font-bold text-gray-800">85</div>
                        <div class="text-xs md:text-sm text-green-500 flex items-center mt-1 md:mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> +5.2%
                        </div>
                    </div>

                    <!-- Sujets en Attente -->
                    <div class="bg-white rounded-xl shadow-sm p-4 md:p-6">
                        <div class="flex items-center justify-between mb-2 md:mb-4">
                            <div class="text-sm font-medium text-gray-500">En Attente</div>
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-yellow-100 flex items-center justify-center">
                                <i class="fas fa-clock text-yellow-600"></i>
                            </div>
                        </div>
                        <div class="text-lg md:text-2xl font-bold text-gray-800">12</div>
                        <div class="text-xs md:text-sm text-yellow-500 flex items-center mt-1 md:mt-2">
                            <i class="fas fa-clock mr-1"></i> À valider
                        </div>
                    </div>

                    <!-- Taux Participation -->
                    <div class="bg-white rounded-xl shadow-sm p-4 md:p-6">
                        <div class="flex items-center justify-between mb-2 md:mb-4">
                            <div class="text-sm font-medium text-gray-500">Participation</div>
                            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="fas fa-chart-pie text-green-600"></i>
                            </div>
                        </div>
                        <div class="text-lg md:text-2xl font-bold text-gray-800">92%</div>
                        <div class="text-xs md:text-sm text-green-500 flex items-center mt-1 md:mt-2">
                            <i class="fas fa-arrow-up mr-1"></i> +3.1%
                        </div>
                    </div>
                </div>

                <!-- Recent Activity & Tasks -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Recent Activity -->
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-4 md:p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">Activités Récentes</h2>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="space-y-4">
                                <!-- Activity Item -->
                                <div class="flex items-start space-x-4">
                                    <div class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-plus text-blue-600"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">Nouveau sujet ajouté</p>
                                        <p class="text-sm text-gray-500">Intelligence Artificielle en 2025</p>
                                        <p class="text-xs text-gray-400 mt-1">Il y a 5 minutes</p>
                                    </div>
                                </div>

                                <div class="flex items-start space-x-4">
                                    <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-check text-green-600"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900">Présentation validée</p>
                                        <p class="text-sm text-gray-500">Web Security par Jane Smith</p>
                                        <p class="text-xs text-gray-400 mt-1">Il y a 15 minutes</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upcoming Tasks -->
                    <div class="bg-white rounded-xl shadow-sm">
                        <div class="p-4 md:p-6 border-b border-gray-100">
                            <h2 class="text-lg font-semibold text-gray-800">Tâches à Venir</h2>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="space-y-4">
                                <!-- Task Item -->
                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600">
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">Valider les nouvelles inscriptions</p>
                                            <p class="text-xs text-gray-500">8 étudiants en attente</p>
                                        </div>
                                    </div>
                                    <span class="text-xs text-red-600 font-medium">Urgent</span>
                                </div>

                                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-indigo-600">
                                        <div>
                                            <p class="text-sm font-medium text-gray-900">Planifier les présentations</p>
                                            <p class="text-xs text-gray-500">Pour la semaine prochaine</p>
                                        </div>
                                    </div>
                                    <span class="text-xs text-yellow-600 font-medium">Cette semaine</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Presentations -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <div class="p-4 md:p-6 border-b border-gray-100">
                        <h2 class="text-lg font-semibold text-gray-800">Présentations Récentes</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Étudiant</th>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sujet</th>
                                    <th scope="col" class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <img class="h-8 w-8 rounded-full" src="https://ui-avatars.com/api/?name=John+Doe" alt="">
                                            <div class="ml-3">
                                                <div class="text-sm font-medium text-gray-900">John Doe</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 md:px-6 py-4">
                                        <div class="text-sm text-gray-900">Intelligence Artificielle</div>
                                        <div class="text-xs text-gray-500">Technologies émergentes</div>
                                    </td>
                                    <td class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        04/02/2025
                                    </td>
                                    <td class="px-4 md:px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Complété
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for various actions would go here -->
</body>
</html>
