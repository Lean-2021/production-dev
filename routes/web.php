<?php

    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\HomeController;
    use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//    Route::get('/', HomeController::class)
//        ->name('home');

//    Route::redirect('/', function () {
//        redirect()->route('home');
//    });
    Route::view('*', 'errors.404');
    //    Route::redirect('/', '/error');


    //    Route::resource('contacto', ContactController::class)
    //        ->except('show');
