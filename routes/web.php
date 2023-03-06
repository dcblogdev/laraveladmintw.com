<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'v3');
Route::view('v2', 'docs.v2.index');
Route::view('v3', 'docs.v3.index');

Route::prefix('v2/docs')->group(function(){

    Route::view('/', 'docs.v2.getting-started.introduction')->name('docs.v2.introduction');
    Route::view('requirements', 'docs.v2.getting-started.requirements')->name('docs.v2.requirements');
    Route::view('changelog', 'docs.v2.getting-started.changelog')->name('docs.v2.changelog');
    Route::view('installation', 'docs.v2.getting-started.installation')->name('docs.v2.installation');
    Route::view('questions', 'docs.v2.getting-started.questions')->name('docs.v2.questions');

    Route::view('authentication', 'docs.v2.basic-usage.authentication')->name('docs.v2.basic-usage.authentication');
    Route::view('configuration', 'docs.v2.basic-usage.configuration')->name('docs.v2.basic-usage.configuration');
    Route::view('layouts', 'docs.v2.basic-usage.layouts')->name('docs.v2.basic-usage.layouts');
    Route::view('middleware', 'docs.v2.basic-usage.middleware')->name('docs.v2.basic-usage.middleware');
    Route::view('service-providers', 'docs.v2.basic-usage.service-providers')->name('docs.v2.basic-usage.service-providers');
    Route::view('helpers', 'docs.v2.basic-usage.helpers')->name('docs.v2.basic-usage.helpers');
    Route::view('tests', 'docs.v2.basic-usage.tests')->name('docs.v2.basic-usage.tests');

    Route::view('blade-components/2col', 'docs.v2.blade-components.2col')->name('docs.v2.blade-components.2col');
    Route::view('blade-components/auth-card', 'docs.v2.blade-components.auth-card')->name('docs.v2.blade-components.auth-card');
    Route::view('blade-components/button', 'docs.v2.blade-components.button')->name('docs.v2.blade-components.button');
    Route::view('blade-components/dropdown', 'docs.v2.blade-components.dropdown')->name('docs.v2.blade-components.dropdown');
    Route::view('blade-components/forms', 'docs.v2.blade-components.forms')->name('docs.v2.blade-components.forms');
    Route::view('blade-components/modal', 'docs.v2.blade-components.modal')->name('docs.v2.blade-components.modal');
    Route::view('blade-components/modal', 'docs.v2.blade-components.modal')->name('docs.v2.blade-components.modal');
    Route::view('blade-components/navigation', 'docs.v2.blade-components.navigation')->name('docs.v2.blade-components.navigation');
    Route::view('blade-components/tabs', 'docs.v2.blade-components.tabs')->name('docs.v2.blade-components.tabs');

    Route::view('livewire-components/audit-trails', 'docs.v2.livewire-components.audit-trails')->name('docs.v2.livewire-components.audit-trails');
    Route::view('livewire-components/dashboard', 'docs.v2.livewire-components.dashboard')->name('docs.v2.livewire-components.dashboard');
    Route::view('livewire-components/help-menu', 'docs.v2.livewire-components.help-menu')->name('docs.v2.livewire-components.help-menu');
    Route::view('livewire-components/notifications', 'docs.v2.livewire-components.notifications')->name('docs.v2.livewire-components.notifications');
    Route::view('livewire-components/global-search', 'docs.v2.livewire-components.global-search')->name('docs.v2.livewire-components.global-search');
    Route::view('livewire-components/roles', 'docs.v2.livewire-components.roles')->name('docs.v2.livewire-components.roles');
    Route::view('livewire-components/settings', 'docs.v2.livewire-components.settings')->name('docs.v2.livewire-components.settings');
    Route::view('livewire-components/sent-emails', 'docs.v2.livewire-components.sent-emails')->name('docs.v2.livewire-components.sent-emails');
    Route::view('livewire-components/user-menu', 'docs.v2.livewire-components.user-menu')->name('docs.v2.livewire-components.user-menu');
    Route::view('livewire-components/users', 'docs.v2.livewire-components.users')->name('docs.v2.livewire-components.users');

    Route::view('styles', 'docs.v2.styles')->name('docs.v2.styles');
    Route::view('console-commands.clearlog', 'docs.v2.console-commands.clearlog')->name('docs.v2.console-commands.clearlog');
    Route::view('console-commands.makedatabase', 'docs.v2.console-commands.makedatabase')->name('docs.v2.console-commands.makedatabase');
});

