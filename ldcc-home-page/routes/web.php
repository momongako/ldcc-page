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
Route::get('/', 'HomeController@index')->name('home');
Route::get('lang/change', 'HomeController@change')->name('changeLang');


// about
Route::get('/about', 'AboutController@index')->name('about');


Route::post('/create_contact', 'AboutController@register');
Route::get('/get-list-contact-us', 'AboutController@getListContactUs');

Route::get('/overview', 'AboutController@aboutOverview')->name('about.overview');
Route::get('/vision', 'AboutController@aboutVision')->name('about.vision');
Route::get('/ceo', 'AboutController@aboutCeo')->name('about.ceo');
Route::get('/history', 'AboutController@aboutHistory')->name('about.history');
Route::get('/partnership', 'AboutController@aboutPartnership')->name('about.partnership');
Route::get('/new_event', 'AboutController@aboutNewEvent')->name('about.new_event');

Route::get('/new_event_product_detail/{slug}', 'AboutController@aboutNewEventProductDetail')
    ->name('about.new_event_product_detail');


//services
Route::get('/services', 'ServicesController@index')->name('services');

Route::get('application', 'ServicesController@serviceApplication')->name('services.application');
Route::get('system', 'ServicesController@serviceSystem')->name('services.system');
Route::get('offshore', 'ServicesController@serviceOffshore')->name('services.offshore');
Route::get('erp', 'ServicesController@serviceErp')->name('services.erp');
Route::get('cloud', 'ServicesController@serviceCloud')->name('services.cloud');
Route::get('data', 'ServicesController@serviceData')->name('services.data');
Route::get('security', 'ServicesController@serviceSecurity')->name('services.security');


// products
Route::get('/products', 'ProductsController@index')->name('products');

Route::get('/api_gateway', 'ProductsController@productApiGateway')->name('products.api_gateway');
Route::get('/saas', 'ProductsController@productSaas')->name('products.saas');
Route::get('/building', 'ProductsController@productBuilding')->name('products.building');
Route::get('/parking', 'ProductsController@productParking')->name('products.parking');


// case study
//Route::get('/case-study', 'CaseStudyController@index')->name('case-study');
//Route::get('/detail1' , 'CaseStudyController@caseStudyDetail1')->name('case-study.detail1');
Route::group(['prefix' => '/case-study'],function() {
    Route::get('/' , 'CaseStudyController@index')->name('case-study');
    Route::get('/detail/1' , 'CaseStudyController@caseStudyDetail1')->name('case-study.detail1');
    Route::get('/detail/2' , 'CaseStudyController@caseStudyDetail2')->name('case-study.detail2');
    Route::get('/detail/3' , 'CaseStudyController@caseStudyDetail3')->name('case-study.detail3');
    Route::get('/detail/4' , 'CaseStudyController@caseStudyDetail4')->name('case-study.detail4');
    Route::get('/detail/5' , 'CaseStudyController@caseStudyDetail5')->name('case-study.detail5');
    Route::get('/detail/6' , 'CaseStudyController@caseStudyDetail6')->name('case-study.detail6');
    Route::get('/detail/7' , 'CaseStudyController@caseStudyDetail7')->name('case-study.detail7');
    Route::get('/detail/8' , 'CaseStudyController@caseStudyDetail8')->name('case-study.detail8');
    Route::get('/detail/9' , 'CaseStudyController@caseStudyDetail9')->name('case-study.detail9');
    Route::get('/detail/10' , 'CaseStudyController@caseStudyDetail10')->name('case-study.detail10');
    Route::get('/detail/11' , 'CaseStudyController@caseStudyDetail11')->name('case-study.detail11');
    Route::get('/detail/12' , 'CaseStudyController@caseStudyDetail12')->name('case-study.detail12');
    Route::get('/detail/13' , 'CaseStudyController@caseStudyDetail13')->name('case-study.detail13');
    Route::get('/detail/14' , 'CaseStudyController@caseStudyDetail14')->name('case-study.detail14');
    Route::get('/detail/15' , 'CaseStudyController@caseStudyDetail15')->name('case-study.detail15');
    Route::get('/detail/16' , 'CaseStudyController@caseStudyDetail16')->name('case-study.detail16');
    Route::get('/detail/17' , 'CaseStudyController@caseStudyDetail17')->name('case-study.detail17');
    Route::get('/detail/18' , 'CaseStudyController@caseStudyDetail18')->name('case-study.detail18');
    Route::get('/detail/19' , 'CaseStudyController@caseStudyDetail19')->name('case-study.detail19');
    Route::get('/detail/20' , 'CaseStudyController@caseStudyDetail20')->name('case-study.detail20');
    Route::get('/detail/21' , 'CaseStudyController@caseStudyDetail21')->name('case-study.detail21');
    Route::get('/detail/22' , 'CaseStudyController@caseStudyDetail22')->name('case-study.detail22');
    Route::get('/detail/23' , 'CaseStudyController@caseStudyDetail23')->name('case-study.detail23');
    Route::get('/detail/24' , 'CaseStudyController@caseStudyDetail24')->name('case-study.detail24');
    Route::get('/detail/25' , 'CaseStudyController@caseStudyDetail25')->name('case-study.detail25');
    Route::get('/detail/26' , 'CaseStudyController@caseStudyDetail26')->name('case-study.detail26');
    Route::get('/detail/27' , 'CaseStudyController@caseStudyDetail27')->name('case-study.detail27');
    Route::get('/detail/28' , 'CaseStudyController@caseStudyDetail28')->name('case-study.detail28');
});

