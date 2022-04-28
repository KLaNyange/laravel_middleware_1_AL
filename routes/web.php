<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use App\Mail\ContactMail;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Newsletter;
use App\Models\Role;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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
    $subjects = Subject::all();
    // dd($contacts);
    return view('pages.contact', compact( "subjects"));
})->name('contact');

Route::get('/email', function () {
    $emails = Email::all();
    $seederMails = User::all();
    return view('pages.emails', compact('emails', 'seederMails'));
})->middleware(['roleCheck'])->name('email');


// Route::get('/email', function(){
//     Mail::to('info@info.com')->send(new ContactMail());
//     return new ContactMail();
// });

Route::post('comment/{id}', [CommentController::class, 'storeComment']);

// Route::get('/newMemberNotif', [NotificationController::class, 'newMember']);
require __DIR__.'/auth.php';

Route::resource('article', ArticleController::class);
Route::resource('user', UserController::class);
Route::resource('contacts', ContactController::class);
Route::resource('newsletter', NewsletterController::class);
Route::resource('comment', CommentController::class);
