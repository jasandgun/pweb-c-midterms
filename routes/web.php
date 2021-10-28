<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@homeview');
Route::get('/login', function () {
    if(Session::get('login')){
        return redirect('dashboard');
    }
    return view('login');
})-> name('login');
Route::get('/register', function () {
    if(Session::get('login')){
        return redirect('dashboard');
    }
    return view('register');
})-> name('register');

Route::post('/store_users', 'UsersController@store')->name('store_users');
Route::post('/login_users', 'UsersController@login_users')->name('login_users');


Route::group(['middleware' => 'LoginCheck'], function () {
    Route::post('/logout/{id}', 'UsersController@logout')->name('logout');
    Route::get('/user/{id}','UsersController@createListOwnProfile');
    Route::get('/config/{id}','UsersController@config')->name('config');
    Route::post('/config/{id}/username','UsersController@configusername')->name('configusername');
    Route::post('/config/{id}/email','UsersController@configemail')->name('configemail');
    Route::post('/config/{id}/password','UsersController@configpassword')->name('configpassword');
    Route::post('/config/{id}/desc','UsersController@configdesc')->name('configdesc');
    Route::post('/config/{id}/profil','UsersController@configprofil')->name('configprofil');
    Route::get('/discussion/{id}', 'DiscussController@discussion')->name('discussion');
    Route::post('/discussion/{id}', 'AnswersController@sendAnswer')->name('reply');
    Route::put('/discussion/answer/edit/{id}', 'AnswersController@editAnswer')->name('discussion-answer-edit');
    Route::put('/discussion/question/edit/{id}', 'DiscussController@editDiscussion')->name('discussion-question-edit');
    Route::get('/dashboard', 'DiscussController@recentList') -> name('dashboard');
    Route::get('/myquestion', 'DiscussController@createList') -> name('myquestion');
    Route::put('/myquestion/edit/{id}', 'DiscussController@editDiscussion') -> name('myquestion-edit');
    Route::get('/myquestion/hapus/{id}', 'DiscussController@deleteDiscussion') -> name('myquestion-delete');
    Route::get('/myanswer', 'AnswersController@answerList') -> name('myanswer');
    Route::put('/myanswer/edit/{id}', 'AnswersController@editAnswer') -> name('myanswer-edit');
    Route::get('/myanswer/hapus/{id}', 'AnswersController@deleteAnswer') -> name('myanswer-delete');
    Route::get('/create-discussion', function () {return view('dashboards.create-discussion');});
    Route::post('/create-discussion', 'DiscussController@createDiscussion') -> name('create-discussion');
    Route::post('/search-discussion', 'DiscussController@searchList') -> name('search-discussion');
    Route::get('/topics','TopicsController@list');
    Route::get('/topics/{slug}','TopicsController@topicDiscussionList')->name('topic-discussion');
});