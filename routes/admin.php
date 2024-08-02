<?php 

use App\Http\Controllers\Admin as Adm;

    Route::middleware(['admin'])
            ->name('admin.')->prefix('admin')
            ->group(function () {
                
        Route::get('/dashboard',function(){
            return view('admin.dashboard');
        })->name('dashboard');
        
//--------------------- Categoris Routes --------------------------
        
        Route::resource('/categories',Adm\CategoryController::class);
        
        //Route::get('/category/{id}/products', [CategoryController::class, 'getCategoryProducts']);

//--------------------- Products Routes -----------------------------
        
        Route::resource('/products', Adm\ProductController::class);
        Route::delete('/products/remove-image/{id}', [App\Http\Controllers\Admin\ProductController::class, 'removeImage'])->name('products.remove-image');

//---------------------  ------------------------
        
    });
