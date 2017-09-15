<?php
Route::group(['prefix' => 'patient', 'namespace' => 'Leonardo\PatientManager\Controllers'], function () {
   Route::resource('manager','ManagerController');
});