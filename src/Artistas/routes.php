<?php

Route::group(['namespace' => 'tcazzeri\PagSeguro'], function () {
    Route::get('/pagseguro/session', 'PagSeguroController@session');
    Route::get('/pagseguro/javascript', 'PagSeguroController@javascript');
});
