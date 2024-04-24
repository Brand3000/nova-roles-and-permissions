# Laravel Nova Roles and Permissions
This package allows separating roles for admins and other types of users while stored in the same users table. Additionally, it provides functionality for managing permissions (reader/editor) for the admins of a project powered by Laravel Nova.

## Screenshots
![NovaRolesAndPermissions](/docs/nova-roles-and-permissions.png)

## Requirements
Laravel Nova 4

## Installation

### Install the package using composer

```bash
composer require brand3000/nova-roles-and-permissions
```

### Publish the migration, models, resources, and policies

Be aware that the package will create/overwrite the next files:

- Models:
    - app/Models/Admin.php
    - app/Models/User.php
- Nova resources:
    - app/Nova/Admin.php
    - app/Nova/User.php
- Policies:
    - app/Policies/AdminPolicy.php
    - app/Policies/UserPolicy.php
    - app/Policies/CorePermissions.php

```bash
php artisan vendor:publish --provider="Brand3000\NovaRolesAndPermissions\Publisher" --force
```

### Run new migration
```bash
php artisan migrate
```

### Set administrators
Go to your database, find the users table and choose administrators by setting the role_admin column into 1. Additionally, set the supar_admin column into 1 for those who are eligible.
If you have different types of users in your project, feel free to add more role_ columns for future development.

### During development
During development, you have to add all the resources you want to be managed into the array $booleanOptions of the fields() function in the app/Nova/Admin.php nova resource.

### Before switching a project to the production state
Go into the NovaServiceProvider.php file and add the next logic into the gate() function
```php
Gate::define('viewNova', function ($user) {
    return $user->role_admin;
});
```