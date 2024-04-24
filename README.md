# Laravel Nova Roles and Permissions
This package allows separating roles for admins and other types of users while stored in the same users table. Additionally, it provides functionality for managing permissions (reader/editor) for the admins of a project powered by Laravel Nova.
## Screenshots
![NovaRolesAndPermissions](/docs/nova-roles-and-permissions.png)
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
