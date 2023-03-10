<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Livewire\Event\Index as Events;
use App\Http\Livewire\Article\Index as Articles;
use App\Http\Livewire\Article\Create as NewArticle;
use App\Http\Livewire\Article\Edit as EditArticle;
use App\Http\Livewire\Menu\Index as MenuSettings;
use App\Http\Livewire\Slide\Index as Slides;
use App\Http\Livewire\ReadingPlan\Index as ReadingPlans;
use App\Http\Livewire\Contact\Index as Inquiries;

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
Route::get('/bible-reading-plan', [WebsiteController::class, 'bibleReadingPlan'])->name('bible-reading-plan');
Route::get('/groups', [WebsiteController::class, 'groups'])->name('groups');
Route::get('/sermon-audio', [WebsiteController::class, 'sermonAudio'])->name('sermon.audio');
Route::get('/contact-us', [WebsiteController::class, 'contact'])->name('contact');

Route::get('/about-ccc', [WebsiteController::class, 'about'])->name('about');
Route::get('/mission-partners', [WebsiteController::class, 'missionPartners'])->name('mission-partners');

Route::get('/{slug}', [WebsiteController::class, 'showArticle'])->name('article.show');

Route::get('/events/list', [WebsiteController::class, 'events'])->name('events.list');
Route::get('/events/{event}', [WebsiteController::class, 'singleEvent'])->name('event.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::prefix('admin')->group(function() {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/events', Events::class)->name('admin.events');

        // Menus
        Route::get('/menu', MenuSettings::class)->name('admin.menu');

        // Articles
        Route::get('/articles', Articles::class)->name('admin.articles');
        Route::get('/articles/new', NewArticle::class)->name('admin.article.create');
        Route::get('/articles/{article}/edit', EditArticle::class)->name('admin.article.edit');

        // Slides
        Route::get('/slides', Slides::class)->name('admin.slides');

        // Reading Plans
        Route::get('/reading-plans', ReadingPlans::class)->name('admin.readingPlans');

        // Contact
        Route::get('/contact', Inquiries::class)->name('admin.web-inquiries');
    });
});
