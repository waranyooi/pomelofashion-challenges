<?php

//...

use App\Http\Controllers\SiteController;
use App\Http\Controllers\PageController;

Route::get("data", [SiteController::class, "index"]);
Route::get("pagination", [PageController::class, "index"]);
Route::view('/part2', 'part2', [PageController::class, "index"]);
// route::get('/part2', function () {
//     return view('part2');
// });

//...
