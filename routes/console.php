<?php

use App\Console\Commands\MakeDto;
use App\Console\Commands\MakeInterface;
use App\Console\Commands\MakeService;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


//~ registering make interface class command
Artisan::command('make:interface {name}', function ($name) {
    $this->call(MakeInterface::class, ['name' => $name]);
});

Artisan::command('make:interface {name}', function ($name) {
    $this->call(MakeInterface::class, ['name' => $name]);
});

Artisan::call('app:send-event-reminders');
return response()->json(['message' => 'Event reminders sent successfully.']);