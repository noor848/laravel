<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
        'http://localhost:8000/post/add',
        'http://localhost:8000/user/add',
        'http://localhost:8000/profile/add',
        'http://localhost:8000/post/update/*',
        'http://localhost:8000/post/delete/*'
    ];
}
