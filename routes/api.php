<?php

use Illuminate\Http\Request;
use App\Http\Controllers\BreakdownController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreativeListController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SalesReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/analitycs', function () {
//     return redirect('/analitycs/login');
// });

// Route::get('/analitycs/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'show']);

// //Members 
Route::get('/members', [RegistrationController::class, 'index_api']);
// Route::get('/analitycs/members/edit/{id}', [RegistrationController::class, 'show']);
// Route::get('/analitycs/members/show/{id}', [RegistrationController::class, 'show']);
Route::get('/members/create', [RegistrationController::class, 'store_api']);
Route::get('/roles', [RegistrationController::class, 'roles']);
// Route::post('/analitycs/members/update', [RegistrationController::class, 'update']);
// Route::get('/analitycs/members/delete/{id}', [RegistrationController::class, 'delete']);
// Route::post('/analitycs/registration', [RegistrationController::class, 'store']);

// Route::get('/analitycs/home', [HomeController::class, 'index']);

// //download Sales Report
// Route::get('/analitycs/sales/pdf/{from?}/{to?}', [SalesReportController::class, 'pdf_download']);



Route::get('/demands', [DemandController::class, 'demandapi']);
Route::get('/competitor', [DemandController::class, 'competitorapi']);
Route::get('/sales_report', [SalesReportController::class, 'sales_report_api']);

// //Breakdown Report



// //Logout
// Route::get('/analitycs/logout', [RegistrationController::class, 'logout']);

Route::get("/product", [ProductController::class, 'show']);
// Route::post('/analitycs/search', [ProductController::class, 'create']);

Route::get('/inventory', [InventoryController::class, 'show']);
// Route::post('/analitycs/inventory/search', [InventoryController::class, 'create']);

Route::get('/sales', [SalesReportController::class, 'show']);
// Route::post('/analitycs/sales/search', [SalesReportController::class, 'search']);

Route::get('/breakdown', [BreakdownController::class, 'show']);

// Route::get('/analitycs/profile/show', [ProfileController::class, 'index']);
// Route::get('/analitycs/create-creative', [CreativeListController::class, 'create']);
// Route::post('/analitycs/create-creative', [CreativeListController::class, 'store']);

// Route::get('/analitycs/contact', [ContactController::class, 'index']);
// Route::post('/analitycs/contact/create', [ContactController::class, 'store']);


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

