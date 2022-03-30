<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use App\Http\Livewire\Admin\User\UserForm;
use App\Http\Livewire\Admin\User\UserList;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Feature\FeatureForm;
use App\Http\Livewire\Admin\Feature\FeatureList;
use App\Http\Livewire\Admin\Category\CategoryForm;
use App\Http\Livewire\Admin\Category\CategoryList;
use App\Http\Controllers\Admin\DashboardController;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])
        ->name("dashboard.index");

    // Categories
    Route::get('/categories', CategoryList::class)
        ->name('categories.index');
    Route::get('/categories/form/{category?}', CategoryForm::class)
        ->name('categories.form');

    // Features
    Route::get('/features', FeatureList::class)
        ->name('features.index');
    Route::get('/features/form/{feature?}', FeatureForm::class)
        ->name('features.form');

    // User
    Route::get('/users', UserList::class)
        ->name('users.index');
    Route::get('/users/form/{user?}', UserForm::class)
        ->name('users.form');
});
