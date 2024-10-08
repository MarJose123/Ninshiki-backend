<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'laravel' => app()->version(),
        'documentation' => '/docs/api',
        'documentation_version' => config('scramble.info.version'),
        'php_version' => PHP_VERSION,
    ]);
});

Route::get('/test', function () {
    $post = \App\Models\Posts::first();
    \App\Events\Broadcast\NewPostEvent::dispatch($post);
});
