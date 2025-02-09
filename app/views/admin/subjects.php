<?php
Session::init();
if (!Session::isLoggedIn() || !Session::isAdmin()) {
    header('Location: /login');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Sujets - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-blue-50">
    <!-- Admin Navigation -->
    <nav class="bg-blue-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center space-x-4">
                    <h1 class="text-xl font-bold">Admin Dashboard</h1>
                    <div class="hidden md:flex space-x-4">
                        <a href="/admin" class="px-3 py-2 text-sm font-medium hover:text-blue-100">Utilisateurs</a>
                        <a href="/admin/calendar"
                            class="px-3 py-2 text-sm font-medium hover:text-blue-100">Calendrier</a>
                        <a href="/admin/subjects"
                            class="px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-md">Sujets</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">Bienvenue, <?php echo Session::get('name'); ?></span>
                    <a href="/logout" class="text-sm hover:text-blue-100">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-900">Gestion des Sujets</h2>
                <button onclick="openAddSubjectModal()"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-150 shadow-sm">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Nouveau Sujet
                </button>
            </div>
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Total Subjects Card -->
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg overflow-hidden">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-blue-100 truncate">Total Sujets</dt>
                                    <dd class="text-2xl font-semibold text-white">45</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Review Card -->
                <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-lg shadow-lg overflow-hidden">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-yellow-100 truncate">À Examiner</dt>
                                    <dd class="text-2xl font-semibold text-white">3</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Approved Subjects Card -->
                <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg overflow-hidden">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-green-100 truncate">Approuvés</dt>
                                    <dd class="text-2xl font-semibold text-white">42</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rejected Subjects Card -->
                <div class="bg-gradient-to-br from-red-500 to-red-600 rounded-lg shadow-lg overflow-hidden">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-white/20 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-red-100 truncate">Rejetés</dt>
                                    <dd class="text-2xl font-semibold text-white">6</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Advanced Filters -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="space-y-1">
                    <label class="text-sm font-medium text-gray-700">Catégorie</label>
                    <select
                        class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500">
                        <option>Toutes les catégories</option>
                        <option>Développement Web</option>
                        <option>Intelligence Artificielle</option>
                        <option>Cybersécurité</option>
                        <option>DevOps</option>
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="text-sm font-medium text-gray-700">Statut</label>
                    <select
                        class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500">
                        <option>Tous les statuts</option>
                        <option>En attente</option>
                        <option>Approuvés</option>
                        <option>Rejetés</option>
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="text-sm font-medium text-gray-700">Date</label>
                    <select
                        class="w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500">
                        <option>Toutes les dates</option>
                        <option>Aujourd'hui</option>
                        <option>Cette semaine</option>
                        <option>Ce mois</option>
                    </select>
                </div>
                <div class="space-y-1">
                    <label class="text-sm font-medium text-gray-700">Recherche</label>
                    <div class="relative">
                        <input type="text" placeholder="Rechercher un sujet..."
                            class="w-full border border-gray-300 rounded-md shadow-sm pl-10 pr-3 py-2 text-sm focus:ring-blue-500 focus:border-blue-500">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subjects Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Subject Card - Pending Review -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-3">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                <svg class="mr-1.5 h-2 w-2 text-yellow-400" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3" />
                                </svg>
                                En attente
                            </span>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                Intelligence Artificielle
                            </span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="p-1 hover:bg-gray-100 rounded-full transition-colors duration-200">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">L'Impact de l'IA dans le Développement Logiciel
                    </h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                        Une exploration des différentes applications de l'IA dans le développement logiciel moderne,
                        incluant l'automatisation des tests, la génération de code et l'optimisation des performances.
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-3">
                            <img class="h-8 w-8 rounded-full ring-2 ring-white"
                                src="https://ui-avatars.com/api/?name=Marie+Laurent&background=random" alt="">
                            <div>
                                <p class="text-sm font-medium text-gray-900">Marie Laurent</p>
                                <p class="text-xs text-gray-500">Soumis le 15 Mars 2024</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="inline-flex items-center px-3 py-1 border border-red-200 text-red-600 text-sm font-medium rounded-md hover:bg-red-50">
                                Rejeter
                            </button>
                            <button
                                class="inline-flex items-center px-3 py-1 bg-green-600 text-white text-sm font-medium rounded-md hover:bg-green-700">
                                Approuver
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional cards would follow the same pattern -->
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex items-center justify-between bg-white px-4 py-3 rounded-lg shadow-sm">
            <div class="flex items-center">
                <p class="text-sm text-gray-700">
                    Affichage de <span class="font-medium">1</span> à <span class="font-medium">10</span> sur
                    <span class="font-medium">45</span> résultats
                </p>
            </div>
            <div class="flex items-center space-x-2">
                <button
                    class="inline-flex items-center px-3 py-1 border border-gray-300 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-50 disabled:opacity-50">
                    Précédent
                </button>
                <div class="flex items-center space-x-1">
                    <button class="px-3 py-1 bg-blue-600 text-white text-sm font-medium rounded-md">1</button>
                    <button class="px-3 py-1 text-gray-700 hover:bg-gray-50 text-sm font-medium rounded-md">2</button>
                    <button class="px-3 py-1 text-gray-700 hover:bg-gray-50 text-sm font-medium rounded-md">3</button>
                </div>
                <button
                    class="inline-flex items-center px-3 py-1 border border-gray-300 text-gray-700 text-sm font-medium rounded-md hover:bg-gray-50">
                    Suivant
                </button>
            </div>
        </div>
    </main>

    <!-- Confirmation Modal -->
    <div id="confirmationModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-blue-900" id="modal-title">Confirmation</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500" id="modal-message">
                        Êtes-vous sûr de vouloir effectuer cette action ?
                    </p>
                </div>
                <div class="flex justify-center mt-4 space-x-4">
                    <button type="button" onclick="closeConfirmationModal()"
                        class="px-4 py-2 bg-gray-100 text-gray-700 text-base font-medium rounded-md hover:bg-gray-200">
                        Annuler
                    </button>
                    <button type="button" id="confirmButton"
                        class="px-4 py-2 bg-blue-600 text-white text-base font-medium rounded-md hover:bg-blue-700">
                        Confirmer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    function openConfirmationModal(action, subjectId) {
        const modal = document.getElementById('confirmationModal');
        const title = document.getElementById('modal-title');
        const message = document.getElementById('modal-message');
        const confirmButton = document.getElementById('confirmButton');

        switch (action) {
            case 'delete':
                title.textContent = 'Supprimer le sujet';
                message.textContent = 'Êtes-vous sûr de vouloir supprimer ce sujet ? Cette action est irréversible.';
                confirmButton.classList.remove('bg-green-600', 'hover:bg-green-700');
                confirmButton.classList.add('bg-red-600', 'hover:bg-red-700');
                break;
            case 'approve':
                title.textContent = 'Approuver le sujet';
                message.textContent = 'Voulez-vous approuver ce sujet ?';
                confirmButton.classList.remove('bg-red-600', 'hover:bg-red-700');
                confirmButton.classList.add('bg-green-600', 'hover:bg-green-700');
                break;
            case 'reject':
                title.textContent = 'Rejeter le sujet';
                message.textContent = 'Voulez-vous rejeter ce sujet ?';
                confirmButton.classList.remove('bg-green-600', 'hover:bg-green-700');
                confirmButton.classList.add('bg-red-600', 'hover:bg-red-700');
                break;
        }

        modal.classList.remove('hidden');
    }

    function closeConfirmationModal() {
        document.getElementById('confirmationModal').classList.add('hidden');
    }
    </script>
</body>

</html>