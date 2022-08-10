<?php

use Illuminate\Database\Seeder;
use App\QueueStat as QueueStat;
use App\UniqueId as UniqueId;
use Illuminate\Support\Facades\DB;

class UniqueidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uniqueids = QueueStat::pluck('uniqueid');

        foreach($uniqueids as $uniqueid) {
            if (UniqueId::where('uniqueid', $uniqueid)->get()->count() == 0) {
                DB::table('uniqueids')->insert([
                    'uniqueid' => $uniqueid,
                ]);
            }
        }


    }
}
