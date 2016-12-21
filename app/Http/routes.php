<?php
use Illuminate\Http\Request;
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


Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('list',['as' => 'admin.cate.getList','uses'=>'CateController@getList']);
		Route::post('add',['as' => 'admin.cate.postAdd','uses'=>'CateController@postadd']);
		Route::get('delete/{id}',['as' => 'admin.cate.getDelete','uses'=>'CateController@getdelete']);
		Route::get('getcategory/{id}',['as' => 'admin.cate.getEdit','uses'=>'CateController@getcategory']);
		Route::post('edit/{id}',['as' => 'admin.cate.postEdit','uses'=>'CateController@postedit']);
		Route::post('del/{arr}',['as' => 'admin.cate.getDel','uses'=>'CateController@getDel']);
		Route::get('search',['as' => 'admin.cate.getSearch','uses'=>'CateController@getSearch']);
		
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as' => 'admin.product.getList','uses'=>'ProductController@getList']);
		Route::post('add',['as' => 'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.product.getDelete','uses'=>'ProductController@getDelete']);
		Route::get('getproduct/{id}',['as' => 'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.product.postEdit','uses'=>'ProductController@postEdit']);
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('list',['as' => 'admin.user.getList','uses'=>'UserController@getList']);
		Route::post('add',['as' => 'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('delete/{id}',['as' => 'admin.user.getDelete','uses'=>'UserController@getDelete']);
		Route::get('getuser/{id}',['as' => 'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('edit/{id}',['as' => 'admin.user.postEdit','uses'=>'UserController@postEdit']);
	});
	
});
// ----------------------category------------------
Route::get('listcategory',function(){
	return view('admin.cate.list');
});
Route::get('getcate/{id}',function($id){
	return view('admin.cate.getlist',compact('id'));
});
Route::get('updatecategory/{id}',function($id){
	return view('admin.cate.edit',compact('id'));
});
Route::get('addcategory',function(){
	return view('admin.cate.add');
});

Route::get('searchcategory',function(request $request){
	$search = $request->input('search');
	return view('admin.cate.search',compact('search'));
});

//-----------------------product------------------
Route::get('listproduct',function(){
	return view('admin.product.list');
});
Route::get('getproduct/{id}',function($id){
	return view('admin.product.getlist',compact('id'));
});
Route::get('updateproduct/{id}',function($id){
	return view('admin.product.edit',compact('id'));
});
Route::get('addproduct',function(){
	return view('admin.product.add');
});

//-----------------------user------------------
Route::get('listuser',function(){
	return view('admin.user.list');
});
Route::get('getuser/{id}',function($id){
	return view('admin.user.getlist',compact('id'));
});
Route::get('updateuser/{id}',function($id){
	return view('admin.user.edit',compact('id'));
});
Route::get('adduser',function(){
	return view('admin.user.add');
});
