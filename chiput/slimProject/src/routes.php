<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/form/', function ($request, $response, $args) {
    // Sample log message

    // Render index view
    return $this->renderer->render($response, 'form.phtml', $args);
});

$app->get('/0000/', function ($request, $response, $args) {
    // Sample log message

    // Render index view
    return $this->renderer->render($response, 'form.phtml', $args);
});
