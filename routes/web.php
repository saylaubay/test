<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\InputController;
use App\Models\Office;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
//    $list = Office::select("offices.*")->join('types', 'types.id', '=','offices.type_id');
//    $list = Office::select("offices.*")->join('types');
    $list = Office::with('district')->where('district_id', '=', 1)->get();
//    $list = Office::with('district')->join('')->where('district_id', '=', 1)->get();
//    $list = Office::with('district')->get();
    return $list;
//    return "sd";
});

Route::resources([
    'input'=> InputController::class,
]);

Route::get('/oop', [Controller::class, 'oop']);
