<?php

namespace The3LabsTeam\LaravelCookieAuth\Commands;

use Illuminate\Console\Command;

class LaravelCookieAuthCommand extends Command
{
    public $signature = 'laravel-cookie-auth';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
