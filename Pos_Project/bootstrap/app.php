<?php

use App\Http\Middleware\VerifyCsrfToken;
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
        
        $middleware->validateCsrfTokens( except: [
           'http://127.0.0.1:8000/user-registration',
           'http://127.0.0.1:8000/user-login',
           'http://127.0.0.1:8000/sent-otp',
           'http://127.0.0.1:8000/verify-otp',
           'http://127.0.0.1:8000/reset-password',
           'http://127.0.0.1:8000/user-update',
                  //Category api
           'http://127.0.0.1:8000/create-category',
           'http://127.0.0.1:8000/delete-category',
           'http://127.0.0.1:8000/update-category',
           'http://127.0.0.1:8000/category-by-id',
                  //customer api
           'http://127.0.0.1:8000/create-customer',
           'http://127.0.0.1:8000/delete-customer',
           'http://127.0.0.1:8000/update-customer',
           'http://127.0.0.1:8000/customer-by-id',
                  //product api
           'http://127.0.0.1:8000/create-product',  
        ]);

        $middleware->alias([
           
        ]);


      })

    ->withExceptions(function (Exceptions $exceptions) {
        


    })->create();

