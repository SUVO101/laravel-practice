<?php

use App\Http\Controllers\mycontroller;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/suvo',function(){

    // for product data
    $products=[
        [
            "image"=>'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp',
            "Title"=>'Product 1',
            "description"=>'A card component has a figure, a body part, and inside body there are title and actions parts'
        ],
        [
            "image"=>'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp',
            "Title"=>'Product 2',
            "description"=>'A card component has a figure, a body part, and inside body there are title and actions parts'
        ],
        [
            "image"=>'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp',
            "Title"=>'Product 3',
            "description"=>'A card component has a figure, a body part, and inside body there are title and actions parts'
        ],
        [
            "image"=>'https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp',
            "Title"=>'Product 4',
            "description"=>'A card component has a figure, a body part, and inside body there are title and actions parts'
        ],
    ];

    // // else pare execute
    // $products=[
        
    // ];

    return view('suvo',['allProducts'=>$products]);
});
// Route::view('/suvo', 'suvo');


/// group routes

Route::group(['prefix'=>'/tcs'],function(){
    
    Route::get('/about-us',function(){
        return '<h1>About Page</h1>';
    });
    
    Route::get('/contact-us',function(){
        return '<h1>Contact Page</h1>';
    });
    
    Route::get('/our-team',function(){
        return '<h1>Our Team Page</h1>';
    });
});

Route::resource('/form',mycontroller::class);

// for 404 || page not found page
Route::fallback(function(){
    return view('404');
});

Route::group(['prefix'=>'/test'],function(){
    Route::view('/form2', 'form2');
    Route::view('/content', 'content');
});