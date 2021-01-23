<?php

Route::any('/ckfinder/connector', 'Liyuu\AdminCK\Controllers\CKFinderController@requestAction')
    ->name('ckfinder-connector');

Route::any('/ckfinder/browser', 'Liyuu\AdminCK\Controllers\CKFinderController@browserAction')
    ->name('ckfinder-browser');