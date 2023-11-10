<?php

    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\AdminController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\FooterController;
    use App\Http\Controllers\HeaderController;
    use App\Http\Controllers\SliderController;
    use App\Http\Controllers\AboutController;

    Route::prefix('dashboard/dynamic-edit')->group(function () {
        Route::middleware(['auth','isAdmin'])->group(function () {
            Route::get('/', [AdminController::class, 'index']);

            Route::get('categories', [CategoryController::class, 'index']);
            Route::get('add-category', [CategoryController::class, 'add']);
            Route::post('insert-category', [CategoryController::class, 'store']);
            Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
            Route::put('update-category/{id}', [CategoryController::class, 'update']);
            Route::get('delete-category/{id}', [CategoryController::class, 'delete']);

            Route::get('blogs', [BlogController::class, 'index']);
            Route::get('add-blog', [BlogController::class, 'add']);
            Route::post('insert-blog', [BlogController::class, 'store'])->name('ckeditor.upload');
            Route::get('edit-blog/{id}', [BlogController::class, 'edit']);
            Route::put('update-blog/{id}', [BlogController::class, 'update']);
            Route::get('delete-blog/{id}', [BlogController::class, 'delete']);

            Route::get('slider', [SliderController::class, 'index']);
            Route::post('insert-slider', [SliderController::class, 'store']);
            Route::put('update-slider/{id}', [SliderController::class, 'update']);
            
            Route::get('header', [HeaderController::class, 'index']);
            Route::post('insert-header', [HeaderController::class, 'store']);
            Route::post('update-header/{id}', [HeaderController::class, 'update']);
            Route::get('HeaderRows-delete/{id}', [HeaderController::class, 'delete']);
            Route::get('HeaderRowsIcons-delete/{id}', [HeaderController::class, 'deleteIcon']);

            Route::get('footer', [FooterController::class, 'index']);
            Route::post('insert-footer', [FooterController::class, 'store']);
            Route::post('update-footer/{id}', [FooterController::class, 'update']);
            Route::get('FooterRows-delete/{id}', [FooterController::class, 'delete']);

            Route::get('about', [AboutController::class, 'index']);
            Route::post('insert-about', [AboutController::class, 'store']);
            Route::post('update-about/{id}', [AboutController::class, 'update']);
            Route::get('AboutRows-delete/{id}', [AboutController::class, 'delete']);
            Route::get('deleteAll-about/{id}', [AboutController::class, 'deleteAbout']);
        });
    });
