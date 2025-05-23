<?php

use App\Http\Controllers\Web\Backend\Settings\IntegrationController;
use App\Http\Controllers\Web\Backend\Settings\MailSettingsController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\Settings\SystemSettingsController;
use Illuminate\Support\Facades\Route;

//! Route for Profile Settings
Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profile.setting');
    Route::patch('/update-profile', 'UpdateProfile')->name('update.profile');
    Route::put('/update-profile-password', 'UpdatePassword')->name('update.Password');
    Route::post('/update-profile-picture', 'UpdateProfilePicture')->name('update.profile.picture');
    Route::post('/update-cover-photo', 'UpdateCoverPhoto')->name('update.cover.photo');
});

//! Route for System Settings
Route::controller(SystemSettingsController::class)->group(function () {
    Route::get('/system-setting', 'index')->name('system.index');
    Route::patch('/system-setting', 'update')->name('system.update');
});

//! Route for Mail Settings
Route::controller(MailSettingsController::class)->group(function () {
    Route::get('/mail-setting', 'index')->name('mail.setting');
    Route::patch('/mail-setting', 'update')->name('mail.update');
});

//! Route for Integration Settings
Route::controller(IntegrationController::class)->group(function () {
    Route::get('/integration-setting', 'index')->name('integration.setting');
    Route::patch('/google-setting', 'updateGoogleCredentials')->name('google.update');
    Route::patch('/apple-setting', 'updateAppleCredentials')->name('apple.update');
});
