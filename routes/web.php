<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
// Routing of the home page
Route::get('/', [HomeController::class,'index']);


// Routings of the About us page
Route::get('/about', [HomeController::class,'about']);


// Routings of the Internship page
Route::get('/internship',[HomeController::class,'internship']);


// Routings of the Career Page of the website
Route::get('/career',[HomeController::class,'career']);


// Routings of the Features page of the website
Route::get('/features', [HomeController::class,'features']);


// Routings of the portfolio page of the website
Route::get('/portfolio',[HomeController::class,'portfolio']);


// Rotings of the contact page it will be modify
Route::get('/contact', [HomeController::class,'contact']);


// Routings of the Service page
Route::get('/service', [HomeController::class,'service']);

// Routings of the Service page
Route::get('/thank', [HomeController::class,'thank']);

// This is the routing of the legal documents page
Route::get('/legal-Documents', [HomeController::class,'legalDoc']);

// This is the routing of the mobile service page
Route::get('/Mobile-Service', [HomeController::class,'mobileSer']);

// This is the routing of the website service page
Route::get('/Website-Service', [HomeController::class,'webSer']);

// This is the routing of the cyber security  service page
Route::get('/Cyber-Security-Service', [HomeController::class,'cyberSer']);

// This is the routing of the mobile service page
Route::get('/Digital-Marketing', [HomeController::class,'digitalSer']);

// This is the routing of the hosting and cloud service page
Route::get('/Hosting-Cloud', [HomeController::class,'hostSer']);

// This is the routing of the login page
Route::get('/log-in-admin', [HomeController::class,'login']);

// This is the routing of the login page
Route::any('/Super-Admin-Panel', [HomeController::class,'admin'])->name('super_admin'); // I am understaing the all code 

// This is the routing of the e-commerce technology page of the 
Route::get('/E-Commerce-Technology', [HomeController::class,'commerce']);

// This is the routing of the mobile technogy 
Route::get('/Mobile-Technology', [HomeController::class,'mobileTech']);

// This is the routing of the cms techlogy 
Route::get('/CMS-Technology', [HomeController::class,'cms']);

// This is the routing of the writing and publication 
Route::get('/Writing-and-Publication', [HomeController::class,'publication']);

// Here We are stating the code to stored the data
Route::post('/storeClient',[HomeController::class,'postClient']);
Route::post('/storeTrainingData',[HomeController::class,'trainingData']);
Route::post('/storeInternshipData',[HomeController::class,'storeInternshipData']);
Route::post('/jobData',[HomeController::class,'jobData']);
Route::post('/smsData',[HomeController::class,'smsData']);
Route::post('/publicationData',[HomeController::class,'publicationData']);