Route::get('/case-study-detail/{slug}', 'CaseStudyController@caseStudyDetail');

// career
Route::get('/career', 'CareerController@index')->name('career');
Route::get('/opportunity', 'CareerController@careerOpportunity')->name('career.opportunity');
Route::get('/culture', 'CareerController@careerCulture')->name('career.culture');
Route::get('/opportunity-detail/{slug}', 'CareerController@careerOpportunityDetail')->name('career.opportunityDetail');

//contact
Route::get('/contact', 'ContactController@index')->name('contact');

// career create
Route::post('/create_career_opportunity', 'CareerController@register')->name('career.create');
Route::get('/get-list-career  ', 'CareerController@getList');
//download-file
Route::get('/download-file/{id}  ', 'CareerController@downloadFile');

/**
 * Login Route(s)
 */
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('preLogin', 'Auth\LoginController@preLogin')->name('preLogin');
/**
 * Register Route(s)
 */
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
/**
 * Password Reset Route(S)
 */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
/**
 * Email Verification Route(s)
 */
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

/**
 * Confirm Register Route(s)
 */
Route::get('register/confirm', 'Auth\RegisterController@confirm')->name('register.confirm');

Route::post('register/confirm', 'Auth\RegisterController@postConfirm');

Route::get('register/success', 'Auth\RegisterController@success')->name('register.success');

Route::get('register/complete', 'Auth\VerificationController@complete')->name('register.complete');

Auth::routes(['verify' => true]);

/**
 * User Profile Route(s)
 */
Route::group(['prefix' => 'mypage'], function() {
    Route::get('/user/show', 'UserController@show')->name('user.show');
    Route::get('/user/edit', 'UserController@edit')->name('user.edit');
    Route::post('/user/update', 'UserController@update')->name('user.update');
    Route::get('/user/confirm', 'UserController@confirm')->name('user.confirm');
    Route::post('/user/store', 'UserController@store')->name('user.store');

    Route::get('/user/leave_edit', 'UserController@leaveEdit')->name('user.leave_edit');
    Route::post('/user/leave_update', 'UserController@leaveUpdate')->name('user.leave_update');
    Route::get('/user/leave_relust', 'UserController@leaveResult')->name('user.leave_result');
});

/**
 * site map
 */


