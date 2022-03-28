<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Livewire\Admin\Category\CategoryForm;
use App\Http\Livewire\Admin\Category\CategoryList;
use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])
        ->name("dashboard.index");
    Route::get('/categories', CategoryList::class)->name('categories.index');
    Route::get('/categories/form/{category?}', CategoryForm::class)->name('categories.form');
});
