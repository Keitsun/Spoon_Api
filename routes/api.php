<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// ROUTES FOR Category //

Route::get('categories',[
    'uses' => 'CategoryController@index',
    'as' => 'categ.list'
]);


Route::post('categories/post',[
    'uses' => 'CategoryController@store',
    'as' => 'categ.post'
]);


Route::get('categories/{categoryId}/category',[
    'uses' => 'CategoryController@show',
    'as' => 'categ.single'
]);


Route::put('categories/{categoryId}',[
    'uses' => 'CategoryController@update',
    'as' => 'categ.put'
]);


Route::delete('categories/{categoryId}',[
    'uses' => 'CategoryController@destroy',
    'as' => 'categ.delete'
]);



// ROUTES FOR ARTICLES //

Route::get('articles',[
    'uses' => 'ArticleController@index',
    'as' => 'article.list'
]);


Route::post('categories/{categoryId}/articles',[
    'uses' => 'ArticleController@store',
    'as' => 'article.post'
]);


Route::get('categories/{categoryId}/articles/{articleId}',[
    'uses' => 'ArticleController@show',
    'as' => 'article.single'
]);


Route::put('categories/{categoryId}/articles/{articleId}',[
    'uses' => 'ArticleController@update',
    'as' => 'article.put'
]);


Route::delete('categories/{categoryId}/articles/{articleId}',[
    'uses' => 'ArticleController@destroy',
    'as' => 'article.delete'
]);



// ROUTES FOR Comments //


Route::get('articles/{articleId}/comments',[
    'uses' => 'CommentController@index',
    'as' => 'comment.list'
]);



Route::post('articles/{articleId}/comments',[
    'uses' => 'CommentController@store',
    'as' => 'comment.post'
]);



Route::get('articles/{articleId}/comments',[
    'uses' => 'CommentController@show',
    'as' => 'comment.single'
]);



Route::put('articles/{articleId}/comments/{commentId}',[
    'uses' => 'CommentController@update',
    'as' => 'comment.put'
]);


Route::delete('articles/{articleId}/comments/{commentId}',[
    'uses' => 'CommentController@destroy',
    'as' => 'comment.delete'
]);





// ROUTES FOR LIKES //


Route::get('likes',[
    'uses' => 'LikeController@index',
    'as' => 'Like.list'
]);


Route::get('likes/{likeId}',[
    'uses' => 'LikeController@show',
    'as' => 'Like.single'
]);


Route::post('likes',[
    'uses' => 'LikeController@store',
    'as' => 'Like.post'
]);

Route::put('likes/{likeId}/put',[
    'uses' => 'LikeController@update',
    'as' => 'Like.put'
]);


Route::delete('likes/likeId}/delete',[
    'uses' => 'LikeController@destroy',
    'as' => 'Like.delete'
]);