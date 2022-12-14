<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FruitiersController;
use App\Http\Controllers\RosesController;
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

Route::get('/', [ContactUsFormController::class, 'index'])->name('index.view');
Route::post('/contact', [ContactUsFormController::class, 'store'])->name('contact.store');

Route::get('/roses', function () {return view('livewire.roses');})->name('roses.view');
Route::get('/roses/nobles-parfumés', function () {return view('livewire.rose.noble-parfum.noblesparfums');})->name('roses.nobles-parfumes.view');
Route::get('/roses/nobles', function () {return view('livewire.rose.noble.nobles');})->name('roses.nobles.view');
Route::get('/roses/fleurs-groupées', function () {return view('livewire.rose.fleur.fleurs');})->name('roses.fleurs.view');
Route::get('/roses/paysagers', function () {return view('livewire.rose.paysager.paysagers');})->name('roses.paysagers.view');
Route::get('/roses/grimpants', function () {return view('livewire.rose.grimpant.grimpants');})->name('roses.grimpants.view');
Route::get('/roses/parfumés', function () {return view('livewire.rose.parfume.parfumes');})->name('roses.parfumes.view');
Route::get('/roses/tiges', function () {return view('livewire.rose.tige.tiges');})->name('roses.tiges.view');

Route::get('/fruitier', function () {return view('livewire.fruitiers');})->name('fruitiers.view');
Route::get('/fruitier/pommiers', function () {return view('livewire.fruitier.pommier.pommiers');})->name('fruitiers.pommiers.view');
Route::get('/fruitier/pommiers-à-cidre', function () {return view('livewire.fruitier.pommier-cidre.pommiers-cidre');})->name('fruitiers.pommiers-cidre.view');
Route::get('/fruitier/poiriers', function () {return view('livewire.fruitier.poirier.poiriers');})->name('fruitiers.poiriers.view');
Route::get('/fruitier/pechers', function () {return view('livewire.fruitier.pecher.pechers');})->name('fruitiers.pecher.view');
Route::get('/fruitier/cerisiers', function () {return view('livewire.fruitier.cerisier.cerisiers');})->name('fruitiers.cerisiers.view');
Route::get('/fruitier/amandiers', function () {return view('livewire.fruitier.amandier.amandiers');})->name('fruitiers.amandiers.view');
Route::get('/fruitier/abricotiers', function () {return view('livewire.fruitier.abricotier.abricotiers');})->name('fruitiers.abricotiers.view');
Route::get('/fruitier/pruniers', function () {return view('livewire.fruitier.prunier.pruniers');})->name('fruitiers.pruniers.view');


// Route::get('/fruitiers', [Controller::class, 'showFruitiers'])->name('fruitiers.view');
// Route::post('/fruitiers/search', [Controller::class, 'searchFruitiers'])->name('fruitiers.search');
Route::get('/mentions-légales', [Controller::class, 'cgu'])->name('cgu');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('admin/mail', [AdminController::class, 'mail'])->middleware(['auth'])->name('mail');
Route::get('admin/roses', [RosesController::class, 'index'])->middleware(['auth'])->name('roses');
Route::get('admin/fruitier', [FruitiersController::class, 'index'])->middleware(['auth'])->name('fruitier');
Route::get('admin/text_accueil', [ContactUsFormController::class, 'text'])->middleware(['auth'])->name('text');

Route::post('admin/text_accueil/propos/edit', [ContactUsFormController::class, 'editpropos'])->middleware(['auth'])->name('editpropos');
Route::post('admin/text_accueil/annonce/edit', [ContactUsFormController::class, 'editannonce'])->middleware(['auth'])->name('editannonce');


Route::get('admin/roses/edit/view/{id}', [RosesController::class, 'showedit'])->name('admin.roses.edit.view')->middleware('auth');
Route::post('admin/roses/edit/{id}', [RosesController::class, 'edit'])->name('admin.roses.edit')->middleware('auth');
Route::get('admin/roses/delete/{id}', [RosesController::class, 'delete'])->name('admin.roses.delete')->middleware('auth');

Route::get('admin/roses/new-1', [RosesController::class, 'createStep1'])->middleware(['auth'])->name('rose.create');
Route::post('admin/roses/new-post-1', [RosesController::class, 'PostcreateStep1'])->middleware(['auth'])->name('rose.post.step.1');
Route::get('admin/roses/new-2', [RosesController::class, 'createStep2'])->middleware(['auth'])->name('rose.create.step.2');
Route::post('admin/roses/new-post-2', [RosesController::class, 'PostcreateStep2'])->middleware(['auth'])->name('rose.post.step.2');
Route::get('admin/roses/new-3', [RosesController::class, 'createStep3'])->middleware(['auth'])->name('rose.create.step.3');
Route::post('admin/roses/new-post-3', [RosesController::class, 'PostcreateStep3'])->middleware(['auth'])->name('rose.post.step.3');
Route::post('admin/roses/remove-image', [RosesController::class, 'removeImage'])->middleware(['auth'])->name('remove.image');
Route::post('admin/roses/store', [RosesController::class, 'store'])->middleware(['auth'])->name('store');

Route::get('admin/fruitiers/edit/view/{id}', [FruitiersController::class, 'showedit'])->name('admin.fruitier.edit.view')->middleware('auth');
Route::post('admin/fruitiers/edit/{id}', [FruitiersController::class, 'edit'])->name('admin.fruitier.edit')->middleware('auth');
Route::get('admin/fruitiers/delete/{id}', [FruitiersController::class, 'delete'])->name('admin.fruitier.delete')->middleware('auth');

Route::get('admin/fruitiers/new-1', [FruitiersController::class, 'createStep1'])->middleware(['auth'])->name('fruitier.create');
Route::post('admin/fruitiers/new-post-1', [FruitiersController::class, 'PostcreateStep1'])->middleware(['auth'])->name('fruitier.post.step.1');
Route::get('admin/fruitiers/new-2', [FruitiersController::class, 'createStep2'])->middleware(['auth'])->name('fruitier.create.step.2');
Route::post('admin/fruitiers/new-post-2', [FruitiersController::class, 'PostcreateStep2'])->middleware(['auth'])->name('fruitier.post.step.2');
Route::get('admin/fruitiers/new-3', [FruitiersController::class, 'createStep3'])->middleware(['auth'])->name('fruitier.create.step.3');
Route::post('admin/fruitiers/new-post-3', [FruitiersController::class, 'PostcreateStep3'])->middleware(['auth'])->name('fruitier.post.step.3');
Route::post('admin/fruitiers/remove-image', [FruitiersController::class, 'removeImage'])->middleware(['auth'])->name('remove.fruitier.image');
Route::post('admin/fruitiers/store', [FruitiersController::class, 'store'])->middleware(['auth'])->name('fruitier.store');

require __DIR__ . '/auth.php';
