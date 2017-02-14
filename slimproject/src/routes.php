<?php
// Routes

/*$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});*/

$app->get('/', App\Controller\NameController::class)->setName('name-url');
$app->get('/tampil/[{nama}]', App\Controller\NameController::class.':saya')->setName('saya-url');
