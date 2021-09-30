<?php

namespace Z\FormBuddy\Commands;

use Illuminate\Console\Command;

class FormBuddyCommand extends Command
{
    public $signature = 'formbuddy';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
