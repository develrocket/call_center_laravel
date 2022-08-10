<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class QueryTableTwo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'query:i_uniqueid_f_queue_stats_mv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert Data to uniqueids from queue_stats_mv';

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
     * @return mixed
     */
    public function handle()
    {
        //
        DB::statement("INSERT INTO uniqueids (uniqueid) SELECT DISTINCT uniqueid FROM queue_stats_mv WHERE NOT EXISTS (SELECT * FROM uniqueids WHERE queue_stats_mv.uniqueid = uniqueids.uniqueid )");
    }
}
