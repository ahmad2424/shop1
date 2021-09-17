<?php

namespace App\Console\Commands\Clear;

use Illuminate\Console\Command;

class FreshOrder extends Command
{

    protected $signature = 'fresh:orders';

    protected $description = 'delete orders';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        $this->info(" orders Deleted");

        return 1;
    }

}
