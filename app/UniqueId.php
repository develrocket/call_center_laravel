<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QueueStat as QueueStat;
use App\QueueStatMV as QueueStatMV;
use App\Recording as Recording;

class UniqueId extends Model
{
    //
    protected $primaryKey = 'uniqueid';

    protected $table = 'uniqueids';

    public function qstats() {
        return $this->hasMany(QueueStat::class, 'uniqueid');
    }

    public function qstatsmv() {
        return $this->hasMany(QueueStatMV::class, 'uniqueid');
    }

    public function recordings() {
        return $this->hasMany(Recording::class, 'uniqueid');
    }

}
