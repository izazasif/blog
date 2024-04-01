<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CareerController;
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

// Route::get('/', function () {
    
//     return view('web.home');
// });
Route::get('/',[App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('/blog',[App\Http\Controllers\HomeController::class,'blog'])->name('blog');
Route::get('/portfolio',[App\Http\Controllers\HomeController::class,'portfolio'])->name('portfolio');
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/contact',[App\Http\Controllers\HomeController::class,'contact_store'])->name('contact');
Route::get('/newsroom_details/{id}',[App\Http\Controllers\HomeController::class,'newsroom_details'])->name('newsroom_details');
Route::get('/newsrooms',[App\Http\Controllers\HomeController::class,'newsroom'])->name('newsroom');
Route::get('/career_form/{id}',[App\Http\Controllers\HomeController::class,'career_form'])->name('career_form');
Route::post('/career_form',[App\Http\Controllers\HomeController::class,'apply'])->name('apply.form');
Route::get('/job_description/{slug}',[App\Http\Controllers\HomeController::class,'job_description'])->name('job_description');
Route::get('/miaki_career',[App\Http\Controllers\HomeController::class,'miaki_career'])->name('miaki_career');
Route::get('/about_us',[App\Http\Controllers\HomeController::class,'about_us'])->name('about_us');
Route::get('/our_leadership_team',[App\Http\Controllers\HomeController::class,'our_leadership_team'])->name('our_leadership_team');
Route::get('/blog_details/{slug}',[App\Http\Controllers\HomeController::class,'blog_details'])->name('blog_details');


//services 
Route::get('/services',[App\Http\Controllers\HomeController::class,'services'])->name('services');
Route::get('/mobile_app_development',[App\Http\Controllers\HomeController::class,'mobile_app_development'])->name('mobile_app_development');
Route::get('/digital_transmition',[App\Http\Controllers\HomeController::class,'digital_transmition'])->name('digital_transmition');
Route::get('/qa',[App\Http\Controllers\HomeController::class,'qa'])->name('qa');
Route::get('/managed_services',[App\Http\Controllers\HomeController::class,'managed_services'])->name('managed_services');
Route::get('/telecom_services',[App\Http\Controllers\HomeController::class,'telecom_services'])->name('telecom_services');
Route::get('/web_dev',[App\Http\Controllers\HomeController::class,'web_dev'])->name('web_dev');

Route::get('/login',[App\Http\Controllers\HomeController::class,'index'])->name('login');
Route::post('/login',[App\Http\Controllers\HomeController::class,'login'])->name('authenticate');

Route::get('/logout',[App\Http\Controllers\HomeController::class,'logout'])->name('logout');


Route::resource('blogs', BlogController::class);
Route::resource('newsroom', NewsroomController::class);
Route::resource('team', TeamController::class);
Route::resource('career', CareerController::class);
Route::get('/testimonial',[App\Http\Controllers\HomeController::class,'testimonial'])->name('testimonial.index');
Route::post('/testimonial',[App\Http\Controllers\HomeController::class,'testimonial_store'])->name('testimonial.store');