<?php

require_once __DIR__.'/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();


$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

// $app->withFacades();

 $app->withEloquent();

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->router->group([
    'namespace' => 'App\Http\Controllers',
], function ($router) {
    require __DIR__.'/../routes/web.php';
});

Way\Generators\GeneratorsServiceProvider::class;
Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider::class;

return $app;
