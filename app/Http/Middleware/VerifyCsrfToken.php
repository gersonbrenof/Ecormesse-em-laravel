<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * As URLs que não devem passar pela verificação CSRF.
     *
     * @var array
     */
    protected $except = [
        '/compras/detalhe'
    ];
}