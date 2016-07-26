<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/certificaciones/orden/pdf', function(){
    return PDF::loadHTML('<h1>Test</h1>')->stream('download.pdf');
});

Route::get('/', [
    'uses' => 'indexController@index',
    'as' => '/inicio']
);

Route::get('/certificaciones', [
    'uses' => 'certificacionesController@index',
    'as' => '/certificaciones']
);
Route::get('/certificaciones/mas&{order_id}&{count}', [
        'uses' => 'certificacionesController@getBuscar',
        'as' => '/certificaciones/mas']
);
Route::get('/certificaciones/consultar/{id}&{tipo}&{order_id}&{count}', [
        'uses' => 'certificacionesController@preview',
        'as' => '/certificaciones/consultar/vistaPrevia']
);
Route::get('/certificaciones/lista', [
    'uses' => 'certificacionesController@seek',
    'as' => '/certificaciones/lista'
]);
Route::get('/carrito/{order_id}', [
        'uses' => 'certificacionesController@getShopping',
        'as' => '/carrito']
);
Route::post('/carrito/añade','certificacionesController@add',array('before' => 'csrf', function() {

}));
Route::get('/auth_RC_ap', [
    'uses' => 'usersController@index',
    'as' => '/auth'
]);
Route::get('/auth_RC_ap/{user}',[
    'uses' => 'usersController@listOrders',
    'as' => '/auth/list'
]);
Route::post('/auth_RC_ap/resolve','usersController@resolve',array('before' => 'csrf', function() {

}));
Route::post('/auth_RC_ap/toggle','usersController@toggle',array('before' => 'csrf', function() {

}));