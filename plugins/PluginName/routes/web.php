<?php

Route::namespace('Plugins\PluginName\Controllers\Web')->prefix('admin')->name('admin.')->group(function () {
    #*** START: Lead ***#
    Route::resource('leads', 'LeadController')->except([
        'store', 'update', 'destroy'
    ]);
    #*** END: Lead ***#

    #*** START: Customer ***#
    Route::resource('customers', 'CustomerController')->except([
        'store', 'update', 'destroy'
    ]);
});
