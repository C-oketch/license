
### Add a new Resource
1. Create desired resource by running
 ```bash
## Create Comment model with migration and resource controller
php artisan make:model Comment -m -c --resource
```
2. Register route for it.
```php
Route::group( ['middleware' => ['auth']], function() {
    ...
    Route::resource('comments', 'CommentController');
});
```

3. Now implement your controllers methods and use the `Authorizable` trait
```php
use App\Authorizable;

class CommentController extends Controller
{
    use Authorizable;
    ...
```

4. Now add the permissions for this new `Comment` model.
```bash
php artisan auth:permission Comment
```

That's it, you have added new resource controller which have full access control by laravel permissions.

 ### auth:permission command
 This command can be user to add or remove permission for a given model

 ```bash
## add permission
php artisan auth:permission Comment

## remove permissions
php artisan auth:permission Comment --remove
```

<!-- https://github.com/C-oketch/license
C-oketch
1Moketch1

Admi : ncummings@example.org
User : evangeline62@example.org
Pswd : secret -->
