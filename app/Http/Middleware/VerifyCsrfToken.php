<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
<<<<<<< HEAD
    	'api/*'
=======
        //
>>>>>>> f52c187ad0496454c42ca4f11d694df67736da7f
    ];
}
