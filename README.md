1. Unzip 

2. Composer install

composer install
3. create database 
brandtask

4. Add Database Credential like yours in `.env`

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=brandtask
DB_USERNAME=root
DB_PASSWORD=

5. migrate
php artisan migrate

4. Run Project inside that directory - 

php artisan serve

5. Open in Browser 

http://localhost:8000


