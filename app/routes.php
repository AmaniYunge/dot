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

Route::get('project1', function()
{
    return View::make('project1');
});

Route::get('project2', function()
{
    return View::make('project2');
});

Route::get('project3', function()
{
    return View::make('project3');
});

Route::get('project4', function()
{
    return View::make('project4');
});

Route::get('project5', function()
{
    return View::make('project5');
});

Route::get('project6', function()
{
    return View::make('project6');
});

Route::get('project7', function()
{
    return View::make('project7');
});

Route::get('project8', function()
{
    return View::make('project8');
});

Route::get('team1', function()
{
    return View::make('team1');
});

Route::get('team2', function()
{
    return View::make('team2');
});

Route::get('team3', function()
{
    return View::make('team3');
});

Route::get('team4', function()
{
    return View::make('team4');
});
