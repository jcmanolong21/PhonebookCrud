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

use Illuminate\Support\Facades\Input;
use App\CrudePhnbook;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('phonebook','PhonebkController');

Route::post('/search', function(){
	$q = Input::get('q');
	if($q != ''){
		$user = CrudePhnbook::where('contact_name','LIKE','%' .$q. '%')
		->orWhere('contact_number','LIKE','%' .$q. '%')
		->get();
		if(count($user) > 0)
			return view('phonebook.output')->withDetails($user)
		->withQuery($q);
	}
	return view('phonebook.output')->withMessage("No Contacts Found");

});