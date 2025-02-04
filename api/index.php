<?php
require __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(Illuminate\Http\Request::capture());

$response->send();

$kernel->terminate(Illuminate\Http\Request::capture(), $response);