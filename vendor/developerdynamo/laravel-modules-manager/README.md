# laravel-modules-manager
Enable modules management in laravel application

#Install
Add follow line into "require" section in your composer.json:

```json
"developerdynamo/laravel-modules-manager": "0.*"
```

Update composer with command:

```json
"composer update"
```

##Add service provider

```php
'providers' => [
	...
	DeveloperDynamo\Modular\ModulesServiceProvider::class,
],
```

#Artisan command
There is a built-in command to generate module folder structure automatically.

##Generate new module

```php
php artisan make:module name
```

Generates a ready to use module in the app/Modules folder.

##Folder Structure
```
app/
    |-- Modules/
        |-- Test/
            |-- Controllers/
                |-- TestController.php
            |-- Models/
                |-- Test.php
            |-- Providers/
                |-- TestServiceProvider.php
            |-- Requests/
                |-- ExampleRequest.php
            |-- Translations/
                |-- example.php
            |-- Views/
                |-- index.blade.php
            |-- routes.php
```

##Test
You can check correct route integration opening:

```
http://localhost/[your-laravel-path]/[MODULE_NAME]
```

#Available Commands

##Controllers
```
php artisan module:controller [ModuleName]@[ControllerClassName]
```

##Models
```
php artisan module:model [ModuleName]@[ModelClassName]
```

##Policy
```
php artisan module:policy [ModuleName]@[PolicyClassName]
```

##Requests
```
php artisan module:request [ModuleName]@[RequestClassName]
```