# Project Setup (local / Windows)

Follow these steps to get this project running locally on Windows.

Prerequisites:
- PHP 8.0+ with the `openssl` extension enabled (edit `php.ini` to enable `extension=openssl`).
- Composer
- (Optional) SQLite or MySQL

Quick setup (PowerShell):

```powershell
composer install
Copy-Item .env.example .env
php artisan key:generate
New-Item -ItemType File -Path database/database.sqlite -Force
php artisan migrate --seed
php artisan serve
# Open http://127.0.0.1:8000
```

Run tests (Windows):

```powershell
vendor\bin\phpunit.bat
```

Troubleshooting:

If you see `Call to undefined function Illuminate\\Encryption\\openssl_cipher_iv_length()`, enable the PHP `openssl` extension in your `php.ini` (uncomment or add `extension=openssl`) and restart your CLI/server.

If you'd like automation scripts (PowerShell) for these steps, tell me and I can add them.
