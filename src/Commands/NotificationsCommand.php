<?php

namespace Homeful\Notifications\Commands;

use Illuminate\Console\Command;

class NotificationsCommand extends Command
{
    public $signature = 'notifications';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
