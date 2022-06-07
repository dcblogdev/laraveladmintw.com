<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\JoinController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\TwoFaController;
use App\Http\Controllers\DocsController;
use App\Http\Livewire\Admin\AuditTrails;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Developers\Reference;
use App\Http\Livewire\Admin\Roles\Edit;
use App\Http\Livewire\Admin\Roles\Roles;
use App\Http\Livewire\Admin\SentEmails\SentEmails;
use App\Http\Livewire\Admin\SentEmails\SentEmailsBody;
use App\Http\Livewire\Admin\Settings\Settings;
use App\Http\Livewire\Admin\Users\EditUser;
use App\Http\Livewire\Admin\Users\ShowUser;
use App\Http\Livewire\Admin\Users\Users;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', Welcome::class);

Route::view('docs', 'docs.getting-started.introduction')->name('docs.introduction');
Route::view('docs/requirements', 'docs.getting-started.requirements')->name('docs.requirements');
Route::view('docs/changelog', 'docs.getting-started.changelog')->name('docs.changelog');
Route::view('docs/installation', 'docs.getting-started.installation')->name('docs.installation');
Route::view('docs/questions', 'docs.getting-started.questions')->name('docs.questions');

Route::view('docs/authentication', 'docs.basic-usage.authentication')->name('docs.basic-usage.authentication');
Route::view('docs/configuration', 'docs.basic-usage.configuration')->name('docs.basic-usage.configuration');
Route::view('docs/layouts', 'docs.basic-usage.layouts')->name('docs.basic-usage.layouts');
Route::view('docs/middleware', 'docs.basic-usage.middleware')->name('docs.basic-usage.middleware');
Route::view('docs/service-providers', 'docs.basic-usage.service-providers')->name('docs.basic-usage.service-providers');
Route::view('docs/helpers', 'docs.basic-usage.helpers')->name('docs.basic-usage.helpers');
Route::view('docs/tests', 'docs.basic-usage.tests')->name('docs.basic-usage.tests');

Route::view('docs/blade-components/2col', 'docs.blade-components.2col')->name('docs.blade-components.2col');
Route::view('docs/blade-components/auth-card', 'docs.blade-components.auth-card')->name('docs.blade-components.auth-card');
Route::view('docs/blade-components/button', 'docs.blade-components.button')->name('docs.blade-components.button');
Route::view('docs/blade-components/dropdown', 'docs.blade-components.dropdown')->name('docs.blade-components.dropdown');
Route::view('docs/blade-components/forms', 'docs.blade-components.forms')->name('docs.blade-components.forms');
Route::view('docs/blade-components/modal', 'docs.blade-components.modal')->name('docs.blade-components.modal');
Route::view('docs/blade-components/modal', 'docs.blade-components.modal')->name('docs.blade-components.modal');
Route::view('docs/blade-components/navigation', 'docs.blade-components.navigation')->name('docs.blade-components.navigation');
Route::view('docs/blade-components/tabs', 'docs.blade-components.tabs')->name('docs.blade-components.tabs');

Route::view('docs/livewire-components/audit-trails', 'docs.livewire-components.audit-trails')->name('docs.livewire-components.audit-trails');
Route::view('docs/livewire-components/dashboard', 'docs.livewire-components.dashboard')->name('docs.livewire-components.dashboard');
Route::view('docs/livewire-components/help-menu', 'docs.livewire-components.help-menu')->name('docs.livewire-components.help-menu');
Route::view('docs/livewire-components/notifications', 'docs.livewire-components.notifications')->name('docs.livewire-components.notifications');
Route::view('docs/livewire-components/global-search', 'docs.livewire-components.global-search')->name('docs.livewire-components.global-search');
Route::view('docs/livewire-components/roles', 'docs.livewire-components.roles')->name('docs.livewire-components.roles');
Route::view('docs/livewire-components/settings', 'docs.livewire-components.settings')->name('docs.livewire-components.settings');
Route::view('docs/livewire-components/sent-emails', 'docs.livewire-components.sent-emails')->name('docs.livewire-components.sent-emails');
Route::view('docs/livewire-components/user-menu', 'docs.livewire-components.user-menu')->name('docs.livewire-components.user-menu');
Route::view('docs/livewire-components/users', 'docs.livewire-components.users')->name('docs.livewire-components.users');

Route::view('docs/styles', 'docs.styles')->name('docs.styles');
Route::view('docs/console-commands.clearlog', 'docs.console-commands.clearlog')->name('docs.console-commands.clearlog');
Route::view('docs/console-commands.makedatabase', 'docs.console-commands.makedatabase')->name('docs.console-commands.makedatabase');

Route::middleware(['web', 'guest'])->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    //Route::get('register', [RegisterController::class, 'index'])->name('register');
    //Route::post('register', [RegisterController::class, 'store']);

    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset/{token}', [ResetPasswordController::class, 'reset'])->name('password.reset.update');

    Route::get('join/{token}', [JoinController::class, 'index'])->name('join');
    Route::put('join/{id}', [JoinController::class, 'update'])->name('join.update');
});

Route::middleware(['web', 'auth', 'activeUser', 'IpCheckMiddleware'])->prefix('admin')->group(function () {
    //auth
    Route::get('two-fa', [TwoFaController::class, 'index'])->name('2fa');
    Route::post('two-fa', [TwoFaController::class, 'update'])->name('2fa.update');
    Route::get('twofa-setup', [TwoFaController::class, 'setup'])->name('2fasetup');
    Route::post('twofa-setup', [TwoFaController::class, 'setupUpdate'])->name('2fasetup.update');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', Dashboard::class)->name('admin');

    Route::get('users', Users::class)->name('admin.users.index');
    Route::get('users/{user}/edit', EditUser::class)->name('admin.users.edit');
    Route::get('users/{user}', ShowUser::class)->name('admin.users.show');
});

Route::middleware(['web', 'auth', 'activeUser', 'IpCheckMiddleware'])->prefix('admin')->group(function () {
    Route::get('settings/audit-trails', AuditTrails::class)->name('admin.settings.audit-trails.index');
    Route::get('settings/sent-emails', SentEmails::class)->name('admin.settings.sent-emails');
    Route::get('settings/sent-emails-body/{id}', SentEmailsBody::class)->name('admin.settings.sent-emails.body');
});

Route::middleware(['web', 'auth', 'activeUser', 'IpCheckMiddleware', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('settings/system-settings', Settings::class)->name('admin.settings');
    Route::get('settings/roles', Roles::class)->name('admin.settings.roles.index');
    Route::get('settings/roles/{role}/edit', Edit::class)->name('admin.settings.roles.edit');
});

Route::middleware(['web', 'auth', 'activeUser', 'IpCheckMiddleware', 'role:developer'])->group(function () {
    Route::get('admin/developer/reference', Reference::class)->name('admin.developer.reference');
});
