<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'cors'], function() {
    Route::get('/listcategory', 'Api\PostControllers@getListCategoryTintuc');
    Route::get('/article', 'Api\PostControllers@getListArticle');

    Route::get('/article/{slug}', 'Api\PostControllers@detailArticle');

    Route::get('/hot-article', 'Api\PostControllers@getListHotArticle');

    Route::get('/my-article/{user_id}', 'Api\PostControllers@getMyArticle');
    Route::get('/list-article-advisor', 'Api\PostControllers@getListTinAdvisor');

    Route::get('/listcategoryexpertise', 'Api\PostControllers@getListCategoryExpertise');
    Route::get('/expertise-article', 'Api\PostControllers@getListHotExpertise');

    Route::get('/danhngon', 'Api\PostControllers@getListDanhNgon');

    Route::get('/comment', 'Api\PostControllers@getListComment');

    Route::post('/login', 'Api\PostControllers@postLogin');


 });
