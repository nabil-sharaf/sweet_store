<?php 



    Route::middleware(['admin'])
            ->name('admin.')->prefix('admin')
            ->group(function () {
        Route::get('/dashboard',function(){
            return view('admin.dashboard');
        })->name('dashboard');
    });
