# О преокте

Это проект сайта библиотеки для студентов и преподавателей

# Установка

## Требования
- php 8.2  
- mysql
- composer 
- npm 

## Процесс установки
- скопируйте .env.example в .env и настройте подключение к бд и APP_URL
- composer i
- php artisan key:generate
- npm i
- npm run build
- php artisan migrate
- php artisan db:seed // для прода
- php artisan db:seed --class=DevSeeder // для среды разработки
- php artisan storage:link
