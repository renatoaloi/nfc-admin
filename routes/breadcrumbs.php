<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('login', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Login', route('login'));
});

Breadcrumbs::register('register', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Register', route('register'));
});

Breadcrumbs::register('password.email', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Request Password Reset', route('password.email'));
});

Breadcrumbs::register('password.reset', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Password Reset', route('password.reset', ''));
});

Breadcrumbs::register('user', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('User', route('user'));
});

Breadcrumbs::register('user.edit', function($breadcrumbs, $id) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('User', route('user'));
  $breadcrumbs->push('Edit', route('user.edit', [ 'id' => $id]));
});

Breadcrumbs::register('role', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Role', route('role'));
});

Breadcrumbs::register('menu', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Menu', route('menu'));
});

Breadcrumbs::register('menu.create', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Menu', route('menu'));
  $breadcrumbs->push('Create New', route('menu.create'));
});

Breadcrumbs::register('menu.edit', function($breadcrumbs, $id) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Menu', route('menu'));
  $breadcrumbs->push('Edit', route('menu.edit', [ 'id' => $id]));
});

Breadcrumbs::register('menu.roles', function($breadcrumbs, $id) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Menu', route('menu'));
  $breadcrumbs->push('Roles', route('menu.roles', [ 'id' => $id]));
});

Breadcrumbs::register('produto', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Produtos', route('produto'));
});

Breadcrumbs::register('produto.create', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Produtos', route('produto'));
  $breadcrumbs->push('Create New', route('produto.create'));
});

Breadcrumbs::register('produto.edit', function($breadcrumbs, $id) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Produtos', route('produto'));
  $breadcrumbs->push('Edit', route('produto.edit', [ 'id' => $id]));
});

Breadcrumbs::register('compra', function($breadcrumbs) {
  $breadcrumbs->push('Home', route('home'));
  $breadcrumbs->push('Compras', route('compra'));
});