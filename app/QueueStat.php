<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QName as QName;
use App\QAgent as QAgent;
use App\QEvent as QEvent;

class QueueStat extends Model
{
    //
    protected $table = 'queue_stats';

    public function qname() {
        return $this->belongsTo(QName::class, 'qname');
    }

    public function qagent() {
        return $this->belongsTo(QAgent::class, 'qagent');
    }

    public function qevent() {
        return $this->belongsTo(QEvent::class, 'qevent');
    }

}
