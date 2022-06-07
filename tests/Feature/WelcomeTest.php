<?php

test('can see welcome page')
    ->get('/')
    ->assertOk();

test('can see get started text on welcome page')
    ->get('/')
    ->assertSeeText('Get Started');

test('can see dashboard text on welcome page when logged in')
    ->authenticate()
    ->get('/')
    ->assertSeeText('Dashboard');
