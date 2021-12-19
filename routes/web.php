<?php

use App\Http\Controllers\RoleAndPermission\ExportPermissionController;
use App\Http\Controllers\RoleAndPermission\ExportRoleController;
use App\Http\Controllers\RoleAndPermission\ImportPermissionController;
use App\Http\Controllers\RoleAndPermission\ImportRoleController;
use App\Http\Controllers\RoleAndPermission\PermissionController;
use App\Http\Controllers\RoleAndPermission\RoleController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
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
    return view('auth/login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('home', ['users' => User::get(),]);
    });
    Route::resource('user', UserController::class);
    Route::post('import', [UserController::class, 'import'])->name('user.import');
    Route::get('export', [UserController::class, 'export'])->name('user.export');
    Route::post('user/filter', [UserController::class, 'filter'])->name('user.filter');
    //role
    Route::resource('role', RoleController::class);
    Route::get('role/export', ExportRoleController::class)->name('role.export');
    Route::post('role/import', ImportRoleController::class)->name('role.import');
    //permission
    Route::resource('permission', PermissionController::class);
    Route::get('permission/export', ExportPermissionController::class)->name('permission.export');
    Route::post('permission/import', ImportPermissionController::class)->name('permission.import');
});
