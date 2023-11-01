<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\AddChaptersController;
use App\Http\Controllers\ListAllChaptersController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ListAllChaptersHomeController;
use App\Http\Controllers\ChapterPriceUpdateController;
use App\Http\Controllers\SubjectAllChapterController;
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

Route::get('/', [ListAllChaptersHomeController::class, 'listTopChapters'])->name('home');


Route::get('/browse', function () {
    return view('browse');
})->name('browse');

Route::get('/details', function () {
    return view('details');
})->name('details');


//Protected Routing
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Handle login form submission

Route::get('/registration', [RegistrationController::class, 'showRegistrationForm'])->name('registration'); // Display registration form
Route::post('/registration', [RegistrationController::class, 'register'])->name('registration.register'); // Handle registration form submission


Route::get('/success', function () {
    return view('success');
})->name('success');



//|||||||||||||| Admin Panel |||||||||||||||||\\


Route::get('/admin', [UsersController::class, 'ListProfile'])->name('admin');
Route::get('/admin/users', [UsersController::class, 'ListProfile'])->name('admin.users');
Route::get('/admin/subjects', [SubjectsController::class, 'ListSubjects'])->name('admin.subjects');
Route::get('/admin/addChapters', [AddChaptersController::class, 'addChapters'])->name('admin.addChapters');
Route::post('/admin/addChapters', [AddChaptersController::class, 'submitChapters'])->name('admin.addChapters');

Route::get('/admin/listAll', [ListAllChaptersController::class, 'listAllChapters'])->name('admin.listAll');
Route::get('/admin/ListInOrganic', [ListAllChaptersController::class, 'ListInOrganic'])->name('admin.ListInOrganic');
Route::get('/admin/ListOrganic', [ListAllChaptersController::class, 'ListOrganic'])->name('admin.ListOrganic');
Route::get('/admin/Physics', [ListAllChaptersController::class, 'Physics'])->name('admin.Physics');
Route::get('/admin/Physical', [ListAllChaptersController::class, 'Physical'])->name('admin.Physical');
Route::get('/admin/Maths', [ListAllChaptersController::class, 'Maths'])->name('admin.Maths');

// Deleting Route
Route::delete('/admin/chapters/delete/{chapterId}', [ChapterController::class, 'deleteChapter'])->name('admin.deleteChapter');

// Updating Route
Route::put('/admin/update-chapter-amount/{chapterId}', [ChapterPriceUpdateController::class, 'updateAmount'])->name('admin.updateAmount');


//|||||||||||||| User Panel |||||||||||||||||\\

Route::get('/streams/{subject_name}', [SubjectAllChapterController::class, 'showAllChapters'])->name('streams.subject');


Route::get('/streams', function () {
    return view('browse');
})->name('browse');
