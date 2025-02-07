<?php include 'includes/header.php'; ?>

<!-- Main Content -->
<div class="flex-1 overflow-auto">
    <!-- Top Navigation -->
    <div class="bg-white shadow-sm">
        <div class="flex justify-between items-center px-8 py-4">
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl font-semibold text-gray-800">Calendrier des Présentations</h1>
            </div>
            <div class="flex space-x-3">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                    <i class="fas fa-plus mr-2"></i>Nouvelle Présentation
                </button>
            </div>
        </div>
    </div>

    <!-- Calendar Content -->
    <div class="p-8">
        <!-- Calendar Navigation -->
        <div class="bg-white rounded-xl shadow-sm mb-6">
            <div class="p-4 flex items-center justify-between">
                <div class="flex space-x-4 items-center">
                    <button class="p-2 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <h2 class="text-xl font-semibold">Février 2025</h2>
                    <button class="p-2 hover:bg-gray-100 rounded-lg">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                <div class="flex space-x-2">
                    <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                        Aujourd'hui
                    </button>
                    <select class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200">
                        <option>Mois</option>
                        <option>Semaine</option>
                        <option>Jour</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Calendar Grid -->
        <div class="bg-white rounded-xl shadow-sm">
            <div class="grid grid-cols-7 border-b">
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Lun</div>
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Mar</div>
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Mer</div>
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Jeu</div>
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Ven</div>
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Sam</div>
                <div class="px-4 py-3 text-center text-sm font-medium text-gray-500">Dim</div>
            </div>
            
            <div class="grid grid-cols-7 h-screen max-h-[600px]">
                <!-- Calendar Day Cell -->
                <div class="border-b border-r p-2 relative">
                    <div class="text-sm font-medium text-gray-500">1</div>
                    <!-- Example Event -->
                    <div class="mt-1">
                        <div class="bg-indigo-100 text-indigo-800 text-xs rounded p-1 mb-1 cursor-pointer hover:bg-indigo-200">
                            <div class="font-medium">IA & Machine Learning</div>
                            <div class="text-xs">09:00 - 10:30</div>
                        </div>
                        <div class="bg-purple-100 text-purple-800 text-xs rounded p-1 cursor-pointer hover:bg-purple-200">
                            <div class="font-medium">Web Security</div>
                            <div class="text-xs">14:00 - 15:30</div>
                        </div>
                    </div>
                </div>
                <!-- Repeat for other days -->
            </div>
        </div>

        <!-- Upcoming Presentations -->
        <div class="mt-6 bg-white rounded-xl shadow-sm">
            <div class="p-6 border-b border-gray-100">
                <h2 class="text-lg font-semibold text-gray-800">Présentations à venir</h2>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center space-x-4">
                            <div class="w-12 h-12 flex items-center justify-center rounded-full bg-indigo-100 text-indigo-600">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div>
                                <div class="font-medium text-gray-900">Intelligence Artificielle en 2025</div>
                                <div class="text-sm text-gray-500">John Doe & Jane Smith</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-sm font-medium text-gray-900">05 Février, 2025</div>
                            <div class="text-sm text-gray-500">09:00 - 10:30</div>
                        </div>
                    </div>
                    <!-- Add more upcoming presentations -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
