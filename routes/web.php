<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChitietController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    $query = DB::table('products')
    ->select('id', 'TenSP', 'image', 'Gia');
    $data = $query->get();
    return view('test', ['data' => $data]);
    
    })->name('test');;
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/gioi-thieu', function () {
    return view('gioi-thieu');
    });
    Route::get('/lien-he', function () {
    return view('lien-he');
    });
    Route::get('/dich-vu', function () {
    return view('dich-vu');
    });
Route::get('/tin-tuc', function() {
    $query = DB::table('tin')
    ->select('id', 'tenTin', 'tomTat', 'ngayDang', 'idLT')
    ->orderBy('ngayDang', 'desc')
    ->limit(10);
    $data = $query->get();

    return view('tin-tuc', ['data' => $data]);
})->name('tin-tuc');
Route::get('/cac-tin-cua-loai/{id}', function($id) {
    $query = DB::table('tin')
    ->select('id', 'tenTin', 'tomTat', 'ngayDang', 'idLT')
    ->where('idLT', '=', $id)
    ->orderBy('ngayDang', 'desc')
    ->limit(10);
    $data = $query->get();

    return view('cac-tin-cua-loai', ['data' => $data]);
})->name('tin-cua-loai');
Route::get('/sanpham', function(){
    $query = DB::table('products')
    ->select('id', 'TenSP', 'image', 'Gia');
    $data = $query->get();
    return view('sanpham', ['data' => $data]);
})->name('sanpham');   
Route::resource('posts', PostController::class);
Route::resource('products', ProductController::class);
Route::get('chitiet/{id}', [ChitietController::class,'detail'])->name('chitiet');