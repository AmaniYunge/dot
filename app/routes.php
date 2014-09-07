<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('master');
});

Route::get('loadMore', function()
{
    return View::make('loadMore');
});

Route::get('ajax/project1', function()
{
    return View::make('ajax/project1');
});

Route::get('ajax/project2', function()
{
    return View::make('ajax/project2');
});

Route::get('ajax/project3', function()
{
    return View::make('ajax/project3');
});

Route::get('ajax/project4', function()
{
    return View::make('ajax/project4');
});

Route::get('ajax/project5', function()
{
    return View::make('ajax/project5');
});

Route::get('ajax/project6', function()
{
    return View::make('ajax/project6');
});

Route::get('ajax/project7', function()
{
    return View::make('ajax/project7');
});

Route::get('ajax/project8', function()
{
    return View::make('ajax/project8');
});

Route::get('ajax/team1', function()
{
    return View::make('ajax/team1');
});

Route::get('ajax/team2', function()
{
    return View::make('ajax/team2');
});

Route::get('ajax/team3', function()
{
    return View::make('ajax/team3');
});

Route::get('ajax/team4', function()
{
    return View::make('ajax/team4');
});
