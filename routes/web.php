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

Route::get('/', 'QuestionController@index');

Auth::routes();

Route::resource('questions', 'QuestionController')->except('show');
Route::get('questions/{slug}', 'QuestionController@show')->name('questions.show');
Route::resource('questions.answers', 'AnswerController')->except(['create', 'show']);
Route::post('answers/{answer}/accept', 'AcceptAnswerController')->name('answers.accept');
Route::post('questions/{question}/favorites', 'FavoriteController@store')->name('questions.favorite');
Route::delete('questions/{question}/favorites', 'FavoriteController@destroy')->name('questions.unfavorite');
Route::post('questions/{question}/vote', 'VoteQuestionController');
Route::post('answers/{answer}/vote', 'VoteAnswerController');