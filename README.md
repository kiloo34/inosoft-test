### Setup 

git clone https://github.com/kiloo34/inosoft-test.git  
composer install 
php artisan key:generate 
buat database MongoDb untuk app-nya 
copy file .env.example ke .env perbarui file .env  
composer dump-autoload 
php artisan migrate --seed 
npm install 
php artisan serve