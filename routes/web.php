<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ([
        "class" => "",
        "pagina" => "home"
    ]));
});

Route::get('/home', function () {
    return view('home', ([
    	"class" => "",
		"pagina" => "home"
	]));
});

Route::get('/apresentacao', function () {
    return view('apresentacao', ([
    	"class" => "papa",
		"pagina" => "apresentacao"
	]));
});

Route::get('/programa', function () {
    return view('programa', ([
    	"class" => "papa",
		"pagina" => "programa"
	]));
});

Route::get('/contactar', function () {
    return view('contactar', ([
        "class" => "papa",
        "pagina" => "contactar"
    ]));
});

Route::get('/inscricao', function () {
    return view('inscricao', ([
        "class" => "papa",
        "pagina" => "last"
    ]));
});