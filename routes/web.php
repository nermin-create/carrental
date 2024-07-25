<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyusersController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ShowPhotoController;
use App\Http\Controllers\SignupController;
use Illuminate\Session\Middleware\AuthenticateSession;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes(['verify'=> true]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
//admin 
//admin 
Route::view('admin/master','admin.master');
//Route::view('admin/addcars','admin.addCar')->name('addcars');
//Route::view('admin/addcategory','admin.addCategory')->name('addcategory');
//Route::view('admin/addtestimon','admin.addTestimonials')->name('addtestimon');
//Route::view('admin/adduser','admin.addUser')->name('adduser');
//Route::view('admin/cars','admin.cars')->name('cars');
//Route::view('admin/categories','admin.categories')->name('categories');
//Route::view('admin/editcar','admin.editCar')->name('editcar');
//Route::view('admin/editcategory','admin.editCategory')->name('editcategory');
//Route::view('admin/edittestimon','admin.editTestimonials')->name('edittestimon');
//Route::view('admin/edituser','admin.edituser')->name('edituser');
// Route::view('admin/messages','admin.messages')->name('messages');
//Route::view('admin/showmessages','admin.showMessage')->name('showmessages');
//Route::view('admin/testimonials','admin.testimonials')->name('testimonial');
//Route::view('admin/users','admin.users')->name('users');




//interface
Route::view('layout','interface.layout');
Route::get('index',[CarController::class,'show_car'])->name('index');
Route::get('single{id}',[CarController::class,'single_car'])->name('single');
Route::get('listing',[CarController::class,'listing_car'])->name('listing');

Route::get('testimonials',[TestimonController::class,'testi'])->name('testimonials');
Route::get('contact',[ContactController::class,'create'])->name('addcontact');
Route::post('contact',[ContactController::class,'store'])->name('contact');








Route::view('about','interface.about')->name('about');
Route::view('blog','interface.blog')->name('blog');



//admin routes with controller
Route::get('admin/users',[MyusersController::class,'all_user'])->name('users');
Route::get('admin/categories',[CategoryController::class,'all_category'])->name('categories');
Route::get('admin/cars',[CarController::class,'all_car'])->name('cars');
Route::get('admin/testimonials',[TestimonController::class,'all_testiomn'])->name('testimonial');
Route::get('admin/adduser',[MyusersController::class,'create'])->name('adduser');
Route::post('admin/adduser',[MyusersController::class,'store'])->name('storeuser');
Route::get('admin/addcategory',[CategoryController::class,'create'])->name('addcategory');
Route::post('admin/addcategory',[CategoryController::class,'store'])->name('storecategory');
Route::get('admin/addcars',[CarController::class,'create'])->name('addcars');
Route::post('admin/addcars',[CarController::class,'store'])->name('storecar');


Route::get('/uploadpage', [PhotoController::class, 'index']);
Route::post('/uploaddata', [PhotoController::class, 'store'])->name('uploadpage');
Route::get('/uploaddata', [ShowPhotoController::class, 'show']);





Route::get('admin/addtestimon',[TestimonController::class,'create'])->name('addtestimon');
Route::post('admin/addtestimon',[TestimonController::class,'store'])->name('storetestimonial');
Route::get('admin/edituser{id}',[MyusersController::class,'edit'])->name('edituser');
Route::put('admin/updateuser{id}',[MyusersController::class,'update'])->name('updateuser');
Route::get('admin/editcategory{id}',[CategoryController::class,'edit'])->name('editcategory');
Route::put('admin/updatecategory{id}',[CategoryController::class,'update'])->name('updatecategory');
Route::get('admin/edittestimon{id}',[TestimonController::class,'edit'])->name('edittestimon');
Route::put('admin/updatetestimon{id}',[TestimonController::class,'update'])->name('updatetestimon');
Route::get('admin/editcar{id}',[CarController::class,'edit'])->name('editcar');
Route::put('admin/updatecar{id}',[CarController::class,'update'])->name('updatecar');
Route::get('admin/deletecate{id}',[CategoryController::class,'destroy'])->name('deletecategory');
Route::get('admin/deletecar{id}',[CarController::class,'destroy'])->name('deletecar');
Route::get('admin/deletetestimonial{id}',[TestimonController::class,'destroy'])->name('deletetestimon');
Route::get('admin/messages',[ContactController::class,'show_contact'])->name('messages');
Route::get('admin/deletemessage{id}',[ContactController::class,'destroy'])->name('deletemessages');
Route::get('admin/showmessages{id}',[ContactController::class,('show_details')])->name('showmessages');






 









Route::middleware('guest')->group(function () {
    Route::get('/signup', [SignupController::class, 'register'])->name('signup');
    Route::post('/signup', [SignupController::class, 'registerPost'])->name('signup');
    Route::get('/admin/login', [SignupController::class, 'login'])->name('signin');
    Route::post('/admin/login', [SignupController::class, 'loginPost'])->name('signin');
    
});
 
Route::group(['middleware' => 'auth'], function () {
    

    // Route::delete('/logout', [SignupController::class, 'destroy'])->name('logout');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');





//photo for test
// Route::get('/uploadpage', [PhotoController::class, 'index']);
// Route::post('/uploaddata', [PhotoController::class, 'store'])->name('uploadpage');
// Route::get('/uploaddata', [ShowPhotoController::class, 'show']);