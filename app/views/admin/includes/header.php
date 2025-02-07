<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Veille Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 100%); }
        .sidebar-item:hover { background: rgba(255, 255, 255, 0.1); }
        @media (max-width: 768px) {
            .sidebar-open {
                transform: translateX(0);
            }
            .sidebar-closed {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen">
        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="md:hidden fixed top-4 left-4 z-50 bg-gray-900 text-white p-2 rounded-lg">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Sidebar -->
        <div id="sidebar" class="fixed md:static w-64 bg-gray-900 text-white h-full transition-transform duration-300 transform -translate-x-full md:translate-x-0 z-40">
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
                <a href="dashboard.php" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Tableau de bord</span>
                </a>
                <div class="px-4 py-2 mt-4 text-xs uppercase text-gray-400 font-semibold">
                    Gestion des Sujets
                </div>
                <a href="topics.php" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-clipboard-check"></i>
                    <span>Validation des sujets</span>
                </a>
                <a href="assignments.php" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-users"></i>
                    <span>Attribution des sujets</span>
                </a>
                <div class="px-4 py-2 mt-4 text-xs uppercase text-gray-400 font-semibold">
                    Gestion des Utilisateurs
                </div>
                <a href="users.php" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-user-check"></i>
                    <span>Validation des comptes</span>
                </a>
                <a href="calendar.php" class="flex items-center space-x-2 px-6 py-3 text-gray-300 hover:bg-gray-800 sidebar-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Calendrier</span>
                </a>
            </nav>

            <!-- User Profile -->
            <div class="absolute bottom-0 w-64 bg-gray-800 p-4">
                <div class="flex items-center space-x-3">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=6366f1&color=fff" 
                         alt="Admin" class="w-8 h-8 rounded-full">
                    <div>
                        <div class="text-sm font-medium text-white">Admin</div>
                        <a href="#" class="text-xs text-gray-400 hover:text-white">Déconnexion</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay for mobile -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black opacity-50 z-30 hidden md:hidden"></div>
