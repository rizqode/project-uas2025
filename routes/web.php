<?php
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Booking;
use App\Models\AboutUs;
use App\Models\Gallery;
use App\Models\Paket;

Route::get('/', function () {
    $galleries = Gallery::all();
    $about = AboutUs::first();
    $pakets = Paket::all();

    return view('home', compact('galleries', 'about', 'pakets'));
})->name('home');

// Route lainnya tetap:
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// ✨ FITUR BOOKING ✨

Route::get('/booking/{category}', function (Category $category) {
    return view('booking-form', compact('category'));
})->name('booking.form');

Route::post('/booking', function (Request $request) {
    $data = $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'category_id' => 'required|exists:categories,id',
        'tanggal_booking' => 'required|date',
    ]);

    $booking = Booking::create($data);

    return view('booking-success', compact('booking'));
})->name('booking.submit');

Route::get('/booking/history', function () {
    $bookings = Booking::latest()->get();
    return view('booking-history', compact('bookings'));
})->name('booking.history');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/about', function () {
    return view('about');
})->name('about');

require __DIR__.'/auth.php';
