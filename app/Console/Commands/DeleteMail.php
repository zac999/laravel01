<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '删除邮件';

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
        return 0;
    }
}
