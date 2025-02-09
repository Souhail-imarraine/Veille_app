<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-gray-800 to-gray-900">
    <div class="min-h-screen flex flex-col items-center justify-center px-4">
        <!-- Logo Container -->
        <div class="mb-8">
            <i class="fas fa-shield-alt text-indigo-500 text-5xl"></i>
        </div>
        
        <!-- Login Container -->
        <div class="w-full max-w-md">
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 text-center">
                        Espace Administration
                    </h2>
                    <p class="text-gray-500 text-center mt-2">
                        Connectez-vous pour accéder à votre espace
                    </p>
                </div>

                <?php if (isset($error)): ?>
                    <div class="mb-6 flex items-center p-4 bg-red-50 border-l-4 border-red-500 rounded">
                        <i class="fas fa-exclamation-circle text-red-500 mr-3"></i>
                        <p class="text-red-800 text-sm"><?php echo $error; ?></p>
                    </div>
                <?php endif; ?>

                <form action="/login" method="POST" class="space-y-6">
                    <div class="space-y-4">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                                Adresse email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input 
                                    id="email"
                                    name="email" 
                                    type="email" 
                                    required 
                                    class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                                    placeholder="exemple@domaine.com"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                                Mot de passe
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400"></i>
                                </div>
                                <input 
                                    id="password"
                                    name="password" 
                                    type="password" 
                                    required 
                                    class="pl-10 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                                    placeholder="••••••••"
                                >
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember-me" 
                                name="remember-me" 
                                type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                            >
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                                Se souvenir de moi
                            </label>
                        </div>

                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                            Mot de passe oublié?
                        </a>
                    </div>

                    <div>
                        <button 
                            type="submit" 
                            class="w-full flex justify-center items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors"
                        >
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            Se connecter
                        </button>
                    </div>
                </form>
            </div>

            <!-- Footer -->
            <p class="mt-6 text-center text-sm text-gray-400">
                © 2024 Votre Entreprise. Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>