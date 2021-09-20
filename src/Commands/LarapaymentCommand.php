<?php

namespace Callmehalpha\Larapayment\Commands;

use Illuminate\Console\Command;

class LarapaymentCommand extends Command
{
    public $signature = 'larapayment';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
