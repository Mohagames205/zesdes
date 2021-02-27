<?php

use App\Http\Controllers\UploadController;
use App\Http\Livewire\AdminComponent;
use App\Http\Livewire\QueueComponent;
use App\Http\Livewire\UploadCompleteComponent;
use App\Http\Livewire\UploadComponent;
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
})->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//Route::middleware(['auth:sanctum', 'verified'])->get("/upload", [UploadController::class, "send"]);
Route::middleware(['auth:sanctum', 'verified'])->post("/upload", [UploadController::class, "init"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/upload', UploadComponent::class);
Route::middleware(["auth:sanctum", "verified"])->get('/upload/done', UploadCompleteComponent::class)->name('uploadcomplete');
Route::middleware(['auth:sanctum', 'verified'])->get('/queue', QueueComponent::class)->name("queue");

Route::middleware(['ismod'])->get('/mod', AdminComponent::class);
