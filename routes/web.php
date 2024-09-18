<?php

use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HowItWorksController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PricingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.auth');
// });
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Route::get('/dashboard', [App\Http\Controllers\DashBoardController::class, 'dashboard'])->name('dashboard');

// Hero Section start

// Hero routes
Route::get('/hero/create', [HeroController::class, 'create'])->name('create_hero');
Route::post('/hero', [HeroController::class, 'store'])->name('store_hero');
Route::get('/hero', [HeroController::class, 'index'])->name('view_hero');
Route::get('/hero/{id}/edit', [HeroController::class, 'edit'])->name('edit_hero');
Route::put('/hero/{id}', [HeroController::class, 'update'])->name('update_hero');
Route::delete('/hero/{id}', [HeroController::class, 'destroy'])->name('delete_hero');

// front end view
Route::get('/', [HeroController::class, 'getHeroData'])->name('home');
Route::get('/', [CaseStudyController::class, 'getCaseStudyData'])->name('home');



Route::get('/home', [HomeController::class, 'index'])->name('home');

// CRUD routes for Hero
Route::resource('heroes', HeroController::class);

// CRUD routes for Case Study
Route::resource('case_studies', CaseStudyController::class);


// Hero Section  END
// CASE STUDIES START

// Route to show the form to create a new case study
Route::get('/case_studies/create', [CaseStudyController::class, 'create'])->name('case_studies.create');

// Route to store a new case study
Route::post('/case_studies', [CaseStudyController::class, 'store'])->name('case_studies.store');

// Route to view all case studies
Route::get('/case_studies', [CaseStudyController::class, 'index'])->name('case_studies.index');

// Route to show the form for editing a case study
Route::get('/case_studies/edit/{id}', [CaseStudyController::class, 'edit'])->name('case_studies.edit');

// Route to update the case study
Route::put('/case_studies/{id}', [CaseStudyController::class, 'update'])->name('case_studies.update');

// Route to delete a case study
Route::delete('/case_studies/{id}', [CaseStudyController::class, 'destroy'])->name('case_studies.destroy');



// CASE STUDIES END

//How it works start

// Route to display the form for creating a new How It Works entry
Route::get('how-it-works/create', [HowItWorksController::class, 'create'])->name('insert_how_it_works');

// Route to handle the form submission for storing a new How It Works entry
Route::post('how-it-works/store', [HowItWorksController::class, 'store'])->name('store_how_it_works');

// Route to display all How It Works entries
Route::get('how-it-works', [HowItWorksController::class, 'index'])->name('view_how_it_works');

// Route to display the form for editing a specific How It Works entry
Route::get('how-it-works/edit/{id}', [HowItWorksController::class, 'edit'])->name('edit_how_it_works');

// Route to handle the form submission for updating a How It Works entry
Route::put('how-it-works/update/{id}', [HowItWorksController::class, 'update'])->name('update_how_it_works');

// Route to handle the deletion of a How It Works entry
Route::delete('how-it-works/delete/{id}', [HowItWorksController::class, 'destroy'])->name('delete_how_it_works');
//How it works END


//Term$Conditions
Route::get('/termsandcondition', [App\Http\Controllers\TermsAndConditionController::class, 'termsandcondition'])->name('termsandcondition');
Route::get('/viewtermsandcondition', [App\Http\Controllers\TermsAndConditionController::class, 'viewtermsandcondition'])->name('viewtermsandcondition');
// Pricing
Route::prefix('pricing')->group(function () {
    Route::get('create', [PricingController::class, 'create'])->name('insert_pricing');
    Route::post('store', [PricingController::class, 'store'])->name('store_pricing');
    Route::get('view', [PricingController::class, 'index'])->name('view_pricing');
    Route::get('edit/{id}', [PricingController::class, 'edit'])->name('edit_pricing');
    Route::put('update/{id}', [PricingController::class, 'update'])->name('update_pricing');
    Route::delete('delete/{id}', [PricingController::class, 'destroy'])->name('delete_pricing');
});

// Pricing End
// About Us
Route::get('/insertaboutus', [App\Http\Controllers\AboutUsController::class, 'insertaboutus'])->name('insertaboutus');
Route::get('/viewaboutus', [App\Http\Controllers\AboutUsController::class, 'viewaboutus'])->name('viewaboutus');
// Tesimonials
Route::get('/viewtestimonial', [App\Http\Controllers\TestimonialController::class, 'viewtestimonial'])->name('viewtestimonial');
Route::get('/inserttestimonial', [App\Http\Controllers\TestimonialController::class, 'inserttestimonial'])->name('inserttestimonial');
// Partners

Route::resource('partners', PartnerController::class);

// Route::get('/partners/create', [PartnerController::class, 'create'])->name('create');
// Route::post('/partners/edit', [PartnerController::class, 'store'])->name('edit');
// Route::get('/partners/index', [PartnerController::class, 'index'])->name('index');

// Partners routes using resource method
Route::resource('partners', PartnerController::class);

// Insert case study
Route::get('/case-studies/insert', [CaseStudyController::class, 'create'])->name('insert_case_study');
Route::post('/case-studies/insert', [CaseStudyController::class, 'store']);
Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('view_case_studies');
Route::get('/hero/create', [CaseStudyController::class, 'create'])->name('create_');
