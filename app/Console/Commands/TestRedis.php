<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\RedisFirst;

class TestRedis extends Command
{
    protected $signature = 'TestRedis';

    protected $description = 'test connect and use redis database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        echo "hi\n";
        \Log::info('hi');
        \Queue::pushOn("test", new RedisFirst());
    }
}
