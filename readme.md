# ToDo List(Tutorial)
### Just a basic CRUD interface I made, along with a setup tutorial I wrote which can be used for future references.

### Requirements
* [Composer](https://getcomposer.org/download/)
* A VM environment like 'homestead' to host it on (I ended up used [xampp](https://www.apachefriends.org/index.html) cause of homestead's stupidly slow server download bandwidth)
* [VC++ redist 2015](https://www.microsoft.com/en-in/download/details.aspx?id=48145)
* A good Text Editor ([Atom](https://atom.io)/[VSCode](https://code.visualstudio.com)/[Sublime](https://www.sublimetext.com))

## First time setup 
Steps ( For admin privileges, start Powershell in admin mode or if Unix use `$ sudo` elevation)

* After installing requirements, setup laravel's global installer `$ composer global require laravel/insaller`
* Go to the project folder and grab the project dependancies with `$ composer create-project --prefer-dist laravel/laravel <projectname>`
* cd into projcet folder with `$ cd <projectname>`
* Setup the ENVIRONMENT variables in the `.env` file. Create one if it's absent.
* Use `$ php artisan serve` to host the default Laravel app at localhost:8000
* use `$ php artisan make:migration <migrationname>` to create migrations which define the schema of the different tables in the database.
  - use `$ php artisan migrate` to migrate these changes over to the database
* use `$ php artisan make:controller <controllername>` to generate a controller file in the app/HTTP/Controller directory
* Make app changes as required  

## Setting up a laravel project/app from github
These are some general steps to setup a laravel project from git on your local environment
I'll use my project as an example (be sure to setup git and the other requirements mentioned above on your local machine before hand)

* clone from git using `$ git clone https://github.com/spell1612/todo.git <foldername>` (Foldername optional. Defaults to repo name)
* cd into folder with `$ cd <foldername>` or `$ cd todo` by default
* create new env file by using `$ cp .env.example .env`
* grab the dependancies with `$ composer update`
  - dependancies can be defined in the composer.json file
* migrate the db changes using `$ php artisan migrate`
* if the app has default db values defined in the database/seed directory, use `$ php artisan db:seed` to seed them into the database
* `$ php artisan serve` to run the app at localhost:8000
