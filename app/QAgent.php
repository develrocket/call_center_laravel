<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QueueStat as QueueStat;

class QAgent extends Model
{
    //
    protected $primaryKey = 'agent_id';

    protected $table = 'qagent';

    public function qstats() {
        return $this->hasMany(QueueStat::class, 'qagent');
    }
}
