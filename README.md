#This is blog system build with laravel and tailwind


#1. Clone GitHub repo for this project locally
git clone linktogithubrepo.com/blog

#2. cd into your project
cd blog


#3. Install Composer Dependencies
composer install


#4. Install NPM Dependencies
npm install


#5. Create a copy of your .env file
cp .env.example .env


#6. Generate an app encryption key
php artisan key:generate


#7. Create an empty database for our application called blog


#8. In the .env file, add database information to allow Laravel to connect to the database
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.


#9. Migrate the database
php artisan migrate

#11. Seed the database
php artisan db:seed