<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QueueStat as QueueStat;

class QName extends Model
{
    //
    protected $primaryKey = 'queue_id';

    protected $table = 'qname';

    public function qstats() {
        return $this->hasMany(QueueStat::class, 'qname');
    }
}
