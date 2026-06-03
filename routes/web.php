<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DemandeFinancementController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjetController;
use App\Http\Controllers\Admin\VisiteController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\EnregistrementController;
use App\Http\Controllers\Admin\EnregistrementController as AdminEnregistrementController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PageContentController;
use Spatie\Sitemap\SitemapGenerator;



Route::get('/sitemap.xml', function() {
    SitemapGenerator::create(config('app.url', 'https://ayenah.ci'))
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
 * Front — rate limiting global sur les GET (60 req/min par IP)
 */
Route::middleware('throttle:60,1')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('home');
    Route::get('/a-propos', [FrontController::class, 'about'])->name('about');
    Route::get('/actualites', [FrontController::class, 'events'])->name('events');
    Route::get('/foire-aux-questions', [FrontController::class, 'faqs'])->name('faqs');
    Route::get('/actualite/{id}', [FrontController::class, 'event'])->name('event');
    Route::get('/projets-soutenus', [FrontController::class, 'projects'])->name('projects');
    Route::get('/contribution', [FrontController::class, 'contribution'])->name('contribution');
    Route::get('/enregistrement', [EnregistrementController::class, 'create'])->name('enregistrement');
    Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
    Route::get('/programme', [FrontController::class, 'programme'])->name('programme');
    Route::get('/piliers', [FrontController::class, 'piliers'])->name('piliers');
    Route::get('/eligibilite', [FrontController::class, 'eligibilite'])->name('eligibilite');
    Route::get('/soumettre-projet', [FrontController::class, 'soumettreProjet'])->name('soumettre-projet');
    Route::get('/financement', [FrontController::class, 'financement'])->name('financement');
});

Route::post('/contribution', [ContributionController::class, 'store'])->middleware('throttle:5,1')->name('contribution.store');
Route::post('/enregistrement', [EnregistrementController::class, 'store'])->middleware('throttle:3,1')->name('enregistrement.store');
Route::post('/contact', [MessageController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');

Route::get('/demande-financement', [DemandeFinancementController::class, 'show'])->name('demande-financement')->middleware('throttle:30,1');


/**
 * Projects Controller Admin
 */
/**
 * Profil utilisateur (auth uniquement, pas besoin d'être admin)
 */
Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * Backoffice Admin (auth + admin)
 */
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/visit', [AdminController::class, 'visit'])->name('visit');
    Route::get('/message', [AdminController::class, 'message'])->name('message');
    Route::get('/activity-log', [AdminController::class, 'activityLog'])->name('admin.activity-log');

    Route::resource('projets', ProjetController::class)->only(['index', 'store', 'update', 'destroy'])->names([
        'index'   => 'admin.projets.index',
        'store'   => 'projets.store',
        'update'  => 'projets.update',
        'destroy' => 'projets.destroy',
    ]);
    Route::resource('visites', VisiteController::class)->except(['show']);
    Route::resource('messages', MessageController::class);

    // Inscriptions
    Route::get('/enregistrements', [AdminEnregistrementController::class, 'index'])->name('admin.enregistrements.index');
    Route::post('/enregistrements/{id}/validate', [AdminEnregistrementController::class, 'validate'])->name('admin.enregistrements.validate');
    Route::delete('/enregistrements/{id}', [AdminEnregistrementController::class, 'destroy'])->name('admin.enregistrements.destroy');

    // FAQ
    Route::resource('admin/faqs', FaqController::class)->except(['create', 'edit', 'show'])->names([
        'index' => 'admin.faqs.index',
        'store' => 'admin.faqs.store',
        'update' => 'admin.faqs.update',
        'destroy' => 'admin.faqs.destroy',
    ])->parameters(['faqs' => 'faq']);

    // Paramètres
    Route::get('/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('admin.settings.update');

    // Pages (CMS)
    Route::get('/pages', [PageContentController::class, 'index'])->name('admin.pages.index');
    Route::get('/pages/{page}', [PageContentController::class, 'edit'])->name('admin.pages.edit');
    Route::put('/pages/{page}', [PageContentController::class, 'update'])->name('admin.pages.update');
});


Route::get('/telecharger/fiche-technique', function () {
    $path = public_path('front/assets/docs/fiche-technique.docx');
    return response()->download($path);
})->name('fiche-technique.download');
Route::get('/telecharger/fiche-instruction', function () {
    $path = public_path('front/assets/docs/fiche-instruction.docx');
    return response()->download($path);
})->name('fiche-instruction.download');


require __DIR__.'/auth.php';
