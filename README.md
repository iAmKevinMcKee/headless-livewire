## Headless Livewire

This is the demo project from the Laracasts video

### Installation

Clone the repo locally:

`git clone https://github.com/iAmKevinMcKee/headless-livewire.git`

Go to the directory where you cloned your application and run the following commands:

```
composer install
```
Update your `.env` file to connect a local database.
```
php artisan migrate:fresh --seed
php artisan key:generate
npm install && npm run dev
```

- Navigate to `/login` and enter credentials `admin@admin.com` / `password`
- Navigate to `/videos/1` and interact with the video
