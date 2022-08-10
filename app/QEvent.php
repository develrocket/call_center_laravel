<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QueueStat as QueueStat;

class QEvent extends Model
{
    //
    protected $primaryKey = 'event_id';

    protected $table = 'qevent';

    public function qstats() {
        return $this->hasMany(QueueStat::class, 'qevent');
    }
}
