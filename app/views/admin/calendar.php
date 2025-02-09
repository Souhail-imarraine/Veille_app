<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier des Présentations - Admin Dashboard</title>
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
                        <a href="/admin/calendar" class="px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-md">Calendrier</a>
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
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-blue-900">Calendrier des Présentations</h2>
                <button onclick="openScheduleModal()" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-150">
                    + Nouvelle Présentation
                </button>
            </div>
        </div>

        <!-- Calendar Controls -->
        <div class="bg-white p-4 rounded-lg shadow mb-6">
            <div class="flex justify-between items-center mb-4">
                <div class="flex space-x-2">
                    <button class="p-2 hover:bg-blue-100 rounded-md">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <h3 class="text-lg font-semibold text-blue-900">Mars 2024</h3>
                    <button class="p-2 hover:bg-blue-100 rounded-md">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 text-sm font-medium text-blue-600 hover:bg-blue-50 rounded-md">Aujourd'hui</button>
                    <select class="border border-blue-200 rounded-md px-3 py-1 text-sm text-blue-600">
                        <option>Vue Mois</option>
                        <option>Vue Semaine</option>
                        <option>Vue Jour</option>
                    </select>
                </div>
            </div>

            <!-- Calendar Grid -->
            <div class="grid grid-cols-7 gap-px bg-blue-200">
                <!-- Days of Week -->
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Lun</div>
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Mar</div>
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Mer</div>
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Jeu</div>
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Ven</div>
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Sam</div>
                <div class="bg-blue-50 p-2 text-center text-sm font-medium text-blue-900">Dim</div>

                <!-- Previous Month Days (grayed out) -->
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-400">26</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-400">27</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-400">28</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-400">29</div>
                </div>

                <!-- Current Month Days -->
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">1</div>
                    <div class="mt-2">
                        <div class="bg-blue-100 text-blue-700 p-1 rounded text-sm mb-1">
                            <div class="font-medium">14:00 - L'Impact de l'IA</div>
                            <div class="text-xs">Marie Laurent</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">2</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">3</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">4</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">5</div>
                    <div class="mt-2">
                        <div class="bg-green-100 text-green-700 p-1 rounded text-sm mb-1">
                            <div class="font-medium">10:00 - DevOps Practices</div>
                            <div class="text-xs">Jean Dupont</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">6</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">7</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">8</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">9</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">10</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">11</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">12</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">13</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">14</div>
                </div>
                <div class="bg-white min-h-[120px] p-2 relative">
                    <div class="text-sm text-gray-500">15</div>
                    <div class="mt-2">
                        <div class="bg-purple-100 text-purple-700 p-1 rounded text-sm mb-1">
                            <div class="font-medium">15:30 - Cloud Computing</div>
                            <div class="text-xs">Sophie Martin</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">16</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">17</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">18</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">19</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">20</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">21</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">22</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">23</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">24</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">25</div>
                    <div class="mt-2">
                        <div class="bg-orange-100 text-orange-700 p-1 rounded text-sm mb-1">
                            <div class="font-medium">11:00 - Cybersécurité</div>
                            <div class="text-xs">Pierre Dubois</div>
                        </div>
                    </div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">26</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">27</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">28</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">29</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">30</div>
                </div>
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-500">31</div>
                </div>

                <!-- Next Month Days (grayed out) -->
                <div class="bg-white min-h-[120px] p-2">
                    <div class="text-sm text-gray-400">1</div>
                </div>
            </div>
        </div>

        <!-- Upcoming Presentations -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-blue-900 mb-4">Prochaines Présentations</h3>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 border border-blue-100 rounded-lg hover:border-blue-300">
                    <div class="flex items-center space-x-4">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-full">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-medium text-blue-900">L'Impact de l'IA dans le Développement</h4>
                            <p class="text-sm text-blue-600">Marie Laurent</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-sm font-medium text-blue-900">15 Mars 2024</div>
                        <div class="text-sm text-blue-600">14:00 - 15:00</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Schedule Modal -->
    <div id="scheduleModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <h3 class="text-lg font-medium text-blue-900 mb-4">Programmer une Présentation</h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-blue-700">Titre</label>
                        <input type="text" class="mt-1 block w-full border border-blue-200 rounded-md p-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-blue-700">Présentateur</label>
                        <select class="mt-1 block w-full border border-blue-200 rounded-md p-2">
                            <option>Marie Laurent</option>
                            <option>Jean Dupont</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-blue-700">Date</label>
                        <input type="date" class="mt-1 block w-full border border-blue-200 rounded-md p-2">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-blue-700">Heure</label>
                        <input type="time" class="mt-1 block w-full border border-blue-200 rounded-md p-2">
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="closeScheduleModal()" 
                            class="px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-50 rounded-md">
                            Annuler
                        </button>
                        <button type="submit" 
                            class="px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                            Programmer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openScheduleModal() {
            document.getElementById('scheduleModal').classList.remove('hidden');
        }

        function closeScheduleModal() {
            document.getElementById('scheduleModal').classList.add('hidden');
        }
    </script>
</body>

</html> 