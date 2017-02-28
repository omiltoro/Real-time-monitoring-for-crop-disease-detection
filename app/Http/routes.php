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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('getstarted', 'HomeController@getstarted');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('sensor', array(
    'as' => 'sensor',
    'uses' => 'SensorController@index',
));

Route::resource('sensor', 'SensorController');

Route::get('sensor/delete/{unique_id}', 'SensorController@delete');

Route::get('sensor/api/{unique_id}', 'SensorController@apiShow');

Route::get('sensoredit', 'SensorController@edit');

Route::get('monitor/{unique_id}', 'SensorController@monitor');

Route::get('update', 'DataController@update');

Route::get('data/{unique_id}/{type}', 'DataController@data');

Route::get('api/sensor/{unique_id}', 'ApiController@sensorData');

Route::get('api/data/push', 'DataController@update');

Route::get('map/basic', 'MapController@mapBasic');

Route::get('map/custom', 'MapController@mapCustom');

Route::resource('map', 'MapController');

Route::get('map', array(
    'as' => 'map',
    'uses' => 'MapController@mapCustom',
));

Route::get('map/view/{id}', 'MapController@show');

Route::get('map/add/{id}/{unique_id}', 'MapController@addSensorToMap');

Route::get('mapentry/edit/{id}/{location}', 'MapController@editMapEntry');

Route::get('map/delete/{id}', 'MapController@delete');

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@profileSave');
Route::group(['middleware' => 'cors'], function(){
    Route::post('login', 'Api\AuthController@login');
    Route::post('refresh_token', 'Api\AuthController@refreshToken');

    Route::post('users', 'Api\UsersController@store');

    Route::group(['middleware' => ['jwt.auth', 'tenant'] ], function () {
        Route::post('logout', 'Api\AuthController@logout');
        Route::resource('categories', 'Api\CategoriesController', ['except' => ['create', 'edit']]);
        Route::get('bill_pays/total', 'Api\BillPaysController@calculateTotal');
        Route::resource('bill_pays', 'Api\BillPaysController', ['except' => ['create', 'edit']]);
    });
});

Route::post('oauth/access_token', function() {
 return Response::json(Authorizer::issueAccessToken());
});
Route::get('api', ['before' => 'oauth', function() {
 // return the protected resource
 //echo “success authentication”;
 $user_id=Authorizer::getResourceOwnerId(); // the token user_id
 $user=\App\User::find($user_id);// get the user data from database
return Response::json($user);
}]);
