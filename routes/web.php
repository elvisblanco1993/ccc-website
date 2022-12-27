<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Livewire\Event\Index as Events;

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

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('/bible', [WebsiteController::class, 'bible'])->name('bible');
Route::get('/knowing-god', [WebsiteController::class, 'knowingGod'])->name('knowing-god');
Route::get('/groups', [WebsiteController::class, 'groups'])->name('groups');
Route::get('/sermon-audio', [WebsiteController::class, 'sermonAudio'])->name('sermon.audio');
Route::get('/about-ccc', [WebsiteController::class, 'about'])->name('about');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');

Route::get('/events/list', [WebsiteController::class, 'events'])->name('events.list');
Route::get('/events/{event}', [WebsiteController::class, 'singleEvent'])->name('event.show');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/events', Events::class)->name('events');
});
