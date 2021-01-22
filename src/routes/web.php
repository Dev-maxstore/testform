<?php
Route::group(['namespace' => 'Maxstore\Testform\Http\Controllers', 'middleware' => ['web']], function() {
    Route::get('test', 'TestFormController@index');
    Route::post('test', 'TestFormController@sendMail')->name('test-form');
});
