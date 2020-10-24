<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard.index');
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('auth.login'); });
    Route::get('register', function () { return view('auth.register'); });
});
Route::group(['prefix' => 'password'], function(){
    Route::get('reset', function () { return view('auth.passwords.reset'); });
    Route::get('email', function () { return view('auth.passwords.email'); });
});

Route::group(['prefix' => 'staff'], function(){
    Route::get('/', function () { return view('pages.staff.list'); });
    Route::get('create', function () { return view('pages.staff.add'); });
    Route::get('edit', function () { return view('pages.staff.edit'); });
});

Route::group(['prefix' => 'invoices'], function(){
    Route::get('/', function () { return view('pages.orders.list'); });
    Route::get('add', function () { return view('pages.orders.add'); });
    Route::get('edit', function () { return view('pages.orders.edit'); });
});

Route::group(['prefix' => 'patient'], function(){
    Route::get('/', function () { return view('pages.patients.list'); });
    Route::get('create', function () { return view('pages.patients.add'); });
    Route::get('details', function () { return view('pages.patients.details'); });
});

Route::group(['prefix' => 'accounts'], function(){
    Route::get('/', function () { return view('pages.accounts.list'); });
    Route::get('/first', function () { return view('pages.accounts.first-login'); });
    Route::get('/details', function () { return view('pages.accounts.details'); });
});

Route::group(['prefix' => 'my-account'], function(){
    Route::get('/', function () { return view('pages.accounts.my-account'); });
    Route::get('/subscription', function () { return view('pages.accounts.my-subscription'); });
    Route::get('/family', function () { return view('pages.accounts.my-family'); });
    Route::get('/payments', function () { return view('pages.accounts.payments'); });
});

Route::group(['prefix' => 'doctors'], function(){
    Route::get('/', function () { return view('pages.doctors.list'); });
    Route::get('/details', function () { return view('pages.doctors.details'); });
});

Route::group(['prefix' => 'plans'], function(){
    Route::get('/plan1', function () { return view('pages.plans.plan1'); });
    Route::get('/plan2', function () { return view('pages.plans.plan2'); });
    Route::get('/plan3', function () { return view('pages.plans.plan3'); });
    Route::get('/dziekujemy', function () { return view('pages.plans.thankyou'); });
});

Route::group(['prefix' => 'invoices'], function(){
    Route::get('/income', function () { return view('pages.orders.income'); });
    Route::get('/costly', function () { return view('pages.orders.costly'); });
});

Route::group(['prefix' => 'quickhelp'], function(){
    Route::get('/', function () { return view('pages.och.waiting'); });
    Route::get('active', function () { return view('pages.och.active'); });
    Route::get('history', function () { return view('pages.och.history'); });
    Route::get('room', function () { return view('pages.och.room'); });
});

Route::group(['prefix' => 'visits'], function(){
    Route::get('/', function () { return view('pages.visits.waiting'); });
    Route::get('active', function () { return view('pages.visits.active'); });
    Route::get('history', function () { return view('pages.visits.history'); });
    Route::get('room', function () { return view('pages.visits.room'); });
    Route::get('details', function () { return view('pages.visits.details'); });
});

Route::group(['prefix' => 'calendar'], function(){
    Route::get('/', function () { return view('pages.calendar.list'); });
    Route::get('my', function () { return view('pages.calendar.my-calendar'); });
    Route::get('add', function () { return view('pages.calendar.add'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error.404');
})->where('page','.*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
