<?php require_once __DIR__ . '/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Bienvenue sur Veille App</h2>
                </div>
                <div class="card-body">
                    <p class="text-center">
                        Connectez-vous ou inscrivez-vous pour commencer à utiliser l'application.
                    </p>
                    <div class="d-flex justify-content-center mt-4">
                        <a href="/Veille_app/public/login" class="btn btn-primary mx-2">Se connecter</a>
                        <a href="/Veille_app/public/register" class="btn btn-secondary mx-2">S'inscrire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/layouts/footer.php'; ?>
