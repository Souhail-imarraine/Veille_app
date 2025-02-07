<?php include 'includes/header.php'; ?>

<!-- Main Content -->
<div class="flex-1 overflow-auto">
    <!-- Top Navigation -->
    <div class="bg-white shadow-sm">
        <div class="flex justify-between items-center px-8 py-4">
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl font-semibold text-gray-800">Gestion des Sujets</h1>
            </div>
        </div>
    </div>

    <!-- Topics Management Content -->
    <div class="p-8">
        <!-- Action Buttons -->
        <div class="mb-6 flex space-x-4">
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                <i class="fas fa-plus mr-2"></i>Ajouter un sujet
            </button>
            <button class="bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition">
                <i class="fas fa-filter mr-2"></i>Filtrer
            </button>
        </div>

        <!-- Topics Table -->
        <div class="bg-white rounded-xl shadow-sm">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full">
                        <thead>
                            <tr class="text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <th class="px-6 py-3">Sujet</th>
                                <th class="px-6 py-3">Proposé par</th>
                                <th class="px-6 py-3">Date</th>
                                <th class="px-6 py-3">Étudiants Assignés</th>
                                <th class="px-6 py-3">Statut</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-sm font-medium text-gray-900">Intelligence Artificielle en 2025</div>
                                    <div class="text-sm text-gray-500">Technologies émergentes</div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <img src="https://ui-avatars.com/api/?name=John+Doe" alt="John Doe" class="w-8 h-8 rounded-full mr-2">
                                        <div class="text-sm font-medium text-gray-900">John Doe</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500">05/02/2025</td>
                                <td class="px-6 py-4">
                                    <div class="flex -space-x-2">
                                        <img src="https://ui-avatars.com/api/?name=User+1" class="w-8 h-8 rounded-full border-2 border-white">
                                        <img src="https://ui-avatars.com/api/?name=User+2" class="w-8 h-8 rounded-full border-2 border-white">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
                                        Approuvé
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <button class="p-2 text-blue-600 hover:text-blue-900" title="Assigner des étudiants">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                        <button class="p-2 text-indigo-600 hover:text-indigo-900" title="Modifier">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="p-2 text-red-600 hover:text-red-900" title="Supprimer">
                                            <i class="fas fa-trash"></i>
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
