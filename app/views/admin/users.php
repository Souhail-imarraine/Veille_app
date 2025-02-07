<?php include 'includes/header.php'; ?>

<!-- Main Content -->
<div class="flex-1 overflow-auto">
    <!-- Top Navigation -->
    <div class="bg-white shadow-sm">
        <div class="flex justify-between items-center px-8 py-4">
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl font-semibold text-gray-800">Gestion des Utilisateurs</h1>
            </div>
        </div>
    </div>

    <!-- Users Management Content -->
    <div class="p-8">
        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-sm font-medium text-gray-500">Total Utilisateurs</div>
                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                        <i class="fas fa-users text-blue-600"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-gray-800">156</div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-sm font-medium text-gray-500">En attente d'approbation</div>
                    <div class="w-10 h-10 rounded-full bg-yellow-100 flex items-center justify-center">
                        <i class="fas fa-user-clock text-yellow-600"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-gray-800">8</div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-sm font-medium text-gray-500">Utilisateurs Actifs</div>
                    <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                        <i class="fas fa-user-check text-green-600"></i>
                    </div>
                </div>
                <div class="text-2xl font-bold text-gray-800">142</div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-xl shadow-sm">
            <div class="p-6 border-b border-gray-100">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">Liste des Utilisateurs</h2>
                    <div class="flex space-x-2">
                        <div class="relative">
                            <input type="text" placeholder="Rechercher..." 
                                   class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:border-indigo-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
                            <i class="fas fa-filter mr-2"></i>Filtrer
                        </button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="px-6 py-3">Utilisateur</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3">Rôle</th>
                                <th class="px-6 py-3">Statut</th>
                                <th class="px-6 py-3">Date d'inscription</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe" alt="John Doe" 
                                             class="w-8 h-8 rounded-full mr-2">
                                        <div>
                                            <div class="font-medium text-gray-900">John Doe</div>
                                            <div class="text-sm text-gray-500">Étudiant</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">john.doe@email.com</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">
                                        Étudiant
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">
                                        En attente
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">05/02/2025</td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <button class="p-2 text-green-600 hover:text-green-900" title="Approuver">
                                            <i class="fas fa-check"></i>
                                        </button>
                                        <button class="p-2 text-red-600 hover:text-red-900" title="Rejeter">
                                            <i class="fas fa-times"></i>
                                        </button>
                                        <button class="p-2 text-blue-600 hover:text-blue-900" title="Voir détails">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
