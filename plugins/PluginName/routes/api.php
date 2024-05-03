<?php

Route::group(['prefix' => 'api', 'middleware' => ['auth:api']], function () {
    # V1
    Route::namespace('Plugins\PluginName\Controllers\API\V1')->prefix('v1')->name('api.v1.')->group(function () {
        #*** START: Lead ***#
        Route::apiResource('leads', 'LeadController');
        #*** END: Lead ***#

        #*** START: Customer ***#
        Route::apiResource('customers', 'CustomerController');
        #*** END: Customer ***#
    });
});
