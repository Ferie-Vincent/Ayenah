<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\VisiteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContributionController;
use Spatie\Sitemap\SitemapGenerator;



Route::get('/sitemap.xml', function() {
    SitemapGenerator::create('https://ayenah.ci')
        ->writeToFile(public_path('sitemap.xml'));

    return response()->file(public_path('sitemap.xml'));
});

Route::get('robots.txt', function () {
    $content = "User-agent: *\n";
    $content .= "Disallow: /admin/\n";
    $content .= "Disallow: /login\n";
    $content .= "Disallow: /register\n";
    $content .= "Sitemap: " . url('sitemap.xml') . "\n";

    return response($content, 200)
        ->header('Content-Type', 'text/plain');
});

/**
 * Front
 */
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/events', [FrontController::class, 'events'])->name('events');
Route::get('/faqs', [FrontController::class, 'faqs'])->name('faqs');
Route::get('/event/{id}', [FrontController::class, 'event'])->name('event');
Route::get('/projects', [FrontController::class, 'projects'])->name('projects');
Route::get('/enregistrement', [FrontController::class, 'contribution'])->name('enregistrement');
Route::post('/enregistrement', [ContributionController::class, 'store'])->name('enregistrement.store');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');


/**
 * Projects Controller Admin
 */
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/new', [AdminController::class, 'new'])->name('new');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/visit', [AdminController::class, 'visit'])->name('visit');
    Route::get('/contributors', [AdminController::class, 'contributors'])->name('contributors');
    Route::get('/message', [AdminController::class, 'message'])->name('message');


    Route::resource('projets', ProjetController::class);
    Route::resource('visites', VisiteController::class);
    Route::resource('messages', MessageController::class);

});


Route::get('/download/fiche-technique', function () {
    $path = public_path('front/docs/fiche-technique.docx');
    return response()->download($path);
})->name('fiche-technique.download');
Route::get('/download/fiche-instruction', function () {
    $path = public_path('front/docs/fiche-instruction.docx');
    return response()->download($path);
})->name('fiche-instruction.download');


/**
 * @Route
 *
 */
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
