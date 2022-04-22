<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use App\Mail\ContactMail;
use App\Models\Article;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// ces deux middlewares font la même chose mais dans l'exo on a demandé un nouveau middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['roleCheck'])->name('dashboard');

Route::get('/articles', function () {
    $articles = Article::all();
    return view('pages.articles', compact('articles'));
})->middleware(['isConnected'])->name('articles');
//

Route::get('/users', function () {
    $roles = Role::all();
    $users = User::all();
    return view('pages.users', compact('roles', "users"));
})->middleware(['userAccess'])->name('users');

Route::get('/contact', function () {
    $users = User::all();
    return view('pages.contact', compact( "users"));
})->middleware(['isConnected'])->name('contact');


// Route::get('/email', function(){
//     Mail::to('info@info.com')->send(new ContactMail());
//     return new ContactMail();
// });

// Route::get('/newMemberNotif', [NotificationController::class, 'newMember']);
require __DIR__.'/auth.php';

Route::resource('article', ArticleController::class);
Route::resource('user', UserController::class);
Route::resource('contacts', ContactController::class);
