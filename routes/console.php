<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Spatie\Sitemap\SitemapGenerator;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('sitemap:generate', function () {
    SitemapGenerator::create('https://millistech.com/')
        ->writeToFile(public_path('sitemap.xml'));

    $this->info('Sitemap written to public/sitemap.xml');
});
