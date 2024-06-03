<?php

namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;


class VerifyCsrfToken extends BaseVerifier
{
    /**
     * Handle an incoming request.
     *
     * @var array
     */
    
     protected $except = [
        '/user-registration'
     ];
}
