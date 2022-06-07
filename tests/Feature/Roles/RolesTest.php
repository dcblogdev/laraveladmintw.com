<?php

use App\Models\Roles\Role;

beforeEach(function () {
    $this->user = $this->authenticate();
});

test('can see roles page with admin role', function () {
    $this->get(route('admin.settings.roles.index'))->assertOk();
});

test('cannot see roles page with user role', function () {
    $this->authenticate('user');
    $this->get(route('admin.settings.roles.index'))->assertStatus(302);
});

test('can see edit role', function () {
    $role = Role::where('name', 'admin')->first();
    $this->get(route('admin.settings.roles.edit', $role))->assertOk();
});
