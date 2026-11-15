<?php

use App\Http\Controllers\Admin\AdminEnquiryController;
use App\Http\Controllers\Admin\AdminNewsEventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdmissionEnquiryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Frontend Routes
|--------------------------------------------------------------------------
*/

// Homepage (Hero, Latest 3 News & Events, Admission Enquiry Form, FAQ)
Route::get('/', [FrontendController::class, 'index'])->name('home');

// "View All" News & Events (category filter, pagination)
Route::get('/news-events', [FrontendController::class, 'allNewsEvents'])->name('news-events.index');

// Single News / Event Detail page (with SEO title & meta description)
Route::get('/news-events/{slug}', [FrontendController::class, 'showNewsEvent'])->name('news-events.show');

// Admission Enquiry AJAX submission with 5 req/min/IP rate limit
Route::post('/admission-enquiry', [AdmissionEnquiryController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('admission-enquiry.store');

/*
|--------------------------------------------------------------------------
| Admin Authentication Redirection
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', function () {
    return redirect()->route('login');
});

// One-click helper for shared hosting storage symlink
Route::get('/setup-storage-link', function () {
    if (request('secret') !== 'manthan2026') {
        abort(403, 'Unauthorized');
    }
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return response('Storage link created successfully!', 200);
});

Route::get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| Protected Admin Panel Routes (/admin)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Admin Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // News & Events Management (CRUD)
    Route::resource('news-events', AdminNewsEventController::class);

    // Admission Enquiry Management
    Route::get('/enquiries', [AdminEnquiryController::class, 'index'])->name('enquiries.index');
    Route::post('/enquiries/{enquiry}/status', [AdminEnquiryController::class, 'updateStatus'])->name('enquiries.update-status');
    Route::get('/enquiries/export-csv', [AdminEnquiryController::class, 'exportCsv'])->name('enquiries.export-csv');
    Route::delete('/enquiries/{enquiry}', [AdminEnquiryController::class, 'destroy'])->name('enquiries.destroy');
});

/*
|--------------------------------------------------------------------------
| User Profile Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
