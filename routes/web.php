<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\NomineeController;
use App\Http\Controllers\PaymentController;
use App\Models\Client;
use App\PaymentGateway\Payment;
// use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// })->name('login');

Route::view('/', 'index')->name('login');

Route::post('/', [IndexController::class, 'authenticate'])->name("check");

Route::middleware(['session'])->group(function () { 

    Route::get('home', [HomeController::class, 'index'])->name("home");
    Route::get('/logout', [IndexController::class, 'logout'])->name("logout");
    // client route
    Route::get('/client', [ClientController::class, 'show'])->name("client")->middleware('session');
    Route::get('/clientStatus/{client_id}', [ClientController::class, 'status'])->name("clientStatus");

    Route::get('/editClient/{client_id}', [ClientController::class, 'edit'])->name("editClient");
    // Route::get('/editClient/{client_id}', function(Client $clients) {
    //     return $clients;
    // } );

    Route::post('/editClient/{client_id}', [ClientController::class, 'update'])->name("editClient");
    Route::get('/deleteClient/{client_id}', [ClientController::class, 'delete'])->name("deleteClient");
    Route::get('/addClient', [ClientController::class, 'showClient'])->name("addClient");
    Route::post('/addClient', [ClientController::class, 'add']);
    // agent route
    Route::get('/agent', [AgentController::class, 'show'])->name("agent"); 
    // policy
    Route::get('/policy', [policyController::class, 'show'])->name("policy");
    // nominee
    Route::get('/nominee', [NomineeController::class, 'show'])->name("nominee");
    Route::get('/addNominee', [NomineeController::class, 'showForm'])->name("addNominee");
    Route::post('/addNominee', [NomineeController::class, 'insert']);
    //payment
    Route::get('/payment', [PaymentController::class, 'show'])->name("payment");
    Route::get('/addPayment', [PaymentController::class, 'add'])->name("addPayment");
    Route::get('/editPayment', [PaymentController::class, 'edit'])->name("editPayment");
});

// use facades of paymentgateway

Route::get('paymentfacades', function(){
    
    return Payment::process();
});
