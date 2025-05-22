
# Laravel Zoom Integration

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

باكدج Laravel بسيطة وسهلة للاندماج مع Zoom Meeting API. بتسمحلك تعرض ميتنجات Zoom داخل موقعك (داخل iframe)، وكمان تحمل تسجيلات الميتنجات تلقائيًا لمسار معين عند الانتهاء.

## المميزات

- عرض ميتنج Zoom داخل موقع Laravel باستخدام iframe.
- تحميل تلقائي لتسجيلات الميتنجات على السيرفر.
- أوامر Artisan جاهزة لتحميل التسجيلات.
- تكامل سلس مع Laravel 12.
- دعم autoloading و service provider تلقائي.
- ملف إعدادات قابل للتخصيص (config/zoom.php).

## المتطلبات

- PHP >= 8.2
- Laravel 12
- حساب Zoom API مع صلاحيات JWT API Key و Secret

## التثبيت

أضف الباكدج عبر composer:

```
composer require commacode/laravel-zoom-integration
```

إذا ما اشتغلش الـ auto-discovery، سجل الـ Service Provider في `config/app.php` كالتالي:

```php
'providers' => [
    Commacode\ZoomIntegration\Providers\ZoomServiceProvider::class,
],
```

انشر إعدادات الباكدج باستخدام الأمر:

```
php artisan vendor:publish --tag=zoom-config
```

عدّل ملف الإعدادات `config/zoom.php` وضع بيانات Zoom API (JWT) كما يلي:

```php
return [
    'api_key' => env('ZOOM_API_KEY', ''),
    'api_secret' => env('ZOOM_API_SECRET', ''),
    'recordings_path' => storage_path('app/zoom-recordings'),
];
```

أضف المتغيرات إلى ملف `.env`:

```
ZOOM_API_KEY=your_zoom_jwt_api_key
ZOOM_API_SECRET=your_zoom_jwt_api_secret
```

## الاستخدام

لعرض ميتنج داخل صفحة Blade:

```blade
<x-zoom-meeting :meetingId="$meetingId" />
```

لتشغيل تحميل تسجيلات الميتنجات تلقائيًا:

```
php artisan zoom:download-recordings
```

يمكنك إضافة هذا الأمر في الـ cron job ليعمل تلقائيًا.

## تطوير الباكدج

للتعديل أو الإضافة:

```
git clone https://github.com/USERNAME/laravel-zoom-integration.git
cd laravel-zoom-integration
composer install
```

## الدعم والمساهمة

إذا واجهتك أي مشكلة أو لديك اقتراح، افتح issue أو PR على GitHub.

## الترخيص

MIT © Commacode
