<?php

use App\Jobs\CustomeQueueJob;
use App\Jobs\DefaultQueueJob;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('customeQueueCommand', function() {
    CustomeQueueJob::dispatch()->onQueue('custome_queue');
});


Artisan::command('DefaultQueueCommand', function() {
    DefaultQueueJob::dispatch()->onQueue('default');
});
