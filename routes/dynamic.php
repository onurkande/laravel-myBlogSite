<?php
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\CategoryController;
    
    Route::prefix('dashboard/dynamic-edit')->group(function () {
        Route::middleware(['auth','isAdmin'])->group(function () {
            Route::get('/', [AdminController::class, 'index']);

            Route::get('categories', [CategoryController::class, 'index']);
            Route::get('add-category', [CategoryController::class, 'add']);
            Route::post('insert-category', [CategoryController::class, 'store']);
            Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
            Route::put('update-category/{id}', [CategoryController::class, 'update']);
            Route::get('delete-category/{id}', [CategoryController::class, 'delete']);
        });
    });
