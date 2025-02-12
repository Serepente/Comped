<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\EventsController;
use Illuminate\Http\Request;


Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'adminLogin'])->name('admin.login.submit');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/home', function () {
        return view('admin.home');
    })->name('admin.index');
});

// Admin Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('admin/login')->with('success', 'Logged out successfully!');
})->name('logout');




// Advisor Control
Route::prefix('admin/advisor')->name('admin.advisor.')->group(function () {
    Route::get('/control', function () {
        return view('admin.advisor');
    })->name('control');

    Route::get('/officers', [AdvisorController::class, 'showOfficer'])->name('officers');

    Route::post('/promote/{id}', [AdvisorController::class, 'promote'])->name('promote');
    Route::post('/evict/{id}', [AdvisorController::class, 'evict'])->name('evict');

    Route::post('/add-student/{id}', [AdvisorController::class, 'addStudentAdmin'])->name('addStudent');
    Route::post('/delete-student/{id}', [AdvisorController::class, 'deleteStudent'])->name('deleteStudent');


    Route::get('/useraccess', [AdvisorController::class, 'showStudents'])->name('useraccess');
    Route::patch('/useraccess/{id}', [AdvisorController::class, 'updateUserAccess'])->name('updateUserAccess');



});


// Officer Control
Route::prefix('admin/officer')->name('admin.officer.')->group(function () {

    Route::get('/control', function () {
        return view('admin.officerControl');
    })->name('control');

    Route::get('/borrowers', [BorrowController::class, 'borrowerList'])->name('borrowersList');

    Route::get('/eventAttendance', function () {
        return view('admin.officer.eventAttendance');
    })->name('eventAttendance');

    Route::post('/borrow', [BorrowController::class, 'addBorrow'])->name('requestBorrow');
    Route::delete('/borrow/{id}', [BorrowController::class, 'destroy'])->name('deleteBorrow');
    Route::put('/borrow/{id}', [BorrowController::class, 'update'])->name('updateBorrow');

});

// Treasurer Control
Route::prefix('admin/treasurer')->name('admin.treasurer.')->group(function () {
    Route::get('/control', function () {
        return view('admin.treasurerControl');
    })->name('control');

    Route::get('/paymentCenter', function () {
        return view('admin.treasurer.paymentCenter');
    })->name('paymentCenter');

    Route::get('/contribution', function () {
        return view('admin.treasurer.contribution');
    })->name('contribution');

    Route::get('/paymentList', function () {
        return view('admin.treasurer.paymentList');
    })->name('paymentList');

    Route::get('/liquidation', function () {
        return view('admin.treasurer.liquidation');
    })->name('liquidation');

    Route::get('/eventsLiquidation', function () {
        return view('admin.treasurer.eventsLiquidation');
    })->name('eventsLiquidation');

    Route::get('/itemsLiquidation', function () {
        return view('admin.treasurer.itemsLiquidation');
    })->name('itemsLiquidation');
});

// Secretary Control
Route::prefix('admin/secretary')->name('admin.secretary.')->group(function () {
    Route::get('/control', function () {
        return view('admin.secretaryControl');
    })->name('control');

    // Show all events in eventCreator page
    Route::get('/eventCreator', [EventsController::class, 'showEvents'])->name('eventCreator');

    // Add new event
    Route::post('/eventCreator', [EventsController::class, 'addEvent'])->name('addEvent');

    // Update existing event
    Route::put('/events/{id}', [EventsController::class, 'updateEvent'])->name('updateEvent');
    Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('deleteEvent');

    // Inventory Management Page
    Route::get('/inventoryManagement', function () {
        return view('admin.secretary.inventoryManagement');
    })->name('inventoryManagement');
});

