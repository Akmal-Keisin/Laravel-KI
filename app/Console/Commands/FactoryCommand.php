<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class FactoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'factory:user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Factory of user';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::factory(10)->create();
        return $this->info('User Factory Running Successfully');
    }
}
