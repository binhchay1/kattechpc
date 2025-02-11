<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Cache;

class ClearCacheRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-cache-redis';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear cache redis';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Cache::store(env('REDIS_DEFAULT_CONNECT'))->flush();
    }
}
