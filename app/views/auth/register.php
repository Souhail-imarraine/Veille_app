<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Veille App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="h-full">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-2xl shadow-xl">
            <div>
                <div class="mx-auto h-16 w-16 flex items-center justify-center rounded-full bg-gradient-to-r from-blue-600 to-indigo-600">
                    <i class="fas fa-user-plus text-white text-2xl"></i>
                </div>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Create your account</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Join us and start exploring
                </p>
            </div>

            <?php if (isset($_SESSION['errors'])): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <p class="block sm:inline"><?php echo $error; ?></p>
                    <?php endforeach; ?>
                    <?php unset($_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            
            <form class="mt-8 space-y-6" action="/register" method="POST">
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="firstname" class="block text-sm font-medium text-gray-700">First Name</label>
                            <div class="mt-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input id="firstname" name="nom" type="text" required 
                                    class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg
                                    text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 
                                    focus:ring-blue-500 focus:border-transparent sm:text-sm"
                                    placeholder="First name">
                            </div>
                        </div>
                        <div>
                            <label for="lastname" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <div class="mt-1 relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input id="lastname" name="prenom" type="text" required 
                                    class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg
                                    text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 
                                    focus:ring-blue-500 focus:border-transparent sm:text-sm"
                                    placeholder="Last name">
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required 
                                class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg
                                text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 
                                focus:ring-blue-500 focus:border-transparent sm:text-sm"
                                placeholder="Enter your email">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1 relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input id="password" name="password" type="password" required
                                class="appearance-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg
                                text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2
                                focus:ring-blue-500 focus:border-transparent sm:text-sm"
                                placeholder="Create a password">
                        </div>
                        <p class="mt-1 text-sm text-gray-500">
                            Password must be at least 6 characters
                        </p>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2.5 px-4 border border-transparent text-sm
                        font-medium rounded-lg text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700
                        hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500
                        transition-all duration-200 ease-in-out transform hover:-translate-y-0.5">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <i class="fas fa-user-plus text-blue-200 group-hover:text-blue-100"></i>
                        </span>
                        Create Account
                    </button>
                </div>
            </form>

            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="/login" class="font-medium text-blue-600 hover:text-blue-500 transition-colors duration-200">
                        Sign in
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
