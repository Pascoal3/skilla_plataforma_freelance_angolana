<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:expire-inactive-jobs')]
#[Description('Command description')]
class ExpireInactiveJobs extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
