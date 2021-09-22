<?php

use App\Http\Controllers\BooksController;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Redirect;
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
});
Route::get('/about', function () {
    return "Hello world";
});
Route::get('book', [BooksController::class, 'index']);
Route::any('book/{id}', function ($id) {
    if ($id == 5) {
        $detail = [
            'name' => 'learn laravel',
            'writter' => 'Nurujamman milon'
        ];
        return view('book.detail')->with($detail);
    } else {
        return Redirect::to('about');
    }
});
Route::any('json/response', function () {
    return response()->json([
        'name' => 'kanon',
        'url' => 'http//kanon.im'
    ], 200);
});
Route::any('download', function () {
    return redirect()->away('https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf');
});
