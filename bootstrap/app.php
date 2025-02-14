<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
            'http://127.0.0.1:8000/add-brand',
            'http://127.0.0.1:8000/add-category',
            'http://127.0.0.1:8000/add-policy',
            'http://127.0.0.1:8000/create-profile',
            'http://127.0.0.1:8000/create-product-review',
            'http://127.0.0.1:8000/create-product',
            'http://127.0.0.1:8000/create-cart',
            'http://127.0.0.1:8000/insertSSLCommerzAccount',
            'http://127.0.0.1:8000/add-slider',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
