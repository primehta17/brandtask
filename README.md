1. git clone https://github.com/primehta17/brandtask.git
2. cd brandtask
3. Composer install

composer install
3. create database 
brandtask

4. copy .env.example and rename it .env
5. Add Database Credential like yours in `.env`

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=brandtask
DB_USERNAME=root
DB_PASSWORD=

6. migrate tables
php artisan migrate

7. Run Project inside that directory - 

php artisan serve

8. Open in Browser 

http://localhost:8000


