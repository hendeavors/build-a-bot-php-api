<?php

use App\Part;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the api routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['prefix' => 'api'], function ($router) {
    $router->get('/parts', function () use ($router) {
        return [
            'heads' => Part::where('type', 'heads')->get(),
            'arms' => Part::where('type', 'arms')->get(),
            'torsos' => Part::where('type', 'torsos')->get(),
            'bases' => Part::where('type', 'bases')->get()
        ];
    });

    $router->post('/cart', function (Request $request) use ($router) {
        return response('', 201);
    });

    $router->post('/sign-in', function (Request $request) use ($router) {
        return response('', 201);
    });

    $router->get('/images/{filename}', function ($filename) use ($router) {
        if (file_exists(__DIR__ . '/../public/images/' . $filename)) {
            return response()->download(__DIR__ . '/../public/images/' . $filename);
        }

        abort(404);
    });

    $router->get('/', function () use ($router) {
        return $router->app->version();
    });
});
