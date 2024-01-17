<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Models\OurInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [ControllersHomeController::class,'index'])->name('index');


Route::group(['namespace' => 'Admin', 'prefix' => 'admin','as' => 'admin.','middleware' => ['auth']], function() {
    Route::get('/', [HomeController::class,'index'])->name('index');

    //Sliders
    Route::get('slider/index',[SliderController::class,'index'])->name('slider.index');
    Route::get('slider/create',[SliderController::class,'create'])->name('slider.create');
    Route::post('slider/store',[SliderController::class,'store'])->name('slider.store');
    Route::get('slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
    Route::get('slider/destroy/{id}',[SliderController::class,'destroy'])->name('slider.destroy');
    Route::post('slider/update',[SliderController::class,'update'])->name('slider.update');

    //About
    Route::get('about/index',[AboutController::class,'index'])->name('about.index');
    Route::get('about/create',[AboutController::class,'create'])->name('about.create');
    Route::post('about/store',[AboutController::class,'store'])->name('about.store');
    Route::get('about/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
    Route::get('about/destroy/{id}',[AboutController::class,'destroy'])->name('about.destroy');
    Route::post('about/update',[AboutController::class,'update'])->name('about.update');

    //Blog
    Route::get('blog/index',[BlogController::class,'index'])->name('blog.index');
    Route::get('blog/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('blog/store',[BlogController::class,'store'])->name('blog.store');
    Route::get('blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::get('blog/destroy/{id}',[BlogController::class,'destroy'])->name('blog.destroy');
    Route::post('blog/update',[BlogController::class,'update'])->name('blog.update');

    //Contact
    Route::get('contact/index',[ContactController::class,'index'])->name('contact.index');
    Route::get('contact/create',[ContactController::class,'create'])->name('contact.create');
    Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
    Route::get('contact/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
    Route::get('contact/destroy/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
    Route::post('contact/update',[ContactController::class,'update'])->name('contact.update');

    //OurInformation
    Route::get('information/index',[OurInformation::class,'index'])->name('our_information.index');
    Route::get('information/create',[OurInformation::class,'create'])->name('our_information.create');
    Route::post('information/store',[OurInformation::class,'store'])->name('our_information.store');
    Route::get('information/edit/{id}',[OurInformation::class,'edit'])->name('our_information.edit');
    Route::get('information/destroy/{id}',[OurInformation::class,'destroy'])->name('our_information.destroy');
    Route::post('information/update',[OurInformation::class,'update'])->name('our_information.update');

    //Project
    Route::get('project/index',[ProjectController::class,'index'])->name('project.index');
    Route::get('project/create',[ProjectController::class,'create'])->name('project.create');
    Route::post('project/store',[ProjectController::class,'store'])->name('project.store');
    Route::get('project/edit/{id}',[ProjectController::class,'edit'])->name('project.edit');
    Route::get('project/destroy/{id}',[ProjectController::class,'destroy'])->name('project.destroy');
    Route::post('project/update',[ProjectController::class,'update'])->name('project.update');

    //Project Images
    Route::get('project/image/index',[ProjectImageController::class,'index'])->name('project_image.index');
    Route::get('project/image/create',[ProjectImageController::class,'create'])->name('project_image.create');
    Route::post('project/image/store',[ProjectImageController::class,'store'])->name('project_image.store');
    Route::get('project/image/edit/{id}',[ProjectImageController::class,'edit'])->name('project_image.edit');
    Route::get('project/image/destroy/{id}',[ProjectImageController::class,'destroy'])->name('project_image.destroy');
    Route::post('project/image/update',[ProjectImageController::class,'update'])->name('project_image.update');

    //Service
    Route::get('service/index',[ServiceController::class,'index'])->name('service.index');
    Route::get('service/create',[ServiceController::class,'create'])->name('service.create');
    Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
    Route::get('service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
    Route::get('service/destroy/{id}',[ServiceController::class,'destroy'])->name('service.destroy');
    Route::post('service/update',[ServiceController::class,'update'])->name('service.update');

    //Subscriber
    Route::get('subscriber/index',[SubscriberController::class,'index'])->name('subscriber.index');
    Route::get('subscriber/create',[SubscriberController::class,'create'])->name('subscriber.create');
    Route::post('subscriber/store',[SubscriberController::class,'store'])->name('subscriber.store');
    Route::get('subscriber/edit/{id}',[SubscriberController::class,'edit'])->name('subscriber.edit');
    Route::get('subscriber/destroy/{id}',[SubscriberController::class,'destroy'])->name('subscriber.destroy');
    Route::post('subscriber/update',[SubscriberController::class,'update'])->name('subscriber.update');

    //Team
    Route::get('team/index',[TeamController::class,'index'])->name('team.index');
    Route::get('team/create',[TeamController::class,'create'])->name('team.create');
    Route::post('team/store',[TeamController::class,'store'])->name('team.store');
    Route::get('team/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
    Route::get('team/destroy/{id}',[TeamController::class,'destroy'])->name('team.destroy');
    Route::post('team/update',[TeamController::class,'update'])->name('team.update');

    //User
    Route::get('user/index',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'create'])->name('user.create');
    Route::post('user/store',[UserController::class,'store'])->name('user.store');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::get('user/destroy/{id}',[UserController::class,'destroy'])->name('user.destroy');
    Route::post('user/update',[UserController::class,'update'])->name('user.update');

    //projectCategory
    Route::get('project/category/index',[ProjectController::class,'index'])->name('project_category.index');
    Route::get('project/category/create',[ProjectController::class,'create'])->name('project_category.create');
    Route::post('project/category/store',[ProjectController::class,'store'])->name('project_category.store');
    Route::get('project/category/edit/{id}',[ProjectController::class,'edit'])->name('project_category.edit');
    Route::get('project/category/destroy/{id}',[ProjectController::class,'destroy'])->name('project_category.destroy');
    Route::post('project/category/update',[ProjectController::class,'update'])->name('project_category.update');
});