Route::prefix('v3/docs')->group(function(){

    Route::view('/', 'docs.v3.getting-started.introduction')->name('docs.v3.introduction');
    Route::view('requirements', 'docs.v3.getting-started.requirements')->name('docs.v3.requirements');
    Route::view('changelog', 'docs.v3.getting-started.changelog')->name('docs.v3.changelog');
    Route::view('installation', 'docs.v3.getting-started.installation')->name('docs.v3.installation');
    Route::view('questions', 'docs.v3.getting-started.questions')->name('docs.v3.questions');

    Route::view('authentication', 'docs.v3.basic-usage.authentication')->name('docs.v3.basic-usage.authentication');
    Route::view('configuration', 'docs.v3.basic-usage.configuration')->name('docs.v3.basic-usage.configuration');
    Route::view('layouts', 'docs.v3.basic-usage.layouts')->name('docs.v3.basic-usage.layouts');
    Route::view('middleware', 'docs.v3.basic-usage.middleware')->name('docs.v3.basic-usage.middleware');
    Route::view('service-providers', 'docs.v3.basic-usage.service-providers')->name('docs.v3.basic-usage.service-providers');
    Route::view('helpers', 'docs.v3.basic-usage.helpers')->name('docs.v3.basic-usage.helpers');
    Route::view('tests', 'docs.v3.basic-usage.tests')->name('docs.v3.basic-usage.tests');

    Route::view('blade-components/2col', 'docs.v3.blade-components.2col')->name('docs.v3.blade-components.2col');
    Route::view('blade-components/auth-card', 'docs.v3.blade-components.auth-card')->name('docs.v3.blade-components.auth-card');
    Route::view('blade-components/button', 'docs.v3.blade-components.button')->name('docs.v3.blade-components.button');
    Route::view('blade-components/dropdown', 'docs.v3.blade-components.dropdown')->name('docs.v3.blade-components.dropdown');
    Route::view('blade-components/forms', 'docs.v3.blade-components.forms')->name('docs.v3.blade-components.forms');
    Route::view('blade-components/modal', 'docs.v3.blade-components.modal')->name('docs.v3.blade-components.modal');
    Route::view('blade-components/modal', 'docs.v3.blade-components.modal')->name('docs.v3.blade-components.modal');
    Route::view('blade-components/navigation', 'docs.v3.blade-components.navigation')->name('docs.v3.blade-components.navigation');
    Route::view('blade-components/tabs', 'docs.v3.blade-components.tabs')->name('docs.v3.blade-components.tabs');

    Route::view('livewire-components/audit-trails', 'docs.v3.livewire-components.audit-trails')->name('docs.v3.livewire-components.audit-trails');
    Route::view('livewire-components/dashboard', 'docs.v3.livewire-components.dashboard')->name('docs.v3.livewire-components.dashboard');
    Route::view('livewire-components/help-menu', 'docs.v3.livewire-components.help-menu')->name('docs.v3.livewire-components.help-menu');
    Route::view('livewire-components/notifications', 'docs.v3.livewire-components.notifications')->name('docs.v3.livewire-components.notifications');
    Route::view('livewire-components/global-search', 'docs.v3.livewire-components.global-search')->name('docs.v3.livewire-components.global-search');
    Route::view('livewire-components/roles', 'docs.v3.livewire-components.roles')->name('docs.v3.livewire-components.roles');
    Route::view('livewire-components/settings', 'docs.v3.livewire-components.settings')->name('docs.v3.livewire-components.settings');
    Route::view('livewire-components/sent-emails', 'docs.v3.livewire-components.sent-emails')->name('docs.v3.livewire-components.sent-emails');
    Route::view('livewire-components/user-menu', 'docs.v3.livewire-components.user-menu')->name('docs.v3.livewire-components.user-menu');
    Route::view('livewire-components/users', 'docs.v3.livewire-components.users')->name('docs.v3.livewire-components.users');

    Route::view('styles', 'docs.v3.styles')->name('docs.v3.styles');
    Route::view('console-commands.clearlog', 'docs.v3.console-commands.clearlog')->name('docs.v3.console-commands.clearlog');
    Route::view('console-commands.makedatabase', 'docs.v3.console-commands.makedatabase')->name('docs.v3.console-commands.makedatabase');
});