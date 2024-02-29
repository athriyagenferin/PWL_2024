<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Practicum 1
// Route::get('/hello', function () { 
//     return 'Hello World'; 
//     }); 

Route::get('/world', function () { 
    return 'World'; 
    }); 

Route::get('/welcome', function () { 
    return 'Welcome'; 
    }); 

Route::get('/namanim', function () { 
    return 'Name: Athriya Genferin <br> NIM: 2241720075'; 
    }); 

//Practicum 2
Route::get('/user/{name}', function ($name) { 
    return 'My name is '.$name; 
    }); 

Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
    }); 

// Route::get('/articles/{id}', function 
//     ($articleId) { 
//     return 'Article page-'.$articleId; 
//     }); 

//practicum 3
Route::get('/user/{name?}', function ($name=null) { 
    return 'My name is '.$name; 
    });

Route::get('/user/{name?}', function ($name='John') { 
        return 'Nama saya '.$name; 
        });

//Controller
//Practicum 1
// Route::get('/hello',[WelcomeController::class,'hello']); 

// Route::get('/index',[PageController::class,'index']); 
// Route::get('/about',[PageController::class,'about']); 
// Route::get('/articles/{$id}',[PageController::class,'articles']); 

//Modify the previous implementation with the concept of Single Action Controller. So for 
//the final result obtained there will be HomeController, AboutController and 
//ArticleController. Modifications are also the routes used.

Route::get('/index',[HomeController::class,'index']); 
Route::get('/about',[AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles ']);
 

//Resource Controller
//Praktikum 1
// Route::resource('photos', PhotoController::class); 

// Route::resource('photos', PhotoController::class)->only([ 
//     'index', 'show' 
//     ]); 
    Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
    ]); 


//View
//Practicum 1
// Route::get('/greeting', function () { 
//     return view('hello', ['name' => 'Ferin']); 
//     }); 

//View in directory 
// Route::get('/greeting', function () { 
//     return view('blog.hello', ['name' => 'Ferin']); 
//     }); 

//Displaying a view using a controller
Route::get('/greeting', [WelcomeController::class, 
'greeting']); 

//Forward data to views
