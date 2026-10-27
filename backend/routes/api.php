<?php

use Illuminate\Support\Facades\Route;


Route::prefix("v1")->group(function () {

    Route::get(
        '/ping',
        fn() => response()->json([
            "status" => "ok",
            "message" => "pong"
        ])
    );

    require app_path("Modules/Catalog/Routes/api.php");

});