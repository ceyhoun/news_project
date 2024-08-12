<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\News;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=>'yeni2'],function(){
    Route::get('/admin/login',[AdminController::class,'login'])->name('login');
    Route::post('/admin/login/create',[AdminController::class,'logincreate'])->name('create');
});





//Route::group(['middleware'=>'yeni'],function(){


//home
Route::get('admin/index',[AdminController::class,'admindex'])->name('home');
//news
Route::get('admin/form',[AdminController::class,'alldata'])->name('allnews');
//new add news//
Route::get('admin/forms/news',[AdminController::class,'news'])->name('news');
Route::post('admin/forms/add/news',[AdminController::class,'addnews'])->name('addnews');
//crud
Route::get('admin/forms/news/delete/{id?}',[AdminController::class,'delete'])->name('newsdelete');
Route::post('admin/forms/add/edit/{id?}',[AdminController::class,'edit'])->name('newsedit');
//category

Route::get('admin/forms/category',[AdminController::class,'category'])->name('category');
Route::get('admin/forms/add/category',[AdminController::class,'addcategory']);
Route::post('admin/forms/add/category',[AdminController::class,'addcategory'])->name('addcategory');
//advert
Route::get('admin/advert',[AdminController::class,'advert'])->name('advert');
Route::get('admin/add/advert',[AdminController::class,'addadvert']);
Route::post('admin/add/advert',[AdminController::class,'addadvert'])->name('addadvert');

//news pag
Route::get('/',[News::class,'userHome']);;
Route::get('/news/{id?}',[News::class,'newsdetail'])->name('detail');


//author
Route::get('admin/author',[AdminController::class,'author'])->name('author');
Route::post('admin/add/author',[AdminController::class,'addauthor'])->name('addauthor');

Route::get('/admin/logout',[AdminController::class,'logout'])->name('logout');

//});


