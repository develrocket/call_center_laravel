<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class QueryTableThree extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'query:i_uniqueid_f_recordings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Insert Data to uniqueids from recordings';

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
        DB::statement("INSERT INTO uniqueids (uniqueid) SELECT DISTINCT uniqueid FROM recordings WHERE NOT EXISTS (SELECT * FROM uniqueids WHERE recordings.uniqueid = uniqueids.uniqueid )");
    }
}
