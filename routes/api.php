Route::prefix('v1')->group(function () {
    Route::apiResource('categories', \App\Http\Controllers\API\CategoryController::class);
    Route::apiResource('products', \App\Http\Controllers\API\ProductController::class);
});
