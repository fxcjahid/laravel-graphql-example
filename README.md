
![laravel-grapql-example-11](https://github.com/fxcjahid/laravel-graphql-example/assets/33903532/b6394536-bae2-4918-84bd-0b97983de04b)

## Setup Requirements

- Composer
- PHP ^8.1
- Git Bash
- Xampp
- vscode

just, Follow few steps to complete the Laravel GraphQL Example

## Step 1

Run the git clone

` git clone https://github.com/fxcjahid/laravel-graphql-example.git `

## Step 2

after downloading the project file.  Open the project file with vscode and run the terminal from topbar

`composer install`

### Step 3

after completing the project's required package. You need to connect your database.
Please run xampp and go to `phpmyadmin`  and create a database.

then, rename `.env.example`  to `.env` You have necessary to remove the `.example` word

and, now open .env file and paste your database name inside
`DB_DATABASE=Your Database Name`

*TIPS:  if you have a password then paste also password*

## Step 4

After completing that. Run the database migration

`php artisan migrate`

then, run also database seed

`php artisan db:seed`

## Last step

This time ready to run Laravel graphQL

`php artisan serve`

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
