<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class,'home'])->name('home');
Route::get('/categoria/{category}',[PublicController::class,'categoryShow'])->name('categoryShow');
Route::get('/dettaglio/annuncio/{announcement}',[AnnouncementController::class,'showAnnouncement'])->name('announcements.show');
Route::get('/annunci/create', [AnnouncementController::class,'create'])->middleware('auth')->name('create');
Route::get('/tutti/annunci',[AnnouncementController::class,'index'])->name('announcements.index');
Route::get('/profile', [PublicController::class, 'index'])->name('profile.profile');
Route::delete('/profile/delete',[PublicController::class, 'destroy'])->name('profile.delete');