<?php

// use App\Models\Book;
use App\Models\Book;
use App\Models\User;
// use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\DashboardPostController;

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
    return view('dashboard', [
        "title" => "Home"
    ]);
})->middleware('auth');

Route::get('/dashboard/schedule', function () {
    $books = Book::latest();

    if (request('search')) {
        $books->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('no_hp', 'like', '%' . request('search') . '%')
            ->orWhere('lapangan', 'like', '%' . request('search') . '%')
            ->orWhere('tanggal', 'like', '%' . request('search') . '%')
            ->orWhere('jam', 'like', '%' . request('search') . '%')
            ->orWhere('uang_muka', 'like', '%' . request('search') . '%');
    }

    return view('dashboard.schedule', [
        "title" => "Daftar Penyewaan",
        'books' => Book::all(),
        "books" => $books->get()
    ]);
});

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::get('/book', function () {
//     return view('book', [
//         "title" => "Tambah Sewa"
//     ]);
// });

Route::get('/recap', function () {
    return view('recap', [
        "title" => "Rekapitulasi"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/book', [BookController::class, 'store']);

// Route::resource('/create', BookController::class)->middleware('auth');

// Route::get('/schedule', [BookController::class, 'index'])->middleware('auth');
// Route::get('/create', [BookController::class, 'create'])->middleware('auth');
// Route::post('/store', [BookController::class, 'store'])->middleware('auth');

// Route::resource('/schedule', ScheduleController::class)->middleware('auth');

// Route::get('/dashboard/posts/{id}', [DashboardPostController::class, 'show']);