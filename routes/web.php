<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\PageController;

use App\Http\Controllers\frontend\FrontendController;

/*===============================================
                Web Routes
===============================================*/
Route::get('/', [FrontendController::class, 'index']) -> name('frontend.index');


/*===============================================
                Backend Route
===============================================*/ 
Route::get('/admin', [BackendController::class, 'index']) -> name('backend.index');


/*===============================================
                Setting Route
===============================================*/ 
Route::get('/setting/index', [SettingController::class, 'index']) -> name('setting.index');
Route::post('/setting/update', [SettingController::class, 'update']) -> name('setting.update');


/*===============================================
                Slider Route
===============================================*/ 
Route::get('/slider/index', [SliderController::class, 'index']) -> name('slider.index');
Route::get('/slider/create', [SliderController::class, 'create']) -> name('slider.create');
Route::post('/slider/store', [SliderController::class, 'store']) -> name('slider.store');
Route::get('/slider/edit/{id}', [SliderController::class, 'edit']) -> name('slider.edit');
Route::post('/slider/update/{id}', [SliderController::class, 'update']) -> name('slider.update');
Route::get('/slider/delete/{id}', [SliderController::class, 'destroy']) -> name('slider.delete');


/*===============================================
                Page Route
===============================================*/ 
Route::get('/page/index', [PageController::class, 'page']) -> name('page.index');
Route::get('/page/edit/{id}', [PageController::class, 'edit']) -> name('page.edit');




