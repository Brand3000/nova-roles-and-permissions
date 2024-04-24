# Laravel Nova Roles and Permissions

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
php artisan vendor:publish --provider="Brand3000\NovaRolesAndPermissions\Publisher"
```
