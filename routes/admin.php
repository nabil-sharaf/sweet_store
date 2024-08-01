<?php 



    Route::middleware(['admin'])
            ->name('admin.')->prefix('admin')
            ->group(function () {
                
        Route::get('/dashboard',function(){
            return view('admin.dashboard');
        })->name('dashboard');
        
//--------------------- Categoris Routes --------------------------
        
        Route::resource('/categories',App\Http\Controllers\Admin\CategoryController::class);
        
        //Route::get('/category/{id}/products', [CategoryController::class, 'getCategoryProducts']);

//--------------------- Products Routes -----------------------------
        
        Route::resource('/products', App\Http\Controllers\Admin\ProductController::class);
    
//---------------------  ------------------------
        
    });
