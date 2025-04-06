<?php

namespace ThinkliveId\LiveEvent\Commands;

use Illuminate\Console\Command;

class LiveEventCommand extends Command
{
  public $signature = 'live:event';

  public $description = 'Live event';

  public function handle(): int
  {
    $this->comment('All done');

    return self::SUCCESS;
  }
}
