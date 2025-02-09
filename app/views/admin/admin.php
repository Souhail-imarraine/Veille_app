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
                        <a href="/admin/calendar"
                            class="px-3 py-2 text-sm font-medium hover:text-blue-100">Calendrier</a>
                        <a href="/admin/subjects"
                            class="px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-md">Sujets</a>
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
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
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
                                <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
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
                                <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
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
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Utilisateur
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Rôle
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Statut
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Date d'inscription
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-right text-xs font-medium text-blue-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-blue-200">
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full"
                                        src="https://ui-avatars.com/api/?name=Jean+Dupont" alt="">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-blue-900"><?=$user['nom'].' '.$user['prenom']?>
                                    </div>
                                    <div class="text-sm text-blue-500"><?=$user['email']?></div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-blue-900">Etudiant</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                <?=$user['statut']?>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
                            <?=$user['created_at']?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <?php if ($user['statut'] === 'en attente'): ?>
                                <form action="/admin" method="POST" class="inline">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="text-green-600 hover:text-green-900 mr-3">Approuver</button>
                                </form>
                                <form action="/admin" method="POST" class="inline">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="text-red-600 hover:text-red-900">Rejeter</button>
                                </form>
                            <?php elseif ($user['statut'] === 'approuvé'): ?>
                                <form action="/admin" method="POST" class="inline">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="text-yellow-600 hover:text-yellow-900">Bloquer</button>
                                </form>
                            <?php else: ?>
                                <form action="/admin" method="POST" class="inline">
                                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                    <button type="submit" class="text-blue-600 hover:text-blue-900">Réactiver</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>