/**
 * Admin Panel Route
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.auth.login');
    Route::post('/login', 'Admin\LoginController@login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('admin.auth.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/customers  ', 'CustomersController@index');

    Route::get('password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Admin\ResetPasswordController@reset')->name('admin.password.update');
});

Route::post('/admin/customer  ', 'Admin\CustomersController@create');
Route::get('/admin/customer/{id}  ', 'Admin\CustomersController@show');
Route::put('/admin/customer/update/{id}  ', 'Admin\CustomersController@update');
Route::put('/admin/customer/backDelete/{id}  ', 'Admin\CustomersController@backDelete');
Route::put('/admin/customer/confirmMail/{id}  ', 'Admin\CustomersController@confirmMail');
Route::get('/customer/export  ', 'Admin\CustomersController@export')->name('admin.customer.export');
Route::delete('/admin/customer/delete/{id}  ', 'Admin\CustomersController@destroy');
Route::get('/admin/check/{id}  ', 'Admin\CustomersController@checkMail');

Route::get('/admin/configs  ', 'Admin\ConfigsController@index');
Route::get('/admin/config/{id}  ', 'Admin\ConfigsController@show');
Route::post('/admin/config  ', 'Admin\ConfigsController@create');
Route::delete('/admin/configs/delete/{id}  ', 'Admin\ConfigsController@destroy');
Route::put('/admin/config/{id}  ', 'Admin\ConfigsController@update');
Route::get('/admin/checkKey/{key}  ', 'Admin\ConfigsController@checkKey');
Route::get('/admin/configAdmin  ', 'Admin\ConfigsController@getConfigAdmin');

Route::get('/admin/getListYoutube  ', 'Admin\ConfigsController@getListYoutube');
Route::get('/admin/getListPodcast  ', 'Admin\ConfigsController@getListPodcast');

Route::get('/admin/emails  ', 'Admin\EmailNewsletterController@index');
Route::get('/admin/export-emails  ', 'Admin\EmailNewsletterController@export');

Route::get('/admin/banners  ', 'Admin\BannersController@index');
Route::get('/admin/banner/{id}  ', 'Admin\BannersController@show');
Route::post('/admin/banner  ', 'Admin\BannersController@create');
Route::post('/admin/edit-banner/{id}  ', 'Admin\BannersController@update');
Route::post('/admin/delete-banner/{id}  ', 'Admin\BannersController@destroy');

Route::post('/admin/configTab  ', 'Admin\ConfigsController@createTab');
Route::get('/admin/configTabs  ', 'Admin\ConfigsController@getAllConfigs');
Route::get('/admin/configTab/{id}  ', 'Admin\ConfigsController@getConfigTab');
Route::put('/admin/configTab/{id}  ', 'Admin\ConfigsController@updateTab');
Route::delete('/admin/configTab/delete/{id}  ', 'Admin\ConfigsController@destroyTab');

Route::get('/admin/categories  ', 'Admin\CategoriesController@index');
Route::delete('/admin/categories/delete/{id}  ', 'Admin\CategoriesController@destroy');
Route::get('/admin/list/categories  ', 'Admin\CategoriesController@getListCategories');
Route::get('/admin/all/categories  ', 'Admin\CategoriesController@getAllCategories');
Route::get('/admin/category/{id}  ', 'Admin\CategoriesController@show');
Route::post('/admin/category  ', 'Admin\CategoriesController@create');
Route::put('/admin/category/{id}  ', 'Admin\CategoriesController@update');
Route::get('/admin/checkCategory/{name}  ', 'Admin\CategoriesController@checkName');
Route::get('/admin/tree-categories  ', 'Admin\CategoriesController@getTreeCategories');

Route::get('/admin/posts  ', 'Admin\PostsController@index');
Route::get('/admin/post/{id}  ', 'Admin\PostsController@show');
Route::post('/admin/post  ', 'Admin\PostsController@create');
Route::post('/admin/edit-post/{id}  ', 'Admin\PostsController@update');
Route::get('/admin/checkPost/{title}  ', 'Admin\PostsController@checkTitle');
Route::delete('/admin/posts/delete/{id}  ', 'Admin\PostsController@destroy');
Route::post('/admin/status-post/{id}  ', 'Admin\PostsController@updateStatus');
Route::get('/admin/getListPost ', 'Admin\PostsController@getListPost');

Route::get('/admin/comments  ', 'Admin\CommentsController@index');
Route::get('/admin/comment/{id}  ', 'Admin\CommentsController@show');
Route::post('/admin/comment  ', 'Admin\CommentsController@create');
Route::put('/admin/comment/{id}  ', 'Admin\CommentsController@update');
Route::delete('/admin/comment/{id}  ', 'Admin\CommentsController@destroy');

Route::get('/admin/menus  ', 'Admin\MenusController@index');
Route::delete('/admin/menus/delete/{id}  ', 'Admin\MenusController@destroy');
Route::get('/admin/list/menus  ', 'Admin\MenusController@getListMenus');
Route::get('/admin/all/menus  ', 'Admin\MenusController@getAllMenus');
Route::get('/admin/menu/{id}  ', 'Admin\MenusController@show');
Route::post('/admin/menu  ', 'Admin\MenusController@create');
Route::put('/admin/menu/{id}  ', 'Admin\MenusController@update');

//----------------user-----------------------------------
Route::get('/admin/users','Admin\UsersController@index')->name('admin.users');
Route::post('/admin/user  ', 'Admin\UsersController@create')->name('admin.user.create');
Route::post('/admin/user/{id}  ', 'Admin\UsersController@update');
Route::get('/admin/user/{id}  ', 'Admin\UsersController@show');
Route::get('/admin/profile  ', 'AdminController@profile');
Route::put('/admin/profile  ', 'AdminController@updateProfile');
Route::delete('/admin/user/delete/{id}  ', 'Admin\UsersController@destroy');
/**
 * route only for admin area
 */

