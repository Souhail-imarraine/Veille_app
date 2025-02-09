<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs - Admin Dashboard</title>
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
                        <a href="/admin/calendar" class="px-3 py-2 text-sm font-medium hover:text-blue-100">Calendrier</a>
                        <a href="/admin/subjects" class="px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-md">Sujets</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-sm">Admin: John Doe</span>
                    <a href="/logout" class="text-sm hover:text-blue-100">Déconnexion</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header with Stats -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-blue-900">Gestion des Utilisateurs</h2>
            <div class="mt-4 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <!-- Total Users -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-blue-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-blue-500 truncate">Total Utilisateurs</dt>
                                    <dd class="text-lg font-semibold text-blue-900">156</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Approvals -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-yellow-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-yellow-500 truncate">En Attente</dt>
                                    <dd class="text-lg font-semibold text-yellow-900">8</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Users -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-green-100 rounded-md p-3">
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="ml-5 w-0 flex-1">
                                <dl>
                                    <dt class="text-sm font-medium text-green-500 truncate">Utilisateurs Actifs</dt>
                                    <dd class="text-lg font-semibold text-green-900">142</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters and Search -->
        <div class="mb-6 flex justify-between items-center">
            <div class="flex space-x-4">
                <select class="bg-white border border-blue-200 rounded-md px-3 py-2 text-sm text-blue-700">
                    <option>Tous les statuts</option>
                    <option>En attente</option>
                    <option>Approuvés</option>
                    <option>Bloqués</option>
                </select>
                <input type="text" placeholder="Rechercher un utilisateur..." 
                    class="border border-blue-200 rounded-md px-3 py-2 text-sm w-64">
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-blue-200">
                <thead class="bg-blue-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Utilisateur
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Rôle
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Statut
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Date d'inscription
                        </th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-blue-200">
                    <!-- Pending User Example -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Jean+Dupont" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-blue-900">Jean Dupont</div>
                                    <div class="text-sm text-blue-500">jean.dupont@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-blue-900">Étudiant</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                En attente
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
                            15 Mars 2024
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-green-600 hover:text-green-900 mr-3">Approuver</button>
                            <button class="text-red-600 hover:text-red-900">Rejeter</button>
                        </td>
                    </tr>

                    <!-- Active User Example -->
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api/?name=Marie+Laurent" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-blue-900">Marie Laurent</div>
                                    <div class="text-sm text-blue-500">marie.laurent@example.com</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-blue-900">Professeur</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                Actif
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
                            10 Mars 2024
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <button class="text-blue-600 hover:text-blue-900 mr-3">Éditer</button>
                            <button class="text-red-600 hover:text-red-900">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="bg-white px-4 py-3 border-t border-blue-200 sm:px-6">
                <div class="flex items-center justify-between">
                    <div class="flex-1 flex justify-between sm:hidden">
                        <a href="#" class="relative inline-flex items-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50">
                            Précédent
                        </a>
                        <a href="#" class="ml-3 relative inline-flex items-center px-4 py-2 border border-blue-300 text-sm font-medium rounded-md text-blue-700 bg-white hover:bg-blue-50">
                            Suivant
                        </a>
                    </div>
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-blue-700">
                                Affichage de <span class="font-medium">1</span> à <span class="font-medium">10</span> sur <span class="font-medium">156</span> résultats
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-blue-300 bg-white text-sm font-medium text-blue-500 hover:bg-blue-50">
                                    <span class="sr-only">Précédent</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-blue-300 bg-white text-sm font-medium text-blue-700 hover:bg-blue-50">
                                    1
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-blue-300 bg-blue-50 text-sm font-medium text-blue-700">
                                    2
                                </a>
                                <a href="#" class="relative inline-flex items-center px-4 py-2 border border-blue-300 bg-white text-sm font-medium text-blue-700 hover:bg-blue-50">
                                    3
                                </a>
                                <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-blue-300 bg-white text-sm font-medium text-blue-500 hover:bg-blue-50">
                                    <span class="sr-only">Suivant</span>
                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
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
                        class="px-4 py-2 bg-red-600 text-white text-base font-medium rounded-md hover:bg-red-700">
                        Confirmer
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openConfirmationModal(action, userId) {
            const modal = document.getElementById('confirmationModal');
            const title = document.getElementById('modal-title');
            const message = document.getElementById('modal-message');
            const confirmButton = document.getElementById('confirmButton');

            if (action === 'delete') {
                title.textContent = 'Supprimer l\'utilisateur';
                message.textContent = 'Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.';
                confirmButton.classList.remove('bg-green-600', 'hover:bg-green-700');
                confirmButton.classList.add('bg-red-600', 'hover:bg-red-700');
            } else if (action === 'approve') {
                title.textContent = 'Approuver l\'utilisateur';
                message.textContent = 'Voulez-vous approuver cet utilisateur ?';
                confirmButton.classList.remove('bg-red-600', 'hover:bg-red-700');
                confirmButton.classList.add('bg-green-600', 'hover:bg-green-700');
            }

            modal.classList.remove('hidden');
        }

        function closeConfirmationModal() {
            document.getElementById('confirmationModal').classList.add('hidden');
        }
    </script>
</body>

</html>