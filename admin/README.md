# Bee Sweet

## Công Nghệ Sử Dụng


| Name | Version | Docs |
| --- | --- | --- |
| PHP | 8.0 | https://www.php.net/manual/ja/ |
| Laravel | 8x | https://laravel.com/docs/8.x |



## Mô Tả Thư Mục Dự Án

- `app/Http/Controllers`
- `app/Models`
- `Modules`
    - `Admin`
    - `Web`
    - `Api`
- `app/Services`
    - `Domains`
        - `Admin`
        - `Web`
        - `Api`
    - `Infs`
    - `Untils`
- `app/Traits`
    - `ApiResponse`  
- `routes`

## Các Bước Cài Đặt Project
- 1. Clone project: `git clone git@gitlab.pirago.work:web-project/bee-sweet.git`
- 2. `composer install`
- 3. Copy file .env.example => .env và cấu hình database,... cho phù hợp
- 4. `php artisan key:generate`
- 5. Clear cache: `php artisan cache:clear` và `php artisan config:clear` và `php artisan config:cache`
- 6. `php artisan passport:install`
- 6. `php artisan migrate`
- 7. `php artisan db:seed`
- 8. `npm install` và `npm run dev`
- 9. Khi code với Vue chạy `npm run watch`
- 10. Để chạy queue: `php artisan queue:work` hoặc `php artisan queue:listen`

### File .env
`.env` copy từ `.env.example`

**Cài Đặt .env mẫu**
> Lưu ý các cài đặt về mail và QUEUE_CONNECTION=database

```dotenv
# Basic
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:WdvsXcfsIahVvA0ZQnznZCzgWAEh27pCCBCdzsGQJqc=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
VUE_APP_LOG_LEVEL=debug

# My SQL
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bee-sweet
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
